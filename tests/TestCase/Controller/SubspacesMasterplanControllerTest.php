<?php
namespace App\Test\TestCase\Controller;

use App\Controller\SubspacesMasterplanController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\SubspacesMasterplanController Test Case
 */
class SubspacesMasterplanControllerTest extends IntegrationTestCase
{

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
