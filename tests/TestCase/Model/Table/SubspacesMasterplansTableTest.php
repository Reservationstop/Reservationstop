<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubspacesMasterplansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubspacesMasterplansTable Test Case
 */
class SubspacesMasterplansTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SubspacesMasterplansTable
     */
    public $SubspacesMasterplans;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.subspaces_masterplans',
        'app.companies',
        'app.types',
        'app.countries',
        'app.currencies',
        'app.users',
        'app.languages',
        'app.alternative_languages',
        'app.user_permissions',
        'app.roles',
        'app.restaurants',
        'app.statuses',
        'app.groups',
        'app.timezones',
        'app.areas',
        'app.opening_schedule',
        'app.companies_areas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SubspacesMasterplans') ? [] : ['className' => SubspacesMasterplansTable::class];
        $this->SubspacesMasterplans = TableRegistry::get('SubspacesMasterplans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SubspacesMasterplans);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
