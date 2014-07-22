<?php


/**
 * Base class that represents a row from the 'tbl_user' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTblUser extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'TblUserPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        TblUserPeer
	 */
	protected static $peer;

	/**
	 * The flag var to prevent infinit loop in deep copy
	 * @var       boolean
	 */
	protected $startCopy = false;

	/**
	 * The value for the user_id field.
	 * @var        int
	 */
	protected $user_id;

	/**
	 * The value for the user_nom field.
	 * @var        string
	 */
	protected $user_nom;

	/**
	 * The value for the user_prenom field.
	 * @var        string
	 */
	protected $user_prenom;

	/**
	 * The value for the user_login field.
	 * @var        string
	 */
	protected $user_login;

	/**
	 * The value for the user_password field.
	 * @var        string
	 */
	protected $user_password;

	/**
	 * The value for the user_mail field.
	 * @var        string
	 */
	protected $user_mail;

	/**
	 * The value for the user_compte_active field.
	 * @var        boolean
	 */
	protected $user_compte_active;

	/**
	 * The value for the user_last_cnx field.
	 * @var        string
	 */
	protected $user_last_cnx;

	/**
	 * The value for the user_nb_cnx field.
	 * @var        int
	 */
	protected $user_nb_cnx;

	/**
	 * @var        array LnkUserProfil[] Collection to store aggregation of LnkUserProfil objects.
	 */
	protected $collLnkUserProfils;

	/**
	 * @var        array TblAdherent[] Collection to store aggregation of TblAdherent objects.
	 */
	protected $collTblAdherents;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $lnkUserProfilsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $tblAdherentsScheduledForDeletion = null;

	/**
	 * Get the [user_id] column value.
	 * 
	 * @return     int
	 */
	public function getUserId()
	{
		return $this->user_id;
	}

	/**
	 * Get the [user_nom] column value.
	 * 
	 * @return     string
	 */
	public function getUserNom()
	{
		return $this->user_nom;
	}

	/**
	 * Get the [user_prenom] column value.
	 * 
	 * @return     string
	 */
	public function getUserPrenom()
	{
		return $this->user_prenom;
	}

	/**
	 * Get the [user_login] column value.
	 * 
	 * @return     string
	 */
	public function getUserLogin()
	{
		return $this->user_login;
	}

	/**
	 * Get the [user_password] column value.
	 * 
	 * @return     string
	 */
	public function getUserPassword()
	{
		return $this->user_password;
	}

	/**
	 * Get the [user_mail] column value.
	 * 
	 * @return     string
	 */
	public function getUserMail()
	{
		return $this->user_mail;
	}

	/**
	 * Get the [user_compte_active] column value.
	 * 
	 * @return     boolean
	 */
	public function getUserCompteActive()
	{
		return $this->user_compte_active;
	}

	/**
	 * Get the [optionally formatted] temporal [user_last_cnx] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getUserLastCnx($format = 'Y-m-d H:i:s')
	{
		if ($this->user_last_cnx === null) {
			return null;
		}


		if ($this->user_last_cnx === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->user_last_cnx);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->user_last_cnx, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [user_nb_cnx] column value.
	 * 
	 * @return     int
	 */
	public function getUserNbCnx()
	{
		return $this->user_nb_cnx;
	}

	/**
	 * Set the value of [user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     TblUser The current object (for fluent API support)
	 */
	public function setUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = TblUserPeer::USER_ID;
		}

		return $this;
	} // setUserId()

	/**
	 * Set the value of [user_nom] column.
	 * 
	 * @param      string $v new value
	 * @return     TblUser The current object (for fluent API support)
	 */
	public function setUserNom($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user_nom !== $v) {
			$this->user_nom = $v;
			$this->modifiedColumns[] = TblUserPeer::USER_NOM;
		}

		return $this;
	} // setUserNom()

	/**
	 * Set the value of [user_prenom] column.
	 * 
	 * @param      string $v new value
	 * @return     TblUser The current object (for fluent API support)
	 */
	public function setUserPrenom($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user_prenom !== $v) {
			$this->user_prenom = $v;
			$this->modifiedColumns[] = TblUserPeer::USER_PRENOM;
		}

		return $this;
	} // setUserPrenom()

	/**
	 * Set the value of [user_login] column.
	 * 
	 * @param      string $v new value
	 * @return     TblUser The current object (for fluent API support)
	 */
	public function setUserLogin($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user_login !== $v) {
			$this->user_login = $v;
			$this->modifiedColumns[] = TblUserPeer::USER_LOGIN;
		}

		return $this;
	} // setUserLogin()

	/**
	 * Set the value of [user_password] column.
	 * 
	 * @param      string $v new value
	 * @return     TblUser The current object (for fluent API support)
	 */
	public function setUserPassword($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user_password !== $v) {
			$this->user_password = $v;
			$this->modifiedColumns[] = TblUserPeer::USER_PASSWORD;
		}

		return $this;
	} // setUserPassword()

	/**
	 * Set the value of [user_mail] column.
	 * 
	 * @param      string $v new value
	 * @return     TblUser The current object (for fluent API support)
	 */
	public function setUserMail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user_mail !== $v) {
			$this->user_mail = $v;
			$this->modifiedColumns[] = TblUserPeer::USER_MAIL;
		}

		return $this;
	} // setUserMail()

	/**
	 * Sets the value of the [user_compte_active] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     TblUser The current object (for fluent API support)
	 */
	public function setUserCompteActive($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->user_compte_active !== $v) {
			$this->user_compte_active = $v;
			$this->modifiedColumns[] = TblUserPeer::USER_COMPTE_ACTIVE;
		}

		return $this;
	} // setUserCompteActive()

	/**
	 * Sets the value of [user_last_cnx] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     TblUser The current object (for fluent API support)
	 */
	public function setUserLastCnx($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->user_last_cnx !== null || $dt !== null) {
			$currentDateAsString = ($this->user_last_cnx !== null && $tmpDt = new DateTime($this->user_last_cnx)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->user_last_cnx = $newDateAsString;
				$this->modifiedColumns[] = TblUserPeer::USER_LAST_CNX;
			}
		} // if either are not null

		return $this;
	} // setUserLastCnx()

	/**
	 * Set the value of [user_nb_cnx] column.
	 * 
	 * @param      int $v new value
	 * @return     TblUser The current object (for fluent API support)
	 */
	public function setUserNbCnx($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->user_nb_cnx !== $v) {
			$this->user_nb_cnx = $v;
			$this->modifiedColumns[] = TblUserPeer::USER_NB_CNX;
		}

		return $this;
	} // setUserNbCnx()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->user_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->user_nom = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->user_prenom = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->user_login = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->user_password = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->user_mail = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->user_compte_active = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
			$this->user_last_cnx = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->user_nb_cnx = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 9; // 9 = TblUserPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating TblUser object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TblUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = TblUserPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collLnkUserProfils = null;

			$this->collTblAdherents = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TblUserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = TblUserQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseTblUser:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseTblUser:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TblUserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseTblUser:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseTblUser:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				TblUserPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() || $this->isModified()) {
				// persist changes
				if ($this->isNew()) {
					$this->doInsert($con);
				} else {
					$this->doUpdate($con);
				}
				$affectedRows += 1;
				$this->resetModified();
			}

			if ($this->lnkUserProfilsScheduledForDeletion !== null) {
				if (!$this->lnkUserProfilsScheduledForDeletion->isEmpty()) {
					LnkUserProfilQuery::create()
						->filterByPrimaryKeys($this->lnkUserProfilsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->lnkUserProfilsScheduledForDeletion = null;
				}
			}

			if ($this->collLnkUserProfils !== null) {
				foreach ($this->collLnkUserProfils as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->tblAdherentsScheduledForDeletion !== null) {
				if (!$this->tblAdherentsScheduledForDeletion->isEmpty()) {
					TblAdherentQuery::create()
						->filterByPrimaryKeys($this->tblAdherentsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->tblAdherentsScheduledForDeletion = null;
				}
			}

			if ($this->collTblAdherents !== null) {
				foreach ($this->collTblAdherents as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Insert the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @throws     PropelException
	 * @see        doSave()
	 */
	protected function doInsert(PropelPDO $con)
	{
		$modifiedColumns = array();
		$index = 0;

		$this->modifiedColumns[] = TblUserPeer::USER_ID;
		if (null !== $this->user_id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . TblUserPeer::USER_ID . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(TblUserPeer::USER_ID)) {
			$modifiedColumns[':p' . $index++]  = '`USER_ID`';
		}
		if ($this->isColumnModified(TblUserPeer::USER_NOM)) {
			$modifiedColumns[':p' . $index++]  = '`USER_NOM`';
		}
		if ($this->isColumnModified(TblUserPeer::USER_PRENOM)) {
			$modifiedColumns[':p' . $index++]  = '`USER_PRENOM`';
		}
		if ($this->isColumnModified(TblUserPeer::USER_LOGIN)) {
			$modifiedColumns[':p' . $index++]  = '`USER_LOGIN`';
		}
		if ($this->isColumnModified(TblUserPeer::USER_PASSWORD)) {
			$modifiedColumns[':p' . $index++]  = '`USER_PASSWORD`';
		}
		if ($this->isColumnModified(TblUserPeer::USER_MAIL)) {
			$modifiedColumns[':p' . $index++]  = '`USER_MAIL`';
		}
		if ($this->isColumnModified(TblUserPeer::USER_COMPTE_ACTIVE)) {
			$modifiedColumns[':p' . $index++]  = '`USER_COMPTE_ACTIVE`';
		}
		if ($this->isColumnModified(TblUserPeer::USER_LAST_CNX)) {
			$modifiedColumns[':p' . $index++]  = '`USER_LAST_CNX`';
		}
		if ($this->isColumnModified(TblUserPeer::USER_NB_CNX)) {
			$modifiedColumns[':p' . $index++]  = '`USER_NB_CNX`';
		}

		$sql = sprintf(
			'INSERT INTO `tbl_user` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`USER_ID`':
						$stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
						break;
					case '`USER_NOM`':
						$stmt->bindValue($identifier, $this->user_nom, PDO::PARAM_STR);
						break;
					case '`USER_PRENOM`':
						$stmt->bindValue($identifier, $this->user_prenom, PDO::PARAM_STR);
						break;
					case '`USER_LOGIN`':
						$stmt->bindValue($identifier, $this->user_login, PDO::PARAM_STR);
						break;
					case '`USER_PASSWORD`':
						$stmt->bindValue($identifier, $this->user_password, PDO::PARAM_STR);
						break;
					case '`USER_MAIL`':
						$stmt->bindValue($identifier, $this->user_mail, PDO::PARAM_STR);
						break;
					case '`USER_COMPTE_ACTIVE`':
						$stmt->bindValue($identifier, (int) $this->user_compte_active, PDO::PARAM_INT);
						break;
					case '`USER_LAST_CNX`':
						$stmt->bindValue($identifier, $this->user_last_cnx, PDO::PARAM_STR);
						break;
					case '`USER_NB_CNX`':
						$stmt->bindValue($identifier, $this->user_nb_cnx, PDO::PARAM_INT);
						break;
				}
			}
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
		}

		try {
			$pk = $con->lastInsertId();
		} catch (Exception $e) {
			throw new PropelException('Unable to get autoincrement id.', $e);
		}
		$this->setUserId($pk);

		$this->setNew(false);
	}

	/**
	 * Update the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @see        doSave()
	 */
	protected function doUpdate(PropelPDO $con)
	{
		$selectCriteria = $this->buildPkeyCriteria();
		$valuesCriteria = $this->buildCriteria();
		BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
	}

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = TblUserPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collLnkUserProfils !== null) {
					foreach ($this->collLnkUserProfils as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTblAdherents !== null) {
					foreach ($this->collTblAdherents as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TblUserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getUserId();
				break;
			case 1:
				return $this->getUserNom();
				break;
			case 2:
				return $this->getUserPrenom();
				break;
			case 3:
				return $this->getUserLogin();
				break;
			case 4:
				return $this->getUserPassword();
				break;
			case 5:
				return $this->getUserMail();
				break;
			case 6:
				return $this->getUserCompteActive();
				break;
			case 7:
				return $this->getUserLastCnx();
				break;
			case 8:
				return $this->getUserNbCnx();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['TblUser'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['TblUser'][$this->getPrimaryKey()] = true;
		$keys = TblUserPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getUserId(),
			$keys[1] => $this->getUserNom(),
			$keys[2] => $this->getUserPrenom(),
			$keys[3] => $this->getUserLogin(),
			$keys[4] => $this->getUserPassword(),
			$keys[5] => $this->getUserMail(),
			$keys[6] => $this->getUserCompteActive(),
			$keys[7] => $this->getUserLastCnx(),
			$keys[8] => $this->getUserNbCnx(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collLnkUserProfils) {
				$result['LnkUserProfils'] = $this->collLnkUserProfils->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collTblAdherents) {
				$result['TblAdherents'] = $this->collTblAdherents->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TblUserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setUserId($value);
				break;
			case 1:
				$this->setUserNom($value);
				break;
			case 2:
				$this->setUserPrenom($value);
				break;
			case 3:
				$this->setUserLogin($value);
				break;
			case 4:
				$this->setUserPassword($value);
				break;
			case 5:
				$this->setUserMail($value);
				break;
			case 6:
				$this->setUserCompteActive($value);
				break;
			case 7:
				$this->setUserLastCnx($value);
				break;
			case 8:
				$this->setUserNbCnx($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TblUserPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setUserId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserNom($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserPrenom($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setUserLogin($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setUserPassword($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setUserMail($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUserCompteActive($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setUserLastCnx($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setUserNbCnx($arr[$keys[8]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(TblUserPeer::DATABASE_NAME);

		if ($this->isColumnModified(TblUserPeer::USER_ID)) $criteria->add(TblUserPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(TblUserPeer::USER_NOM)) $criteria->add(TblUserPeer::USER_NOM, $this->user_nom);
		if ($this->isColumnModified(TblUserPeer::USER_PRENOM)) $criteria->add(TblUserPeer::USER_PRENOM, $this->user_prenom);
		if ($this->isColumnModified(TblUserPeer::USER_LOGIN)) $criteria->add(TblUserPeer::USER_LOGIN, $this->user_login);
		if ($this->isColumnModified(TblUserPeer::USER_PASSWORD)) $criteria->add(TblUserPeer::USER_PASSWORD, $this->user_password);
		if ($this->isColumnModified(TblUserPeer::USER_MAIL)) $criteria->add(TblUserPeer::USER_MAIL, $this->user_mail);
		if ($this->isColumnModified(TblUserPeer::USER_COMPTE_ACTIVE)) $criteria->add(TblUserPeer::USER_COMPTE_ACTIVE, $this->user_compte_active);
		if ($this->isColumnModified(TblUserPeer::USER_LAST_CNX)) $criteria->add(TblUserPeer::USER_LAST_CNX, $this->user_last_cnx);
		if ($this->isColumnModified(TblUserPeer::USER_NB_CNX)) $criteria->add(TblUserPeer::USER_NB_CNX, $this->user_nb_cnx);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TblUserPeer::DATABASE_NAME);
		$criteria->add(TblUserPeer::USER_ID, $this->user_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getUserId();
	}

	/**
	 * Generic method to set the primary key (user_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setUserId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getUserId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of TblUser (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setUserNom($this->getUserNom());
		$copyObj->setUserPrenom($this->getUserPrenom());
		$copyObj->setUserLogin($this->getUserLogin());
		$copyObj->setUserPassword($this->getUserPassword());
		$copyObj->setUserMail($this->getUserMail());
		$copyObj->setUserCompteActive($this->getUserCompteActive());
		$copyObj->setUserLastCnx($this->getUserLastCnx());
		$copyObj->setUserNbCnx($this->getUserNbCnx());

		if ($deepCopy && !$this->startCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);
			// store object hash to prevent cycle
			$this->startCopy = true;

			foreach ($this->getLnkUserProfils() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addLnkUserProfil($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getTblAdherents() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTblAdherent($relObj->copy($deepCopy));
				}
			}

			//unflag object copy
			$this->startCopy = false;
		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setUserId(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     TblUser Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     TblUserPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new TblUserPeer();
		}
		return self::$peer;
	}


	/**
	 * Initializes a collection based on the name of a relation.
	 * Avoids crafting an 'init[$relationName]s' method name
	 * that wouldn't work when StandardEnglishPluralizer is used.
	 *
	 * @param      string $relationName The name of the relation to initialize
	 * @return     void
	 */
	public function initRelation($relationName)
	{
		if ('LnkUserProfil' == $relationName) {
			return $this->initLnkUserProfils();
		}
		if ('TblAdherent' == $relationName) {
			return $this->initTblAdherents();
		}
	}

	/**
	 * Clears out the collLnkUserProfils collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addLnkUserProfils()
	 */
	public function clearLnkUserProfils()
	{
		$this->collLnkUserProfils = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collLnkUserProfils collection.
	 *
	 * By default this just sets the collLnkUserProfils collection to an empty array (like clearcollLnkUserProfils());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initLnkUserProfils($overrideExisting = true)
	{
		if (null !== $this->collLnkUserProfils && !$overrideExisting) {
			return;
		}
		$this->collLnkUserProfils = new PropelObjectCollection();
		$this->collLnkUserProfils->setModel('LnkUserProfil');
	}

	/**
	 * Gets an array of LnkUserProfil objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this TblUser is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array LnkUserProfil[] List of LnkUserProfil objects
	 * @throws     PropelException
	 */
	public function getLnkUserProfils($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collLnkUserProfils || null !== $criteria) {
			if ($this->isNew() && null === $this->collLnkUserProfils) {
				// return empty collection
				$this->initLnkUserProfils();
			} else {
				$collLnkUserProfils = LnkUserProfilQuery::create(null, $criteria)
					->filterByTblUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collLnkUserProfils;
				}
				$this->collLnkUserProfils = $collLnkUserProfils;
			}
		}
		return $this->collLnkUserProfils;
	}

	/**
	 * Sets a collection of LnkUserProfil objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $lnkUserProfils A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setLnkUserProfils(PropelCollection $lnkUserProfils, PropelPDO $con = null)
	{
		$this->lnkUserProfilsScheduledForDeletion = $this->getLnkUserProfils(new Criteria(), $con)->diff($lnkUserProfils);

		foreach ($lnkUserProfils as $lnkUserProfil) {
			// Fix issue with collection modified by reference
			if ($lnkUserProfil->isNew()) {
				$lnkUserProfil->setTblUser($this);
			}
			$this->addLnkUserProfil($lnkUserProfil);
		}

		$this->collLnkUserProfils = $lnkUserProfils;
	}

	/**
	 * Returns the number of related LnkUserProfil objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related LnkUserProfil objects.
	 * @throws     PropelException
	 */
	public function countLnkUserProfils(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collLnkUserProfils || null !== $criteria) {
			if ($this->isNew() && null === $this->collLnkUserProfils) {
				return 0;
			} else {
				$query = LnkUserProfilQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByTblUser($this)
					->count($con);
			}
		} else {
			return count($this->collLnkUserProfils);
		}
	}

	/**
	 * Method called to associate a LnkUserProfil object to this object
	 * through the LnkUserProfil foreign key attribute.
	 *
	 * @param      LnkUserProfil $l LnkUserProfil
	 * @return     TblUser The current object (for fluent API support)
	 */
	public function addLnkUserProfil(LnkUserProfil $l)
	{
		if ($this->collLnkUserProfils === null) {
			$this->initLnkUserProfils();
		}
		if (!$this->collLnkUserProfils->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddLnkUserProfil($l);
		}

		return $this;
	}

	/**
	 * @param	LnkUserProfil $lnkUserProfil The lnkUserProfil object to add.
	 */
	protected function doAddLnkUserProfil($lnkUserProfil)
	{
		$this->collLnkUserProfils[]= $lnkUserProfil;
		$lnkUserProfil->setTblUser($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblUser is new, it will return
	 * an empty collection; or if this TblUser has previously
	 * been saved, it will retrieve related LnkUserProfils from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblUser.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array LnkUserProfil[] List of LnkUserProfil objects
	 */
	public function getLnkUserProfilsJoinRefProfil($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = LnkUserProfilQuery::create(null, $criteria);
		$query->joinWith('RefProfil', $join_behavior);

		return $this->getLnkUserProfils($query, $con);
	}

	/**
	 * Clears out the collTblAdherents collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTblAdherents()
	 */
	public function clearTblAdherents()
	{
		$this->collTblAdherents = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTblAdherents collection.
	 *
	 * By default this just sets the collTblAdherents collection to an empty array (like clearcollTblAdherents());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initTblAdherents($overrideExisting = true)
	{
		if (null !== $this->collTblAdherents && !$overrideExisting) {
			return;
		}
		$this->collTblAdherents = new PropelObjectCollection();
		$this->collTblAdherents->setModel('TblAdherent');
	}

	/**
	 * Gets an array of TblAdherent objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this TblUser is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 * @throws     PropelException
	 */
	public function getTblAdherents($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collTblAdherents || null !== $criteria) {
			if ($this->isNew() && null === $this->collTblAdherents) {
				// return empty collection
				$this->initTblAdherents();
			} else {
				$collTblAdherents = TblAdherentQuery::create(null, $criteria)
					->filterByTblUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collTblAdherents;
				}
				$this->collTblAdherents = $collTblAdherents;
			}
		}
		return $this->collTblAdherents;
	}

	/**
	 * Sets a collection of TblAdherent objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $tblAdherents A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setTblAdherents(PropelCollection $tblAdherents, PropelPDO $con = null)
	{
		$this->tblAdherentsScheduledForDeletion = $this->getTblAdherents(new Criteria(), $con)->diff($tblAdherents);

		foreach ($tblAdherents as $tblAdherent) {
			// Fix issue with collection modified by reference
			if ($tblAdherent->isNew()) {
				$tblAdherent->setTblUser($this);
			}
			$this->addTblAdherent($tblAdherent);
		}

		$this->collTblAdherents = $tblAdherents;
	}

	/**
	 * Returns the number of related TblAdherent objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related TblAdherent objects.
	 * @throws     PropelException
	 */
	public function countTblAdherents(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collTblAdherents || null !== $criteria) {
			if ($this->isNew() && null === $this->collTblAdherents) {
				return 0;
			} else {
				$query = TblAdherentQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByTblUser($this)
					->count($con);
			}
		} else {
			return count($this->collTblAdherents);
		}
	}

	/**
	 * Method called to associate a TblAdherent object to this object
	 * through the TblAdherent foreign key attribute.
	 *
	 * @param      TblAdherent $l TblAdherent
	 * @return     TblUser The current object (for fluent API support)
	 */
	public function addTblAdherent(TblAdherent $l)
	{
		if ($this->collTblAdherents === null) {
			$this->initTblAdherents();
		}
		if (!$this->collTblAdherents->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddTblAdherent($l);
		}

		return $this;
	}

	/**
	 * @param	TblAdherent $tblAdherent The tblAdherent object to add.
	 */
	protected function doAddTblAdherent($tblAdherent)
	{
		$this->collTblAdherents[]= $tblAdherent;
		$tblAdherent->setTblUser($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblUser is new, it will return
	 * an empty collection; or if this TblUser has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblUser.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 */
	public function getTblAdherentsJoinTblAdherentRelatedByEntraineurId($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAdherentQuery::create(null, $criteria);
		$query->joinWith('TblAdherentRelatedByEntraineurId', $join_behavior);

		return $this->getTblAdherents($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblUser is new, it will return
	 * an empty collection; or if this TblUser has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblUser.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 */
	public function getTblAdherentsJoinRefCivilite($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAdherentQuery::create(null, $criteria);
		$query->joinWith('RefCivilite', $join_behavior);

		return $this->getTblAdherents($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblUser is new, it will return
	 * an empty collection; or if this TblUser has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblUser.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 */
	public function getTblAdherentsJoinRefSituation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAdherentQuery::create(null, $criteria);
		$query->joinWith('RefSituation', $join_behavior);

		return $this->getTblAdherents($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblUser is new, it will return
	 * an empty collection; or if this TblUser has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblUser.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 */
	public function getTblAdherentsJoinRefTypeAdherent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAdherentQuery::create(null, $criteria);
		$query->joinWith('RefTypeAdherent', $join_behavior);

		return $this->getTblAdherents($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblUser is new, it will return
	 * an empty collection; or if this TblUser has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblUser.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 */
	public function getTblAdherentsJoinRefNiveauAdherent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAdherentQuery::create(null, $criteria);
		$query->joinWith('RefNiveauAdherent', $join_behavior);

		return $this->getTblAdherents($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblUser is new, it will return
	 * an empty collection; or if this TblUser has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblUser.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 */
	public function getTblAdherentsJoinRefTypeSport($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAdherentQuery::create(null, $criteria);
		$query->joinWith('RefTypeSport', $join_behavior);

		return $this->getTblAdherents($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblUser is new, it will return
	 * an empty collection; or if this TblUser has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblUser.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 */
	public function getTblAdherentsJoinRefSeanceHoraire($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAdherentQuery::create(null, $criteria);
		$query->joinWith('RefSeanceHoraire', $join_behavior);

		return $this->getTblAdherents($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->user_id = null;
		$this->user_nom = null;
		$this->user_prenom = null;
		$this->user_login = null;
		$this->user_password = null;
		$this->user_mail = null;
		$this->user_compte_active = null;
		$this->user_last_cnx = null;
		$this->user_nb_cnx = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collLnkUserProfils) {
				foreach ($this->collLnkUserProfils as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collTblAdherents) {
				foreach ($this->collTblAdherents as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collLnkUserProfils instanceof PropelCollection) {
			$this->collLnkUserProfils->clearIterator();
		}
		$this->collLnkUserProfils = null;
		if ($this->collTblAdherents instanceof PropelCollection) {
			$this->collTblAdherents->clearIterator();
		}
		$this->collTblAdherents = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(TblUserPeer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseTblUser:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseTblUser
