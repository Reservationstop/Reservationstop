<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\CountriesTable|\Cake\ORM\Association\BelongsTo $Countries
 * @property \App\Model\Table\LanguagesTable|\Cake\ORM\Association\BelongsTo $Languages
 * @property \App\Model\Table\FacebooksTable|\Cake\ORM\Association\BelongsTo $Facebooks
 * @property \App\Model\Table\UserPermissionsTable|\Cake\ORM\Association\HasMany $UserPermissions
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Languages', [
            'foreignKey' => 'language_id'
        ]);
//        $this->belongsTo('Facebooks', [
//            'foreignKey' => 'facebook_id'
//        ]);
        $this->hasMany('UserPermissions', [
            'foreignKey' => 'user_id'
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

        $validator
            ->email('email')
            ->allowEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->allowEmpty('first_name');

        $validator
            ->allowEmpty('last_name');

        $validator
            ->allowEmpty('address');

        $validator
            ->allowEmpty('zip_code');

        $validator
            ->allowEmpty('city');

        $validator
            ->allowEmpty('company');

        $validator
            ->allowEmpty('phone');

        $validator
            ->date('birthday')
            ->allowEmpty('birthday');

        $validator
            ->allowEmpty('initials');

        $validator
            ->boolean('deleted_at')
            ->allowEmpty('deleted_at');

//        $validator
//            ->allowEmpty('from');

        $validator
            ->allowEmpty('gender');

        $validator
            ->dateTime('changed_password')
            ->allowEmpty('changed_password');

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
        $rules->add($rules->isUnique(['email']));
        //$rules->add($rules->existsIn(['facebook_id'], 'Facebooks'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['language_id'], 'Languages'));

        return $rules;
    }
}
