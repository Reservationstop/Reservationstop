<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserPermissions Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\RolesTable|\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\RestaurantsTable|\Cake\ORM\Association\BelongsTo $Restaurants
 *
 * @method \App\Model\Entity\UserPermission get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserPermission newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserPermission[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserPermission|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserPermission patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserPermission[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserPermission findOrCreate($search, callable $callback = null, $options = [])
 */
class UserPermissionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('user_permissions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Restaurants', [
            'foreignKey' => 'restaurant_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));
        $rules->add($rules->existsIn(['restaurant_id'], 'Restaurants'));

        return $rules;
    }
}
