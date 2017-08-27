<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AreasController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AreasController Test Case
 */
class AreasControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.areas',
        'app.countries',
        'app.currencies',
        'app.companies',
        'app.types',
        'app.statuses',
        'app.groups',
        'app.timezones',
        'app.languages',
        'app.alternative_languages',
        'app.users',
        'app.user_permissions',
        'app.roles',
        'app.restaurants',
        'app.companies_areas',
        'app.opening_schedule',
        'app.subspaces_masterplans',
        'app.overrides_company_schedule'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
