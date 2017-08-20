<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OpeningScheduleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OpeningScheduleTable Test Case
 */
class OpeningScheduleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OpeningScheduleTable
     */
    public $OpeningSchedule;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.opening_schedule',
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
        $config = TableRegistry::exists('OpeningSchedule') ? [] : ['className' => OpeningScheduleTable::class];
        $this->OpeningSchedule = TableRegistry::get('OpeningSchedule', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OpeningSchedule);

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
