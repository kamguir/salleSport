<?php


/**
 * Base class that represents a query for the 'tbl_assurance' table.
 *
 * 
 *
 * @method     TblAssuranceQuery orderByAssuranceId($order = Criteria::ASC) Order by the assurance_id column
 * @method     TblAssuranceQuery orderByAdherentId($order = Criteria::ASC) Order by the adherent_id column
 * @method     TblAssuranceQuery orderByRefAssuranceId($order = Criteria::ASC) Order by the ref_assurance_id column
 * @method     TblAssuranceQuery orderByPrixAssurance($order = Criteria::ASC) Order by the prix_assurance column
 * @method     TblAssuranceQuery orderByEtatPaiement($order = Criteria::ASC) Order by the etat_paiement column
 * @method     TblAssuranceQuery orderByDateAssurance($order = Criteria::ASC) Order by the date_assurance column
 * @method     TblAssuranceQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     TblAssuranceQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 *
 * @method     TblAssuranceQuery groupByAssuranceId() Group by the assurance_id column
 * @method     TblAssuranceQuery groupByAdherentId() Group by the adherent_id column
 * @method     TblAssuranceQuery groupByRefAssuranceId() Group by the ref_assurance_id column
 * @method     TblAssuranceQuery groupByPrixAssurance() Group by the prix_assurance column
 * @method     TblAssuranceQuery groupByEtatPaiement() Group by the etat_paiement column
 * @method     TblAssuranceQuery groupByDateAssurance() Group by the date_assurance column
 * @method     TblAssuranceQuery groupByCreatedAt() Group by the created_at column
 * @method     TblAssuranceQuery groupByDeletedAt() Group by the deleted_at column
 *
 * @method     TblAssuranceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TblAssuranceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TblAssuranceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TblAssuranceQuery leftJoinTblAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblAdherent relation
 * @method     TblAssuranceQuery rightJoinTblAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblAdherent relation
 * @method     TblAssuranceQuery innerJoinTblAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the TblAdherent relation
 *
 * @method     TblAssuranceQuery leftJoinRefAssurance($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefAssurance relation
 * @method     TblAssuranceQuery rightJoinRefAssurance($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefAssurance relation
 * @method     TblAssuranceQuery innerJoinRefAssurance($relationAlias = null) Adds a INNER JOIN clause to the query using the RefAssurance relation
 *
 * @method     TblAssurance findOne(PropelPDO $con = null) Return the first TblAssurance matching the query
 * @method     TblAssurance findOneOrCreate(PropelPDO $con = null) Return the first TblAssurance matching the query, or a new TblAssurance object populated from the query conditions when no match is found
 *
 * @method     TblAssurance findOneByAssuranceId(int $assurance_id) Return the first TblAssurance filtered by the assurance_id column
 * @method     TblAssurance findOneByAdherentId(int $adherent_id) Return the first TblAssurance filtered by the adherent_id column
 * @method     TblAssurance findOneByRefAssuranceId(int $ref_assurance_id) Return the first TblAssurance filtered by the ref_assurance_id column
 * @method     TblAssurance findOneByPrixAssurance(double $prix_assurance) Return the first TblAssurance filtered by the prix_assurance column
 * @method     TblAssurance findOneByEtatPaiement(boolean $etat_paiement) Return the first TblAssurance filtered by the etat_paiement column
 * @method     TblAssurance findOneByDateAssurance(string $date_assurance) Return the first TblAssurance filtered by the date_assurance column
 * @method     TblAssurance findOneByCreatedAt(string $created_at) Return the first TblAssurance filtered by the created_at column
 * @method     TblAssurance findOneByDeletedAt(string $deleted_at) Return the first TblAssurance filtered by the deleted_at column
 *
 * @method     array findByAssuranceId(int $assurance_id) Return TblAssurance objects filtered by the assurance_id column
 * @method     array findByAdherentId(int $adherent_id) Return TblAssurance objects filtered by the adherent_id column
 * @method     array findByRefAssuranceId(int $ref_assurance_id) Return TblAssurance objects filtered by the ref_assurance_id column
 * @method     array findByPrixAssurance(double $prix_assurance) Return TblAssurance objects filtered by the prix_assurance column
 * @method     array findByEtatPaiement(boolean $etat_paiement) Return TblAssurance objects filtered by the etat_paiement column
 * @method     array findByDateAssurance(string $date_assurance) Return TblAssurance objects filtered by the date_assurance column
 * @method     array findByCreatedAt(string $created_at) Return TblAssurance objects filtered by the created_at column
 * @method     array findByDeletedAt(string $deleted_at) Return TblAssurance objects filtered by the deleted_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTblAssuranceQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseTblAssuranceQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'TblAssurance', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new TblAssuranceQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TblAssuranceQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TblAssuranceQuery) {
			return $criteria;
		}
		$query = new TblAssuranceQuery();
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
	 * @return    TblAssurance|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = TblAssurancePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(TblAssurancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    TblAssurance A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ASSURANCE_ID`, `ADHERENT_ID`, `REF_ASSURANCE_ID`, `PRIX_ASSURANCE`, `ETAT_PAIEMENT`, `DATE_ASSURANCE`, `CREATED_AT`, `DELETED_AT` FROM `tbl_assurance` WHERE `ASSURANCE_ID` = :p0';
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
			$obj = new TblAssurance();
			$obj->hydrate($row);
			TblAssurancePeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    TblAssurance|array|mixed the result, formatted by the current formatter
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
	 * @return    TblAssuranceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(TblAssurancePeer::ASSURANCE_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    TblAssuranceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(TblAssurancePeer::ASSURANCE_ID, $keys, Criteria::IN);
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
	 * @return    TblAssuranceQuery The current query, for fluid interface
	 */
	public function filterByAssuranceId($assuranceId = null, $comparison = null)
	{
		if (is_array($assuranceId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(TblAssurancePeer::ASSURANCE_ID, $assuranceId, $comparison);
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
	 * @return    TblAssuranceQuery The current query, for fluid interface
	 */
	public function filterByAdherentId($adherentId = null, $comparison = null)
	{
		if (is_array($adherentId)) {
			$useMinMax = false;
			if (isset($adherentId['min'])) {
				$this->addUsingAlias(TblAssurancePeer::ADHERENT_ID, $adherentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($adherentId['max'])) {
				$this->addUsingAlias(TblAssurancePeer::ADHERENT_ID, $adherentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAssurancePeer::ADHERENT_ID, $adherentId, $comparison);
	}

	/**
	 * Filter the query on the ref_assurance_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRefAssuranceId(1234); // WHERE ref_assurance_id = 1234
	 * $query->filterByRefAssuranceId(array(12, 34)); // WHERE ref_assurance_id IN (12, 34)
	 * $query->filterByRefAssuranceId(array('min' => 12)); // WHERE ref_assurance_id > 12
	 * </code>
	 *
	 * @see       filterByRefAssurance()
	 *
	 * @param     mixed $refAssuranceId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAssuranceQuery The current query, for fluid interface
	 */
	public function filterByRefAssuranceId($refAssuranceId = null, $comparison = null)
	{
		if (is_array($refAssuranceId)) {
			$useMinMax = false;
			if (isset($refAssuranceId['min'])) {
				$this->addUsingAlias(TblAssurancePeer::REF_ASSURANCE_ID, $refAssuranceId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($refAssuranceId['max'])) {
				$this->addUsingAlias(TblAssurancePeer::REF_ASSURANCE_ID, $refAssuranceId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAssurancePeer::REF_ASSURANCE_ID, $refAssuranceId, $comparison);
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
	 * @return    TblAssuranceQuery The current query, for fluid interface
	 */
	public function filterByPrixAssurance($prixAssurance = null, $comparison = null)
	{
		if (is_array($prixAssurance)) {
			$useMinMax = false;
			if (isset($prixAssurance['min'])) {
				$this->addUsingAlias(TblAssurancePeer::PRIX_ASSURANCE, $prixAssurance['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($prixAssurance['max'])) {
				$this->addUsingAlias(TblAssurancePeer::PRIX_ASSURANCE, $prixAssurance['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAssurancePeer::PRIX_ASSURANCE, $prixAssurance, $comparison);
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
	 * @return    TblAssuranceQuery The current query, for fluid interface
	 */
	public function filterByEtatPaiement($etatPaiement = null, $comparison = null)
	{
		if (is_string($etatPaiement)) {
			$etat_paiement = in_array(strtolower($etatPaiement), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(TblAssurancePeer::ETAT_PAIEMENT, $etatPaiement, $comparison);
	}

	/**
	 * Filter the query on the date_assurance column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateAssurance('2011-03-14'); // WHERE date_assurance = '2011-03-14'
	 * $query->filterByDateAssurance('now'); // WHERE date_assurance = '2011-03-14'
	 * $query->filterByDateAssurance(array('max' => 'yesterday')); // WHERE date_assurance > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateAssurance The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAssuranceQuery The current query, for fluid interface
	 */
	public function filterByDateAssurance($dateAssurance = null, $comparison = null)
	{
		if (is_array($dateAssurance)) {
			$useMinMax = false;
			if (isset($dateAssurance['min'])) {
				$this->addUsingAlias(TblAssurancePeer::DATE_ASSURANCE, $dateAssurance['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAssurance['max'])) {
				$this->addUsingAlias(TblAssurancePeer::DATE_ASSURANCE, $dateAssurance['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAssurancePeer::DATE_ASSURANCE, $dateAssurance, $comparison);
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
	 * @return    TblAssuranceQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(TblAssurancePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(TblAssurancePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAssurancePeer::CREATED_AT, $createdAt, $comparison);
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
	 * @return    TblAssuranceQuery The current query, for fluid interface
	 */
	public function filterByDeletedAt($deletedAt = null, $comparison = null)
	{
		if (is_array($deletedAt)) {
			$useMinMax = false;
			if (isset($deletedAt['min'])) {
				$this->addUsingAlias(TblAssurancePeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedAt['max'])) {
				$this->addUsingAlias(TblAssurancePeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAssurancePeer::DELETED_AT, $deletedAt, $comparison);
	}

	/**
	 * Filter the query by a related TblAdherent object
	 *
	 * @param     TblAdherent|PropelCollection $tblAdherent The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAssuranceQuery The current query, for fluid interface
	 */
	public function filterByTblAdherent($tblAdherent, $comparison = null)
	{
		if ($tblAdherent instanceof TblAdherent) {
			return $this
				->addUsingAlias(TblAssurancePeer::ADHERENT_ID, $tblAdherent->getIdAdherent(), $comparison);
		} elseif ($tblAdherent instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblAssurancePeer::ADHERENT_ID, $tblAdherent->toKeyValue('PrimaryKey', 'IdAdherent'), $comparison);
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
	 * @return    TblAssuranceQuery The current query, for fluid interface
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
	 * Filter the query by a related RefAssurance object
	 *
	 * @param     RefAssurance|PropelCollection $refAssurance The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAssuranceQuery The current query, for fluid interface
	 */
	public function filterByRefAssurance($refAssurance, $comparison = null)
	{
		if ($refAssurance instanceof RefAssurance) {
			return $this
				->addUsingAlias(TblAssurancePeer::REF_ASSURANCE_ID, $refAssurance->getAssuranceId(), $comparison);
		} elseif ($refAssurance instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblAssurancePeer::REF_ASSURANCE_ID, $refAssurance->toKeyValue('PrimaryKey', 'AssuranceId'), $comparison);
		} else {
			throw new PropelException('filterByRefAssurance() only accepts arguments of type RefAssurance or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefAssurance relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblAssuranceQuery The current query, for fluid interface
	 */
	public function joinRefAssurance($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefAssurance');

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
			$this->addJoinObject($join, 'RefAssurance');
		}

		return $this;
	}

	/**
	 * Use the RefAssurance relation RefAssurance object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefAssuranceQuery A secondary query class using the current class as primary query
	 */
	public function useRefAssuranceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinRefAssurance($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefAssurance', 'RefAssuranceQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     TblAssurance $tblAssurance Object to remove from the list of results
	 *
	 * @return    TblAssuranceQuery The current query, for fluid interface
	 */
	public function prune($tblAssurance = null)
	{
		if ($tblAssurance) {
			$this->addUsingAlias(TblAssurancePeer::ASSURANCE_ID, $tblAssurance->getAssuranceId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseTblAssuranceQuery