<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompaniesArea Entity
 *
 * @property int $id
 * @property int $company_id
 * @property bool $online_avail
 * @property int $priority
 * @property int $status
 * @property string $name
 *
 * @property \App\Model\Entity\Company $company
 */
class CompaniesArea extends Entity
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
