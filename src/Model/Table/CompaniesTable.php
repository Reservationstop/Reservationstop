<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Companies Model
 *
 * @property \App\Model\Table\TypesTable|\Cake\ORM\Association\BelongsTo $Types
 * @property \App\Model\Table\CountriesTable|\Cake\ORM\Association\BelongsTo $Countries
 * @property \App\Model\Table\StatusesTable|\Cake\ORM\Association\BelongsTo $Statuses
 * @property \App\Model\Table\GroupsTable|\Cake\ORM\Association\BelongsTo $Groups
 * @property \App\Model\Table\CompaniesTable|\Cake\ORM\Association\BelongsTo $ParentCompanies
 * @property \App\Model\Table\TimezonesTable|\Cake\ORM\Association\BelongsTo $Timezones
 * @property \App\Model\Table\CurrenciesTable|\Cake\ORM\Association\BelongsTo $Currencies
 * @property \App\Model\Table\LanguagesTable|\Cake\ORM\Association\BelongsTo $Languages
 * @property \App\Model\Table\GeographicalAreasTable|\Cake\ORM\Association\BelongsTo $GeographicalAreas
 * @property \App\Model\Table\CompaniesTable|\Cake\ORM\Association\HasMany $ChildCompanies
 * @property \App\Model\Table\CompaniesAreasTable|\Cake\ORM\Association\HasMany $CompaniesAreas
 * @property \App\Model\Table\CompaniesAreasOpeningScheduleTable|\Cake\ORM\Association\HasMany $CompaniesAreasOpeningSchedule
 * @property \App\Model\Table\CompaniesAreasOverridesScheduleTable|\Cake\ORM\Association\HasMany $CompaniesAreasOverridesSchedule
 *
 * @method \App\Model\Entity\Company get($primaryKey, $options = [])
 * @method \App\Model\Entity\Company newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Company[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Company|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Company patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Company[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Company findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CompaniesTable extends Table
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

        $this->setTable('companies');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Types', [
            'foreignKey' => 'type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id'
        ]);
        $this->belongsTo('ParentCompanies', [
            'className' => 'Companies',
            'foreignKey' => 'parent_id'
        ]);
        $this->belongsTo('Timezones', [
            'foreignKey' => 'timezone_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Currencies', [
            'foreignKey' => 'currency_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Languages', [
            'foreignKey' => 'language_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('GeographicalAreas', [
            'foreignKey' => 'geographical_area_id'
        ]);
        $this->hasMany('ChildCompanies', [
            'className' => 'Companies',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('CompaniesAreas', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('CompaniesAreasOpeningSchedule', [
            'foreignKey' => 'company_id'
        ]);
        $this->hasMany('CompaniesAreasOverridesSchedule', [
            'foreignKey' => 'company_id'
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
            ->allowEmpty('name');

        $validator
            ->allowEmpty('address');

        $validator
            ->allowEmpty('zip_code');

        $validator
            ->allowEmpty('city');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('phone');

        $validator
            ->numeric('latitude')
            ->allowEmpty('latitude');

        $validator
            ->numeric('longitude')
            ->allowEmpty('longitude');

        $validator
            ->allowEmpty('homepage');

        $validator
            ->boolean('no_portal_show')
            ->requirePresence('no_portal_show', 'create')
            ->notEmpty('no_portal_show');

        $validator
            ->integer('concurrent_users')
            ->requirePresence('concurrent_users', 'create')
            ->notEmpty('concurrent_users');

        $validator
            ->allowEmpty('sms_sender_name');

        $validator
            ->boolean('shared_customers')
            ->requirePresence('shared_customers', 'create')
            ->notEmpty('shared_customers');

        $validator
            ->integer('cvr')
            ->allowEmpty('cvr');

        $validator
            ->integer('cvrp')
            ->allowEmpty('cvrp');

        $validator
            ->integer('price')
            ->allowEmpty('price');

        $validator
            ->allowEmpty('kitchen');

        $validator
            ->allowEmpty('tags');

        $validator
            ->allowEmpty('accountid');

        $validator
            ->requirePresence('insideview', 'create')
            ->notEmpty('insideview');

        $validator
            ->integer('politikenid')
            ->allowEmpty('politikenid')
            ->add('politikenid', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->date('invoice_startdate')
            ->allowEmpty('invoice_startdate');

        $validator
            ->allowEmpty('facebookid');

        $validator
            ->allowEmpty('menulink');

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
        $rules->add($rules->isUnique(['politikenid']));
        $rules->add($rules->existsIn(['type_id'], 'Types'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['status_id'], 'Statuses'));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));
        $rules->add($rules->existsIn(['parent_id'], 'ParentCompanies'));
        $rules->add($rules->existsIn(['timezone_id'], 'Timezones'));
        $rules->add($rules->existsIn(['currency_id'], 'Currencies'));
        $rules->add($rules->existsIn(['language_id'], 'Languages'));
        $rules->add($rules->existsIn(['geographical_area_id'], 'GeographicalAreas'));

        return $rules;
    }
}
