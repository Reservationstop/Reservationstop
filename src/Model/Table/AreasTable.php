<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Areas Model
 *
 * @property \App\Model\Table\AreasTable|\Cake\ORM\Association\BelongsTo $ParentAreas
 * @property \App\Model\Table\CountriesTable|\Cake\ORM\Association\BelongsTo $Countries
 * @property \App\Model\Table\AreasTable|\Cake\ORM\Association\HasMany $ChildAreas
 * @property \App\Model\Table\CompaniesTable|\Cake\ORM\Association\HasMany $Companies
 *
 * @method \App\Model\Entity\Area get($primaryKey, $options = [])
 * @method \App\Model\Entity\Area newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Area[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Area|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Area patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Area[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Area findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TreeBehavior
 */
class AreasTable extends Table
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

        $this->setTable('areas');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Tree');

        $this->belongsTo('ParentAreas', [
            'className' => 'Areas',
            'foreignKey' => 'parent_id'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ChildAreas', [
            'className' => 'Areas',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('Companies', [
            'foreignKey' => 'area_id'
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
            ->notEmpty('name');

        $validator
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->numeric('latitude')
            ->allowEmpty('latitude');

        $validator
            ->numeric('longitude')
            ->allowEmpty('longitude');

        $validator
            ->allowEmpty('keywords');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentAreas'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));

        return $rules;
    }
}
