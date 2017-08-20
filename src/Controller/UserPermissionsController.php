<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserPermissions Controller
 *
 * @property \App\Model\Table\UserPermissionsTable $UserPermissions
 *
 * @method \App\Model\Entity\UserPermission[] paginate($object = null, array $settings = [])
 */
class UserPermissionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Roles', 'Companies']
        ];
        $userPermissions = $this->paginate($this->UserPermissions);

        $this->set(compact('userPermissions'));
        $this->set('_serialize', ['userPermissions']);
    }

    /**
     * View method
     *
     * @param string|null $id User Permission id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userPermission = $this->UserPermissions->get($id, [
            'contain' => ['Users', 'Roles', 'Companies']
        ]);

        $this->set('userPermission', $userPermission);
        $this->set('_serialize', ['userPermission']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userPermission = $this->UserPermissions->newEntity();
        if ($this->request->is('post')) {
            $userPermission = $this->UserPermissions->patchEntity($userPermission, $this->request->getData());
            if ($this->UserPermissions->save($userPermission)) {
                $this->Flash->success(__('The user permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user permission could not be saved. Please, try again.'));
        }
        $users = $this->UserPermissions->Users->find('list', ['limit' => 200]);
        $roles = $this->UserPermissions->Roles->find('list', ['limit' => 200]);
        $restaurants = $this->UserPermissions->Companies->find('list', ['limit' => 200]);
        $this->set(compact('userPermission', 'users', 'roles', 'restaurants'));
        $this->set('_serialize', ['userPermission']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Permission id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userPermission = $this->UserPermissions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userPermission = $this->UserPermissions->patchEntity($userPermission, $this->request->getData());
            if ($this->UserPermissions->save($userPermission)) {
                $this->Flash->success(__('The user permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user permission could not be saved. Please, try again.'));
        }
        $users = $this->UserPermissions->Users->find('list', ['limit' => 200]);
        $roles = $this->UserPermissions->Roles->find('list', ['limit' => 200]);
        $restaurants = $this->UserPermissions->Companies->find('list', ['limit' => 200]);
        $this->set(compact('userPermission', 'users', 'roles', 'restaurants'));
        $this->set('_serialize', ['userPermission']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Permission id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userPermission = $this->UserPermissions->get($id);
        if ($this->UserPermissions->delete($userPermission)) {
            $this->Flash->success(__('The user permission has been deleted.'));
        } else {
            $this->Flash->error(__('The user permission could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
