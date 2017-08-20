<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OpeningSchedule Controller
 *
 * @property \App\Model\Table\OpeningScheduleTable $OpeningSchedule
 *
 * @method \App\Model\Entity\OpeningSchedule[] paginate($object = null, array $settings = [])
 */
class OpeningScheduleController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies', 'CompaniesAreas', 'SubspacesMasterplans']
        ];
        $openingSchedule = $this->paginate($this->OpeningSchedule);

        $this->set(compact('openingSchedule'));
        $this->set('_serialize', ['openingSchedule']);
    }

    /**
     * View method
     *
     * @param string|null $id Opening Schedule id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $openingSchedule = $this->OpeningSchedule->get($id, [
            'contain' => ['Companies', 'CompaniesAreas', 'SubspacesMasterplans']
        ]);

        $this->set('openingSchedule', $openingSchedule);
        $this->set('_serialize', ['openingSchedule']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $openingSchedule = $this->OpeningSchedule->newEntity();
        if ($this->request->is('post')) {
            $openingSchedule = $this->OpeningSchedule->patchEntity($openingSchedule, $this->request->getData());
            if ($this->OpeningSchedule->save($openingSchedule)) {
                $this->Flash->success(__('The opening schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opening schedule could not be saved. Please, try again.'));
        }
        $companies = $this->OpeningSchedule->Companies->find('list', ['limit' => 200]);
        $companiesAreas = $this->OpeningSchedule->CompaniesAreas->find('list', ['limit' => 200]);
        $subspacesMasterplans = $this->OpeningSchedule->SubspacesMasterplans->find('list', ['limit' => 200]);
        $this->set(compact('openingSchedule', 'companies', 'companiesAreas', 'subspacesMasterplans'));
        $this->set('_serialize', ['openingSchedule']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Opening Schedule id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $openingSchedule = $this->OpeningSchedule->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $openingSchedule = $this->OpeningSchedule->patchEntity($openingSchedule, $this->request->getData());
            if ($this->OpeningSchedule->save($openingSchedule)) {
                $this->Flash->success(__('The opening schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opening schedule could not be saved. Please, try again.'));
        }
        $companies = $this->OpeningSchedule->Companies->find('list', ['limit' => 200]);
        $companiesAreas = $this->OpeningSchedule->CompaniesAreas->find('list', ['limit' => 200]);
        $subspacesMasterplans = $this->OpeningSchedule->SubspacesMasterplans->find('list', ['limit' => 200]);
        $this->set(compact('openingSchedule', 'companies', 'companiesAreas', 'subspacesMasterplans'));
        $this->set('_serialize', ['openingSchedule']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Opening Schedule id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $openingSchedule = $this->OpeningSchedule->get($id);
        if ($this->OpeningSchedule->delete($openingSchedule)) {
            $this->Flash->success(__('The opening schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The opening schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
