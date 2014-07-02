<?php


/**
 * Base class that represents a query for the 'ref_type_sport' table.
 *
 * 
 *
 * @method     RefTypeSportQuery orderByIdTypeSport($order = Criteria::ASC) Order by the id_type_sport column
 * @method     RefTypeSportQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method     RefTypeSportQuery orderByMontantSport($order = Criteria::ASC) Order by the montant_sport column
 * @method     RefTypeSportQuery orderBySportImagePath($order = Criteria::ASC) Order by the sport_image_path column
 *
 * @method     RefTypeSportQuery groupByIdTypeSport() Group by the id_type_sport column
 * @method     RefTypeSportQuery groupByLibelle() Group by the libelle column
 * @method     RefTypeSportQuery groupByMontantSport() Group by the montant_sport column
 * @method     RefTypeSportQuery groupBySportImagePath() Group by the sport_image_path column
 *
 * @method     RefTypeSportQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RefTypeSportQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RefTypeSportQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RefTypeSportQuery leftJoinTblAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblAdherent relation
 * @method     RefTypeSportQuery rightJoinTblAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblAdherent relation
 * @method     RefTypeSportQuery innerJoinTblAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the TblAdherent relation
 *
 * @method     RefTypeSport findOne(PropelPDO $con = null) Return the first RefTypeSport matching the query
 * @method     RefTypeSport findOneOrCreate(PropelPDO $con = null) Return the first RefTypeSport matching the query, or a new RefTypeSport object populated from the query conditions when no match is found
 *
 * @method     RefTypeSport findOneByIdTypeSport(int $id_type_sport) Return the first RefTypeSport filtered by the id_type_sport column
 * @method     RefTypeSport findOneByLibelle(string $libelle) Return the first RefTypeSport filtered by the libelle column
 * @method     RefTypeSport findOneByMontantSport(double $montant_sport) Return the first RefTypeSport filtered by the montant_sport column
 * @method     RefTypeSport findOneBySportImagePath(string $sport_image_path) Return the first RefTypeSport filtered by the sport_image_path column
 *
 * @method     array findByIdTypeSport(int $id_type_sport) Return RefTypeSport objects filtered by the id_type_sport column
 * @method     array findByLibelle(string $libelle) Return RefTypeSport objects filtered by the libelle column
 * @method     array findByMontantSport(double $montant_sport) Return RefTypeSport objects filtered by the montant_sport column
 * @method     array findBySportImagePath(string $sport_image_path) Return RefTypeSport objects filtered by the sport_image_path column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefTypeSportQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseRefTypeSportQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'RefTypeSport', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RefTypeSportQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RefTypeSportQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RefTypeSportQuery) {
			return $criteria;
		}
		$query = new RefTypeSportQuery();
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
	 * @return    RefTypeSport|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = RefTypeSportPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(RefTypeSportPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    RefTypeSport A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_TYPE_SPORT`, `LIBELLE`, `MONTANT_SPORT`, `SPORT_IMAGE_PATH` FROM `ref_type_sport` WHERE `ID_TYPE_SPORT` = :p0';
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
			$obj = new RefTypeSport();
			$obj->hydrate($row);
			RefTypeSportPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    RefTypeSport|array|mixed the result, formatted by the current formatter
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
	 * @return    RefTypeSportQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RefTypeSportPeer::ID_TYPE_SPORT, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RefTypeSportQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RefTypeSportPeer::ID_TYPE_SPORT, $keys, Criteria::IN);
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
	 * @param     mixed $idTypeSport The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefTypeSportQuery The current query, for fluid interface
	 */
	public function filterByIdTypeSport($idTypeSport = null, $comparison = null)
	{
		if (is_array($idTypeSport) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RefTypeSportPeer::ID_TYPE_SPORT, $idTypeSport, $comparison);
	}

	/**
	 * Filter the query on the libelle column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
	 * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $libelle The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefTypeSportQuery The current query, for fluid interface
	 */
	public function filterByLibelle($libelle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($libelle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $libelle)) {
				$libelle = str_replace('*', '%', $libelle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefTypeSportPeer::LIBELLE, $libelle, $comparison);
	}

	/**
	 * Filter the query on the montant_sport column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMontantSport(1234); // WHERE montant_sport = 1234
	 * $query->filterByMontantSport(array(12, 34)); // WHERE montant_sport IN (12, 34)
	 * $query->filterByMontantSport(array('min' => 12)); // WHERE montant_sport > 12
	 * </code>
	 *
	 * @param     mixed $montantSport The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefTypeSportQuery The current query, for fluid interface
	 */
	public function filterByMontantSport($montantSport = null, $comparison = null)
	{
		if (is_array($montantSport)) {
			$useMinMax = false;
			if (isset($montantSport['min'])) {
				$this->addUsingAlias(RefTypeSportPeer::MONTANT_SPORT, $montantSport['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($montantSport['max'])) {
				$this->addUsingAlias(RefTypeSportPeer::MONTANT_SPORT, $montantSport['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RefTypeSportPeer::MONTANT_SPORT, $montantSport, $comparison);
	}

	/**
	 * Filter the query on the sport_image_path column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySportImagePath('fooValue');   // WHERE sport_image_path = 'fooValue'
	 * $query->filterBySportImagePath('%fooValue%'); // WHERE sport_image_path LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $sportImagePath The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefTypeSportQuery The current query, for fluid interface
	 */
	public function filterBySportImagePath($sportImagePath = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sportImagePath)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sportImagePath)) {
				$sportImagePath = str_replace('*', '%', $sportImagePath);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefTypeSportPeer::SPORT_IMAGE_PATH, $sportImagePath, $comparison);
	}

	/**
	 * Filter the query by a related TblAdherent object
	 *
	 * @param     TblAdherent $tblAdherent  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefTypeSportQuery The current query, for fluid interface
	 */
	public function filterByTblAdherent($tblAdherent, $comparison = null)
	{
		if ($tblAdherent instanceof TblAdherent) {
			return $this
				->addUsingAlias(RefTypeSportPeer::ID_TYPE_SPORT, $tblAdherent->getIdTypeSport(), $comparison);
		} elseif ($tblAdherent instanceof PropelCollection) {
			return $this
				->useTblAdherentQuery()
				->filterByPrimaryKeys($tblAdherent->getPrimaryKeys())
				->endUse();
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
	 * @return    RefTypeSportQuery The current query, for fluid interface
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
	 * @param     RefTypeSport $refTypeSport Object to remove from the list of results
	 *
	 * @return    RefTypeSportQuery The current query, for fluid interface
	 */
	public function prune($refTypeSport = null)
	{
		if ($refTypeSport) {
			$this->addUsingAlias(RefTypeSportPeer::ID_TYPE_SPORT, $refTypeSport->getIdTypeSport(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseRefTypeSportQuery