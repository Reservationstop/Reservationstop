<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompanySubspacesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompanySubspacesTable Test Case
 */
class CompanySubspacesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompanySubspacesTable
     */
    public $CompanySubspaces;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.company_subspaces',
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
        $config = TableRegistry::exists('CompanySubspaces') ? [] : ['className' => CompanySubspacesTable::class];
        $this->CompanySubspaces = TableRegistry::get('CompanySubspaces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompanySubspaces);

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
