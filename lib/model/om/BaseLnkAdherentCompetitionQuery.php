<?php


/**
 * Base class that represents a query for the 'lnk_adherent_competition' table.
 *
 * 
 *
 * @method     LnkAdherentCompetitionQuery orderByAdherentId($order = Criteria::ASC) Order by the adherent_id column
 * @method     LnkAdherentCompetitionQuery orderByCompetitionId($order = Criteria::ASC) Order by the competition_id column
 *
 * @method     LnkAdherentCompetitionQuery groupByAdherentId() Group by the adherent_id column
 * @method     LnkAdherentCompetitionQuery groupByCompetitionId() Group by the competition_id column
 *
 * @method     LnkAdherentCompetitionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LnkAdherentCompetitionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LnkAdherentCompetitionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LnkAdherentCompetitionQuery leftJoinTblAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblAdherent relation
 * @method     LnkAdherentCompetitionQuery rightJoinTblAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblAdherent relation
 * @method     LnkAdherentCompetitionQuery innerJoinTblAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the TblAdherent relation
 *
 * @method     LnkAdherentCompetitionQuery leftJoinTblCompetition($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblCompetition relation
 * @method     LnkAdherentCompetitionQuery rightJoinTblCompetition($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblCompetition relation
 * @method     LnkAdherentCompetitionQuery innerJoinTblCompetition($relationAlias = null) Adds a INNER JOIN clause to the query using the TblCompetition relation
 *
 * @method     LnkAdherentCompetition findOne(PropelPDO $con = null) Return the first LnkAdherentCompetition matching the query
 * @method     LnkAdherentCompetition findOneOrCreate(PropelPDO $con = null) Return the first LnkAdherentCompetition matching the query, or a new LnkAdherentCompetition object populated from the query conditions when no match is found
 *
 * @method     LnkAdherentCompetition findOneByAdherentId(int $adherent_id) Return the first LnkAdherentCompetition filtered by the adherent_id column
 * @method     LnkAdherentCompetition findOneByCompetitionId(int $competition_id) Return the first LnkAdherentCompetition filtered by the competition_id column
 *
 * @method     array findByAdherentId(int $adherent_id) Return LnkAdherentCompetition objects filtered by the adherent_id column
 * @method     array findByCompetitionId(int $competition_id) Return LnkAdherentCompetition objects filtered by the competition_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseLnkAdherentCompetitionQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseLnkAdherentCompetitionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'LnkAdherentCompetition', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LnkAdherentCompetitionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LnkAdherentCompetitionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LnkAdherentCompetitionQuery) {
			return $criteria;
		}
		$query = new LnkAdherentCompetitionQuery();
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
	 * @param     array[$adherent_id, $competition_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    LnkAdherentCompetition|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = LnkAdherentCompetitionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(LnkAdherentCompetitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    LnkAdherentCompetition A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ADHERENT_ID`, `COMPETITION_ID` FROM `lnk_adherent_competition` WHERE `ADHERENT_ID` = :p0 AND `COMPETITION_ID` = :p1';
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
			$obj = new LnkAdherentCompetition();
			$obj->hydrate($row);
			LnkAdherentCompetitionPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
	 * @return    LnkAdherentCompetition|array|mixed the result, formatted by the current formatter
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
	 * @return    LnkAdherentCompetitionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(LnkAdherentCompetitionPeer::ADHERENT_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(LnkAdherentCompetitionPeer::COMPETITION_ID, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LnkAdherentCompetitionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(LnkAdherentCompetitionPeer::ADHERENT_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(LnkAdherentCompetitionPeer::COMPETITION_ID, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the adherent_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAdherentId(1234); // WHERE adherent_id = 1234
	 * $query->filterByAdherentId(array(12, 34)); // WHERE adherent_id IN (12, 34)
	 * $query->filterByAdherentId(array('min' => 12)); // WHERE adherent_id > 12
	 * </code>
	 *
	 * @see       filterByTblAdherent()
	 *
	 * @param     mixed $adherentId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkAdherentCompetitionQuery The current query, for fluid interface
	 */
	public function filterByAdherentId($adherentId = null, $comparison = null)
	{
		if (is_array($adherentId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LnkAdherentCompetitionPeer::ADHERENT_ID, $adherentId, $comparison);
	}

	/**
	 * Filter the query on the competition_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCompetitionId(1234); // WHERE competition_id = 1234
	 * $query->filterByCompetitionId(array(12, 34)); // WHERE competition_id IN (12, 34)
	 * $query->filterByCompetitionId(array('min' => 12)); // WHERE competition_id > 12
	 * </code>
	 *
	 * @see       filterByTblCompetition()
	 *
	 * @param     mixed $competitionId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkAdherentCompetitionQuery The current query, for fluid interface
	 */
	public function filterByCompetitionId($competitionId = null, $comparison = null)
	{
		if (is_array($competitionId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LnkAdherentCompetitionPeer::COMPETITION_ID, $competitionId, $comparison);
	}

	/**
	 * Filter the query by a related TblAdherent object
	 *
	 * @param     TblAdherent|PropelCollection $tblAdherent The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkAdherentCompetitionQuery The current query, for fluid interface
	 */
	public function filterByTblAdherent($tblAdherent, $comparison = null)
	{
		if ($tblAdherent instanceof TblAdherent) {
			return $this
				->addUsingAlias(LnkAdherentCompetitionPeer::ADHERENT_ID, $tblAdherent->getIdAdherent(), $comparison);
		} elseif ($tblAdherent instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(LnkAdherentCompetitionPeer::ADHERENT_ID, $tblAdherent->toKeyValue('PrimaryKey', 'IdAdherent'), $comparison);
		} else {
			throw new PropelException('filterByTblAdherent() only accepts arguments of type TblAdherent or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the TblAdherent relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LnkAdherentCompetitionQuery The current query, for fluid interface
	 */
	public function joinTblAdherent($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TblAdherent');

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
			$this->addJoinObject($join, 'TblAdherent');
		}

		return $this;
	}

	/**
	 * Use the TblAdherent relation TblAdherent object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblAdherentQuery A secondary query class using the current class as primary query
	 */
	public function useTblAdherentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTblAdherent($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TblAdherent', 'TblAdherentQuery');
	}

	/**
	 * Filter the query by a related TblCompetition object
	 *
	 * @param     TblCompetition|PropelCollection $tblCompetition The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkAdherentCompetitionQuery The current query, for fluid interface
	 */
	public function filterByTblCompetition($tblCompetition, $comparison = null)
	{
		if ($tblCompetition instanceof TblCompetition) {
			return $this
				->addUsingAlias(LnkAdherentCompetitionPeer::COMPETITION_ID, $tblCompetition->getCompetitionId(), $comparison);
		} elseif ($tblCompetition instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(LnkAdherentCompetitionPeer::COMPETITION_ID, $tblCompetition->toKeyValue('PrimaryKey', 'CompetitionId'), $comparison);
		} else {
			throw new PropelException('filterByTblCompetition() only accepts arguments of type TblCompetition or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the TblCompetition relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LnkAdherentCompetitionQuery The current query, for fluid interface
	 */
	public function joinTblCompetition($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TblCompetition');

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
			$this->addJoinObject($join, 'TblCompetition');
		}

		return $this;
	}

	/**
	 * Use the TblCompetition relation TblCompetition object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblCompetitionQuery A secondary query class using the current class as primary query
	 */
	public function useTblCompetitionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTblCompetition($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TblCompetition', 'TblCompetitionQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     LnkAdherentCompetition $lnkAdherentCompetition Object to remove from the list of results
	 *
	 * @return    LnkAdherentCompetitionQuery The current query, for fluid interface
	 */
	public function prune($lnkAdherentCompetition = null)
	{
		if ($lnkAdherentCompetition) {
			$this->addCond('pruneCond0', $this->getAliasedColName(LnkAdherentCompetitionPeer::ADHERENT_ID), $lnkAdherentCompetition->getAdherentId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(LnkAdherentCompetitionPeer::COMPETITION_ID), $lnkAdherentCompetition->getCompetitionId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // BaseLnkAdherentCompetitionQuery