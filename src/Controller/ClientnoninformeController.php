<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clientnoninforme Controller
 *
 * @property \App\Model\Table\ClientnoninformeTable $Clientnoninforme
 *
 * @method \App\Model\Entity\Clientnoninforme[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientnoninformeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $clientnoninforme = $this->paginate($this->Clientnoninforme);

        $this->set(compact('clientnoninforme'));
    }

    /**
     * View method
     *
     * @param string|null $id Clientnoninforme id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientnoninforme = $this->Clientnoninforme->get($id, [
            'contain' => []
        ]);

        $this->set('clientnoninforme', $clientnoninforme);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientnoninforme = $this->Clientnoninforme->newEntity();
        if ($this->request->is('post')) {
            $clientnoninforme = $this->Clientnoninforme->patchEntity($clientnoninforme, $this->request->getData());
            if ($this->Clientnoninforme->save($clientnoninforme)) {
                $this->Flash->success(__('The clientnoninforme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clientnoninforme could not be saved. Please, try again.'));
        }
        $this->set(compact('clientnoninforme'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Clientnoninforme id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientnoninforme = $this->Clientnoninforme->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientnoninforme = $this->Clientnoninforme->patchEntity($clientnoninforme, $this->request->getData());
            if ($this->Clientnoninforme->save($clientnoninforme)) {
                $this->Flash->success(__('The clientnoninforme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clientnoninforme could not be saved. Please, try again.'));
        }
        $this->set(compact('clientnoninforme'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Clientnoninforme id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientnoninforme = $this->Clientnoninforme->get($id);
        if ($this->Clientnoninforme->delete($clientnoninforme)) {
            $this->Flash->success(__('The clientnoninforme has been deleted.'));
        } else {
            $this->Flash->error(__('The clientnoninforme could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
