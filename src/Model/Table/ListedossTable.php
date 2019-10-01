<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Listedoss Model
 *
 * @method \App\Model\Entity\Listedos get($primaryKey, $options = [])
 * @method \App\Model\Entity\Listedos newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Listedos[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Listedos|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Listedos saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Listedos patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Listedos[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Listedos findOrCreate($search, callable $callback = null, $options = [])
 */
class ListedossTable extends Table
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

        $this->setTable('listedoss');
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
            ->scalar('type')
            ->maxLength('type', 255)
            ->requirePresence('type', 'create')
            ->allowEmptyString('type', false);

        $validator
            ->date('datedarrivée')
            ->requirePresence('datedarrivée', 'create')
            ->allowEmptyDate('datedarrivée', false);

        $validator
            ->date('deadline')
            ->requirePresence('deadline', 'create')
            ->allowEmptyDate('deadline', false);

        $validator
            ->integer('credit')
            ->requirePresence('credit', 'create')
            ->allowEmptyString('credit', false);

        $validator
            ->scalar('garanties')
            ->maxLength('garanties', 255)
            ->requirePresence('garanties', 'create')
            ->allowEmptyString('garanties', false);

        $validator
            ->requirePresence('fichier', 'create')
            ->allowEmptyString('fichier', false);

        $validator
            ->scalar('direction')
            ->maxLength('direction', 255)
            ->requirePresence('direction', 'create')
            ->allowEmptyString('direction', false);

        return $validator;
    }
}
