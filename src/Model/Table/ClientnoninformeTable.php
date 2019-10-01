<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientnoninforme Model
 *
 * @method \App\Model\Entity\Clientnoninforme get($primaryKey, $options = [])
 * @method \App\Model\Entity\Clientnoninforme newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Clientnoninforme[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Clientnoninforme|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Clientnoninforme saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Clientnoninforme patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Clientnoninforme[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Clientnoninforme findOrCreate($search, callable $callback = null, $options = [])
 */
class ClientnoninformeTable extends Table
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

        $this->setTable('clientnoninforme');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('client')
            ->maxLength('client', 255)
            ->requirePresence('client', 'create')
            ->allowEmptyString('client', false);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmptyString('email', false);

        $validator
            ->scalar('numerodossier')
            ->maxLength('numerodossier', 255)
            ->requirePresence('numerodossier', 'create')
            ->allowEmptyString('numerodossier', false);

        $validator
            ->scalar('typedossier')
            ->maxLength('typedossier', 255)
            ->requirePresence('typedossier', 'create')
            ->allowEmptyString('typedossier', false);

        $validator
            ->scalar('decision')
            ->maxLength('decision', 255)
            ->requirePresence('decision', 'create')
            ->allowEmptyString('decision', false);

        $validator
            ->boolean('Prevenu')
            ->requirePresence('Prevenu', 'create')
            ->allowEmptyString('Prevenu', false);

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

        return $rules;
    }
}
