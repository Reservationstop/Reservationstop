<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompaniesAreasMasterplansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompaniesAreasMasterplansTable Test Case
 */
class CompaniesAreasMasterplansTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompaniesAreasMasterplansTable
     */
    public $CompaniesAreasMasterplans;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.companies_areas_masterplans',
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
        'app.geographical_areas',
        'app.companies_areas',
        'app.companies_areas_opening_schedule',
        'app.companies_areas_overrides_schedule'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CompaniesAreasMasterplans') ? [] : ['className' => CompaniesAreasMasterplansTable::class];
        $this->CompaniesAreasMasterplans = TableRegistry::get('CompaniesAreasMasterplans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompaniesAreasMasterplans);

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
