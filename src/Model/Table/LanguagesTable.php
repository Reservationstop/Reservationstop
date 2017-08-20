<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Languages Model
 *
 * @property \App\Model\Table\AlternativeLanguagesTable|\Cake\ORM\Association\BelongsTo $AlternativeLanguages
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Language get($primaryKey, $options = [])
 * @method \App\Model\Entity\Language newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Language[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Language|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Language patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Language[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Language findOrCreate($search, callable $callback = null, $options = [])
 */
class LanguagesTable extends Table
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

        $this->setTable('languages');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('AlternativeLanguages', [
            'foreignKey' => 'alternative_language_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'language_id'
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
            ->requirePresence('ccode', 'create')
            ->notEmpty('ccode')
            ->add('ccode', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('iso', 'create')
            ->notEmpty('iso')
            ->add('iso', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('locale_win', 'create')
            ->notEmpty('locale_win')
            ->add('locale_win', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->boolean('default_active')
            ->allowEmpty('default_active');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

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
        $rules->add($rules->isUnique(['name']));
        $rules->add($rules->isUnique(['ccode']));
        $rules->add($rules->isUnique(['iso']));
        $rules->add($rules->isUnique(['locale_win']));
        $rules->add($rules->existsIn(['alternative_language_id'], 'AlternativeLanguages'));

        return $rules;
    }
}
