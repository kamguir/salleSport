<?php



/**
 * This class defines the structure of the 'tbl_assurance' table.
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
class TblAssuranceTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.TblAssuranceTableMap';

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
		$this->setName('tbl_assurance');
		$this->setPhpName('TblAssurance');
		$this->setClassname('TblAssurance');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ASSURANCE_ID', 'AssuranceId', 'INTEGER', true, null, null);
		$this->addForeignKey('ADHERENT_ID', 'AdherentId', 'INTEGER', 'tbl_adherent', 'ID_ADHERENT', false, null, null);
		$this->addForeignKey('REF_ASSURANCE_ID', 'RefAssuranceId', 'INTEGER', 'ref_assurance', 'ASSURANCE_ID', false, null, null);
		$this->addColumn('PRIX_ASSURANCE', 'PrixAssurance', 'DOUBLE', false, null, null);
		$this->addColumn('ETAT_PAIEMENT', 'EtatPaiement', 'BOOLEAN', false, 1, true);
		$this->addColumn('DATE_ASSURANCE', 'DateAssurance', 'TIMESTAMP', false, null, null);
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
		$this->addRelation('RefAssurance', 'RefAssurance', RelationMap::MANY_TO_ONE, array('ref_assurance_id' => 'assurance_id', ), null, null);
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

} // TblAssuranceTableMap
