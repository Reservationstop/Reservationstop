<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompaniesSubspacesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompaniesSubspacesTable Test Case
 */
class CompaniesSubspacesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompaniesSubspacesTable
     */
    public $CompaniesSubspaces;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.companies_subspaces',
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
        'app.subspaces_masterplans',
        'app.overrides_company_schedule'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CompaniesSubspaces') ? [] : ['className' => CompaniesSubspacesTable::class];
        $this->CompaniesSubspaces = TableRegistry::get('CompaniesSubspaces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompaniesSubspaces);

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
