<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CompaniesAreasOverridesSchedule Controller
 *
 * @property \App\Model\Table\CompaniesAreasOverridesScheduleTable $CompaniesAreasOverridesSchedule
 *
 * @method \App\Model\Entity\CompaniesAreasOverridesSchedule[] paginate($object = null, array $settings = [])
 */
class CompaniesAreasOverridesScheduleController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CompaniesAreas', 'Companies', 'CompaniesAreasMasterplans', 'Groups']
        ];
        $companiesAreasOverridesSchedule = $this->paginate($this->CompaniesAreasOverridesSchedule);

        $this->set(compact('companiesAreasOverridesSchedule'));
        $this->set('_serialize', ['companiesAreasOverridesSchedule']);
    }

    /**
     * View method
     *
     * @param string|null $id Companies Areas Overrides Schedule id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $companiesAreasOverridesSchedule = $this->CompaniesAreasOverridesSchedule->get($id, [
            'contain' => ['CompaniesAreas', 'Companies', 'CompaniesAreasMasterplans', 'Groups']
        ]);

        $this->set('companiesAreasOverridesSchedule', $companiesAreasOverridesSchedule);
        $this->set('_serialize', ['companiesAreasOverridesSchedule']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $companiesAreasOverridesSchedule = $this->CompaniesAreasOverridesSchedule->newEntity();
        if ($this->request->is('post')) {
            $companiesAreasOverridesSchedule = $this->CompaniesAreasOverridesSchedule->patchEntity($companiesAreasOverridesSchedule, $this->request->getData());
            if ($this->CompaniesAreasOverridesSchedule->save($companiesAreasOverridesSchedule)) {
                $this->Flash->success(__('The companies areas overrides schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The companies areas overrides schedule could not be saved. Please, try again.'));
        }
        $companiesAreas = $this->CompaniesAreasOverridesSchedule->CompaniesAreas->find('list', ['limit' => 200]);
        $companies = $this->CompaniesAreasOverridesSchedule->Companies->find('list', ['limit' => 200]);
        $companiesAreasMasterplans = $this->CompaniesAreasOverridesSchedule->CompaniesAreasMasterplans->find('list', ['limit' => 200]);
        $groups = $this->CompaniesAreasOverridesSchedule->Groups->find('list', ['limit' => 200]);
        $this->set(compact('companiesAreasOverridesSchedule', 'companiesAreas', 'companies', 'companiesAreasMasterplans', 'groups'));
        $this->set('_serialize', ['companiesAreasOverridesSchedule']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Companies Areas Overrides Schedule id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $companiesAreasOverridesSchedule = $this->CompaniesAreasOverridesSchedule->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $companiesAreasOverridesSchedule = $this->CompaniesAreasOverridesSchedule->patchEntity($companiesAreasOverridesSchedule, $this->request->getData());
            if ($this->CompaniesAreasOverridesSchedule->save($companiesAreasOverridesSchedule)) {
                $this->Flash->success(__('The companies areas overrides schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The companies areas overrides schedule could not be saved. Please, try again.'));
        }
        $companiesAreas = $this->CompaniesAreasOverridesSchedule->CompaniesAreas->find('list', ['limit' => 200]);
        $companies = $this->CompaniesAreasOverridesSchedule->Companies->find('list', ['limit' => 200]);
        $companiesAreasMasterplans = $this->CompaniesAreasOverridesSchedule->CompaniesAreasMasterplans->find('list', ['limit' => 200]);
        $groups = $this->CompaniesAreasOverridesSchedule->Groups->find('list', ['limit' => 200]);
        $this->set(compact('companiesAreasOverridesSchedule', 'companiesAreas', 'companies', 'companiesAreasMasterplans', 'groups'));
        $this->set('_serialize', ['companiesAreasOverridesSchedule']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Companies Areas Overrides Schedule id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $companiesAreasOverridesSchedule = $this->CompaniesAreasOverridesSchedule->get($id);
        if ($this->CompaniesAreasOverridesSchedule->delete($companiesAreasOverridesSchedule)) {
            $this->Flash->success(__('The companies areas overrides schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The companies areas overrides schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
