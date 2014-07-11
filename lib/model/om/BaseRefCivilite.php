<?php


/**
 * Base class that represents a row from the 'ref_civilite' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefCivilite extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'RefCivilitePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        RefCivilitePeer
	 */
	protected static $peer;

	/**
	 * The flag var to prevent infinit loop in deep copy
	 * @var       boolean
	 */
	protected $startCopy = false;

	/**
	 * The value for the id_civilite field.
	 * @var        int
	 */
	protected $id_civilite;

	/**
	 * The value for the libelle_civilite field.
	 * @var        string
	 */
	protected $libelle_civilite;

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
	protected $tblAdherentsScheduledForDeletion = null;

	/**
	 * Get the [id_civilite] column value.
	 * 
	 * @return     int
	 */
	public function getIdCivilite()
	{
		return $this->id_civilite;
	}

	/**
	 * Get the [libelle_civilite] column value.
	 * 
	 * @return     string
	 */
	public function getLibelleCivilite()
	{
		return $this->libelle_civilite;
	}

	/**
	 * Set the value of [id_civilite] column.
	 * 
	 * @param      int $v new value
	 * @return     RefCivilite The current object (for fluent API support)
	 */
	public function setIdCivilite($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_civilite !== $v) {
			$this->id_civilite = $v;
			$this->modifiedColumns[] = RefCivilitePeer::ID_CIVILITE;
		}

		return $this;
	} // setIdCivilite()

	/**
	 * Set the value of [libelle_civilite] column.
	 * 
	 * @param      string $v new value
	 * @return     RefCivilite The current object (for fluent API support)
	 */
	public function setLibelleCivilite($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->libelle_civilite !== $v) {
			$this->libelle_civilite = $v;
			$this->modifiedColumns[] = RefCivilitePeer::LIBELLE_CIVILITE;
		}

		return $this;
	} // setLibelleCivilite()

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

			$this->id_civilite = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->libelle_civilite = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 2; // 2 = RefCivilitePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating RefCivilite object", $e);
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
			$con = Propel::getConnection(RefCivilitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = RefCivilitePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

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
			$con = Propel::getConnection(RefCivilitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = RefCiviliteQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseRefCivilite:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseRefCivilite:delete:post') as $callable)
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
			$con = Propel::getConnection(RefCivilitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseRefCivilite:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseRefCivilite:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				RefCivilitePeer::addInstanceToPool($this);
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

		$this->modifiedColumns[] = RefCivilitePeer::ID_CIVILITE;
		if (null !== $this->id_civilite) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . RefCivilitePeer::ID_CIVILITE . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(RefCivilitePeer::ID_CIVILITE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CIVILITE`';
		}
		if ($this->isColumnModified(RefCivilitePeer::LIBELLE_CIVILITE)) {
			$modifiedColumns[':p' . $index++]  = '`LIBELLE_CIVILITE`';
		}

		$sql = sprintf(
			'INSERT INTO `ref_civilite` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_CIVILITE`':
						$stmt->bindValue($identifier, $this->id_civilite, PDO::PARAM_INT);
						break;
					case '`LIBELLE_CIVILITE`':
						$stmt->bindValue($identifier, $this->libelle_civilite, PDO::PARAM_STR);
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
		$this->setIdCivilite($pk);

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


			if (($retval = RefCivilitePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
		$pos = RefCivilitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdCivilite();
				break;
			case 1:
				return $this->getLibelleCivilite();
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
		if (isset($alreadyDumpedObjects['RefCivilite'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['RefCivilite'][$this->getPrimaryKey()] = true;
		$keys = RefCivilitePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdCivilite(),
			$keys[1] => $this->getLibelleCivilite(),
		);
		if ($includeForeignObjects) {
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
		$pos = RefCivilitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdCivilite($value);
				break;
			case 1:
				$this->setLibelleCivilite($value);
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
		$keys = RefCivilitePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdCivilite($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setLibelleCivilite($arr[$keys[1]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(RefCivilitePeer::DATABASE_NAME);

		if ($this->isColumnModified(RefCivilitePeer::ID_CIVILITE)) $criteria->add(RefCivilitePeer::ID_CIVILITE, $this->id_civilite);
		if ($this->isColumnModified(RefCivilitePeer::LIBELLE_CIVILITE)) $criteria->add(RefCivilitePeer::LIBELLE_CIVILITE, $this->libelle_civilite);

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
		$criteria = new Criteria(RefCivilitePeer::DATABASE_NAME);
		$criteria->add(RefCivilitePeer::ID_CIVILITE, $this->id_civilite);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdCivilite();
	}

	/**
	 * Generic method to set the primary key (id_civilite column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdCivilite($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdCivilite();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of RefCivilite (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setLibelleCivilite($this->getLibelleCivilite());

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

			//unflag object copy
			$this->startCopy = false;
		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdCivilite(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     RefCivilite Clone of current object.
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
	 * @return     RefCivilitePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new RefCivilitePeer();
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
	 * If this RefCivilite is new, it will return
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
					->filterByRefCivilite($this)
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
				$tblAdherent->setRefCivilite($this);
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
					->filterByRefCivilite($this)
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
	 * @return     RefCivilite The current object (for fluent API support)
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
		$tblAdherent->setRefCivilite($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this RefCivilite is new, it will return
	 * an empty collection; or if this RefCivilite has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefCivilite.
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
	 * Otherwise if this RefCivilite is new, it will return
	 * an empty collection; or if this RefCivilite has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefCivilite.
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
	 * Otherwise if this RefCivilite is new, it will return
	 * an empty collection; or if this RefCivilite has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefCivilite.
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
	 * Otherwise if this RefCivilite is new, it will return
	 * an empty collection; or if this RefCivilite has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefCivilite.
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
	 * Otherwise if this RefCivilite is new, it will return
	 * an empty collection; or if this RefCivilite has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefCivilite.
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
	 * Otherwise if this RefCivilite is new, it will return
	 * an empty collection; or if this RefCivilite has previously
	 * been saved, it will retrieve related TblAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefCivilite.
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
		$this->id_civilite = null;
		$this->libelle_civilite = null;
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
		} // if ($deep)

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
		return (string) $this->exportTo(RefCivilitePeer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseRefCivilite:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseRefCivilite
