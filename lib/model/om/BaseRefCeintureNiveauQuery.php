<?php


/**
 * Base class that represents a query for the 'ref_ceinture_niveau' table.
 *
 * 
 *
 * @method     RefCeintureNiveauQuery orderByCeintureNiveauId($order = Criteria::ASC) Order by the ceinture_niveau_id column
 * @method     RefCeintureNiveauQuery orderByCeintureNiveau($order = Criteria::ASC) Order by the ceinture_niveau column
 * @method     RefCeintureNiveauQuery orderByPathImage($order = Criteria::ASC) Order by the path_image column
 *
 * @method     RefCeintureNiveauQuery groupByCeintureNiveauId() Group by the ceinture_niveau_id column
 * @method     RefCeintureNiveauQuery groupByCeintureNiveau() Group by the ceinture_niveau column
 * @method     RefCeintureNiveauQuery groupByPathImage() Group by the path_image column
 *
 * @method     RefCeintureNiveauQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RefCeintureNiveauQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RefCeintureNiveauQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RefCeintureNiveauQuery leftJoinTblCeinture($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblCeinture relation
 * @method     RefCeintureNiveauQuery rightJoinTblCeinture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblCeinture relation
 * @method     RefCeintureNiveauQuery innerJoinTblCeinture($relationAlias = null) Adds a INNER JOIN clause to the query using the TblCeinture relation
 *
 * @method     RefCeintureNiveau findOne(PropelPDO $con = null) Return the first RefCeintureNiveau matching the query
 * @method     RefCeintureNiveau findOneOrCreate(PropelPDO $con = null) Return the first RefCeintureNiveau matching the query, or a new RefCeintureNiveau object populated from the query conditions when no match is found
 *
 * @method     RefCeintureNiveau findOneByCeintureNiveauId(int $ceinture_niveau_id) Return the first RefCeintureNiveau filtered by the ceinture_niveau_id column
 * @method     RefCeintureNiveau findOneByCeintureNiveau(string $ceinture_niveau) Return the first RefCeintureNiveau filtered by the ceinture_niveau column
 * @method     RefCeintureNiveau findOneByPathImage(string $path_image) Return the first RefCeintureNiveau filtered by the path_image column
 *
 * @method     array findByCeintureNiveauId(int $ceinture_niveau_id) Return RefCeintureNiveau objects filtered by the ceinture_niveau_id column
 * @method     array findByCeintureNiveau(string $ceinture_niveau) Return RefCeintureNiveau objects filtered by the ceinture_niveau column
 * @method     array findByPathImage(string $path_image) Return RefCeintureNiveau objects filtered by the path_image column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefCeintureNiveauQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseRefCeintureNiveauQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'RefCeintureNiveau', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RefCeintureNiveauQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RefCeintureNiveauQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RefCeintureNiveauQuery) {
			return $criteria;
		}
		$query = new RefCeintureNiveauQuery();
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
	 * @return    RefCeintureNiveau|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = RefCeintureNiveauPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(RefCeintureNiveauPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    RefCeintureNiveau A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `CEINTURE_NIVEAU_ID`, `CEINTURE_NIVEAU`, `PATH_IMAGE` FROM `ref_ceinture_niveau` WHERE `CEINTURE_NIVEAU_ID` = :p0';
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
			$obj = new RefCeintureNiveau();
			$obj->hydrate($row);
			RefCeintureNiveauPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    RefCeintureNiveau|array|mixed the result, formatted by the current formatter
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
	 * @return    RefCeintureNiveauQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RefCeintureNiveauPeer::CEINTURE_NIVEAU_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RefCeintureNiveauQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RefCeintureNiveauPeer::CEINTURE_NIVEAU_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the ceinture_niveau_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCeintureNiveauId(1234); // WHERE ceinture_niveau_id = 1234
	 * $query->filterByCeintureNiveauId(array(12, 34)); // WHERE ceinture_niveau_id IN (12, 34)
	 * $query->filterByCeintureNiveauId(array('min' => 12)); // WHERE ceinture_niveau_id > 12
	 * </code>
	 *
	 * @param     mixed $ceintureNiveauId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefCeintureNiveauQuery The current query, for fluid interface
	 */
	public function filterByCeintureNiveauId($ceintureNiveauId = null, $comparison = null)
	{
		if (is_array($ceintureNiveauId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RefCeintureNiveauPeer::CEINTURE_NIVEAU_ID, $ceintureNiveauId, $comparison);
	}

	/**
	 * Filter the query on the ceinture_niveau column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCeintureNiveau('fooValue');   // WHERE ceinture_niveau = 'fooValue'
	 * $query->filterByCeintureNiveau('%fooValue%'); // WHERE ceinture_niveau LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $ceintureNiveau The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefCeintureNiveauQuery The current query, for fluid interface
	 */
	public function filterByCeintureNiveau($ceintureNiveau = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($ceintureNiveau)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $ceintureNiveau)) {
				$ceintureNiveau = str_replace('*', '%', $ceintureNiveau);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefCeintureNiveauPeer::CEINTURE_NIVEAU, $ceintureNiveau, $comparison);
	}

	/**
	 * Filter the query on the path_image column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPathImage('fooValue');   // WHERE path_image = 'fooValue'
	 * $query->filterByPathImage('%fooValue%'); // WHERE path_image LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $pathImage The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefCeintureNiveauQuery The current query, for fluid interface
	 */
	public function filterByPathImage($pathImage = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($pathImage)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $pathImage)) {
				$pathImage = str_replace('*', '%', $pathImage);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefCeintureNiveauPeer::PATH_IMAGE, $pathImage, $comparison);
	}

	/**
	 * Filter the query by a related TblCeinture object
	 *
	 * @param     TblCeinture $tblCeinture  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefCeintureNiveauQuery The current query, for fluid interface
	 */
	public function filterByTblCeinture($tblCeinture, $comparison = null)
	{
		if ($tblCeinture instanceof TblCeinture) {
			return $this
				->addUsingAlias(RefCeintureNiveauPeer::CEINTURE_NIVEAU_ID, $tblCeinture->getCeintureNiveauId(), $comparison);
		} elseif ($tblCeinture instanceof PropelCollection) {
			return $this
				->useTblCeintureQuery()
				->filterByPrimaryKeys($tblCeinture->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByTblCeinture() only accepts arguments of type TblCeinture or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the TblCeinture relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefCeintureNiveauQuery The current query, for fluid interface
	 */
	public function joinTblCeinture($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TblCeinture');

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
			$this->addJoinObject($join, 'TblCeinture');
		}

		return $this;
	}

	/**
	 * Use the TblCeinture relation TblCeinture object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblCeintureQuery A secondary query class using the current class as primary query
	 */
	public function useTblCeintureQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinTblCeinture($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TblCeinture', 'TblCeintureQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     RefCeintureNiveau $refCeintureNiveau Object to remove from the list of results
	 *
	 * @return    RefCeintureNiveauQuery The current query, for fluid interface
	 */
	public function prune($refCeintureNiveau = null)
	{
		if ($refCeintureNiveau) {
			$this->addUsingAlias(RefCeintureNiveauPeer::CEINTURE_NIVEAU_ID, $refCeintureNiveau->getCeintureNiveauId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseRefCeintureNiveauQuery