<?php


/**
 * Base class that represents a query for the 'ref_plage_horaire' table.
 *
 * 
 *
 * @method     RefPlageHoraireQuery orderByHoraireId($order = Criteria::ASC) Order by the horaire_id column
 * @method     RefPlageHoraireQuery orderByHorairePlage($order = Criteria::ASC) Order by the horaire_plage column
 *
 * @method     RefPlageHoraireQuery groupByHoraireId() Group by the horaire_id column
 * @method     RefPlageHoraireQuery groupByHorairePlage() Group by the horaire_plage column
 *
 * @method     RefPlageHoraireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RefPlageHoraireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RefPlageHoraireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RefPlageHoraireQuery leftJoinLnkPlageHoraireAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkPlageHoraireAdherent relation
 * @method     RefPlageHoraireQuery rightJoinLnkPlageHoraireAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkPlageHoraireAdherent relation
 * @method     RefPlageHoraireQuery innerJoinLnkPlageHoraireAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkPlageHoraireAdherent relation
 *
 * @method     RefPlageHoraire findOne(PropelPDO $con = null) Return the first RefPlageHoraire matching the query
 * @method     RefPlageHoraire findOneOrCreate(PropelPDO $con = null) Return the first RefPlageHoraire matching the query, or a new RefPlageHoraire object populated from the query conditions when no match is found
 *
 * @method     RefPlageHoraire findOneByHoraireId(int $horaire_id) Return the first RefPlageHoraire filtered by the horaire_id column
 * @method     RefPlageHoraire findOneByHorairePlage(string $horaire_plage) Return the first RefPlageHoraire filtered by the horaire_plage column
 *
 * @method     array findByHoraireId(int $horaire_id) Return RefPlageHoraire objects filtered by the horaire_id column
 * @method     array findByHorairePlage(string $horaire_plage) Return RefPlageHoraire objects filtered by the horaire_plage column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefPlageHoraireQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseRefPlageHoraireQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'RefPlageHoraire', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RefPlageHoraireQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RefPlageHoraireQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RefPlageHoraireQuery) {
			return $criteria;
		}
		$query = new RefPlageHoraireQuery();
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
	 * @return    RefPlageHoraire|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = RefPlageHorairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(RefPlageHorairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    RefPlageHoraire A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `HORAIRE_ID`, `HORAIRE_PLAGE` FROM `ref_plage_horaire` WHERE `HORAIRE_ID` = :p0';
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
			$obj = new RefPlageHoraire();
			$obj->hydrate($row);
			RefPlageHorairePeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    RefPlageHoraire|array|mixed the result, formatted by the current formatter
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
	 * @return    RefPlageHoraireQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RefPlageHorairePeer::HORAIRE_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RefPlageHoraireQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RefPlageHorairePeer::HORAIRE_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the horaire_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHoraireId(1234); // WHERE horaire_id = 1234
	 * $query->filterByHoraireId(array(12, 34)); // WHERE horaire_id IN (12, 34)
	 * $query->filterByHoraireId(array('min' => 12)); // WHERE horaire_id > 12
	 * </code>
	 *
	 * @param     mixed $horaireId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefPlageHoraireQuery The current query, for fluid interface
	 */
	public function filterByHoraireId($horaireId = null, $comparison = null)
	{
		if (is_array($horaireId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RefPlageHorairePeer::HORAIRE_ID, $horaireId, $comparison);
	}

	/**
	 * Filter the query on the horaire_plage column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByHorairePlage('fooValue');   // WHERE horaire_plage = 'fooValue'
	 * $query->filterByHorairePlage('%fooValue%'); // WHERE horaire_plage LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $horairePlage The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefPlageHoraireQuery The current query, for fluid interface
	 */
	public function filterByHorairePlage($horairePlage = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($horairePlage)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $horairePlage)) {
				$horairePlage = str_replace('*', '%', $horairePlage);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefPlageHorairePeer::HORAIRE_PLAGE, $horairePlage, $comparison);
	}

	/**
	 * Filter the query by a related LnkPlageHoraireAdherent object
	 *
	 * @param     LnkPlageHoraireAdherent $lnkPlageHoraireAdherent  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefPlageHoraireQuery The current query, for fluid interface
	 */
	public function filterByLnkPlageHoraireAdherent($lnkPlageHoraireAdherent, $comparison = null)
	{
		if ($lnkPlageHoraireAdherent instanceof LnkPlageHoraireAdherent) {
			return $this
				->addUsingAlias(RefPlageHorairePeer::HORAIRE_ID, $lnkPlageHoraireAdherent->getHoraireId(), $comparison);
		} elseif ($lnkPlageHoraireAdherent instanceof PropelCollection) {
			return $this
				->useLnkPlageHoraireAdherentQuery()
				->filterByPrimaryKeys($lnkPlageHoraireAdherent->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByLnkPlageHoraireAdherent() only accepts arguments of type LnkPlageHoraireAdherent or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the LnkPlageHoraireAdherent relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefPlageHoraireQuery The current query, for fluid interface
	 */
	public function joinLnkPlageHoraireAdherent($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('LnkPlageHoraireAdherent');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'LnkPlageHoraireAdherent');
		}

		return $this;
	}

	/**
	 * Use the LnkPlageHoraireAdherent relation LnkPlageHoraireAdherent object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LnkPlageHoraireAdherentQuery A secondary query class using the current class as primary query
	 */
	public function useLnkPlageHoraireAdherentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinLnkPlageHoraireAdherent($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'LnkPlageHoraireAdherent', 'LnkPlageHoraireAdherentQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     RefPlageHoraire $refPlageHoraire Object to remove from the list of results
	 *
	 * @return    RefPlageHoraireQuery The current query, for fluid interface
	 */
	public function prune($refPlageHoraire = null)
	{
		if ($refPlageHoraire) {
			$this->addUsingAlias(RefPlageHorairePeer::HORAIRE_ID, $refPlageHoraire->getHoraireId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseRefPlageHoraireQuery