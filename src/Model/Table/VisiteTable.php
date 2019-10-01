<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Visite Model
 *
 * @method \App\Model\Entity\Visite get($primaryKey, $options = [])
 * @method \App\Model\Entity\Visite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Visite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Visite|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visite saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Visite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Visite findOrCreate($search, callable $callback = null, $options = [])
 */
class VisiteTable extends Table
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

        $this->setTable('visite');
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
            ->integer('numerodossier')
            ->requirePresence('numerodossier', 'create')
            ->allowEmptyString('numerodossier', false);

        $validator
            ->scalar('garantie')
            ->maxLength('garantie', 255)
            ->requirePresence('garantie', 'create')
            ->allowEmptyString('garantie', false);

        $validator
            ->dateTime('dateetheurevisiter')
            ->requirePresence('dateetheurevisiter', 'create')
            ->allowEmptyDateTime('dateetheurevisiter', false);

        return $validator;
    }
}
