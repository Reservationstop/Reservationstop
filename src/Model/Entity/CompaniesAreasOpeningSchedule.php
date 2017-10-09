<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompaniesAreasOpeningSchedule Entity
 *
 * @property int $id
 * @property int $company_id
 * @property int $companies_areas_id
 * @property \Cake\I18n\FrozenDate $start_date
 * @property int $day_of_week
 * @property \Cake\I18n\FrozenTime $opening_hour
 * @property \Cake\I18n\FrozenTime $closing_hour
 * @property int $max_bookings_total
 * @property int $max_pax_total
 * @property \Cake\I18n\FrozenTime $ts
 * @property int $opening_hour_index
 * @property int $closing_hour_index
 * @property int $def_book_len
 * @property int $companies_areas_masterplans_id
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\CompaniesArea $companies_area
 * @property \App\Model\Entity\CompaniesAreasMasterplan $companies_areas_masterplan
 */
class CompaniesAreasOpeningSchedule extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
