<?php


/**
 * Base class that represents a query for the 'tbl_user' table.
 *
 * 
 *
 * @method     TblUserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     TblUserQuery orderByUserNom($order = Criteria::ASC) Order by the user_nom column
 * @method     TblUserQuery orderByUserPrenom($order = Criteria::ASC) Order by the user_prenom column
 * @method     TblUserQuery orderByUserLogin($order = Criteria::ASC) Order by the user_login column
 * @method     TblUserQuery orderByUserPassword($order = Criteria::ASC) Order by the user_password column
 * @method     TblUserQuery orderByUserMail($order = Criteria::ASC) Order by the user_mail column
 * @method     TblUserQuery orderByUserCompteActive($order = Criteria::ASC) Order by the user_compte_active column
 * @method     TblUserQuery orderByUserLastCnx($order = Criteria::ASC) Order by the user_last_cnx column
 * @method     TblUserQuery orderByUserNbCnx($order = Criteria::ASC) Order by the user_nb_cnx column
 *
 * @method     TblUserQuery groupByUserId() Group by the user_id column
 * @method     TblUserQuery groupByUserNom() Group by the user_nom column
 * @method     TblUserQuery groupByUserPrenom() Group by the user_prenom column
 * @method     TblUserQuery groupByUserLogin() Group by the user_login column
 * @method     TblUserQuery groupByUserPassword() Group by the user_password column
 * @method     TblUserQuery groupByUserMail() Group by the user_mail column
 * @method     TblUserQuery groupByUserCompteActive() Group by the user_compte_active column
 * @method     TblUserQuery groupByUserLastCnx() Group by the user_last_cnx column
 * @method     TblUserQuery groupByUserNbCnx() Group by the user_nb_cnx column
 *
 * @method     TblUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TblUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TblUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TblUserQuery leftJoinLnkUserProfil($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkUserProfil relation
 * @method     TblUserQuery rightJoinLnkUserProfil($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkUserProfil relation
 * @method     TblUserQuery innerJoinLnkUserProfil($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkUserProfil relation
 *
 * @method     TblUser findOne(PropelPDO $con = null) Return the first TblUser matching the query
 * @method     TblUser findOneOrCreate(PropelPDO $con = null) Return the first TblUser matching the query, or a new TblUser object populated from the query conditions when no match is found
 *
 * @method     TblUser findOneByUserId(int $user_id) Return the first TblUser filtered by the user_id column
 * @method     TblUser findOneByUserNom(string $user_nom) Return the first TblUser filtered by the user_nom column
 * @method     TblUser findOneByUserPrenom(string $user_prenom) Return the first TblUser filtered by the user_prenom column
 * @method     TblUser findOneByUserLogin(string $user_login) Return the first TblUser filtered by the user_login column
 * @method     TblUser findOneByUserPassword(string $user_password) Return the first TblUser filtered by the user_password column
 * @method     TblUser findOneByUserMail(string $user_mail) Return the first TblUser filtered by the user_mail column
 * @method     TblUser findOneByUserCompteActive(boolean $user_compte_active) Return the first TblUser filtered by the user_compte_active column
 * @method     TblUser findOneByUserLastCnx(string $user_last_cnx) Return the first TblUser filtered by the user_last_cnx column
 * @method     TblUser findOneByUserNbCnx(int $user_nb_cnx) Return the first TblUser filtered by the user_nb_cnx column
 *
 * @method     array findByUserId(int $user_id) Return TblUser objects filtered by the user_id column
 * @method     array findByUserNom(string $user_nom) Return TblUser objects filtered by the user_nom column
 * @method     array findByUserPrenom(string $user_prenom) Return TblUser objects filtered by the user_prenom column
 * @method     array findByUserLogin(string $user_login) Return TblUser objects filtered by the user_login column
 * @method     array findByUserPassword(string $user_password) Return TblUser objects filtered by the user_password column
 * @method     array findByUserMail(string $user_mail) Return TblUser objects filtered by the user_mail column
 * @method     array findByUserCompteActive(boolean $user_compte_active) Return TblUser objects filtered by the user_compte_active column
 * @method     array findByUserLastCnx(string $user_last_cnx) Return TblUser objects filtered by the user_last_cnx column
 * @method     array findByUserNbCnx(int $user_nb_cnx) Return TblUser objects filtered by the user_nb_cnx column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTblUserQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseTblUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'TblUser', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new TblUserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TblUserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TblUserQuery) {
			return $criteria;
		}
		$query = new TblUserQuery();
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
	 * @return    TblUser|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = TblUserPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(TblUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    TblUser A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `USER_ID`, `USER_NOM`, `USER_PRENOM`, `USER_LOGIN`, `USER_PASSWORD`, `USER_MAIL`, `USER_COMPTE_ACTIVE`, `USER_LAST_CNX`, `USER_NB_CNX` FROM `tbl_user` WHERE `USER_ID` = :p0';
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
			$obj = new TblUser();
			$obj->hydrate($row);
			TblUserPeer::addInstanceToPool($obj, (string) $key);
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
	 * @return    TblUser|array|mixed the result, formatted by the current formatter
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
	 * @return    TblUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(TblUserPeer::USER_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    TblUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(TblUserPeer::USER_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the user_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUserId(1234); // WHERE user_id = 1234
	 * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
	 * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
	 * </code>
	 *
	 * @param     mixed $userId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblUserQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(TblUserPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the user_nom column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUserNom('fooValue');   // WHERE user_nom = 'fooValue'
	 * $query->filterByUserNom('%fooValue%'); // WHERE user_nom LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $userNom The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblUserQuery The current query, for fluid interface
	 */
	public function filterByUserNom($userNom = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($userNom)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $userNom)) {
				$userNom = str_replace('*', '%', $userNom);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TblUserPeer::USER_NOM, $userNom, $comparison);
	}

	/**
	 * Filter the query on the user_prenom column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUserPrenom('fooValue');   // WHERE user_prenom = 'fooValue'
	 * $query->filterByUserPrenom('%fooValue%'); // WHERE user_prenom LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $userPrenom The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblUserQuery The current query, for fluid interface
	 */
	public function filterByUserPrenom($userPrenom = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($userPrenom)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $userPrenom)) {
				$userPrenom = str_replace('*', '%', $userPrenom);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TblUserPeer::USER_PRENOM, $userPrenom, $comparison);
	}

	/**
	 * Filter the query on the user_login column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUserLogin('fooValue');   // WHERE user_login = 'fooValue'
	 * $query->filterByUserLogin('%fooValue%'); // WHERE user_login LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $userLogin The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblUserQuery The current query, for fluid interface
	 */
	public function filterByUserLogin($userLogin = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($userLogin)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $userLogin)) {
				$userLogin = str_replace('*', '%', $userLogin);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TblUserPeer::USER_LOGIN, $userLogin, $comparison);
	}

	/**
	 * Filter the query on the user_password column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUserPassword('fooValue');   // WHERE user_password = 'fooValue'
	 * $query->filterByUserPassword('%fooValue%'); // WHERE user_password LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $userPassword The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblUserQuery The current query, for fluid interface
	 */
	public function filterByUserPassword($userPassword = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($userPassword)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $userPassword)) {
				$userPassword = str_replace('*', '%', $userPassword);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TblUserPeer::USER_PASSWORD, $userPassword, $comparison);
	}

	/**
	 * Filter the query on the user_mail column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUserMail('fooValue');   // WHERE user_mail = 'fooValue'
	 * $query->filterByUserMail('%fooValue%'); // WHERE user_mail LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $userMail The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblUserQuery The current query, for fluid interface
	 */
	public function filterByUserMail($userMail = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($userMail)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $userMail)) {
				$userMail = str_replace('*', '%', $userMail);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TblUserPeer::USER_MAIL, $userMail, $comparison);
	}

	/**
	 * Filter the query on the user_compte_active column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUserCompteActive(true); // WHERE user_compte_active = true
	 * $query->filterByUserCompteActive('yes'); // WHERE user_compte_active = true
	 * </code>
	 *
	 * @param     boolean|string $userCompteActive The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblUserQuery The current query, for fluid interface
	 */
	public function filterByUserCompteActive($userCompteActive = null, $comparison = null)
	{
		if (is_string($userCompteActive)) {
			$user_compte_active = in_array(strtolower($userCompteActive), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(TblUserPeer::USER_COMPTE_ACTIVE, $userCompteActive, $comparison);
	}

	/**
	 * Filter the query on the user_last_cnx column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUserLastCnx('2011-03-14'); // WHERE user_last_cnx = '2011-03-14'
	 * $query->filterByUserLastCnx('now'); // WHERE user_last_cnx = '2011-03-14'
	 * $query->filterByUserLastCnx(array('max' => 'yesterday')); // WHERE user_last_cnx > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $userLastCnx The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblUserQuery The current query, for fluid interface
	 */
	public function filterByUserLastCnx($userLastCnx = null, $comparison = null)
	{
		if (is_array($userLastCnx)) {
			$useMinMax = false;
			if (isset($userLastCnx['min'])) {
				$this->addUsingAlias(TblUserPeer::USER_LAST_CNX, $userLastCnx['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userLastCnx['max'])) {
				$this->addUsingAlias(TblUserPeer::USER_LAST_CNX, $userLastCnx['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblUserPeer::USER_LAST_CNX, $userLastCnx, $comparison);
	}

	/**
	 * Filter the query on the user_nb_cnx column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUserNbCnx(1234); // WHERE user_nb_cnx = 1234
	 * $query->filterByUserNbCnx(array(12, 34)); // WHERE user_nb_cnx IN (12, 34)
	 * $query->filterByUserNbCnx(array('min' => 12)); // WHERE user_nb_cnx > 12
	 * </code>
	 *
	 * @param     mixed $userNbCnx The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblUserQuery The current query, for fluid interface
	 */
	public function filterByUserNbCnx($userNbCnx = null, $comparison = null)
	{
		if (is_array($userNbCnx)) {
			$useMinMax = false;
			if (isset($userNbCnx['min'])) {
				$this->addUsingAlias(TblUserPeer::USER_NB_CNX, $userNbCnx['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userNbCnx['max'])) {
				$this->addUsingAlias(TblUserPeer::USER_NB_CNX, $userNbCnx['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TblUserPeer::USER_NB_CNX, $userNbCnx, $comparison);
	}

	/**
	 * Filter the query by a related LnkUserProfil object
	 *
	 * @param     LnkUserProfil $lnkUserProfil  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TblUserQuery The current query, for fluid interface
	 */
	public function filterByLnkUserProfil($lnkUserProfil, $comparison = null)
	{
		if ($lnkUserProfil instanceof LnkUserProfil) {
			return $this
				->addUsingAlias(TblUserPeer::USER_ID, $lnkUserProfil->getUserId(), $comparison);
		} elseif ($lnkUserProfil instanceof PropelCollection) {
			return $this
				->useLnkUserProfilQuery()
				->filterByPrimaryKeys($lnkUserProfil->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByLnkUserProfil() only accepts arguments of type LnkUserProfil or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the LnkUserProfil relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TblUserQuery The current query, for fluid interface
	 */
	public function joinLnkUserProfil($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('LnkUserProfil');

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
			$this->addJoinObject($join, 'LnkUserProfil');
		}

		return $this;
	}

	/**
	 * Use the LnkUserProfil relation LnkUserProfil object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LnkUserProfilQuery A secondary query class using the current class as primary query
	 */
	public function useLnkUserProfilQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinLnkUserProfil($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'LnkUserProfil', 'LnkUserProfilQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     TblUser $tblUser Object to remove from the list of results
	 *
	 * @return    TblUserQuery The current query, for fluid interface
	 */
	public function prune($tblUser = null)
	{
		if ($tblUser) {
			$this->addUsingAlias(TblUserPeer::USER_ID, $tblUser->getUserId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseTblUserQuery