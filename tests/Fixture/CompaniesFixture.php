<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CompaniesFixture
 *
 */
class CompaniesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'type_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'country_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => '53', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'status_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'group_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'parent_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'timezone_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => '35', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'currency_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'language_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 90, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'address' => ['type' => 'string', 'length' => 90, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'zip_code' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'city' => ['type' => 'string', 'length' => 90, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 180, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'phone' => ['type' => 'string', 'length' => 90, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'latitude' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'longitude' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'homepage' => ['type' => 'string', 'length' => 180, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'no_portal_show' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'concurrent_users' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => '99', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sms_sender_name' => ['type' => 'string', 'length' => 90, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'shared_customers' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'cvr' => ['type' => 'integer', 'length' => 8, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cvrp' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'area_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'areas' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'price' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'kitchen' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'tags' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'accountid' => ['type' => 'string', 'length' => 90, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'app_type' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => 'full', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'insideview' => ['type' => 'string', 'length' => 720, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'politikenid' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'invoice_startdate' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'facebookid' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'menulink' => ['type' => 'string', 'length' => 360, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_restaurants_statuses' => ['type' => 'index', 'columns' => ['status_id'], 'length' => []],
            'fk_restaurants_restaurants' => ['type' => 'index', 'columns' => ['parent_id'], 'length' => []],
            'fk_restaurants_groups' => ['type' => 'index', 'columns' => ['group_id'], 'length' => []],
            'fk_restaurants_timezones' => ['type' => 'index', 'columns' => ['timezone_id'], 'length' => []],
            'fk_restaurants_currencies' => ['type' => 'index', 'columns' => ['currency_id'], 'length' => []],
            'fk_restaurants_languages' => ['type' => 'index', 'columns' => ['language_id'], 'length' => []],
            'fk_restaurants_areas' => ['type' => 'index', 'columns' => ['area_id'], 'length' => []],
            'fk_restaurants_countries' => ['type' => 'index', 'columns' => ['country_id'], 'length' => []],
            'fk_restaurants_types' => ['type' => 'index', 'columns' => ['type_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'politikenid_UNIQUE' => ['type' => 'unique', 'columns' => ['politikenid'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'type_id' => 1,
            'country_id' => 1,
            'status_id' => 1,
            'group_id' => 1,
            'parent_id' => 1,
            'timezone_id' => 1,
            'currency_id' => 1,
            'language_id' => 1,
            'name' => 'Lorem ipsum dolor sit amet',
            'address' => 'Lorem ipsum dolor sit amet',
            'zip_code' => 'Lorem ipsum dolor sit amet',
            'city' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet',
            'phone' => 'Lorem ipsum dolor sit amet',
            'latitude' => 1,
            'longitude' => 1,
            'homepage' => 'Lorem ipsum dolor sit amet',
            'no_portal_show' => 1,
            'concurrent_users' => 1,
            'sms_sender_name' => 'Lorem ipsum dolor sit amet',
            'shared_customers' => 1,
            'cvr' => 1,
            'cvrp' => 1,
            'area_id' => 1,
            'areas' => 'Lorem ipsum dolor ',
            'price' => 1,
            'kitchen' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'tags' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'accountid' => 'Lorem ipsum dolor sit amet',
            'app_type' => 'Lorem ipsum dolor sit amet',
            'insideview' => 'Lorem ipsum dolor sit amet',
            'politikenid' => 1,
            'invoice_startdate' => '2017-07-27',
            'facebookid' => 1,
            'menulink' => 'Lorem ipsum dolor sit amet',
            'created' => '2017-07-27 20:01:03',
            'modified' => '2017-07-27 20:01:03'
        ],
    ];
}
