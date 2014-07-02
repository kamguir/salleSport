<?php


/**
 * Base class that represents a query for the 'tbl_depenses' table.
 *
 * 
 *
 * @method     TblDepensesQuery orderByIdDepenses($order = Criteria::ASC) Order by the id_depenses column
 * @method     TblDepensesQuery orderByDateDepenses($order = Criteria::ASC) Order by the date_depenses column
 * @method     TblDepensesQuery orderByIdRefDepenses($order = Criteria::ASC) Order by the id_ref_depenses column
 * @method     TblDepensesQuery orderByMontantDepenses($order = Criteria::ASC) Order by the montant_depenses column
 * @method     TblDepensesQuery orderByEtatPaiement($order = Criteria::ASC) Order by the etat_paiement column
 * @method     TblDepensesQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     TblDepensesQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     TblDepensesQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 *
 * @method     TblDepensesQuery groupByIdDepenses() Group by the id_depenses column
 * @method     TblDepensesQuery groupByDateDepenses() Group by the date_depenses column
 * @method     TblDepensesQuery groupByIdRefDepenses() Group by the id_ref_depenses column
 * @method     TblDepensesQuery groupByMontantDepenses() Group by the montant_depenses column
 * @method     TblDepensesQuery groupByEtatPaiement() Group by the etat_paiement column
 * @method     TblDepensesQuery groupByCreatedAt() Group by the created_at column
 * @method     TblDepensesQuery groupByUpdatedAt() Group by the updated_at column
 * @method     TblDepensesQuery groupByDeletedAt() Group by the deleted_at column
 *
 * @method     TblDepensesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TblDepensesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TblDepensesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TblDepensesQuery leftJoinRefDepenses($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefDepenses relation
 * @method     TblDepensesQuery rightJoinRefDepenses($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefDepenses relation
 * @method     TblDepensesQuery innerJoinRefDepenses($relationAlias = null) Adds a INNER JOIN clause to the query using the RefDepenses relation
 *
 * @method     TblDepenses findOne(PropelPDO $con = null) Return the first TblDepenses matching the query
 * @method     TblDepenses findOneOrCreate(PropelPDO $con = null) Return the first TblDepenses matching the query, or a new TblDepenses object populated from the query conditions when no match is found
 *
 * @method     TblDepenses findOneByIdDepenses(int $id_depenses) Return the first TblDepenses filtered by the id_depenses column
 * @method     TblDepenses findOneByDateDepenses(string $date_depenses) Return the first TblDepenses filtered by the date_depenses column
 * @method     TblDepenses findOneByIdRefDepenses(int $id_ref_depenses) Return the first TblDepenses filtered by the id_ref_depenses column
 * @method     TblDepenses findOneByMontantDepenses(double $montant_depenses) Return the first TblDepenses filtered by the montant_depenses column
 * @method     TblDepenses findOneByEtatPaiement(boolean $etat_paiement) Return the first TblDepenses filtered by the etat_paiement column
 * @method     TblDepenses findOneByCreatedAt(string $created_at) Return the first TblDepenses filtered by the created_at column
 * @method     TblDepenses findOneByUpdatedAt(string $updated_at) Return the first TblDepenses filtered by the updated_at column
 * @method     TblDepenses findOneByDeletedAt(string $deleted_at) Return the first TblDepenses filtered by the deleted_at column
 *
 * @method     array findByIdDepenses(int $id_depenses) Return TblDepenses objects filtered by the id_depenses column
 * @method     array findByDateDepenses(string $date_depenses) Return TblDepenses objects filtered by the date_depenses column
 * @method     array findByIdRefDepenses(int $id_ref_depenses) Return TblDepenses objects filtered by the id_ref_depenses column
 * @method     array findByMontantDepenses(double $montant_depenses) Return TblDepenses objects filtered by the montant_depenses column
 * @method     array findByEtatPaiement(boolean $etat_paiement) Return TblDepenses objects filtered by the etat_paiement column
 * @method     array findByCreatedAt(string $created_at) Return TblDepenses objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return TblDepenses objects filtered by the updated_at column
 * @method     array findByDeletedAt(string $deleted_at) Return TblDepenses objects filtered by the deleted_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTblDepensesQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseTblDepensesQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'TblDepenses', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new TblDepensesQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TblDepensesQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TblDepensesQuery) {
			return $criteria;
		}
		$query = new TblDepensesQuery();
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
	 * @return    TblDepenses|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = TblDepensesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(TblDepensesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    TblDepenses A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_DEPENSES`, `DATE_DEPENSES`, `ID_REF_DEPENSES`, `MONTANT_DEPENSES`, `ETAT_PAIEMENT`, `CREATED_AT`, `UPDATED_AT`, `DELETED_AT` FROM `tbl_depenses` WHERE `ID_DEPENSES` = :p0';
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
			$obj = new TblDepenses();
			$obj->hydrate($row);
			TblDepensesPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    TblDepenses|array|mixed the result, formatted by the current formatter
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
	 * @return    TblDepensesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(TblDepensesPeer::ID_DEPENSES, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    TblDepensesQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(TblDepensesPeer::ID_DEPENSES, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_depenses column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdDepenses(1234); // WHERE id_depenses = 1234
	 * $query->filterByIdDepenses(array(12, 34)); // WHERE id_depenses IN (12, 34)
	 * $query->filterByIdDepenses(array('min' => 12)); // WHERE id_depenses > 12
	 * </code>
	 *
	 * @param     mixed $idDepenses The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblDepensesQuery The current query, for fluid interface
	 */
	public function filterByIdDepenses($idDepenses = null, $comparison = null)
	{
		if (is_array($idDepenses) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(TblDepensesPeer::ID_DEPENSES, $idDepenses, $comparison);
	}

	/**
	 * Filter the query on the date_depenses column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateDepenses('2011-03-14'); // WHERE date_depenses = '2011-03-14'
	 * $query->filterByDateDepenses('now'); // WHERE date_depenses = '2011-03-14'
	 * $query->filterByDateDepenses(array('max' => 'yesterday')); // WHERE date_depenses > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateDepenses The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblDepensesQuery The current query, for fluid interface
	 */
	public function filterByDateDepenses($dateDepenses = null, $comparison = null)
	{
		if (is_array($dateDepenses)) {
			$useMinMax = false;
			if (isset($dateDepenses['min'])) {
				$this->addUsingAlias(TblDepensesPeer::DATE_DEPENSES, $dateDepenses['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateDepenses['max'])) {
				$this->addUsingAlias(TblDepensesPeer::DATE_DEPENSES, $dateDepenses['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblDepensesPeer::DATE_DEPENSES, $dateDepenses, $comparison);
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
	 * @see       filterByRefDepenses()
	 *
	 * @param     mixed $idRefDepenses The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblDepensesQuery The current query, for fluid interface
	 */
	public function filterByIdRefDepenses($idRefDepenses = null, $comparison = null)
	{
		if (is_array($idRefDepenses)) {
			$useMinMax = false;
			if (isset($idRefDepenses['min'])) {
				$this->addUsingAlias(TblDepensesPeer::ID_REF_DEPENSES, $idRefDepenses['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idRefDepenses['max'])) {
				$this->addUsingAlias(TblDepensesPeer::ID_REF_DEPENSES, $idRefDepenses['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblDepensesPeer::ID_REF_DEPENSES, $idRefDepenses, $comparison);
	}

	/**
	 * Filter the query on the montant_depenses column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMontantDepenses(1234); // WHERE montant_depenses = 1234
	 * $query->filterByMontantDepenses(array(12, 34)); // WHERE montant_depenses IN (12, 34)
	 * $query->filterByMontantDepenses(array('min' => 12)); // WHERE montant_depenses > 12
	 * </code>
	 *
	 * @param     mixed $montantDepenses The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblDepensesQuery The current query, for fluid interface
	 */
	public function filterByMontantDepenses($montantDepenses = null, $comparison = null)
	{
		if (is_array($montantDepenses)) {
			$useMinMax = false;
			if (isset($montantDepenses['min'])) {
				$this->addUsingAlias(TblDepensesPeer::MONTANT_DEPENSES, $montantDepenses['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($montantDepenses['max'])) {
				$this->addUsingAlias(TblDepensesPeer::MONTANT_DEPENSES, $montantDepenses['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblDepensesPeer::MONTANT_DEPENSES, $montantDepenses, $comparison);
	}

	/**
	 * Filter the query on the etat_paiement column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByEtatPaiement(true); // WHERE etat_paiement = true
	 * $query->filterByEtatPaiement('yes'); // WHERE etat_paiement = true
	 * </code>
	 *
	 * @param     boolean|string $etatPaiement The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblDepensesQuery The current query, for fluid interface
	 */
	public function filterByEtatPaiement($etatPaiement = null, $comparison = null)
	{
		if (is_string($etatPaiement)) {
			$etat_paiement = in_array(strtolower($etatPaiement), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(TblDepensesPeer::ETAT_PAIEMENT, $etatPaiement, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
	 * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
	 * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $createdAt The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblDepensesQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(TblDepensesPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(TblDepensesPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblDepensesPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
	 * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
	 * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $updatedAt The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblDepensesQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(TblDepensesPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(TblDepensesPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblDepensesPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query on the deleted_at column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDeletedAt('2011-03-14'); // WHERE deleted_at = '2011-03-14'
	 * $query->filterByDeletedAt('now'); // WHERE deleted_at = '2011-03-14'
	 * $query->filterByDeletedAt(array('max' => 'yesterday')); // WHERE deleted_at > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $deletedAt The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblDepensesQuery The current query, for fluid interface
	 */
	public function filterByDeletedAt($deletedAt = null, $comparison = null)
	{
		if (is_array($deletedAt)) {
			$useMinMax = false;
			if (isset($deletedAt['min'])) {
				$this->addUsingAlias(TblDepensesPeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedAt['max'])) {
				$this->addUsingAlias(TblDepensesPeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblDepensesPeer::DELETED_AT, $deletedAt, $comparison);
	}

	/**
	 * Filter the query by a related RefDepenses object
	 *
	 * @param     RefDepenses|PropelCollection $refDepenses The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblDepensesQuery The current query, for fluid interface
	 */
	public function filterByRefDepenses($refDepenses, $comparison = null)
	{
		if ($refDepenses instanceof RefDepenses) {
			return $this
				->addUsingAlias(TblDepensesPeer::ID_REF_DEPENSES, $refDepenses->getIdRefDepenses(), $comparison);
		} elseif ($refDepenses instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblDepensesPeer::ID_REF_DEPENSES, $refDepenses->toKeyValue('PrimaryKey', 'IdRefDepenses'), $comparison);
		} else {
			throw new PropelException('filterByRefDepenses() only accepts arguments of type RefDepenses or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefDepenses relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblDepensesQuery The current query, for fluid interface
	 */
	public function joinRefDepenses($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefDepenses');

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
			$this->addJoinObject($join, 'RefDepenses');
		}

		return $this;
	}

	/**
	 * Use the RefDepenses relation RefDepenses object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefDepensesQuery A secondary query class using the current class as primary query
	 */
	public function useRefDepensesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinRefDepenses($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefDepenses', 'RefDepensesQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     TblDepenses $tblDepenses Object to remove from the list of results
	 *
	 * @return    TblDepensesQuery The current query, for fluid interface
	 */
	public function prune($tblDepenses = null)
	{
		if ($tblDepenses) {
			$this->addUsingAlias(TblDepensesPeer::ID_DEPENSES, $tblDepenses->getIdDepenses(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseTblDepensesQuery