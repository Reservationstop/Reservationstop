<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CompaniesAreas Controller
 *
 * @property \App\Model\Table\CompaniesAreasTable $CompaniesAreas
 *
 * @method \App\Model\Entity\CompaniesArea[] paginate($object = null, array $settings = [])
 */
class CompaniesAreasController extends AppController
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
        $companiesAreas = $this->paginate($this->CompaniesAreas);

        $this->set(compact('companiesAreas'));
        $this->set('_serialize', ['companiesAreas']);
    }

    /**
     * View method
     *
     * @param string|null $id Companies Area id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $companiesArea = $this->CompaniesAreas->get($id, [
            'contain' => ['Companies']
        ]);

        $this->set('companiesArea', $companiesArea);
        $this->set('_serialize', ['companiesArea']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $companiesArea = $this->CompaniesAreas->newEntity();
        if ($this->request->is('post')) {
            $companiesArea = $this->CompaniesAreas->patchEntity($companiesArea, $this->request->getData());
            if ($this->CompaniesAreas->save($companiesArea)) {
                $this->Flash->success(__('The companies area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The companies area could not be saved. Please, try again.'));
        }
        $companies = $this->CompaniesAreas->Companies->find('list', ['limit' => 200]);
        $this->set(compact('companiesArea', 'companies'));
        $this->set('_serialize', ['companiesArea']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Companies Area id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $companiesArea = $this->CompaniesAreas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $companiesArea = $this->CompaniesAreas->patchEntity($companiesArea, $this->request->getData());
            if ($this->CompaniesAreas->save($companiesArea)) {
                $this->Flash->success(__('The companies area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The companies area could not be saved. Please, try again.'));
        }
        $companies = $this->CompaniesAreas->Companies->find('list', ['limit' => 200]);
        $this->set(compact('companiesArea', 'companies'));
        $this->set('_serialize', ['companiesArea']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Companies Area id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $companiesArea = $this->CompaniesAreas->get($id);
        if ($this->CompaniesAreas->delete($companiesArea)) {
            $this->Flash->success(__('The companies area has been deleted.'));
        } else {
            $this->Flash->error(__('The companies area could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
