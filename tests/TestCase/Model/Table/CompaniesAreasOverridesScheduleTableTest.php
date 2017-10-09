<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompaniesAreasOverridesScheduleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompaniesAreasOverridesScheduleTable Test Case
 */
class CompaniesAreasOverridesScheduleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompaniesAreasOverridesScheduleTable
     */
    public $CompaniesAreasOverridesSchedule;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.companies_areas_overrides_schedule',
        'app.companies_areas',
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
        'app.companies_areas_opening_schedule',
        'app.companies_areas_masterplans'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CompaniesAreasOverridesSchedule') ? [] : ['className' => CompaniesAreasOverridesScheduleTable::class];
        $this->CompaniesAreasOverridesSchedule = TableRegistry::get('CompaniesAreasOverridesSchedule', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompaniesAreasOverridesSchedule);

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
