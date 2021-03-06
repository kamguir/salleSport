<?php


/**
 * Base class that represents a row from the 'ref_type_sport' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefTypeSport extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'RefTypeSportPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        RefTypeSportPeer
	 */
	protected static $peer;

	/**
	 * The flag var to prevent infinit loop in deep copy
	 * @var       boolean
	 */
	protected $startCopy = false;

	/**
	 * The value for the id_type_sport field.
	 * @var        int
	 */
	protected $id_type_sport;

	/**
	 * The value for the libelle field.
	 * @var        string
	 */
	protected $libelle;

	/**
	 * The value for the montant_sport field.
	 * @var        double
	 */
	protected $montant_sport;

	/**
	 * The value for the sport_image_path field.
	 * @var        string
	 */
	protected $sport_image_path;

	/**
	 * @var        array TblAdherent[] Collection to store aggregation of TblAdherent objects.
	 */
	protected $collTblAdherents;

	/**
	 * @var        array TblCompetition[] Collection to store aggregation of TblCompetition objects.
	 */
	protected $collTblCompetitions;

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
	protected $tblAdherentsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $tblCompetitionsScheduledForDeletion = null;

	/**
	 * Get the [id_type_sport] column value.
	 * 
	 * @return     int
	 */
	public function getIdTypeSport()
	{
		return $this->id_type_sport;
	}

	/**
	 * Get the [libelle] column value.
	 * 
	 * @return     string
	 */
	public function getLibelle()
	{
		return $this->libelle;
	}

	/**
	 * Get the [montant_sport] column value.
	 * 
	 * @return     double
	 */
	public function getMontantSport()
	{
		return $this->montant_sport;
	}

	/**
	 * Get the [sport_image_path] column value.
	 * 
	 * @return     string
	 */
	public function getSportImagePath()
	{
		return $this->sport_image_path;
	}

	/**
	 * Set the value of [id_type_sport] column.
	 * 
	 * @param      int $v new value
	 * @return     RefTypeSport The current object (for fluent API support)
	 */
	public function setIdTypeSport($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_type_sport !== $v) {
			$this->id_type_sport = $v;
			$this->modifiedColumns[] = RefTypeSportPeer::ID_TYPE_SPORT;
		}

		return $this;
	} // setIdTypeSport()

	/**
	 * Set the value of [libelle] column.
	 * 
	 * @param      string $v new value
	 * @return     RefTypeSport The current object (for fluent API support)
	 */
	public function setLibelle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->libelle !== $v) {
			$this->libelle = $v;
			$this->modifiedColumns[] = RefTypeSportPeer::LIBELLE;
		}

		return $this;
	} // setLibelle()

	/**
	 * Set the value of [montant_sport] column.
	 * 
	 * @param      double $v new value
	 * @return     RefTypeSport The current object (for fluent API support)
	 */
	public function setMontantSport($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->montant_sport !== $v) {
			$this->montant_sport = $v;
			$this->modifiedColumns[] = RefTypeSportPeer::MONTANT_SPORT;
		}

		return $this;
	} // setMontantSport()

	/**
	 * Set the value of [sport_image_path] column.
	 * 
	 * @param      string $v new value
	 * @return     RefTypeSport The current object (for fluent API support)
	 */
	public function setSportImagePath($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->sport_image_path !== $v) {
			$this->sport_image_path = $v;
			$this->modifiedColumns[] = RefTypeSportPeer::SPORT_IMAGE_PATH;
		}

		return $this;
	} // setSportImagePath()

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

			$this->id_type_sport = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->montant_sport = ($row[$startcol + 2] !== null) ? (double) $row[$startcol + 2] : null;
			$this->sport_image_path = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 4; // 4 = RefTypeSportPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating RefTypeSport object", $e);
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
			$con = Propel::getConnection(RefTypeSportPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = RefTypeSportPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collTblAdherents = null;

			$this->collTblCompetitions = null;

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
			$con = Propel::getConnection(RefTypeSportPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = RefTypeSportQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseRefTypeSport:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseRefTypeSport:delete:post') as $callable)
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
			$con = Propel::getConnection(RefTypeSportPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseRefTypeSport:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseRefTypeSport:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				RefTypeSportPeer::addInstanceToPool($this);
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

			if ($this->tblCompetitionsScheduledForDeletion !== null) {
				if (!$this->tblCompetitionsScheduledForDeletion->isEmpty()) {
					TblCompetitionQuery::create()
						->filterByPrimaryKeys($this->tblCompetitionsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->tblCompetitionsScheduledForDeletion = null;
				}
			}

			if ($this->collTblCompetitions !== null) {
				foreach ($this->collTblCompetitions as $referrerFK) {
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

		$this->modifiedColumns[] = RefTypeSportPeer::ID_TYPE_SPORT;
		if (null !== $this->id_type_sport) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . RefTypeSportPeer::ID_TYPE_SPORT . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(RefTypeSportPeer::ID_TYPE_SPORT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_TYPE_SPORT`';
		}
		if ($this->isColumnModified(RefTypeSportPeer::LIBELLE)) {
			$modifiedColumns[':p' . $index++]  = '`LIBELLE`';
		}
		if ($this->isColumnModified(RefTypeSportPeer::MONTANT_SPORT)) {
			$modifiedColumns[':p' . $index++]  = '`MONTANT_SPORT`';
		}
		if ($this->isColumnModified(RefTypeSportPeer::SPORT_IMAGE_PATH)) {
			$modifiedColumns[':p' . $index++]  = '`SPORT_IMAGE_PATH`';
		}

		$sql = sprintf(
			'INSERT INTO `ref_type_sport` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_TYPE_SPORT`':
						$stmt->bindValue($identifier, $this->id_type_sport, PDO::PARAM_INT);
						break;
					case '`LIBELLE`':
						$stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
						break;
					case '`MONTANT_SPORT`':
						$stmt->bindValue($identifier, $this->montant_sport, PDO::PARAM_STR);
						break;
					case '`SPORT_IMAGE_PATH`':
						$stmt->bindValue($identifier, $this->sport_image_path, PDO::PARAM_STR);
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
		$this->setIdTypeSport($pk);

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


			if (($retval = RefTypeSportPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTblAdherents !== null) {
					foreach ($this->collTblAdherents as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTblCompetitions !== null) {
					foreach ($this->collTblCompetitions as $referrerFK) {
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
		$pos = RefTypeSportPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdTypeSport();
				break;
			case 1:
				return $this->getLibelle();
				break;
			case 2:
				return $this->getMontantSport();
				break;
			case 3:
				return $this->getSportImagePath();
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
		if (isset($alreadyDumpedObjects['RefTypeSport'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['RefTypeSport'][$this->getPrimaryKey()] = true;
		$keys = RefTypeSportPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdTypeSport(),
			$keys[1] => $this->getLibelle(),
			$keys[2] => $this->getMontantSport(),
			$keys[3] => $this->getSportImagePath(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collTblAdherents) {
				$result['TblAdherents'] = $this->collTblAdherents->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collTblCompetitions) {
				$result['TblCompetitions'] = $this->collTblCompetitions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = RefTypeSportPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdTypeSport($value);
				break;
			case 1:
				$this->setLibelle($value);
				break;
			case 2:
				$this->setMontantSport($value);
				break;
			case 3:
				$this->setSportImagePath($value);
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
		$keys = RefTypeSportPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdTypeSport($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setLibelle($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMontantSport($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSportImagePath($arr[$keys[3]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(RefTypeSportPeer::DATABASE_NAME);

		if ($this->isColumnModified(RefTypeSportPeer::ID_TYPE_SPORT)) $criteria->add(RefTypeSportPeer::ID_TYPE_SPORT, $this->id_type_sport);
		if ($this->isColumnModified(RefTypeSportPeer::LIBELLE)) $criteria->add(RefTypeSportPeer::LIBELLE, $this->libelle);
		if ($this->isColumnModified(RefTypeSportPeer::MONTANT_SPORT)) $criteria->add(RefTypeSportPeer::MONTANT_SPORT, $this->montant_sport);
		if ($this->isColumnModified(RefTypeSportPeer::SPORT_IMAGE_PATH)) $criteria->add(RefTypeSportPeer::SPORT_IMAGE_PATH, $this->sport_image_path);

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
		$criteria = new Criteria(RefTypeSportPeer::DATABASE_NAME);
		$criteria->add(RefTypeSportPeer::ID_TYPE_SPORT, $this->id_type_sport);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdTypeSport();
	}

	/**
	 * Generic method to set the primary key (id_type_sport column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdTypeSport($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdTypeSport();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of RefTypeSport (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setLibelle($this->getLibelle());
		$copyObj->setMontantSport($this->getMontantSport());
		$copyObj->setSportImagePath($this->getSportImagePath());

		if ($deepCopy && !$this->startCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);
			// store object hash to prevent cycle
			$this->startCopy = true;

			foreach ($this->getTblAdherents() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTblAdherent($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getTblCompetitions() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTblCompetition($relObj->copy($deepCopy));
				}
			}

			//unflag object copy
			$this->startCopy = false;
		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdTypeSport(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     RefTypeSport Clone of current object.
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
	 * @return     RefTypeSportPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new RefTypeSportPeer();
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
		if ('TblAdherent' == $relationName) {
			return $this->initTblAdherents();
		}
		if ('TblCompetition' == $relationName) {
			return $this->initTblCompetitions();
		}
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
	 * If this RefTypeSport is new, it will return
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
					->filterByRefTypeSport($this)
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
				$tblAdherent->setRefTypeSport($this);
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
					->filterByRefTypeSport($this)
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
	 * @return     RefTypeSport The current object (for fluent API support)
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
		$tblAdherent->setRefTypeSport($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this RefTypeSport is new, it will return
	 * an empty collection; or if this RefTypeSport has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefTypeSport.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 */
	public function getTblAdherentsJoinTblUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAdherentQuery::create(null, $criteria);
		$query->joinWith('TblUser', $join_behavior);

		return $this->getTblAdherents($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this RefTypeSport is new, it will return
	 * an empty collection; or if this RefTypeSport has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefTypeSport.
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
	 * Otherwise if this RefTypeSport is new, it will return
	 * an empty collection; or if this RefTypeSport has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefTypeSport.
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
	 * Otherwise if this RefTypeSport is new, it will return
	 * an empty collection; or if this RefTypeSport has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefTypeSport.
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
	 * Otherwise if this RefTypeSport is new, it will return
	 * an empty collection; or if this RefTypeSport has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefTypeSport.
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
	 * Otherwise if this RefTypeSport is new, it will return
	 * an empty collection; or if this RefTypeSport has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefTypeSport.
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
	 * Otherwise if this RefTypeSport is new, it will return
	 * an empty collection; or if this RefTypeSport has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefTypeSport.
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
	 * Clears out the collTblCompetitions collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTblCompetitions()
	 */
	public function clearTblCompetitions()
	{
		$this->collTblCompetitions = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTblCompetitions collection.
	 *
	 * By default this just sets the collTblCompetitions collection to an empty array (like clearcollTblCompetitions());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initTblCompetitions($overrideExisting = true)
	{
		if (null !== $this->collTblCompetitions && !$overrideExisting) {
			return;
		}
		$this->collTblCompetitions = new PropelObjectCollection();
		$this->collTblCompetitions->setModel('TblCompetition');
	}

	/**
	 * Gets an array of TblCompetition objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this RefTypeSport is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array TblCompetition[] List of TblCompetition objects
	 * @throws     PropelException
	 */
	public function getTblCompetitions($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collTblCompetitions || null !== $criteria) {
			if ($this->isNew() && null === $this->collTblCompetitions) {
				// return empty collection
				$this->initTblCompetitions();
			} else {
				$collTblCompetitions = TblCompetitionQuery::create(null, $criteria)
					->filterByRefTypeSport($this)
					->find($con);
				if (null !== $criteria) {
					return $collTblCompetitions;
				}
				$this->collTblCompetitions = $collTblCompetitions;
			}
		}
		return $this->collTblCompetitions;
	}

	/**
	 * Sets a collection of TblCompetition objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $tblCompetitions A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setTblCompetitions(PropelCollection $tblCompetitions, PropelPDO $con = null)
	{
		$this->tblCompetitionsScheduledForDeletion = $this->getTblCompetitions(new Criteria(), $con)->diff($tblCompetitions);

		foreach ($tblCompetitions as $tblCompetition) {
			// Fix issue with collection modified by reference
			if ($tblCompetition->isNew()) {
				$tblCompetition->setRefTypeSport($this);
			}
			$this->addTblCompetition($tblCompetition);
		}

		$this->collTblCompetitions = $tblCompetitions;
	}

	/**
	 * Returns the number of related TblCompetition objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related TblCompetition objects.
	 * @throws     PropelException
	 */
	public function countTblCompetitions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collTblCompetitions || null !== $criteria) {
			if ($this->isNew() && null === $this->collTblCompetitions) {
				return 0;
			} else {
				$query = TblCompetitionQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByRefTypeSport($this)
					->count($con);
			}
		} else {
			return count($this->collTblCompetitions);
		}
	}

	/**
	 * Method called to associate a TblCompetition object to this object
	 * through the TblCompetition foreign key attribute.
	 *
	 * @param      TblCompetition $l TblCompetition
	 * @return     RefTypeSport The current object (for fluent API support)
	 */
	public function addTblCompetition(TblCompetition $l)
	{
		if ($this->collTblCompetitions === null) {
			$this->initTblCompetitions();
		}
		if (!$this->collTblCompetitions->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddTblCompetition($l);
		}

		return $this;
	}

	/**
	 * @param	TblCompetition $tblCompetition The tblCompetition object to add.
	 */
	protected function doAddTblCompetition($tblCompetition)
	{
		$this->collTblCompetitions[]= $tblCompetition;
		$tblCompetition->setRefTypeSport($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this RefTypeSport is new, it will return
	 * an empty collection; or if this RefTypeSport has previously
	 * been saved, it will retrieve related TblCompetitions from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefTypeSport.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblCompetition[] List of TblCompetition objects
	 */
	public function getTblCompetitionsJoinRefVille($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblCompetitionQuery::create(null, $criteria);
		$query->joinWith('RefVille', $join_behavior);

		return $this->getTblCompetitions($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_type_sport = null;
		$this->libelle = null;
		$this->montant_sport = null;
		$this->sport_image_path = null;
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
			if ($this->collTblAdherents) {
				foreach ($this->collTblAdherents as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collTblCompetitions) {
				foreach ($this->collTblCompetitions as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collTblAdherents instanceof PropelCollection) {
			$this->collTblAdherents->clearIterator();
		}
		$this->collTblAdherents = null;
		if ($this->collTblCompetitions instanceof PropelCollection) {
			$this->collTblCompetitions->clearIterator();
		}
		$this->collTblCompetitions = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(RefTypeSportPeer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseRefTypeSport:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseRefTypeSport
