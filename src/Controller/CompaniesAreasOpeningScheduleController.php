<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CompaniesAreasOpeningSchedule Controller
 *
 * @property \App\Model\Table\CompaniesAreasOpeningScheduleTable $CompaniesAreasOpeningSchedule
 *
 * @method \App\Model\Entity\CompaniesAreasOpeningSchedule[] paginate($object = null, array $settings = [])
 */
class CompaniesAreasOpeningScheduleController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies', 'CompaniesAreas', 'CompaniesAreasMasterplans']
        ];
        $companiesAreasOpeningSchedule = $this->paginate($this->CompaniesAreasOpeningSchedule);

        $this->set(compact('companiesAreasOpeningSchedule'));
        $this->set('_serialize', ['companiesAreasOpeningSchedule']);
    }

    /**
     * View method
     *
     * @param string|null $id Companies Areas Opening Schedule id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $companiesAreasOpeningSchedule = $this->CompaniesAreasOpeningSchedule->get($id, [
            'contain' => ['Companies', 'CompaniesAreas', 'CompaniesAreasMasterplans']
        ]);

        $this->set('companiesAreasOpeningSchedule', $companiesAreasOpeningSchedule);
        $this->set('_serialize', ['companiesAreasOpeningSchedule']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $companiesAreasOpeningSchedule = $this->CompaniesAreasOpeningSchedule->newEntity();
        if ($this->request->is('post')) {
            $companiesAreasOpeningSchedule = $this->CompaniesAreasOpeningSchedule->patchEntity($companiesAreasOpeningSchedule, $this->request->getData());
            if ($this->CompaniesAreasOpeningSchedule->save($companiesAreasOpeningSchedule)) {
                $this->Flash->success(__('The companies areas opening schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The companies areas opening schedule could not be saved. Please, try again.'));
        }
        $companies = $this->CompaniesAreasOpeningSchedule->Companies->find('list', ['limit' => 200]);
        $companiesAreas = $this->CompaniesAreasOpeningSchedule->CompaniesAreas->find('list', ['limit' => 200]);
        $companiesAreasMasterplans = $this->CompaniesAreasOpeningSchedule->CompaniesAreasMasterplans->find('list', ['limit' => 200]);
        $this->set(compact('companiesAreasOpeningSchedule', 'companies', 'companiesAreas', 'companiesAreasMasterplans'));
        $this->set('_serialize', ['companiesAreasOpeningSchedule']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Companies Areas Opening Schedule id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $companiesAreasOpeningSchedule = $this->CompaniesAreasOpeningSchedule->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $companiesAreasOpeningSchedule = $this->CompaniesAreasOpeningSchedule->patchEntity($companiesAreasOpeningSchedule, $this->request->getData());
            if ($this->CompaniesAreasOpeningSchedule->save($companiesAreasOpeningSchedule)) {
                $this->Flash->success(__('The companies areas opening schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The companies areas opening schedule could not be saved. Please, try again.'));
        }
        $companies = $this->CompaniesAreasOpeningSchedule->Companies->find('list', ['limit' => 200]);
        $companiesAreas = $this->CompaniesAreasOpeningSchedule->CompaniesAreas->find('list', ['limit' => 200]);
        $companiesAreasMasterplans = $this->CompaniesAreasOpeningSchedule->CompaniesAreasMasterplans->find('list', ['limit' => 200]);
        $this->set(compact('companiesAreasOpeningSchedule', 'companies', 'companiesAreas', 'companiesAreasMasterplans'));
        $this->set('_serialize', ['companiesAreasOpeningSchedule']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Companies Areas Opening Schedule id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $companiesAreasOpeningSchedule = $this->CompaniesAreasOpeningSchedule->get($id);
        if ($this->CompaniesAreasOpeningSchedule->delete($companiesAreasOpeningSchedule)) {
            $this->Flash->success(__('The companies areas opening schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The companies areas opening schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
