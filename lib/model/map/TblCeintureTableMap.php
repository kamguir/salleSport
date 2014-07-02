<?php



/**
 * This class defines the structure of the 'tbl_ceinture' table.
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
class TblCeintureTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.TblCeintureTableMap';

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
		$this->setName('tbl_ceinture');
		$this->setPhpName('TblCeinture');
		$this->setClassname('TblCeinture');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('CEINTURE_ID', 'CeintureId', 'INTEGER', true, null, null);
		$this->addForeignKey('ADHERENT_ID', 'AdherentId', 'INTEGER', 'tbl_adherent', 'ID_ADHERENT', false, null, null);
		$this->addForeignKey('GRADE_ID', 'GradeId', 'INTEGER', 'ref_grade_ceinture', 'GRADE_ID', false, null, null);
		$this->addForeignKey('COMPETANCE_ID', 'CompetanceId', 'INTEGER', 'ref_competance', 'COMPETANCE_ID', false, null, null);
		$this->addForeignKey('TITRE_ENTRAINEUR_ID', 'TitreEntraineurId', 'INTEGER', 'ref_titre_entraineur', 'TITRE_ENTRAINEUR_ID', false, null, null);
		$this->addForeignKey('CEINTURE_COULEUR_ID', 'CeintureCouleurId', 'INTEGER', 'ref_ceinture_couleur', 'CEINTURE_COULEUR_ID', false, null, null);
		$this->addColumn('DATE_ACQUISITION', 'DateAcquisition', 'TIMESTAMP', false, null, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('DELETED_AT', 'DeletedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('TblAdherent', 'TblAdherent', RelationMap::MANY_TO_ONE, array('adherent_id' => 'id_adherent', ), null, null);
		$this->addRelation('RefGradeCeinture', 'RefGradeCeinture', RelationMap::MANY_TO_ONE, array('grade_id' => 'grade_id', ), null, null);
		$this->addRelation('RefCompetance', 'RefCompetance', RelationMap::MANY_TO_ONE, array('competance_id' => 'competance_id', ), null, null);
		$this->addRelation('RefTitreEntraineur', 'RefTitreEntraineur', RelationMap::MANY_TO_ONE, array('titre_entraineur_id' => 'titre_entraineur_id', ), null, null);
		$this->addRelation('RefCeintureCouleur', 'RefCeintureCouleur', RelationMap::MANY_TO_ONE, array('ceinture_couleur_id' => 'ceinture_couleur_id', ), null, null);
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
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
			'symfony_timestampable' => array('create_column' => 'created_at', ),
		);
	} // getBehaviors()

} // TblCeintureTableMap
