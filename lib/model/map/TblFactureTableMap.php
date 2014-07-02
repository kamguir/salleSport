<?php



/**
 * This class defines the structure of the 'tbl_facture' table.
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
class TblFactureTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.TblFactureTableMap';

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
		$this->setName('tbl_facture');
		$this->setPhpName('TblFacture');
		$this->setClassname('TblFacture');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID_FACTURE', 'IdFacture', 'INTEGER', true, null, null);
		$this->addForeignKey('ID_ADHERENT', 'IdAdherent', 'INTEGER', 'tbl_adherent', 'ID_ADHERENT', false, null, null);
		$this->addColumn('PRIX_FACTURE', 'PrixFacture', 'DOUBLE', false, null, null);
		$this->addColumn('DATE_REGLEMENT', 'DateReglement', 'TIMESTAMP', false, null, null);
		$this->addColumn('ETAT_PAIEMENT', 'EtatPaiement', 'BOOLEAN', false, 1, false);
		$this->addColumn('COMMENTAIRE', 'Commentaire', 'VARCHAR', false, 255, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('DELETED_AT', 'DeletedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
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
			'soft_delete' => array('deleted_column' => 'deleted_at', ),
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
			'symfony_timestampable' => array('create_column' => 'created_at', ),
		);
	} // getBehaviors()

} // TblFactureTableMap
