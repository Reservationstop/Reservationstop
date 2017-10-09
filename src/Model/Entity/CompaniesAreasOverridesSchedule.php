<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompaniesAreasOverridesSchedule Entity
 *
 * @property int $id
 * @property int $companies_areas_id
 * @property int $company_id
 * @property \Cake\I18n\FrozenDate $start_date
 * @property \Cake\I18n\FrozenTime $opening_hour
 * @property \Cake\I18n\FrozenTime $closing_hour
 * @property int $max_bookings_total
 * @property int $max_pax_total
 * @property \Cake\I18n\FrozenTime $ts
 * @property int $opening_hour_index
 * @property int $closing_hour_index
 * @property int $def_book_len
 * @property int $companies_areas_masterplans_id
 * @property \Cake\I18n\FrozenDate $stop_date
 * @property string $resource_type
 * @property string $group_days
 * @property string $group_id
 *
 * @property \App\Model\Entity\CompaniesArea $companies_area
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\CompaniesAreasMasterplan $companies_areas_masterplan
 * @property \App\Model\Entity\Group $group
 */
class CompaniesAreasOverridesSchedule extends Entity
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
