<?php


/**
 * Base class that represents a query for the 'ref_seance_horaire' table.
 *
 * 
 *
 * @method     RefSeanceHoraireQuery orderBySeanceHoraireId($order = Criteria::ASC) Order by the seance_horaire_id column
 * @method     RefSeanceHoraireQuery orderBySeanceHoraire($order = Criteria::ASC) Order by the seance_horaire column
 *
 * @method     RefSeanceHoraireQuery groupBySeanceHoraireId() Group by the seance_horaire_id column
 * @method     RefSeanceHoraireQuery groupBySeanceHoraire() Group by the seance_horaire column
 *
 * @method     RefSeanceHoraireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RefSeanceHoraireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RefSeanceHoraireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RefSeanceHoraireQuery leftJoinTblAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblAdherent relation
 * @method     RefSeanceHoraireQuery rightJoinTblAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblAdherent relation
 * @method     RefSeanceHoraireQuery innerJoinTblAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the TblAdherent relation
 *
 * @method     RefSeanceHoraire findOne(PropelPDO $con = null) Return the first RefSeanceHoraire matching the query
 * @method     RefSeanceHoraire findOneOrCreate(PropelPDO $con = null) Return the first RefSeanceHoraire matching the query, or a new RefSeanceHoraire object populated from the query conditions when no match is found
 *
 * @method     RefSeanceHoraire findOneBySeanceHoraireId(int $seance_horaire_id) Return the first RefSeanceHoraire filtered by the seance_horaire_id column
 * @method     RefSeanceHoraire findOneBySeanceHoraire(string $seance_horaire) Return the first RefSeanceHoraire filtered by the seance_horaire column
 *
 * @method     array findBySeanceHoraireId(int $seance_horaire_id) Return RefSeanceHoraire objects filtered by the seance_horaire_id column
 * @method     array findBySeanceHoraire(string $seance_horaire) Return RefSeanceHoraire objects filtered by the seance_horaire column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefSeanceHoraireQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseRefSeanceHoraireQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'RefSeanceHoraire', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RefSeanceHoraireQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RefSeanceHoraireQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RefSeanceHoraireQuery) {
			return $criteria;
		}
		$query = new RefSeanceHoraireQuery();
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
	 * @return    RefSeanceHoraire|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = RefSeanceHorairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(RefSeanceHorairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    RefSeanceHoraire A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `SEANCE_HORAIRE_ID`, `SEANCE_HORAIRE` FROM `ref_seance_horaire` WHERE `SEANCE_HORAIRE_ID` = :p0';
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
			$obj = new RefSeanceHoraire();
			$obj->hydrate($row);
			RefSeanceHorairePeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    RefSeanceHoraire|array|mixed the result, formatted by the current formatter
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
	 * @return    RefSeanceHoraireQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RefSeanceHoraireQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $keys, Criteria::IN);
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
	 * @param     mixed $seanceHoraireId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefSeanceHoraireQuery The current query, for fluid interface
	 */
	public function filterBySeanceHoraireId($seanceHoraireId = null, $comparison = null)
	{
		if (is_array($seanceHoraireId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $seanceHoraireId, $comparison);
	}

	/**
	 * Filter the query on the seance_horaire column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySeanceHoraire('fooValue');   // WHERE seance_horaire = 'fooValue'
	 * $query->filterBySeanceHoraire('%fooValue%'); // WHERE seance_horaire LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $seanceHoraire The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefSeanceHoraireQuery The current query, for fluid interface
	 */
	public function filterBySeanceHoraire($seanceHoraire = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($seanceHoraire)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $seanceHoraire)) {
				$seanceHoraire = str_replace('*', '%', $seanceHoraire);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefSeanceHorairePeer::SEANCE_HORAIRE, $seanceHoraire, $comparison);
	}

	/**
	 * Filter the query by a related TblAdherent object
	 *
	 * @param     TblAdherent $tblAdherent  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefSeanceHoraireQuery The current query, for fluid interface
	 */
	public function filterByTblAdherent($tblAdherent, $comparison = null)
	{
		if ($tblAdherent instanceof TblAdherent) {
			return $this
				->addUsingAlias(RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $tblAdherent->getSeanceHoraireId(), $comparison);
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
	 * @return    RefSeanceHoraireQuery The current query, for fluid interface
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
	 * @param     RefSeanceHoraire $refSeanceHoraire Object to remove from the list of results
	 *
	 * @return    RefSeanceHoraireQuery The current query, for fluid interface
	 */
	public function prune($refSeanceHoraire = null)
	{
		if ($refSeanceHoraire) {
			$this->addUsingAlias(RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $refSeanceHoraire->getSeanceHoraireId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseRefSeanceHoraireQuery