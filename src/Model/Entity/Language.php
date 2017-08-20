<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Language Entity
 *
 * @property int $id
 * @property string $name
 * @property string $ccode
 * @property string $iso
 * @property string $locale_win
 * @property bool $default_active
 * @property int $alternative_language_id
 * @property bool $active
 *
 * @property \App\Model\Entity\AlternativeLanguage $alternative_language
 * @property \App\Model\Entity\User[] $users
 */
class Language extends Entity
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
