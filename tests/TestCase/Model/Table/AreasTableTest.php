<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreasTable Test Case
 */
class AreasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AreasTable
     */
    public $Areas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.areas',
        'app.countries',
        'app.currencies',
        'app.users',
        'app.languages',
        'app.alternative_languages',
        'app.facebooks',
        'app.user_permissions',
        'app.roles',
        'app.restaurants',
        'app.companies',
        'app.types',
        'app.statuses',
        'app.groups',
        'app.timezones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Areas') ? [] : ['className' => AreasTable::class];
        $this->Areas = TableRegistry::get('Areas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Areas);

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
