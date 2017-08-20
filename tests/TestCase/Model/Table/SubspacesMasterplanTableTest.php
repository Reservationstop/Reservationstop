<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubspacesMasterplanTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubspacesMasterplanTable Test Case
 */
class SubspacesMasterplanTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SubspacesMasterplanTable
     */
    public $SubspacesMasterplan;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.subspaces_masterplan',
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
        'app.companies_areas',
        'app.subspaces_masterplans'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SubspacesMasterplan') ? [] : ['className' => SubspacesMasterplanTable::class];
        $this->SubspacesMasterplan = TableRegistry::get('SubspacesMasterplan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SubspacesMasterplan);

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
