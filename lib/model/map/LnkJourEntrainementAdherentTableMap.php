<?php



/**
 * This class defines the structure of the 'lnk_jour_entrainement_adherent' table.
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
class LnkJourEntrainementAdherentTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.LnkJourEntrainementAdherentTableMap';

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
		$this->setName('lnk_jour_entrainement_adherent');
		$this->setPhpName('LnkJourEntrainementAdherent');
		$this->setClassname('LnkJourEntrainementAdherent');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('ID_JOUR', 'IdJour', 'INTEGER' , 'ref_jour', 'ID_JOUR', true, null, null);
		$this->addForeignPrimaryKey('ID_ADHERENT', 'IdAdherent', 'INTEGER' , 'tbl_adherent', 'ID_ADHERENT', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('RefJour', 'RefJour', RelationMap::MANY_TO_ONE, array('id_jour' => 'id_jour', ), null, null);
		$this->addRelation('TblAdherent', 'TblAdherent', RelationMap::MANY_TO_ONE, array('id_adherent' => 'id_adherent', ), null, null);
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

} // LnkJourEntrainementAdherentTableMap
