<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Listedoss Controller
 *
 * @property \App\Model\Table\ListedossTable $Listedoss
 *
 * @method \App\Model\Entity\Listedos[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ListedossController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $listedoss = $this->paginate($this->Listedoss);

        $this->set(compact('listedoss'));
    }

    /**
     * View method
     *
     * @param string|null $id Listedos id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listedos = $this->Listedoss->get($id, [
            'contain' => []
        ]);

        $this->set('listedos', $listedos);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listedos = $this->Listedoss->newEntity();
        if ($this->request->is('post')) {
            $listedos = $this->Listedoss->patchEntity($listedos, $this->request->getData());
            if ($this->Listedoss->save($listedos)) {
                $this->Flash->success(__('The listedos has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listedos could not be saved. Please, try again.'));
        }
        $this->set(compact('listedos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Listedos id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listedos = $this->Listedoss->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listedos = $this->Listedoss->patchEntity($listedos, $this->request->getData());
            if ($this->Listedoss->save($listedos)) {
                $this->Flash->success(__('The listedos has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listedos could not be saved. Please, try again.'));
        }
        $this->set(compact('listedos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Listedos id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listedos = $this->Listedoss->get($id);
        if ($this->Listedoss->delete($listedos)) {
            $this->Flash->success(__('The listedos has been deleted.'));
        } else {
            $this->Flash->error(__('The listedos could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
