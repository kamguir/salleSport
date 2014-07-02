<?php


/**
 * Base class that represents a query for the 'ref_jour' table.
 *
 * 
 *
 * @method     RefJourQuery orderByIdJour($order = Criteria::ASC) Order by the id_jour column
 * @method     RefJourQuery orderByLibelleJour($order = Criteria::ASC) Order by the libelle_jour column
 *
 * @method     RefJourQuery groupByIdJour() Group by the id_jour column
 * @method     RefJourQuery groupByLibelleJour() Group by the libelle_jour column
 *
 * @method     RefJourQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RefJourQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RefJourQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RefJourQuery leftJoinLnkJourEntrainementAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkJourEntrainementAdherent relation
 * @method     RefJourQuery rightJoinLnkJourEntrainementAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkJourEntrainementAdherent relation
 * @method     RefJourQuery innerJoinLnkJourEntrainementAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkJourEntrainementAdherent relation
 *
 * @method     RefJour findOne(PropelPDO $con = null) Return the first RefJour matching the query
 * @method     RefJour findOneOrCreate(PropelPDO $con = null) Return the first RefJour matching the query, or a new RefJour object populated from the query conditions when no match is found
 *
 * @method     RefJour findOneByIdJour(int $id_jour) Return the first RefJour filtered by the id_jour column
 * @method     RefJour findOneByLibelleJour(string $libelle_jour) Return the first RefJour filtered by the libelle_jour column
 *
 * @method     array findByIdJour(int $id_jour) Return RefJour objects filtered by the id_jour column
 * @method     array findByLibelleJour(string $libelle_jour) Return RefJour objects filtered by the libelle_jour column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefJourQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseRefJourQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'RefJour', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RefJourQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RefJourQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RefJourQuery) {
			return $criteria;
		}
		$query = new RefJourQuery();
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
	 * @return    RefJour|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = RefJourPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(RefJourPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    RefJour A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_JOUR`, `LIBELLE_JOUR` FROM `ref_jour` WHERE `ID_JOUR` = :p0';
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
			$obj = new RefJour();
			$obj->hydrate($row);
			RefJourPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    RefJour|array|mixed the result, formatted by the current formatter
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
	 * @return    RefJourQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RefJourPeer::ID_JOUR, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RefJourQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RefJourPeer::ID_JOUR, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id_jour column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByIdJour(1234); // WHERE id_jour = 1234
	 * $query->filterByIdJour(array(12, 34)); // WHERE id_jour IN (12, 34)
	 * $query->filterByIdJour(array('min' => 12)); // WHERE id_jour > 12
	 * </code>
	 *
	 * @param     mixed $idJour The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefJourQuery The current query, for fluid interface
	 */
	public function filterByIdJour($idJour = null, $comparison = null)
	{
		if (is_array($idJour) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RefJourPeer::ID_JOUR, $idJour, $comparison);
	}

	/**
	 * Filter the query on the libelle_jour column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLibelleJour('fooValue');   // WHERE libelle_jour = 'fooValue'
	 * $query->filterByLibelleJour('%fooValue%'); // WHERE libelle_jour LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $libelleJour The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefJourQuery The current query, for fluid interface
	 */
	public function filterByLibelleJour($libelleJour = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($libelleJour)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $libelleJour)) {
				$libelleJour = str_replace('*', '%', $libelleJour);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefJourPeer::LIBELLE_JOUR, $libelleJour, $comparison);
	}

	/**
	 * Filter the query by a related LnkJourEntrainementAdherent object
	 *
	 * @param     LnkJourEntrainementAdherent $lnkJourEntrainementAdherent  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefJourQuery The current query, for fluid interface
	 */
	public function filterByLnkJourEntrainementAdherent($lnkJourEntrainementAdherent, $comparison = null)
	{
		if ($lnkJourEntrainementAdherent instanceof LnkJourEntrainementAdherent) {
			return $this
				->addUsingAlias(RefJourPeer::ID_JOUR, $lnkJourEntrainementAdherent->getIdJour(), $comparison);
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
	 * @return    RefJourQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     RefJour $refJour Object to remove from the list of results
	 *
	 * @return    RefJourQuery The current query, for fluid interface
	 */
	public function prune($refJour = null)
	{
		if ($refJour) {
			$this->addUsingAlias(RefJourPeer::ID_JOUR, $refJour->getIdJour(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseRefJourQuery