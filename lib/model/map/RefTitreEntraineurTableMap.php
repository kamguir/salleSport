<?php



/**
 * This class defines the structure of the 'ref_titre_entraineur' table.
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
class RefTitreEntraineurTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.RefTitreEntraineurTableMap';

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
		$this->setName('ref_titre_entraineur');
		$this->setPhpName('RefTitreEntraineur');
		$this->setClassname('RefTitreEntraineur');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('TITRE_ENTRAINEUR_ID', 'TitreEntraineurId', 'INTEGER', true, null, null);
		$this->addColumn('TITRE_ENTRAINEUR_LIBELLE', 'TitreEntraineurLibelle', 'VARCHAR', false, 256, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('TblCeinture', 'TblCeinture', RelationMap::ONE_TO_MANY, array('titre_entraineur_id' => 'titre_entraineur_id', ), null, null, 'TblCeintures');
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

} // RefTitreEntraineurTableMap
