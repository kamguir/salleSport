<?php



/**
 * This class defines the structure of the 'lnk_sport_entraineur' table.
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
class LnkSportEntraineurTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.LnkSportEntraineurTableMap';

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
		$this->setName('lnk_sport_entraineur');
		$this->setPhpName('LnkSportEntraineur');
		$this->setClassname('LnkSportEntraineur');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('ID_SPORT', 'IdSport', 'INTEGER' , 'tbl_sport', 'ID_SPORT', true, null, null);
		$this->addForeignPrimaryKey('ID_ENTRAINEUR', 'IdEntraineur', 'INTEGER' , 'tbl_adherent', 'ID_ADHERENT', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('TblSport', 'TblSport', RelationMap::MANY_TO_ONE, array('id_sport' => 'id_sport', ), null, null);
		$this->addRelation('TblAdherent', 'TblAdherent', RelationMap::MANY_TO_ONE, array('id_entraineur' => 'id_adherent', ), null, null);
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

} // LnkSportEntraineurTableMap
