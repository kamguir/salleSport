<?php


/**
 * Base class that represents a query for the 'lnk_jour_sport' table.
 *
 * 
 *
 * @method     LnkJourSportQuery orderByIdTypeSport($order = Criteria::ASC) Order by the id_type_sport column
 * @method     LnkJourSportQuery orderByIdJour($order = Criteria::ASC) Order by the id_jour column
 *
 * @method     LnkJourSportQuery groupByIdTypeSport() Group by the id_type_sport column
 * @method     LnkJourSportQuery groupByIdJour() Group by the id_jour column
 *
 * @method     LnkJourSportQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LnkJourSportQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LnkJourSportQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LnkJourSportQuery leftJoinRefTypeSport($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefTypeSport relation
 * @method     LnkJourSportQuery rightJoinRefTypeSport($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefTypeSport relation
 * @method     LnkJourSportQuery innerJoinRefTypeSport($relationAlias = null) Adds a INNER JOIN clause to the query using the RefTypeSport relation
 *
 * @method     LnkJourSportQuery leftJoinRefJour($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefJour relation
 * @method     LnkJourSportQuery rightJoinRefJour($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefJour relation
 * @method     LnkJourSportQuery innerJoinRefJour($relationAlias = null) Adds a INNER JOIN clause to the query using the RefJour relation
 *
 * @method     LnkJourSport findOne(PropelPDO $con = null) Return the first LnkJourSport matching the query
 * @method     LnkJourSport findOneOrCreate(PropelPDO $con = null) Return the first LnkJourSport matching the query, or a new LnkJourSport object populated from the query conditions when no match is found
 *
 * @method     LnkJourSport findOneByIdTypeSport(int $id_type_sport) Return the first LnkJourSport filtered by the id_type_sport column
 * @method     LnkJourSport findOneByIdJour(int $id_jour) Return the first LnkJourSport filtered by the id_jour column
 *
 * @method     array findByIdTypeSport(int $id_type_sport) Return LnkJourSport objects filtered by the id_type_sport column
 * @method     array findByIdJour(int $id_jour) Return LnkJourSport objects filtered by the id_jour column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseLnkJourSportQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseLnkJourSportQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'LnkJourSport', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LnkJourSportQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LnkJourSportQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LnkJourSportQuery) {
			return $criteria;
		}
		$query = new LnkJourSportQuery();
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
	 * $obj = $c->findPk(array(12, 34), $con);
	 * </code>
	 *
	 * @param     array[$id_type_sport, $id_jour] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    LnkJourSport|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = LnkJourSportPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(LnkJourSportPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    LnkJourSport A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_TYPE_SPORT`, `ID_JOUR` FROM `lnk_jour_sport` WHERE `ID_TYPE_SPORT` = :p0 AND `ID_JOUR` = :p1';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
			$stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new LnkJourSport();
			$obj->hydrate($row);
			LnkJourSportPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
	 * @return    LnkJourSport|array|mixed the result, formatted by the current formatter
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
	 * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
	 * @return    LnkJourSportQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(LnkJourSportPeer::ID_TYPE_SPORT, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(LnkJourSportPeer::ID_JOUR, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LnkJourSportQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(LnkJourSportPeer::ID_TYPE_SPORT, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(LnkJourSportPeer::ID_JOUR, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_type_sport column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdTypeSport(1234); // WHERE id_type_sport = 1234
	 * $query->filterByIdTypeSport(array(12, 34)); // WHERE id_type_sport IN (12, 34)
	 * $query->filterByIdTypeSport(array('min' => 12)); // WHERE id_type_sport > 12
	 * </code>
	 *
	 * @see       filterByRefTypeSport()
	 *
	 * @param     mixed $idTypeSport The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkJourSportQuery The current query, for fluid interface
	 */
	public function filterByIdTypeSport($idTypeSport = null, $comparison = null)
	{
		if (is_array($idTypeSport) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LnkJourSportPeer::ID_TYPE_SPORT, $idTypeSport, $comparison);
	}

	/**
	 * Filter the query on the id_jour column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdJour(1234); // WHERE id_jour = 1234
	 * $query->filterByIdJour(array(12, 34)); // WHERE id_jour IN (12, 34)
	 * $query->filterByIdJour(array('min' => 12)); // WHERE id_jour > 12
	 * </code>
	 *
	 * @see       filterByRefJour()
	 *
	 * @param     mixed $idJour The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkJourSportQuery The current query, for fluid interface
	 */
	public function filterByIdJour($idJour = null, $comparison = null)
	{
		if (is_array($idJour) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LnkJourSportPeer::ID_JOUR, $idJour, $comparison);
	}

	/**
	 * Filter the query by a related RefTypeSport object
	 *
	 * @param     RefTypeSport|PropelCollection $refTypeSport The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkJourSportQuery The current query, for fluid interface
	 */
	public function filterByRefTypeSport($refTypeSport, $comparison = null)
	{
		if ($refTypeSport instanceof RefTypeSport) {
			return $this
				->addUsingAlias(LnkJourSportPeer::ID_TYPE_SPORT, $refTypeSport->getIdTypeSport(), $comparison);
		} elseif ($refTypeSport instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(LnkJourSportPeer::ID_TYPE_SPORT, $refTypeSport->toKeyValue('PrimaryKey', 'IdTypeSport'), $comparison);
		} else {
			throw new PropelException('filterByRefTypeSport() only accepts arguments of type RefTypeSport or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefTypeSport relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LnkJourSportQuery The current query, for fluid interface
	 */
	public function joinRefTypeSport($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefTypeSport');

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
			$this->addJoinObject($join, 'RefTypeSport');
		}

		return $this;
	}

	/**
	 * Use the RefTypeSport relation RefTypeSport object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefTypeSportQuery A secondary query class using the current class as primary query
	 */
	public function useRefTypeSportQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinRefTypeSport($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefTypeSport', 'RefTypeSportQuery');
	}

	/**
	 * Filter the query by a related RefJour object
	 *
	 * @param     RefJour|PropelCollection $refJour The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkJourSportQuery The current query, for fluid interface
	 */
	public function filterByRefJour($refJour, $comparison = null)
	{
		if ($refJour instanceof RefJour) {
			return $this
				->addUsingAlias(LnkJourSportPeer::ID_JOUR, $refJour->getIdJour(), $comparison);
		} elseif ($refJour instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(LnkJourSportPeer::ID_JOUR, $refJour->toKeyValue('PrimaryKey', 'IdJour'), $comparison);
		} else {
			throw new PropelException('filterByRefJour() only accepts arguments of type RefJour or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefJour relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LnkJourSportQuery The current query, for fluid interface
	 */
	public function joinRefJour($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefJour');

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
			$this->addJoinObject($join, 'RefJour');
		}

		return $this;
	}

	/**
	 * Use the RefJour relation RefJour object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefJourQuery A secondary query class using the current class as primary query
	 */
	public function useRefJourQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinRefJour($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefJour', 'RefJourQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     LnkJourSport $lnkJourSport Object to remove from the list of results
	 *
	 * @return    LnkJourSportQuery The current query, for fluid interface
	 */
	public function prune($lnkJourSport = null)
	{
		if ($lnkJourSport) {
			$this->addCond('pruneCond0', $this->getAliasedColName(LnkJourSportPeer::ID_TYPE_SPORT), $lnkJourSport->getIdTypeSport(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(LnkJourSportPeer::ID_JOUR), $lnkJourSport->getIdJour(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // BaseLnkJourSportQuery