<?php


/**
 * Base class that represents a query for the 'lnk_plage_horaire_adherent' table.
 *
 * 
 *
 * @method     LnkPlageHoraireAdherentQuery orderByHoraireId($order = Criteria::ASC) Order by the horaire_id column
 * @method     LnkPlageHoraireAdherentQuery orderByAdherentId($order = Criteria::ASC) Order by the adherent_id column
 *
 * @method     LnkPlageHoraireAdherentQuery groupByHoraireId() Group by the horaire_id column
 * @method     LnkPlageHoraireAdherentQuery groupByAdherentId() Group by the adherent_id column
 *
 * @method     LnkPlageHoraireAdherentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LnkPlageHoraireAdherentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LnkPlageHoraireAdherentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LnkPlageHoraireAdherentQuery leftJoinRefPlageHoraire($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefPlageHoraire relation
 * @method     LnkPlageHoraireAdherentQuery rightJoinRefPlageHoraire($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefPlageHoraire relation
 * @method     LnkPlageHoraireAdherentQuery innerJoinRefPlageHoraire($relationAlias = null) Adds a INNER JOIN clause to the query using the RefPlageHoraire relation
 *
 * @method     LnkPlageHoraireAdherentQuery leftJoinTblAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblAdherent relation
 * @method     LnkPlageHoraireAdherentQuery rightJoinTblAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblAdherent relation
 * @method     LnkPlageHoraireAdherentQuery innerJoinTblAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the TblAdherent relation
 *
 * @method     LnkPlageHoraireAdherent findOne(PropelPDO $con = null) Return the first LnkPlageHoraireAdherent matching the query
 * @method     LnkPlageHoraireAdherent findOneOrCreate(PropelPDO $con = null) Return the first LnkPlageHoraireAdherent matching the query, or a new LnkPlageHoraireAdherent object populated from the query conditions when no match is found
 *
 * @method     LnkPlageHoraireAdherent findOneByHoraireId(int $horaire_id) Return the first LnkPlageHoraireAdherent filtered by the horaire_id column
 * @method     LnkPlageHoraireAdherent findOneByAdherentId(int $adherent_id) Return the first LnkPlageHoraireAdherent filtered by the adherent_id column
 *
 * @method     array findByHoraireId(int $horaire_id) Return LnkPlageHoraireAdherent objects filtered by the horaire_id column
 * @method     array findByAdherentId(int $adherent_id) Return LnkPlageHoraireAdherent objects filtered by the adherent_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseLnkPlageHoraireAdherentQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseLnkPlageHoraireAdherentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'LnkPlageHoraireAdherent', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LnkPlageHoraireAdherentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LnkPlageHoraireAdherentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LnkPlageHoraireAdherentQuery) {
			return $criteria;
		}
		$query = new LnkPlageHoraireAdherentQuery();
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
	 * @param     array[$horaire_id, $adherent_id] $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    LnkPlageHoraireAdherent|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = LnkPlageHoraireAdherentPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(LnkPlageHoraireAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    LnkPlageHoraireAdherent A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `HORAIRE_ID`, `ADHERENT_ID` FROM `lnk_plage_horaire_adherent` WHERE `HORAIRE_ID` = :p0 AND `ADHERENT_ID` = :p1';
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
			$obj = new LnkPlageHoraireAdherent();
			$obj->hydrate($row);
			LnkPlageHoraireAdherentPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
	 * @return    LnkPlageHoraireAdherent|array|mixed the result, formatted by the current formatter
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
	 * @return    LnkPlageHoraireAdherentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		$this->addUsingAlias(LnkPlageHoraireAdherentPeer::HORAIRE_ID, $key[0], Criteria::EQUAL);
		$this->addUsingAlias(LnkPlageHoraireAdherentPeer::ADHERENT_ID, $key[1], Criteria::EQUAL);

		return $this;
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LnkPlageHoraireAdherentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		if (empty($keys)) {
			return $this->add(null, '1<>1', Criteria::CUSTOM);
		}
		foreach ($keys as $key) {
			$cton0 = $this->getNewCriterion(LnkPlageHoraireAdherentPeer::HORAIRE_ID, $key[0], Criteria::EQUAL);
			$cton1 = $this->getNewCriterion(LnkPlageHoraireAdherentPeer::ADHERENT_ID, $key[1], Criteria::EQUAL);
			$cton0->addAnd($cton1);
			$this->addOr($cton0);
		}

		return $this;
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
	 * @see       filterByRefPlageHoraire()
	 *
	 * @param     mixed $horaireId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkPlageHoraireAdherentQuery The current query, for fluid interface
	 */
	public function filterByHoraireId($horaireId = null, $comparison = null)
	{
		if (is_array($horaireId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LnkPlageHoraireAdherentPeer::HORAIRE_ID, $horaireId, $comparison);
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
	 * @return    LnkPlageHoraireAdherentQuery The current query, for fluid interface
	 */
	public function filterByAdherentId($adherentId = null, $comparison = null)
	{
		if (is_array($adherentId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LnkPlageHoraireAdherentPeer::ADHERENT_ID, $adherentId, $comparison);
	}

	/**
	 * Filter the query by a related RefPlageHoraire object
	 *
	 * @param     RefPlageHoraire|PropelCollection $refPlageHoraire The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkPlageHoraireAdherentQuery The current query, for fluid interface
	 */
	public function filterByRefPlageHoraire($refPlageHoraire, $comparison = null)
	{
		if ($refPlageHoraire instanceof RefPlageHoraire) {
			return $this
				->addUsingAlias(LnkPlageHoraireAdherentPeer::HORAIRE_ID, $refPlageHoraire->getHoraireId(), $comparison);
		} elseif ($refPlageHoraire instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(LnkPlageHoraireAdherentPeer::HORAIRE_ID, $refPlageHoraire->toKeyValue('PrimaryKey', 'HoraireId'), $comparison);
		} else {
			throw new PropelException('filterByRefPlageHoraire() only accepts arguments of type RefPlageHoraire or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefPlageHoraire relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LnkPlageHoraireAdherentQuery The current query, for fluid interface
	 */
	public function joinRefPlageHoraire($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefPlageHoraire');

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
			$this->addJoinObject($join, 'RefPlageHoraire');
		}

		return $this;
	}

	/**
	 * Use the RefPlageHoraire relation RefPlageHoraire object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefPlageHoraireQuery A secondary query class using the current class as primary query
	 */
	public function useRefPlageHoraireQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinRefPlageHoraire($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefPlageHoraire', 'RefPlageHoraireQuery');
	}

	/**
	 * Filter the query by a related TblAdherent object
	 *
	 * @param     TblAdherent|PropelCollection $tblAdherent The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LnkPlageHoraireAdherentQuery The current query, for fluid interface
	 */
	public function filterByTblAdherent($tblAdherent, $comparison = null)
	{
		if ($tblAdherent instanceof TblAdherent) {
			return $this
				->addUsingAlias(LnkPlageHoraireAdherentPeer::ADHERENT_ID, $tblAdherent->getIdAdherent(), $comparison);
		} elseif ($tblAdherent instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(LnkPlageHoraireAdherentPeer::ADHERENT_ID, $tblAdherent->toKeyValue('PrimaryKey', 'IdAdherent'), $comparison);
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
	 * @return    LnkPlageHoraireAdherentQuery The current query, for fluid interface
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
	 * @param     LnkPlageHoraireAdherent $lnkPlageHoraireAdherent Object to remove from the list of results
	 *
	 * @return    LnkPlageHoraireAdherentQuery The current query, for fluid interface
	 */
	public function prune($lnkPlageHoraireAdherent = null)
	{
		if ($lnkPlageHoraireAdherent) {
			$this->addCond('pruneCond0', $this->getAliasedColName(LnkPlageHoraireAdherentPeer::HORAIRE_ID), $lnkPlageHoraireAdherent->getHoraireId(), Criteria::NOT_EQUAL);
			$this->addCond('pruneCond1', $this->getAliasedColName(LnkPlageHoraireAdherentPeer::ADHERENT_ID), $lnkPlageHoraireAdherent->getAdherentId(), Criteria::NOT_EQUAL);
			$this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
		}

		return $this;
	}

} // BaseLnkPlageHoraireAdherentQuery