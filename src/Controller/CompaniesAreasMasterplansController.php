<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CompaniesAreasMasterplans Controller
 *
 * @property \App\Model\Table\CompaniesAreasMasterplansTable $CompaniesAreasMasterplans
 *
 * @method \App\Model\Entity\CompaniesAreasMasterplan[] paginate($object = null, array $settings = [])
 */
class CompaniesAreasMasterplansController extends AppController
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
        $companiesAreasMasterplans = $this->paginate($this->CompaniesAreasMasterplans);

        $this->set(compact('companiesAreasMasterplans'));
        $this->set('_serialize', ['companiesAreasMasterplans']);
    }

    /**
     * View method
     *
     * @param string|null $id Companies Areas Masterplan id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $companiesAreasMasterplan = $this->CompaniesAreasMasterplans->get($id, [
            'contain' => ['Companies']
        ]);

        $this->set('companiesAreasMasterplan', $companiesAreasMasterplan);
        $this->set('_serialize', ['companiesAreasMasterplan']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $companiesAreasMasterplan = $this->CompaniesAreasMasterplans->newEntity();
        if ($this->request->is('post')) {
            $companiesAreasMasterplan = $this->CompaniesAreasMasterplans->patchEntity($companiesAreasMasterplan, $this->request->getData());
            if ($this->CompaniesAreasMasterplans->save($companiesAreasMasterplan)) {
                $this->Flash->success(__('The companies areas masterplan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The companies areas masterplan could not be saved. Please, try again.'));
        }
        $companies = $this->CompaniesAreasMasterplans->Companies->find('list', ['limit' => 200]);
        $this->set(compact('companiesAreasMasterplan', 'companies'));
        $this->set('_serialize', ['companiesAreasMasterplan']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Companies Areas Masterplan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $companiesAreasMasterplan = $this->CompaniesAreasMasterplans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $companiesAreasMasterplan = $this->CompaniesAreasMasterplans->patchEntity($companiesAreasMasterplan, $this->request->getData());
            if ($this->CompaniesAreasMasterplans->save($companiesAreasMasterplan)) {
                $this->Flash->success(__('The companies areas masterplan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The companies areas masterplan could not be saved. Please, try again.'));
        }
        $companies = $this->CompaniesAreasMasterplans->Companies->find('list', ['limit' => 200]);
        $this->set(compact('companiesAreasMasterplan', 'companies'));
        $this->set('_serialize', ['companiesAreasMasterplan']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Companies Areas Masterplan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $companiesAreasMasterplan = $this->CompaniesAreasMasterplans->get($id);
        if ($this->CompaniesAreasMasterplans->delete($companiesAreasMasterplan)) {
            $this->Flash->success(__('The companies areas masterplan has been deleted.'));
        } else {
            $this->Flash->error(__('The companies areas masterplan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
