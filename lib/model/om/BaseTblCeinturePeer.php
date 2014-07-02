<?php


/**
 * Base static class for performing query and update operations on the 'tbl_ceinture' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTblCeinturePeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'propel';

	/** the table name for this class */
	const TABLE_NAME = 'tbl_ceinture';

	/** the related Propel class for this table */
	const OM_CLASS = 'TblCeinture';

	/** the related TableMap class for this table */
	const TM_CLASS = 'TblCeintureTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 9;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 9;

	/** the column name for the CEINTURE_ID field */
	const CEINTURE_ID = 'tbl_ceinture.CEINTURE_ID';

	/** the column name for the ADHERENT_ID field */
	const ADHERENT_ID = 'tbl_ceinture.ADHERENT_ID';

	/** the column name for the GRADE_ID field */
	const GRADE_ID = 'tbl_ceinture.GRADE_ID';

	/** the column name for the COMPETANCE_ID field */
	const COMPETANCE_ID = 'tbl_ceinture.COMPETANCE_ID';

	/** the column name for the TITRE_ENTRAINEUR_ID field */
	const TITRE_ENTRAINEUR_ID = 'tbl_ceinture.TITRE_ENTRAINEUR_ID';

	/** the column name for the CEINTURE_COULEUR_ID field */
	const CEINTURE_COULEUR_ID = 'tbl_ceinture.CEINTURE_COULEUR_ID';

	/** the column name for the DATE_ACQUISITION field */
	const DATE_ACQUISITION = 'tbl_ceinture.DATE_ACQUISITION';

	/** the column name for the CREATED_AT field */
	const CREATED_AT = 'tbl_ceinture.CREATED_AT';

	/** the column name for the DELETED_AT field */
	const DELETED_AT = 'tbl_ceinture.DELETED_AT';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of TblCeinture objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array TblCeinture[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CeintureId', 'AdherentId', 'GradeId', 'CompetanceId', 'TitreEntraineurId', 'CeintureCouleurId', 'DateAcquisition', 'CreatedAt', 'DeletedAt', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('ceintureId', 'adherentId', 'gradeId', 'competanceId', 'titreEntraineurId', 'ceintureCouleurId', 'dateAcquisition', 'createdAt', 'deletedAt', ),
		BasePeer::TYPE_COLNAME => array (self::CEINTURE_ID, self::ADHERENT_ID, self::GRADE_ID, self::COMPETANCE_ID, self::TITRE_ENTRAINEUR_ID, self::CEINTURE_COULEUR_ID, self::DATE_ACQUISITION, self::CREATED_AT, self::DELETED_AT, ),
		BasePeer::TYPE_RAW_COLNAME => array ('CEINTURE_ID', 'ADHERENT_ID', 'GRADE_ID', 'COMPETANCE_ID', 'TITRE_ENTRAINEUR_ID', 'CEINTURE_COULEUR_ID', 'DATE_ACQUISITION', 'CREATED_AT', 'DELETED_AT', ),
		BasePeer::TYPE_FIELDNAME => array ('ceinture_id', 'adherent_id', 'grade_id', 'competance_id', 'titre_entraineur_id', 'ceinture_couleur_id', 'date_acquisition', 'created_at', 'deleted_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CeintureId' => 0, 'AdherentId' => 1, 'GradeId' => 2, 'CompetanceId' => 3, 'TitreEntraineurId' => 4, 'CeintureCouleurId' => 5, 'DateAcquisition' => 6, 'CreatedAt' => 7, 'DeletedAt' => 8, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('ceintureId' => 0, 'adherentId' => 1, 'gradeId' => 2, 'competanceId' => 3, 'titreEntraineurId' => 4, 'ceintureCouleurId' => 5, 'dateAcquisition' => 6, 'createdAt' => 7, 'deletedAt' => 8, ),
		BasePeer::TYPE_COLNAME => array (self::CEINTURE_ID => 0, self::ADHERENT_ID => 1, self::GRADE_ID => 2, self::COMPETANCE_ID => 3, self::TITRE_ENTRAINEUR_ID => 4, self::CEINTURE_COULEUR_ID => 5, self::DATE_ACQUISITION => 6, self::CREATED_AT => 7, self::DELETED_AT => 8, ),
		BasePeer::TYPE_RAW_COLNAME => array ('CEINTURE_ID' => 0, 'ADHERENT_ID' => 1, 'GRADE_ID' => 2, 'COMPETANCE_ID' => 3, 'TITRE_ENTRAINEUR_ID' => 4, 'CEINTURE_COULEUR_ID' => 5, 'DATE_ACQUISITION' => 6, 'CREATED_AT' => 7, 'DELETED_AT' => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('ceinture_id' => 0, 'adherent_id' => 1, 'grade_id' => 2, 'competance_id' => 3, 'titre_entraineur_id' => 4, 'ceinture_couleur_id' => 5, 'date_acquisition' => 6, 'created_at' => 7, 'deleted_at' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. TblCeinturePeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(TblCeinturePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(TblCeinturePeer::CEINTURE_ID);
			$criteria->addSelectColumn(TblCeinturePeer::ADHERENT_ID);
			$criteria->addSelectColumn(TblCeinturePeer::GRADE_ID);
			$criteria->addSelectColumn(TblCeinturePeer::COMPETANCE_ID);
			$criteria->addSelectColumn(TblCeinturePeer::TITRE_ENTRAINEUR_ID);
			$criteria->addSelectColumn(TblCeinturePeer::CEINTURE_COULEUR_ID);
			$criteria->addSelectColumn(TblCeinturePeer::DATE_ACQUISITION);
			$criteria->addSelectColumn(TblCeinturePeer::CREATED_AT);
			$criteria->addSelectColumn(TblCeinturePeer::DELETED_AT);
		} else {
			$criteria->addSelectColumn($alias . '.CEINTURE_ID');
			$criteria->addSelectColumn($alias . '.ADHERENT_ID');
			$criteria->addSelectColumn($alias . '.GRADE_ID');
			$criteria->addSelectColumn($alias . '.COMPETANCE_ID');
			$criteria->addSelectColumn($alias . '.TITRE_ENTRAINEUR_ID');
			$criteria->addSelectColumn($alias . '.CEINTURE_COULEUR_ID');
			$criteria->addSelectColumn($alias . '.DATE_ACQUISITION');
			$criteria->addSelectColumn($alias . '.CREATED_AT');
			$criteria->addSelectColumn($alias . '.DELETED_AT');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblCeinturePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblCeinturePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Selects one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     TblCeinture
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = TblCeinturePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Selects several row from the DB.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return TblCeinturePeer::populateObjects(TblCeinturePeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			TblCeinturePeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}


		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      TblCeinture $value A TblCeinture object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getCeintureId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A TblCeinture object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof TblCeinture) {
				$key = (string) $value->getCeintureId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or TblCeinture object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     TblCeinture Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to tbl_ceinture
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = TblCeinturePeer::getOMClass();
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = TblCeinturePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = TblCeinturePeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				TblCeinturePeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (TblCeinture object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = TblCeinturePeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = TblCeinturePeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + TblCeinturePeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = TblCeinturePeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			TblCeinturePeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}


	/**
	 * Returns the number of rows matching criteria, joining the related TblAdherent table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinTblAdherent(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblCeinturePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblCeinturePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TblCeinturePeer::ADHERENT_ID, TblAdherentPeer::ID_ADHERENT, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related RefGradeCeinture table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinRefGradeCeinture(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblCeinturePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblCeinturePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TblCeinturePeer::GRADE_ID, RefGradeCeinturePeer::GRADE_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related RefCompetance table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinRefCompetance(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblCeinturePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblCeinturePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TblCeinturePeer::COMPETANCE_ID, RefCompetancePeer::COMPETANCE_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related RefTitreEntraineur table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinRefTitreEntraineur(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblCeinturePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblCeinturePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TblCeinturePeer::TITRE_ENTRAINEUR_ID, RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related RefCeintureCouleur table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinRefCeintureCouleur(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblCeinturePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblCeinturePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TblCeinturePeer::CEINTURE_COULEUR_ID, RefCeintureCouleurPeer::CEINTURE_COULEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of TblCeinture objects pre-filled with their TblAdherent objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblCeinture objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinTblAdherent(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblCeinturePeer::addSelectColumns($criteria);
		$startcol = TblCeinturePeer::NUM_HYDRATE_COLUMNS;
		TblAdherentPeer::addSelectColumns($criteria);

		$criteria->addJoin(TblCeinturePeer::ADHERENT_ID, TblAdherentPeer::ID_ADHERENT, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblCeinturePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblCeinturePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TblCeinturePeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblCeinturePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = TblAdherentPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = TblAdherentPeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					TblAdherentPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (TblCeinture) to $obj2 (TblAdherent)
				$obj2->addTblCeinture($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblCeinture objects pre-filled with their RefGradeCeinture objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblCeinture objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinRefGradeCeinture(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblCeinturePeer::addSelectColumns($criteria);
		$startcol = TblCeinturePeer::NUM_HYDRATE_COLUMNS;
		RefGradeCeinturePeer::addSelectColumns($criteria);

		$criteria->addJoin(TblCeinturePeer::GRADE_ID, RefGradeCeinturePeer::GRADE_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblCeinturePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblCeinturePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TblCeinturePeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblCeinturePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = RefGradeCeinturePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = RefGradeCeinturePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = RefGradeCeinturePeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					RefGradeCeinturePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (TblCeinture) to $obj2 (RefGradeCeinture)
				$obj2->addTblCeinture($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblCeinture objects pre-filled with their RefCompetance objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblCeinture objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinRefCompetance(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblCeinturePeer::addSelectColumns($criteria);
		$startcol = TblCeinturePeer::NUM_HYDRATE_COLUMNS;
		RefCompetancePeer::addSelectColumns($criteria);

		$criteria->addJoin(TblCeinturePeer::COMPETANCE_ID, RefCompetancePeer::COMPETANCE_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblCeinturePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblCeinturePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TblCeinturePeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblCeinturePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = RefCompetancePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = RefCompetancePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = RefCompetancePeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					RefCompetancePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (TblCeinture) to $obj2 (RefCompetance)
				$obj2->addTblCeinture($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblCeinture objects pre-filled with their RefTitreEntraineur objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblCeinture objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinRefTitreEntraineur(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblCeinturePeer::addSelectColumns($criteria);
		$startcol = TblCeinturePeer::NUM_HYDRATE_COLUMNS;
		RefTitreEntraineurPeer::addSelectColumns($criteria);

		$criteria->addJoin(TblCeinturePeer::TITRE_ENTRAINEUR_ID, RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblCeinturePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblCeinturePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TblCeinturePeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblCeinturePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = RefTitreEntraineurPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = RefTitreEntraineurPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = RefTitreEntraineurPeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					RefTitreEntraineurPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (TblCeinture) to $obj2 (RefTitreEntraineur)
				$obj2->addTblCeinture($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblCeinture objects pre-filled with their RefCeintureCouleur objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblCeinture objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinRefCeintureCouleur(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblCeinturePeer::addSelectColumns($criteria);
		$startcol = TblCeinturePeer::NUM_HYDRATE_COLUMNS;
		RefCeintureCouleurPeer::addSelectColumns($criteria);

		$criteria->addJoin(TblCeinturePeer::CEINTURE_COULEUR_ID, RefCeintureCouleurPeer::CEINTURE_COULEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblCeinturePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblCeinturePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TblCeinturePeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblCeinturePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = RefCeintureCouleurPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = RefCeintureCouleurPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = RefCeintureCouleurPeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					RefCeintureCouleurPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (TblCeinture) to $obj2 (RefCeintureCouleur)
				$obj2->addTblCeinture($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblCeinturePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblCeinturePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TblCeinturePeer::ADHERENT_ID, TblAdherentPeer::ID_ADHERENT, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::GRADE_ID, RefGradeCeinturePeer::GRADE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::COMPETANCE_ID, RefCompetancePeer::COMPETANCE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::TITRE_ENTRAINEUR_ID, RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::CEINTURE_COULEUR_ID, RefCeintureCouleurPeer::CEINTURE_COULEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}

	/**
	 * Selects a collection of TblCeinture objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblCeinture objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblCeinturePeer::addSelectColumns($criteria);
		$startcol2 = TblCeinturePeer::NUM_HYDRATE_COLUMNS;

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + TblAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefGradeCeinturePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RefGradeCeinturePeer::NUM_HYDRATE_COLUMNS;

		RefCompetancePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RefCompetancePeer::NUM_HYDRATE_COLUMNS;

		RefTitreEntraineurPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + RefTitreEntraineurPeer::NUM_HYDRATE_COLUMNS;

		RefCeintureCouleurPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + RefCeintureCouleurPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TblCeinturePeer::ADHERENT_ID, TblAdherentPeer::ID_ADHERENT, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::GRADE_ID, RefGradeCeinturePeer::GRADE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::COMPETANCE_ID, RefCompetancePeer::COMPETANCE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::TITRE_ENTRAINEUR_ID, RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::CEINTURE_COULEUR_ID, RefCeintureCouleurPeer::CEINTURE_COULEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblCeinturePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblCeinturePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TblCeinturePeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblCeinturePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined TblAdherent rows

			$key2 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = TblAdherentPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = TblAdherentPeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					TblAdherentPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj2 (TblAdherent)
				$obj2->addTblCeinture($obj1);
			} // if joined row not null

			// Add objects for joined RefGradeCeinture rows

			$key3 = RefGradeCeinturePeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = RefGradeCeinturePeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = RefGradeCeinturePeer::getOMClass();

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RefGradeCeinturePeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj3 (RefGradeCeinture)
				$obj3->addTblCeinture($obj1);
			} // if joined row not null

			// Add objects for joined RefCompetance rows

			$key4 = RefCompetancePeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = RefCompetancePeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$cls = RefCompetancePeer::getOMClass();

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RefCompetancePeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj4 (RefCompetance)
				$obj4->addTblCeinture($obj1);
			} // if joined row not null

			// Add objects for joined RefTitreEntraineur rows

			$key5 = RefTitreEntraineurPeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = RefTitreEntraineurPeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$cls = RefTitreEntraineurPeer::getOMClass();

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					RefTitreEntraineurPeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj5 (RefTitreEntraineur)
				$obj5->addTblCeinture($obj1);
			} // if joined row not null

			// Add objects for joined RefCeintureCouleur rows

			$key6 = RefCeintureCouleurPeer::getPrimaryKeyHashFromRow($row, $startcol6);
			if ($key6 !== null) {
				$obj6 = RefCeintureCouleurPeer::getInstanceFromPool($key6);
				if (!$obj6) {

					$cls = RefCeintureCouleurPeer::getOMClass();

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					RefCeintureCouleurPeer::addInstanceToPool($obj6, $key6);
				} // if obj6 loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj6 (RefCeintureCouleur)
				$obj6->addTblCeinture($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related TblAdherent table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptTblAdherent(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblCeinturePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblCeinturePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TblCeinturePeer::GRADE_ID, RefGradeCeinturePeer::GRADE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::COMPETANCE_ID, RefCompetancePeer::COMPETANCE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::TITRE_ENTRAINEUR_ID, RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::CEINTURE_COULEUR_ID, RefCeintureCouleurPeer::CEINTURE_COULEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related RefGradeCeinture table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptRefGradeCeinture(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblCeinturePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblCeinturePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TblCeinturePeer::ADHERENT_ID, TblAdherentPeer::ID_ADHERENT, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::COMPETANCE_ID, RefCompetancePeer::COMPETANCE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::TITRE_ENTRAINEUR_ID, RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::CEINTURE_COULEUR_ID, RefCeintureCouleurPeer::CEINTURE_COULEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related RefCompetance table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptRefCompetance(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblCeinturePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblCeinturePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TblCeinturePeer::ADHERENT_ID, TblAdherentPeer::ID_ADHERENT, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::GRADE_ID, RefGradeCeinturePeer::GRADE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::TITRE_ENTRAINEUR_ID, RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::CEINTURE_COULEUR_ID, RefCeintureCouleurPeer::CEINTURE_COULEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related RefTitreEntraineur table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptRefTitreEntraineur(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblCeinturePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblCeinturePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TblCeinturePeer::ADHERENT_ID, TblAdherentPeer::ID_ADHERENT, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::GRADE_ID, RefGradeCeinturePeer::GRADE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::COMPETANCE_ID, RefCompetancePeer::COMPETANCE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::CEINTURE_COULEUR_ID, RefCeintureCouleurPeer::CEINTURE_COULEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related RefCeintureCouleur table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptRefCeintureCouleur(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblCeinturePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblCeinturePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TblCeinturePeer::ADHERENT_ID, TblAdherentPeer::ID_ADHERENT, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::GRADE_ID, RefGradeCeinturePeer::GRADE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::COMPETANCE_ID, RefCompetancePeer::COMPETANCE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::TITRE_ENTRAINEUR_ID, RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of TblCeinture objects pre-filled with all related objects except TblAdherent.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblCeinture objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptTblAdherent(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblCeinturePeer::addSelectColumns($criteria);
		$startcol2 = TblCeinturePeer::NUM_HYDRATE_COLUMNS;

		RefGradeCeinturePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + RefGradeCeinturePeer::NUM_HYDRATE_COLUMNS;

		RefCompetancePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RefCompetancePeer::NUM_HYDRATE_COLUMNS;

		RefTitreEntraineurPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RefTitreEntraineurPeer::NUM_HYDRATE_COLUMNS;

		RefCeintureCouleurPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + RefCeintureCouleurPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TblCeinturePeer::GRADE_ID, RefGradeCeinturePeer::GRADE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::COMPETANCE_ID, RefCompetancePeer::COMPETANCE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::TITRE_ENTRAINEUR_ID, RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::CEINTURE_COULEUR_ID, RefCeintureCouleurPeer::CEINTURE_COULEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblCeinturePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblCeinturePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TblCeinturePeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblCeinturePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined RefGradeCeinture rows

				$key2 = RefGradeCeinturePeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = RefGradeCeinturePeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = RefGradeCeinturePeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					RefGradeCeinturePeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj2 (RefGradeCeinture)
				$obj2->addTblCeinture($obj1);

			} // if joined row is not null

				// Add objects for joined RefCompetance rows

				$key3 = RefCompetancePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RefCompetancePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RefCompetancePeer::getOMClass();

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RefCompetancePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj3 (RefCompetance)
				$obj3->addTblCeinture($obj1);

			} // if joined row is not null

				// Add objects for joined RefTitreEntraineur rows

				$key4 = RefTitreEntraineurPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = RefTitreEntraineurPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = RefTitreEntraineurPeer::getOMClass();

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RefTitreEntraineurPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj4 (RefTitreEntraineur)
				$obj4->addTblCeinture($obj1);

			} // if joined row is not null

				// Add objects for joined RefCeintureCouleur rows

				$key5 = RefCeintureCouleurPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = RefCeintureCouleurPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = RefCeintureCouleurPeer::getOMClass();

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					RefCeintureCouleurPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj5 (RefCeintureCouleur)
				$obj5->addTblCeinture($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblCeinture objects pre-filled with all related objects except RefGradeCeinture.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblCeinture objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptRefGradeCeinture(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblCeinturePeer::addSelectColumns($criteria);
		$startcol2 = TblCeinturePeer::NUM_HYDRATE_COLUMNS;

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + TblAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefCompetancePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RefCompetancePeer::NUM_HYDRATE_COLUMNS;

		RefTitreEntraineurPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RefTitreEntraineurPeer::NUM_HYDRATE_COLUMNS;

		RefCeintureCouleurPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + RefCeintureCouleurPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TblCeinturePeer::ADHERENT_ID, TblAdherentPeer::ID_ADHERENT, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::COMPETANCE_ID, RefCompetancePeer::COMPETANCE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::TITRE_ENTRAINEUR_ID, RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::CEINTURE_COULEUR_ID, RefCeintureCouleurPeer::CEINTURE_COULEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblCeinturePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblCeinturePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TblCeinturePeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblCeinturePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined TblAdherent rows

				$key2 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = TblAdherentPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = TblAdherentPeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					TblAdherentPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj2 (TblAdherent)
				$obj2->addTblCeinture($obj1);

			} // if joined row is not null

				// Add objects for joined RefCompetance rows

				$key3 = RefCompetancePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RefCompetancePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RefCompetancePeer::getOMClass();

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RefCompetancePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj3 (RefCompetance)
				$obj3->addTblCeinture($obj1);

			} // if joined row is not null

				// Add objects for joined RefTitreEntraineur rows

				$key4 = RefTitreEntraineurPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = RefTitreEntraineurPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = RefTitreEntraineurPeer::getOMClass();

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RefTitreEntraineurPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj4 (RefTitreEntraineur)
				$obj4->addTblCeinture($obj1);

			} // if joined row is not null

				// Add objects for joined RefCeintureCouleur rows

				$key5 = RefCeintureCouleurPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = RefCeintureCouleurPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = RefCeintureCouleurPeer::getOMClass();

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					RefCeintureCouleurPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj5 (RefCeintureCouleur)
				$obj5->addTblCeinture($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblCeinture objects pre-filled with all related objects except RefCompetance.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblCeinture objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptRefCompetance(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblCeinturePeer::addSelectColumns($criteria);
		$startcol2 = TblCeinturePeer::NUM_HYDRATE_COLUMNS;

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + TblAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefGradeCeinturePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RefGradeCeinturePeer::NUM_HYDRATE_COLUMNS;

		RefTitreEntraineurPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RefTitreEntraineurPeer::NUM_HYDRATE_COLUMNS;

		RefCeintureCouleurPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + RefCeintureCouleurPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TblCeinturePeer::ADHERENT_ID, TblAdherentPeer::ID_ADHERENT, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::GRADE_ID, RefGradeCeinturePeer::GRADE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::TITRE_ENTRAINEUR_ID, RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::CEINTURE_COULEUR_ID, RefCeintureCouleurPeer::CEINTURE_COULEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblCeinturePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblCeinturePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TblCeinturePeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblCeinturePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined TblAdherent rows

				$key2 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = TblAdherentPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = TblAdherentPeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					TblAdherentPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj2 (TblAdherent)
				$obj2->addTblCeinture($obj1);

			} // if joined row is not null

				// Add objects for joined RefGradeCeinture rows

				$key3 = RefGradeCeinturePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RefGradeCeinturePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RefGradeCeinturePeer::getOMClass();

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RefGradeCeinturePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj3 (RefGradeCeinture)
				$obj3->addTblCeinture($obj1);

			} // if joined row is not null

				// Add objects for joined RefTitreEntraineur rows

				$key4 = RefTitreEntraineurPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = RefTitreEntraineurPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = RefTitreEntraineurPeer::getOMClass();

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RefTitreEntraineurPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj4 (RefTitreEntraineur)
				$obj4->addTblCeinture($obj1);

			} // if joined row is not null

				// Add objects for joined RefCeintureCouleur rows

				$key5 = RefCeintureCouleurPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = RefCeintureCouleurPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = RefCeintureCouleurPeer::getOMClass();

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					RefCeintureCouleurPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj5 (RefCeintureCouleur)
				$obj5->addTblCeinture($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblCeinture objects pre-filled with all related objects except RefTitreEntraineur.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblCeinture objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptRefTitreEntraineur(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblCeinturePeer::addSelectColumns($criteria);
		$startcol2 = TblCeinturePeer::NUM_HYDRATE_COLUMNS;

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + TblAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefGradeCeinturePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RefGradeCeinturePeer::NUM_HYDRATE_COLUMNS;

		RefCompetancePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RefCompetancePeer::NUM_HYDRATE_COLUMNS;

		RefCeintureCouleurPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + RefCeintureCouleurPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TblCeinturePeer::ADHERENT_ID, TblAdherentPeer::ID_ADHERENT, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::GRADE_ID, RefGradeCeinturePeer::GRADE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::COMPETANCE_ID, RefCompetancePeer::COMPETANCE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::CEINTURE_COULEUR_ID, RefCeintureCouleurPeer::CEINTURE_COULEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblCeinturePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblCeinturePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TblCeinturePeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblCeinturePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined TblAdherent rows

				$key2 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = TblAdherentPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = TblAdherentPeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					TblAdherentPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj2 (TblAdherent)
				$obj2->addTblCeinture($obj1);

			} // if joined row is not null

				// Add objects for joined RefGradeCeinture rows

				$key3 = RefGradeCeinturePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RefGradeCeinturePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RefGradeCeinturePeer::getOMClass();

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RefGradeCeinturePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj3 (RefGradeCeinture)
				$obj3->addTblCeinture($obj1);

			} // if joined row is not null

				// Add objects for joined RefCompetance rows

				$key4 = RefCompetancePeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = RefCompetancePeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = RefCompetancePeer::getOMClass();

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RefCompetancePeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj4 (RefCompetance)
				$obj4->addTblCeinture($obj1);

			} // if joined row is not null

				// Add objects for joined RefCeintureCouleur rows

				$key5 = RefCeintureCouleurPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = RefCeintureCouleurPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = RefCeintureCouleurPeer::getOMClass();

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					RefCeintureCouleurPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj5 (RefCeintureCouleur)
				$obj5->addTblCeinture($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblCeinture objects pre-filled with all related objects except RefCeintureCouleur.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblCeinture objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptRefCeintureCouleur(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblCeinturePeer::addSelectColumns($criteria);
		$startcol2 = TblCeinturePeer::NUM_HYDRATE_COLUMNS;

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + TblAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefGradeCeinturePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RefGradeCeinturePeer::NUM_HYDRATE_COLUMNS;

		RefCompetancePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RefCompetancePeer::NUM_HYDRATE_COLUMNS;

		RefTitreEntraineurPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + RefTitreEntraineurPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TblCeinturePeer::ADHERENT_ID, TblAdherentPeer::ID_ADHERENT, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::GRADE_ID, RefGradeCeinturePeer::GRADE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::COMPETANCE_ID, RefCompetancePeer::COMPETANCE_ID, $join_behavior);

		$criteria->addJoin(TblCeinturePeer::TITRE_ENTRAINEUR_ID, RefTitreEntraineurPeer::TITRE_ENTRAINEUR_ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblCeinturePeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblCeinturePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblCeinturePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TblCeinturePeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblCeinturePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined TblAdherent rows

				$key2 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = TblAdherentPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = TblAdherentPeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					TblAdherentPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj2 (TblAdherent)
				$obj2->addTblCeinture($obj1);

			} // if joined row is not null

				// Add objects for joined RefGradeCeinture rows

				$key3 = RefGradeCeinturePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RefGradeCeinturePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RefGradeCeinturePeer::getOMClass();

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RefGradeCeinturePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj3 (RefGradeCeinture)
				$obj3->addTblCeinture($obj1);

			} // if joined row is not null

				// Add objects for joined RefCompetance rows

				$key4 = RefCompetancePeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = RefCompetancePeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = RefCompetancePeer::getOMClass();

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RefCompetancePeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj4 (RefCompetance)
				$obj4->addTblCeinture($obj1);

			} // if joined row is not null

				// Add objects for joined RefTitreEntraineur rows

				$key5 = RefTitreEntraineurPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = RefTitreEntraineurPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = RefTitreEntraineurPeer::getOMClass();

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					RefTitreEntraineurPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (TblCeinture) to the collection in $obj5 (RefTitreEntraineur)
				$obj5->addTblCeinture($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseTblCeinturePeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseTblCeinturePeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new TblCeintureTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 *
	 * @return     string ClassName
	 */
	public static function getOMClass()
	{
		return TblCeinturePeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a TblCeinture or Criteria object.
	 *
	 * @param      mixed $values Criteria or TblCeinture object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from TblCeinture object
		}

		if ($criteria->containsKey(TblCeinturePeer::CEINTURE_ID) && $criteria->keyContainsValue(TblCeinturePeer::CEINTURE_ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.TblCeinturePeer::CEINTURE_ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Performs an UPDATE on the database, given a TblCeinture or Criteria object.
	 *
	 * @param      mixed $values Criteria or TblCeinture object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(TblCeinturePeer::CEINTURE_ID);
			$value = $criteria->remove(TblCeinturePeer::CEINTURE_ID);
			if ($value) {
				$selectCriteria->add(TblCeinturePeer::CEINTURE_ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(TblCeinturePeer::TABLE_NAME);
			}

		} else { // $values is TblCeinture object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the tbl_ceinture table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(TblCeinturePeer::TABLE_NAME, $con, TblCeinturePeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			TblCeinturePeer::clearInstancePool();
			TblCeinturePeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a TblCeinture or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or TblCeinture object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			TblCeinturePeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof TblCeinture) { // it's a model object
			// invalidate the cache for this single object
			TblCeinturePeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TblCeinturePeer::CEINTURE_ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				TblCeinturePeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			TblCeinturePeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given TblCeinture object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      TblCeinture $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TblCeinturePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TblCeinturePeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(TblCeinturePeer::DATABASE_NAME, TblCeinturePeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     TblCeinture
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = TblCeinturePeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(TblCeinturePeer::DATABASE_NAME);
		$criteria->add(TblCeinturePeer::CEINTURE_ID, $pk);

		$v = TblCeinturePeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(TblCeinturePeer::DATABASE_NAME);
			$criteria->add(TblCeinturePeer::CEINTURE_ID, $pks, Criteria::IN);
			$objs = TblCeinturePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

	// symfony behavior
	
	/**
	 * Returns an array of arrays that contain columns in each unique index.
	 *
	 * @return array
	 */
	static public function getUniqueColumnNames()
	{
	  return array();
	}

	// symfony_behaviors behavior
	
	/**
	 * Returns the name of the hook to call from inside the supplied method.
	 *
	 * @param string $method The calling method
	 *
	 * @return string A hook name for {@link sfMixer}
	 *
	 * @throws LogicException If the method name is not recognized
	 */
	static private function getMixerPreSelectHook($method)
	{
	  if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
	  {
	    return sprintf('BaseTblCeinturePeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
	  }
	
	  throw new LogicException(sprintf('Unrecognized function "%s"', $method));
	}

} // BaseTblCeinturePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTblCeinturePeer::buildTableMap();

