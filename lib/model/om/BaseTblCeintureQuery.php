<?php


/**
 * Base class that represents a query for the 'tbl_ceinture' table.
 *
 * 
 *
 * @method     TblCeintureQuery orderByCeintureId($order = Criteria::ASC) Order by the ceinture_id column
 * @method     TblCeintureQuery orderByAdherentId($order = Criteria::ASC) Order by the adherent_id column
 * @method     TblCeintureQuery orderByGradeId($order = Criteria::ASC) Order by the grade_id column
 * @method     TblCeintureQuery orderByCompetanceId($order = Criteria::ASC) Order by the competance_id column
 * @method     TblCeintureQuery orderByTitreEntraineurId($order = Criteria::ASC) Order by the titre_entraineur_id column
 * @method     TblCeintureQuery orderByCeintureCouleurId($order = Criteria::ASC) Order by the ceinture_couleur_id column
 * @method     TblCeintureQuery orderByDateAcquisition($order = Criteria::ASC) Order by the date_acquisition column
 * @method     TblCeintureQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     TblCeintureQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 *
 * @method     TblCeintureQuery groupByCeintureId() Group by the ceinture_id column
 * @method     TblCeintureQuery groupByAdherentId() Group by the adherent_id column
 * @method     TblCeintureQuery groupByGradeId() Group by the grade_id column
 * @method     TblCeintureQuery groupByCompetanceId() Group by the competance_id column
 * @method     TblCeintureQuery groupByTitreEntraineurId() Group by the titre_entraineur_id column
 * @method     TblCeintureQuery groupByCeintureCouleurId() Group by the ceinture_couleur_id column
 * @method     TblCeintureQuery groupByDateAcquisition() Group by the date_acquisition column
 * @method     TblCeintureQuery groupByCreatedAt() Group by the created_at column
 * @method     TblCeintureQuery groupByDeletedAt() Group by the deleted_at column
 *
 * @method     TblCeintureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TblCeintureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TblCeintureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TblCeintureQuery leftJoinTblAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblAdherent relation
 * @method     TblCeintureQuery rightJoinTblAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblAdherent relation
 * @method     TblCeintureQuery innerJoinTblAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the TblAdherent relation
 *
 * @method     TblCeintureQuery leftJoinRefGradeCeinture($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefGradeCeinture relation
 * @method     TblCeintureQuery rightJoinRefGradeCeinture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefGradeCeinture relation
 * @method     TblCeintureQuery innerJoinRefGradeCeinture($relationAlias = null) Adds a INNER JOIN clause to the query using the RefGradeCeinture relation
 *
 * @method     TblCeintureQuery leftJoinRefCompetance($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefCompetance relation
 * @method     TblCeintureQuery rightJoinRefCompetance($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefCompetance relation
 * @method     TblCeintureQuery innerJoinRefCompetance($relationAlias = null) Adds a INNER JOIN clause to the query using the RefCompetance relation
 *
 * @method     TblCeintureQuery leftJoinRefTitreEntraineur($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefTitreEntraineur relation
 * @method     TblCeintureQuery rightJoinRefTitreEntraineur($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefTitreEntraineur relation
 * @method     TblCeintureQuery innerJoinRefTitreEntraineur($relationAlias = null) Adds a INNER JOIN clause to the query using the RefTitreEntraineur relation
 *
 * @method     TblCeintureQuery leftJoinRefCeintureCouleur($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefCeintureCouleur relation
 * @method     TblCeintureQuery rightJoinRefCeintureCouleur($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefCeintureCouleur relation
 * @method     TblCeintureQuery innerJoinRefCeintureCouleur($relationAlias = null) Adds a INNER JOIN clause to the query using the RefCeintureCouleur relation
 *
 * @method     TblCeinture findOne(PropelPDO $con = null) Return the first TblCeinture matching the query
 * @method     TblCeinture findOneOrCreate(PropelPDO $con = null) Return the first TblCeinture matching the query, or a new TblCeinture object populated from the query conditions when no match is found
 *
 * @method     TblCeinture findOneByCeintureId(int $ceinture_id) Return the first TblCeinture filtered by the ceinture_id column
 * @method     TblCeinture findOneByAdherentId(int $adherent_id) Return the first TblCeinture filtered by the adherent_id column
 * @method     TblCeinture findOneByGradeId(int $grade_id) Return the first TblCeinture filtered by the grade_id column
 * @method     TblCeinture findOneByCompetanceId(int $competance_id) Return the first TblCeinture filtered by the competance_id column
 * @method     TblCeinture findOneByTitreEntraineurId(int $titre_entraineur_id) Return the first TblCeinture filtered by the titre_entraineur_id column
 * @method     TblCeinture findOneByCeintureCouleurId(int $ceinture_couleur_id) Return the first TblCeinture filtered by the ceinture_couleur_id column
 * @method     TblCeinture findOneByDateAcquisition(string $date_acquisition) Return the first TblCeinture filtered by the date_acquisition column
 * @method     TblCeinture findOneByCreatedAt(string $created_at) Return the first TblCeinture filtered by the created_at column
 * @method     TblCeinture findOneByDeletedAt(string $deleted_at) Return the first TblCeinture filtered by the deleted_at column
 *
 * @method     array findByCeintureId(int $ceinture_id) Return TblCeinture objects filtered by the ceinture_id column
 * @method     array findByAdherentId(int $adherent_id) Return TblCeinture objects filtered by the adherent_id column
 * @method     array findByGradeId(int $grade_id) Return TblCeinture objects filtered by the grade_id column
 * @method     array findByCompetanceId(int $competance_id) Return TblCeinture objects filtered by the competance_id column
 * @method     array findByTitreEntraineurId(int $titre_entraineur_id) Return TblCeinture objects filtered by the titre_entraineur_id column
 * @method     array findByCeintureCouleurId(int $ceinture_couleur_id) Return TblCeinture objects filtered by the ceinture_couleur_id column
 * @method     array findByDateAcquisition(string $date_acquisition) Return TblCeinture objects filtered by the date_acquisition column
 * @method     array findByCreatedAt(string $created_at) Return TblCeinture objects filtered by the created_at column
 * @method     array findByDeletedAt(string $deleted_at) Return TblCeinture objects filtered by the deleted_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTblCeintureQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseTblCeintureQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'TblCeinture', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new TblCeintureQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TblCeintureQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TblCeintureQuery) {
			return $criteria;
		}
		$query = new TblCeintureQuery();
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
	 * @return    TblCeinture|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = TblCeinturePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    TblCeinture A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `CEINTURE_ID`, `ADHERENT_ID`, `GRADE_ID`, `COMPETANCE_ID`, `TITRE_ENTRAINEUR_ID`, `CEINTURE_COULEUR_ID`, `DATE_ACQUISITION`, `CREATED_AT`, `DELETED_AT` FROM `tbl_ceinture` WHERE `CEINTURE_ID` = :p0';
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
			$obj = new TblCeinture();
			$obj->hydrate($row);
			TblCeinturePeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    TblCeinture|array|mixed the result, formatted by the current formatter
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
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(TblCeinturePeer::CEINTURE_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(TblCeinturePeer::CEINTURE_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the ceinture_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCeintureId(1234); // WHERE ceinture_id = 1234
	 * $query->filterByCeintureId(array(12, 34)); // WHERE ceinture_id IN (12, 34)
	 * $query->filterByCeintureId(array('min' => 12)); // WHERE ceinture_id > 12
	 * </code>
	 *
	 * @param     mixed $ceintureId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByCeintureId($ceintureId = null, $comparison = null)
	{
		if (is_array($ceintureId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(TblCeinturePeer::CEINTURE_ID, $ceintureId, $comparison);
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
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByAdherentId($adherentId = null, $comparison = null)
	{
		if (is_array($adherentId)) {
			$useMinMax = false;
			if (isset($adherentId['min'])) {
				$this->addUsingAlias(TblCeinturePeer::ADHERENT_ID, $adherentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($adherentId['max'])) {
				$this->addUsingAlias(TblCeinturePeer::ADHERENT_ID, $adherentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblCeinturePeer::ADHERENT_ID, $adherentId, $comparison);
	}

	/**
	 * Filter the query on the grade_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByGradeId(1234); // WHERE grade_id = 1234
	 * $query->filterByGradeId(array(12, 34)); // WHERE grade_id IN (12, 34)
	 * $query->filterByGradeId(array('min' => 12)); // WHERE grade_id > 12
	 * </code>
	 *
	 * @see       filterByRefGradeCeinture()
	 *
	 * @param     mixed $gradeId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByGradeId($gradeId = null, $comparison = null)
	{
		if (is_array($gradeId)) {
			$useMinMax = false;
			if (isset($gradeId['min'])) {
				$this->addUsingAlias(TblCeinturePeer::GRADE_ID, $gradeId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($gradeId['max'])) {
				$this->addUsingAlias(TblCeinturePeer::GRADE_ID, $gradeId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblCeinturePeer::GRADE_ID, $gradeId, $comparison);
	}

	/**
	 * Filter the query on the competance_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCompetanceId(1234); // WHERE competance_id = 1234
	 * $query->filterByCompetanceId(array(12, 34)); // WHERE competance_id IN (12, 34)
	 * $query->filterByCompetanceId(array('min' => 12)); // WHERE competance_id > 12
	 * </code>
	 *
	 * @see       filterByRefCompetance()
	 *
	 * @param     mixed $competanceId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByCompetanceId($competanceId = null, $comparison = null)
	{
		if (is_array($competanceId)) {
			$useMinMax = false;
			if (isset($competanceId['min'])) {
				$this->addUsingAlias(TblCeinturePeer::COMPETANCE_ID, $competanceId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($competanceId['max'])) {
				$this->addUsingAlias(TblCeinturePeer::COMPETANCE_ID, $competanceId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblCeinturePeer::COMPETANCE_ID, $competanceId, $comparison);
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
	 * @see       filterByRefTitreEntraineur()
	 *
	 * @param     mixed $titreEntraineurId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByTitreEntraineurId($titreEntraineurId = null, $comparison = null)
	{
		if (is_array($titreEntraineurId)) {
			$useMinMax = false;
			if (isset($titreEntraineurId['min'])) {
				$this->addUsingAlias(TblCeinturePeer::TITRE_ENTRAINEUR_ID, $titreEntraineurId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($titreEntraineurId['max'])) {
				$this->addUsingAlias(TblCeinturePeer::TITRE_ENTRAINEUR_ID, $titreEntraineurId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblCeinturePeer::TITRE_ENTRAINEUR_ID, $titreEntraineurId, $comparison);
	}

	/**
	 * Filter the query on the ceinture_couleur_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCeintureCouleurId(1234); // WHERE ceinture_couleur_id = 1234
	 * $query->filterByCeintureCouleurId(array(12, 34)); // WHERE ceinture_couleur_id IN (12, 34)
	 * $query->filterByCeintureCouleurId(array('min' => 12)); // WHERE ceinture_couleur_id > 12
	 * </code>
	 *
	 * @see       filterByRefCeintureCouleur()
	 *
	 * @param     mixed $ceintureCouleurId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByCeintureCouleurId($ceintureCouleurId = null, $comparison = null)
	{
		if (is_array($ceintureCouleurId)) {
			$useMinMax = false;
			if (isset($ceintureCouleurId['min'])) {
				$this->addUsingAlias(TblCeinturePeer::CEINTURE_COULEUR_ID, $ceintureCouleurId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ceintureCouleurId['max'])) {
				$this->addUsingAlias(TblCeinturePeer::CEINTURE_COULEUR_ID, $ceintureCouleurId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblCeinturePeer::CEINTURE_COULEUR_ID, $ceintureCouleurId, $comparison);
	}

	/**
	 * Filter the query on the date_acquisition column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateAcquisition('2011-03-14'); // WHERE date_acquisition = '2011-03-14'
	 * $query->filterByDateAcquisition('now'); // WHERE date_acquisition = '2011-03-14'
	 * $query->filterByDateAcquisition(array('max' => 'yesterday')); // WHERE date_acquisition > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateAcquisition The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByDateAcquisition($dateAcquisition = null, $comparison = null)
	{
		if (is_array($dateAcquisition)) {
			$useMinMax = false;
			if (isset($dateAcquisition['min'])) {
				$this->addUsingAlias(TblCeinturePeer::DATE_ACQUISITION, $dateAcquisition['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAcquisition['max'])) {
				$this->addUsingAlias(TblCeinturePeer::DATE_ACQUISITION, $dateAcquisition['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblCeinturePeer::DATE_ACQUISITION, $dateAcquisition, $comparison);
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
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(TblCeinturePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(TblCeinturePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblCeinturePeer::CREATED_AT, $createdAt, $comparison);
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
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByDeletedAt($deletedAt = null, $comparison = null)
	{
		if (is_array($deletedAt)) {
			$useMinMax = false;
			if (isset($deletedAt['min'])) {
				$this->addUsingAlias(TblCeinturePeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedAt['max'])) {
				$this->addUsingAlias(TblCeinturePeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblCeinturePeer::DELETED_AT, $deletedAt, $comparison);
	}

	/**
	 * Filter the query by a related TblAdherent object
	 *
	 * @param     TblAdherent|PropelCollection $tblAdherent The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByTblAdherent($tblAdherent, $comparison = null)
	{
		if ($tblAdherent instanceof TblAdherent) {
			return $this
				->addUsingAlias(TblCeinturePeer::ADHERENT_ID, $tblAdherent->getIdAdherent(), $comparison);
		} elseif ($tblAdherent instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblCeinturePeer::ADHERENT_ID, $tblAdherent->toKeyValue('PrimaryKey', 'IdAdherent'), $comparison);
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
	 * @return    TblCeintureQuery The current query, for fluid interface
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
	 * Filter the query by a related RefGradeCeinture object
	 *
	 * @param     RefGradeCeinture|PropelCollection $refGradeCeinture The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByRefGradeCeinture($refGradeCeinture, $comparison = null)
	{
		if ($refGradeCeinture instanceof RefGradeCeinture) {
			return $this
				->addUsingAlias(TblCeinturePeer::GRADE_ID, $refGradeCeinture->getGradeId(), $comparison);
		} elseif ($refGradeCeinture instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblCeinturePeer::GRADE_ID, $refGradeCeinture->toKeyValue('PrimaryKey', 'GradeId'), $comparison);
		} else {
			throw new PropelException('filterByRefGradeCeinture() only accepts arguments of type RefGradeCeinture or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefGradeCeinture relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function joinRefGradeCeinture($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefGradeCeinture');

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
			$this->addJoinObject($join, 'RefGradeCeinture');
		}

		return $this;
	}

	/**
	 * Use the RefGradeCeinture relation RefGradeCeinture object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefGradeCeintureQuery A secondary query class using the current class as primary query
	 */
	public function useRefGradeCeintureQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinRefGradeCeinture($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefGradeCeinture', 'RefGradeCeintureQuery');
	}

	/**
	 * Filter the query by a related RefCompetance object
	 *
	 * @param     RefCompetance|PropelCollection $refCompetance The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByRefCompetance($refCompetance, $comparison = null)
	{
		if ($refCompetance instanceof RefCompetance) {
			return $this
				->addUsingAlias(TblCeinturePeer::COMPETANCE_ID, $refCompetance->getCompetanceId(), $comparison);
		} elseif ($refCompetance instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblCeinturePeer::COMPETANCE_ID, $refCompetance->toKeyValue('PrimaryKey', 'CompetanceId'), $comparison);
		} else {
			throw new PropelException('filterByRefCompetance() only accepts arguments of type RefCompetance or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefCompetance relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function joinRefCompetance($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefCompetance');

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
			$this->addJoinObject($join, 'RefCompetance');
		}

		return $this;
	}

	/**
	 * Use the RefCompetance relation RefCompetance object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefCompetanceQuery A secondary query class using the current class as primary query
	 */
	public function useRefCompetanceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinRefCompetance($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefCompetance', 'RefCompetanceQuery');
	}

	/**
	 * Filter the query by a related RefTitreEntraineur object
	 *
	 * @param     RefTitreEntraineur|PropelCollection $refTitreEntraineur The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByRefTitreEntraineur($refTitreEntraineur, $comparison = null)
	{
		if ($refTitreEntraineur instanceof RefTitreEntraineur) {
			return $this
				->addUsingAlias(TblCeinturePeer::TITRE_ENTRAINEUR_ID, $refTitreEntraineur->getTitreEntraineurId(), $comparison);
		} elseif ($refTitreEntraineur instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblCeinturePeer::TITRE_ENTRAINEUR_ID, $refTitreEntraineur->toKeyValue('PrimaryKey', 'TitreEntraineurId'), $comparison);
		} else {
			throw new PropelException('filterByRefTitreEntraineur() only accepts arguments of type RefTitreEntraineur or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefTitreEntraineur relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function joinRefTitreEntraineur($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefTitreEntraineur');

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
			$this->addJoinObject($join, 'RefTitreEntraineur');
		}

		return $this;
	}

	/**
	 * Use the RefTitreEntraineur relation RefTitreEntraineur object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefTitreEntraineurQuery A secondary query class using the current class as primary query
	 */
	public function useRefTitreEntraineurQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinRefTitreEntraineur($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefTitreEntraineur', 'RefTitreEntraineurQuery');
	}

	/**
	 * Filter the query by a related RefCeintureCouleur object
	 *
	 * @param     RefCeintureCouleur|PropelCollection $refCeintureCouleur The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function filterByRefCeintureCouleur($refCeintureCouleur, $comparison = null)
	{
		if ($refCeintureCouleur instanceof RefCeintureCouleur) {
			return $this
				->addUsingAlias(TblCeinturePeer::CEINTURE_COULEUR_ID, $refCeintureCouleur->getCeintureCouleurId(), $comparison);
		} elseif ($refCeintureCouleur instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblCeinturePeer::CEINTURE_COULEUR_ID, $refCeintureCouleur->toKeyValue('PrimaryKey', 'CeintureCouleurId'), $comparison);
		} else {
			throw new PropelException('filterByRefCeintureCouleur() only accepts arguments of type RefCeintureCouleur or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefCeintureCouleur relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function joinRefCeintureCouleur($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefCeintureCouleur');

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
			$this->addJoinObject($join, 'RefCeintureCouleur');
		}

		return $this;
	}

	/**
	 * Use the RefCeintureCouleur relation RefCeintureCouleur object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefCeintureCouleurQuery A secondary query class using the current class as primary query
	 */
	public function useRefCeintureCouleurQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinRefCeintureCouleur($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefCeintureCouleur', 'RefCeintureCouleurQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     TblCeinture $tblCeinture Object to remove from the list of results
	 *
	 * @return    TblCeintureQuery The current query, for fluid interface
	 */
	public function prune($tblCeinture = null)
	{
		if ($tblCeinture) {
			$this->addUsingAlias(TblCeinturePeer::CEINTURE_ID, $tblCeinture->getCeintureId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseTblCeintureQuery