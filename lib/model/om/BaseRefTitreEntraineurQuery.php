<?php


/**
 * Base class that represents a query for the 'ref_titre_entraineur' table.
 *
 * 
 *
 * @method     RefTitreEntraineurQuery orderByTitreEntraineurId($order = Criteria::ASC) Order by the titre_entraineur_id column
 * @method     RefTitreEntraineurQuery orderByTitreEntraineurLibelle($order = Criteria::ASC) Order by the titre_entraineur_libelle column
 *
 * @method     RefTitreEntraineurQuery groupByTitreEntraineurId() Group by the titre_entraineur_id column
 * @method     RefTitreEntraineurQuery groupByTitreEntraineurLibelle() Group by the titre_entraineur_libelle column
 *
 * @method     RefTitreEntraineurQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RefTitreEntraineurQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RefTitreEntraineurQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RefTitreEntraineurQuery leftJoinTblCeinture($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblCeinture relation
 * @method     RefTitreEntraineurQuery rightJoinTblCeinture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblCeinture relation
 * @method     RefTitreEntraineurQuery innerJoinTblCeinture($relationAlias = null) Adds a INNER JOIN clause to the query using the TblCeinture relation
 *
 * @method     RefTitreEntraineur findOne(PropelPDO $con = null) Return the first RefTitreEntraineur matching the query
 * @method     RefTitreEntraineur findOneOrCreate(PropelPDO $con = null) Return the first RefTitreEntraineur matching the query, or a new RefTitreEntraineur object populated from the query conditions when no match is found
 *
 * @method     RefTitreEntraineur findOneByTitreEntraineurId(int $titre_entraineur_id) Return the first RefTitreEntraineur filtered by the titre_entraineur_id column
 * @method     RefTitreEntraineur findOneByTitreEntraineurLibelle(string $titre_entraineur_libelle) Return the first RefTitreEntraineur filtered by the titre_entraineur_libelle column
 *
 * @method     array findByTitreEntraineurId(int $titre_entraineur_id) Return RefTitreEntraineur objects filtered by the titre_entraineur_id column
 * @method     array findByTitreEntraineurLibelle(string $titre_entraineur_libelle) Return RefTitreEntraineur objects filtered by the titre_entraineur_libelle column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefTitreEntraineurQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseRefTitreEntraineurQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'RefTitreEntraineur', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RefTitreEntraineurQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RefTitreEntraineurQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RefTitreEntraineurQuery) {
			return $criteria;
		}
		$query = new RefTitreEntraineurQuery();
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
	 * @return    RefTitreEntraineur|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = RefTitreEntraineurPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(RefTitreEntraineurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    RefTitreEntraineur A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `TITRE_ENTRAINEUR_ID`, `TITRE_ENTRAINEUR_LIBELLE` FROM `ref_titre_entraineur` WHERE `TITRE_ENTRAINEUR_ID` = :p0';
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
			$obj = new RefTitreEntraineur();
			$obj->hydrate($row);
			RefTitreEntraineurPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    RefTitreEntraineur|array|mixed the result, formatted by the current formatter
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
	 * @return    RefTitreEntraineurQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RefTitreEntraineurQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the titre_entraineur_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTitreEntraineurId(1234); // WHERE titre_entraineur_id = 1234
	 * $query->filterByTitreEntraineurId(array(12, 34)); // WHERE titre_entraineur_id IN (12, 34)
	 * $query->filterByTitreEntraineurId(array('min' => 12)); // WHERE titre_entraineur_id > 12
	 * </code>
	 *
	 * @param     mixed $titreEntraineurId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefTitreEntraineurQuery The current query, for fluid interface
	 */
	public function filterByTitreEntraineurId($titreEntraineurId = null, $comparison = null)
	{
		if (is_array($titreEntraineurId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $titreEntraineurId, $comparison);
	}

	/**
	 * Filter the query on the titre_entraineur_libelle column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTitreEntraineurLibelle('fooValue');   // WHERE titre_entraineur_libelle = 'fooValue'
	 * $query->filterByTitreEntraineurLibelle('%fooValue%'); // WHERE titre_entraineur_libelle LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $titreEntraineurLibelle The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefTitreEntraineurQuery The current query, for fluid interface
	 */
	public function filterByTitreEntraineurLibelle($titreEntraineurLibelle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($titreEntraineurLibelle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $titreEntraineurLibelle)) {
				$titreEntraineurLibelle = str_replace('*', '%', $titreEntraineurLibelle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefTitreEntraineurPeer::TITRE_ENTRAINEUR_LIBELLE, $titreEntraineurLibelle, $comparison);
	}

	/**
	 * Filter the query by a related TblCeinture object
	 *
	 * @param     TblCeinture $tblCeinture  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefTitreEntraineurQuery The current query, for fluid interface
	 */
	public function filterByTblCeinture($tblCeinture, $comparison = null)
	{
		if ($tblCeinture instanceof TblCeinture) {
			return $this
				->addUsingAlias(RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $tblCeinture->getTitreEntraineurId(), $comparison);
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
	 * @return    RefTitreEntraineurQuery The current query, for fluid interface
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
	 * @param     RefTitreEntraineur $refTitreEntraineur Object to remove from the list of results
	 *
	 * @return    RefTitreEntraineurQuery The current query, for fluid interface
	 */
	public function prune($refTitreEntraineur = null)
	{
		if ($refTitreEntraineur) {
			$this->addUsingAlias(RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $refTitreEntraineur->getTitreEntraineurId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseRefTitreEntraineurQuery