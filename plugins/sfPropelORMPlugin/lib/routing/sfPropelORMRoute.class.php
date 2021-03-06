<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfObjectRoute represents a route that is bound to PHP object(s).
 *
 * An object route can represent a single object or a list of objects.
 *
 * @package    symfony
 * @subpackage routing
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfObjectRoute.class.php 20784 2009-08-04 20:53:57Z Kris.Wallsmith $
 */
class sfPropelORMRoute extends sfObjectRoute
{
  protected
    $object  = false,
    $objects = false;

  /**
   * Constructor.
   *
   * @param string $pattern       The pattern to match
   * @param array  $defaults      An array of default parameter values
   * @param array  $requirements  An array of requirements for parameters (regexes)
   * @param array  $options       An array of options
   *
   * @see sfRoute
   */
  public function __construct($pattern, array $defaults = array(), array $requirements = array(), array $options = array())
  {
    if (!isset($options['model']))
    {
      throw new InvalidArgumentException(sprintf('You must pass a "model" option for a %s object (%s).', get_class($this), $pattern));
    }

    if (!isset($options['type']))
    {
      throw new InvalidArgumentException(sprintf('You must pass a "type" option for a %s object (%s).', get_class($this), $pattern));
    }

    if (!in_array($options['type'], array('object', 'list')))
    {
      throw new InvalidArgumentException(sprintf('The "type" option can only be "object" or "list", "%s" given (%s).', $options['type'], $pattern));
    }

    parent::__construct($pattern, $defaults, $requirements, $options);
  }

  /**
   * Returns true if the parameters matches this route, false otherwise.
   *
   * @param  mixed  $params  The parameters
   * @param  array  $context The context
   *
   * @return Boolean         true if the parameters matches this route, false otherwise.
   */
  public function matchesParameters($params, $context = array())
  {
    return parent::matchesParameters('object' == $this->options['type'] ? $this->convertObjectToArray($params) : $params);
  }

  /**
   * Generates a URL from the given parameters.
   *
   * @param  mixed   $params    The parameter values
   * @param  array   $context   The context
   * @param  Boolean $absolute  Whether to generate an absolute URL
   *
   * @return string The generated URL
   */
  public function generate($params, $context = array(), $absolute = false)
  {
    return parent::generate('object' == $this->options['type'] ? $this->convertObjectToArray($params) : $params, $context, $absolute);
  }

  /**
   * Gets the object related to the current route and parameters.
   *
   * This method is only accessible if the route is bound and of type "object".
   *
   * @return Object The related object
   */
  public function getObject()
  {
    if (!$this->isBound())
    {
      throw new LogicException('The route is not bound.');
    }

    if ('object' != $this->options['type'])
    {
      throw new LogicException(sprintf('The route "%s" is not of type "object".', $this->pattern));
    }

    if (false !== $this->object)
    {
      return $this->object;
    }

    // check the related object
    $this->object = $this->getQuery()->findOne();

    if (!$this->object && (!isset($this->options['allow_empty']) || !$this->options['allow_empty']))
    {
      throw new sfError404Exception(sprintf('Unable to find the %s object with the following parameters "%s").', $this->options['model'], str_replace("\n", '', var_export($this->filterParameters($this->parameters), true))));
    }

    return $this->object;
  }

  /**
   * Gets the list of objects related to the current route and parameters.
   *
   * This method is only accessible if the route is bound and of type "list".
   *
   * @return array And array of related objects
   */
  public function getObjects()
  {
    if (!$this->isBound())
    {
      throw new LogicException('The route is not bound.');
    }

    if ('list' != $this->options['type'])
    {
      throw new LogicException(sprintf('The route "%s" is not of type "list".', $this->pattern));
    }

    if (false !== $this->objects)
    {
      return $this->objects;
    }

    $this->objects = $this->getQuery()->find();

    if (!count($this->objects) && isset($this->options['allow_empty']) && !$this->options['allow_empty'])
    {
      throw new sfError404Exception(sprintf('No %s object found for the following parameters "%s").', $this->options['model'], str_replace("\n", '', var_export($this->filterParameters($this->parameters), true))));
    }

    return $this->objects;
  }

  protected function getQuery()
  {
    $query = PropelQuery::from($this->options['model']);
    if (isset($this->options['query_methods']))
    {
      foreach ($this->options['query_methods'] as $methodName => $methodParams)
      {
        if(is_array($methodParams))
        {
          call_user_func_array(array($query, $methodName), $methodParams);
        }
        else
        {
          $query->$methodParams();
        }
      }
    }
    $query->filterByArray($this->getModelParameters($this->parameters));
    return $query;
  }

  protected function getModelParameters($parameters)
  {
  	if (!is_array($parameters))
    {
      return $parameters;
    }
    $parameters = $this->filterParameters($parameters);
    $peerName = constant($this->options['model'] . '::PEER');
    $params = array();
    foreach ($this->getRealVariables() as $variable)
    {
    	try
      {
        $column = call_user_func(array($peerName, 'translateFieldName'), $variable, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
      }
      catch (Exception $e)
      {
        $column = sfInflector::camelize($variable);
      }
      $params[$column] = $parameters[$variable];
    }

    return $params;
  }

  protected function filterParameters($parameters)
  {
  	if (!is_array($parameters))
    {
      return $parameters;
    }

    $params = array();
    foreach (array_keys($this->variables) as $variable)
    {
      $params[$variable] = $parameters[$variable];
    }

    return $params;
  }

  protected function convertObjectToArray($object)
  {
    if (!$this->compiled)
    {
      $this->compile();
    }

    if (is_array($object))
    {
      if (!isset($object['sf_subject']))
      {
        return $object;
      }

      $parameters = $object;
      $object = $parameters['sf_subject'];
      unset($parameters['sf_subject']);
    }
    else
    {
      $parameters = array();
    }

    return array_merge($parameters, $this->doConvertObjectToArray($object));
  }

  protected function doConvertObjectToArray($object)
  {
    if (isset($this->options['convert']) || method_exists($object, 'toParams'))
    {
      return parent::doConvertObjectToArray($object);
    }

    $peerName = constant($this->options['model'] . '::PEER');

    $parameters = array();
    foreach ($this->getRealVariables() as $variable)
    {
      try
      {
        $method = 'get'.call_user_func(array($peerName, 'translateFieldName'), $variable, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
      }
      catch (Exception $e)
      {
        $method = 'get'.sfInflector::camelize($variable);
      }

      $parameters[$variable] = $object->$method();
    }

    return $parameters;
  }

  protected function getRealVariables()
  {
    $variables = array();

    foreach (array_keys($this->variables) as $variable)
    {
      if (0 === strpos($variable, 'sf_') || in_array($variable, array('module', 'action')))
      {
        continue;
      }

      $variables[] = $variable;
    }

    return $variables;
  }

  public function __call($name, $arguments)
  {
    if($name == 'get' . $this->options['model'])
    {
      return call_user_func_array(array($this, 'getObject'), $arguments);
    }
    throw new Exception(sprintf('Call to undefined method sfPropelORMRoute::%s.', $name));
  }
}
