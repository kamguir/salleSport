<?php


/**
 * Base class that represents a query for the 'tbl_facture' table.
 *
 * 
 *
 * @method     TblFactureQuery orderByIdFacture($order = Criteria::ASC) Order by the id_facture column
 * @method     TblFactureQuery orderByIdAdherent($order = Criteria::ASC) Order by the id_adherent column
 * @method     TblFactureQuery orderByPrixFacture($order = Criteria::ASC) Order by the prix_facture column
 * @method     TblFactureQuery orderByDateReglement($order = Criteria::ASC) Order by the date_reglement column
 * @method     TblFactureQuery orderByEtatPaiement($order = Criteria::ASC) Order by the etat_paiement column
 * @method     TblFactureQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method     TblFactureQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     TblFactureQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 *
 * @method     TblFactureQuery groupByIdFacture() Group by the id_facture column
 * @method     TblFactureQuery groupByIdAdherent() Group by the id_adherent column
 * @method     TblFactureQuery groupByPrixFacture() Group by the prix_facture column
 * @method     TblFactureQuery groupByDateReglement() Group by the date_reglement column
 * @method     TblFactureQuery groupByEtatPaiement() Group by the etat_paiement column
 * @method     TblFactureQuery groupByCommentaire() Group by the commentaire column
 * @method     TblFactureQuery groupByCreatedAt() Group by the created_at column
 * @method     TblFactureQuery groupByDeletedAt() Group by the deleted_at column
 *
 * @method     TblFactureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TblFactureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TblFactureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TblFactureQuery leftJoinTblAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblAdherent relation
 * @method     TblFactureQuery rightJoinTblAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblAdherent relation
 * @method     TblFactureQuery innerJoinTblAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the TblAdherent relation
 *
 * @method     TblFacture findOne(PropelPDO $con = null) Return the first TblFacture matching the query
 * @method     TblFacture findOneOrCreate(PropelPDO $con = null) Return the first TblFacture matching the query, or a new TblFacture object populated from the query conditions when no match is found
 *
 * @method     TblFacture findOneByIdFacture(int $id_facture) Return the first TblFacture filtered by the id_facture column
 * @method     TblFacture findOneByIdAdherent(int $id_adherent) Return the first TblFacture filtered by the id_adherent column
 * @method     TblFacture findOneByPrixFacture(double $prix_facture) Return the first TblFacture filtered by the prix_facture column
 * @method     TblFacture findOneByDateReglement(string $date_reglement) Return the first TblFacture filtered by the date_reglement column
 * @method     TblFacture findOneByEtatPaiement(boolean $etat_paiement) Return the first TblFacture filtered by the etat_paiement column
 * @method     TblFacture findOneByCommentaire(string $commentaire) Return the first TblFacture filtered by the commentaire column
 * @method     TblFacture findOneByCreatedAt(string $created_at) Return the first TblFacture filtered by the created_at column
 * @method     TblFacture findOneByDeletedAt(string $deleted_at) Return the first TblFacture filtered by the deleted_at column
 *
 * @method     array findByIdFacture(int $id_facture) Return TblFacture objects filtered by the id_facture column
 * @method     array findByIdAdherent(int $id_adherent) Return TblFacture objects filtered by the id_adherent column
 * @method     array findByPrixFacture(double $prix_facture) Return TblFacture objects filtered by the prix_facture column
 * @method     array findByDateReglement(string $date_reglement) Return TblFacture objects filtered by the date_reglement column
 * @method     array findByEtatPaiement(boolean $etat_paiement) Return TblFacture objects filtered by the etat_paiement column
 * @method     array findByCommentaire(string $commentaire) Return TblFacture objects filtered by the commentaire column
 * @method     array findByCreatedAt(string $created_at) Return TblFacture objects filtered by the created_at column
 * @method     array findByDeletedAt(string $deleted_at) Return TblFacture objects filtered by the deleted_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTblFactureQuery extends ModelCriteria
{
	
	// soft_delete behavior
	protected static $softDelete = true;
	protected $localSoftDelete = true;

	/**
	 * Initializes internal state of BaseTblFactureQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'TblFacture', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new TblFactureQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TblFactureQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TblFactureQuery) {
			return $criteria;
		}
		$query = new TblFactureQuery();
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
	 * @return    TblFacture|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = TblFacturePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(TblFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    TblFacture A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_FACTURE`, `ID_ADHERENT`, `PRIX_FACTURE`, `DATE_REGLEMENT`, `ETAT_PAIEMENT`, `COMMENTAIRE`, `CREATED_AT`, `DELETED_AT` FROM `tbl_facture` WHERE `ID_FACTURE` = :p0';
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
			$obj = new TblFacture();
			$obj->hydrate($row);
			TblFacturePeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    TblFacture|array|mixed the result, formatted by the current formatter
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
	 * @return    TblFactureQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(TblFacturePeer::ID_FACTURE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    TblFactureQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(TblFacturePeer::ID_FACTURE, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_facture column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdFacture(1234); // WHERE id_facture = 1234
	 * $query->filterByIdFacture(array(12, 34)); // WHERE id_facture IN (12, 34)
	 * $query->filterByIdFacture(array('min' => 12)); // WHERE id_facture > 12
	 * </code>
	 *
	 * @param     mixed $idFacture The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblFactureQuery The current query, for fluid interface
	 */
	public function filterByIdFacture($idFacture = null, $comparison = null)
	{
		if (is_array($idFacture) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(TblFacturePeer::ID_FACTURE, $idFacture, $comparison);
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
	 * @see       filterByTblAdherent()
	 *
	 * @param     mixed $idAdherent The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblFactureQuery The current query, for fluid interface
	 */
	public function filterByIdAdherent($idAdherent = null, $comparison = null)
	{
		if (is_array($idAdherent)) {
			$useMinMax = false;
			if (isset($idAdherent['min'])) {
				$this->addUsingAlias(TblFacturePeer::ID_ADHERENT, $idAdherent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idAdherent['max'])) {
				$this->addUsingAlias(TblFacturePeer::ID_ADHERENT, $idAdherent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblFacturePeer::ID_ADHERENT, $idAdherent, $comparison);
	}

	/**
	 * Filter the query on the prix_facture column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPrixFacture(1234); // WHERE prix_facture = 1234
	 * $query->filterByPrixFacture(array(12, 34)); // WHERE prix_facture IN (12, 34)
	 * $query->filterByPrixFacture(array('min' => 12)); // WHERE prix_facture > 12
	 * </code>
	 *
	 * @param     mixed $prixFacture The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblFactureQuery The current query, for fluid interface
	 */
	public function filterByPrixFacture($prixFacture = null, $comparison = null)
	{
		if (is_array($prixFacture)) {
			$useMinMax = false;
			if (isset($prixFacture['min'])) {
				$this->addUsingAlias(TblFacturePeer::PRIX_FACTURE, $prixFacture['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($prixFacture['max'])) {
				$this->addUsingAlias(TblFacturePeer::PRIX_FACTURE, $prixFacture['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblFacturePeer::PRIX_FACTURE, $prixFacture, $comparison);
	}

	/**
	 * Filter the query on the date_reglement column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateReglement('2011-03-14'); // WHERE date_reglement = '2011-03-14'
	 * $query->filterByDateReglement('now'); // WHERE date_reglement = '2011-03-14'
	 * $query->filterByDateReglement(array('max' => 'yesterday')); // WHERE date_reglement > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateReglement The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblFactureQuery The current query, for fluid interface
	 */
	public function filterByDateReglement($dateReglement = null, $comparison = null)
	{
		if (is_array($dateReglement)) {
			$useMinMax = false;
			if (isset($dateReglement['min'])) {
				$this->addUsingAlias(TblFacturePeer::DATE_REGLEMENT, $dateReglement['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateReglement['max'])) {
				$this->addUsingAlias(TblFacturePeer::DATE_REGLEMENT, $dateReglement['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblFacturePeer::DATE_REGLEMENT, $dateReglement, $comparison);
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
	 * @return    TblFactureQuery The current query, for fluid interface
	 */
	public function filterByEtatPaiement($etatPaiement = null, $comparison = null)
	{
		if (is_string($etatPaiement)) {
			$etat_paiement = in_array(strtolower($etatPaiement), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(TblFacturePeer::ETAT_PAIEMENT, $etatPaiement, $comparison);
	}

	/**
	 * Filter the query on the commentaire column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
	 * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $commentaire The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblFactureQuery The current query, for fluid interface
	 */
	public function filterByCommentaire($commentaire = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($commentaire)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $commentaire)) {
				$commentaire = str_replace('*', '%', $commentaire);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TblFacturePeer::COMMENTAIRE, $commentaire, $comparison);
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
	 * @return    TblFactureQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(TblFacturePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(TblFacturePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblFacturePeer::CREATED_AT, $createdAt, $comparison);
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
	 * @return    TblFactureQuery The current query, for fluid interface
	 */
	public function filterByDeletedAt($deletedAt = null, $comparison = null)
	{
		if (is_array($deletedAt)) {
			$useMinMax = false;
			if (isset($deletedAt['min'])) {
				$this->addUsingAlias(TblFacturePeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedAt['max'])) {
				$this->addUsingAlias(TblFacturePeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblFacturePeer::DELETED_AT, $deletedAt, $comparison);
	}

	/**
	 * Filter the query by a related TblAdherent object
	 *
	 * @param     TblAdherent|PropelCollection $tblAdherent The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblFactureQuery The current query, for fluid interface
	 */
	public function filterByTblAdherent($tblAdherent, $comparison = null)
	{
		if ($tblAdherent instanceof TblAdherent) {
			return $this
				->addUsingAlias(TblFacturePeer::ID_ADHERENT, $tblAdherent->getIdAdherent(), $comparison);
		} elseif ($tblAdherent instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(TblFacturePeer::ID_ADHERENT, $tblAdherent->toKeyValue('PrimaryKey', 'IdAdherent'), $comparison);
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
	 * @return    TblFactureQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     TblFacture $tblFacture Object to remove from the list of results
	 *
	 * @return    TblFactureQuery The current query, for fluid interface
	 */
	public function prune($tblFacture = null)
	{
		if ($tblFacture) {
			$this->addUsingAlias(TblFacturePeer::ID_FACTURE, $tblFacture->getIdFacture(), Criteria::NOT_EQUAL);
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
		if (TblFactureQuery::isSoftDeleteEnabled() && $this->localSoftDelete) {
			$this->addUsingAlias(TblFacturePeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblFacturePeer::enableSoftDelete();
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
		if (TblFactureQuery::isSoftDeleteEnabled() && $this->localSoftDelete) {
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
	 * @see TblFactureQuery::disableSoftDelete() to disable the filter for more than one query
	 *
	 * @return TblFactureQuery The current query, for fluid interface
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
		return TblFacturePeer::doForceDelete($this, $con);
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
		return TblFacturePeer::doForceDeleteAll($con);}
	
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

} // BaseTblFactureQuery