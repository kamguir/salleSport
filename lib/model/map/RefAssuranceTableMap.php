<?php



/**
 * This class defines the structure of the 'ref_assurance' table.
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
class RefAssuranceTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.RefAssuranceTableMap';

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
		$this->setName('ref_assurance');
		$this->setPhpName('RefAssurance');
		$this->setClassname('RefAssurance');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ASSURANCE_ID', 'AssuranceId', 'INTEGER', true, null, null);
		$this->addColumn('LIBELLE_ASSURANCE', 'LibelleAssurance', 'VARCHAR', false, 256, null);
		$this->addColumn('PRIX_ASSURANCE', 'PrixAssurance', 'DOUBLE', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('TblAssurance', 'TblAssurance', RelationMap::ONE_TO_MANY, array('assurance_id' => 'ref_assurance_id', ), null, null, 'TblAssurances');
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

} // RefAssuranceTableMap
