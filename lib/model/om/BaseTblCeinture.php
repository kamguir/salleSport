<?php


/**
 * Base class that represents a row from the 'tbl_ceinture' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTblCeinture extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'TblCeinturePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        TblCeinturePeer
	 */
	protected static $peer;

	/**
	 * The flag var to prevent infinit loop in deep copy
	 * @var       boolean
	 */
	protected $startCopy = false;

	/**
	 * The value for the ceinture_id field.
	 * @var        int
	 */
	protected $ceinture_id;

	/**
	 * The value for the adherent_id field.
	 * @var        int
	 */
	protected $adherent_id;

	/**
	 * The value for the grade_id field.
	 * @var        int
	 */
	protected $grade_id;

	/**
	 * The value for the competance_id field.
	 * @var        int
	 */
	protected $competance_id;

	/**
	 * The value for the titre_entraineur_id field.
	 * @var        int
	 */
	protected $titre_entraineur_id;

	/**
	 * The value for the ceinture_couleur_id field.
	 * @var        int
	 */
	protected $ceinture_couleur_id;

	/**
	 * The value for the date_acquisition field.
	 * @var        string
	 */
	protected $date_acquisition;

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
	 * @var        RefGradeCeinture
	 */
	protected $aRefGradeCeinture;

	/**
	 * @var        RefCompetance
	 */
	protected $aRefCompetance;

	/**
	 * @var        RefTitreEntraineur
	 */
	protected $aRefTitreEntraineur;

	/**
	 * @var        RefCeintureCouleur
	 */
	protected $aRefCeintureCouleur;

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
	 * Get the [ceinture_id] column value.
	 * 
	 * @return     int
	 */
	public function getCeintureId()
	{
		return $this->ceinture_id;
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
	 * Get the [grade_id] column value.
	 * 
	 * @return     int
	 */
	public function getGradeId()
	{
		return $this->grade_id;
	}

	/**
	 * Get the [competance_id] column value.
	 * 
	 * @return     int
	 */
	public function getCompetanceId()
	{
		return $this->competance_id;
	}

	/**
	 * Get the [titre_entraineur_id] column value.
	 * 
	 * @return     int
	 */
	public function getTitreEntraineurId()
	{
		return $this->titre_entraineur_id;
	}

	/**
	 * Get the [ceinture_couleur_id] column value.
	 * 
	 * @return     int
	 */
	public function getCeintureCouleurId()
	{
		return $this->ceinture_couleur_id;
	}

	/**
	 * Get the [optionally formatted] temporal [date_acquisition] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateAcquisition($format = 'Y-m-d H:i:s')
	{
		if ($this->date_acquisition === null) {
			return null;
		}


		if ($this->date_acquisition === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_acquisition);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_acquisition, true), $x);
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
	 * Set the value of [ceinture_id] column.
	 * 
	 * @param      int $v new value
	 * @return     TblCeinture The current object (for fluent API support)
	 */
	public function setCeintureId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->ceinture_id !== $v) {
			$this->ceinture_id = $v;
			$this->modifiedColumns[] = TblCeinturePeer::CEINTURE_ID;
		}

		return $this;
	} // setCeintureId()

	/**
	 * Set the value of [adherent_id] column.
	 * 
	 * @param      int $v new value
	 * @return     TblCeinture The current object (for fluent API support)
	 */
	public function setAdherentId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->adherent_id !== $v) {
			$this->adherent_id = $v;
			$this->modifiedColumns[] = TblCeinturePeer::ADHERENT_ID;
		}

		if ($this->aTblAdherent !== null && $this->aTblAdherent->getIdAdherent() !== $v) {
			$this->aTblAdherent = null;
		}

		return $this;
	} // setAdherentId()

	/**
	 * Set the value of [grade_id] column.
	 * 
	 * @param      int $v new value
	 * @return     TblCeinture The current object (for fluent API support)
	 */
	public function setGradeId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->grade_id !== $v) {
			$this->grade_id = $v;
			$this->modifiedColumns[] = TblCeinturePeer::GRADE_ID;
		}

		if ($this->aRefGradeCeinture !== null && $this->aRefGradeCeinture->getGradeId() !== $v) {
			$this->aRefGradeCeinture = null;
		}

		return $this;
	} // setGradeId()

	/**
	 * Set the value of [competance_id] column.
	 * 
	 * @param      int $v new value
	 * @return     TblCeinture The current object (for fluent API support)
	 */
	public function setCompetanceId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->competance_id !== $v) {
			$this->competance_id = $v;
			$this->modifiedColumns[] = TblCeinturePeer::COMPETANCE_ID;
		}

		if ($this->aRefCompetance !== null && $this->aRefCompetance->getCompetanceId() !== $v) {
			$this->aRefCompetance = null;
		}

		return $this;
	} // setCompetanceId()

	/**
	 * Set the value of [titre_entraineur_id] column.
	 * 
	 * @param      int $v new value
	 * @return     TblCeinture The current object (for fluent API support)
	 */
	public function setTitreEntraineurId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->titre_entraineur_id !== $v) {
			$this->titre_entraineur_id = $v;
			$this->modifiedColumns[] = TblCeinturePeer::TITRE_ENTRAINEUR_ID;
		}

		if ($this->aRefTitreEntraineur !== null && $this->aRefTitreEntraineur->getTitreEntraineurId() !== $v) {
			$this->aRefTitreEntraineur = null;
		}

		return $this;
	} // setTitreEntraineurId()

	/**
	 * Set the value of [ceinture_couleur_id] column.
	 * 
	 * @param      int $v new value
	 * @return     TblCeinture The current object (for fluent API support)
	 */
	public function setCeintureCouleurId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->ceinture_couleur_id !== $v) {
			$this->ceinture_couleur_id = $v;
			$this->modifiedColumns[] = TblCeinturePeer::CEINTURE_COULEUR_ID;
		}

		if ($this->aRefCeintureCouleur !== null && $this->aRefCeintureCouleur->getCeintureCouleurId() !== $v) {
			$this->aRefCeintureCouleur = null;
		}

		return $this;
	} // setCeintureCouleurId()

	/**
	 * Sets the value of [date_acquisition] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     TblCeinture The current object (for fluent API support)
	 */
	public function setDateAcquisition($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_acquisition !== null || $dt !== null) {
			$currentDateAsString = ($this->date_acquisition !== null && $tmpDt = new DateTime($this->date_acquisition)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_acquisition = $newDateAsString;
				$this->modifiedColumns[] = TblCeinturePeer::DATE_ACQUISITION;
			}
		} // if either are not null

		return $this;
	} // setDateAcquisition()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     TblCeinture The current object (for fluent API support)
	 */
	public function setCreatedAt($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->created_at !== null || $dt !== null) {
			$currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->created_at = $newDateAsString;
				$this->modifiedColumns[] = TblCeinturePeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

	/**
	 * Sets the value of [deleted_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     TblCeinture The current object (for fluent API support)
	 */
	public function setDeletedAt($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->deleted_at !== null || $dt !== null) {
			$currentDateAsString = ($this->deleted_at !== null && $tmpDt = new DateTime($this->deleted_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->deleted_at = $newDateAsString;
				$this->modifiedColumns[] = TblCeinturePeer::DELETED_AT;
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

			$this->ceinture_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->adherent_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->grade_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->competance_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->titre_entraineur_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->ceinture_couleur_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->date_acquisition = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->created_at = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->deleted_at = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 9; // 9 = TblCeinturePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating TblCeinture object", $e);
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
		if ($this->aRefGradeCeinture !== null && $this->grade_id !== $this->aRefGradeCeinture->getGradeId()) {
			$this->aRefGradeCeinture = null;
		}
		if ($this->aRefCompetance !== null && $this->competance_id !== $this->aRefCompetance->getCompetanceId()) {
			$this->aRefCompetance = null;
		}
		if ($this->aRefTitreEntraineur !== null && $this->titre_entraineur_id !== $this->aRefTitreEntraineur->getTitreEntraineurId()) {
			$this->aRefTitreEntraineur = null;
		}
		if ($this->aRefCeintureCouleur !== null && $this->ceinture_couleur_id !== $this->aRefCeintureCouleur->getCeintureCouleurId()) {
			$this->aRefCeintureCouleur = null;
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
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = TblCeinturePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aTblAdherent = null;
			$this->aRefGradeCeinture = null;
			$this->aRefCompetance = null;
			$this->aRefTitreEntraineur = null;
			$this->aRefCeintureCouleur = null;
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
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = TblCeintureQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseTblCeinture:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseTblCeinture:delete:post') as $callable)
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
			$con = Propel::getConnection(TblCeinturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseTblCeinture:save:pre') as $callable)
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
				if (!$this->isColumnModified(TblCeinturePeer::CREATED_AT))
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
				foreach (sfMixer::getCallables('BaseTblCeinture:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				TblCeinturePeer::addInstanceToPool($this);
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

			if ($this->aRefGradeCeinture !== null) {
				if ($this->aRefGradeCeinture->isModified() || $this->aRefGradeCeinture->isNew()) {
					$affectedRows += $this->aRefGradeCeinture->save($con);
				}
				$this->setRefGradeCeinture($this->aRefGradeCeinture);
			}

			if ($this->aRefCompetance !== null) {
				if ($this->aRefCompetance->isModified() || $this->aRefCompetance->isNew()) {
					$affectedRows += $this->aRefCompetance->save($con);
				}
				$this->setRefCompetance($this->aRefCompetance);
			}

			if ($this->aRefTitreEntraineur !== null) {
				if ($this->aRefTitreEntraineur->isModified() || $this->aRefTitreEntraineur->isNew()) {
					$affectedRows += $this->aRefTitreEntraineur->save($con);
				}
				$this->setRefTitreEntraineur($this->aRefTitreEntraineur);
			}

			if ($this->aRefCeintureCouleur !== null) {
				if ($this->aRefCeintureCouleur->isModified() || $this->aRefCeintureCouleur->isNew()) {
					$affectedRows += $this->aRefCeintureCouleur->save($con);
				}
				$this->setRefCeintureCouleur($this->aRefCeintureCouleur);
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

		$this->modifiedColumns[] = TblCeinturePeer::CEINTURE_ID;
		if (null !== $this->ceinture_id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . TblCeinturePeer::CEINTURE_ID . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(TblCeinturePeer::CEINTURE_ID)) {
			$modifiedColumns[':p' . $index++]  = '`CEINTURE_ID`';
		}
		if ($this->isColumnModified(TblCeinturePeer::ADHERENT_ID)) {
			$modifiedColumns[':p' . $index++]  = '`ADHERENT_ID`';
		}
		if ($this->isColumnModified(TblCeinturePeer::GRADE_ID)) {
			$modifiedColumns[':p' . $index++]  = '`GRADE_ID`';
		}
		if ($this->isColumnModified(TblCeinturePeer::COMPETANCE_ID)) {
			$modifiedColumns[':p' . $index++]  = '`COMPETANCE_ID`';
		}
		if ($this->isColumnModified(TblCeinturePeer::TITRE_ENTRAINEUR_ID)) {
			$modifiedColumns[':p' . $index++]  = '`TITRE_ENTRAINEUR_ID`';
		}
		if ($this->isColumnModified(TblCeinturePeer::CEINTURE_COULEUR_ID)) {
			$modifiedColumns[':p' . $index++]  = '`CEINTURE_COULEUR_ID`';
		}
		if ($this->isColumnModified(TblCeinturePeer::DATE_ACQUISITION)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_ACQUISITION`';
		}
		if ($this->isColumnModified(TblCeinturePeer::CREATED_AT)) {
			$modifiedColumns[':p' . $index++]  = '`CREATED_AT`';
		}
		if ($this->isColumnModified(TblCeinturePeer::DELETED_AT)) {
			$modifiedColumns[':p' . $index++]  = '`DELETED_AT`';
		}

		$sql = sprintf(
			'INSERT INTO `tbl_ceinture` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`CEINTURE_ID`':
						$stmt->bindValue($identifier, $this->ceinture_id, PDO::PARAM_INT);
						break;
					case '`ADHERENT_ID`':
						$stmt->bindValue($identifier, $this->adherent_id, PDO::PARAM_INT);
						break;
					case '`GRADE_ID`':
						$stmt->bindValue($identifier, $this->grade_id, PDO::PARAM_INT);
						break;
					case '`COMPETANCE_ID`':
						$stmt->bindValue($identifier, $this->competance_id, PDO::PARAM_INT);
						break;
					case '`TITRE_ENTRAINEUR_ID`':
						$stmt->bindValue($identifier, $this->titre_entraineur_id, PDO::PARAM_INT);
						break;
					case '`CEINTURE_COULEUR_ID`':
						$stmt->bindValue($identifier, $this->ceinture_couleur_id, PDO::PARAM_INT);
						break;
					case '`DATE_ACQUISITION`':
						$stmt->bindValue($identifier, $this->date_acquisition, PDO::PARAM_STR);
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
		$this->setCeintureId($pk);

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

			if ($this->aRefGradeCeinture !== null) {
				if (!$this->aRefGradeCeinture->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRefGradeCeinture->getValidationFailures());
				}
			}

			if ($this->aRefCompetance !== null) {
				if (!$this->aRefCompetance->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRefCompetance->getValidationFailures());
				}
			}

			if ($this->aRefTitreEntraineur !== null) {
				if (!$this->aRefTitreEntraineur->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRefTitreEntraineur->getValidationFailures());
				}
			}

			if ($this->aRefCeintureCouleur !== null) {
				if (!$this->aRefCeintureCouleur->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRefCeintureCouleur->getValidationFailures());
				}
			}


			if (($retval = TblCeinturePeer::doValidate($this, $columns)) !== true) {
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
		$pos = TblCeinturePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCeintureId();
				break;
			case 1:
				return $this->getAdherentId();
				break;
			case 2:
				return $this->getGradeId();
				break;
			case 3:
				return $this->getCompetanceId();
				break;
			case 4:
				return $this->getTitreEntraineurId();
				break;
			case 5:
				return $this->getCeintureCouleurId();
				break;
			case 6:
				return $this->getDateAcquisition();
				break;
			case 7:
				return $this->getCreatedAt();
				break;
			case 8:
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
		if (isset($alreadyDumpedObjects['TblCeinture'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['TblCeinture'][$this->getPrimaryKey()] = true;
		$keys = TblCeinturePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCeintureId(),
			$keys[1] => $this->getAdherentId(),
			$keys[2] => $this->getGradeId(),
			$keys[3] => $this->getCompetanceId(),
			$keys[4] => $this->getTitreEntraineurId(),
			$keys[5] => $this->getCeintureCouleurId(),
			$keys[6] => $this->getDateAcquisition(),
			$keys[7] => $this->getCreatedAt(),
			$keys[8] => $this->getDeletedAt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aTblAdherent) {
				$result['TblAdherent'] = $this->aTblAdherent->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aRefGradeCeinture) {
				$result['RefGradeCeinture'] = $this->aRefGradeCeinture->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aRefCompetance) {
				$result['RefCompetance'] = $this->aRefCompetance->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aRefTitreEntraineur) {
				$result['RefTitreEntraineur'] = $this->aRefTitreEntraineur->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aRefCeintureCouleur) {
				$result['RefCeintureCouleur'] = $this->aRefCeintureCouleur->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
		$pos = TblCeinturePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCeintureId($value);
				break;
			case 1:
				$this->setAdherentId($value);
				break;
			case 2:
				$this->setGradeId($value);
				break;
			case 3:
				$this->setCompetanceId($value);
				break;
			case 4:
				$this->setTitreEntraineurId($value);
				break;
			case 5:
				$this->setCeintureCouleurId($value);
				break;
			case 6:
				$this->setDateAcquisition($value);
				break;
			case 7:
				$this->setCreatedAt($value);
				break;
			case 8:
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
		$keys = TblCeinturePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCeintureId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAdherentId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setGradeId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCompetanceId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTitreEntraineurId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCeintureCouleurId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateAcquisition($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedAt($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDeletedAt($arr[$keys[8]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(TblCeinturePeer::DATABASE_NAME);

		if ($this->isColumnModified(TblCeinturePeer::CEINTURE_ID)) $criteria->add(TblCeinturePeer::CEINTURE_ID, $this->ceinture_id);
		if ($this->isColumnModified(TblCeinturePeer::ADHERENT_ID)) $criteria->add(TblCeinturePeer::ADHERENT_ID, $this->adherent_id);
		if ($this->isColumnModified(TblCeinturePeer::GRADE_ID)) $criteria->add(TblCeinturePeer::GRADE_ID, $this->grade_id);
		if ($this->isColumnModified(TblCeinturePeer::COMPETANCE_ID)) $criteria->add(TblCeinturePeer::COMPETANCE_ID, $this->competance_id);
		if ($this->isColumnModified(TblCeinturePeer::TITRE_ENTRAINEUR_ID)) $criteria->add(TblCeinturePeer::TITRE_ENTRAINEUR_ID, $this->titre_entraineur_id);
		if ($this->isColumnModified(TblCeinturePeer::CEINTURE_COULEUR_ID)) $criteria->add(TblCeinturePeer::CEINTURE_COULEUR_ID, $this->ceinture_couleur_id);
		if ($this->isColumnModified(TblCeinturePeer::DATE_ACQUISITION)) $criteria->add(TblCeinturePeer::DATE_ACQUISITION, $this->date_acquisition);
		if ($this->isColumnModified(TblCeinturePeer::CREATED_AT)) $criteria->add(TblCeinturePeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(TblCeinturePeer::DELETED_AT)) $criteria->add(TblCeinturePeer::DELETED_AT, $this->deleted_at);

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
		$criteria = new Criteria(TblCeinturePeer::DATABASE_NAME);
		$criteria->add(TblCeinturePeer::CEINTURE_ID, $this->ceinture_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getCeintureId();
	}

	/**
	 * Generic method to set the primary key (ceinture_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setCeintureId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getCeintureId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of TblCeinture (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setAdherentId($this->getAdherentId());
		$copyObj->setGradeId($this->getGradeId());
		$copyObj->setCompetanceId($this->getCompetanceId());
		$copyObj->setTitreEntraineurId($this->getTitreEntraineurId());
		$copyObj->setCeintureCouleurId($this->getCeintureCouleurId());
		$copyObj->setDateAcquisition($this->getDateAcquisition());
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
			$copyObj->setCeintureId(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     TblCeinture Clone of current object.
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
	 * @return     TblCeinturePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new TblCeinturePeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a TblAdherent object.
	 *
	 * @param      TblAdherent $v
	 * @return     TblCeinture The current object (for fluent API support)
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
			$v->addTblCeinture($this);
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
				$this->aTblAdherent->addTblCeintures($this);
			 */
		}
		return $this->aTblAdherent;
	}

	/**
	 * Declares an association between this object and a RefGradeCeinture object.
	 *
	 * @param      RefGradeCeinture $v
	 * @return     TblCeinture The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setRefGradeCeinture(RefGradeCeinture $v = null)
	{
		if ($v === null) {
			$this->setGradeId(NULL);
		} else {
			$this->setGradeId($v->getGradeId());
		}

		$this->aRefGradeCeinture = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the RefGradeCeinture object, it will not be re-added.
		if ($v !== null) {
			$v->addTblCeinture($this);
		}

		return $this;
	}


	/**
	 * Get the associated RefGradeCeinture object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     RefGradeCeinture The associated RefGradeCeinture object.
	 * @throws     PropelException
	 */
	public function getRefGradeCeinture(PropelPDO $con = null)
	{
		if ($this->aRefGradeCeinture === null && ($this->grade_id !== null)) {
			$this->aRefGradeCeinture = RefGradeCeintureQuery::create()->findPk($this->grade_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aRefGradeCeinture->addTblCeintures($this);
			 */
		}
		return $this->aRefGradeCeinture;
	}

	/**
	 * Declares an association between this object and a RefCompetance object.
	 *
	 * @param      RefCompetance $v
	 * @return     TblCeinture The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setRefCompetance(RefCompetance $v = null)
	{
		if ($v === null) {
			$this->setCompetanceId(NULL);
		} else {
			$this->setCompetanceId($v->getCompetanceId());
		}

		$this->aRefCompetance = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the RefCompetance object, it will not be re-added.
		if ($v !== null) {
			$v->addTblCeinture($this);
		}

		return $this;
	}


	/**
	 * Get the associated RefCompetance object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     RefCompetance The associated RefCompetance object.
	 * @throws     PropelException
	 */
	public function getRefCompetance(PropelPDO $con = null)
	{
		if ($this->aRefCompetance === null && ($this->competance_id !== null)) {
			$this->aRefCompetance = RefCompetanceQuery::create()->findPk($this->competance_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aRefCompetance->addTblCeintures($this);
			 */
		}
		return $this->aRefCompetance;
	}

	/**
	 * Declares an association between this object and a RefTitreEntraineur object.
	 *
	 * @param      RefTitreEntraineur $v
	 * @return     TblCeinture The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setRefTitreEntraineur(RefTitreEntraineur $v = null)
	{
		if ($v === null) {
			$this->setTitreEntraineurId(NULL);
		} else {
			$this->setTitreEntraineurId($v->getTitreEntraineurId());
		}

		$this->aRefTitreEntraineur = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the RefTitreEntraineur object, it will not be re-added.
		if ($v !== null) {
			$v->addTblCeinture($this);
		}

		return $this;
	}


	/**
	 * Get the associated RefTitreEntraineur object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     RefTitreEntraineur The associated RefTitreEntraineur object.
	 * @throws     PropelException
	 */
	public function getRefTitreEntraineur(PropelPDO $con = null)
	{
		if ($this->aRefTitreEntraineur === null && ($this->titre_entraineur_id !== null)) {
			$this->aRefTitreEntraineur = RefTitreEntraineurQuery::create()->findPk($this->titre_entraineur_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aRefTitreEntraineur->addTblCeintures($this);
			 */
		}
		return $this->aRefTitreEntraineur;
	}

	/**
	 * Declares an association between this object and a RefCeintureCouleur object.
	 *
	 * @param      RefCeintureCouleur $v
	 * @return     TblCeinture The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setRefCeintureCouleur(RefCeintureCouleur $v = null)
	{
		if ($v === null) {
			$this->setCeintureCouleurId(NULL);
		} else {
			$this->setCeintureCouleurId($v->getCeintureCouleurId());
		}

		$this->aRefCeintureCouleur = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the RefCeintureCouleur object, it will not be re-added.
		if ($v !== null) {
			$v->addTblCeinture($this);
		}

		return $this;
	}


	/**
	 * Get the associated RefCeintureCouleur object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     RefCeintureCouleur The associated RefCeintureCouleur object.
	 * @throws     PropelException
	 */
	public function getRefCeintureCouleur(PropelPDO $con = null)
	{
		if ($this->aRefCeintureCouleur === null && ($this->ceinture_couleur_id !== null)) {
			$this->aRefCeintureCouleur = RefCeintureCouleurQuery::create()->findPk($this->ceinture_couleur_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aRefCeintureCouleur->addTblCeintures($this);
			 */
		}
		return $this->aRefCeintureCouleur;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->ceinture_id = null;
		$this->adherent_id = null;
		$this->grade_id = null;
		$this->competance_id = null;
		$this->titre_entraineur_id = null;
		$this->ceinture_couleur_id = null;
		$this->date_acquisition = null;
		$this->created_at = null;
		$this->deleted_at = null;
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
		} // if ($deep)

		$this->aTblAdherent = null;
		$this->aRefGradeCeinture = null;
		$this->aRefCompetance = null;
		$this->aRefTitreEntraineur = null;
		$this->aRefCeintureCouleur = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(TblCeinturePeer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseTblCeinture:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseTblCeinture
