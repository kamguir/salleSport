<?php


/**
 * Base class that represents a row from the 'tbl_adherent' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTblAdherent extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'TblAdherentPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        TblAdherentPeer
	 */
	protected static $peer;

	/**
	 * The flag var to prevent infinit loop in deep copy
	 * @var       boolean
	 */
	protected $startCopy = false;

	/**
	 * The value for the id_adherent field.
	 * @var        int
	 */
	protected $id_adherent;

	/**
	 * The value for the entraineur_id field.
	 * @var        int
	 */
	protected $entraineur_id;

	/**
	 * The value for the cin_adherent field.
	 * @var        string
	 */
	protected $cin_adherent;

	/**
	 * The value for the nom_adherent field.
	 * @var        string
	 */
	protected $nom_adherent;

	/**
	 * The value for the prenom_adherent field.
	 * @var        string
	 */
	protected $prenom_adherent;

	/**
	 * The value for the id_civilite field.
	 * @var        int
	 */
	protected $id_civilite;

	/**
	 * The value for the id_situation field.
	 * @var        int
	 */
	protected $id_situation;

	/**
	 * The value for the id_type_adherent field.
	 * @var        int
	 */
	protected $id_type_adherent;

	/**
	 * The value for the niveau_adherent_id field.
	 * @var        int
	 */
	protected $niveau_adherent_id;

	/**
	 * The value for the id_type_sport field.
	 * @var        int
	 */
	protected $id_type_sport;

	/**
	 * The value for the age_adherent field.
	 * @var        int
	 */
	protected $age_adherent;

	/**
	 * The value for the num_tel field.
	 * @var        int
	 */
	protected $num_tel;

	/**
	 * The value for the adresse_adherent field.
	 * @var        string
	 */
	protected $adresse_adherent;

	/**
	 * The value for the image_adherent field.
	 * @var        string
	 */
	protected $image_adherent;

	/**
	 * The value for the date_adhesion field.
	 * @var        string
	 */
	protected $date_adhesion;

	/**
	 * The value for the seance_horaire_id field.
	 * @var        int
	 */
	protected $seance_horaire_id;

	/**
	 * The value for the updated_at field.
	 * @var        string
	 */
	protected $updated_at;

	/**
	 * The value for the deleted_at field.
	 * @var        string
	 */
	protected $deleted_at;

	/**
	 * @var        TblAdherent
	 */
	protected $aTblAdherentRelatedByEntraineurId;

	/**
	 * @var        RefCivilite
	 */
	protected $aRefCivilite;

	/**
	 * @var        RefSituation
	 */
	protected $aRefSituation;

	/**
	 * @var        RefTypeAdherent
	 */
	protected $aRefTypeAdherent;

	/**
	 * @var        RefNiveauAdherent
	 */
	protected $aRefNiveauAdherent;

	/**
	 * @var        RefTypeSport
	 */
	protected $aRefTypeSport;

	/**
	 * @var        RefSeanceHoraire
	 */
	protected $aRefSeanceHoraire;

	/**
	 * @var        array LnkAdherentCompetition[] Collection to store aggregation of LnkAdherentCompetition objects.
	 */
	protected $collLnkAdherentCompetitions;

	/**
	 * @var        array LnkJourEntrainementAdherent[] Collection to store aggregation of LnkJourEntrainementAdherent objects.
	 */
	protected $collLnkJourEntrainementAdherents;

	/**
	 * @var        array TblAdherent[] Collection to store aggregation of TblAdherent objects.
	 */
	protected $collTblAdherentsRelatedByIdAdherent;

	/**
	 * @var        array TblAssurance[] Collection to store aggregation of TblAssurance objects.
	 */
	protected $collTblAssurances;

	/**
	 * @var        array TblCeinture[] Collection to store aggregation of TblCeinture objects.
	 */
	protected $collTblCeintures;

	/**
	 * @var        array TblFacture[] Collection to store aggregation of TblFacture objects.
	 */
	protected $collTblFactures;

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
	protected $lnkAdherentCompetitionsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $lnkJourEntrainementAdherentsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $tblAdherentsRelatedByIdAdherentScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $tblAssurancesScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $tblCeinturesScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $tblFacturesScheduledForDeletion = null;

	/**
	 * Get the [id_adherent] column value.
	 * 
	 * @return     int
	 */
	public function getIdAdherent()
	{
		return $this->id_adherent;
	}

	/**
	 * Get the [entraineur_id] column value.
	 * 
	 * @return     int
	 */
	public function getEntraineurId()
	{
		return $this->entraineur_id;
	}

	/**
	 * Get the [cin_adherent] column value.
	 * 
	 * @return     string
	 */
	public function getCinAdherent()
	{
		return $this->cin_adherent;
	}

	/**
	 * Get the [nom_adherent] column value.
	 * 
	 * @return     string
	 */
	public function getNomAdherent()
	{
		return $this->nom_adherent;
	}

	/**
	 * Get the [prenom_adherent] column value.
	 * 
	 * @return     string
	 */
	public function getPrenomAdherent()
	{
		return $this->prenom_adherent;
	}

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
	 * Get the [id_situation] column value.
	 * 
	 * @return     int
	 */
	public function getIdSituation()
	{
		return $this->id_situation;
	}

	/**
	 * Get the [id_type_adherent] column value.
	 * 
	 * @return     int
	 */
	public function getIdTypeAdherent()
	{
		return $this->id_type_adherent;
	}

	/**
	 * Get the [niveau_adherent_id] column value.
	 * 
	 * @return     int
	 */
	public function getNiveauAdherentId()
	{
		return $this->niveau_adherent_id;
	}

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
	 * Get the [age_adherent] column value.
	 * 
	 * @return     int
	 */
	public function getAgeAdherent()
	{
		return $this->age_adherent;
	}

	/**
	 * Get the [num_tel] column value.
	 * 
	 * @return     int
	 */
	public function getNumTel()
	{
		return $this->num_tel;
	}

	/**
	 * Get the [adresse_adherent] column value.
	 * 
	 * @return     string
	 */
	public function getAdresseAdherent()
	{
		return $this->adresse_adherent;
	}

	/**
	 * Get the [image_adherent] column value.
	 * 
	 * @return     string
	 */
	public function getImageAdherent()
	{
		return $this->image_adherent;
	}

	/**
	 * Get the [optionally formatted] temporal [date_adhesion] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateAdhesion($format = 'Y-m-d H:i:s')
	{
		if ($this->date_adhesion === null) {
			return null;
		}


		if ($this->date_adhesion === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_adhesion);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_adhesion, true), $x);
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
	 * Get the [seance_horaire_id] column value.
	 * 
	 * @return     int
	 */
	public function getSeanceHoraireId()
	{
		return $this->seance_horaire_id;
	}

	/**
	 * Get the [optionally formatted] temporal [updated_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getUpdatedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->updated_at === null) {
			return null;
		}


		if ($this->updated_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->updated_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
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
	 * Set the value of [id_adherent] column.
	 * 
	 * @param      int $v new value
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setIdAdherent($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_adherent !== $v) {
			$this->id_adherent = $v;
			$this->modifiedColumns[] = TblAdherentPeer::ID_ADHERENT;
		}

		return $this;
	} // setIdAdherent()

	/**
	 * Set the value of [entraineur_id] column.
	 * 
	 * @param      int $v new value
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setEntraineurId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->entraineur_id !== $v) {
			$this->entraineur_id = $v;
			$this->modifiedColumns[] = TblAdherentPeer::ENTRAINEUR_ID;
		}

		if ($this->aTblAdherentRelatedByEntraineurId !== null && $this->aTblAdherentRelatedByEntraineurId->getIdAdherent() !== $v) {
			$this->aTblAdherentRelatedByEntraineurId = null;
		}

		return $this;
	} // setEntraineurId()

	/**
	 * Set the value of [cin_adherent] column.
	 * 
	 * @param      string $v new value
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setCinAdherent($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->cin_adherent !== $v) {
			$this->cin_adherent = $v;
			$this->modifiedColumns[] = TblAdherentPeer::CIN_ADHERENT;
		}

		return $this;
	} // setCinAdherent()

	/**
	 * Set the value of [nom_adherent] column.
	 * 
	 * @param      string $v new value
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setNomAdherent($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nom_adherent !== $v) {
			$this->nom_adherent = $v;
			$this->modifiedColumns[] = TblAdherentPeer::NOM_ADHERENT;
		}

		return $this;
	} // setNomAdherent()

	/**
	 * Set the value of [prenom_adherent] column.
	 * 
	 * @param      string $v new value
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setPrenomAdherent($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->prenom_adherent !== $v) {
			$this->prenom_adherent = $v;
			$this->modifiedColumns[] = TblAdherentPeer::PRENOM_ADHERENT;
		}

		return $this;
	} // setPrenomAdherent()

	/**
	 * Set the value of [id_civilite] column.
	 * 
	 * @param      int $v new value
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setIdCivilite($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_civilite !== $v) {
			$this->id_civilite = $v;
			$this->modifiedColumns[] = TblAdherentPeer::ID_CIVILITE;
		}

		if ($this->aRefCivilite !== null && $this->aRefCivilite->getIdCivilite() !== $v) {
			$this->aRefCivilite = null;
		}

		return $this;
	} // setIdCivilite()

	/**
	 * Set the value of [id_situation] column.
	 * 
	 * @param      int $v new value
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setIdSituation($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_situation !== $v) {
			$this->id_situation = $v;
			$this->modifiedColumns[] = TblAdherentPeer::ID_SITUATION;
		}

		if ($this->aRefSituation !== null && $this->aRefSituation->getIdSituation() !== $v) {
			$this->aRefSituation = null;
		}

		return $this;
	} // setIdSituation()

	/**
	 * Set the value of [id_type_adherent] column.
	 * 
	 * @param      int $v new value
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setIdTypeAdherent($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_type_adherent !== $v) {
			$this->id_type_adherent = $v;
			$this->modifiedColumns[] = TblAdherentPeer::ID_TYPE_ADHERENT;
		}

		if ($this->aRefTypeAdherent !== null && $this->aRefTypeAdherent->getIdTypeAdherent() !== $v) {
			$this->aRefTypeAdherent = null;
		}

		return $this;
	} // setIdTypeAdherent()

	/**
	 * Set the value of [niveau_adherent_id] column.
	 * 
	 * @param      int $v new value
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setNiveauAdherentId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->niveau_adherent_id !== $v) {
			$this->niveau_adherent_id = $v;
			$this->modifiedColumns[] = TblAdherentPeer::NIVEAU_ADHERENT_ID;
		}

		if ($this->aRefNiveauAdherent !== null && $this->aRefNiveauAdherent->getNiveauAdherentId() !== $v) {
			$this->aRefNiveauAdherent = null;
		}

		return $this;
	} // setNiveauAdherentId()

	/**
	 * Set the value of [id_type_sport] column.
	 * 
	 * @param      int $v new value
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setIdTypeSport($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id_type_sport !== $v) {
			$this->id_type_sport = $v;
			$this->modifiedColumns[] = TblAdherentPeer::ID_TYPE_SPORT;
		}

		if ($this->aRefTypeSport !== null && $this->aRefTypeSport->getIdTypeSport() !== $v) {
			$this->aRefTypeSport = null;
		}

		return $this;
	} // setIdTypeSport()

	/**
	 * Set the value of [age_adherent] column.
	 * 
	 * @param      int $v new value
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setAgeAdherent($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->age_adherent !== $v) {
			$this->age_adherent = $v;
			$this->modifiedColumns[] = TblAdherentPeer::AGE_ADHERENT;
		}

		return $this;
	} // setAgeAdherent()

	/**
	 * Set the value of [num_tel] column.
	 * 
	 * @param      int $v new value
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setNumTel($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->num_tel !== $v) {
			$this->num_tel = $v;
			$this->modifiedColumns[] = TblAdherentPeer::NUM_TEL;
		}

		return $this;
	} // setNumTel()

	/**
	 * Set the value of [adresse_adherent] column.
	 * 
	 * @param      string $v new value
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setAdresseAdherent($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->adresse_adherent !== $v) {
			$this->adresse_adherent = $v;
			$this->modifiedColumns[] = TblAdherentPeer::ADRESSE_ADHERENT;
		}

		return $this;
	} // setAdresseAdherent()

	/**
	 * Set the value of [image_adherent] column.
	 * 
	 * @param      string $v new value
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setImageAdherent($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->image_adherent !== $v) {
			$this->image_adherent = $v;
			$this->modifiedColumns[] = TblAdherentPeer::IMAGE_ADHERENT;
		}

		return $this;
	} // setImageAdherent()

	/**
	 * Sets the value of [date_adhesion] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setDateAdhesion($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_adhesion !== null || $dt !== null) {
			$currentDateAsString = ($this->date_adhesion !== null && $tmpDt = new DateTime($this->date_adhesion)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_adhesion = $newDateAsString;
				$this->modifiedColumns[] = TblAdherentPeer::DATE_ADHESION;
			}
		} // if either are not null

		return $this;
	} // setDateAdhesion()

	/**
	 * Set the value of [seance_horaire_id] column.
	 * 
	 * @param      int $v new value
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setSeanceHoraireId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->seance_horaire_id !== $v) {
			$this->seance_horaire_id = $v;
			$this->modifiedColumns[] = TblAdherentPeer::SEANCE_HORAIRE_ID;
		}

		if ($this->aRefSeanceHoraire !== null && $this->aRefSeanceHoraire->getSeanceHoraireId() !== $v) {
			$this->aRefSeanceHoraire = null;
		}

		return $this;
	} // setSeanceHoraireId()

	/**
	 * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setUpdatedAt($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->updated_at !== null || $dt !== null) {
			$currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->updated_at = $newDateAsString;
				$this->modifiedColumns[] = TblAdherentPeer::UPDATED_AT;
			}
		} // if either are not null

		return $this;
	} // setUpdatedAt()

	/**
	 * Sets the value of [deleted_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function setDeletedAt($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->deleted_at !== null || $dt !== null) {
			$currentDateAsString = ($this->deleted_at !== null && $tmpDt = new DateTime($this->deleted_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->deleted_at = $newDateAsString;
				$this->modifiedColumns[] = TblAdherentPeer::DELETED_AT;
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

			$this->id_adherent = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->entraineur_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->cin_adherent = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->nom_adherent = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->prenom_adherent = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->id_civilite = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->id_situation = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->id_type_adherent = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->niveau_adherent_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->id_type_sport = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->age_adherent = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->num_tel = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->adresse_adherent = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->image_adherent = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->date_adhesion = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->seance_horaire_id = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
			$this->updated_at = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->deleted_at = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 18; // 18 = TblAdherentPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating TblAdherent object", $e);
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

		if ($this->aTblAdherentRelatedByEntraineurId !== null && $this->entraineur_id !== $this->aTblAdherentRelatedByEntraineurId->getIdAdherent()) {
			$this->aTblAdherentRelatedByEntraineurId = null;
		}
		if ($this->aRefCivilite !== null && $this->id_civilite !== $this->aRefCivilite->getIdCivilite()) {
			$this->aRefCivilite = null;
		}
		if ($this->aRefSituation !== null && $this->id_situation !== $this->aRefSituation->getIdSituation()) {
			$this->aRefSituation = null;
		}
		if ($this->aRefTypeAdherent !== null && $this->id_type_adherent !== $this->aRefTypeAdherent->getIdTypeAdherent()) {
			$this->aRefTypeAdherent = null;
		}
		if ($this->aRefNiveauAdherent !== null && $this->niveau_adherent_id !== $this->aRefNiveauAdherent->getNiveauAdherentId()) {
			$this->aRefNiveauAdherent = null;
		}
		if ($this->aRefTypeSport !== null && $this->id_type_sport !== $this->aRefTypeSport->getIdTypeSport()) {
			$this->aRefTypeSport = null;
		}
		if ($this->aRefSeanceHoraire !== null && $this->seance_horaire_id !== $this->aRefSeanceHoraire->getSeanceHoraireId()) {
			$this->aRefSeanceHoraire = null;
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
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = TblAdherentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aTblAdherentRelatedByEntraineurId = null;
			$this->aRefCivilite = null;
			$this->aRefSituation = null;
			$this->aRefTypeAdherent = null;
			$this->aRefNiveauAdherent = null;
			$this->aRefTypeSport = null;
			$this->aRefSeanceHoraire = null;
			$this->collLnkAdherentCompetitions = null;

			$this->collLnkJourEntrainementAdherents = null;

			$this->collTblAdherentsRelatedByIdAdherent = null;

			$this->collTblAssurances = null;

			$this->collTblCeintures = null;

			$this->collTblFactures = null;

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
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = TblAdherentQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// soft_delete behavior
			if (!empty($ret) && TblAdherentQuery::isSoftDeleteEnabled()) {
				$this->setDeletedAt(time());
				$this->save($con);
				$this->postDelete($con);
				$con->commit();
				TblAdherentPeer::removeInstanceFromPool($this);
				return;
			}

			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseTblAdherent:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseTblAdherent:delete:post') as $callable)
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
			$con = Propel::getConnection(TblAdherentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseTblAdherent:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			// symfony_timestampable behavior
			if ($this->isModified() && !$this->isColumnModified(TblAdherentPeer::UPDATED_AT) && !$this->isColumnModified(TblAdherentPeer::DELETED_AT))
			{
				$this->setUpdatedAt(time());
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
				foreach (sfMixer::getCallables('BaseTblAdherent:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				TblAdherentPeer::addInstanceToPool($this);
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

			if ($this->aTblAdherentRelatedByEntraineurId !== null) {
				if ($this->aTblAdherentRelatedByEntraineurId->isModified() || $this->aTblAdherentRelatedByEntraineurId->isNew()) {
					$affectedRows += $this->aTblAdherentRelatedByEntraineurId->save($con);
				}
				$this->setTblAdherentRelatedByEntraineurId($this->aTblAdherentRelatedByEntraineurId);
			}

			if ($this->aRefCivilite !== null) {
				if ($this->aRefCivilite->isModified() || $this->aRefCivilite->isNew()) {
					$affectedRows += $this->aRefCivilite->save($con);
				}
				$this->setRefCivilite($this->aRefCivilite);
			}

			if ($this->aRefSituation !== null) {
				if ($this->aRefSituation->isModified() || $this->aRefSituation->isNew()) {
					$affectedRows += $this->aRefSituation->save($con);
				}
				$this->setRefSituation($this->aRefSituation);
			}

			if ($this->aRefTypeAdherent !== null) {
				if ($this->aRefTypeAdherent->isModified() || $this->aRefTypeAdherent->isNew()) {
					$affectedRows += $this->aRefTypeAdherent->save($con);
				}
				$this->setRefTypeAdherent($this->aRefTypeAdherent);
			}

			if ($this->aRefNiveauAdherent !== null) {
				if ($this->aRefNiveauAdherent->isModified() || $this->aRefNiveauAdherent->isNew()) {
					$affectedRows += $this->aRefNiveauAdherent->save($con);
				}
				$this->setRefNiveauAdherent($this->aRefNiveauAdherent);
			}

			if ($this->aRefTypeSport !== null) {
				if ($this->aRefTypeSport->isModified() || $this->aRefTypeSport->isNew()) {
					$affectedRows += $this->aRefTypeSport->save($con);
				}
				$this->setRefTypeSport($this->aRefTypeSport);
			}

			if ($this->aRefSeanceHoraire !== null) {
				if ($this->aRefSeanceHoraire->isModified() || $this->aRefSeanceHoraire->isNew()) {
					$affectedRows += $this->aRefSeanceHoraire->save($con);
				}
				$this->setRefSeanceHoraire($this->aRefSeanceHoraire);
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

			if ($this->lnkAdherentCompetitionsScheduledForDeletion !== null) {
				if (!$this->lnkAdherentCompetitionsScheduledForDeletion->isEmpty()) {
					LnkAdherentCompetitionQuery::create()
						->filterByPrimaryKeys($this->lnkAdherentCompetitionsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->lnkAdherentCompetitionsScheduledForDeletion = null;
				}
			}

			if ($this->collLnkAdherentCompetitions !== null) {
				foreach ($this->collLnkAdherentCompetitions as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->lnkJourEntrainementAdherentsScheduledForDeletion !== null) {
				if (!$this->lnkJourEntrainementAdherentsScheduledForDeletion->isEmpty()) {
					LnkJourEntrainementAdherentQuery::create()
						->filterByPrimaryKeys($this->lnkJourEntrainementAdherentsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->lnkJourEntrainementAdherentsScheduledForDeletion = null;
				}
			}

			if ($this->collLnkJourEntrainementAdherents !== null) {
				foreach ($this->collLnkJourEntrainementAdherents as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->tblAdherentsRelatedByIdAdherentScheduledForDeletion !== null) {
				if (!$this->tblAdherentsRelatedByIdAdherentScheduledForDeletion->isEmpty()) {
					TblAdherentQuery::create()
						->filterByPrimaryKeys($this->tblAdherentsRelatedByIdAdherentScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->tblAdherentsRelatedByIdAdherentScheduledForDeletion = null;
				}
			}

			if ($this->collTblAdherentsRelatedByIdAdherent !== null) {
				foreach ($this->collTblAdherentsRelatedByIdAdherent as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
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

			if ($this->tblCeinturesScheduledForDeletion !== null) {
				if (!$this->tblCeinturesScheduledForDeletion->isEmpty()) {
					TblCeintureQuery::create()
						->filterByPrimaryKeys($this->tblCeinturesScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->tblCeinturesScheduledForDeletion = null;
				}
			}

			if ($this->collTblCeintures !== null) {
				foreach ($this->collTblCeintures as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->tblFacturesScheduledForDeletion !== null) {
				if (!$this->tblFacturesScheduledForDeletion->isEmpty()) {
					TblFactureQuery::create()
						->filterByPrimaryKeys($this->tblFacturesScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->tblFacturesScheduledForDeletion = null;
				}
			}

			if ($this->collTblFactures !== null) {
				foreach ($this->collTblFactures as $referrerFK) {
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

		$this->modifiedColumns[] = TblAdherentPeer::ID_ADHERENT;
		if (null !== $this->id_adherent) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . TblAdherentPeer::ID_ADHERENT . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(TblAdherentPeer::ID_ADHERENT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_ADHERENT`';
		}
		if ($this->isColumnModified(TblAdherentPeer::ENTRAINEUR_ID)) {
			$modifiedColumns[':p' . $index++]  = '`ENTRAINEUR_ID`';
		}
		if ($this->isColumnModified(TblAdherentPeer::CIN_ADHERENT)) {
			$modifiedColumns[':p' . $index++]  = '`CIN_ADHERENT`';
		}
		if ($this->isColumnModified(TblAdherentPeer::NOM_ADHERENT)) {
			$modifiedColumns[':p' . $index++]  = '`NOM_ADHERENT`';
		}
		if ($this->isColumnModified(TblAdherentPeer::PRENOM_ADHERENT)) {
			$modifiedColumns[':p' . $index++]  = '`PRENOM_ADHERENT`';
		}
		if ($this->isColumnModified(TblAdherentPeer::ID_CIVILITE)) {
			$modifiedColumns[':p' . $index++]  = '`ID_CIVILITE`';
		}
		if ($this->isColumnModified(TblAdherentPeer::ID_SITUATION)) {
			$modifiedColumns[':p' . $index++]  = '`ID_SITUATION`';
		}
		if ($this->isColumnModified(TblAdherentPeer::ID_TYPE_ADHERENT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_TYPE_ADHERENT`';
		}
		if ($this->isColumnModified(TblAdherentPeer::NIVEAU_ADHERENT_ID)) {
			$modifiedColumns[':p' . $index++]  = '`NIVEAU_ADHERENT_ID`';
		}
		if ($this->isColumnModified(TblAdherentPeer::ID_TYPE_SPORT)) {
			$modifiedColumns[':p' . $index++]  = '`ID_TYPE_SPORT`';
		}
		if ($this->isColumnModified(TblAdherentPeer::AGE_ADHERENT)) {
			$modifiedColumns[':p' . $index++]  = '`AGE_ADHERENT`';
		}
		if ($this->isColumnModified(TblAdherentPeer::NUM_TEL)) {
			$modifiedColumns[':p' . $index++]  = '`NUM_TEL`';
		}
		if ($this->isColumnModified(TblAdherentPeer::ADRESSE_ADHERENT)) {
			$modifiedColumns[':p' . $index++]  = '`ADRESSE_ADHERENT`';
		}
		if ($this->isColumnModified(TblAdherentPeer::IMAGE_ADHERENT)) {
			$modifiedColumns[':p' . $index++]  = '`IMAGE_ADHERENT`';
		}
		if ($this->isColumnModified(TblAdherentPeer::DATE_ADHESION)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_ADHESION`';
		}
		if ($this->isColumnModified(TblAdherentPeer::SEANCE_HORAIRE_ID)) {
			$modifiedColumns[':p' . $index++]  = '`SEANCE_HORAIRE_ID`';
		}
		if ($this->isColumnModified(TblAdherentPeer::UPDATED_AT)) {
			$modifiedColumns[':p' . $index++]  = '`UPDATED_AT`';
		}
		if ($this->isColumnModified(TblAdherentPeer::DELETED_AT)) {
			$modifiedColumns[':p' . $index++]  = '`DELETED_AT`';
		}

		$sql = sprintf(
			'INSERT INTO `tbl_adherent` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID_ADHERENT`':
						$stmt->bindValue($identifier, $this->id_adherent, PDO::PARAM_INT);
						break;
					case '`ENTRAINEUR_ID`':
						$stmt->bindValue($identifier, $this->entraineur_id, PDO::PARAM_INT);
						break;
					case '`CIN_ADHERENT`':
						$stmt->bindValue($identifier, $this->cin_adherent, PDO::PARAM_STR);
						break;
					case '`NOM_ADHERENT`':
						$stmt->bindValue($identifier, $this->nom_adherent, PDO::PARAM_STR);
						break;
					case '`PRENOM_ADHERENT`':
						$stmt->bindValue($identifier, $this->prenom_adherent, PDO::PARAM_STR);
						break;
					case '`ID_CIVILITE`':
						$stmt->bindValue($identifier, $this->id_civilite, PDO::PARAM_INT);
						break;
					case '`ID_SITUATION`':
						$stmt->bindValue($identifier, $this->id_situation, PDO::PARAM_INT);
						break;
					case '`ID_TYPE_ADHERENT`':
						$stmt->bindValue($identifier, $this->id_type_adherent, PDO::PARAM_INT);
						break;
					case '`NIVEAU_ADHERENT_ID`':
						$stmt->bindValue($identifier, $this->niveau_adherent_id, PDO::PARAM_INT);
						break;
					case '`ID_TYPE_SPORT`':
						$stmt->bindValue($identifier, $this->id_type_sport, PDO::PARAM_INT);
						break;
					case '`AGE_ADHERENT`':
						$stmt->bindValue($identifier, $this->age_adherent, PDO::PARAM_INT);
						break;
					case '`NUM_TEL`':
						$stmt->bindValue($identifier, $this->num_tel, PDO::PARAM_INT);
						break;
					case '`ADRESSE_ADHERENT`':
						$stmt->bindValue($identifier, $this->adresse_adherent, PDO::PARAM_STR);
						break;
					case '`IMAGE_ADHERENT`':
						$stmt->bindValue($identifier, $this->image_adherent, PDO::PARAM_STR);
						break;
					case '`DATE_ADHESION`':
						$stmt->bindValue($identifier, $this->date_adhesion, PDO::PARAM_STR);
						break;
					case '`SEANCE_HORAIRE_ID`':
						$stmt->bindValue($identifier, $this->seance_horaire_id, PDO::PARAM_INT);
						break;
					case '`UPDATED_AT`':
						$stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
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
		$this->setIdAdherent($pk);

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

			if ($this->aTblAdherentRelatedByEntraineurId !== null) {
				if (!$this->aTblAdherentRelatedByEntraineurId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTblAdherentRelatedByEntraineurId->getValidationFailures());
				}
			}

			if ($this->aRefCivilite !== null) {
				if (!$this->aRefCivilite->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRefCivilite->getValidationFailures());
				}
			}

			if ($this->aRefSituation !== null) {
				if (!$this->aRefSituation->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRefSituation->getValidationFailures());
				}
			}

			if ($this->aRefTypeAdherent !== null) {
				if (!$this->aRefTypeAdherent->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRefTypeAdherent->getValidationFailures());
				}
			}

			if ($this->aRefNiveauAdherent !== null) {
				if (!$this->aRefNiveauAdherent->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRefNiveauAdherent->getValidationFailures());
				}
			}

			if ($this->aRefTypeSport !== null) {
				if (!$this->aRefTypeSport->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRefTypeSport->getValidationFailures());
				}
			}

			if ($this->aRefSeanceHoraire !== null) {
				if (!$this->aRefSeanceHoraire->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRefSeanceHoraire->getValidationFailures());
				}
			}


			if (($retval = TblAdherentPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collLnkAdherentCompetitions !== null) {
					foreach ($this->collLnkAdherentCompetitions as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collLnkJourEntrainementAdherents !== null) {
					foreach ($this->collLnkJourEntrainementAdherents as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTblAdherentsRelatedByIdAdherent !== null) {
					foreach ($this->collTblAdherentsRelatedByIdAdherent as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTblAssurances !== null) {
					foreach ($this->collTblAssurances as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTblCeintures !== null) {
					foreach ($this->collTblCeintures as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTblFactures !== null) {
					foreach ($this->collTblFactures as $referrerFK) {
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
		$pos = TblAdherentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdAdherent();
				break;
			case 1:
				return $this->getEntraineurId();
				break;
			case 2:
				return $this->getCinAdherent();
				break;
			case 3:
				return $this->getNomAdherent();
				break;
			case 4:
				return $this->getPrenomAdherent();
				break;
			case 5:
				return $this->getIdCivilite();
				break;
			case 6:
				return $this->getIdSituation();
				break;
			case 7:
				return $this->getIdTypeAdherent();
				break;
			case 8:
				return $this->getNiveauAdherentId();
				break;
			case 9:
				return $this->getIdTypeSport();
				break;
			case 10:
				return $this->getAgeAdherent();
				break;
			case 11:
				return $this->getNumTel();
				break;
			case 12:
				return $this->getAdresseAdherent();
				break;
			case 13:
				return $this->getImageAdherent();
				break;
			case 14:
				return $this->getDateAdhesion();
				break;
			case 15:
				return $this->getSeanceHoraireId();
				break;
			case 16:
				return $this->getUpdatedAt();
				break;
			case 17:
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
		if (isset($alreadyDumpedObjects['TblAdherent'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['TblAdherent'][$this->getPrimaryKey()] = true;
		$keys = TblAdherentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getIdAdherent(),
			$keys[1] => $this->getEntraineurId(),
			$keys[2] => $this->getCinAdherent(),
			$keys[3] => $this->getNomAdherent(),
			$keys[4] => $this->getPrenomAdherent(),
			$keys[5] => $this->getIdCivilite(),
			$keys[6] => $this->getIdSituation(),
			$keys[7] => $this->getIdTypeAdherent(),
			$keys[8] => $this->getNiveauAdherentId(),
			$keys[9] => $this->getIdTypeSport(),
			$keys[10] => $this->getAgeAdherent(),
			$keys[11] => $this->getNumTel(),
			$keys[12] => $this->getAdresseAdherent(),
			$keys[13] => $this->getImageAdherent(),
			$keys[14] => $this->getDateAdhesion(),
			$keys[15] => $this->getSeanceHoraireId(),
			$keys[16] => $this->getUpdatedAt(),
			$keys[17] => $this->getDeletedAt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aTblAdherentRelatedByEntraineurId) {
				$result['TblAdherentRelatedByEntraineurId'] = $this->aTblAdherentRelatedByEntraineurId->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aRefCivilite) {
				$result['RefCivilite'] = $this->aRefCivilite->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aRefSituation) {
				$result['RefSituation'] = $this->aRefSituation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aRefTypeAdherent) {
				$result['RefTypeAdherent'] = $this->aRefTypeAdherent->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aRefNiveauAdherent) {
				$result['RefNiveauAdherent'] = $this->aRefNiveauAdherent->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aRefTypeSport) {
				$result['RefTypeSport'] = $this->aRefTypeSport->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aRefSeanceHoraire) {
				$result['RefSeanceHoraire'] = $this->aRefSeanceHoraire->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collLnkAdherentCompetitions) {
				$result['LnkAdherentCompetitions'] = $this->collLnkAdherentCompetitions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collLnkJourEntrainementAdherents) {
				$result['LnkJourEntrainementAdherents'] = $this->collLnkJourEntrainementAdherents->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collTblAdherentsRelatedByIdAdherent) {
				$result['TblAdherentsRelatedByIdAdherent'] = $this->collTblAdherentsRelatedByIdAdherent->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collTblAssurances) {
				$result['TblAssurances'] = $this->collTblAssurances->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collTblCeintures) {
				$result['TblCeintures'] = $this->collTblCeintures->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collTblFactures) {
				$result['TblFactures'] = $this->collTblFactures->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = TblAdherentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdAdherent($value);
				break;
			case 1:
				$this->setEntraineurId($value);
				break;
			case 2:
				$this->setCinAdherent($value);
				break;
			case 3:
				$this->setNomAdherent($value);
				break;
			case 4:
				$this->setPrenomAdherent($value);
				break;
			case 5:
				$this->setIdCivilite($value);
				break;
			case 6:
				$this->setIdSituation($value);
				break;
			case 7:
				$this->setIdTypeAdherent($value);
				break;
			case 8:
				$this->setNiveauAdherentId($value);
				break;
			case 9:
				$this->setIdTypeSport($value);
				break;
			case 10:
				$this->setAgeAdherent($value);
				break;
			case 11:
				$this->setNumTel($value);
				break;
			case 12:
				$this->setAdresseAdherent($value);
				break;
			case 13:
				$this->setImageAdherent($value);
				break;
			case 14:
				$this->setDateAdhesion($value);
				break;
			case 15:
				$this->setSeanceHoraireId($value);
				break;
			case 16:
				$this->setUpdatedAt($value);
				break;
			case 17:
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
		$keys = TblAdherentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setIdAdherent($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEntraineurId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCinAdherent($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNomAdherent($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPrenomAdherent($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIdCivilite($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setIdSituation($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setIdTypeAdherent($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setNiveauAdherentId($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setIdTypeSport($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAgeAdherent($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setNumTel($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setAdresseAdherent($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setImageAdherent($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDateAdhesion($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setSeanceHoraireId($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setUpdatedAt($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setDeletedAt($arr[$keys[17]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(TblAdherentPeer::DATABASE_NAME);

		if ($this->isColumnModified(TblAdherentPeer::ID_ADHERENT)) $criteria->add(TblAdherentPeer::ID_ADHERENT, $this->id_adherent);
		if ($this->isColumnModified(TblAdherentPeer::ENTRAINEUR_ID)) $criteria->add(TblAdherentPeer::ENTRAINEUR_ID, $this->entraineur_id);
		if ($this->isColumnModified(TblAdherentPeer::CIN_ADHERENT)) $criteria->add(TblAdherentPeer::CIN_ADHERENT, $this->cin_adherent);
		if ($this->isColumnModified(TblAdherentPeer::NOM_ADHERENT)) $criteria->add(TblAdherentPeer::NOM_ADHERENT, $this->nom_adherent);
		if ($this->isColumnModified(TblAdherentPeer::PRENOM_ADHERENT)) $criteria->add(TblAdherentPeer::PRENOM_ADHERENT, $this->prenom_adherent);
		if ($this->isColumnModified(TblAdherentPeer::ID_CIVILITE)) $criteria->add(TblAdherentPeer::ID_CIVILITE, $this->id_civilite);
		if ($this->isColumnModified(TblAdherentPeer::ID_SITUATION)) $criteria->add(TblAdherentPeer::ID_SITUATION, $this->id_situation);
		if ($this->isColumnModified(TblAdherentPeer::ID_TYPE_ADHERENT)) $criteria->add(TblAdherentPeer::ID_TYPE_ADHERENT, $this->id_type_adherent);
		if ($this->isColumnModified(TblAdherentPeer::NIVEAU_ADHERENT_ID)) $criteria->add(TblAdherentPeer::NIVEAU_ADHERENT_ID, $this->niveau_adherent_id);
		if ($this->isColumnModified(TblAdherentPeer::ID_TYPE_SPORT)) $criteria->add(TblAdherentPeer::ID_TYPE_SPORT, $this->id_type_sport);
		if ($this->isColumnModified(TblAdherentPeer::AGE_ADHERENT)) $criteria->add(TblAdherentPeer::AGE_ADHERENT, $this->age_adherent);
		if ($this->isColumnModified(TblAdherentPeer::NUM_TEL)) $criteria->add(TblAdherentPeer::NUM_TEL, $this->num_tel);
		if ($this->isColumnModified(TblAdherentPeer::ADRESSE_ADHERENT)) $criteria->add(TblAdherentPeer::ADRESSE_ADHERENT, $this->adresse_adherent);
		if ($this->isColumnModified(TblAdherentPeer::IMAGE_ADHERENT)) $criteria->add(TblAdherentPeer::IMAGE_ADHERENT, $this->image_adherent);
		if ($this->isColumnModified(TblAdherentPeer::DATE_ADHESION)) $criteria->add(TblAdherentPeer::DATE_ADHESION, $this->date_adhesion);
		if ($this->isColumnModified(TblAdherentPeer::SEANCE_HORAIRE_ID)) $criteria->add(TblAdherentPeer::SEANCE_HORAIRE_ID, $this->seance_horaire_id);
		if ($this->isColumnModified(TblAdherentPeer::UPDATED_AT)) $criteria->add(TblAdherentPeer::UPDATED_AT, $this->updated_at);
		if ($this->isColumnModified(TblAdherentPeer::DELETED_AT)) $criteria->add(TblAdherentPeer::DELETED_AT, $this->deleted_at);

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
		$criteria = new Criteria(TblAdherentPeer::DATABASE_NAME);
		$criteria->add(TblAdherentPeer::ID_ADHERENT, $this->id_adherent);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getIdAdherent();
	}

	/**
	 * Generic method to set the primary key (id_adherent column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setIdAdherent($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getIdAdherent();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of TblAdherent (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setEntraineurId($this->getEntraineurId());
		$copyObj->setCinAdherent($this->getCinAdherent());
		$copyObj->setNomAdherent($this->getNomAdherent());
		$copyObj->setPrenomAdherent($this->getPrenomAdherent());
		$copyObj->setIdCivilite($this->getIdCivilite());
		$copyObj->setIdSituation($this->getIdSituation());
		$copyObj->setIdTypeAdherent($this->getIdTypeAdherent());
		$copyObj->setNiveauAdherentId($this->getNiveauAdherentId());
		$copyObj->setIdTypeSport($this->getIdTypeSport());
		$copyObj->setAgeAdherent($this->getAgeAdherent());
		$copyObj->setNumTel($this->getNumTel());
		$copyObj->setAdresseAdherent($this->getAdresseAdherent());
		$copyObj->setImageAdherent($this->getImageAdherent());
		$copyObj->setDateAdhesion($this->getDateAdhesion());
		$copyObj->setSeanceHoraireId($this->getSeanceHoraireId());
		$copyObj->setUpdatedAt($this->getUpdatedAt());
		$copyObj->setDeletedAt($this->getDeletedAt());

		if ($deepCopy && !$this->startCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);
			// store object hash to prevent cycle
			$this->startCopy = true;

			foreach ($this->getLnkAdherentCompetitions() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addLnkAdherentCompetition($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getLnkJourEntrainementAdherents() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addLnkJourEntrainementAdherent($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getTblAdherentsRelatedByIdAdherent() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTblAdherentRelatedByIdAdherent($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getTblAssurances() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTblAssurance($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getTblCeintures() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTblCeinture($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getTblFactures() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTblFacture($relObj->copy($deepCopy));
				}
			}

			//unflag object copy
			$this->startCopy = false;
		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setIdAdherent(NULL); // this is a auto-increment column, so set to default value
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
	 * @return     TblAdherent Clone of current object.
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
	 * @return     TblAdherentPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new TblAdherentPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a TblAdherent object.
	 *
	 * @param      TblAdherent $v
	 * @return     TblAdherent The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setTblAdherentRelatedByEntraineurId(TblAdherent $v = null)
	{
		if ($v === null) {
			$this->setEntraineurId(NULL);
		} else {
			$this->setEntraineurId($v->getIdAdherent());
		}

		$this->aTblAdherentRelatedByEntraineurId = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the TblAdherent object, it will not be re-added.
		if ($v !== null) {
			$v->addTblAdherentRelatedByIdAdherent($this);
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
	public function getTblAdherentRelatedByEntraineurId(PropelPDO $con = null)
	{
		if ($this->aTblAdherentRelatedByEntraineurId === null && ($this->entraineur_id !== null)) {
			$this->aTblAdherentRelatedByEntraineurId = TblAdherentQuery::create()->findPk($this->entraineur_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aTblAdherentRelatedByEntraineurId->addTblAdherentsRelatedByIdAdherent($this);
			 */
		}
		return $this->aTblAdherentRelatedByEntraineurId;
	}

	/**
	 * Declares an association between this object and a RefCivilite object.
	 *
	 * @param      RefCivilite $v
	 * @return     TblAdherent The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setRefCivilite(RefCivilite $v = null)
	{
		if ($v === null) {
			$this->setIdCivilite(NULL);
		} else {
			$this->setIdCivilite($v->getIdCivilite());
		}

		$this->aRefCivilite = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the RefCivilite object, it will not be re-added.
		if ($v !== null) {
			$v->addTblAdherent($this);
		}

		return $this;
	}


	/**
	 * Get the associated RefCivilite object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     RefCivilite The associated RefCivilite object.
	 * @throws     PropelException
	 */
	public function getRefCivilite(PropelPDO $con = null)
	{
		if ($this->aRefCivilite === null && ($this->id_civilite !== null)) {
			$this->aRefCivilite = RefCiviliteQuery::create()->findPk($this->id_civilite, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aRefCivilite->addTblAdherents($this);
			 */
		}
		return $this->aRefCivilite;
	}

	/**
	 * Declares an association between this object and a RefSituation object.
	 *
	 * @param      RefSituation $v
	 * @return     TblAdherent The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setRefSituation(RefSituation $v = null)
	{
		if ($v === null) {
			$this->setIdSituation(NULL);
		} else {
			$this->setIdSituation($v->getIdSituation());
		}

		$this->aRefSituation = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the RefSituation object, it will not be re-added.
		if ($v !== null) {
			$v->addTblAdherent($this);
		}

		return $this;
	}


	/**
	 * Get the associated RefSituation object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     RefSituation The associated RefSituation object.
	 * @throws     PropelException
	 */
	public function getRefSituation(PropelPDO $con = null)
	{
		if ($this->aRefSituation === null && ($this->id_situation !== null)) {
			$this->aRefSituation = RefSituationQuery::create()->findPk($this->id_situation, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aRefSituation->addTblAdherents($this);
			 */
		}
		return $this->aRefSituation;
	}

	/**
	 * Declares an association between this object and a RefTypeAdherent object.
	 *
	 * @param      RefTypeAdherent $v
	 * @return     TblAdherent The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setRefTypeAdherent(RefTypeAdherent $v = null)
	{
		if ($v === null) {
			$this->setIdTypeAdherent(NULL);
		} else {
			$this->setIdTypeAdherent($v->getIdTypeAdherent());
		}

		$this->aRefTypeAdherent = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the RefTypeAdherent object, it will not be re-added.
		if ($v !== null) {
			$v->addTblAdherent($this);
		}

		return $this;
	}


	/**
	 * Get the associated RefTypeAdherent object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     RefTypeAdherent The associated RefTypeAdherent object.
	 * @throws     PropelException
	 */
	public function getRefTypeAdherent(PropelPDO $con = null)
	{
		if ($this->aRefTypeAdherent === null && ($this->id_type_adherent !== null)) {
			$this->aRefTypeAdherent = RefTypeAdherentQuery::create()->findPk($this->id_type_adherent, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aRefTypeAdherent->addTblAdherents($this);
			 */
		}
		return $this->aRefTypeAdherent;
	}

	/**
	 * Declares an association between this object and a RefNiveauAdherent object.
	 *
	 * @param      RefNiveauAdherent $v
	 * @return     TblAdherent The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setRefNiveauAdherent(RefNiveauAdherent $v = null)
	{
		if ($v === null) {
			$this->setNiveauAdherentId(NULL);
		} else {
			$this->setNiveauAdherentId($v->getNiveauAdherentId());
		}

		$this->aRefNiveauAdherent = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the RefNiveauAdherent object, it will not be re-added.
		if ($v !== null) {
			$v->addTblAdherent($this);
		}

		return $this;
	}


	/**
	 * Get the associated RefNiveauAdherent object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     RefNiveauAdherent The associated RefNiveauAdherent object.
	 * @throws     PropelException
	 */
	public function getRefNiveauAdherent(PropelPDO $con = null)
	{
		if ($this->aRefNiveauAdherent === null && ($this->niveau_adherent_id !== null)) {
			$this->aRefNiveauAdherent = RefNiveauAdherentQuery::create()->findPk($this->niveau_adherent_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aRefNiveauAdherent->addTblAdherents($this);
			 */
		}
		return $this->aRefNiveauAdherent;
	}

	/**
	 * Declares an association between this object and a RefTypeSport object.
	 *
	 * @param      RefTypeSport $v
	 * @return     TblAdherent The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setRefTypeSport(RefTypeSport $v = null)
	{
		if ($v === null) {
			$this->setIdTypeSport(NULL);
		} else {
			$this->setIdTypeSport($v->getIdTypeSport());
		}

		$this->aRefTypeSport = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the RefTypeSport object, it will not be re-added.
		if ($v !== null) {
			$v->addTblAdherent($this);
		}

		return $this;
	}


	/**
	 * Get the associated RefTypeSport object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     RefTypeSport The associated RefTypeSport object.
	 * @throws     PropelException
	 */
	public function getRefTypeSport(PropelPDO $con = null)
	{
		if ($this->aRefTypeSport === null && ($this->id_type_sport !== null)) {
			$this->aRefTypeSport = RefTypeSportQuery::create()->findPk($this->id_type_sport, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aRefTypeSport->addTblAdherents($this);
			 */
		}
		return $this->aRefTypeSport;
	}

	/**
	 * Declares an association between this object and a RefSeanceHoraire object.
	 *
	 * @param      RefSeanceHoraire $v
	 * @return     TblAdherent The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setRefSeanceHoraire(RefSeanceHoraire $v = null)
	{
		if ($v === null) {
			$this->setSeanceHoraireId(NULL);
		} else {
			$this->setSeanceHoraireId($v->getSeanceHoraireId());
		}

		$this->aRefSeanceHoraire = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the RefSeanceHoraire object, it will not be re-added.
		if ($v !== null) {
			$v->addTblAdherent($this);
		}

		return $this;
	}


	/**
	 * Get the associated RefSeanceHoraire object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     RefSeanceHoraire The associated RefSeanceHoraire object.
	 * @throws     PropelException
	 */
	public function getRefSeanceHoraire(PropelPDO $con = null)
	{
		if ($this->aRefSeanceHoraire === null && ($this->seance_horaire_id !== null)) {
			$this->aRefSeanceHoraire = RefSeanceHoraireQuery::create()->findPk($this->seance_horaire_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aRefSeanceHoraire->addTblAdherents($this);
			 */
		}
		return $this->aRefSeanceHoraire;
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
		if ('LnkAdherentCompetition' == $relationName) {
			return $this->initLnkAdherentCompetitions();
		}
		if ('LnkJourEntrainementAdherent' == $relationName) {
			return $this->initLnkJourEntrainementAdherents();
		}
		if ('TblAdherentRelatedByIdAdherent' == $relationName) {
			return $this->initTblAdherentsRelatedByIdAdherent();
		}
		if ('TblAssurance' == $relationName) {
			return $this->initTblAssurances();
		}
		if ('TblCeinture' == $relationName) {
			return $this->initTblCeintures();
		}
		if ('TblFacture' == $relationName) {
			return $this->initTblFactures();
		}
	}

	/**
	 * Clears out the collLnkAdherentCompetitions collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addLnkAdherentCompetitions()
	 */
	public function clearLnkAdherentCompetitions()
	{
		$this->collLnkAdherentCompetitions = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collLnkAdherentCompetitions collection.
	 *
	 * By default this just sets the collLnkAdherentCompetitions collection to an empty array (like clearcollLnkAdherentCompetitions());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initLnkAdherentCompetitions($overrideExisting = true)
	{
		if (null !== $this->collLnkAdherentCompetitions && !$overrideExisting) {
			return;
		}
		$this->collLnkAdherentCompetitions = new PropelObjectCollection();
		$this->collLnkAdherentCompetitions->setModel('LnkAdherentCompetition');
	}

	/**
	 * Gets an array of LnkAdherentCompetition objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this TblAdherent is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array LnkAdherentCompetition[] List of LnkAdherentCompetition objects
	 * @throws     PropelException
	 */
	public function getLnkAdherentCompetitions($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collLnkAdherentCompetitions || null !== $criteria) {
			if ($this->isNew() && null === $this->collLnkAdherentCompetitions) {
				// return empty collection
				$this->initLnkAdherentCompetitions();
			} else {
				$collLnkAdherentCompetitions = LnkAdherentCompetitionQuery::create(null, $criteria)
					->filterByTblAdherent($this)
					->find($con);
				if (null !== $criteria) {
					return $collLnkAdherentCompetitions;
				}
				$this->collLnkAdherentCompetitions = $collLnkAdherentCompetitions;
			}
		}
		return $this->collLnkAdherentCompetitions;
	}

	/**
	 * Sets a collection of LnkAdherentCompetition objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $lnkAdherentCompetitions A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setLnkAdherentCompetitions(PropelCollection $lnkAdherentCompetitions, PropelPDO $con = null)
	{
		$this->lnkAdherentCompetitionsScheduledForDeletion = $this->getLnkAdherentCompetitions(new Criteria(), $con)->diff($lnkAdherentCompetitions);

		foreach ($lnkAdherentCompetitions as $lnkAdherentCompetition) {
			// Fix issue with collection modified by reference
			if ($lnkAdherentCompetition->isNew()) {
				$lnkAdherentCompetition->setTblAdherent($this);
			}
			$this->addLnkAdherentCompetition($lnkAdherentCompetition);
		}

		$this->collLnkAdherentCompetitions = $lnkAdherentCompetitions;
	}

	/**
	 * Returns the number of related LnkAdherentCompetition objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related LnkAdherentCompetition objects.
	 * @throws     PropelException
	 */
	public function countLnkAdherentCompetitions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collLnkAdherentCompetitions || null !== $criteria) {
			if ($this->isNew() && null === $this->collLnkAdherentCompetitions) {
				return 0;
			} else {
				$query = LnkAdherentCompetitionQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByTblAdherent($this)
					->count($con);
			}
		} else {
			return count($this->collLnkAdherentCompetitions);
		}
	}

	/**
	 * Method called to associate a LnkAdherentCompetition object to this object
	 * through the LnkAdherentCompetition foreign key attribute.
	 *
	 * @param      LnkAdherentCompetition $l LnkAdherentCompetition
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function addLnkAdherentCompetition(LnkAdherentCompetition $l)
	{
		if ($this->collLnkAdherentCompetitions === null) {
			$this->initLnkAdherentCompetitions();
		}
		if (!$this->collLnkAdherentCompetitions->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddLnkAdherentCompetition($l);
		}

		return $this;
	}

	/**
	 * @param	LnkAdherentCompetition $lnkAdherentCompetition The lnkAdherentCompetition object to add.
	 */
	protected function doAddLnkAdherentCompetition($lnkAdherentCompetition)
	{
		$this->collLnkAdherentCompetitions[]= $lnkAdherentCompetition;
		$lnkAdherentCompetition->setTblAdherent($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblAdherent is new, it will return
	 * an empty collection; or if this TblAdherent has previously
	 * been saved, it will retrieve related LnkAdherentCompetitions from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblAdherent.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array LnkAdherentCompetition[] List of LnkAdherentCompetition objects
	 */
	public function getLnkAdherentCompetitionsJoinTblCompetition($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = LnkAdherentCompetitionQuery::create(null, $criteria);
		$query->joinWith('TblCompetition', $join_behavior);

		return $this->getLnkAdherentCompetitions($query, $con);
	}

	/**
	 * Clears out the collLnkJourEntrainementAdherents collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addLnkJourEntrainementAdherents()
	 */
	public function clearLnkJourEntrainementAdherents()
	{
		$this->collLnkJourEntrainementAdherents = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collLnkJourEntrainementAdherents collection.
	 *
	 * By default this just sets the collLnkJourEntrainementAdherents collection to an empty array (like clearcollLnkJourEntrainementAdherents());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initLnkJourEntrainementAdherents($overrideExisting = true)
	{
		if (null !== $this->collLnkJourEntrainementAdherents && !$overrideExisting) {
			return;
		}
		$this->collLnkJourEntrainementAdherents = new PropelObjectCollection();
		$this->collLnkJourEntrainementAdherents->setModel('LnkJourEntrainementAdherent');
	}

	/**
	 * Gets an array of LnkJourEntrainementAdherent objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this TblAdherent is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array LnkJourEntrainementAdherent[] List of LnkJourEntrainementAdherent objects
	 * @throws     PropelException
	 */
	public function getLnkJourEntrainementAdherents($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collLnkJourEntrainementAdherents || null !== $criteria) {
			if ($this->isNew() && null === $this->collLnkJourEntrainementAdherents) {
				// return empty collection
				$this->initLnkJourEntrainementAdherents();
			} else {
				$collLnkJourEntrainementAdherents = LnkJourEntrainementAdherentQuery::create(null, $criteria)
					->filterByTblAdherent($this)
					->find($con);
				if (null !== $criteria) {
					return $collLnkJourEntrainementAdherents;
				}
				$this->collLnkJourEntrainementAdherents = $collLnkJourEntrainementAdherents;
			}
		}
		return $this->collLnkJourEntrainementAdherents;
	}

	/**
	 * Sets a collection of LnkJourEntrainementAdherent objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $lnkJourEntrainementAdherents A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setLnkJourEntrainementAdherents(PropelCollection $lnkJourEntrainementAdherents, PropelPDO $con = null)
	{
		$this->lnkJourEntrainementAdherentsScheduledForDeletion = $this->getLnkJourEntrainementAdherents(new Criteria(), $con)->diff($lnkJourEntrainementAdherents);

		foreach ($lnkJourEntrainementAdherents as $lnkJourEntrainementAdherent) {
			// Fix issue with collection modified by reference
			if ($lnkJourEntrainementAdherent->isNew()) {
				$lnkJourEntrainementAdherent->setTblAdherent($this);
			}
			$this->addLnkJourEntrainementAdherent($lnkJourEntrainementAdherent);
		}

		$this->collLnkJourEntrainementAdherents = $lnkJourEntrainementAdherents;
	}

	/**
	 * Returns the number of related LnkJourEntrainementAdherent objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related LnkJourEntrainementAdherent objects.
	 * @throws     PropelException
	 */
	public function countLnkJourEntrainementAdherents(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collLnkJourEntrainementAdherents || null !== $criteria) {
			if ($this->isNew() && null === $this->collLnkJourEntrainementAdherents) {
				return 0;
			} else {
				$query = LnkJourEntrainementAdherentQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByTblAdherent($this)
					->count($con);
			}
		} else {
			return count($this->collLnkJourEntrainementAdherents);
		}
	}

	/**
	 * Method called to associate a LnkJourEntrainementAdherent object to this object
	 * through the LnkJourEntrainementAdherent foreign key attribute.
	 *
	 * @param      LnkJourEntrainementAdherent $l LnkJourEntrainementAdherent
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function addLnkJourEntrainementAdherent(LnkJourEntrainementAdherent $l)
	{
		if ($this->collLnkJourEntrainementAdherents === null) {
			$this->initLnkJourEntrainementAdherents();
		}
		if (!$this->collLnkJourEntrainementAdherents->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddLnkJourEntrainementAdherent($l);
		}

		return $this;
	}

	/**
	 * @param	LnkJourEntrainementAdherent $lnkJourEntrainementAdherent The lnkJourEntrainementAdherent object to add.
	 */
	protected function doAddLnkJourEntrainementAdherent($lnkJourEntrainementAdherent)
	{
		$this->collLnkJourEntrainementAdherents[]= $lnkJourEntrainementAdherent;
		$lnkJourEntrainementAdherent->setTblAdherent($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblAdherent is new, it will return
	 * an empty collection; or if this TblAdherent has previously
	 * been saved, it will retrieve related LnkJourEntrainementAdherents from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblAdherent.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array LnkJourEntrainementAdherent[] List of LnkJourEntrainementAdherent objects
	 */
	public function getLnkJourEntrainementAdherentsJoinRefJour($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = LnkJourEntrainementAdherentQuery::create(null, $criteria);
		$query->joinWith('RefJour', $join_behavior);

		return $this->getLnkJourEntrainementAdherents($query, $con);
	}

	/**
	 * Clears out the collTblAdherentsRelatedByIdAdherent collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTblAdherentsRelatedByIdAdherent()
	 */
	public function clearTblAdherentsRelatedByIdAdherent()
	{
		$this->collTblAdherentsRelatedByIdAdherent = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTblAdherentsRelatedByIdAdherent collection.
	 *
	 * By default this just sets the collTblAdherentsRelatedByIdAdherent collection to an empty array (like clearcollTblAdherentsRelatedByIdAdherent());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initTblAdherentsRelatedByIdAdherent($overrideExisting = true)
	{
		if (null !== $this->collTblAdherentsRelatedByIdAdherent && !$overrideExisting) {
			return;
		}
		$this->collTblAdherentsRelatedByIdAdherent = new PropelObjectCollection();
		$this->collTblAdherentsRelatedByIdAdherent->setModel('TblAdherent');
	}

	/**
	 * Gets an array of TblAdherent objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this TblAdherent is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 * @throws     PropelException
	 */
	public function getTblAdherentsRelatedByIdAdherent($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collTblAdherentsRelatedByIdAdherent || null !== $criteria) {
			if ($this->isNew() && null === $this->collTblAdherentsRelatedByIdAdherent) {
				// return empty collection
				$this->initTblAdherentsRelatedByIdAdherent();
			} else {
				$collTblAdherentsRelatedByIdAdherent = TblAdherentQuery::create(null, $criteria)
					->filterByTblAdherentRelatedByEntraineurId($this)
					->find($con);
				if (null !== $criteria) {
					return $collTblAdherentsRelatedByIdAdherent;
				}
				$this->collTblAdherentsRelatedByIdAdherent = $collTblAdherentsRelatedByIdAdherent;
			}
		}
		return $this->collTblAdherentsRelatedByIdAdherent;
	}

	/**
	 * Sets a collection of TblAdherentRelatedByIdAdherent objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $tblAdherentsRelatedByIdAdherent A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setTblAdherentsRelatedByIdAdherent(PropelCollection $tblAdherentsRelatedByIdAdherent, PropelPDO $con = null)
	{
		$this->tblAdherentsRelatedByIdAdherentScheduledForDeletion = $this->getTblAdherentsRelatedByIdAdherent(new Criteria(), $con)->diff($tblAdherentsRelatedByIdAdherent);

		foreach ($tblAdherentsRelatedByIdAdherent as $tblAdherentRelatedByIdAdherent) {
			// Fix issue with collection modified by reference
			if ($tblAdherentRelatedByIdAdherent->isNew()) {
				$tblAdherentRelatedByIdAdherent->setTblAdherentRelatedByEntraineurId($this);
			}
			$this->addTblAdherentRelatedByIdAdherent($tblAdherentRelatedByIdAdherent);
		}

		$this->collTblAdherentsRelatedByIdAdherent = $tblAdherentsRelatedByIdAdherent;
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
	public function countTblAdherentsRelatedByIdAdherent(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collTblAdherentsRelatedByIdAdherent || null !== $criteria) {
			if ($this->isNew() && null === $this->collTblAdherentsRelatedByIdAdherent) {
				return 0;
			} else {
				$query = TblAdherentQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByTblAdherentRelatedByEntraineurId($this)
					->count($con);
			}
		} else {
			return count($this->collTblAdherentsRelatedByIdAdherent);
		}
	}

	/**
	 * Method called to associate a TblAdherent object to this object
	 * through the TblAdherent foreign key attribute.
	 *
	 * @param      TblAdherent $l TblAdherent
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function addTblAdherentRelatedByIdAdherent(TblAdherent $l)
	{
		if ($this->collTblAdherentsRelatedByIdAdherent === null) {
			$this->initTblAdherentsRelatedByIdAdherent();
		}
		if (!$this->collTblAdherentsRelatedByIdAdherent->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddTblAdherentRelatedByIdAdherent($l);
		}

		return $this;
	}

	/**
	 * @param	TblAdherentRelatedByIdAdherent $tblAdherentRelatedByIdAdherent The tblAdherentRelatedByIdAdherent object to add.
	 */
	protected function doAddTblAdherentRelatedByIdAdherent($tblAdherentRelatedByIdAdherent)
	{
		$this->collTblAdherentsRelatedByIdAdherent[]= $tblAdherentRelatedByIdAdherent;
		$tblAdherentRelatedByIdAdherent->setTblAdherentRelatedByEntraineurId($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblAdherent is new, it will return
	 * an empty collection; or if this TblAdherent has previously
	 * been saved, it will retrieve related TblAdherentsRelatedByIdAdherent from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblAdherent.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 */
	public function getTblAdherentsRelatedByIdAdherentJoinRefCivilite($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAdherentQuery::create(null, $criteria);
		$query->joinWith('RefCivilite', $join_behavior);

		return $this->getTblAdherentsRelatedByIdAdherent($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblAdherent is new, it will return
	 * an empty collection; or if this TblAdherent has previously
	 * been saved, it will retrieve related TblAdherentsRelatedByIdAdherent from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblAdherent.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 */
	public function getTblAdherentsRelatedByIdAdherentJoinRefSituation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAdherentQuery::create(null, $criteria);
		$query->joinWith('RefSituation', $join_behavior);

		return $this->getTblAdherentsRelatedByIdAdherent($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblAdherent is new, it will return
	 * an empty collection; or if this TblAdherent has previously
	 * been saved, it will retrieve related TblAdherentsRelatedByIdAdherent from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblAdherent.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 */
	public function getTblAdherentsRelatedByIdAdherentJoinRefTypeAdherent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAdherentQuery::create(null, $criteria);
		$query->joinWith('RefTypeAdherent', $join_behavior);

		return $this->getTblAdherentsRelatedByIdAdherent($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblAdherent is new, it will return
	 * an empty collection; or if this TblAdherent has previously
	 * been saved, it will retrieve related TblAdherentsRelatedByIdAdherent from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblAdherent.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 */
	public function getTblAdherentsRelatedByIdAdherentJoinRefNiveauAdherent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAdherentQuery::create(null, $criteria);
		$query->joinWith('RefNiveauAdherent', $join_behavior);

		return $this->getTblAdherentsRelatedByIdAdherent($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblAdherent is new, it will return
	 * an empty collection; or if this TblAdherent has previously
	 * been saved, it will retrieve related TblAdherentsRelatedByIdAdherent from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblAdherent.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 */
	public function getTblAdherentsRelatedByIdAdherentJoinRefTypeSport($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAdherentQuery::create(null, $criteria);
		$query->joinWith('RefTypeSport', $join_behavior);

		return $this->getTblAdherentsRelatedByIdAdherent($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblAdherent is new, it will return
	 * an empty collection; or if this TblAdherent has previously
	 * been saved, it will retrieve related TblAdherentsRelatedByIdAdherent from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblAdherent.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAdherent[] List of TblAdherent objects
	 */
	public function getTblAdherentsRelatedByIdAdherentJoinRefSeanceHoraire($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAdherentQuery::create(null, $criteria);
		$query->joinWith('RefSeanceHoraire', $join_behavior);

		return $this->getTblAdherentsRelatedByIdAdherent($query, $con);
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
	 * If this TblAdherent is new, it will return
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
					->filterByTblAdherent($this)
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
				$tblAssurance->setTblAdherent($this);
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
					->filterByTblAdherent($this)
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
	 * @return     TblAdherent The current object (for fluent API support)
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
		$tblAssurance->setTblAdherent($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblAdherent is new, it will return
	 * an empty collection; or if this TblAdherent has previously
	 * been saved, it will retrieve related TblAssurances from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblAdherent.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblAssurance[] List of TblAssurance objects
	 */
	public function getTblAssurancesJoinRefAssurance($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblAssuranceQuery::create(null, $criteria);
		$query->joinWith('RefAssurance', $join_behavior);

		return $this->getTblAssurances($query, $con);
	}

	/**
	 * Clears out the collTblCeintures collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTblCeintures()
	 */
	public function clearTblCeintures()
	{
		$this->collTblCeintures = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTblCeintures collection.
	 *
	 * By default this just sets the collTblCeintures collection to an empty array (like clearcollTblCeintures());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initTblCeintures($overrideExisting = true)
	{
		if (null !== $this->collTblCeintures && !$overrideExisting) {
			return;
		}
		$this->collTblCeintures = new PropelObjectCollection();
		$this->collTblCeintures->setModel('TblCeinture');
	}

	/**
	 * Gets an array of TblCeinture objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this TblAdherent is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array TblCeinture[] List of TblCeinture objects
	 * @throws     PropelException
	 */
	public function getTblCeintures($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collTblCeintures || null !== $criteria) {
			if ($this->isNew() && null === $this->collTblCeintures) {
				// return empty collection
				$this->initTblCeintures();
			} else {
				$collTblCeintures = TblCeintureQuery::create(null, $criteria)
					->filterByTblAdherent($this)
					->find($con);
				if (null !== $criteria) {
					return $collTblCeintures;
				}
				$this->collTblCeintures = $collTblCeintures;
			}
		}
		return $this->collTblCeintures;
	}

	/**
	 * Sets a collection of TblCeinture objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $tblCeintures A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setTblCeintures(PropelCollection $tblCeintures, PropelPDO $con = null)
	{
		$this->tblCeinturesScheduledForDeletion = $this->getTblCeintures(new Criteria(), $con)->diff($tblCeintures);

		foreach ($tblCeintures as $tblCeinture) {
			// Fix issue with collection modified by reference
			if ($tblCeinture->isNew()) {
				$tblCeinture->setTblAdherent($this);
			}
			$this->addTblCeinture($tblCeinture);
		}

		$this->collTblCeintures = $tblCeintures;
	}

	/**
	 * Returns the number of related TblCeinture objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related TblCeinture objects.
	 * @throws     PropelException
	 */
	public function countTblCeintures(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collTblCeintures || null !== $criteria) {
			if ($this->isNew() && null === $this->collTblCeintures) {
				return 0;
			} else {
				$query = TblCeintureQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByTblAdherent($this)
					->count($con);
			}
		} else {
			return count($this->collTblCeintures);
		}
	}

	/**
	 * Method called to associate a TblCeinture object to this object
	 * through the TblCeinture foreign key attribute.
	 *
	 * @param      TblCeinture $l TblCeinture
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function addTblCeinture(TblCeinture $l)
	{
		if ($this->collTblCeintures === null) {
			$this->initTblCeintures();
		}
		if (!$this->collTblCeintures->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddTblCeinture($l);
		}

		return $this;
	}

	/**
	 * @param	TblCeinture $tblCeinture The tblCeinture object to add.
	 */
	protected function doAddTblCeinture($tblCeinture)
	{
		$this->collTblCeintures[]= $tblCeinture;
		$tblCeinture->setTblAdherent($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblAdherent is new, it will return
	 * an empty collection; or if this TblAdherent has previously
	 * been saved, it will retrieve related TblCeintures from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblAdherent.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblCeinture[] List of TblCeinture objects
	 */
	public function getTblCeinturesJoinRefGradeCeinture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblCeintureQuery::create(null, $criteria);
		$query->joinWith('RefGradeCeinture', $join_behavior);

		return $this->getTblCeintures($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblAdherent is new, it will return
	 * an empty collection; or if this TblAdherent has previously
	 * been saved, it will retrieve related TblCeintures from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblAdherent.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblCeinture[] List of TblCeinture objects
	 */
	public function getTblCeinturesJoinRefCompetance($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblCeintureQuery::create(null, $criteria);
		$query->joinWith('RefCompetance', $join_behavior);

		return $this->getTblCeintures($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblAdherent is new, it will return
	 * an empty collection; or if this TblAdherent has previously
	 * been saved, it will retrieve related TblCeintures from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblAdherent.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblCeinture[] List of TblCeinture objects
	 */
	public function getTblCeinturesJoinRefTitreEntraineur($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblCeintureQuery::create(null, $criteria);
		$query->joinWith('RefTitreEntraineur', $join_behavior);

		return $this->getTblCeintures($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this TblAdherent is new, it will return
	 * an empty collection; or if this TblAdherent has previously
	 * been saved, it will retrieve related TblCeintures from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in TblAdherent.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array TblCeinture[] List of TblCeinture objects
	 */
	public function getTblCeinturesJoinRefCeintureCouleur($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = TblCeintureQuery::create(null, $criteria);
		$query->joinWith('RefCeintureCouleur', $join_behavior);

		return $this->getTblCeintures($query, $con);
	}

	/**
	 * Clears out the collTblFactures collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTblFactures()
	 */
	public function clearTblFactures()
	{
		$this->collTblFactures = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTblFactures collection.
	 *
	 * By default this just sets the collTblFactures collection to an empty array (like clearcollTblFactures());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initTblFactures($overrideExisting = true)
	{
		if (null !== $this->collTblFactures && !$overrideExisting) {
			return;
		}
		$this->collTblFactures = new PropelObjectCollection();
		$this->collTblFactures->setModel('TblFacture');
	}

	/**
	 * Gets an array of TblFacture objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this TblAdherent is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array TblFacture[] List of TblFacture objects
	 * @throws     PropelException
	 */
	public function getTblFactures($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collTblFactures || null !== $criteria) {
			if ($this->isNew() && null === $this->collTblFactures) {
				// return empty collection
				$this->initTblFactures();
			} else {
				$collTblFactures = TblFactureQuery::create(null, $criteria)
					->filterByTblAdherent($this)
					->find($con);
				if (null !== $criteria) {
					return $collTblFactures;
				}
				$this->collTblFactures = $collTblFactures;
			}
		}
		return $this->collTblFactures;
	}

	/**
	 * Sets a collection of TblFacture objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $tblFactures A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setTblFactures(PropelCollection $tblFactures, PropelPDO $con = null)
	{
		$this->tblFacturesScheduledForDeletion = $this->getTblFactures(new Criteria(), $con)->diff($tblFactures);

		foreach ($tblFactures as $tblFacture) {
			// Fix issue with collection modified by reference
			if ($tblFacture->isNew()) {
				$tblFacture->setTblAdherent($this);
			}
			$this->addTblFacture($tblFacture);
		}

		$this->collTblFactures = $tblFactures;
	}

	/**
	 * Returns the number of related TblFacture objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related TblFacture objects.
	 * @throws     PropelException
	 */
	public function countTblFactures(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collTblFactures || null !== $criteria) {
			if ($this->isNew() && null === $this->collTblFactures) {
				return 0;
			} else {
				$query = TblFactureQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByTblAdherent($this)
					->count($con);
			}
		} else {
			return count($this->collTblFactures);
		}
	}

	/**
	 * Method called to associate a TblFacture object to this object
	 * through the TblFacture foreign key attribute.
	 *
	 * @param      TblFacture $l TblFacture
	 * @return     TblAdherent The current object (for fluent API support)
	 */
	public function addTblFacture(TblFacture $l)
	{
		if ($this->collTblFactures === null) {
			$this->initTblFactures();
		}
		if (!$this->collTblFactures->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddTblFacture($l);
		}

		return $this;
	}

	/**
	 * @param	TblFacture $tblFacture The tblFacture object to add.
	 */
	protected function doAddTblFacture($tblFacture)
	{
		$this->collTblFactures[]= $tblFacture;
		$tblFacture->setTblAdherent($this);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id_adherent = null;
		$this->entraineur_id = null;
		$this->cin_adherent = null;
		$this->nom_adherent = null;
		$this->prenom_adherent = null;
		$this->id_civilite = null;
		$this->id_situation = null;
		$this->id_type_adherent = null;
		$this->niveau_adherent_id = null;
		$this->id_type_sport = null;
		$this->age_adherent = null;
		$this->num_tel = null;
		$this->adresse_adherent = null;
		$this->image_adherent = null;
		$this->date_adhesion = null;
		$this->seance_horaire_id = null;
		$this->updated_at = null;
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
			if ($this->collLnkAdherentCompetitions) {
				foreach ($this->collLnkAdherentCompetitions as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collLnkJourEntrainementAdherents) {
				foreach ($this->collLnkJourEntrainementAdherents as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collTblAdherentsRelatedByIdAdherent) {
				foreach ($this->collTblAdherentsRelatedByIdAdherent as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collTblAssurances) {
				foreach ($this->collTblAssurances as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collTblCeintures) {
				foreach ($this->collTblCeintures as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collTblFactures) {
				foreach ($this->collTblFactures as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collLnkAdherentCompetitions instanceof PropelCollection) {
			$this->collLnkAdherentCompetitions->clearIterator();
		}
		$this->collLnkAdherentCompetitions = null;
		if ($this->collLnkJourEntrainementAdherents instanceof PropelCollection) {
			$this->collLnkJourEntrainementAdherents->clearIterator();
		}
		$this->collLnkJourEntrainementAdherents = null;
		if ($this->collTblAdherentsRelatedByIdAdherent instanceof PropelCollection) {
			$this->collTblAdherentsRelatedByIdAdherent->clearIterator();
		}
		$this->collTblAdherentsRelatedByIdAdherent = null;
		if ($this->collTblAssurances instanceof PropelCollection) {
			$this->collTblAssurances->clearIterator();
		}
		$this->collTblAssurances = null;
		if ($this->collTblCeintures instanceof PropelCollection) {
			$this->collTblCeintures->clearIterator();
		}
		$this->collTblCeintures = null;
		if ($this->collTblFactures instanceof PropelCollection) {
			$this->collTblFactures->clearIterator();
		}
		$this->collTblFactures = null;
		$this->aTblAdherentRelatedByEntraineurId = null;
		$this->aRefCivilite = null;
		$this->aRefSituation = null;
		$this->aRefTypeAdherent = null;
		$this->aRefNiveauAdherent = null;
		$this->aRefTypeSport = null;
		$this->aRefSeanceHoraire = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(TblAdherentPeer::DEFAULT_STRING_FORMAT);
	}

	// soft_delete behavior
	
	/**
	 * Bypass the soft_delete behavior and force a hard delete of the current object
	 */
	public function forceDelete(PropelPDO $con = null)
	{
		if($isSoftDeleteEnabled = TblAdherentPeer::isSoftDeleteEnabled()) {
			TblAdherentPeer::disableSoftDelete();
		}
		$this->delete($con);
		if ($isSoftDeleteEnabled) {
			TblAdherentPeer::enableSoftDelete();
		}
	}
	
	/**
	 * Undelete a row that was soft_deleted
	 *
	 * @return		 int The number of rows affected by this update and any referring fk objects' save() operations.
	 */
	public function unDelete(PropelPDO $con = null)
	{
		$this->setDeletedAt(null);
		return $this->save($con);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseTblAdherent:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseTblAdherent
