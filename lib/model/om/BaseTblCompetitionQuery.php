<?php


/**
 * Base class that represents a query for the 'tbl_competition' table.
 *
 * 
 *
 * @method     TblCompetitionQuery orderByCompetitionId($order = Criteria::ASC) Order by the competition_id column
 * @method     TblCompetitionQuery orderByCompetitionLibelle($order = Criteria::ASC) Order by the competition_libelle column
 * @method     TblCompetitionQuery orderByTypeSportId($order = Criteria::ASC) Order by the type_sport_id column
 * @method     TblCompetitionQuery orderByVilleId($order = Criteria::ASC) Order by the ville_id column
 * @method     TblCompetitionQuery orderByPrixCompetition($order = Criteria::ASC) Order by the prix_competition column
 * @method     TblCompetitionQuery orderByAdresseCompetition($order = Criteria::ASC) Order by the adresse_competition column
 * @method     TblCompetitionQuery orderByDateCompetition($order = Criteria::ASC) Order by the date_competition column
 * @method     TblCompetitionQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     TblCompetitionQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 *
 * @method     TblCompetitionQuery groupByCompetitionId() Group by the competition_id column
 * @method     TblCompetitionQuery groupByCompetitionLibelle() Group by the competition_libelle column
 * @method     TblCompetitionQuery groupByTypeSportId() Group by the type_sport_id column
 * @method     TblCompetitionQuery groupByVilleId() Group by the ville_id column
 * @method     TblCompetitionQuery groupByPrixCompetition() Group by the prix_competition column
 * @method     TblCompetitionQuery groupByAdresseCompetition() Group by the adresse_competition column
 * @method     TblCompetitionQuery groupByDateCompetition() Group by the date_competition column
 * @method     TblCompetitionQuery groupByCreatedAt() Group by the created_at column
 * @method     TblCompetitionQuery groupByDeletedAt() Group by the deleted_at column
 *
 * @method     TblCompetitionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TblCompetitionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TblCompetitionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TblCompetitionQuery leftJoinRefTypeSport($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefTypeSport relation
 * @method     TblCompetitionQuery rightJoinRefTypeSport($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefTypeSport relation
 * @method     TblCompetitionQuery innerJoinRefTypeSport($relationAlias = null) Adds a INNER JOIN clause to the query using the RefTypeSport relation
 *
 * @method     TblCompetitionQuery leftJoinRefVille($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefVille relation
 * @method     TblCompetitionQuery rightJoinRefVille($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefVille relation
 * @method     TblCompetitionQuery innerJoinRefVille($relationAlias = null) Adds a INNER JOIN clause to the query using the RefVille relation
 *
 * @method     TblCompetitionQuery leftJoinLnkAdherentCompetition($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkAdherentCompetition relation
 * @method     TblCompetitionQuery rightJoinLnkAdherentCompetition($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkAdherentCompetition relation
 * @method     TblCompetitionQuery innerJoinLnkAdherentCompetition($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkAdherentCompetition relation
 *
 * @method     TblCompetition findOne(PropelPDO $con = null) Return the first TblCompetition matching the query
 * @method     TblCompetition findOneOrCreate(PropelPDO $con = null) Return the first TblCompetition matching the query, or a new TblCompetition object populated from the query conditions when no match is found
 *
 * @method     TblCompetition findOneByCompetitionId(int $competition_id) Return the first TblCompetition filtered by the competition_id column
 * @method     TblCompetition findOneByCompetitionLibelle(string $competition_libelle) Return the first TblCompetition filtered by the competition_libelle column
 * @method     TblCompetition findOneByTypeSportId(int $type_sport_id) Return the first TblCompetition filtered by the type_sport_id column
 * @method     TblCompetition findOneByVilleId(int $ville_id) Return the first TblCompetition filtered by the ville_id column
 * @method     TblCompetition findOneByPrixCompetition(double $prix_competition) Return the first TblCompetition filtered by the prix_competition column
 * @method     TblCompetition findOneByAdresseCompetition(string $adresse_competition) Return the first TblCompetition filtered by the adresse_competition column
 * @method     TblCompetition findOneByDateCompetition(string $date_competition) Return the first TblCompetition filtered by the date_competition column
 * @method     TblCompetition findOneByCreatedAt(string $created_at) Return the first TblCompetition filtered by the created_at column
 * @method     TblCompetition findOneByDeletedAt(string $deleted_at) Return the first TblCompetition filtered by the deleted_at column
 *
 * @method     array findByCompetitionId(int $competition_id) Return TblCompetition objects filtered by the competition_id column
 * @method     array findByCompetitionLibelle(string $competition_libelle) Return TblCompetition objects filtered by the competition_libelle column
 * @method     array findByTypeSportId(int $type_sport_id) Return TblCompetition objects filtered by the type_sport_id column
 * @method     array findByVilleId(int $ville_id) Return TblCompetition objects filtered by the ville_id column
 * @method     array findByPrixCompetition(double $prix_competition) Return TblCompetition objects filtered by the prix_competition column
 * @method     array findByAdresseCompetition(string $adresse_competition) Return TblCompetition objects filtered by the adresse_competition column
 * @method     array findByDateCompetition(string $date_competition) Return TblCompetition objects filtered by the date_competition column
 * @method     array findByCreatedAt(string $created_at) Return TblCompetition objects filtered by the created_at column
 * @method     array findByDeletedAt(string $deleted_at) Return TblCompetition objects filtered by the deleted_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTblCompetitionQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseTblCompetitionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'TblCompetition', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new TblCompetitionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TblCompetitionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TblCompetitionQuery) {
			return $criteria;
		}
		$query = new TblCompetitionQuery();
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
	 * @return    TblCompetition|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = TblCompetitionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(TblCompetitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    TblCompetition A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `COMPETITION_ID`, `COMPETITION_LIBELLE`, `TYPE_SPORT_ID`, `VILLE_ID`, `PRIX_COMPETITION`, `ADRESSE_COMPETITION`, `DATE_COMPETITION`, `CREATED_AT`, `DELETED_AT` FROM `tbl_competition` WHERE `COMPETITION_ID` = :p0';
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
			$obj = new TblCompetition();
			$obj->hydrate($row);
			TblCompetitionPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    TblCompetition|array|mixed the result, formatted by the current formatter
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
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(TblCompetitionPeer::COMPETITION_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(TblCompetitionPeer::COMPETITION_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the competition_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCompetitionId(1234); // WHERE competition_id = 1234
	 * $query->filterByCompetitionId(array(12, 34)); // WHERE competition_id IN (12, 34)
	 * $query->filterByCompetitionId(array('min' => 12)); // WHERE competition_id > 12
	 * </code>
	 *
	 * @param     mixed $competitionId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function filterByCompetitionId($competitionId = null, $comparison = null)
	{
		if (is_array($competitionId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(TblCompetitionPeer::COMPETITION_ID, $competitionId, $comparison);
	}

	/**
	 * Filter the query on the competition_libelle column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCompetitionLibelle('fooValue');   // WHERE competition_libelle = 'fooValue'
	 * $query->filterByCompetitionLibelle('%fooValue%'); // WHERE competition_libelle LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $competitionLibelle The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function filterByCompetitionLibelle($competitionLibelle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($competitionLibelle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $competitionLibelle)) {
				$competitionLibelle = str_replace('*', '%', $competitionLibelle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TblCompetitionPeer::COMPETITION_LIBELLE, $competitionLibelle, $comparison);
	}

	/**
	 * Filter the query on the type_sport_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTypeSportId(1234); // WHERE type_sport_id = 1234
	 * $query->filterByTypeSportId(array(12, 34)); // WHERE type_sport_id IN (12, 34)
	 * $query->filterByTypeSportId(array('min' => 12)); // WHERE type_sport_id > 12
	 * </code>
	 *
	 * @see       filterByRefTypeSport()
	 *
	 * @param     mixed $typeSportId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function filterByTypeSportId($typeSportId = null, $comparison = null)
	{
		if (is_array($typeSportId)) {
			$useMinMax = false;
			if (isset($typeSportId['min'])) {
				$this->addUsingAlias(TblCompetitionPeer::TYPE_SPORT_ID, $typeSportId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($typeSportId['max'])) {
				$this->addUsingAlias(TblCompetitionPeer::TYPE_SPORT_ID, $typeSportId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblCompetitionPeer::TYPE_SPORT_ID, $typeSportId, $comparison);
	}

	/**
	 * Filter the query on the ville_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByVilleId(1234); // WHERE ville_id = 1234
	 * $query->filterByVilleId(array(12, 34)); // WHERE ville_id IN (12, 34)
	 * $query->filterByVilleId(array('min' => 12)); // WHERE ville_id > 12
	 * </code>
	 *
	 * @see       filterByRefVille()
	 *
	 * @param     mixed $villeId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function filterByVilleId($villeId = null, $comparison = null)
	{
		if (is_array($villeId)) {
			$useMinMax = false;
			if (isset($villeId['min'])) {
				$this->addUsingAlias(TblCompetitionPeer::VILLE_ID, $villeId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($villeId['max'])) {
				$this->addUsingAlias(TblCompetitionPeer::VILLE_ID, $villeId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblCompetitionPeer::VILLE_ID, $villeId, $comparison);
	}

	/**
	 * Filter the query on the prix_competition column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPrixCompetition(1234); // WHERE prix_competition = 1234
	 * $query->filterByPrixCompetition(array(12, 34)); // WHERE prix_competition IN (12, 34)
	 * $query->filterByPrixCompetition(array('min' => 12)); // WHERE prix_competition > 12
	 * </code>
	 *
	 * @param     mixed $prixCompetition The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function filterByPrixCompetition($prixCompetition = null, $comparison = null)
	{
		if (is_array($prixCompetition)) {
			$useMinMax = false;
			if (isset($prixCompetition['min'])) {
				$this->addUsingAlias(TblCompetitionPeer::PRIX_COMPETITION, $prixCompetition['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($prixCompetition['max'])) {
				$this->addUsingAlias(TblCompetitionPeer::PRIX_COMPETITION, $prixCompetition['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblCompetitionPeer::PRIX_COMPETITION, $prixCompetition, $comparison);
	}

	/**
	 * Filter the query on the adresse_competition column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAdresseCompetition('fooValue');   // WHERE adresse_competition = 'fooValue'
	 * $query->filterByAdresseCompetition('%fooValue%'); // WHERE adresse_competition LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $adresseCompetition The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function filterByAdresseCompetition($adresseCompetition = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($adresseCompetition)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $adresseCompetition)) {
				$adresseCompetition = str_replace('*', '%', $adresseCompetition);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TblCompetitionPeer::ADRESSE_COMPETITION, $adresseCompetition, $comparison);
	}

	/**
	 * Filter the query on the date_competition column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateCompetition('2011-03-14'); // WHERE date_competition = '2011-03-14'
	 * $query->filterByDateCompetition('now'); // WHERE date_competition = '2011-03-14'
	 * $query->filterByDateCompetition(array('max' => 'yesterday')); // WHERE date_competition > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateCompetition The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function filterByDateCompetition($dateCompetition = null, $comparison = null)
	{
		if (is_array($dateCompetition)) {
			$useMinMax = false;
			if (isset($dateCompetition['min'])) {
				$this->addUsingAlias(TblCompetitionPeer::DATE_COMPETITION, $dateCompetition['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCompetition['max'])) {
				$this->addUsingAlias(TblCompetitionPeer::DATE_COMPETITION, $dateCompetition['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblCompetitionPeer::DATE_COMPETITION, $dateCompetition, $comparison);
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
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(TblCompetitionPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(TblCompetitionPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblCompetitionPeer::CREATED_AT, $createdAt, $comparison);
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
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function filterByDeletedAt($deletedAt = null, $comparison = null)
	{
		if (is_array($deletedAt)) {
			$useMinMax = false;
			if (isset($deletedAt['min'])) {
				$this->addUsingAlias(TblCompetitionPeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedAt['max'])) {
				$this->addUsingAlias(TblCompetitionPeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblCompetitionPeer::DELETED_AT, $deletedAt, $comparison);
	}

	/**
	 * Filter the query by a related RefTypeSport object
	 *
	 * @param     RefTypeSport|PropelCollection $refTypeSport The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function filterByRefTypeSport($refTypeSport, $comparison = null)
	{
		if ($refTypeSport instanceof RefTypeSport) {
			return $this
				->addUsingAlias(TblCompetitionPeer::TYPE_SPORT_ID, $refTypeSport->getIdTypeSport(), $comparison);
		} elseif ($refTypeSport instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblCompetitionPeer::TYPE_SPORT_ID, $refTypeSport->toKeyValue('PrimaryKey', 'IdTypeSport'), $comparison);
		} else {
			throw new PropelException('filterByRefTypeSport() only accepts arguments of type RefTypeSport or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefTypeSport relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function joinRefTypeSport($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefTypeSport');

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
			$this->addJoinObject($join, 'RefTypeSport');
		}

		return $this;
	}

	/**
	 * Use the RefTypeSport relation RefTypeSport object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefTypeSportQuery A secondary query class using the current class as primary query
	 */
	public function useRefTypeSportQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinRefTypeSport($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefTypeSport', 'RefTypeSportQuery');
	}

	/**
	 * Filter the query by a related RefVille object
	 *
	 * @param     RefVille|PropelCollection $refVille The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function filterByRefVille($refVille, $comparison = null)
	{
		if ($refVille instanceof RefVille) {
			return $this
				->addUsingAlias(TblCompetitionPeer::VILLE_ID, $refVille->getVilleId(), $comparison);
		} elseif ($refVille instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblCompetitionPeer::VILLE_ID, $refVille->toKeyValue('PrimaryKey', 'VilleId'), $comparison);
		} else {
			throw new PropelException('filterByRefVille() only accepts arguments of type RefVille or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefVille relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function joinRefVille($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefVille');

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
			$this->addJoinObject($join, 'RefVille');
		}

		return $this;
	}

	/**
	 * Use the RefVille relation RefVille object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefVilleQuery A secondary query class using the current class as primary query
	 */
	public function useRefVilleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinRefVille($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefVille', 'RefVilleQuery');
	}

	/**
	 * Filter the query by a related LnkAdherentCompetition object
	 *
	 * @param     LnkAdherentCompetition $lnkAdherentCompetition  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function filterByLnkAdherentCompetition($lnkAdherentCompetition, $comparison = null)
	{
		if ($lnkAdherentCompetition instanceof LnkAdherentCompetition) {
			return $this
				->addUsingAlias(TblCompetitionPeer::COMPETITION_ID, $lnkAdherentCompetition->getCompetitionId(), $comparison);
		} elseif ($lnkAdherentCompetition instanceof PropelCollection) {
			return $this
				->useLnkAdherentCompetitionQuery()
				->filterByPrimaryKeys($lnkAdherentCompetition->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByLnkAdherentCompetition() only accepts arguments of type LnkAdherentCompetition or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the LnkAdherentCompetition relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function joinLnkAdherentCompetition($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('LnkAdherentCompetition');

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
			$this->addJoinObject($join, 'LnkAdherentCompetition');
		}

		return $this;
	}

	/**
	 * Use the LnkAdherentCompetition relation LnkAdherentCompetition object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LnkAdherentCompetitionQuery A secondary query class using the current class as primary query
	 */
	public function useLnkAdherentCompetitionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinLnkAdherentCompetition($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'LnkAdherentCompetition', 'LnkAdherentCompetitionQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     TblCompetition $tblCompetition Object to remove from the list of results
	 *
	 * @return    TblCompetitionQuery The current query, for fluid interface
	 */
	public function prune($tblCompetition = null)
	{
		if ($tblCompetition) {
			$this->addUsingAlias(TblCompetitionPeer::COMPETITION_ID, $tblCompetition->getCompetitionId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseTblCompetitionQuery