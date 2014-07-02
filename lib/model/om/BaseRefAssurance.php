<?php


/**
 * Base class that represents a row from the 'ref_assurance' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRefAssurance extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'RefAssurancePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        RefAssurancePeer
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
	 * The value for the libelle_assurance field.
	 * @var        string
	 */
	protected $libelle_assurance;

	/**
	 * The value for the prix_assurance field.
	 * @var        double
	 */
	protected $prix_assurance;

	/**
	 * @var        array TblAssurance[] Collection to store aggregation of TblAssurance objects.
	 */
	protected $collTblAssurances;

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
	protected $tblAssurancesScheduledForDeletion = null;

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
	 * Get the [libelle_assurance] column value.
	 * 
	 * @return     string
	 */
	public function getLibelleAssurance()
	{
		return $this->libelle_assurance;
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
	 * Set the value of [assurance_id] column.
	 * 
	 * @param      int $v new value
	 * @return     RefAssurance The current object (for fluent API support)
	 */
	public function setAssuranceId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->assurance_id !== $v) {
			$this->assurance_id = $v;
			$this->modifiedColumns[] = RefAssurancePeer::ASSURANCE_ID;
		}

		return $this;
	} // setAssuranceId()

	/**
	 * Set the value of [libelle_assurance] column.
	 * 
	 * @param      string $v new value
	 * @return     RefAssurance The current object (for fluent API support)
	 */
	public function setLibelleAssurance($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->libelle_assurance !== $v) {
			$this->libelle_assurance = $v;
			$this->modifiedColumns[] = RefAssurancePeer::LIBELLE_ASSURANCE;
		}

		return $this;
	} // setLibelleAssurance()

	/**
	 * Set the value of [prix_assurance] column.
	 * 
	 * @param      double $v new value
	 * @return     RefAssurance The current object (for fluent API support)
	 */
	public function setPrixAssurance($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->prix_assurance !== $v) {
			$this->prix_assurance = $v;
			$this->modifiedColumns[] = RefAssurancePeer::PRIX_ASSURANCE;
		}

		return $this;
	} // setPrixAssurance()

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

			$this->assurance_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->libelle_assurance = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->prix_assurance = ($row[$startcol + 2] !== null) ? (double) $row[$startcol + 2] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 3; // 3 = RefAssurancePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating RefAssurance object", $e);
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
			$con = Propel::getConnection(RefAssurancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = RefAssurancePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collTblAssurances = null;

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
			$con = Propel::getConnection(RefAssurancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = RefAssuranceQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseRefAssurance:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseRefAssurance:delete:post') as $callable)
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
			$con = Propel::getConnection(RefAssurancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseRefAssurance:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseRefAssurance:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				RefAssurancePeer::addInstanceToPool($this);
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

			if ($this->tblAssurancesScheduledForDeletion !== null) {
				if (!$this->tblAssurancesScheduledForDeletion->isEmpty()) {
					TblAssuranceQuery::create()
						->filterByPrimaryKeys($this->tblAssurancesScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->tblAssurancesScheduledForDeletion = null;
				}
			}

			if ($this->collTblAssurances !== null) {
				foreach ($this->collTblAssurances as $referrerFK) {
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

		$this->modifiedColumns[] = RefAssurancePeer::ASSURANCE_ID;
		if (null !== $this->assurance_id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . RefAssurancePeer::ASSURANCE_ID . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(RefAssurancePeer::ASSURANCE_ID)) {
			$modifiedColumns[':p' . $index++]  = '`ASSURANCE_ID`';
		}
		if ($this->isColumnModified(RefAssurancePeer::LIBELLE_ASSURANCE)) {
			$modifiedColumns[':p' . $index++]  = '`LIBELLE_ASSURANCE`';
		}
		if ($this->isColumnModified(RefAssurancePeer::PRIX_ASSURANCE)) {
			$modifiedColumns[':p' . $index++]  = '`PRIX_ASSURANCE`';
		}

		$sql = sprintf(
			'INSERT INTO `ref_assurance` (%s) VALUES (%s)',
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
					case '`LIBELLE_ASSURANCE`':
						$stmt->bindValue($identifier, $this->libelle_assurance, PDO::PARAM_STR);
						break;
					case '`PRIX_ASSURANCE`':
						$stmt->bindValue($identifier, $this->prix_assurance, PDO::PARAM_STR);
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


			if (($retval = RefAssurancePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTblAssurances !== null) {
					foreach ($this->collTblAssurances as $referrerFK) {
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
		$pos = RefAssurancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getLibelleAssurance();
				break;
			case 2:
				return $this->getPrixAssurance();
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
		if (isset($alreadyDumpedObjects['RefAssurance'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['RefAssurance'][$this->getPrimaryKey()] = true;
		$keys = RefAssurancePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getAssuranceId(),
			$keys[1] => $this->getLibelleAssurance(),
			$keys[2] => $this->getPrixAssurance(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collTblAssurances) {
				$result['TblAssurances'] = $this->collTblAssurances->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = RefAssurancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setLibelleAssurance($value);
				break;
			case 2:
				$this->setPrixAssurance($value);
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
		$keys = RefAssurancePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setAssuranceId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setLibelleAssurance($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPrixAssurance($arr[$keys[2]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(RefAssurancePeer::DATABASE_NAME);

		if ($this->isColumnModified(RefAssurancePeer::ASSURANCE_ID)) $criteria->add(RefAssurancePeer::ASSURANCE_ID, $this->assurance_id);
		if ($this->isColumnModified(RefAssurancePeer::LIBELLE_ASSURANCE)) $criteria->add(RefAssurancePeer::LIBELLE_ASSURANCE, $this->libelle_assurance);
		if ($this->isColumnModified(RefAssurancePeer::PRIX_ASSURANCE)) $criteria->add(RefAssurancePeer::PRIX_ASSURANCE, $this->prix_assurance);

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
		$criteria = new Criteria(RefAssurancePeer::DATABASE_NAME);
		$criteria->add(RefAssurancePeer::ASSURANCE_ID, $this->assurance_id);

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
	 * @param      object $copyObj An object of RefAssurance (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setLibelleAssurance($this->getLibelleAssurance());
		$copyObj->setPrixAssurance($this->getPrixAssurance());

		if ($deepCopy && !$this->startCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);
			// store object hash to prevent cycle
			$this->startCopy = true;

			foreach ($this->getTblAssurances() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTblAssurance($relObj->copy($deepCopy));
				}
			}

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
	 * @return     RefAssurance Clone of current object.
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
	 * @return     RefAssurancePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new RefAssurancePeer();
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
		if ('TblAssurance' == $relationName) {
			return $this->initTblAssurances();
		}
	}

	/**
	 * Clears out the collTblAssurances collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTblAssurances()
	 */
	public function clearTblAssurances()
	{
		$this->collTblAssurances = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTblAssurances collection.
	 *
	 * By default this just sets the collTblAssurances collection to an empty array (like clearcollTblAssurances());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initTblAssurances($overrideExisting = true)
	{
		if (null !== $this->collTblAssurances && !$overrideExisting) {
			return;
		}
		$this->collTblAssurances = new PropelObjectCollection();
		$this->collTblAssurances->setModel('TblAssurance');
	}

	/**
	 * Gets an array of TblAssurance objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this RefAssurance is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array TblAssurance[] List of TblAssurance objects
	 * @throws     PropelException
	 */
	public function getTblAssurances($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collTblAssurances || null !== $criteria) {
			if ($this->isNew() && null === $this->collTblAssurances) {
				// return empty collection
				$this->initTblAssurances();
			} else {
				$collTblAssurances = TblAssuranceQuery::create(null, $criteria)
					->filterByRefAssurance($this)
					->find($con);
				if (null !== $criteria) {
					return $collTblAssurances;
				}
				$this->collTblAssurances = $collTblAssurances;
			}
		}
		return $this->collTblAssurances;
	}

	/**
	 * Sets a collection of TblAssurance objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $tblAssurances A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setTblAssurances(PropelCollection $tblAssurances, PropelPDO $con = null)
	{
		$this->tblAssurancesScheduledForDeletion = $this->getTblAssurances(new Criteria(), $con)->diff($tblAssurances);

		foreach ($tblAssurances as $tblAssurance) {
			// Fix issue with collection modified by reference
			if ($tblAssurance->isNew()) {
				$tblAssurance->setRefAssurance($this);
			}
			$this->addTblAssurance($tblAssurance);
		}

		$this->collTblAssurances = $tblAssurances;
	}

	/**
	 * Returns the number of related TblAssurance objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related TblAssurance objects.
	 * @throws     PropelException
	 */
	public function countTblAssurances(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collTblAssurances || null !== $criteria) {
			if ($this->isNew() && null === $this->collTblAssurances) {
				return 0;
			} else {
				$query = TblAssuranceQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByRefAssurance($this)
					->count($con);
			}
		} else {
			return count($this->collTblAssurances);
		}
	}

	/**
	 * Method called to associate a TblAssurance object to this object
	 * through the TblAssurance foreign key attribute.
	 *
	 * @param      TblAssurance $l TblAssurance
	 * @return     RefAssurance The current object (for fluent API support)
	 */
	public function addTblAssurance(TblAssurance $l)
	{
		if ($this->collTblAssurances === null) {
			$this->initTblAssurances();
		}
		if (!$this->collTblAssurances->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddTblAssurance($l);
		}

		return $this;
	}

	/**
	 * @param	TblAssurance $tblAssurance The tblAssurance object to add.
	 */
	protected function doAddTblAssurance($tblAssurance)
	{
		$this->collTblAssurances[]= $tblAssurance;
		$tblAssurance->setRefAssurance($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this RefAssurance is new, it will return
	 * an empty collection; or if this RefAssurance has previously
	 * been saved, it will retrieve related TblAssurances from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in RefAssurance.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAssurance[] List of TblAssurance objects
	 */
	public function getTblAssurancesJoinTblAdherent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAssuranceQuery::create(null, $criteria);
		$query->joinWith('TblAdherent', $join_behavior);

		return $this->getTblAssurances($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->assurance_id = null;
		$this->libelle_assurance = null;
		$this->prix_assurance = null;
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
			if ($this->collTblAssurances) {
				foreach ($this->collTblAssurances as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collTblAssurances instanceof PropelCollection) {
			$this->collTblAssurances->clearIterator();
		}
		$this->collTblAssurances = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(RefAssurancePeer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseRefAssurance:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseRefAssurance
