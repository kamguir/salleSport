<?php


/**
 * Base class that represents a query for the 'lnk_sport_adherent' table.
 *
 * 
 *
 * @method     LnkSportAdherentQuery orderByIdSport($order = Criteria::ASC) Order by the id_sport column
 * @method     LnkSportAdherentQuery orderByIdAdherent($order = Criteria::ASC) Order by the id_adherent column
 *
 * @method     LnkSportAdherentQuery groupByIdSport() Group by the id_sport column
 * @method     LnkSportAdherentQuery groupByIdAdherent() Group by the id_adherent column
 *
 * @method     LnkSportAdherentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LnkSportAdherentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LnkSportAdherentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LnkSportAdherentQuery leftJoinTblSport($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblSport relation
 * @method     LnkSportAdherentQuery rightJoinTblSport($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblSport relation
 * @method     LnkSportAdherentQuery innerJoinTblSport($relationAlias = null) Adds a INNER JOIN clause to the query using the TblSport relation
 *
 * @method     LnkSportAdherentQuery leftJoinTblAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblAdherent relation
 * @method     LnkSportAdherentQuery rightJoinTblAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblAdherent relation
 * @method     LnkSportAdherentQuery innerJoinTblAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the TblAdherent relation
 *
 * @method     LnkSportAdherent findOne(PropelPDO $con = null) Return the first LnkSportAdherent matching the query
 * @method     LnkSportAdherent findOneOrCreate(PropelPDO $con = null) Return the first LnkSportAdherent matching the query, or a new LnkSportAdherent object populated from the query conditions when no match is found
 *
 * @method     LnkSportAdherent findOneByIdSport(int $id_sport) Return the first LnkSportAdherent filtered by the id_sport column
 * @method     LnkSportAdherent findOneByIdAdherent(int $id_adherent) Return the first LnkSportAdherent filtered by the id_adherent column
 *
 * @method     array findByIdSport(int $id_sport) Return LnkSportAdherent objects filtered by the id_sport column
 * @method     array findByIdAdherent(int $id_adherent) Return LnkSportAdherent objects filtered by the id_adherent column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseLnkSportAdherentQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseLnkSportAdherentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'LnkSportAdherent', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LnkSportAdherentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LnkSportAdherentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LnkSportAdherentQuery) {
			return $criteria;
		}
		$query = new LnkSportAdherentQuery();
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
	 * @param     array[$id_sport, $id_adherent] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    LnkSportAdherent|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = LnkSportAdherentPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(LnkSportAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    LnkSportAdherent A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_SPORT`, `ID_ADHERENT` FROM `lnk_sport_adherent` WHERE `ID_SPORT` = :p0 AND `ID_ADHERENT` = :p1';
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
			$obj = new LnkSportAdherent();
			$obj->hydrate($row);
			LnkSportAdherentPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
	 * @return    LnkSportAdherent|array|mixed the result, formatted by the current formatter
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
	 * @return    LnkSportAdherentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(LnkSportAdherentPeer::ID_SPORT, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(LnkSportAdherentPeer::ID_ADHERENT, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LnkSportAdherentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(LnkSportAdherentPeer::ID_SPORT, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(LnkSportAdherentPeer::ID_ADHERENT, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the id_sport column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdSport(1234); // WHERE id_sport = 1234
	 * $query->filterByIdSport(array(12, 34)); // WHERE id_sport IN (12, 34)
	 * $query->filterByIdSport(array('min' => 12)); // WHERE id_sport > 12
	 * </code>
	 *
	 * @see       filterByTblSport()
	 *
	 * @param     mixed $idSport The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkSportAdherentQuery The current query, for fluid interface
	 */
	public function filterByIdSport($idSport = null, $comparison = null)
	{
		if (is_array($idSport) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LnkSportAdherentPeer::ID_SPORT, $idSport, $comparison);
	}

	/**
	 * Filter the query on the id_adherent column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdAdherent(1234); // WHERE id_adherent = 1234
	 * $query->filterByIdAdherent(array(12, 34)); // WHERE id_adherent IN (12, 34)
	 * $query->filterByIdAdherent(array('min' => 12)); // WHERE id_adherent > 12
	 * </code>
	 *
	 * @see       filterByTblAdherent()
	 *
	 * @param     mixed $idAdherent The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkSportAdherentQuery The current query, for fluid interface
	 */
	public function filterByIdAdherent($idAdherent = null, $comparison = null)
	{
		if (is_array($idAdherent) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LnkSportAdherentPeer::ID_ADHERENT, $idAdherent, $comparison);
	}

	/**
	 * Filter the query by a related TblSport object
	 *
	 * @param     TblSport|PropelCollection $tblSport The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkSportAdherentQuery The current query, for fluid interface
	 */
	public function filterByTblSport($tblSport, $comparison = null)
	{
		if ($tblSport instanceof TblSport) {
			return $this
				->addUsingAlias(LnkSportAdherentPeer::ID_SPORT, $tblSport->getIdSport(), $comparison);
		} elseif ($tblSport instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(LnkSportAdherentPeer::ID_SPORT, $tblSport->toKeyValue('PrimaryKey', 'IdSport'), $comparison);
		} else {
			throw new PropelException('filterByTblSport() only accepts arguments of type TblSport or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the TblSport relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LnkSportAdherentQuery The current query, for fluid interface
	 */
	public function joinTblSport($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TblSport');

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
			$this->addJoinObject($join, 'TblSport');
		}

		return $this;
	}

	/**
	 * Use the TblSport relation TblSport object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblSportQuery A secondary query class using the current class as primary query
	 */
	public function useTblSportQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTblSport($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TblSport', 'TblSportQuery');
	}

	/**
	 * Filter the query by a related TblAdherent object
	 *
	 * @param     TblAdherent|PropelCollection $tblAdherent The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkSportAdherentQuery The current query, for fluid interface
	 */
	public function filterByTblAdherent($tblAdherent, $comparison = null)
	{
		if ($tblAdherent instanceof TblAdherent) {
			return $this
				->addUsingAlias(LnkSportAdherentPeer::ID_ADHERENT, $tblAdherent->getIdAdherent(), $comparison);
		} elseif ($tblAdherent instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(LnkSportAdherentPeer::ID_ADHERENT, $tblAdherent->toKeyValue('PrimaryKey', 'IdAdherent'), $comparison);
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
	 * @return    LnkSportAdherentQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     LnkSportAdherent $lnkSportAdherent Object to remove from the list of results
	 *
	 * @return    LnkSportAdherentQuery The current query, for fluid interface
	 */
	public function prune($lnkSportAdherent = null)
	{
		if ($lnkSportAdherent) {
			$this->addCond('pruneCond0', $this->getAliasedColName(LnkSportAdherentPeer::ID_SPORT), $lnkSportAdherent->getIdSport(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(LnkSportAdherentPeer::ID_ADHERENT), $lnkSportAdherent->getIdAdherent(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // BaseLnkSportAdherentQuery