<?php


/**
 * Base class that represents a query for the 'ref_niveau_adherent' table.
 *
 * 
 *
 * @method     RefNiveauAdherentQuery orderByNiveauAdherentId($order = Criteria::ASC) Order by the niveau_adherent_id column
 * @method     RefNiveauAdherentQuery orderByNiveauAdherentLibelle($order = Criteria::ASC) Order by the niveau_adherent_libelle column
 *
 * @method     RefNiveauAdherentQuery groupByNiveauAdherentId() Group by the niveau_adherent_id column
 * @method     RefNiveauAdherentQuery groupByNiveauAdherentLibelle() Group by the niveau_adherent_libelle column
 *
 * @method     RefNiveauAdherentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RefNiveauAdherentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RefNiveauAdherentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RefNiveauAdherentQuery leftJoinTblAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblAdherent relation
 * @method     RefNiveauAdherentQuery rightJoinTblAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblAdherent relation
 * @method     RefNiveauAdherentQuery innerJoinTblAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the TblAdherent relation
 *
 * @method     RefNiveauAdherent findOne(PropelPDO $con = null) Return the first RefNiveauAdherent matching the query
 * @method     RefNiveauAdherent findOneOrCreate(PropelPDO $con = null) Return the first RefNiveauAdherent matching the query, or a new RefNiveauAdherent object populated from the query conditions when no match is found
 *
 * @method     RefNiveauAdherent findOneByNiveauAdherentId(int $niveau_adherent_id) Return the first RefNiveauAdherent filtered by the niveau_adherent_id column
 * @method     RefNiveauAdherent findOneByNiveauAdherentLibelle(string $niveau_adherent_libelle) Return the first RefNiveauAdherent filtered by the niveau_adherent_libelle column
 *
 * @method     array findByNiveauAdherentId(int $niveau_adherent_id) Return RefNiveauAdherent objects filtered by the niveau_adherent_id column
 * @method     array findByNiveauAdherentLibelle(string $niveau_adherent_libelle) Return RefNiveauAdherent objects filtered by the niveau_adherent_libelle column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefNiveauAdherentQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseRefNiveauAdherentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'RefNiveauAdherent', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RefNiveauAdherentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RefNiveauAdherentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RefNiveauAdherentQuery) {
			return $criteria;
		}
		$query = new RefNiveauAdherentQuery();
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
	 * @return    RefNiveauAdherent|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = RefNiveauAdherentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(RefNiveauAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    RefNiveauAdherent A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `NIVEAU_ADHERENT_ID`, `NIVEAU_ADHERENT_LIBELLE` FROM `ref_niveau_adherent` WHERE `NIVEAU_ADHERENT_ID` = :p0';
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
			$obj = new RefNiveauAdherent();
			$obj->hydrate($row);
			RefNiveauAdherentPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    RefNiveauAdherent|array|mixed the result, formatted by the current formatter
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
	 * @return    RefNiveauAdherentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RefNiveauAdherentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $keys, Criteria::IN);
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
	 * @param     mixed $niveauAdherentId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefNiveauAdherentQuery The current query, for fluid interface
	 */
	public function filterByNiveauAdherentId($niveauAdherentId = null, $comparison = null)
	{
		if (is_array($niveauAdherentId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $niveauAdherentId, $comparison);
	}

	/**
	 * Filter the query on the niveau_adherent_libelle column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNiveauAdherentLibelle('fooValue');   // WHERE niveau_adherent_libelle = 'fooValue'
	 * $query->filterByNiveauAdherentLibelle('%fooValue%'); // WHERE niveau_adherent_libelle LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $niveauAdherentLibelle The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefNiveauAdherentQuery The current query, for fluid interface
	 */
	public function filterByNiveauAdherentLibelle($niveauAdherentLibelle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($niveauAdherentLibelle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $niveauAdherentLibelle)) {
				$niveauAdherentLibelle = str_replace('*', '%', $niveauAdherentLibelle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefNiveauAdherentPeer::NIVEAU_ADHERENT_LIBELLE, $niveauAdherentLibelle, $comparison);
	}

	/**
	 * Filter the query by a related TblAdherent object
	 *
	 * @param     TblAdherent $tblAdherent  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefNiveauAdherentQuery The current query, for fluid interface
	 */
	public function filterByTblAdherent($tblAdherent, $comparison = null)
	{
		if ($tblAdherent instanceof TblAdherent) {
			return $this
				->addUsingAlias(RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $tblAdherent->getNiveauAdherentId(), $comparison);
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
	 * @return    RefNiveauAdherentQuery The current query, for fluid interface
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
	 * @param     RefNiveauAdherent $refNiveauAdherent Object to remove from the list of results
	 *
	 * @return    RefNiveauAdherentQuery The current query, for fluid interface
	 */
	public function prune($refNiveauAdherent = null)
	{
		if ($refNiveauAdherent) {
			$this->addUsingAlias(RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $refNiveauAdherent->getNiveauAdherentId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseRefNiveauAdherentQuery