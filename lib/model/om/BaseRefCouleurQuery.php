<?php


/**
 * Base class that represents a query for the 'ref_couleur' table.
 *
 * 
 *
 * @method     RefCouleurQuery orderByIdCouleur($order = Criteria::ASC) Order by the id_couleur column
 * @method     RefCouleurQuery orderByNomCouleur($order = Criteria::ASC) Order by the nom_couleur column
 * @method     RefCouleurQuery orderByCode($order = Criteria::ASC) Order by the code column
 *
 * @method     RefCouleurQuery groupByIdCouleur() Group by the id_couleur column
 * @method     RefCouleurQuery groupByNomCouleur() Group by the nom_couleur column
 * @method     RefCouleurQuery groupByCode() Group by the code column
 *
 * @method     RefCouleurQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RefCouleurQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RefCouleurQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RefCouleur findOne(PropelPDO $con = null) Return the first RefCouleur matching the query
 * @method     RefCouleur findOneOrCreate(PropelPDO $con = null) Return the first RefCouleur matching the query, or a new RefCouleur object populated from the query conditions when no match is found
 *
 * @method     RefCouleur findOneByIdCouleur(int $id_couleur) Return the first RefCouleur filtered by the id_couleur column
 * @method     RefCouleur findOneByNomCouleur(string $nom_couleur) Return the first RefCouleur filtered by the nom_couleur column
 * @method     RefCouleur findOneByCode(string $code) Return the first RefCouleur filtered by the code column
 *
 * @method     array findByIdCouleur(int $id_couleur) Return RefCouleur objects filtered by the id_couleur column
 * @method     array findByNomCouleur(string $nom_couleur) Return RefCouleur objects filtered by the nom_couleur column
 * @method     array findByCode(string $code) Return RefCouleur objects filtered by the code column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefCouleurQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseRefCouleurQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'RefCouleur', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RefCouleurQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RefCouleurQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RefCouleurQuery) {
			return $criteria;
		}
		$query = new RefCouleurQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key.
	 * Propel uses the instance pool to skip the database if the object exists.
	 * Go fast if the query is untouched.
	 *
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    RefCouleur|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = RefCouleurPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(RefCouleurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		if ($this->formatter || $this->modelAlias || $this->with || $this->select
		 || $this->selectColumns || $this->asColumns || $this->selectModifiers
		 || $this->map || $this->having || $this->joins) {
			return $this->findPkComplex($key, $con);
		} else {
			return $this->findPkSimple($key, $con);
		}
	}

	/**
	 * Find object by primary key using raw SQL to go fast.
	 * Bypass doSelect() and the object formatter by using generated code.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    RefCouleur A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_COULEUR`, `NOM_COULEUR`, `CODE` FROM `ref_couleur` WHERE `ID_COULEUR` = :p0';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new RefCouleur();
			$obj->hydrate($row);
			RefCouleurPeer::addInstanceToPool($obj, (string) $key);
		}
		$stmt->closeCursor();

		return $obj;
	}

	/**
	 * Find object by primary key.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    RefCouleur|array|mixed the result, formatted by the current formatter
	 */
	protected function findPkComplex($key, $con)
	{
		// As the query uses a PK condition, no limit(1) is necessary.
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKey($key)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKeys($keys)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->format($stmt);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    RefCouleurQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RefCouleurPeer::ID_COULEUR, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RefCouleurQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RefCouleurPeer::ID_COULEUR, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_couleur column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCouleur(1234); // WHERE id_couleur = 1234
	 * $query->filterByIdCouleur(array(12, 34)); // WHERE id_couleur IN (12, 34)
	 * $query->filterByIdCouleur(array('min' => 12)); // WHERE id_couleur > 12
	 * </code>
	 *
	 * @param     mixed $idCouleur The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefCouleurQuery The current query, for fluid interface
	 */
	public function filterByIdCouleur($idCouleur = null, $comparison = null)
	{
		if (is_array($idCouleur) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RefCouleurPeer::ID_COULEUR, $idCouleur, $comparison);
	}

	/**
	 * Filter the query on the nom_couleur column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNomCouleur('fooValue');   // WHERE nom_couleur = 'fooValue'
	 * $query->filterByNomCouleur('%fooValue%'); // WHERE nom_couleur LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nomCouleur The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefCouleurQuery The current query, for fluid interface
	 */
	public function filterByNomCouleur($nomCouleur = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nomCouleur)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nomCouleur)) {
				$nomCouleur = str_replace('*', '%', $nomCouleur);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefCouleurPeer::NOM_COULEUR, $nomCouleur, $comparison);
	}

	/**
	 * Filter the query on the code column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
	 * $query->filterByCode('%fooValue%'); // WHERE code LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $code The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefCouleurQuery The current query, for fluid interface
	 */
	public function filterByCode($code = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($code)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $code)) {
				$code = str_replace('*', '%', $code);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefCouleurPeer::CODE, $code, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     RefCouleur $refCouleur Object to remove from the list of results
	 *
	 * @return    RefCouleurQuery The current query, for fluid interface
	 */
	public function prune($refCouleur = null)
	{
		if ($refCouleur) {
			$this->addUsingAlias(RefCouleurPeer::ID_COULEUR, $refCouleur->getIdCouleur(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseRefCouleurQuery