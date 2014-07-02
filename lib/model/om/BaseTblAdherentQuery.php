<?php


/**
 * Base class that represents a query for the 'tbl_adherent' table.
 *
 * 
 *
 * @method     TblAdherentQuery orderByIdAdherent($order = Criteria::ASC) Order by the id_adherent column
 * @method     TblAdherentQuery orderByCinAdherent($order = Criteria::ASC) Order by the cin_adherent column
 * @method     TblAdherentQuery orderByNomAdherent($order = Criteria::ASC) Order by the nom_adherent column
 * @method     TblAdherentQuery orderByPrenomAdherent($order = Criteria::ASC) Order by the prenom_adherent column
 * @method     TblAdherentQuery orderByIdCivilite($order = Criteria::ASC) Order by the id_civilite column
 * @method     TblAdherentQuery orderByIdSituation($order = Criteria::ASC) Order by the id_situation column
 * @method     TblAdherentQuery orderByIdTypeAdherent($order = Criteria::ASC) Order by the id_type_adherent column
 * @method     TblAdherentQuery orderByNiveauAdherentId($order = Criteria::ASC) Order by the niveau_adherent_id column
 * @method     TblAdherentQuery orderByIdTypeSport($order = Criteria::ASC) Order by the id_type_sport column
 * @method     TblAdherentQuery orderByAgeAdherent($order = Criteria::ASC) Order by the age_adherent column
 * @method     TblAdherentQuery orderByNumTel($order = Criteria::ASC) Order by the num_tel column
 * @method     TblAdherentQuery orderByAdresseAdherent($order = Criteria::ASC) Order by the adresse_adherent column
 * @method     TblAdherentQuery orderByImageAdherent($order = Criteria::ASC) Order by the image_adherent column
 * @method     TblAdherentQuery orderByDateAdhesion($order = Criteria::ASC) Order by the date_adhesion column
 * @method     TblAdherentQuery orderBySeanceHoraireId($order = Criteria::ASC) Order by the seance_horaire_id column
 * @method     TblAdherentQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     TblAdherentQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 *
 * @method     TblAdherentQuery groupByIdAdherent() Group by the id_adherent column
 * @method     TblAdherentQuery groupByCinAdherent() Group by the cin_adherent column
 * @method     TblAdherentQuery groupByNomAdherent() Group by the nom_adherent column
 * @method     TblAdherentQuery groupByPrenomAdherent() Group by the prenom_adherent column
 * @method     TblAdherentQuery groupByIdCivilite() Group by the id_civilite column
 * @method     TblAdherentQuery groupByIdSituation() Group by the id_situation column
 * @method     TblAdherentQuery groupByIdTypeAdherent() Group by the id_type_adherent column
 * @method     TblAdherentQuery groupByNiveauAdherentId() Group by the niveau_adherent_id column
 * @method     TblAdherentQuery groupByIdTypeSport() Group by the id_type_sport column
 * @method     TblAdherentQuery groupByAgeAdherent() Group by the age_adherent column
 * @method     TblAdherentQuery groupByNumTel() Group by the num_tel column
 * @method     TblAdherentQuery groupByAdresseAdherent() Group by the adresse_adherent column
 * @method     TblAdherentQuery groupByImageAdherent() Group by the image_adherent column
 * @method     TblAdherentQuery groupByDateAdhesion() Group by the date_adhesion column
 * @method     TblAdherentQuery groupBySeanceHoraireId() Group by the seance_horaire_id column
 * @method     TblAdherentQuery groupByUpdatedAt() Group by the updated_at column
 * @method     TblAdherentQuery groupByDeletedAt() Group by the deleted_at column
 *
 * @method     TblAdherentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TblAdherentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TblAdherentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TblAdherentQuery leftJoinRefCivilite($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefCivilite relation
 * @method     TblAdherentQuery rightJoinRefCivilite($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefCivilite relation
 * @method     TblAdherentQuery innerJoinRefCivilite($relationAlias = null) Adds a INNER JOIN clause to the query using the RefCivilite relation
 *
 * @method     TblAdherentQuery leftJoinRefSituation($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefSituation relation
 * @method     TblAdherentQuery rightJoinRefSituation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefSituation relation
 * @method     TblAdherentQuery innerJoinRefSituation($relationAlias = null) Adds a INNER JOIN clause to the query using the RefSituation relation
 *
 * @method     TblAdherentQuery leftJoinRefTypeAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefTypeAdherent relation
 * @method     TblAdherentQuery rightJoinRefTypeAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefTypeAdherent relation
 * @method     TblAdherentQuery innerJoinRefTypeAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the RefTypeAdherent relation
 *
 * @method     TblAdherentQuery leftJoinRefNiveauAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefNiveauAdherent relation
 * @method     TblAdherentQuery rightJoinRefNiveauAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefNiveauAdherent relation
 * @method     TblAdherentQuery innerJoinRefNiveauAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the RefNiveauAdherent relation
 *
 * @method     TblAdherentQuery leftJoinRefTypeSport($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefTypeSport relation
 * @method     TblAdherentQuery rightJoinRefTypeSport($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefTypeSport relation
 * @method     TblAdherentQuery innerJoinRefTypeSport($relationAlias = null) Adds a INNER JOIN clause to the query using the RefTypeSport relation
 *
 * @method     TblAdherentQuery leftJoinRefSeanceHoraire($relationAlias = null) Adds a LEFT JOIN clause to the query using the RefSeanceHoraire relation
 * @method     TblAdherentQuery rightJoinRefSeanceHoraire($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RefSeanceHoraire relation
 * @method     TblAdherentQuery innerJoinRefSeanceHoraire($relationAlias = null) Adds a INNER JOIN clause to the query using the RefSeanceHoraire relation
 *
 * @method     TblAdherentQuery leftJoinLnkJourEntrainementAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkJourEntrainementAdherent relation
 * @method     TblAdherentQuery rightJoinLnkJourEntrainementAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkJourEntrainementAdherent relation
 * @method     TblAdherentQuery innerJoinLnkJourEntrainementAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkJourEntrainementAdherent relation
 *
 * @method     TblAdherentQuery leftJoinTblAssurance($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblAssurance relation
 * @method     TblAdherentQuery rightJoinTblAssurance($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblAssurance relation
 * @method     TblAdherentQuery innerJoinTblAssurance($relationAlias = null) Adds a INNER JOIN clause to the query using the TblAssurance relation
 *
 * @method     TblAdherentQuery leftJoinTblCeinture($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblCeinture relation
 * @method     TblAdherentQuery rightJoinTblCeinture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblCeinture relation
 * @method     TblAdherentQuery innerJoinTblCeinture($relationAlias = null) Adds a INNER JOIN clause to the query using the TblCeinture relation
 *
 * @method     TblAdherentQuery leftJoinTblFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblFacture relation
 * @method     TblAdherentQuery rightJoinTblFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblFacture relation
 * @method     TblAdherentQuery innerJoinTblFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the TblFacture relation
 *
 * @method     TblAdherent findOne(PropelPDO $con = null) Return the first TblAdherent matching the query
 * @method     TblAdherent findOneOrCreate(PropelPDO $con = null) Return the first TblAdherent matching the query, or a new TblAdherent object populated from the query conditions when no match is found
 *
 * @method     TblAdherent findOneByIdAdherent(int $id_adherent) Return the first TblAdherent filtered by the id_adherent column
 * @method     TblAdherent findOneByCinAdherent(string $cin_adherent) Return the first TblAdherent filtered by the cin_adherent column
 * @method     TblAdherent findOneByNomAdherent(string $nom_adherent) Return the first TblAdherent filtered by the nom_adherent column
 * @method     TblAdherent findOneByPrenomAdherent(string $prenom_adherent) Return the first TblAdherent filtered by the prenom_adherent column
 * @method     TblAdherent findOneByIdCivilite(int $id_civilite) Return the first TblAdherent filtered by the id_civilite column
 * @method     TblAdherent findOneByIdSituation(int $id_situation) Return the first TblAdherent filtered by the id_situation column
 * @method     TblAdherent findOneByIdTypeAdherent(int $id_type_adherent) Return the first TblAdherent filtered by the id_type_adherent column
 * @method     TblAdherent findOneByNiveauAdherentId(int $niveau_adherent_id) Return the first TblAdherent filtered by the niveau_adherent_id column
 * @method     TblAdherent findOneByIdTypeSport(int $id_type_sport) Return the first TblAdherent filtered by the id_type_sport column
 * @method     TblAdherent findOneByAgeAdherent(int $age_adherent) Return the first TblAdherent filtered by the age_adherent column
 * @method     TblAdherent findOneByNumTel(int $num_tel) Return the first TblAdherent filtered by the num_tel column
 * @method     TblAdherent findOneByAdresseAdherent(string $adresse_adherent) Return the first TblAdherent filtered by the adresse_adherent column
 * @method     TblAdherent findOneByImageAdherent(string $image_adherent) Return the first TblAdherent filtered by the image_adherent column
 * @method     TblAdherent findOneByDateAdhesion(string $date_adhesion) Return the first TblAdherent filtered by the date_adhesion column
 * @method     TblAdherent findOneBySeanceHoraireId(int $seance_horaire_id) Return the first TblAdherent filtered by the seance_horaire_id column
 * @method     TblAdherent findOneByUpdatedAt(string $updated_at) Return the first TblAdherent filtered by the updated_at column
 * @method     TblAdherent findOneByDeletedAt(string $deleted_at) Return the first TblAdherent filtered by the deleted_at column
 *
 * @method     array findByIdAdherent(int $id_adherent) Return TblAdherent objects filtered by the id_adherent column
 * @method     array findByCinAdherent(string $cin_adherent) Return TblAdherent objects filtered by the cin_adherent column
 * @method     array findByNomAdherent(string $nom_adherent) Return TblAdherent objects filtered by the nom_adherent column
 * @method     array findByPrenomAdherent(string $prenom_adherent) Return TblAdherent objects filtered by the prenom_adherent column
 * @method     array findByIdCivilite(int $id_civilite) Return TblAdherent objects filtered by the id_civilite column
 * @method     array findByIdSituation(int $id_situation) Return TblAdherent objects filtered by the id_situation column
 * @method     array findByIdTypeAdherent(int $id_type_adherent) Return TblAdherent objects filtered by the id_type_adherent column
 * @method     array findByNiveauAdherentId(int $niveau_adherent_id) Return TblAdherent objects filtered by the niveau_adherent_id column
 * @method     array findByIdTypeSport(int $id_type_sport) Return TblAdherent objects filtered by the id_type_sport column
 * @method     array findByAgeAdherent(int $age_adherent) Return TblAdherent objects filtered by the age_adherent column
 * @method     array findByNumTel(int $num_tel) Return TblAdherent objects filtered by the num_tel column
 * @method     array findByAdresseAdherent(string $adresse_adherent) Return TblAdherent objects filtered by the adresse_adherent column
 * @method     array findByImageAdherent(string $image_adherent) Return TblAdherent objects filtered by the image_adherent column
 * @method     array findByDateAdhesion(string $date_adhesion) Return TblAdherent objects filtered by the date_adhesion column
 * @method     array findBySeanceHoraireId(int $seance_horaire_id) Return TblAdherent objects filtered by the seance_horaire_id column
 * @method     array findByUpdatedAt(string $updated_at) Return TblAdherent objects filtered by the updated_at column
 * @method     array findByDeletedAt(string $deleted_at) Return TblAdherent objects filtered by the deleted_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTblAdherentQuery extends ModelCriteria
{
	
	// soft_delete behavior
	protected static $softDelete = true;
	protected $localSoftDelete = true;

	/**
	 * Initializes internal state of BaseTblAdherentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'TblAdherent', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new TblAdherentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TblAdherentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TblAdherentQuery) {
			return $criteria;
		}
		$query = new TblAdherentQuery();
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
	 * @return    TblAdherent|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = TblAdherentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    TblAdherent A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_ADHERENT`, `CIN_ADHERENT`, `NOM_ADHERENT`, `PRENOM_ADHERENT`, `ID_CIVILITE`, `ID_SITUATION`, `ID_TYPE_ADHERENT`, `NIVEAU_ADHERENT_ID`, `ID_TYPE_SPORT`, `AGE_ADHERENT`, `NUM_TEL`, `ADRESSE_ADHERENT`, `IMAGE_ADHERENT`, `DATE_ADHESION`, `SEANCE_HORAIRE_ID`, `UPDATED_AT`, `DELETED_AT` FROM `tbl_adherent` WHERE `ID_ADHERENT` = :p0';
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
			$obj = new TblAdherent();
			$obj->hydrate($row);
			TblAdherentPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    TblAdherent|array|mixed the result, formatted by the current formatter
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
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(TblAdherentPeer::ID_ADHERENT, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(TblAdherentPeer::ID_ADHERENT, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_adherent column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdAdherent(1234); // WHERE id_adherent = 1234
	 * $query->filterByIdAdherent(array(12, 34)); // WHERE id_adherent IN (12, 34)
	 * $query->filterByIdAdherent(array('min' => 12)); // WHERE id_adherent > 12
	 * </code>
	 *
	 * @param     mixed $idAdherent The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByIdAdherent($idAdherent = null, $comparison = null)
	{
		if (is_array($idAdherent) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(TblAdherentPeer::ID_ADHERENT, $idAdherent, $comparison);
	}

	/**
	 * Filter the query on the cin_adherent column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCinAdherent('fooValue');   // WHERE cin_adherent = 'fooValue'
	 * $query->filterByCinAdherent('%fooValue%'); // WHERE cin_adherent LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $cinAdherent The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByCinAdherent($cinAdherent = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($cinAdherent)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $cinAdherent)) {
				$cinAdherent = str_replace('*', '%', $cinAdherent);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::CIN_ADHERENT, $cinAdherent, $comparison);
	}

	/**
	 * Filter the query on the nom_adherent column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNomAdherent('fooValue');   // WHERE nom_adherent = 'fooValue'
	 * $query->filterByNomAdherent('%fooValue%'); // WHERE nom_adherent LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nomAdherent The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByNomAdherent($nomAdherent = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nomAdherent)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nomAdherent)) {
				$nomAdherent = str_replace('*', '%', $nomAdherent);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::NOM_ADHERENT, $nomAdherent, $comparison);
	}

	/**
	 * Filter the query on the prenom_adherent column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPrenomAdherent('fooValue');   // WHERE prenom_adherent = 'fooValue'
	 * $query->filterByPrenomAdherent('%fooValue%'); // WHERE prenom_adherent LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $prenomAdherent The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByPrenomAdherent($prenomAdherent = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($prenomAdherent)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $prenomAdherent)) {
				$prenomAdherent = str_replace('*', '%', $prenomAdherent);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::PRENOM_ADHERENT, $prenomAdherent, $comparison);
	}

	/**
	 * Filter the query on the id_civilite column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdCivilite(1234); // WHERE id_civilite = 1234
	 * $query->filterByIdCivilite(array(12, 34)); // WHERE id_civilite IN (12, 34)
	 * $query->filterByIdCivilite(array('min' => 12)); // WHERE id_civilite > 12
	 * </code>
	 *
	 * @see       filterByRefCivilite()
	 *
	 * @param     mixed $idCivilite The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByIdCivilite($idCivilite = null, $comparison = null)
	{
		if (is_array($idCivilite)) {
			$useMinMax = false;
			if (isset($idCivilite['min'])) {
				$this->addUsingAlias(TblAdherentPeer::ID_CIVILITE, $idCivilite['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idCivilite['max'])) {
				$this->addUsingAlias(TblAdherentPeer::ID_CIVILITE, $idCivilite['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::ID_CIVILITE, $idCivilite, $comparison);
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
	 * @see       filterByRefSituation()
	 *
	 * @param     mixed $idSituation The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByIdSituation($idSituation = null, $comparison = null)
	{
		if (is_array($idSituation)) {
			$useMinMax = false;
			if (isset($idSituation['min'])) {
				$this->addUsingAlias(TblAdherentPeer::ID_SITUATION, $idSituation['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idSituation['max'])) {
				$this->addUsingAlias(TblAdherentPeer::ID_SITUATION, $idSituation['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::ID_SITUATION, $idSituation, $comparison);
	}

	/**
	 * Filter the query on the id_type_adherent column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdTypeAdherent(1234); // WHERE id_type_adherent = 1234
	 * $query->filterByIdTypeAdherent(array(12, 34)); // WHERE id_type_adherent IN (12, 34)
	 * $query->filterByIdTypeAdherent(array('min' => 12)); // WHERE id_type_adherent > 12
	 * </code>
	 *
	 * @see       filterByRefTypeAdherent()
	 *
	 * @param     mixed $idTypeAdherent The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByIdTypeAdherent($idTypeAdherent = null, $comparison = null)
	{
		if (is_array($idTypeAdherent)) {
			$useMinMax = false;
			if (isset($idTypeAdherent['min'])) {
				$this->addUsingAlias(TblAdherentPeer::ID_TYPE_ADHERENT, $idTypeAdherent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idTypeAdherent['max'])) {
				$this->addUsingAlias(TblAdherentPeer::ID_TYPE_ADHERENT, $idTypeAdherent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::ID_TYPE_ADHERENT, $idTypeAdherent, $comparison);
	}

	/**
	 * Filter the query on the niveau_adherent_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNiveauAdherentId(1234); // WHERE niveau_adherent_id = 1234
	 * $query->filterByNiveauAdherentId(array(12, 34)); // WHERE niveau_adherent_id IN (12, 34)
	 * $query->filterByNiveauAdherentId(array('min' => 12)); // WHERE niveau_adherent_id > 12
	 * </code>
	 *
	 * @see       filterByRefNiveauAdherent()
	 *
	 * @param     mixed $niveauAdherentId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByNiveauAdherentId($niveauAdherentId = null, $comparison = null)
	{
		if (is_array($niveauAdherentId)) {
			$useMinMax = false;
			if (isset($niveauAdherentId['min'])) {
				$this->addUsingAlias(TblAdherentPeer::NIVEAU_ADHERENT_ID, $niveauAdherentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($niveauAdherentId['max'])) {
				$this->addUsingAlias(TblAdherentPeer::NIVEAU_ADHERENT_ID, $niveauAdherentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::NIVEAU_ADHERENT_ID, $niveauAdherentId, $comparison);
	}

	/**
	 * Filter the query on the id_type_sport column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdTypeSport(1234); // WHERE id_type_sport = 1234
	 * $query->filterByIdTypeSport(array(12, 34)); // WHERE id_type_sport IN (12, 34)
	 * $query->filterByIdTypeSport(array('min' => 12)); // WHERE id_type_sport > 12
	 * </code>
	 *
	 * @see       filterByRefTypeSport()
	 *
	 * @param     mixed $idTypeSport The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByIdTypeSport($idTypeSport = null, $comparison = null)
	{
		if (is_array($idTypeSport)) {
			$useMinMax = false;
			if (isset($idTypeSport['min'])) {
				$this->addUsingAlias(TblAdherentPeer::ID_TYPE_SPORT, $idTypeSport['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idTypeSport['max'])) {
				$this->addUsingAlias(TblAdherentPeer::ID_TYPE_SPORT, $idTypeSport['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::ID_TYPE_SPORT, $idTypeSport, $comparison);
	}

	/**
	 * Filter the query on the age_adherent column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAgeAdherent(1234); // WHERE age_adherent = 1234
	 * $query->filterByAgeAdherent(array(12, 34)); // WHERE age_adherent IN (12, 34)
	 * $query->filterByAgeAdherent(array('min' => 12)); // WHERE age_adherent > 12
	 * </code>
	 *
	 * @param     mixed $ageAdherent The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByAgeAdherent($ageAdherent = null, $comparison = null)
	{
		if (is_array($ageAdherent)) {
			$useMinMax = false;
			if (isset($ageAdherent['min'])) {
				$this->addUsingAlias(TblAdherentPeer::AGE_ADHERENT, $ageAdherent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ageAdherent['max'])) {
				$this->addUsingAlias(TblAdherentPeer::AGE_ADHERENT, $ageAdherent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::AGE_ADHERENT, $ageAdherent, $comparison);
	}

	/**
	 * Filter the query on the num_tel column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNumTel(1234); // WHERE num_tel = 1234
	 * $query->filterByNumTel(array(12, 34)); // WHERE num_tel IN (12, 34)
	 * $query->filterByNumTel(array('min' => 12)); // WHERE num_tel > 12
	 * </code>
	 *
	 * @param     mixed $numTel The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByNumTel($numTel = null, $comparison = null)
	{
		if (is_array($numTel)) {
			$useMinMax = false;
			if (isset($numTel['min'])) {
				$this->addUsingAlias(TblAdherentPeer::NUM_TEL, $numTel['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($numTel['max'])) {
				$this->addUsingAlias(TblAdherentPeer::NUM_TEL, $numTel['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::NUM_TEL, $numTel, $comparison);
	}

	/**
	 * Filter the query on the adresse_adherent column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAdresseAdherent('fooValue');   // WHERE adresse_adherent = 'fooValue'
	 * $query->filterByAdresseAdherent('%fooValue%'); // WHERE adresse_adherent LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $adresseAdherent The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByAdresseAdherent($adresseAdherent = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($adresseAdherent)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $adresseAdherent)) {
				$adresseAdherent = str_replace('*', '%', $adresseAdherent);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::ADRESSE_ADHERENT, $adresseAdherent, $comparison);
	}

	/**
	 * Filter the query on the image_adherent column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByImageAdherent('fooValue');   // WHERE image_adherent = 'fooValue'
	 * $query->filterByImageAdherent('%fooValue%'); // WHERE image_adherent LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $imageAdherent The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByImageAdherent($imageAdherent = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($imageAdherent)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $imageAdherent)) {
				$imageAdherent = str_replace('*', '%', $imageAdherent);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::IMAGE_ADHERENT, $imageAdherent, $comparison);
	}

	/**
	 * Filter the query on the date_adhesion column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateAdhesion('2011-03-14'); // WHERE date_adhesion = '2011-03-14'
	 * $query->filterByDateAdhesion('now'); // WHERE date_adhesion = '2011-03-14'
	 * $query->filterByDateAdhesion(array('max' => 'yesterday')); // WHERE date_adhesion > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateAdhesion The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByDateAdhesion($dateAdhesion = null, $comparison = null)
	{
		if (is_array($dateAdhesion)) {
			$useMinMax = false;
			if (isset($dateAdhesion['min'])) {
				$this->addUsingAlias(TblAdherentPeer::DATE_ADHESION, $dateAdhesion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateAdhesion['max'])) {
				$this->addUsingAlias(TblAdherentPeer::DATE_ADHESION, $dateAdhesion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::DATE_ADHESION, $dateAdhesion, $comparison);
	}

	/**
	 * Filter the query on the seance_horaire_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySeanceHoraireId(1234); // WHERE seance_horaire_id = 1234
	 * $query->filterBySeanceHoraireId(array(12, 34)); // WHERE seance_horaire_id IN (12, 34)
	 * $query->filterBySeanceHoraireId(array('min' => 12)); // WHERE seance_horaire_id > 12
	 * </code>
	 *
	 * @see       filterByRefSeanceHoraire()
	 *
	 * @param     mixed $seanceHoraireId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterBySeanceHoraireId($seanceHoraireId = null, $comparison = null)
	{
		if (is_array($seanceHoraireId)) {
			$useMinMax = false;
			if (isset($seanceHoraireId['min'])) {
				$this->addUsingAlias(TblAdherentPeer::SEANCE_HORAIRE_ID, $seanceHoraireId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($seanceHoraireId['max'])) {
				$this->addUsingAlias(TblAdherentPeer::SEANCE_HORAIRE_ID, $seanceHoraireId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::SEANCE_HORAIRE_ID, $seanceHoraireId, $comparison);
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
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(TblAdherentPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(TblAdherentPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::UPDATED_AT, $updatedAt, $comparison);
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
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByDeletedAt($deletedAt = null, $comparison = null)
	{
		if (is_array($deletedAt)) {
			$useMinMax = false;
			if (isset($deletedAt['min'])) {
				$this->addUsingAlias(TblAdherentPeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedAt['max'])) {
				$this->addUsingAlias(TblAdherentPeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblAdherentPeer::DELETED_AT, $deletedAt, $comparison);
	}

	/**
	 * Filter the query by a related RefCivilite object
	 *
	 * @param     RefCivilite|PropelCollection $refCivilite The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByRefCivilite($refCivilite, $comparison = null)
	{
		if ($refCivilite instanceof RefCivilite) {
			return $this
				->addUsingAlias(TblAdherentPeer::ID_CIVILITE, $refCivilite->getIdCivilite(), $comparison);
		} elseif ($refCivilite instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblAdherentPeer::ID_CIVILITE, $refCivilite->toKeyValue('PrimaryKey', 'IdCivilite'), $comparison);
		} else {
			throw new PropelException('filterByRefCivilite() only accepts arguments of type RefCivilite or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefCivilite relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function joinRefCivilite($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefCivilite');

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
			$this->addJoinObject($join, 'RefCivilite');
		}

		return $this;
	}

	/**
	 * Use the RefCivilite relation RefCivilite object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefCiviliteQuery A secondary query class using the current class as primary query
	 */
	public function useRefCiviliteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinRefCivilite($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefCivilite', 'RefCiviliteQuery');
	}

	/**
	 * Filter the query by a related RefSituation object
	 *
	 * @param     RefSituation|PropelCollection $refSituation The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByRefSituation($refSituation, $comparison = null)
	{
		if ($refSituation instanceof RefSituation) {
			return $this
				->addUsingAlias(TblAdherentPeer::ID_SITUATION, $refSituation->getIdSituation(), $comparison);
		} elseif ($refSituation instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblAdherentPeer::ID_SITUATION, $refSituation->toKeyValue('PrimaryKey', 'IdSituation'), $comparison);
		} else {
			throw new PropelException('filterByRefSituation() only accepts arguments of type RefSituation or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefSituation relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function joinRefSituation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefSituation');

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
			$this->addJoinObject($join, 'RefSituation');
		}

		return $this;
	}

	/**
	 * Use the RefSituation relation RefSituation object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefSituationQuery A secondary query class using the current class as primary query
	 */
	public function useRefSituationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinRefSituation($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefSituation', 'RefSituationQuery');
	}

	/**
	 * Filter the query by a related RefTypeAdherent object
	 *
	 * @param     RefTypeAdherent|PropelCollection $refTypeAdherent The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByRefTypeAdherent($refTypeAdherent, $comparison = null)
	{
		if ($refTypeAdherent instanceof RefTypeAdherent) {
			return $this
				->addUsingAlias(TblAdherentPeer::ID_TYPE_ADHERENT, $refTypeAdherent->getIdTypeAdherent(), $comparison);
		} elseif ($refTypeAdherent instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblAdherentPeer::ID_TYPE_ADHERENT, $refTypeAdherent->toKeyValue('PrimaryKey', 'IdTypeAdherent'), $comparison);
		} else {
			throw new PropelException('filterByRefTypeAdherent() only accepts arguments of type RefTypeAdherent or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefTypeAdherent relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function joinRefTypeAdherent($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefTypeAdherent');

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
			$this->addJoinObject($join, 'RefTypeAdherent');
		}

		return $this;
	}

	/**
	 * Use the RefTypeAdherent relation RefTypeAdherent object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefTypeAdherentQuery A secondary query class using the current class as primary query
	 */
	public function useRefTypeAdherentQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinRefTypeAdherent($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefTypeAdherent', 'RefTypeAdherentQuery');
	}

	/**
	 * Filter the query by a related RefNiveauAdherent object
	 *
	 * @param     RefNiveauAdherent|PropelCollection $refNiveauAdherent The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByRefNiveauAdherent($refNiveauAdherent, $comparison = null)
	{
		if ($refNiveauAdherent instanceof RefNiveauAdherent) {
			return $this
				->addUsingAlias(TblAdherentPeer::NIVEAU_ADHERENT_ID, $refNiveauAdherent->getNiveauAdherentId(), $comparison);
		} elseif ($refNiveauAdherent instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblAdherentPeer::NIVEAU_ADHERENT_ID, $refNiveauAdherent->toKeyValue('PrimaryKey', 'NiveauAdherentId'), $comparison);
		} else {
			throw new PropelException('filterByRefNiveauAdherent() only accepts arguments of type RefNiveauAdherent or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefNiveauAdherent relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function joinRefNiveauAdherent($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefNiveauAdherent');

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
			$this->addJoinObject($join, 'RefNiveauAdherent');
		}

		return $this;
	}

	/**
	 * Use the RefNiveauAdherent relation RefNiveauAdherent object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefNiveauAdherentQuery A secondary query class using the current class as primary query
	 */
	public function useRefNiveauAdherentQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinRefNiveauAdherent($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefNiveauAdherent', 'RefNiveauAdherentQuery');
	}

	/**
	 * Filter the query by a related RefTypeSport object
	 *
	 * @param     RefTypeSport|PropelCollection $refTypeSport The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByRefTypeSport($refTypeSport, $comparison = null)
	{
		if ($refTypeSport instanceof RefTypeSport) {
			return $this
				->addUsingAlias(TblAdherentPeer::ID_TYPE_SPORT, $refTypeSport->getIdTypeSport(), $comparison);
		} elseif ($refTypeSport instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblAdherentPeer::ID_TYPE_SPORT, $refTypeSport->toKeyValue('PrimaryKey', 'IdTypeSport'), $comparison);
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
	 * @return    TblAdherentQuery The current query, for fluid interface
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
	 * Filter the query by a related RefSeanceHoraire object
	 *
	 * @param     RefSeanceHoraire|PropelCollection $refSeanceHoraire The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByRefSeanceHoraire($refSeanceHoraire, $comparison = null)
	{
		if ($refSeanceHoraire instanceof RefSeanceHoraire) {
			return $this
				->addUsingAlias(TblAdherentPeer::SEANCE_HORAIRE_ID, $refSeanceHoraire->getSeanceHoraireId(), $comparison);
		} elseif ($refSeanceHoraire instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblAdherentPeer::SEANCE_HORAIRE_ID, $refSeanceHoraire->toKeyValue('PrimaryKey', 'SeanceHoraireId'), $comparison);
		} else {
			throw new PropelException('filterByRefSeanceHoraire() only accepts arguments of type RefSeanceHoraire or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the RefSeanceHoraire relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function joinRefSeanceHoraire($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RefSeanceHoraire');

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
			$this->addJoinObject($join, 'RefSeanceHoraire');
		}

		return $this;
	}

	/**
	 * Use the RefSeanceHoraire relation RefSeanceHoraire object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RefSeanceHoraireQuery A secondary query class using the current class as primary query
	 */
	public function useRefSeanceHoraireQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinRefSeanceHoraire($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RefSeanceHoraire', 'RefSeanceHoraireQuery');
	}

	/**
	 * Filter the query by a related LnkJourEntrainementAdherent object
	 *
	 * @param     LnkJourEntrainementAdherent $lnkJourEntrainementAdherent  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByLnkJourEntrainementAdherent($lnkJourEntrainementAdherent, $comparison = null)
	{
		if ($lnkJourEntrainementAdherent instanceof LnkJourEntrainementAdherent) {
			return $this
				->addUsingAlias(TblAdherentPeer::ID_ADHERENT, $lnkJourEntrainementAdherent->getIdAdherent(), $comparison);
		} elseif ($lnkJourEntrainementAdherent instanceof PropelCollection) {
			return $this
				->useLnkJourEntrainementAdherentQuery()
				->filterByPrimaryKeys($lnkJourEntrainementAdherent->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByLnkJourEntrainementAdherent() only accepts arguments of type LnkJourEntrainementAdherent or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the LnkJourEntrainementAdherent relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function joinLnkJourEntrainementAdherent($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('LnkJourEntrainementAdherent');

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
			$this->addJoinObject($join, 'LnkJourEntrainementAdherent');
		}

		return $this;
	}

	/**
	 * Use the LnkJourEntrainementAdherent relation LnkJourEntrainementAdherent object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LnkJourEntrainementAdherentQuery A secondary query class using the current class as primary query
	 */
	public function useLnkJourEntrainementAdherentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinLnkJourEntrainementAdherent($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'LnkJourEntrainementAdherent', 'LnkJourEntrainementAdherentQuery');
	}

	/**
	 * Filter the query by a related TblAssurance object
	 *
	 * @param     TblAssurance $tblAssurance  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByTblAssurance($tblAssurance, $comparison = null)
	{
		if ($tblAssurance instanceof TblAssurance) {
			return $this
				->addUsingAlias(TblAdherentPeer::ID_ADHERENT, $tblAssurance->getAdherentId(), $comparison);
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
	 * @return    TblAdherentQuery The current query, for fluid interface
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
	 * Filter the query by a related TblCeinture object
	 *
	 * @param     TblCeinture $tblCeinture  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByTblCeinture($tblCeinture, $comparison = null)
	{
		if ($tblCeinture instanceof TblCeinture) {
			return $this
				->addUsingAlias(TblAdherentPeer::ID_ADHERENT, $tblCeinture->getAdherentId(), $comparison);
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
	 * @return    TblAdherentQuery The current query, for fluid interface
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
	 * Filter the query by a related TblFacture object
	 *
	 * @param     TblFacture $tblFacture  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function filterByTblFacture($tblFacture, $comparison = null)
	{
		if ($tblFacture instanceof TblFacture) {
			return $this
				->addUsingAlias(TblAdherentPeer::ID_ADHERENT, $tblFacture->getIdAdherent(), $comparison);
		} elseif ($tblFacture instanceof PropelCollection) {
			return $this
				->useTblFactureQuery()
				->filterByPrimaryKeys($tblFacture->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByTblFacture() only accepts arguments of type TblFacture or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the TblFacture relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function joinTblFacture($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TblFacture');

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
			$this->addJoinObject($join, 'TblFacture');
		}

		return $this;
	}

	/**
	 * Use the TblFacture relation TblFacture object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblFactureQuery A secondary query class using the current class as primary query
	 */
	public function useTblFactureQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinTblFacture($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TblFacture', 'TblFactureQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     TblAdherent $tblAdherent Object to remove from the list of results
	 *
	 * @return    TblAdherentQuery The current query, for fluid interface
	 */
	public function prune($tblAdherent = null)
	{
		if ($tblAdherent) {
			$this->addUsingAlias(TblAdherentPeer::ID_ADHERENT, $tblAdherent->getIdAdherent(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

	/**
	 * Code to execute before every SELECT statement
	 *
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreSelect(PropelPDO $con)
	{
		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled() && $this->localSoftDelete) {
			$this->addUsingAlias(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}

		return $this->preSelect($con);
	}

	/**
	 * Code to execute before every DELETE statement
	 *
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreDelete(PropelPDO $con)
	{
		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled() && $this->localSoftDelete) {
			return $this->softDelete($con);
		} else {
			return $this->hasWhereClause() ? $this->forceDelete($con) : $this->forceDeleteAll($con);
		}

		return $this->preDelete($con);
	}

	// soft_delete behavior
	
	/**
	 * Temporarily disable the filter on deleted rows
	 * Valid only for the current query
	 *
	 * @see TblAdherentQuery::disableSoftDelete() to disable the filter for more than one query
	 *
	 * @return TblAdherentQuery The current query, for fluid interface
	 */
	public function includeDeleted()
	{
		$this->localSoftDelete = false;
		return $this;
	}
	
	/**
	 * Soft delete the selected rows
	 *
	 * @param			PropelPDO $con an optional connection object
	 *
	 * @return		int Number of updated rows
	 */
	public function softDelete(PropelPDO $con = null)
	{
		return $this->update(array('DeletedAt' => time()), $con);
	}
	
	/**
	 * Bypass the soft_delete behavior and force a hard delete of the selected rows
	 *
	 * @param			PropelPDO $con an optional connection object
	 *
	 * @return		int Number of deleted rows
	 */
	public function forceDelete(PropelPDO $con = null)
	{
		return TblAdherentPeer::doForceDelete($this, $con);
	}
	
	/**
	 * Bypass the soft_delete behavior and force a hard delete of all the rows
	 *
	 * @param			PropelPDO $con an optional connection object
	 *
	 * @return		int Number of deleted rows
	 */
	public function forceDeleteAll(PropelPDO $con = null)
	{
		return TblAdherentPeer::doForceDeleteAll($con);}
	
	/**
	 * Undelete selected rows
	 *
	 * @param			PropelPDO $con an optional connection object
	 *
	 * @return		int The number of rows affected by this update and any referring fk objects' save() operations.
	 */
	public function unDelete(PropelPDO $con = null)
	{
		return $this->update(array('DeletedAt' => null), $con);
	}
	
	/**
	 * Enable the soft_delete behavior for this model
	 */
	public static function enableSoftDelete()
	{
		self::$softDelete = true;
	}
	
	/**
	 * Disable the soft_delete behavior for this model
	 */
	public static function disableSoftDelete()
	{
		self::$softDelete = false;
	}
	
	/**
	 * Check the soft_delete behavior for this model
	 *
	 * @return boolean true if the soft_delete behavior is enabled
	 */
	public static function isSoftDeleteEnabled()
	{
		return self::$softDelete;
	}

} // BaseTblAdherentQuery