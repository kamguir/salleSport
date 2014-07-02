<?php


/**
 * Base class that represents a query for the 'ref_assurance' table.
 *
 * 
 *
 * @method     RefAssuranceQuery orderByAssuranceId($order = Criteria::ASC) Order by the assurance_id column
 * @method     RefAssuranceQuery orderByLibelleAssurance($order = Criteria::ASC) Order by the libelle_assurance column
 * @method     RefAssuranceQuery orderByPrixAssurance($order = Criteria::ASC) Order by the prix_assurance column
 *
 * @method     RefAssuranceQuery groupByAssuranceId() Group by the assurance_id column
 * @method     RefAssuranceQuery groupByLibelleAssurance() Group by the libelle_assurance column
 * @method     RefAssuranceQuery groupByPrixAssurance() Group by the prix_assurance column
 *
 * @method     RefAssuranceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RefAssuranceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RefAssuranceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RefAssuranceQuery leftJoinTblAssurance($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblAssurance relation
 * @method     RefAssuranceQuery rightJoinTblAssurance($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblAssurance relation
 * @method     RefAssuranceQuery innerJoinTblAssurance($relationAlias = null) Adds a INNER JOIN clause to the query using the TblAssurance relation
 *
 * @method     RefAssurance findOne(PropelPDO $con = null) Return the first RefAssurance matching the query
 * @method     RefAssurance findOneOrCreate(PropelPDO $con = null) Return the first RefAssurance matching the query, or a new RefAssurance object populated from the query conditions when no match is found
 *
 * @method     RefAssurance findOneByAssuranceId(int $assurance_id) Return the first RefAssurance filtered by the assurance_id column
 * @method     RefAssurance findOneByLibelleAssurance(string $libelle_assurance) Return the first RefAssurance filtered by the libelle_assurance column
 * @method     RefAssurance findOneByPrixAssurance(double $prix_assurance) Return the first RefAssurance filtered by the prix_assurance column
 *
 * @method     array findByAssuranceId(int $assurance_id) Return RefAssurance objects filtered by the assurance_id column
 * @method     array findByLibelleAssurance(string $libelle_assurance) Return RefAssurance objects filtered by the libelle_assurance column
 * @method     array findByPrixAssurance(double $prix_assurance) Return RefAssurance objects filtered by the prix_assurance column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefAssuranceQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseRefAssuranceQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'RefAssurance', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RefAssuranceQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RefAssuranceQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RefAssuranceQuery) {
			return $criteria;
		}
		$query = new RefAssuranceQuery();
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
	 * @return    RefAssurance|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = RefAssurancePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(RefAssurancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    RefAssurance A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ASSURANCE_ID`, `LIBELLE_ASSURANCE`, `PRIX_ASSURANCE` FROM `ref_assurance` WHERE `ASSURANCE_ID` = :p0';
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
			$obj = new RefAssurance();
			$obj->hydrate($row);
			RefAssurancePeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    RefAssurance|array|mixed the result, formatted by the current formatter
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
	 * @return    RefAssuranceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RefAssurancePeer::ASSURANCE_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RefAssuranceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RefAssurancePeer::ASSURANCE_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the assurance_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAssuranceId(1234); // WHERE assurance_id = 1234
	 * $query->filterByAssuranceId(array(12, 34)); // WHERE assurance_id IN (12, 34)
	 * $query->filterByAssuranceId(array('min' => 12)); // WHERE assurance_id > 12
	 * </code>
	 *
	 * @param     mixed $assuranceId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefAssuranceQuery The current query, for fluid interface
	 */
	public function filterByAssuranceId($assuranceId = null, $comparison = null)
	{
		if (is_array($assuranceId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RefAssurancePeer::ASSURANCE_ID, $assuranceId, $comparison);
	}

	/**
	 * Filter the query on the libelle_assurance column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLibelleAssurance('fooValue');   // WHERE libelle_assurance = 'fooValue'
	 * $query->filterByLibelleAssurance('%fooValue%'); // WHERE libelle_assurance LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $libelleAssurance The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefAssuranceQuery The current query, for fluid interface
	 */
	public function filterByLibelleAssurance($libelleAssurance = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($libelleAssurance)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $libelleAssurance)) {
				$libelleAssurance = str_replace('*', '%', $libelleAssurance);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefAssurancePeer::LIBELLE_ASSURANCE, $libelleAssurance, $comparison);
	}

	/**
	 * Filter the query on the prix_assurance column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPrixAssurance(1234); // WHERE prix_assurance = 1234
	 * $query->filterByPrixAssurance(array(12, 34)); // WHERE prix_assurance IN (12, 34)
	 * $query->filterByPrixAssurance(array('min' => 12)); // WHERE prix_assurance > 12
	 * </code>
	 *
	 * @param     mixed $prixAssurance The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefAssuranceQuery The current query, for fluid interface
	 */
	public function filterByPrixAssurance($prixAssurance = null, $comparison = null)
	{
		if (is_array($prixAssurance)) {
			$useMinMax = false;
			if (isset($prixAssurance['min'])) {
				$this->addUsingAlias(RefAssurancePeer::PRIX_ASSURANCE, $prixAssurance['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($prixAssurance['max'])) {
				$this->addUsingAlias(RefAssurancePeer::PRIX_ASSURANCE, $prixAssurance['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RefAssurancePeer::PRIX_ASSURANCE, $prixAssurance, $comparison);
	}

	/**
	 * Filter the query by a related TblAssurance object
	 *
	 * @param     TblAssurance $tblAssurance  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefAssuranceQuery The current query, for fluid interface
	 */
	public function filterByTblAssurance($tblAssurance, $comparison = null)
	{
		if ($tblAssurance instanceof TblAssurance) {
			return $this
				->addUsingAlias(RefAssurancePeer::ASSURANCE_ID, $tblAssurance->getRefAssuranceId(), $comparison);
		} elseif ($tblAssurance instanceof PropelCollection) {
			return $this
				->useTblAssuranceQuery()
				->filterByPrimaryKeys($tblAssurance->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByTblAssurance() only accepts arguments of type TblAssurance or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the TblAssurance relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefAssuranceQuery The current query, for fluid interface
	 */
	public function joinTblAssurance($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TblAssurance');

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
			$this->addJoinObject($join, 'TblAssurance');
		}

		return $this;
	}

	/**
	 * Use the TblAssurance relation TblAssurance object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblAssuranceQuery A secondary query class using the current class as primary query
	 */
	public function useTblAssuranceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinTblAssurance($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TblAssurance', 'TblAssuranceQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     RefAssurance $refAssurance Object to remove from the list of results
	 *
	 * @return    RefAssuranceQuery The current query, for fluid interface
	 */
	public function prune($refAssurance = null)
	{
		if ($refAssurance) {
			$this->addUsingAlias(RefAssurancePeer::ASSURANCE_ID, $refAssurance->getAssuranceId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseRefAssuranceQuery