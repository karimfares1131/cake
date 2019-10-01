<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Visite Controller
 *
 * @property \App\Model\Table\VisiteTable $Visite
 *
 * @method \App\Model\Entity\Visite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VisiteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $visite = $this->paginate($this->Visite);

        $this->set(compact('visite'));
    }

    /**
     * View method
     *
     * @param string|null $id Visite id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $visite = $this->Visite->get($id, [
            'contain' => []
        ]);

        $this->set('visite', $visite);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $visite = $this->Visite->newEntity();
        if ($this->request->is('post')) {
            $visite = $this->Visite->patchEntity($visite, $this->request->getData());
            if ($this->Visite->save($visite)) {
                $this->Flash->success(__('The visite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The visite could not be saved. Please, try again.'));
        }
        $this->set(compact('visite'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Visite id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $visite = $this->Visite->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $visite = $this->Visite->patchEntity($visite, $this->request->getData());
            if ($this->Visite->save($visite)) {
                $this->Flash->success(__('The visite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The visite could not be saved. Please, try again.'));
        }
        $this->set(compact('visite'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Visite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $visite = $this->Visite->get($id);
        if ($this->Visite->delete($visite)) {
            $this->Flash->success(__('The visite has been deleted.'));
        } else {
            $this->Flash->error(__('The visite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
