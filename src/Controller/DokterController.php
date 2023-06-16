<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Dokter Controller
 *
 * @property \App\Model\Table\DokterTable $Dokter
 * @method \App\Model\Entity\Dokter[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DokterController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $dokter = $this->paginate($this->Dokter);

        $this->set(compact('dokter'));
    }

    /**
     * View method
     *
     * @param string|null $id Dokter id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dokter = $this->Dokter->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('dokter'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dokter = $this->Dokter->newEmptyEntity();
        if ($this->request->is('post')) {
            $dokter = $this->Dokter->patchEntity($dokter, $this->request->getData());
            if ($this->Dokter->save($dokter)) {
                $this->Flash->success(__('The dokter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dokter could not be saved. Please, try again.'));
        }
        $this->set(compact('dokter'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dokter id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dokter = $this->Dokter->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dokter = $this->Dokter->patchEntity($dokter, $this->request->getData());
            if ($this->Dokter->save($dokter)) {
                $this->Flash->success(__('The dokter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dokter could not be saved. Please, try again.'));
        }
        $this->set(compact('dokter'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dokter id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dokter = $this->Dokter->get($id);
        if ($this->Dokter->delete($dokter)) {
            $this->Flash->success(__('The dokter has been deleted.'));
        } else {
            $this->Flash->error(__('The dokter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
