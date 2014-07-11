<?php



/**
 * This class defines the structure of the 'tbl_adherent' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class TblAdherentTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.TblAdherentTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('tbl_adherent');
		$this->setPhpName('TblAdherent');
		$this->setClassname('TblAdherent');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_ADHERENT', 'IdAdherent', 'INTEGER', true, null, null);
		$this->addForeignKey('ENTRAINEUR_ID', 'EntraineurId', 'INTEGER', 'tbl_adherent', 'ID_ADHERENT', false, null, null);
		$this->addColumn('CIN_ADHERENT', 'CinAdherent', 'VARCHAR', false, 10, null);
		$this->addColumn('NOM_ADHERENT', 'NomAdherent', 'VARCHAR', false, 255, null);
		$this->addColumn('PRENOM_ADHERENT', 'PrenomAdherent', 'VARCHAR', false, 255, null);
		$this->addForeignKey('ID_CIVILITE', 'IdCivilite', 'INTEGER', 'ref_civilite', 'ID_CIVILITE', false, null, null);
		$this->addForeignKey('ID_SITUATION', 'IdSituation', 'INTEGER', 'ref_situation', 'ID_SITUATION', false, null, null);
		$this->addForeignKey('ID_TYPE_ADHERENT', 'IdTypeAdherent', 'INTEGER', 'ref_type_adherent', 'ID_TYPE_ADHERENT', false, null, null);
		$this->addForeignKey('NIVEAU_ADHERENT_ID', 'NiveauAdherentId', 'INTEGER', 'ref_niveau_adherent', 'NIVEAU_ADHERENT_ID', false, null, null);
		$this->addForeignKey('ID_TYPE_SPORT', 'IdTypeSport', 'INTEGER', 'ref_type_sport', 'ID_TYPE_SPORT', false, null, null);
		$this->addColumn('AGE_ADHERENT', 'AgeAdherent', 'INTEGER', false, null, null);
		$this->addColumn('NUM_TEL', 'NumTel', 'INTEGER', false, null, null);
		$this->addColumn('ADRESSE_ADHERENT', 'AdresseAdherent', 'VARCHAR', false, 255, null);
		$this->addColumn('IMAGE_ADHERENT', 'ImageAdherent', 'VARCHAR', false, 128, null);
		$this->addColumn('DATE_ADHESION', 'DateAdhesion', 'TIMESTAMP', false, null, null);
		$this->addForeignKey('SEANCE_HORAIRE_ID', 'SeanceHoraireId', 'INTEGER', 'ref_seance_horaire', 'SEANCE_HORAIRE_ID', false, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('DELETED_AT', 'DeletedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('TblAdherentRelatedByEntraineurId', 'TblAdherent', RelationMap::MANY_TO_ONE, array('entraineur_id' => 'id_adherent', ), null, null);
		$this->addRelation('RefCivilite', 'RefCivilite', RelationMap::MANY_TO_ONE, array('id_civilite' => 'id_civilite', ), null, null);
		$this->addRelation('RefSituation', 'RefSituation', RelationMap::MANY_TO_ONE, array('id_situation' => 'id_situation', ), null, null);
		$this->addRelation('RefTypeAdherent', 'RefTypeAdherent', RelationMap::MANY_TO_ONE, array('id_type_adherent' => 'id_type_adherent', ), null, null);
		$this->addRelation('RefNiveauAdherent', 'RefNiveauAdherent', RelationMap::MANY_TO_ONE, array('niveau_adherent_id' => 'niveau_adherent_id', ), null, null);
		$this->addRelation('RefTypeSport', 'RefTypeSport', RelationMap::MANY_TO_ONE, array('id_type_sport' => 'id_type_sport', ), null, null);
		$this->addRelation('RefSeanceHoraire', 'RefSeanceHoraire', RelationMap::MANY_TO_ONE, array('seance_horaire_id' => 'seance_horaire_id', ), null, null);
		$this->addRelation('LnkAdherentCompetition', 'LnkAdherentCompetition', RelationMap::ONE_TO_MANY, array('id_adherent' => 'adherent_id', ), null, null, 'LnkAdherentCompetitions');
		$this->addRelation('LnkJourEntrainementAdherent', 'LnkJourEntrainementAdherent', RelationMap::ONE_TO_MANY, array('id_adherent' => 'id_adherent', ), null, null, 'LnkJourEntrainementAdherents');
		$this->addRelation('TblAdherentRelatedByIdAdherent', 'TblAdherent', RelationMap::ONE_TO_MANY, array('id_adherent' => 'entraineur_id', ), null, null, 'TblAdherentsRelatedByIdAdherent');
		$this->addRelation('TblAssurance', 'TblAssurance', RelationMap::ONE_TO_MANY, array('id_adherent' => 'adherent_id', ), null, null, 'TblAssurances');
		$this->addRelation('TblCeinture', 'TblCeinture', RelationMap::ONE_TO_MANY, array('id_adherent' => 'adherent_id', ), null, null, 'TblCeintures');
		$this->addRelation('TblFacture', 'TblFacture', RelationMap::ONE_TO_MANY, array('id_adherent' => 'id_adherent', ), null, null, 'TblFactures');
	} // buildRelations()

	/**
	 *
	 * Gets the list of behaviors registered for this table
	 *
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'soft_delete' => array('deleted_column' => 'deleted_at', ),
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
			'symfony_timestampable' => array('update_column' => 'updated_at', ),
		);
	} // getBehaviors()

} // TblAdherentTableMap
