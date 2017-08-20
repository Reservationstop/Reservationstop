<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OpeningSchedule Model
 *
 * @property \App\Model\Table\CompaniesTable|\Cake\ORM\Association\BelongsTo $Companies
 * @property \App\Model\Table\CompaniesAreasTable|\Cake\ORM\Association\BelongsTo $CompaniesAreas
 * @property \App\Model\Table\SubspacesMasterplansTable|\Cake\ORM\Association\BelongsTo $SubspacesMasterplans
 *
 * @method \App\Model\Entity\OpeningSchedule get($primaryKey, $options = [])
 * @method \App\Model\Entity\OpeningSchedule newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OpeningSchedule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OpeningSchedule|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OpeningSchedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OpeningSchedule[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OpeningSchedule findOrCreate($search, callable $callback = null, $options = [])
 */
class OpeningScheduleTable extends Table
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

        $this->setTable('opening_schedule');
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
        $this->belongsTo('SubspacesMasterplans', [
            'foreignKey' => 'subspaces_masterplan_id',
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
            ->date('pt_start_date')
            ->requirePresence('pt_start_date', 'create')
            ->notEmpty('pt_start_date');

        $validator
            ->integer('pt_day_of_week')
            ->requirePresence('pt_day_of_week', 'create')
            ->notEmpty('pt_day_of_week');

        $validator
            ->time('pt_opening_hour')
            ->requirePresence('pt_opening_hour', 'create')
            ->notEmpty('pt_opening_hour');

        $validator
            ->time('pt_closing_hour')
            ->requirePresence('pt_closing_hour', 'create')
            ->notEmpty('pt_closing_hour');

        $validator
            ->integer('pt_max_bookings_total')
            ->requirePresence('pt_max_bookings_total', 'create')
            ->notEmpty('pt_max_bookings_total');

        $validator
            ->integer('pt_max_pax_total')
            ->requirePresence('pt_max_pax_total', 'create')
            ->notEmpty('pt_max_pax_total');

        $validator
            ->dateTime('pt_ts')
            ->requirePresence('pt_ts', 'create')
            ->notEmpty('pt_ts');

        $validator
            ->integer('pt_opening_hour_index')
            ->requirePresence('pt_opening_hour_index', 'create')
            ->notEmpty('pt_opening_hour_index');

        $validator
            ->integer('pt_closing_hour_index')
            ->requirePresence('pt_closing_hour_index', 'create')
            ->notEmpty('pt_closing_hour_index');

        $validator
            ->integer('pt_def_book_len')
            ->requirePresence('pt_def_book_len', 'create')
            ->notEmpty('pt_def_book_len');

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
        $rules->add($rules->existsIn(['subspaces_masterplan_id'], 'SubspacesMasterplans'));

        return $rules;
    }
}
