<?php



/**
 * This class defines the structure of the 'lnk_plage_horaire_adherent' table.
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
class LnkPlageHoraireAdherentTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.LnkPlageHoraireAdherentTableMap';

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
		$this->setName('lnk_plage_horaire_adherent');
		$this->setPhpName('LnkPlageHoraireAdherent');
		$this->setClassname('LnkPlageHoraireAdherent');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('HORAIRE_ID', 'HoraireId', 'INTEGER' , 'ref_plage_horaire', 'HORAIRE_ID', true, null, null);
		$this->addForeignPrimaryKey('ADHERENT_ID', 'AdherentId', 'INTEGER' , 'tbl_adherent', 'ID_ADHERENT', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('RefPlageHoraire', 'RefPlageHoraire', RelationMap::MANY_TO_ONE, array('horaire_id' => 'horaire_id', ), null, null);
		$this->addRelation('TblAdherent', 'TblAdherent', RelationMap::MANY_TO_ONE, array('adherent_id' => 'id_adherent', ), null, null);
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
		);
	} // getBehaviors()

} // LnkPlageHoraireAdherentTableMap
