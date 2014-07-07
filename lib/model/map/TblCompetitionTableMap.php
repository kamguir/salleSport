<?php



/**
 * This class defines the structure of the 'tbl_competition' table.
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
class TblCompetitionTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.TblCompetitionTableMap';

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
		$this->setName('tbl_competition');
		$this->setPhpName('TblCompetition');
		$this->setClassname('TblCompetition');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('COMPETITION_ID', 'CompetitionId', 'INTEGER', true, null, null);
		$this->addColumn('COMPETITION_LIBELLE', 'CompetitionLibelle', 'VARCHAR', false, 256, null);
		$this->addForeignKey('TYPE_SPORT_ID', 'TypeSportId', 'INTEGER', 'ref_type_sport', 'ID_TYPE_SPORT', false, null, null);
		$this->addForeignKey('VILLE_ID', 'VilleId', 'INTEGER', 'ref_ville', 'VILLE_ID', false, null, null);
		$this->addColumn('PRIX_COMPETITION', 'PrixCompetition', 'DOUBLE', false, null, null);
		$this->addColumn('ADRESSE_COMPETITION', 'AdresseCompetition', 'VARCHAR', false, 256, null);
		$this->addColumn('DATE_COMPETITION', 'DateCompetition', 'TIMESTAMP', false, null, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('DELETED_AT', 'DeletedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('RefTypeSport', 'RefTypeSport', RelationMap::MANY_TO_ONE, array('type_sport_id' => 'id_type_sport', ), null, null);
		$this->addRelation('RefVille', 'RefVille', RelationMap::MANY_TO_ONE, array('ville_id' => 'ville_id', ), null, null);
		$this->addRelation('LnkAdherentCompetition', 'LnkAdherentCompetition', RelationMap::ONE_TO_MANY, array('competition_id' => 'competition_id', ), null, null, 'LnkAdherentCompetitions');
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

} // TblCompetitionTableMap
