<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pasien Controller
 *
 * @property \App\Model\Table\PasienTable $Pasien
 * @method \App\Model\Entity\Pasien[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PasienController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $pasien = $this->paginate($this->Pasien);

        $this->set(compact('pasien'));
    }

    /**
     * View method
     *
     * @param string|null $id Pasien id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pasien = $this->Pasien->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('pasien'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pasien = $this->Pasien->newEmptyEntity();
        if ($this->request->is('post')) {
            $pasien = $this->Pasien->patchEntity($pasien, $this->request->getData());
            if ($this->Pasien->save($pasien)) {
                $this->Flash->success(__('The pasien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pasien could not be saved. Please, try again.'));
        }
        $this->set(compact('pasien'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pasien id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pasien = $this->Pasien->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pasien = $this->Pasien->patchEntity($pasien, $this->request->getData());
            if ($this->Pasien->save($pasien)) {
                $this->Flash->success(__('The pasien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pasien could not be saved. Please, try again.'));
        }
        $this->set(compact('pasien'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pasien id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pasien = $this->Pasien->get($id);
        if ($this->Pasien->delete($pasien)) {
            $this->Flash->success(__('The pasien has been deleted.'));
        } else {
            $this->Flash->error(__('The pasien could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
