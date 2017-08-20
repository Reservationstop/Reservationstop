<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubspacesMasterplans Model
 *
 * @property \App\Model\Table\CompaniesTable|\Cake\ORM\Association\BelongsTo $Companies
 * @property \App\Model\Table\OpeningScheduleTable|\Cake\ORM\Association\HasMany $OpeningSchedule
 *
 * @method \App\Model\Entity\SubspacesMasterplan get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubspacesMasterplan newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SubspacesMasterplan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubspacesMasterplan|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubspacesMasterplan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubspacesMasterplan[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubspacesMasterplan findOrCreate($search, callable $callback = null, $options = [])
 */
class SubspacesMasterplansTable extends Table
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

        $this->setTable('subspaces_masterplans');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Companies', [
            'foreignKey' => 'companies_id'
        ]);
        $this->hasMany('OpeningSchedule', [
            'foreignKey' => 'subspaces_masterplan_id'
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
            ->integer('top')
            ->requirePresence('top', 'create')
            ->notEmpty('top');

        $validator
            ->integer('left_')
            ->requirePresence('left_', 'create')
            ->notEmpty('left_');

        $validator
            ->integer('priority')
            ->requirePresence('priority', 'create')
            ->notEmpty('priority');

        $validator
            ->integer('type')
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->requirePresence('group_nr', 'create')
            ->notEmpty('group_nr');

        $validator
            ->requirePresence('table_nr', 'create')
            ->notEmpty('table_nr');

        $validator
            ->integer('min_be_allow')
            ->requirePresence('min_be_allow', 'create')
            ->notEmpty('min_be_allow');

        $validator
            ->integer('angle')
            ->requirePresence('angle', 'create')
            ->notEmpty('angle');

        $validator
            ->integer('capacity')
            ->requirePresence('capacity', 'create')
            ->notEmpty('capacity');

        $validator
            ->integer('index_')
            ->requirePresence('index_', 'create')
            ->notEmpty('index_');

        $validator
            ->dateTime('timestamp')
            ->allowEmpty('timestamp');

        $validator
            ->integer('availableint')
            ->requirePresence('availableint', 'create')
            ->notEmpty('availableint');

        $validator
            ->integer('availableex')
            ->requirePresence('availableex', 'create')
            ->notEmpty('availableex');

        $validator
            ->integer('table_book_length')
            ->allowEmpty('table_book_length');

        $validator
            ->integer('group_priority')
            ->allowEmpty('group_priority');

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
        $rules->add($rules->existsIn(['companies_id'], 'Companies'));

        return $rules;
    }
}
