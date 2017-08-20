<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SubspacesMasterplans Controller
 *
 * @property \App\Model\Table\SubspacesMasterplansTable $SubspacesMasterplans
 *
 * @method \App\Model\Entity\SubspacesMasterplan[] paginate($object = null, array $settings = [])
 */
class SubspacesMasterplansController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies']
        ];
        $subspacesMasterplans = $this->paginate($this->SubspacesMasterplans);

        $this->set(compact('subspacesMasterplans'));
        $this->set('_serialize', ['subspacesMasterplans']);
    }

    /**
     * View method
     *
     * @param string|null $id Subspaces Masterplan id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subspacesMasterplan = $this->SubspacesMasterplans->get($id, [
            'contain' => ['Companies', 'OpeningSchedule']
        ]);

        $this->set('subspacesMasterplan', $subspacesMasterplan);
        $this->set('_serialize', ['subspacesMasterplan']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subspacesMasterplan = $this->SubspacesMasterplans->newEntity();
        if ($this->request->is('post')) {
            $subspacesMasterplan = $this->SubspacesMasterplans->patchEntity($subspacesMasterplan, $this->request->getData());
            if ($this->SubspacesMasterplans->save($subspacesMasterplan)) {
                $this->Flash->success(__('The subspaces masterplan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subspaces masterplan could not be saved. Please, try again.'));
        }
        $companies = $this->SubspacesMasterplans->Companies->find('list', ['limit' => 200]);
        $this->set(compact('subspacesMasterplan', 'companies'));
        $this->set('_serialize', ['subspacesMasterplan']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subspaces Masterplan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subspacesMasterplan = $this->SubspacesMasterplans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subspacesMasterplan = $this->SubspacesMasterplans->patchEntity($subspacesMasterplan, $this->request->getData());
            if ($this->SubspacesMasterplans->save($subspacesMasterplan)) {
                $this->Flash->success(__('The subspaces masterplan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subspaces masterplan could not be saved. Please, try again.'));
        }
        $companies = $this->SubspacesMasterplans->Companies->find('list', ['limit' => 200]);
        $this->set(compact('subspacesMasterplan', 'companies'));
        $this->set('_serialize', ['subspacesMasterplan']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subspaces Masterplan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subspacesMasterplan = $this->SubspacesMasterplans->get($id);
        if ($this->SubspacesMasterplans->delete($subspacesMasterplan)) {
            $this->Flash->success(__('The subspaces masterplan has been deleted.'));
        } else {
            $this->Flash->error(__('The subspaces masterplan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
