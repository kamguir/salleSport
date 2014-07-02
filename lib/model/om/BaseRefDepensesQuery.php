<?php


/**
 * Base class that represents a query for the 'ref_depenses' table.
 *
 * 
 *
 * @method     RefDepensesQuery orderByIdRefDepenses($order = Criteria::ASC) Order by the id_ref_depenses column
 * @method     RefDepensesQuery orderByLibelleDepenses($order = Criteria::ASC) Order by the libelle_depenses column
 *
 * @method     RefDepensesQuery groupByIdRefDepenses() Group by the id_ref_depenses column
 * @method     RefDepensesQuery groupByLibelleDepenses() Group by the libelle_depenses column
 *
 * @method     RefDepensesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RefDepensesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RefDepensesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RefDepensesQuery leftJoinTblDepenses($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblDepenses relation
 * @method     RefDepensesQuery rightJoinTblDepenses($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblDepenses relation
 * @method     RefDepensesQuery innerJoinTblDepenses($relationAlias = null) Adds a INNER JOIN clause to the query using the TblDepenses relation
 *
 * @method     RefDepenses findOne(PropelPDO $con = null) Return the first RefDepenses matching the query
 * @method     RefDepenses findOneOrCreate(PropelPDO $con = null) Return the first RefDepenses matching the query, or a new RefDepenses object populated from the query conditions when no match is found
 *
 * @method     RefDepenses findOneByIdRefDepenses(int $id_ref_depenses) Return the first RefDepenses filtered by the id_ref_depenses column
 * @method     RefDepenses findOneByLibelleDepenses(string $libelle_depenses) Return the first RefDepenses filtered by the libelle_depenses column
 *
 * @method     array findByIdRefDepenses(int $id_ref_depenses) Return RefDepenses objects filtered by the id_ref_depenses column
 * @method     array findByLibelleDepenses(string $libelle_depenses) Return RefDepenses objects filtered by the libelle_depenses column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefDepensesQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseRefDepensesQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'RefDepenses', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RefDepensesQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RefDepensesQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RefDepensesQuery) {
			return $criteria;
		}
		$query = new RefDepensesQuery();
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
	 * @return    RefDepenses|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = RefDepensesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(RefDepensesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    RefDepenses A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_REF_DEPENSES`, `LIBELLE_DEPENSES` FROM `ref_depenses` WHERE `ID_REF_DEPENSES` = :p0';
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
			$obj = new RefDepenses();
			$obj->hydrate($row);
			RefDepensesPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    RefDepenses|array|mixed the result, formatted by the current formatter
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
	 * @return    RefDepensesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RefDepensesPeer::ID_REF_DEPENSES, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RefDepensesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RefDepensesPeer::ID_REF_DEPENSES, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_ref_depenses column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdRefDepenses(1234); // WHERE id_ref_depenses = 1234
	 * $query->filterByIdRefDepenses(array(12, 34)); // WHERE id_ref_depenses IN (12, 34)
	 * $query->filterByIdRefDepenses(array('min' => 12)); // WHERE id_ref_depenses > 12
	 * </code>
	 *
	 * @param     mixed $idRefDepenses The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefDepensesQuery The current query, for fluid interface
	 */
	public function filterByIdRefDepenses($idRefDepenses = null, $comparison = null)
	{
		if (is_array($idRefDepenses) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RefDepensesPeer::ID_REF_DEPENSES, $idRefDepenses, $comparison);
	}

	/**
	 * Filter the query on the libelle_depenses column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLibelleDepenses('fooValue');   // WHERE libelle_depenses = 'fooValue'
	 * $query->filterByLibelleDepenses('%fooValue%'); // WHERE libelle_depenses LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $libelleDepenses The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefDepensesQuery The current query, for fluid interface
	 */
	public function filterByLibelleDepenses($libelleDepenses = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($libelleDepenses)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $libelleDepenses)) {
				$libelleDepenses = str_replace('*', '%', $libelleDepenses);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefDepensesPeer::LIBELLE_DEPENSES, $libelleDepenses, $comparison);
	}

	/**
	 * Filter the query by a related TblDepenses object
	 *
	 * @param     TblDepenses $tblDepenses  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefDepensesQuery The current query, for fluid interface
	 */
	public function filterByTblDepenses($tblDepenses, $comparison = null)
	{
		if ($tblDepenses instanceof TblDepenses) {
			return $this
				->addUsingAlias(RefDepensesPeer::ID_REF_DEPENSES, $tblDepenses->getIdRefDepenses(), $comparison);
		} elseif ($tblDepenses instanceof PropelCollection) {
			return $this
				->useTblDepensesQuery()
				->filterByPrimaryKeys($tblDepenses->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByTblDepenses() only accepts arguments of type TblDepenses or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the TblDepenses relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefDepensesQuery The current query, for fluid interface
	 */
	public function joinTblDepenses($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TblDepenses');

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
			$this->addJoinObject($join, 'TblDepenses');
		}

		return $this;
	}

	/**
	 * Use the TblDepenses relation TblDepenses object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblDepensesQuery A secondary query class using the current class as primary query
	 */
	public function useTblDepensesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinTblDepenses($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TblDepenses', 'TblDepensesQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     RefDepenses $refDepenses Object to remove from the list of results
	 *
	 * @return    RefDepensesQuery The current query, for fluid interface
	 */
	public function prune($refDepenses = null)
	{
		if ($refDepenses) {
			$this->addUsingAlias(RefDepensesPeer::ID_REF_DEPENSES, $refDepenses->getIdRefDepenses(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseRefDepensesQuery