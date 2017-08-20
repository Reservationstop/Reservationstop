<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OpeningScheduleFixture
 *
 */
class OpeningScheduleFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'opening_schedule';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'company_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'companies_areas_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pt_start_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'pt_day_of_week' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pt_opening_hour' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'pt_closing_hour' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'pt_max_bookings_total' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pt_max_pax_total' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pt_ts' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'pt_opening_hour_index' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pt_closing_hour_index' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pt_def_book_len' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'subspaces_masterplan_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
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
            'company_id' => 1,
            'companies_areas_id' => 1,
            'pt_start_date' => '2017-08-19',
            'pt_day_of_week' => 1,
            'pt_opening_hour' => '18:14:54',
            'pt_closing_hour' => '18:14:54',
            'pt_max_bookings_total' => 1,
            'pt_max_pax_total' => 1,
            'pt_ts' => 1503166494,
            'pt_opening_hour_index' => 1,
            'pt_closing_hour_index' => 1,
            'pt_def_book_len' => 1,
            'subspaces_masterplan_id' => 1
        ],
    ];
}
