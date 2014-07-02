<?php


/**
 * Base class that represents a query for the 'lnk_user_profil' table.
 *
 * 
 *
 * @method     LnkUserProfilQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     LnkUserProfilQuery orderByProfilId($order = Criteria::ASC) Order by the profil_id column
 *
 * @method     LnkUserProfilQuery groupByUserId() Group by the user_id column
 * @method     LnkUserProfilQuery groupByProfilId() Group by the profil_id column
 *
 * @method     LnkUserProfilQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LnkUserProfilQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LnkUserProfilQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LnkUserProfilQuery leftJoinTblUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblUser relation
 * @method     LnkUserProfilQuery rightJoinTblUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblUser relation
 * @method     LnkUserProfilQuery innerJoinTblUser($relationAlias = null) Adds a INNER JOIN clause to the query using the TblUser relation
 *
 * @method     LnkUserProfilQuery leftJoinRefProfil($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefProfil relation
 * @method     LnkUserProfilQuery rightJoinRefProfil($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefProfil relation
 * @method     LnkUserProfilQuery innerJoinRefProfil($relationAlias = null) Adds a INNER JOIN clause to the query using the RefProfil relation
 *
 * @method     LnkUserProfil findOne(PropelPDO $con = null) Return the first LnkUserProfil matching the query
 * @method     LnkUserProfil findOneOrCreate(PropelPDO $con = null) Return the first LnkUserProfil matching the query, or a new LnkUserProfil object populated from the query conditions when no match is found
 *
 * @method     LnkUserProfil findOneByUserId(int $user_id) Return the first LnkUserProfil filtered by the user_id column
 * @method     LnkUserProfil findOneByProfilId(int $profil_id) Return the first LnkUserProfil filtered by the profil_id column
 *
 * @method     array findByUserId(int $user_id) Return LnkUserProfil objects filtered by the user_id column
 * @method     array findByProfilId(int $profil_id) Return LnkUserProfil objects filtered by the profil_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseLnkUserProfilQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseLnkUserProfilQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'LnkUserProfil', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LnkUserProfilQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LnkUserProfilQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LnkUserProfilQuery) {
			return $criteria;
		}
		$query = new LnkUserProfilQuery();
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
	 * @param     array[$user_id, $profil_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    LnkUserProfil|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = LnkUserProfilPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(LnkUserProfilPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    LnkUserProfil A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `USER_ID`, `PROFIL_ID` FROM `lnk_user_profil` WHERE `USER_ID` = :p0 AND `PROFIL_ID` = :p1';
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
			$obj = new LnkUserProfil();
			$obj->hydrate($row);
			LnkUserProfilPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
	 * @return    LnkUserProfil|array|mixed the result, formatted by the current formatter
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
	 * @return    LnkUserProfilQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(LnkUserProfilPeer::USER_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(LnkUserProfilPeer::PROFIL_ID, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LnkUserProfilQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(LnkUserProfilPeer::USER_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(LnkUserProfilPeer::PROFIL_ID, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
	}

	/**
	 * Filter the query on the user_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUserId(1234); // WHERE user_id = 1234
	 * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
	 * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
	 * </code>
	 *
	 * @see       filterByTblUser()
	 *
	 * @param     mixed $userId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkUserProfilQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LnkUserProfilPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the profil_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProfilId(1234); // WHERE profil_id = 1234
	 * $query->filterByProfilId(array(12, 34)); // WHERE profil_id IN (12, 34)
	 * $query->filterByProfilId(array('min' => 12)); // WHERE profil_id > 12
	 * </code>
	 *
	 * @see       filterByRefProfil()
	 *
	 * @param     mixed $profilId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkUserProfilQuery The current query, for fluid interface
	 */
	public function filterByProfilId($profilId = null, $comparison = null)
	{
		if (is_array($profilId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LnkUserProfilPeer::PROFIL_ID, $profilId, $comparison);
	}

	/**
	 * Filter the query by a related TblUser object
	 *
	 * @param     TblUser|PropelCollection $tblUser The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkUserProfilQuery The current query, for fluid interface
	 */
	public function filterByTblUser($tblUser, $comparison = null)
	{
		if ($tblUser instanceof TblUser) {
			return $this
				->addUsingAlias(LnkUserProfilPeer::USER_ID, $tblUser->getUserId(), $comparison);
		} elseif ($tblUser instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(LnkUserProfilPeer::USER_ID, $tblUser->toKeyValue('PrimaryKey', 'UserId'), $comparison);
		} else {
			throw new PropelException('filterByTblUser() only accepts arguments of type TblUser or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the TblUser relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LnkUserProfilQuery The current query, for fluid interface
	 */
	public function joinTblUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TblUser');

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
			$this->addJoinObject($join, 'TblUser');
		}

		return $this;
	}

	/**
	 * Use the TblUser relation TblUser object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblUserQuery A secondary query class using the current class as primary query
	 */
	public function useTblUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTblUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TblUser', 'TblUserQuery');
	}

	/**
	 * Filter the query by a related RefProfil object
	 *
	 * @param     RefProfil|PropelCollection $refProfil The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkUserProfilQuery The current query, for fluid interface
	 */
	public function filterByRefProfil($refProfil, $comparison = null)
	{
		if ($refProfil instanceof RefProfil) {
			return $this
				->addUsingAlias(LnkUserProfilPeer::PROFIL_ID, $refProfil->getProfilId(), $comparison);
		} elseif ($refProfil instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(LnkUserProfilPeer::PROFIL_ID, $refProfil->toKeyValue('PrimaryKey', 'ProfilId'), $comparison);
		} else {
			throw new PropelException('filterByRefProfil() only accepts arguments of type RefProfil or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefProfil relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LnkUserProfilQuery The current query, for fluid interface
	 */
	public function joinRefProfil($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefProfil');

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
			$this->addJoinObject($join, 'RefProfil');
		}

		return $this;
	}

	/**
	 * Use the RefProfil relation RefProfil object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefProfilQuery A secondary query class using the current class as primary query
	 */
	public function useRefProfilQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinRefProfil($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefProfil', 'RefProfilQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     LnkUserProfil $lnkUserProfil Object to remove from the list of results
	 *
	 * @return    LnkUserProfilQuery The current query, for fluid interface
	 */
	public function prune($lnkUserProfil = null)
	{
		if ($lnkUserProfil) {
			$this->addCond('pruneCond0', $this->getAliasedColName(LnkUserProfilPeer::USER_ID), $lnkUserProfil->getUserId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(LnkUserProfilPeer::PROFIL_ID), $lnkUserProfil->getProfilId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // BaseLnkUserProfilQuery