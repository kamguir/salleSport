<?php


/**
 * Base class that represents a query for the 'ref_civilite' table.
 *
 * 
 *
 * @method     RefCiviliteQuery orderByIdCivilite($order = Criteria::ASC) Order by the id_civilite column
 * @method     RefCiviliteQuery orderByLibelleCivilite($order = Criteria::ASC) Order by the libelle_civilite column
 *
 * @method     RefCiviliteQuery groupByIdCivilite() Group by the id_civilite column
 * @method     RefCiviliteQuery groupByLibelleCivilite() Group by the libelle_civilite column
 *
 * @method     RefCiviliteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RefCiviliteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RefCiviliteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RefCiviliteQuery leftJoinTblAdherent($relationAlias = null) Adds a LEFT JOIN clause to the query using the TblAdherent relation
 * @method     RefCiviliteQuery rightJoinTblAdherent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TblAdherent relation
 * @method     RefCiviliteQuery innerJoinTblAdherent($relationAlias = null) Adds a INNER JOIN clause to the query using the TblAdherent relation
 *
 * @method     RefCivilite findOne(PropelPDO $con = null) Return the first RefCivilite matching the query
 * @method     RefCivilite findOneOrCreate(PropelPDO $con = null) Return the first RefCivilite matching the query, or a new RefCivilite object populated from the query conditions when no match is found
 *
 * @method     RefCivilite findOneByIdCivilite(int $id_civilite) Return the first RefCivilite filtered by the id_civilite column
 * @method     RefCivilite findOneByLibelleCivilite(string $libelle_civilite) Return the first RefCivilite filtered by the libelle_civilite column
 *
 * @method     array findByIdCivilite(int $id_civilite) Return RefCivilite objects filtered by the id_civilite column
 * @method     array findByLibelleCivilite(string $libelle_civilite) Return RefCivilite objects filtered by the libelle_civilite column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefCiviliteQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseRefCiviliteQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'RefCivilite', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RefCiviliteQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RefCiviliteQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RefCiviliteQuery) {
			return $criteria;
		}
		$query = new RefCiviliteQuery();
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
	 * @return    RefCivilite|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = RefCivilitePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(RefCivilitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    RefCivilite A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID_CIVILITE`, `LIBELLE_CIVILITE` FROM `ref_civilite` WHERE `ID_CIVILITE` = :p0';
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
			$obj = new RefCivilite();
			$obj->hydrate($row);
			RefCivilitePeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    RefCivilite|array|mixed the result, formatted by the current formatter
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
	 * @return    RefCiviliteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RefCivilitePeer::ID_CIVILITE, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RefCiviliteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RefCivilitePeer::ID_CIVILITE, $keys, Criteria::IN);
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
	 * @param     mixed $idCivilite The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefCiviliteQuery The current query, for fluid interface
	 */
	public function filterByIdCivilite($idCivilite = null, $comparison = null)
	{
		if (is_array($idCivilite) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RefCivilitePeer::ID_CIVILITE, $idCivilite, $comparison);
	}

	/**
	 * Filter the query on the libelle_civilite column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLibelleCivilite('fooValue');   // WHERE libelle_civilite = 'fooValue'
	 * $query->filterByLibelleCivilite('%fooValue%'); // WHERE libelle_civilite LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $libelleCivilite The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefCiviliteQuery The current query, for fluid interface
	 */
	public function filterByLibelleCivilite($libelleCivilite = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($libelleCivilite)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $libelleCivilite)) {
				$libelleCivilite = str_replace('*', '%', $libelleCivilite);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefCivilitePeer::LIBELLE_CIVILITE, $libelleCivilite, $comparison);
	}

	/**
	 * Filter the query by a related TblAdherent object
	 *
	 * @param     TblAdherent $tblAdherent  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefCiviliteQuery The current query, for fluid interface
	 */
	public function filterByTblAdherent($tblAdherent, $comparison = null)
	{
		if ($tblAdherent instanceof TblAdherent) {
			return $this
				->addUsingAlias(RefCivilitePeer::ID_CIVILITE, $tblAdherent->getIdCivilite(), $comparison);
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
	 * @return    RefCiviliteQuery The current query, for fluid interface
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
	 * @param     RefCivilite $refCivilite Object to remove from the list of results
	 *
	 * @return    RefCiviliteQuery The current query, for fluid interface
	 */
	public function prune($refCivilite = null)
	{
		if ($refCivilite) {
			$this->addUsingAlias(RefCivilitePeer::ID_CIVILITE, $refCivilite->getIdCivilite(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseRefCiviliteQuery