<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CompaniesAreasOpeningSchedule Model
 *
 * @property \App\Model\Table\CompaniesTable|\Cake\ORM\Association\BelongsTo $Companies
 * @property \App\Model\Table\CompaniesAreasTable|\Cake\ORM\Association\BelongsTo $CompaniesAreas
 * @property \App\Model\Table\CompaniesAreasMasterplansTable|\Cake\ORM\Association\BelongsTo $CompaniesAreasMasterplans
 *
 * @method \App\Model\Entity\CompaniesAreasOpeningSchedule get($primaryKey, $options = [])
 * @method \App\Model\Entity\CompaniesAreasOpeningSchedule newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CompaniesAreasOpeningSchedule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CompaniesAreasOpeningSchedule|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompaniesAreasOpeningSchedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CompaniesAreasOpeningSchedule[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CompaniesAreasOpeningSchedule findOrCreate($search, callable $callback = null, $options = [])
 */
class CompaniesAreasOpeningScheduleTable extends Table
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

        $this->setTable('companies_areas_opening_schedule');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CompaniesAreas', [
            'foreignKey' => 'companies_areas_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CompaniesAreasMasterplans', [
            'foreignKey' => 'companies_areas_masterplans_id',
            'joinType' => 'INNER'
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
            ->date('start_date')
            ->requirePresence('start_date', 'create')
            ->notEmpty('start_date');

        $validator
            ->integer('day_of_week')
            ->requirePresence('day_of_week', 'create')
            ->notEmpty('day_of_week');

        $validator
            ->time('opening_hour')
            ->requirePresence('opening_hour', 'create')
            ->notEmpty('opening_hour');

        $validator
            ->time('closing_hour')
            ->requirePresence('closing_hour', 'create')
            ->notEmpty('closing_hour');

        $validator
            ->integer('max_bookings_total')
            ->requirePresence('max_bookings_total', 'create')
            ->notEmpty('max_bookings_total');

        $validator
            ->integer('max_pax_total')
            ->requirePresence('max_pax_total', 'create')
            ->notEmpty('max_pax_total');

        $validator
            ->dateTime('ts')
            ->requirePresence('ts', 'create')
            ->notEmpty('ts');

        $validator
            ->integer('opening_hour_index')
            ->requirePresence('opening_hour_index', 'create')
            ->notEmpty('opening_hour_index');

        $validator
            ->integer('closing_hour_index')
            ->requirePresence('closing_hour_index', 'create')
            ->notEmpty('closing_hour_index');

        $validator
            ->integer('def_book_len')
            ->requirePresence('def_book_len', 'create')
            ->notEmpty('def_book_len');

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
        $rules->add($rules->existsIn(['company_id'], 'Companies'));
        $rules->add($rules->existsIn(['companies_areas_id'], 'CompaniesAreas'));
        $rules->add($rules->existsIn(['companies_areas_masterplans_id'], 'CompaniesAreasMasterplans'));

        return $rules;
    }
}
