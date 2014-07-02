<?php


/**
 * Base class that represents a query for the 'ref_situation' table.
 *
 * 
 *
 * @method     RefSituationQuery orderByIdSituation($order = Criteria::ASC) Order by the id_situation column
 * @method     RefSituationQuery orderBySituation($order = Criteria::ASC) Order by the situation column
 *
 * @method     RefSituationQuery groupByIdSituation() Group by the id_situation column
 * @method     RefSituationQuery groupBySituation() Group by the situation column
 *
 * @method     RefSituationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RefSituationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RefSituationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RefSituationQuery leftJoinTblAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblAdherent relation
 * @method     RefSituationQuery rightJoinTblAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblAdherent relation
 * @method     RefSituationQuery innerJoinTblAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the TblAdherent relation
 *
 * @method     RefSituation findOne(PropelPDO $con = null) Return the first RefSituation matching the query
 * @method     RefSituation findOneOrCreate(PropelPDO $con = null) Return the first RefSituation matching the query, or a new RefSituation object populated from the query conditions when no match is found
 *
 * @method     RefSituation findOneByIdSituation(int $id_situation) Return the first RefSituation filtered by the id_situation column
 * @method     RefSituation findOneBySituation(string $situation) Return the first RefSituation filtered by the situation column
 *
 * @method     array findByIdSituation(int $id_situation) Return RefSituation objects filtered by the id_situation column
 * @method     array findBySituation(string $situation) Return RefSituation objects filtered by the situation column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefSituationQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseRefSituationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'RefSituation', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RefSituationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RefSituationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RefSituationQuery) {
			return $criteria;
		}
		$query = new RefSituationQuery();
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
	 * @return    RefSituation|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = RefSituationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(RefSituationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    RefSituation A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_SITUATION`, `SITUATION` FROM `ref_situation` WHERE `ID_SITUATION` = :p0';
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
			$obj = new RefSituation();
			$obj->hydrate($row);
			RefSituationPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    RefSituation|array|mixed the result, formatted by the current formatter
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
	 * @return    RefSituationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RefSituationPeer::ID_SITUATION, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RefSituationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RefSituationPeer::ID_SITUATION, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_situation column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdSituation(1234); // WHERE id_situation = 1234
	 * $query->filterByIdSituation(array(12, 34)); // WHERE id_situation IN (12, 34)
	 * $query->filterByIdSituation(array('min' => 12)); // WHERE id_situation > 12
	 * </code>
	 *
	 * @param     mixed $idSituation The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefSituationQuery The current query, for fluid interface
	 */
	public function filterByIdSituation($idSituation = null, $comparison = null)
	{
		if (is_array($idSituation) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RefSituationPeer::ID_SITUATION, $idSituation, $comparison);
	}

	/**
	 * Filter the query on the situation column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySituation('fooValue');   // WHERE situation = 'fooValue'
	 * $query->filterBySituation('%fooValue%'); // WHERE situation LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $situation The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefSituationQuery The current query, for fluid interface
	 */
	public function filterBySituation($situation = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($situation)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $situation)) {
				$situation = str_replace('*', '%', $situation);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefSituationPeer::SITUATION, $situation, $comparison);
	}

	/**
	 * Filter the query by a related TblAdherent object
	 *
	 * @param     TblAdherent $tblAdherent  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefSituationQuery The current query, for fluid interface
	 */
	public function filterByTblAdherent($tblAdherent, $comparison = null)
	{
		if ($tblAdherent instanceof TblAdherent) {
			return $this
				->addUsingAlias(RefSituationPeer::ID_SITUATION, $tblAdherent->getIdSituation(), $comparison);
		} elseif ($tblAdherent instanceof PropelCollection) {
			return $this
				->useTblAdherentQuery()
				->filterByPrimaryKeys($tblAdherent->getPrimaryKeys())
				->endUse();
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
	 * @return    RefSituationQuery The current query, for fluid interface
	 */
	public function joinTblAdherent($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
	public function useTblAdherentQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinTblAdherent($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TblAdherent', 'TblAdherentQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     RefSituation $refSituation Object to remove from the list of results
	 *
	 * @return    RefSituationQuery The current query, for fluid interface
	 */
	public function prune($refSituation = null)
	{
		if ($refSituation) {
			$this->addUsingAlias(RefSituationPeer::ID_SITUATION, $refSituation->getIdSituation(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseRefSituationQuery