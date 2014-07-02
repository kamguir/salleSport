<?php



/**
 * This class defines the structure of the 'tbl_user' table.
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
class TblUserTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.TblUserTableMap';

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
		$this->setName('tbl_user');
		$this->setPhpName('TblUser');
		$this->setClassname('TblUser');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('USER_ID', 'UserId', 'INTEGER', true, null, null);
		$this->addColumn('USER_NOM', 'UserNom', 'VARCHAR', false, 200, null);
		$this->addColumn('USER_PRENOM', 'UserPrenom', 'VARCHAR', false, 200, null);
		$this->addColumn('USER_LOGIN', 'UserLogin', 'VARCHAR', false, 200, null);
		$this->addColumn('USER_PASSWORD', 'UserPassword', 'VARCHAR', false, 200, null);
		$this->addColumn('USER_MAIL', 'UserMail', 'VARCHAR', false, 200, null);
		$this->addColumn('USER_COMPTE_ACTIVE', 'UserCompteActive', 'BOOLEAN', false, 1, null);
		$this->addColumn('USER_LAST_CNX', 'UserLastCnx', 'TIMESTAMP', false, null, null);
		$this->addColumn('USER_NB_CNX', 'UserNbCnx', 'INTEGER', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('LnkUserProfil', 'LnkUserProfil', RelationMap::ONE_TO_MANY, array('user_id' => 'user_id', ), null, null, 'LnkUserProfils');
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

} // TblUserTableMap
