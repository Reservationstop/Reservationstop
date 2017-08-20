<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Area Entity
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property int $lft
 * @property int $parent_id
 * @property int $rght
 * @property float $latitude
 * @property float $longitude
 * @property int $country_id
 * @property string $keywords
 *
 * @property \App\Model\Entity\ParentArea $parent_area
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\ChildArea[] $child_areas
 * @property \App\Model\Entity\Company[] $companies
 */
class Area extends Entity
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
