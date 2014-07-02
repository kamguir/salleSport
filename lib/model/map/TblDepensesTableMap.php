<?php



/**
 * This class defines the structure of the 'tbl_depenses' table.
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
class TblDepensesTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.TblDepensesTableMap';

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
		$this->setName('tbl_depenses');
		$this->setPhpName('TblDepenses');
		$this->setClassname('TblDepenses');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_DEPENSES', 'IdDepenses', 'INTEGER', true, null, null);
		$this->addColumn('DATE_DEPENSES', 'DateDepenses', 'DATE', false, null, null);
		$this->addForeignKey('ID_REF_DEPENSES', 'IdRefDepenses', 'INTEGER', 'ref_depenses', 'ID_REF_DEPENSES', false, null, null);
		$this->addColumn('MONTANT_DEPENSES', 'MontantDepenses', 'DOUBLE', false, null, null);
		$this->addColumn('ETAT_PAIEMENT', 'EtatPaiement', 'BOOLEAN', false, 1, false);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('DELETED_AT', 'DeletedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('RefDepenses', 'RefDepenses', RelationMap::MANY_TO_ONE, array('id_ref_depenses' => 'id_ref_depenses', ), null, null);
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
			'symfony_timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
		);
	} // getBehaviors()

} // TblDepensesTableMap
