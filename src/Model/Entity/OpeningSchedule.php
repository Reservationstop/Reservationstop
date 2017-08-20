<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OpeningSchedule Entity
 *
 * @property int $id
 * @property int $company_id
 * @property int $companies_areas_id
 * @property \Cake\I18n\FrozenDate $pt_start_date
 * @property int $pt_day_of_week
 * @property \Cake\I18n\FrozenTime $pt_opening_hour
 * @property \Cake\I18n\FrozenTime $pt_closing_hour
 * @property int $pt_max_bookings_total
 * @property int $pt_max_pax_total
 * @property \Cake\I18n\FrozenTime $pt_ts
 * @property int $pt_opening_hour_index
 * @property int $pt_closing_hour_index
 * @property int $pt_def_book_len
 * @property int $subspaces_masterplan_id
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\CompaniesArea $companies_area
 * @property \App\Model\Entity\SubspacesMasterplan $subspaces_masterplan
 */
class OpeningSchedule extends Entity
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
