<?php


/**
 * Base class that represents a query for the 'ref_' table.
 *
 * 
 *
 * @method     RefQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     RefQuery orderByProfilLib($order = Criteria::ASC) Order by the profil_lib column
 * @method     RefQuery orderByProfilLibCourt($order = Criteria::ASC) Order by the profil_lib_court column
 *
 * @method     RefQuery groupById() Group by the id column
 * @method     RefQuery groupByProfilLib() Group by the profil_lib column
 * @method     RefQuery groupByProfilLibCourt() Group by the profil_lib_court column
 *
 * @method     RefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Ref findOne(PropelPDO $con = null) Return the first Ref matching the query
 * @method     Ref findOneOrCreate(PropelPDO $con = null) Return the first Ref matching the query, or a new Ref object populated from the query conditions when no match is found
 *
 * @method     Ref findOneById(int $id) Return the first Ref filtered by the id column
 * @method     Ref findOneByProfilLib(string $profil_lib) Return the first Ref filtered by the profil_lib column
 * @method     Ref findOneByProfilLibCourt(string $profil_lib_court) Return the first Ref filtered by the profil_lib_court column
 *
 * @method     array findById(int $id) Return Ref objects filtered by the id column
 * @method     array findByProfilLib(string $profil_lib) Return Ref objects filtered by the profil_lib column
 * @method     array findByProfilLibCourt(string $profil_lib_court) Return Ref objects filtered by the profil_lib_court column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseRefQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Ref', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RefQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RefQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RefQuery) {
			return $criteria;
		}
		$query = new RefQuery();
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
	 * @return    Ref|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = RefPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(RefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Ref A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `PROFIL_LIB`, `PROFIL_LIB_COURT` FROM `ref_` WHERE `ID` = :p0';
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
			$obj = new Ref();
			$obj->hydrate($row);
			RefPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    Ref|array|mixed the result, formatted by the current formatter
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
	 * @return    RefQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RefPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RefQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RefPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterById(1234); // WHERE id = 1234
	 * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
	 * $query->filterById(array('min' => 12)); // WHERE id > 12
	 * </code>
	 *
	 * @param     mixed $id The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RefPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the profil_lib column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProfilLib('fooValue');   // WHERE profil_lib = 'fooValue'
	 * $query->filterByProfilLib('%fooValue%'); // WHERE profil_lib LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $profilLib The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefQuery The current query, for fluid interface
	 */
	public function filterByProfilLib($profilLib = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($profilLib)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $profilLib)) {
				$profilLib = str_replace('*', '%', $profilLib);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefPeer::PROFIL_LIB, $profilLib, $comparison);
	}

	/**
	 * Filter the query on the profil_lib_court column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByProfilLibCourt('fooValue');   // WHERE profil_lib_court = 'fooValue'
	 * $query->filterByProfilLibCourt('%fooValue%'); // WHERE profil_lib_court LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $profilLibCourt The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RefQuery The current query, for fluid interface
	 */
	public function filterByProfilLibCourt($profilLibCourt = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($profilLibCourt)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $profilLibCourt)) {
				$profilLibCourt = str_replace('*', '%', $profilLibCourt);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RefPeer::PROFIL_LIB_COURT, $profilLibCourt, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Ref $ref Object to remove from the list of results
	 *
	 * @return    RefQuery The current query, for fluid interface
	 */
	public function prune($ref = null)
	{
		if ($ref) {
			$this->addUsingAlias(RefPeer::ID, $ref->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseRefQuery