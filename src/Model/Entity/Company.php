<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity
 *
 * @property int $id
 * @property int $type_id
 * @property int $country_id
 * @property int $status_id
 * @property int $group_id
 * @property int $parent_id
 * @property int $timezone_id
 * @property int $currency_id
 * @property int $language_id
 * @property string $name
 * @property string $address
 * @property string $zip_code
 * @property string $city
 * @property string $email
 * @property string $phone
 * @property float $latitude
 * @property float $longitude
 * @property string $homepage
 * @property bool $no_portal_show
 * @property int $concurrent_users
 * @property string $sms_sender_name
 * @property bool $shared_customers
 * @property int $cvr
 * @property int $cvrp
 * @property int $geographical_area_id
 * @property int $price
 * @property string $kitchen
 * @property string $tags
 * @property string $accountid
 * @property string $insideview
 * @property int $politikenid
 * @property \Cake\I18n\FrozenDate $invoice_startdate
 * @property int $facebookid
 * @property string $menulink
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Type $type
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\ParentCompany $parent_company
 * @property \App\Model\Entity\Timezone $timezone
 * @property \App\Model\Entity\Currency $currency
 * @property \App\Model\Entity\Language $language
 * @property \App\Model\Entity\GeographicalArea $geographical_area
 * @property \App\Model\Entity\ChildCompany[] $child_companies
 * @property \App\Model\Entity\CompaniesArea[] $companies_areas
 * @property \App\Model\Entity\CompaniesAreasOpeningSchedule[] $companies_areas_opening_schedule
 * @property \App\Model\Entity\CompaniesAreasOverridesSchedule[] $companies_areas_overrides_schedule
 */
class Company extends Entity
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
