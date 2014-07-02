<?php


/**
 * Base class that represents a row from the 'ref_plage_horaire' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefPlageHoraire extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'RefPlageHorairePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        RefPlageHorairePeer
	 */
	protected static $peer;

	/**
	 * The flag var to prevent infinit loop in deep copy
	 * @var       boolean
	 */
	protected $startCopy = false;

	/**
	 * The value for the horaire_id field.
	 * @var        int
	 */
	protected $horaire_id;

	/**
	 * The value for the horaire_plage field.
	 * @var        string
	 */
	protected $horaire_plage;

	/**
	 * @var        array LnkPlageHoraireAdherent[] Collection to store aggregation of LnkPlageHoraireAdherent objects.
	 */
	protected $collLnkPlageHoraireAdherents;

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
	protected $lnkPlageHoraireAdherentsScheduledForDeletion = null;

	/**
	 * Get the [horaire_id] column value.
	 * 
	 * @return     int
	 */
	public function getHoraireId()
	{
		return $this->horaire_id;
	}

	/**
	 * Get the [horaire_plage] column value.
	 * 
	 * @return     string
	 */
	public function getHorairePlage()
	{
		return $this->horaire_plage;
	}

	/**
	 * Set the value of [horaire_id] column.
	 * 
	 * @param      int $v new value
	 * @return     RefPlageHoraire The current object (for fluent API support)
	 */
	public function setHoraireId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->horaire_id !== $v) {
			$this->horaire_id = $v;
			$this->modifiedColumns[] = RefPlageHorairePeer::HORAIRE_ID;
		}

		return $this;
	} // setHoraireId()

	/**
	 * Set the value of [horaire_plage] column.
	 * 
	 * @param      string $v new value
	 * @return     RefPlageHoraire The current object (for fluent API support)
	 */
	public function setHorairePlage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->horaire_plage !== $v) {
			$this->horaire_plage = $v;
			$this->modifiedColumns[] = RefPlageHorairePeer::HORAIRE_PLAGE;
		}

		return $this;
	} // setHorairePlage()

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

			$this->horaire_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->horaire_plage = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 2; // 2 = RefPlageHorairePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating RefPlageHoraire object", $e);
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
			$con = Propel::getConnection(RefPlageHorairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = RefPlageHorairePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collLnkPlageHoraireAdherents = null;

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
			$con = Propel::getConnection(RefPlageHorairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = RefPlageHoraireQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseRefPlageHoraire:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseRefPlageHoraire:delete:post') as $callable)
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
			$con = Propel::getConnection(RefPlageHorairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseRefPlageHoraire:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseRefPlageHoraire:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				RefPlageHorairePeer::addInstanceToPool($this);
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

			if ($this->lnkPlageHoraireAdherentsScheduledForDeletion !== null) {
				if (!$this->lnkPlageHoraireAdherentsScheduledForDeletion->isEmpty()) {
					LnkPlageHoraireAdherentQuery::create()
						->filterByPrimaryKeys($this->lnkPlageHoraireAdherentsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->lnkPlageHoraireAdherentsScheduledForDeletion = null;
				}
			}

			if ($this->collLnkPlageHoraireAdherents !== null) {
				foreach ($this->collLnkPlageHoraireAdherents as $referrerFK) {
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

		$this->modifiedColumns[] = RefPlageHorairePeer::HORAIRE_ID;
		if (null !== $this->horaire_id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . RefPlageHorairePeer::HORAIRE_ID . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(RefPlageHorairePeer::HORAIRE_ID)) {
			$modifiedColumns[':p' . $index++]  = '`HORAIRE_ID`';
		}
		if ($this->isColumnModified(RefPlageHorairePeer::HORAIRE_PLAGE)) {
			$modifiedColumns[':p' . $index++]  = '`HORAIRE_PLAGE`';
		}

		$sql = sprintf(
			'INSERT INTO `ref_plage_horaire` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`HORAIRE_ID`':
						$stmt->bindValue($identifier, $this->horaire_id, PDO::PARAM_INT);
						break;
					case '`HORAIRE_PLAGE`':
						$stmt->bindValue($identifier, $this->horaire_plage, PDO::PARAM_STR);
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
		$this->setHoraireId($pk);

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


			if (($retval = RefPlageHorairePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collLnkPlageHoraireAdherents !== null) {
					foreach ($this->collLnkPlageHoraireAdherents as $referrerFK) {
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
		$pos = RefPlageHorairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getHoraireId();
				break;
			case 1:
				return $this->getHorairePlage();
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
		if (isset($alreadyDumpedObjects['RefPlageHoraire'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['RefPlageHoraire'][$this->getPrimaryKey()] = true;
		$keys = RefPlageHorairePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getHoraireId(),
			$keys[1] => $this->getHorairePlage(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collLnkPlageHoraireAdherents) {
				$result['LnkPlageHoraireAdherents'] = $this->collLnkPlageHoraireAdherents->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = RefPlageHorairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setHoraireId($value);
				break;
			case 1:
				$this->setHorairePlage($value);
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
		$keys = RefPlageHorairePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setHoraireId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setHorairePlage($arr[$keys[1]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(RefPlageHorairePeer::DATABASE_NAME);

		if ($this->isColumnModified(RefPlageHorairePeer::HORAIRE_ID)) $criteria->add(RefPlageHorairePeer::HORAIRE_ID, $this->horaire_id);
		if ($this->isColumnModified(RefPlageHorairePeer::HORAIRE_PLAGE)) $criteria->add(RefPlageHorairePeer::HORAIRE_PLAGE, $this->horaire_plage);

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
		$criteria = new Criteria(RefPlageHorairePeer::DATABASE_NAME);
		$criteria->add(RefPlageHorairePeer::HORAIRE_ID, $this->horaire_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getHoraireId();
	}

	/**
	 * Generic method to set the primary key (horaire_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setHoraireId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getHoraireId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of RefPlageHoraire (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setHorairePlage($this->getHorairePlage());

		if ($deepCopy && !$this->startCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);
			// store object hash to prevent cycle
			$this->startCopy = true;

			foreach ($this->getLnkPlageHoraireAdherents() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addLnkPlageHoraireAdherent($relObj->copy($deepCopy));
				}
			}

			//unflag object copy
			$this->startCopy = false;
		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setHoraireId(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     RefPlageHoraire Clone of current object.
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
	 * @return     RefPlageHorairePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new RefPlageHorairePeer();
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
		if ('LnkPlageHoraireAdherent' == $relationName) {
			return $this->initLnkPlageHoraireAdherents();
		}
	}

	/**
	 * Clears out the collLnkPlageHoraireAdherents collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addLnkPlageHoraireAdherents()
	 */
	public function clearLnkPlageHoraireAdherents()
	{
		$this->collLnkPlageHoraireAdherents = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collLnkPlageHoraireAdherents collection.
	 *
	 * By default this just sets the collLnkPlageHoraireAdherents collection to an empty array (like clearcollLnkPlageHoraireAdherents());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initLnkPlageHoraireAdherents($overrideExisting = true)
	{
		if (null !== $this->collLnkPlageHoraireAdherents && !$overrideExisting) {
			return;
		}
		$this->collLnkPlageHoraireAdherents = new PropelObjectCollection();
		$this->collLnkPlageHoraireAdherents->setModel('LnkPlageHoraireAdherent');
	}

	/**
	 * Gets an array of LnkPlageHoraireAdherent objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this RefPlageHoraire is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array LnkPlageHoraireAdherent[] List of LnkPlageHoraireAdherent objects
	 * @throws     PropelException
	 */
	public function getLnkPlageHoraireAdherents($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collLnkPlageHoraireAdherents || null !== $criteria) {
			if ($this->isNew() && null === $this->collLnkPlageHoraireAdherents) {
				// return empty collection
				$this->initLnkPlageHoraireAdherents();
			} else {
				$collLnkPlageHoraireAdherents = LnkPlageHoraireAdherentQuery::create(null, $criteria)
					->filterByRefPlageHoraire($this)
					->find($con);
				if (null !== $criteria) {
					return $collLnkPlageHoraireAdherents;
				}
				$this->collLnkPlageHoraireAdherents = $collLnkPlageHoraireAdherents;
			}
		}
		return $this->collLnkPlageHoraireAdherents;
	}

	/**
	 * Sets a collection of LnkPlageHoraireAdherent objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $lnkPlageHoraireAdherents A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setLnkPlageHoraireAdherents(PropelCollection $lnkPlageHoraireAdherents, PropelPDO $con = null)
	{
		$this->lnkPlageHoraireAdherentsScheduledForDeletion = $this->getLnkPlageHoraireAdherents(new Criteria(), $con)->diff($lnkPlageHoraireAdherents);

		foreach ($lnkPlageHoraireAdherents as $lnkPlageHoraireAdherent) {
			// Fix issue with collection modified by reference
			if ($lnkPlageHoraireAdherent->isNew()) {
				$lnkPlageHoraireAdherent->setRefPlageHoraire($this);
			}
			$this->addLnkPlageHoraireAdherent($lnkPlageHoraireAdherent);
		}

		$this->collLnkPlageHoraireAdherents = $lnkPlageHoraireAdherents;
	}

	/**
	 * Returns the number of related LnkPlageHoraireAdherent objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related LnkPlageHoraireAdherent objects.
	 * @throws     PropelException
	 */
	public function countLnkPlageHoraireAdherents(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collLnkPlageHoraireAdherents || null !== $criteria) {
			if ($this->isNew() && null === $this->collLnkPlageHoraireAdherents) {
				return 0;
			} else {
				$query = LnkPlageHoraireAdherentQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByRefPlageHoraire($this)
					->count($con);
			}
		} else {
			return count($this->collLnkPlageHoraireAdherents);
		}
	}

	/**
	 * Method called to associate a LnkPlageHoraireAdherent object to this object
	 * through the LnkPlageHoraireAdherent foreign key attribute.
	 *
	 * @param      LnkPlageHoraireAdherent $l LnkPlageHoraireAdherent
	 * @return     RefPlageHoraire The current object (for fluent API support)
	 */
	public function addLnkPlageHoraireAdherent(LnkPlageHoraireAdherent $l)
	{
		if ($this->collLnkPlageHoraireAdherents === null) {
			$this->initLnkPlageHoraireAdherents();
		}
		if (!$this->collLnkPlageHoraireAdherents->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddLnkPlageHoraireAdherent($l);
		}

		return $this;
	}

	/**
	 * @param	LnkPlageHoraireAdherent $lnkPlageHoraireAdherent The lnkPlageHoraireAdherent object to add.
	 */
	protected function doAddLnkPlageHoraireAdherent($lnkPlageHoraireAdherent)
	{
		$this->collLnkPlageHoraireAdherents[]= $lnkPlageHoraireAdherent;
		$lnkPlageHoraireAdherent->setRefPlageHoraire($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this RefPlageHoraire is new, it will return
	 * an empty collection; or if this RefPlageHoraire has previously
	 * been saved, it will retrieve related LnkPlageHoraireAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefPlageHoraire.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array LnkPlageHoraireAdherent[] List of LnkPlageHoraireAdherent objects
	 */
	public function getLnkPlageHoraireAdherentsJoinTblAdherent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = LnkPlageHoraireAdherentQuery::create(null, $criteria);
		$query->joinWith('TblAdherent', $join_behavior);

		return $this->getLnkPlageHoraireAdherents($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->horaire_id = null;
		$this->horaire_plage = null;
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
			if ($this->collLnkPlageHoraireAdherents) {
				foreach ($this->collLnkPlageHoraireAdherents as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collLnkPlageHoraireAdherents instanceof PropelCollection) {
			$this->collLnkPlageHoraireAdherents->clearIterator();
		}
		$this->collLnkPlageHoraireAdherents = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(RefPlageHorairePeer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseRefPlageHoraire:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseRefPlageHoraire
