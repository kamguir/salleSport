<?php



/**
 * This class defines the structure of the 'lnk_jour_sport' table.
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
class LnkJourSportTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.LnkJourSportTableMap';

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
		$this->setName('lnk_jour_sport');
		$this->setPhpName('LnkJourSport');
		$this->setClassname('LnkJourSport');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addForeignPrimaryKey('ID_TYPE_SPORT', 'IdTypeSport', 'INTEGER' , 'ref_type_sport', 'ID_TYPE_SPORT', true, null, null);
		$this->addForeignPrimaryKey('ID_JOUR', 'IdJour', 'INTEGER' , 'ref_jour', 'ID_JOUR', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('RefTypeSport', 'RefTypeSport', RelationMap::MANY_TO_ONE, array('id_type_sport' => 'id_type_sport', ), null, null);
		$this->addRelation('RefJour', 'RefJour', RelationMap::MANY_TO_ONE, array('id_jour' => 'id_jour', ), null, null);
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

} // LnkJourSportTableMap
