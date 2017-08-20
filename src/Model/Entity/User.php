<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $country_id
 * @property int $language_id
 * @property string $email
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $zip_code
 * @property string $city
 * @property string $company
 * @property string $phone
 * @property \Cake\I18n\FrozenDate $birthday
 * @property string $initials
 * @property bool $deleted_at
 * @property int $facebook_id
 * @property string $from
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $gender
 * @property \Cake\I18n\FrozenTime $changed_password
 *
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Language $language
 * @property \App\Model\Entity\Facebook $facebook
 * @property \App\Model\Entity\UserPermission[] $user_permissions
 */
class User extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

	 protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
