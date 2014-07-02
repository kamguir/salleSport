<?php


/**
 * Base class that represents a query for the 'ref_profil' table.
 *
 * 
 *
 * @method     RefProfilQuery orderByProfilId($order = Criteria::ASC) Order by the profil_id column
 * @method     RefProfilQuery orderByProfilLibelle($order = Criteria::ASC) Order by the profil_libelle column
 *
 * @method     RefProfilQuery groupByProfilId() Group by the profil_id column
 * @method     RefProfilQuery groupByProfilLibelle() Group by the profil_libelle column
 *
 * @method     RefProfilQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RefProfilQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RefProfilQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RefProfilQuery leftJoinLnkUserProfil($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkUserProfil relation
 * @method     RefProfilQuery rightJoinLnkUserProfil($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkUserProfil relation
 * @method     RefProfilQuery innerJoinLnkUserProfil($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkUserProfil relation
 *
 * @method     RefProfil findOne(PropelPDO $con = null) Return the first RefProfil matching the query
 * @method     RefProfil findOneOrCreate(PropelPDO $con = null) Return the first RefProfil matching the query, or a new RefProfil object populated from the query conditions when no match is found
 *
 * @method     RefProfil findOneByProfilId(int $profil_id) Return the first RefProfil filtered by the profil_id column
 * @method     RefProfil findOneByProfilLibelle(string $profil_libelle) Return the first RefProfil filtered by the profil_libelle column
 *
 * @method     array findByProfilId(int $profil_id) Return RefProfil objects filtered by the profil_id column
 * @method     array findByProfilLibelle(string $profil_libelle) Return RefProfil objects filtered by the profil_libelle column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefProfilQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseRefProfilQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'RefProfil', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RefProfilQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RefProfilQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RefProfilQuery) {
			return $criteria;
		}
		$query = new RefProfilQuery();
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
	 * @return    RefProfil|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = RefProfilPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(RefProfilPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    RefProfil A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `PROFIL_ID`, `PROFIL_LIBELLE` FROM `ref_profil` WHERE `PROFIL_ID` = :p0';
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
			$obj = new RefProfil();
			$obj->hydrate($row);
			RefProfilPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    RefProfil|array|mixed the result, formatted by the current formatter
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
	 * @return    RefProfilQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RefProfilPeer::PROFIL_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RefProfilQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RefProfilPeer::PROFIL_ID, $keys, Criteria::IN);
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
	 * @param     mixed $profilId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefProfilQuery The current query, for fluid interface
	 */
	public function filterByProfilId($profilId = null, $comparison = null)
	{
		if (is_array($profilId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RefProfilPeer::PROFIL_ID, $profilId, $comparison);
	}

	/**
	 * Filter the query on the profil_libelle column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProfilLibelle('fooValue');   // WHERE profil_libelle = 'fooValue'
	 * $query->filterByProfilLibelle('%fooValue%'); // WHERE profil_libelle LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $profilLibelle The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefProfilQuery The current query, for fluid interface
	 */
	public function filterByProfilLibelle($profilLibelle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($profilLibelle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $profilLibelle)) {
				$profilLibelle = str_replace('*', '%', $profilLibelle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefProfilPeer::PROFIL_LIBELLE, $profilLibelle, $comparison);
	}

	/**
	 * Filter the query by a related LnkUserProfil object
	 *
	 * @param     LnkUserProfil $lnkUserProfil  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefProfilQuery The current query, for fluid interface
	 */
	public function filterByLnkUserProfil($lnkUserProfil, $comparison = null)
	{
		if ($lnkUserProfil instanceof LnkUserProfil) {
			return $this
				->addUsingAlias(RefProfilPeer::PROFIL_ID, $lnkUserProfil->getProfilId(), $comparison);
		} elseif ($lnkUserProfil instanceof PropelCollection) {
			return $this
				->useLnkUserProfilQuery()
				->filterByPrimaryKeys($lnkUserProfil->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByLnkUserProfil() only accepts arguments of type LnkUserProfil or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the LnkUserProfil relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefProfilQuery The current query, for fluid interface
	 */
	public function joinLnkUserProfil($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('LnkUserProfil');

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
			$this->addJoinObject($join, 'LnkUserProfil');
		}

		return $this;
	}

	/**
	 * Use the LnkUserProfil relation LnkUserProfil object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LnkUserProfilQuery A secondary query class using the current class as primary query
	 */
	public function useLnkUserProfilQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinLnkUserProfil($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'LnkUserProfil', 'LnkUserProfilQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     RefProfil $refProfil Object to remove from the list of results
	 *
	 * @return    RefProfilQuery The current query, for fluid interface
	 */
	public function prune($refProfil = null)
	{
		if ($refProfil) {
			$this->addUsingAlias(RefProfilPeer::PROFIL_ID, $refProfil->getProfilId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseRefProfilQuery