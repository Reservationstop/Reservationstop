<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SubspacesMasterplan Entity
 *
 * @property int $id
 * @property int $top
 * @property int $left_
 * @property int $priority
 * @property int $type
 * @property string $group_nr
 * @property string $table_nr
 * @property int $min_be_allow
 * @property int $angle
 * @property int $capacity
 * @property int $index_
 * @property \Cake\I18n\FrozenTime $timestamp
 * @property int $companies_id
 * @property int $availableint
 * @property int $availableex
 * @property int $table_book_length
 * @property int $group_priority
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\OpeningSchedule[] $opening_schedule
 */
class SubspacesMasterplan extends Entity
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
