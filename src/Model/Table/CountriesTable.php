<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Countries Model
 *
 * @property \App\Model\Table\CurrenciesTable|\Cake\ORM\Association\BelongsTo $Currencies
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Country get($primaryKey, $options = [])
 * @method \App\Model\Entity\Country newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Country[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Country|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Country patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Country[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Country findOrCreate($search, callable $callback = null, $options = [])
 */
class CountriesTable extends Table
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

        $this->setTable('countries');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Currencies', [
            'foreignKey' => 'currency_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'country_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('code', 'create')
            ->notEmpty('code')
            ->add('code', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('phone')
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->boolean('main')
            ->allowEmpty('main');

        $validator
            ->integer('phone_length')
            ->allowEmpty('phone_length');

        $validator
            ->integer('phone_length_max')
            ->allowEmpty('phone_length_max');

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
        $rules->add($rules->isUnique(['code']));
        $rules->add($rules->isUnique(['name']));
        $rules->add($rules->existsIn(['currency_id'], 'Currencies'));

        return $rules;
    }
}
