<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dokter Model
 *
 * @method \App\Model\Entity\Dokter newEmptyEntity()
 * @method \App\Model\Entity\Dokter newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Dokter[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dokter get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dokter findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Dokter patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dokter[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dokter|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dokter saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dokter[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dokter[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dokter[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dokter[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DokterTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('dokter');
        $this->setDisplayField('NIK');
        $this->setPrimaryKey('NIK');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('Nama')
            ->maxLength('Nama', 255)
            ->requirePresence('Nama', 'create')
            ->notEmptyString('Nama');

        $validator
            ->scalar('SIP')
            ->maxLength('SIP', 255)
            ->requirePresence('SIP', 'create')
            ->notEmptyString('SIP');

        $validator
            ->scalar('STR')
            ->maxLength('STR', 255)
            ->requirePresence('STR', 'create')
            ->notEmptyString('STR');

        $validator
            ->scalar('Spesialis')
            ->maxLength('Spesialis', 255)
            ->requirePresence('Spesialis', 'create')
            ->notEmptyString('Spesialis');

        return $validator;
    }
}
