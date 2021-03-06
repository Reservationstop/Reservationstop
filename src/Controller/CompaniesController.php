<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Companies Controller
 *
 * @property \App\Model\Table\CompaniesTable $Companies
 *
 * @method \App\Model\Entity\Company[] paginate($object = null, array $settings = [])
 */
class CompaniesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Types', 'Countries', 'Statuses', 'Groups', 'ParentCompanies', 'Timezones', 'Currencies', 'Languages', 'GeographicalAreas']
        ];
        $companies = $this->paginate($this->Companies);

        $this->set(compact('companies'));
        $this->set('_serialize', ['companies']);
    }

    /**
     * View method
     *
     * @param string|null $id Company id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $company = $this->Companies->get($id, [
            'contain' => ['Types', 'Countries', 'Statuses', 'Groups', 'ParentCompanies', 'Timezones', 'Currencies', 'Languages', 'GeographicalAreas', 'ChildCompanies', 'CompaniesAreas', 'CompaniesAreasOpeningSchedule', 'CompaniesAreasOverridesSchedule']
        ]);

        $this->set('company', $company);
        $this->set('_serialize', ['company']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $company = $this->Companies->newEntity();
        if ($this->request->is('post')) {
            $company = $this->Companies->patchEntity($company, $this->request->getData());
            if ($this->Companies->save($company)) {
                $this->Flash->success(__('The company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company could not be saved. Please, try again.'));
        }
        $types = $this->Companies->Types->find('list', ['limit' => 200]);
        $countries = $this->Companies->Countries->find('list', ['limit' => 200]);
        $statuses = $this->Companies->Statuses->find('list', ['limit' => 200]);
        $groups = $this->Companies->Groups->find('list', ['limit' => 200]);
        $parentCompanies = $this->Companies->ParentCompanies->find('list', ['limit' => 200]);
        $timezones = $this->Companies->Timezones->find('list', ['limit' => 200]);
        $currencies = $this->Companies->Currencies->find('list', ['limit' => 200]);
        $languages = $this->Companies->Languages->find('list', ['limit' => 200]);
        $geographicalAreas = $this->Companies->GeographicalAreas->find('list', ['limit' => 200]);
        $this->set(compact('company', 'types', 'countries', 'statuses', 'groups', 'parentCompanies', 'timezones', 'currencies', 'languages', 'geographicalAreas'));
        $this->set('_serialize', ['company']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Company id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $company = $this->Companies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $company = $this->Companies->patchEntity($company, $this->request->getData());
            if ($this->Companies->save($company)) {
                $this->Flash->success(__('The company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company could not be saved. Please, try again.'));
        }
        $types = $this->Companies->Types->find('list', ['limit' => 200]);
        $countries = $this->Companies->Countries->find('list', ['limit' => 200]);
        $statuses = $this->Companies->Statuses->find('list', ['limit' => 200]);
        $groups = $this->Companies->Groups->find('list', ['limit' => 200]);
        $parentCompanies = $this->Companies->ParentCompanies->find('list', ['limit' => 200]);
        $timezones = $this->Companies->Timezones->find('list', ['limit' => 200]);
        $currencies = $this->Companies->Currencies->find('list', ['limit' => 200]);
        $languages = $this->Companies->Languages->find('list', ['limit' => 200]);
        $geographicalAreas = $this->Companies->GeographicalAreas->find('list', ['limit' => 200]);
        $this->set(compact('company', 'types', 'countries', 'statuses', 'groups', 'parentCompanies', 'timezones', 'currencies', 'languages', 'geographicalAreas'));
        $this->set('_serialize', ['company']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Company id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $company = $this->Companies->get($id);
        if ($this->Companies->delete($company)) {
            $this->Flash->success(__('The company has been deleted.'));
        } else {
            $this->Flash->error(__('The company could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

	/**
	 * Index method
	 *
	 * @return \Cake\Http\Response|void
	 */
	public function frontend() {
		$this->viewBuilder()->setLayout('default');
		$this->paginate = [
			'contain' => ['Types', 'Countries', 'Statuses', 'Timezones', 'Currencies', 'Languages']
		];
		$companies = $this->paginate($this->Companies);

		$this->set(compact('companies'));
		$this->set('_serialize', ['companies']);
	}
}
