<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pasien Model
 *
 * @method \App\Model\Entity\Pasien newEmptyEntity()
 * @method \App\Model\Entity\Pasien newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pasien[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pasien get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pasien findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pasien patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pasien[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pasien|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pasien saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pasien[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pasien[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pasien[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pasien[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PasienTable extends Table
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

        $this->setTable('pasien');
        $this->setDisplayField('No_RM');
        $this->setPrimaryKey('No_RM');
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
            ->scalar('Tempat_Lahir')
            ->maxLength('Tempat_Lahir', 255)
            ->requirePresence('Tempat_Lahir', 'create')
            ->notEmptyString('Tempat_Lahir');

        $validator
            ->date('Tgl_Lahir')
            ->requirePresence('Tgl_Lahir', 'create')
            ->notEmptyDate('Tgl_Lahir');

        $validator
            ->scalar('Alamat')
            ->maxLength('Alamat', 255)
            ->requirePresence('Alamat', 'create')
            ->notEmptyString('Alamat');

        $validator
            ->scalar('Gol_Darah')
            ->maxLength('Gol_Darah', 5)
            ->requirePresence('Gol_Darah', 'create')
            ->notEmptyString('Gol_Darah');

        return $validator;
    }
}
