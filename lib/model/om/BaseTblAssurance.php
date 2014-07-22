<?php


/**
 * Base class that represents a row from the 'tbl_assurance' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTblAssurance extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'TblAssurancePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        TblAssurancePeer
	 */
	protected static $peer;

	/**
	 * The flag var to prevent infinit loop in deep copy
	 * @var       boolean
	 */
	protected $startCopy = false;

	/**
	 * The value for the assurance_id field.
	 * @var        int
	 */
	protected $assurance_id;

	/**
	 * The value for the adherent_id field.
	 * @var        int
	 */
	protected $adherent_id;

	/**
	 * The value for the ref_assurance_id field.
	 * @var        int
	 */
	protected $ref_assurance_id;

	/**
	 * The value for the prix_assurance field.
	 * @var        double
	 */
	protected $prix_assurance;

	/**
	 * The value for the etat_paiement field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $etat_paiement;

	/**
	 * The value for the date_assurance field.
	 * @var        string
	 */
	protected $date_assurance;

	/**
	 * The value for the created_at field.
	 * @var        string
	 */
	protected $created_at;

	/**
	 * The value for the deleted_at field.
	 * @var        string
	 */
	protected $deleted_at;

	/**
	 * @var        TblAdherent
	 */
	protected $aTblAdherent;

	/**
	 * @var        RefAssurance
	 */
	protected $aRefAssurance;

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
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->etat_paiement = true;
	}

	/**
	 * Initializes internal state of BaseTblAssurance object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [assurance_id] column value.
	 * 
	 * @return     int
	 */
	public function getAssuranceId()
	{
		return $this->assurance_id;
	}

	/**
	 * Get the [adherent_id] column value.
	 * 
	 * @return     int
	 */
	public function getAdherentId()
	{
		return $this->adherent_id;
	}

	/**
	 * Get the [ref_assurance_id] column value.
	 * 
	 * @return     int
	 */
	public function getRefAssuranceId()
	{
		return $this->ref_assurance_id;
	}

	/**
	 * Get the [prix_assurance] column value.
	 * 
	 * @return     double
	 */
	public function getPrixAssurance()
	{
		return $this->prix_assurance;
	}

	/**
	 * Get the [etat_paiement] column value.
	 * 
	 * @return     boolean
	 */
	public function getEtatPaiement()
	{
		return $this->etat_paiement;
	}

	/**
	 * Get the [optionally formatted] temporal [date_assurance] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateAssurance($format = 'Y-m-d H:i:s')
	{
		if ($this->date_assurance === null) {
			return null;
		}


		if ($this->date_assurance === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_assurance);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_assurance, true), $x);
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
	 * Get the [optionally formatted] temporal [created_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->created_at === null) {
			return null;
		}


		if ($this->created_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->created_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
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
	 * Get the [optionally formatted] temporal [deleted_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDeletedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->deleted_at === null) {
			return null;
		}


		if ($this->deleted_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->deleted_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->deleted_at, true), $x);
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
	 * Set the value of [assurance_id] column.
	 * 
	 * @param      int $v new value
	 * @return     TblAssurance The current object (for fluent API support)
	 */
	public function setAssuranceId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->assurance_id !== $v) {
			$this->assurance_id = $v;
			$this->modifiedColumns[] = TblAssurancePeer::ASSURANCE_ID;
		}

		return $this;
	} // setAssuranceId()

	/**
	 * Set the value of [adherent_id] column.
	 * 
	 * @param      int $v new value
	 * @return     TblAssurance The current object (for fluent API support)
	 */
	public function setAdherentId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->adherent_id !== $v) {
			$this->adherent_id = $v;
			$this->modifiedColumns[] = TblAssurancePeer::ADHERENT_ID;
		}

		if ($this->aTblAdherent !== null && $this->aTblAdherent->getIdAdherent() !== $v) {
			$this->aTblAdherent = null;
		}

		return $this;
	} // setAdherentId()

	/**
	 * Set the value of [ref_assurance_id] column.
	 * 
	 * @param      int $v new value
	 * @return     TblAssurance The current object (for fluent API support)
	 */
	public function setRefAssuranceId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->ref_assurance_id !== $v) {
			$this->ref_assurance_id = $v;
			$this->modifiedColumns[] = TblAssurancePeer::REF_ASSURANCE_ID;
		}

		if ($this->aRefAssurance !== null && $this->aRefAssurance->getAssuranceId() !== $v) {
			$this->aRefAssurance = null;
		}

		return $this;
	} // setRefAssuranceId()

	/**
	 * Set the value of [prix_assurance] column.
	 * 
	 * @param      double $v new value
	 * @return     TblAssurance The current object (for fluent API support)
	 */
	public function setPrixAssurance($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->prix_assurance !== $v) {
			$this->prix_assurance = $v;
			$this->modifiedColumns[] = TblAssurancePeer::PRIX_ASSURANCE;
		}

		return $this;
	} // setPrixAssurance()

	/**
	 * Sets the value of the [etat_paiement] column.
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     TblAssurance The current object (for fluent API support)
	 */
	public function setEtatPaiement($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->etat_paiement !== $v) {
			$this->etat_paiement = $v;
			$this->modifiedColumns[] = TblAssurancePeer::ETAT_PAIEMENT;
		}

		return $this;
	} // setEtatPaiement()

	/**
	 * Sets the value of [date_assurance] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     TblAssurance The current object (for fluent API support)
	 */
	public function setDateAssurance($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_assurance !== null || $dt !== null) {
			$currentDateAsString = ($this->date_assurance !== null && $tmpDt = new DateTime($this->date_assurance)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_assurance = $newDateAsString;
				$this->modifiedColumns[] = TblAssurancePeer::DATE_ASSURANCE;
			}
		} // if either are not null

		return $this;
	} // setDateAssurance()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     TblAssurance The current object (for fluent API support)
	 */
	public function setCreatedAt($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->created_at !== null || $dt !== null) {
			$currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->created_at = $newDateAsString;
				$this->modifiedColumns[] = TblAssurancePeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Sets the value of [deleted_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     TblAssurance The current object (for fluent API support)
	 */
	public function setDeletedAt($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->deleted_at !== null || $dt !== null) {
			$currentDateAsString = ($this->deleted_at !== null && $tmpDt = new DateTime($this->deleted_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->deleted_at = $newDateAsString;
				$this->modifiedColumns[] = TblAssurancePeer::DELETED_AT;
			}
		} // if either are not null

		return $this;
	} // setDeletedAt()

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
			if ($this->etat_paiement !== true) {
				return false;
			}

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

			$this->assurance_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->adherent_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->ref_assurance_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->prix_assurance = ($row[$startcol + 3] !== null) ? (double) $row[$startcol + 3] : null;
			$this->etat_paiement = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
			$this->date_assurance = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->created_at = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->deleted_at = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = TblAssurancePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating TblAssurance object", $e);
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

		if ($this->aTblAdherent !== null && $this->adherent_id !== $this->aTblAdherent->getIdAdherent()) {
			$this->aTblAdherent = null;
		}
		if ($this->aRefAssurance !== null && $this->ref_assurance_id !== $this->aRefAssurance->getAssuranceId()) {
			$this->aRefAssurance = null;
		}
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
			$con = Propel::getConnection(TblAssurancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = TblAssurancePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aTblAdherent = null;
			$this->aRefAssurance = null;
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
			$con = Propel::getConnection(TblAssurancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = TblAssuranceQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseTblAssurance:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseTblAssurance:delete:post') as $callable)
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
			$con = Propel::getConnection(TblAssurancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseTblAssurance:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
				// symfony_timestampable behavior
				if (!$this->isColumnModified(TblAssurancePeer::CREATED_AT))
				{
				  $this->setCreatedAt(time());
				}

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
				foreach (sfMixer::getCallables('BaseTblAssurance:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				TblAssurancePeer::addInstanceToPool($this);
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

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aTblAdherent !== null) {
				if ($this->aTblAdherent->isModified() || $this->aTblAdherent->isNew()) {
					$affectedRows += $this->aTblAdherent->save($con);
				}
				$this->setTblAdherent($this->aTblAdherent);
			}

			if ($this->aRefAssurance !== null) {
				if ($this->aRefAssurance->isModified() || $this->aRefAssurance->isNew()) {
					$affectedRows += $this->aRefAssurance->save($con);
				}
				$this->setRefAssurance($this->aRefAssurance);
			}

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

		$this->modifiedColumns[] = TblAssurancePeer::ASSURANCE_ID;
		if (null !== $this->assurance_id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . TblAssurancePeer::ASSURANCE_ID . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(TblAssurancePeer::ASSURANCE_ID)) {
			$modifiedColumns[':p' . $index++]  = '`ASSURANCE_ID`';
		}
		if ($this->isColumnModified(TblAssurancePeer::ADHERENT_ID)) {
			$modifiedColumns[':p' . $index++]  = '`ADHERENT_ID`';
		}
		if ($this->isColumnModified(TblAssurancePeer::REF_ASSURANCE_ID)) {
			$modifiedColumns[':p' . $index++]  = '`REF_ASSURANCE_ID`';
		}
		if ($this->isColumnModified(TblAssurancePeer::PRIX_ASSURANCE)) {
			$modifiedColumns[':p' . $index++]  = '`PRIX_ASSURANCE`';
		}
		if ($this->isColumnModified(TblAssurancePeer::ETAT_PAIEMENT)) {
			$modifiedColumns[':p' . $index++]  = '`ETAT_PAIEMENT`';
		}
		if ($this->isColumnModified(TblAssurancePeer::DATE_ASSURANCE)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_ASSURANCE`';
		}
		if ($this->isColumnModified(TblAssurancePeer::CREATED_AT)) {
			$modifiedColumns[':p' . $index++]  = '`CREATED_AT`';
		}
		if ($this->isColumnModified(TblAssurancePeer::DELETED_AT)) {
			$modifiedColumns[':p' . $index++]  = '`DELETED_AT`';
		}

		$sql = sprintf(
			'INSERT INTO `tbl_assurance` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ASSURANCE_ID`':
						$stmt->bindValue($identifier, $this->assurance_id, PDO::PARAM_INT);
						break;
					case '`ADHERENT_ID`':
						$stmt->bindValue($identifier, $this->adherent_id, PDO::PARAM_INT);
						break;
					case '`REF_ASSURANCE_ID`':
						$stmt->bindValue($identifier, $this->ref_assurance_id, PDO::PARAM_INT);
						break;
					case '`PRIX_ASSURANCE`':
						$stmt->bindValue($identifier, $this->prix_assurance, PDO::PARAM_STR);
						break;
					case '`ETAT_PAIEMENT`':
						$stmt->bindValue($identifier, (int) $this->etat_paiement, PDO::PARAM_INT);
						break;
					case '`DATE_ASSURANCE`':
						$stmt->bindValue($identifier, $this->date_assurance, PDO::PARAM_STR);
						break;
					case '`CREATED_AT`':
						$stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
						break;
					case '`DELETED_AT`':
						$stmt->bindValue($identifier, $this->deleted_at, PDO::PARAM_STR);
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
		$this->setAssuranceId($pk);

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


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aTblAdherent !== null) {
				if (!$this->aTblAdherent->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTblAdherent->getValidationFailures());
				}
			}

			if ($this->aRefAssurance !== null) {
				if (!$this->aRefAssurance->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRefAssurance->getValidationFailures());
				}
			}


			if (($retval = TblAssurancePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
		$pos = TblAssurancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAssuranceId();
				break;
			case 1:
				return $this->getAdherentId();
				break;
			case 2:
				return $this->getRefAssuranceId();
				break;
			case 3:
				return $this->getPrixAssurance();
				break;
			case 4:
				return $this->getEtatPaiement();
				break;
			case 5:
				return $this->getDateAssurance();
				break;
			case 6:
				return $this->getCreatedAt();
				break;
			case 7:
				return $this->getDeletedAt();
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
		if (isset($alreadyDumpedObjects['TblAssurance'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['TblAssurance'][$this->getPrimaryKey()] = true;
		$keys = TblAssurancePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getAssuranceId(),
			$keys[1] => $this->getAdherentId(),
			$keys[2] => $this->getRefAssuranceId(),
			$keys[3] => $this->getPrixAssurance(),
			$keys[4] => $this->getEtatPaiement(),
			$keys[5] => $this->getDateAssurance(),
			$keys[6] => $this->getCreatedAt(),
			$keys[7] => $this->getDeletedAt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aTblAdherent) {
				$result['TblAdherent'] = $this->aTblAdherent->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aRefAssurance) {
				$result['RefAssurance'] = $this->aRefAssurance->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
		$pos = TblAssurancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAssuranceId($value);
				break;
			case 1:
				$this->setAdherentId($value);
				break;
			case 2:
				$this->setRefAssuranceId($value);
				break;
			case 3:
				$this->setPrixAssurance($value);
				break;
			case 4:
				$this->setEtatPaiement($value);
				break;
			case 5:
				$this->setDateAssurance($value);
				break;
			case 6:
				$this->setCreatedAt($value);
				break;
			case 7:
				$this->setDeletedAt($value);
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
		$keys = TblAssurancePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setAssuranceId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAdherentId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setRefAssuranceId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPrixAssurance($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEtatPaiement($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDateAssurance($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDeletedAt($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(TblAssurancePeer::DATABASE_NAME);

		if ($this->isColumnModified(TblAssurancePeer::ASSURANCE_ID)) $criteria->add(TblAssurancePeer::ASSURANCE_ID, $this->assurance_id);
		if ($this->isColumnModified(TblAssurancePeer::ADHERENT_ID)) $criteria->add(TblAssurancePeer::ADHERENT_ID, $this->adherent_id);
		if ($this->isColumnModified(TblAssurancePeer::REF_ASSURANCE_ID)) $criteria->add(TblAssurancePeer::REF_ASSURANCE_ID, $this->ref_assurance_id);
		if ($this->isColumnModified(TblAssurancePeer::PRIX_ASSURANCE)) $criteria->add(TblAssurancePeer::PRIX_ASSURANCE, $this->prix_assurance);
		if ($this->isColumnModified(TblAssurancePeer::ETAT_PAIEMENT)) $criteria->add(TblAssurancePeer::ETAT_PAIEMENT, $this->etat_paiement);
		if ($this->isColumnModified(TblAssurancePeer::DATE_ASSURANCE)) $criteria->add(TblAssurancePeer::DATE_ASSURANCE, $this->date_assurance);
		if ($this->isColumnModified(TblAssurancePeer::CREATED_AT)) $criteria->add(TblAssurancePeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(TblAssurancePeer::DELETED_AT)) $criteria->add(TblAssurancePeer::DELETED_AT, $this->deleted_at);

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
		$criteria = new Criteria(TblAssurancePeer::DATABASE_NAME);
		$criteria->add(TblAssurancePeer::ASSURANCE_ID, $this->assurance_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getAssuranceId();
	}

	/**
	 * Generic method to set the primary key (assurance_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setAssuranceId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getAssuranceId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of TblAssurance (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setAdherentId($this->getAdherentId());
		$copyObj->setRefAssuranceId($this->getRefAssuranceId());
		$copyObj->setPrixAssurance($this->getPrixAssurance());
		$copyObj->setEtatPaiement($this->getEtatPaiement());
		$copyObj->setDateAssurance($this->getDateAssurance());
		$copyObj->setCreatedAt($this->getCreatedAt());
		$copyObj->setDeletedAt($this->getDeletedAt());

		if ($deepCopy && !$this->startCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);
			// store object hash to prevent cycle
			$this->startCopy = true;

			//unflag object copy
			$this->startCopy = false;
		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setAssuranceId(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     TblAssurance Clone of current object.
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
	 * @return     TblAssurancePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new TblAssurancePeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a TblAdherent object.
	 *
	 * @param      TblAdherent $v
	 * @return     TblAssurance The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setTblAdherent(TblAdherent $v = null)
	{
		if ($v === null) {
			$this->setAdherentId(NULL);
		} else {
			$this->setAdherentId($v->getIdAdherent());
		}

		$this->aTblAdherent = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the TblAdherent object, it will not be re-added.
		if ($v !== null) {
			$v->addTblAssurance($this);
		}

		return $this;
	}


	/**
	 * Get the associated TblAdherent object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     TblAdherent The associated TblAdherent object.
	 * @throws     PropelException
	 */
	public function getTblAdherent(PropelPDO $con = null)
	{
		if ($this->aTblAdherent === null && ($this->adherent_id !== null)) {
			$this->aTblAdherent = TblAdherentQuery::create()->findPk($this->adherent_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aTblAdherent->addTblAssurances($this);
			 */
		}
		return $this->aTblAdherent;
	}

	/**
	 * Declares an association between this object and a RefAssurance object.
	 *
	 * @param      RefAssurance $v
	 * @return     TblAssurance The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setRefAssurance(RefAssurance $v = null)
	{
		if ($v === null) {
			$this->setRefAssuranceId(NULL);
		} else {
			$this->setRefAssuranceId($v->getAssuranceId());
		}

		$this->aRefAssurance = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the RefAssurance object, it will not be re-added.
		if ($v !== null) {
			$v->addTblAssurance($this);
		}

		return $this;
	}


	/**
	 * Get the associated RefAssurance object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     RefAssurance The associated RefAssurance object.
	 * @throws     PropelException
	 */
	public function getRefAssurance(PropelPDO $con = null)
	{
		if ($this->aRefAssurance === null && ($this->ref_assurance_id !== null)) {
			$this->aRefAssurance = RefAssuranceQuery::create()->findPk($this->ref_assurance_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aRefAssurance->addTblAssurances($this);
			 */
		}
		return $this->aRefAssurance;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->assurance_id = null;
		$this->adherent_id = null;
		$this->ref_assurance_id = null;
		$this->prix_assurance = null;
		$this->etat_paiement = null;
		$this->date_assurance = null;
		$this->created_at = null;
		$this->deleted_at = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
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
		} // if ($deep)

		$this->aTblAdherent = null;
		$this->aRefAssurance = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(TblAssurancePeer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseTblAssurance:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseTblAssurance
