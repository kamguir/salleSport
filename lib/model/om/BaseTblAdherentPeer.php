<?php


/**
 * Base static class for performing query and update operations on the 'tbl_adherent' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTblAdherentPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'propel';

	/** the table name for this class */
	const TABLE_NAME = 'tbl_adherent';

	/** the related Propel class for this table */
	const OM_CLASS = 'TblAdherent';

	/** the related TableMap class for this table */
	const TM_CLASS = 'TblAdherentTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 18;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 18;

	/** the column name for the ID_ADHERENT field */
	const ID_ADHERENT = 'tbl_adherent.ID_ADHERENT';

	/** the column name for the ENTRAINEUR_ID field */
	const ENTRAINEUR_ID = 'tbl_adherent.ENTRAINEUR_ID';

	/** the column name for the CIN_ADHERENT field */
	const CIN_ADHERENT = 'tbl_adherent.CIN_ADHERENT';

	/** the column name for the NOM_ADHERENT field */
	const NOM_ADHERENT = 'tbl_adherent.NOM_ADHERENT';

	/** the column name for the PRENOM_ADHERENT field */
	const PRENOM_ADHERENT = 'tbl_adherent.PRENOM_ADHERENT';

	/** the column name for the ID_CIVILITE field */
	const ID_CIVILITE = 'tbl_adherent.ID_CIVILITE';

	/** the column name for the ID_SITUATION field */
	const ID_SITUATION = 'tbl_adherent.ID_SITUATION';

	/** the column name for the ID_TYPE_ADHERENT field */
	const ID_TYPE_ADHERENT = 'tbl_adherent.ID_TYPE_ADHERENT';

	/** the column name for the NIVEAU_ADHERENT_ID field */
	const NIVEAU_ADHERENT_ID = 'tbl_adherent.NIVEAU_ADHERENT_ID';

	/** the column name for the ID_TYPE_SPORT field */
	const ID_TYPE_SPORT = 'tbl_adherent.ID_TYPE_SPORT';

	/** the column name for the AGE_ADHERENT field */
	const AGE_ADHERENT = 'tbl_adherent.AGE_ADHERENT';

	/** the column name for the NUM_TEL field */
	const NUM_TEL = 'tbl_adherent.NUM_TEL';

	/** the column name for the ADRESSE_ADHERENT field */
	const ADRESSE_ADHERENT = 'tbl_adherent.ADRESSE_ADHERENT';

	/** the column name for the IMAGE_ADHERENT field */
	const IMAGE_ADHERENT = 'tbl_adherent.IMAGE_ADHERENT';

	/** the column name for the DATE_ADHESION field */
	const DATE_ADHESION = 'tbl_adherent.DATE_ADHESION';

	/** the column name for the SEANCE_HORAIRE_ID field */
	const SEANCE_HORAIRE_ID = 'tbl_adherent.SEANCE_HORAIRE_ID';

	/** the column name for the UPDATED_AT field */
	const UPDATED_AT = 'tbl_adherent.UPDATED_AT';

	/** the column name for the DELETED_AT field */
	const DELETED_AT = 'tbl_adherent.DELETED_AT';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of TblAdherent objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array TblAdherent[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('IdAdherent', 'EntraineurId', 'CinAdherent', 'NomAdherent', 'PrenomAdherent', 'IdCivilite', 'IdSituation', 'IdTypeAdherent', 'NiveauAdherentId', 'IdTypeSport', 'AgeAdherent', 'NumTel', 'AdresseAdherent', 'ImageAdherent', 'DateAdhesion', 'SeanceHoraireId', 'UpdatedAt', 'DeletedAt', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idAdherent', 'entraineurId', 'cinAdherent', 'nomAdherent', 'prenomAdherent', 'idCivilite', 'idSituation', 'idTypeAdherent', 'niveauAdherentId', 'idTypeSport', 'ageAdherent', 'numTel', 'adresseAdherent', 'imageAdherent', 'dateAdhesion', 'seanceHoraireId', 'updatedAt', 'deletedAt', ),
		BasePeer::TYPE_COLNAME => array (self::ID_ADHERENT, self::ENTRAINEUR_ID, self::CIN_ADHERENT, self::NOM_ADHERENT, self::PRENOM_ADHERENT, self::ID_CIVILITE, self::ID_SITUATION, self::ID_TYPE_ADHERENT, self::NIVEAU_ADHERENT_ID, self::ID_TYPE_SPORT, self::AGE_ADHERENT, self::NUM_TEL, self::ADRESSE_ADHERENT, self::IMAGE_ADHERENT, self::DATE_ADHESION, self::SEANCE_HORAIRE_ID, self::UPDATED_AT, self::DELETED_AT, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_ADHERENT', 'ENTRAINEUR_ID', 'CIN_ADHERENT', 'NOM_ADHERENT', 'PRENOM_ADHERENT', 'ID_CIVILITE', 'ID_SITUATION', 'ID_TYPE_ADHERENT', 'NIVEAU_ADHERENT_ID', 'ID_TYPE_SPORT', 'AGE_ADHERENT', 'NUM_TEL', 'ADRESSE_ADHERENT', 'IMAGE_ADHERENT', 'DATE_ADHESION', 'SEANCE_HORAIRE_ID', 'UPDATED_AT', 'DELETED_AT', ),
		BasePeer::TYPE_FIELDNAME => array ('id_adherent', 'entraineur_id', 'cin_adherent', 'nom_adherent', 'prenom_adherent', 'id_civilite', 'id_situation', 'id_type_adherent', 'niveau_adherent_id', 'id_type_sport', 'age_adherent', 'num_tel', 'adresse_adherent', 'image_adherent', 'date_adhesion', 'seance_horaire_id', 'updated_at', 'deleted_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('IdAdherent' => 0, 'EntraineurId' => 1, 'CinAdherent' => 2, 'NomAdherent' => 3, 'PrenomAdherent' => 4, 'IdCivilite' => 5, 'IdSituation' => 6, 'IdTypeAdherent' => 7, 'NiveauAdherentId' => 8, 'IdTypeSport' => 9, 'AgeAdherent' => 10, 'NumTel' => 11, 'AdresseAdherent' => 12, 'ImageAdherent' => 13, 'DateAdhesion' => 14, 'SeanceHoraireId' => 15, 'UpdatedAt' => 16, 'DeletedAt' => 17, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('idAdherent' => 0, 'entraineurId' => 1, 'cinAdherent' => 2, 'nomAdherent' => 3, 'prenomAdherent' => 4, 'idCivilite' => 5, 'idSituation' => 6, 'idTypeAdherent' => 7, 'niveauAdherentId' => 8, 'idTypeSport' => 9, 'ageAdherent' => 10, 'numTel' => 11, 'adresseAdherent' => 12, 'imageAdherent' => 13, 'dateAdhesion' => 14, 'seanceHoraireId' => 15, 'updatedAt' => 16, 'deletedAt' => 17, ),
		BasePeer::TYPE_COLNAME => array (self::ID_ADHERENT => 0, self::ENTRAINEUR_ID => 1, self::CIN_ADHERENT => 2, self::NOM_ADHERENT => 3, self::PRENOM_ADHERENT => 4, self::ID_CIVILITE => 5, self::ID_SITUATION => 6, self::ID_TYPE_ADHERENT => 7, self::NIVEAU_ADHERENT_ID => 8, self::ID_TYPE_SPORT => 9, self::AGE_ADHERENT => 10, self::NUM_TEL => 11, self::ADRESSE_ADHERENT => 12, self::IMAGE_ADHERENT => 13, self::DATE_ADHESION => 14, self::SEANCE_HORAIRE_ID => 15, self::UPDATED_AT => 16, self::DELETED_AT => 17, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID_ADHERENT' => 0, 'ENTRAINEUR_ID' => 1, 'CIN_ADHERENT' => 2, 'NOM_ADHERENT' => 3, 'PRENOM_ADHERENT' => 4, 'ID_CIVILITE' => 5, 'ID_SITUATION' => 6, 'ID_TYPE_ADHERENT' => 7, 'NIVEAU_ADHERENT_ID' => 8, 'ID_TYPE_SPORT' => 9, 'AGE_ADHERENT' => 10, 'NUM_TEL' => 11, 'ADRESSE_ADHERENT' => 12, 'IMAGE_ADHERENT' => 13, 'DATE_ADHESION' => 14, 'SEANCE_HORAIRE_ID' => 15, 'UPDATED_AT' => 16, 'DELETED_AT' => 17, ),
		BasePeer::TYPE_FIELDNAME => array ('id_adherent' => 0, 'entraineur_id' => 1, 'cin_adherent' => 2, 'nom_adherent' => 3, 'prenom_adherent' => 4, 'id_civilite' => 5, 'id_situation' => 6, 'id_type_adherent' => 7, 'niveau_adherent_id' => 8, 'id_type_sport' => 9, 'age_adherent' => 10, 'num_tel' => 11, 'adresse_adherent' => 12, 'image_adherent' => 13, 'date_adhesion' => 14, 'seance_horaire_id' => 15, 'updated_at' => 16, 'deleted_at' => 17, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
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
	 * @param      string $column The column name for current table. (i.e. TblAdherentPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(TblAdherentPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(TblAdherentPeer::ID_ADHERENT);
			$criteria->addSelectColumn(TblAdherentPeer::ENTRAINEUR_ID);
			$criteria->addSelectColumn(TblAdherentPeer::CIN_ADHERENT);
			$criteria->addSelectColumn(TblAdherentPeer::NOM_ADHERENT);
			$criteria->addSelectColumn(TblAdherentPeer::PRENOM_ADHERENT);
			$criteria->addSelectColumn(TblAdherentPeer::ID_CIVILITE);
			$criteria->addSelectColumn(TblAdherentPeer::ID_SITUATION);
			$criteria->addSelectColumn(TblAdherentPeer::ID_TYPE_ADHERENT);
			$criteria->addSelectColumn(TblAdherentPeer::NIVEAU_ADHERENT_ID);
			$criteria->addSelectColumn(TblAdherentPeer::ID_TYPE_SPORT);
			$criteria->addSelectColumn(TblAdherentPeer::AGE_ADHERENT);
			$criteria->addSelectColumn(TblAdherentPeer::NUM_TEL);
			$criteria->addSelectColumn(TblAdherentPeer::ADRESSE_ADHERENT);
			$criteria->addSelectColumn(TblAdherentPeer::IMAGE_ADHERENT);
			$criteria->addSelectColumn(TblAdherentPeer::DATE_ADHESION);
			$criteria->addSelectColumn(TblAdherentPeer::SEANCE_HORAIRE_ID);
			$criteria->addSelectColumn(TblAdherentPeer::UPDATED_AT);
			$criteria->addSelectColumn(TblAdherentPeer::DELETED_AT);
		} else {
			$criteria->addSelectColumn($alias . '.ID_ADHERENT');
			$criteria->addSelectColumn($alias . '.ENTRAINEUR_ID');
			$criteria->addSelectColumn($alias . '.CIN_ADHERENT');
			$criteria->addSelectColumn($alias . '.NOM_ADHERENT');
			$criteria->addSelectColumn($alias . '.PRENOM_ADHERENT');
			$criteria->addSelectColumn($alias . '.ID_CIVILITE');
			$criteria->addSelectColumn($alias . '.ID_SITUATION');
			$criteria->addSelectColumn($alias . '.ID_TYPE_ADHERENT');
			$criteria->addSelectColumn($alias . '.NIVEAU_ADHERENT_ID');
			$criteria->addSelectColumn($alias . '.ID_TYPE_SPORT');
			$criteria->addSelectColumn($alias . '.AGE_ADHERENT');
			$criteria->addSelectColumn($alias . '.NUM_TEL');
			$criteria->addSelectColumn($alias . '.ADRESSE_ADHERENT');
			$criteria->addSelectColumn($alias . '.IMAGE_ADHERENT');
			$criteria->addSelectColumn($alias . '.DATE_ADHESION');
			$criteria->addSelectColumn($alias . '.SEANCE_HORAIRE_ID');
			$criteria->addSelectColumn($alias . '.UPDATED_AT');
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
		$criteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblAdherentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * @return     TblAdherent
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = TblAdherentPeer::doSelect($critcopy, $con);
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
		return TblAdherentPeer::populateObjects(TblAdherentPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			TblAdherentPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);
		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * @param      TblAdherent $value A TblAdherent object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getIdAdherent();
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
	 * @param      mixed $value A TblAdherent object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof TblAdherent) {
				$key = (string) $value->getIdAdherent();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or TblAdherent object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     TblAdherent Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to tbl_adherent
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
		$cls = TblAdherentPeer::getOMClass();
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = TblAdherentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = TblAdherentPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				TblAdherentPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (TblAdherent object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = TblAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = TblAdherentPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + TblAdherentPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = TblAdherentPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			TblAdherentPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}


	/**
	 * Returns the number of rows matching criteria, joining the related RefCivilite table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinRefCivilite(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblAdherentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * Returns the number of rows matching criteria, joining the related RefSituation table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinRefSituation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblAdherentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * Returns the number of rows matching criteria, joining the related RefTypeAdherent table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinRefTypeAdherent(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblAdherentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * Returns the number of rows matching criteria, joining the related RefNiveauAdherent table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinRefNiveauAdherent(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblAdherentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * Returns the number of rows matching criteria, joining the related RefTypeSport table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinRefTypeSport(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblAdherentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * Returns the number of rows matching criteria, joining the related RefSeanceHoraire table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinRefSeanceHoraire(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblAdherentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * Selects a collection of TblAdherent objects pre-filled with their RefCivilite objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblAdherent objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinRefCivilite(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol = TblAdherentPeer::NUM_HYDRATE_COLUMNS;
		RefCivilitePeer::addSelectColumns($criteria);

		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblAdherentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TblAdherentPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblAdherentPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = RefCivilitePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = RefCivilitePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = RefCivilitePeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					RefCivilitePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (TblAdherent) to $obj2 (RefCivilite)
				$obj2->addTblAdherent($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblAdherent objects pre-filled with their RefSituation objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblAdherent objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinRefSituation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol = TblAdherentPeer::NUM_HYDRATE_COLUMNS;
		RefSituationPeer::addSelectColumns($criteria);

		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblAdherentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TblAdherentPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblAdherentPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = RefSituationPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = RefSituationPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = RefSituationPeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					RefSituationPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (TblAdherent) to $obj2 (RefSituation)
				$obj2->addTblAdherent($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblAdherent objects pre-filled with their RefTypeAdherent objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblAdherent objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinRefTypeAdherent(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol = TblAdherentPeer::NUM_HYDRATE_COLUMNS;
		RefTypeAdherentPeer::addSelectColumns($criteria);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblAdherentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TblAdherentPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblAdherentPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = RefTypeAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = RefTypeAdherentPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = RefTypeAdherentPeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					RefTypeAdherentPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (TblAdherent) to $obj2 (RefTypeAdherent)
				$obj2->addTblAdherent($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblAdherent objects pre-filled with their RefNiveauAdherent objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblAdherent objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinRefNiveauAdherent(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol = TblAdherentPeer::NUM_HYDRATE_COLUMNS;
		RefNiveauAdherentPeer::addSelectColumns($criteria);

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblAdherentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TblAdherentPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblAdherentPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = RefNiveauAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = RefNiveauAdherentPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = RefNiveauAdherentPeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					RefNiveauAdherentPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (TblAdherent) to $obj2 (RefNiveauAdherent)
				$obj2->addTblAdherent($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblAdherent objects pre-filled with their RefTypeSport objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblAdherent objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinRefTypeSport(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol = TblAdherentPeer::NUM_HYDRATE_COLUMNS;
		RefTypeSportPeer::addSelectColumns($criteria);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblAdherentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TblAdherentPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblAdherentPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = RefTypeSportPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = RefTypeSportPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = RefTypeSportPeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					RefTypeSportPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (TblAdherent) to $obj2 (RefTypeSport)
				$obj2->addTblAdherent($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblAdherent objects pre-filled with their RefSeanceHoraire objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblAdherent objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinRefSeanceHoraire(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol = TblAdherentPeer::NUM_HYDRATE_COLUMNS;
		RefSeanceHorairePeer::addSelectColumns($criteria);

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblAdherentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = TblAdherentPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblAdherentPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = RefSeanceHorairePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = RefSeanceHorairePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = RefSeanceHorairePeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					RefSeanceHorairePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (TblAdherent) to $obj2 (RefSeanceHoraire)
				$obj2->addTblAdherent($obj1);

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
		$criteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblAdherentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * Selects a collection of TblAdherent objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblAdherent objects.
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

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol2 = TblAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefCivilitePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + RefCivilitePeer::NUM_HYDRATE_COLUMNS;

		RefSituationPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RefSituationPeer::NUM_HYDRATE_COLUMNS;

		RefTypeAdherentPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RefTypeAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefNiveauAdherentPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + RefNiveauAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefTypeSportPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + RefTypeSportPeer::NUM_HYDRATE_COLUMNS;

		RefSeanceHorairePeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + RefSeanceHorairePeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblAdherentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TblAdherentPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblAdherentPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined RefCivilite rows

			$key2 = RefCivilitePeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = RefCivilitePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = RefCivilitePeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					RefCivilitePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj2 (RefCivilite)
				$obj2->addTblAdherent($obj1);
			} // if joined row not null

			// Add objects for joined RefSituation rows

			$key3 = RefSituationPeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = RefSituationPeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = RefSituationPeer::getOMClass();

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RefSituationPeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj3 (RefSituation)
				$obj3->addTblAdherent($obj1);
			} // if joined row not null

			// Add objects for joined RefTypeAdherent rows

			$key4 = RefTypeAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = RefTypeAdherentPeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$cls = RefTypeAdherentPeer::getOMClass();

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RefTypeAdherentPeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj4 (RefTypeAdherent)
				$obj4->addTblAdherent($obj1);
			} // if joined row not null

			// Add objects for joined RefNiveauAdherent rows

			$key5 = RefNiveauAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = RefNiveauAdherentPeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$cls = RefNiveauAdherentPeer::getOMClass();

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					RefNiveauAdherentPeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj5 (RefNiveauAdherent)
				$obj5->addTblAdherent($obj1);
			} // if joined row not null

			// Add objects for joined RefTypeSport rows

			$key6 = RefTypeSportPeer::getPrimaryKeyHashFromRow($row, $startcol6);
			if ($key6 !== null) {
				$obj6 = RefTypeSportPeer::getInstanceFromPool($key6);
				if (!$obj6) {

					$cls = RefTypeSportPeer::getOMClass();

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					RefTypeSportPeer::addInstanceToPool($obj6, $key6);
				} // if obj6 loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj6 (RefTypeSport)
				$obj6->addTblAdherent($obj1);
			} // if joined row not null

			// Add objects for joined RefSeanceHoraire rows

			$key7 = RefSeanceHorairePeer::getPrimaryKeyHashFromRow($row, $startcol7);
			if ($key7 !== null) {
				$obj7 = RefSeanceHorairePeer::getInstanceFromPool($key7);
				if (!$obj7) {

					$cls = RefSeanceHorairePeer::getOMClass();

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					RefSeanceHorairePeer::addInstanceToPool($obj7, $key7);
				} // if obj7 loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj7 (RefSeanceHoraire)
				$obj7->addTblAdherent($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related TblAdherentRelatedByEntraineurId table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptTblAdherentRelatedByEntraineurId(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblAdherentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * Returns the number of rows matching criteria, joining the related RefCivilite table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptRefCivilite(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblAdherentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * Returns the number of rows matching criteria, joining the related RefSituation table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptRefSituation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblAdherentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * Returns the number of rows matching criteria, joining the related RefTypeAdherent table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptRefTypeAdherent(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblAdherentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * Returns the number of rows matching criteria, joining the related RefNiveauAdherent table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptRefNiveauAdherent(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblAdherentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * Returns the number of rows matching criteria, joining the related RefTypeSport table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptRefTypeSport(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblAdherentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * Returns the number of rows matching criteria, joining the related RefSeanceHoraire table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptRefSeanceHoraire(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			TblAdherentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
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
	 * Selects a collection of TblAdherent objects pre-filled with all related objects except TblAdherentRelatedByEntraineurId.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblAdherent objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptTblAdherentRelatedByEntraineurId(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol2 = TblAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefCivilitePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + RefCivilitePeer::NUM_HYDRATE_COLUMNS;

		RefSituationPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RefSituationPeer::NUM_HYDRATE_COLUMNS;

		RefTypeAdherentPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RefTypeAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefNiveauAdherentPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + RefNiveauAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefTypeSportPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + RefTypeSportPeer::NUM_HYDRATE_COLUMNS;

		RefSeanceHorairePeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + RefSeanceHorairePeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblAdherentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TblAdherentPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblAdherentPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined RefCivilite rows

				$key2 = RefCivilitePeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = RefCivilitePeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = RefCivilitePeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					RefCivilitePeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj2 (RefCivilite)
				$obj2->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefSituation rows

				$key3 = RefSituationPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RefSituationPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RefSituationPeer::getOMClass();

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RefSituationPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj3 (RefSituation)
				$obj3->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefTypeAdherent rows

				$key4 = RefTypeAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = RefTypeAdherentPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = RefTypeAdherentPeer::getOMClass();

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RefTypeAdherentPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj4 (RefTypeAdherent)
				$obj4->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefNiveauAdherent rows

				$key5 = RefNiveauAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = RefNiveauAdherentPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = RefNiveauAdherentPeer::getOMClass();

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					RefNiveauAdherentPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj5 (RefNiveauAdherent)
				$obj5->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefTypeSport rows

				$key6 = RefTypeSportPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = RefTypeSportPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = RefTypeSportPeer::getOMClass();

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					RefTypeSportPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj6 (RefTypeSport)
				$obj6->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefSeanceHoraire rows

				$key7 = RefSeanceHorairePeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = RefSeanceHorairePeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = RefSeanceHorairePeer::getOMClass();

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					RefSeanceHorairePeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj7 (RefSeanceHoraire)
				$obj7->addTblAdherent($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblAdherent objects pre-filled with all related objects except RefCivilite.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblAdherent objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptRefCivilite(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol2 = TblAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefSituationPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + RefSituationPeer::NUM_HYDRATE_COLUMNS;

		RefTypeAdherentPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RefTypeAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefNiveauAdherentPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RefNiveauAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefTypeSportPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + RefTypeSportPeer::NUM_HYDRATE_COLUMNS;

		RefSeanceHorairePeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + RefSeanceHorairePeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblAdherentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TblAdherentPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblAdherentPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined RefSituation rows

				$key2 = RefSituationPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = RefSituationPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = RefSituationPeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					RefSituationPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj2 (RefSituation)
				$obj2->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefTypeAdherent rows

				$key3 = RefTypeAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RefTypeAdherentPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RefTypeAdherentPeer::getOMClass();

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RefTypeAdherentPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj3 (RefTypeAdherent)
				$obj3->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefNiveauAdherent rows

				$key4 = RefNiveauAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = RefNiveauAdherentPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = RefNiveauAdherentPeer::getOMClass();

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RefNiveauAdherentPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj4 (RefNiveauAdherent)
				$obj4->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefTypeSport rows

				$key5 = RefTypeSportPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = RefTypeSportPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = RefTypeSportPeer::getOMClass();

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					RefTypeSportPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj5 (RefTypeSport)
				$obj5->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefSeanceHoraire rows

				$key6 = RefSeanceHorairePeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = RefSeanceHorairePeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = RefSeanceHorairePeer::getOMClass();

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					RefSeanceHorairePeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj6 (RefSeanceHoraire)
				$obj6->addTblAdherent($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblAdherent objects pre-filled with all related objects except RefSituation.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblAdherent objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptRefSituation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol2 = TblAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefCivilitePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + RefCivilitePeer::NUM_HYDRATE_COLUMNS;

		RefTypeAdherentPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RefTypeAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefNiveauAdherentPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RefNiveauAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefTypeSportPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + RefTypeSportPeer::NUM_HYDRATE_COLUMNS;

		RefSeanceHorairePeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + RefSeanceHorairePeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblAdherentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TblAdherentPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblAdherentPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined RefCivilite rows

				$key2 = RefCivilitePeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = RefCivilitePeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = RefCivilitePeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					RefCivilitePeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj2 (RefCivilite)
				$obj2->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefTypeAdherent rows

				$key3 = RefTypeAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RefTypeAdherentPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RefTypeAdherentPeer::getOMClass();

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RefTypeAdherentPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj3 (RefTypeAdherent)
				$obj3->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefNiveauAdherent rows

				$key4 = RefNiveauAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = RefNiveauAdherentPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = RefNiveauAdherentPeer::getOMClass();

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RefNiveauAdherentPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj4 (RefNiveauAdherent)
				$obj4->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefTypeSport rows

				$key5 = RefTypeSportPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = RefTypeSportPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = RefTypeSportPeer::getOMClass();

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					RefTypeSportPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj5 (RefTypeSport)
				$obj5->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefSeanceHoraire rows

				$key6 = RefSeanceHorairePeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = RefSeanceHorairePeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = RefSeanceHorairePeer::getOMClass();

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					RefSeanceHorairePeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj6 (RefSeanceHoraire)
				$obj6->addTblAdherent($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblAdherent objects pre-filled with all related objects except RefTypeAdherent.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblAdherent objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptRefTypeAdherent(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol2 = TblAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefCivilitePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + RefCivilitePeer::NUM_HYDRATE_COLUMNS;

		RefSituationPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RefSituationPeer::NUM_HYDRATE_COLUMNS;

		RefNiveauAdherentPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RefNiveauAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefTypeSportPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + RefTypeSportPeer::NUM_HYDRATE_COLUMNS;

		RefSeanceHorairePeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + RefSeanceHorairePeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblAdherentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TblAdherentPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblAdherentPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined RefCivilite rows

				$key2 = RefCivilitePeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = RefCivilitePeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = RefCivilitePeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					RefCivilitePeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj2 (RefCivilite)
				$obj2->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefSituation rows

				$key3 = RefSituationPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RefSituationPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RefSituationPeer::getOMClass();

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RefSituationPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj3 (RefSituation)
				$obj3->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefNiveauAdherent rows

				$key4 = RefNiveauAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = RefNiveauAdherentPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = RefNiveauAdherentPeer::getOMClass();

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RefNiveauAdherentPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj4 (RefNiveauAdherent)
				$obj4->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefTypeSport rows

				$key5 = RefTypeSportPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = RefTypeSportPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = RefTypeSportPeer::getOMClass();

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					RefTypeSportPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj5 (RefTypeSport)
				$obj5->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefSeanceHoraire rows

				$key6 = RefSeanceHorairePeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = RefSeanceHorairePeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = RefSeanceHorairePeer::getOMClass();

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					RefSeanceHorairePeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj6 (RefSeanceHoraire)
				$obj6->addTblAdherent($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblAdherent objects pre-filled with all related objects except RefNiveauAdherent.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblAdherent objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptRefNiveauAdherent(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol2 = TblAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefCivilitePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + RefCivilitePeer::NUM_HYDRATE_COLUMNS;

		RefSituationPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RefSituationPeer::NUM_HYDRATE_COLUMNS;

		RefTypeAdherentPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RefTypeAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefTypeSportPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + RefTypeSportPeer::NUM_HYDRATE_COLUMNS;

		RefSeanceHorairePeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + RefSeanceHorairePeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblAdherentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TblAdherentPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblAdherentPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined RefCivilite rows

				$key2 = RefCivilitePeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = RefCivilitePeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = RefCivilitePeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					RefCivilitePeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj2 (RefCivilite)
				$obj2->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefSituation rows

				$key3 = RefSituationPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RefSituationPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RefSituationPeer::getOMClass();

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RefSituationPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj3 (RefSituation)
				$obj3->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefTypeAdherent rows

				$key4 = RefTypeAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = RefTypeAdherentPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = RefTypeAdherentPeer::getOMClass();

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RefTypeAdherentPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj4 (RefTypeAdherent)
				$obj4->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefTypeSport rows

				$key5 = RefTypeSportPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = RefTypeSportPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = RefTypeSportPeer::getOMClass();

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					RefTypeSportPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj5 (RefTypeSport)
				$obj5->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefSeanceHoraire rows

				$key6 = RefSeanceHorairePeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = RefSeanceHorairePeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = RefSeanceHorairePeer::getOMClass();

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					RefSeanceHorairePeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj6 (RefSeanceHoraire)
				$obj6->addTblAdherent($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblAdherent objects pre-filled with all related objects except RefTypeSport.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblAdherent objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptRefTypeSport(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol2 = TblAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefCivilitePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + RefCivilitePeer::NUM_HYDRATE_COLUMNS;

		RefSituationPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RefSituationPeer::NUM_HYDRATE_COLUMNS;

		RefTypeAdherentPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RefTypeAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefNiveauAdherentPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + RefNiveauAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefSeanceHorairePeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + RefSeanceHorairePeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::SEANCE_HORAIRE_ID, RefSeanceHorairePeer::SEANCE_HORAIRE_ID, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblAdherentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TblAdherentPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblAdherentPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined RefCivilite rows

				$key2 = RefCivilitePeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = RefCivilitePeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = RefCivilitePeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					RefCivilitePeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj2 (RefCivilite)
				$obj2->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefSituation rows

				$key3 = RefSituationPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RefSituationPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RefSituationPeer::getOMClass();

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RefSituationPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj3 (RefSituation)
				$obj3->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefTypeAdherent rows

				$key4 = RefTypeAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = RefTypeAdherentPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = RefTypeAdherentPeer::getOMClass();

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RefTypeAdherentPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj4 (RefTypeAdherent)
				$obj4->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefNiveauAdherent rows

				$key5 = RefNiveauAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = RefNiveauAdherentPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = RefNiveauAdherentPeer::getOMClass();

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					RefNiveauAdherentPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj5 (RefNiveauAdherent)
				$obj5->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefSeanceHoraire rows

				$key6 = RefSeanceHorairePeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = RefSeanceHorairePeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = RefSeanceHorairePeer::getOMClass();

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					RefSeanceHorairePeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj6 (RefSeanceHoraire)
				$obj6->addTblAdherent($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of TblAdherent objects pre-filled with all related objects except RefSeanceHoraire.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of TblAdherent objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptRefSeanceHoraire(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		TblAdherentPeer::addSelectColumns($criteria);
		$startcol2 = TblAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefCivilitePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + RefCivilitePeer::NUM_HYDRATE_COLUMNS;

		RefSituationPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + RefSituationPeer::NUM_HYDRATE_COLUMNS;

		RefTypeAdherentPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + RefTypeAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefNiveauAdherentPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + RefNiveauAdherentPeer::NUM_HYDRATE_COLUMNS;

		RefTypeSportPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + RefTypeSportPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(TblAdherentPeer::ID_CIVILITE, RefCivilitePeer::ID_CIVILITE, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_SITUATION, RefSituationPeer::ID_SITUATION, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_ADHERENT, RefTypeAdherentPeer::ID_TYPE_ADHERENT, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::NIVEAU_ADHERENT_ID, RefNiveauAdherentPeer::NIVEAU_ADHERENT_ID, $join_behavior);

		$criteria->addJoin(TblAdherentPeer::ID_TYPE_SPORT, RefTypeSportPeer::ID_TYPE_SPORT, $join_behavior);

		// soft_delete behavior
		if (TblAdherentQuery::isSoftDeleteEnabled()) {
			$criteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			TblAdherentPeer::enableSoftDelete();
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseTblAdherentPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = TblAdherentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = TblAdherentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = TblAdherentPeer::getOMClass();

				$obj1 = new $cls();
				$obj1->hydrate($row);
				TblAdherentPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined RefCivilite rows

				$key2 = RefCivilitePeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = RefCivilitePeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = RefCivilitePeer::getOMClass();

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					RefCivilitePeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj2 (RefCivilite)
				$obj2->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefSituation rows

				$key3 = RefSituationPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = RefSituationPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = RefSituationPeer::getOMClass();

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					RefSituationPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj3 (RefSituation)
				$obj3->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefTypeAdherent rows

				$key4 = RefTypeAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = RefTypeAdherentPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = RefTypeAdherentPeer::getOMClass();

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					RefTypeAdherentPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj4 (RefTypeAdherent)
				$obj4->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefNiveauAdherent rows

				$key5 = RefNiveauAdherentPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = RefNiveauAdherentPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = RefNiveauAdherentPeer::getOMClass();

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					RefNiveauAdherentPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj5 (RefNiveauAdherent)
				$obj5->addTblAdherent($obj1);

			} // if joined row is not null

				// Add objects for joined RefTypeSport rows

				$key6 = RefTypeSportPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = RefTypeSportPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = RefTypeSportPeer::getOMClass();

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					RefTypeSportPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (TblAdherent) to the collection in $obj6 (RefTypeSport)
				$obj6->addTblAdherent($obj1);

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
	  $dbMap = Propel::getDatabaseMap(BaseTblAdherentPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseTblAdherentPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new TblAdherentTableMap());
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
		return TblAdherentPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a TblAdherent or Criteria object.
	 *
	 * @param      mixed $values Criteria or TblAdherent object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from TblAdherent object
		}

		if ($criteria->containsKey(TblAdherentPeer::ID_ADHERENT) && $criteria->keyContainsValue(TblAdherentPeer::ID_ADHERENT) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.TblAdherentPeer::ID_ADHERENT.')');
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
	 * Performs an UPDATE on the database, given a TblAdherent or Criteria object.
	 *
	 * @param      mixed $values Criteria or TblAdherent object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(TblAdherentPeer::ID_ADHERENT);
			$value = $criteria->remove(TblAdherentPeer::ID_ADHERENT);
			if ($value) {
				$selectCriteria->add(TblAdherentPeer::ID_ADHERENT, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(TblAdherentPeer::TABLE_NAME);
			}

		} else { // $values is TblAdherent object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the tbl_adherent table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doForceDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(TblAdherentPeer::TABLE_NAME, $con, TblAdherentPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			TblAdherentPeer::clearInstancePool();
			TblAdherentPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a TblAdherent or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or TblAdherent object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doForceDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			TblAdherentPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof TblAdherent) { // it's a model object
			// invalidate the cache for this single object
			TblAdherentPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TblAdherentPeer::ID_ADHERENT, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				TblAdherentPeer::removeInstanceFromPool($singleval);
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
			TblAdherentPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given TblAdherent object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      TblAdherent $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TblAdherentPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TblAdherentPeer::TABLE_NAME);

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

		return BasePeer::doValidate(TblAdherentPeer::DATABASE_NAME, TblAdherentPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     TblAdherent
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = TblAdherentPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(TblAdherentPeer::DATABASE_NAME);
		$criteria->add(TblAdherentPeer::ID_ADHERENT, $pk);

		$v = TblAdherentPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(TblAdherentPeer::DATABASE_NAME);
			$criteria->add(TblAdherentPeer::ID_ADHERENT, $pks, Criteria::IN);
			$objs = TblAdherentPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

	// soft_delete behavior
	
	/**
	 * Enable the soft_delete behavior for this model
	 */
	public static function enableSoftDelete()
	{
		TblAdherentQuery::enableSoftDelete();
		// some soft_deleted objects may be in the instance pool
		TblAdherentPeer::clearInstancePool();
	}
	
	/**
	 * Disable the soft_delete behavior for this model
	 */
	public static function disableSoftDelete()
	{
		TblAdherentQuery::disableSoftDelete();
	}
	
	/**
	 * Check the soft_delete behavior for this model
	 * @return boolean true if the soft_delete behavior is enabled
	 */
	public static function isSoftDeleteEnabled()
	{
		return TblAdherentQuery::isSoftDeleteEnabled();
	}
	
	/**
	 * Soft delete records, given a TblAdherent or Criteria object OR a primary key value.
	 *
	 * @param			 mixed $values Criteria or TblAdherent object or primary key or array of primary keys
	 *							which is used to create the DELETE statement
	 * @param			 PropelPDO $con the connection to use
	 * @return		 int	The number of affected rows (if supported by underlying database driver).
	 * @throws		 PropelException Any exceptions caught during processing will be
	 *							rethrown wrapped into a PropelException.
	 */
	public static function doSoftDelete($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		if ($values instanceof Criteria) {
			// rename for clarity
			$selectCriteria = clone $values;
	 	} elseif ($values instanceof TblAdherent) {
			// create criteria based on pk values
			$selectCriteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key
			$selectCriteria = new Criteria(self::DATABASE_NAME);
	 		$selectCriteria->add(TblAdherentPeer::ID_ADHERENT, (array) $values, Criteria::IN);
		}
		// Set the correct dbName
		$selectCriteria->setDbName(TblAdherentPeer::DATABASE_NAME);
		$updateCriteria = new Criteria(self::DATABASE_NAME);
	    $updateCriteria->add(TblAdherentPeer::DELETED_AT, time());
	 	return BasePeer::doUpdate($selectCriteria, $updateCriteria, $con);
	}
	
	/**
	 * Delete or soft delete records, depending on TblAdherentPeer::$softDelete
	 *
	 * @param			 mixed $values Criteria or TblAdherent object or primary key or array of primary keys
	 *							which is used to create the DELETE statement
	 * @param			 PropelPDO $con the connection to use
	 * @return		 int	The number of affected rows (if supported by underlying database driver).
	 * @throws		 PropelException Any exceptions caught during processing will be
	 *							rethrown wrapped into a PropelException.
	 */
	public static function doDelete($values, PropelPDO $con = null)
	{
		if (TblAdherentPeer::isSoftDeleteEnabled()) {
			return TblAdherentPeer::doSoftDelete($values, $con);
		} else {
			return TblAdherentPeer::doForceDelete($values, $con);
		}
	}
	/**
	 * Method to soft delete all rows from the tbl_adherent table.
	 *
	 * @param			 PropelPDO $con the connection to use
	 * @return		 int The number of affected rows (if supported by underlying database driver).
	 * @throws		 PropelException Any exceptions caught during processing will be
	 *							rethrown wrapped into a PropelException.
	 */
	public static function doSoftDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$selectCriteria = new Criteria();
		$selectCriteria->add(TblAdherentPeer::DELETED_AT, null, Criteria::ISNULL);
		$selectCriteria->setDbName(TblAdherentPeer::DATABASE_NAME);
		$modifyCriteria = new Criteria();
		$modifyCriteria->add(TblAdherentPeer::DELETED_AT, time());
		return BasePeer::doUpdate($selectCriteria, $modifyCriteria, $con);
	}
	
	/**
	 * Delete or soft delete all records, depending on TblAdherentPeer::$softDelete
	 *
	 * @param			 PropelPDO $con the connection to use
	 * @return		 int	The number of affected rows (if supported by underlying database driver).
	 * @throws		 PropelException Any exceptions caught during processing will be
	 *							rethrown wrapped into a PropelException.
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if (TblAdherentPeer::isSoftDeleteEnabled()) {
			return TblAdherentPeer::doSoftDeleteAll($con);
		} else {
			return TblAdherentPeer::doForceDeleteAll($con);
		}
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
	    return sprintf('BaseTblAdherentPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
	  }
	
	  throw new LogicException(sprintf('Unrecognized function "%s"', $method));
	}

} // BaseTblAdherentPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTblAdherentPeer::buildTableMap();

