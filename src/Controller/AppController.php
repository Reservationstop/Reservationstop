<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\Error\Debugger;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	/**
	 * Initialization hook method.
	 *
	 * Use this method to add common initialization code like loading components.
	 *
	 * e.g. `$this->loadComponent('Security');`
	 *
	 * @return void
	 */
	public function initialize() {
		parent::initialize();

		$this->loadComponent('RequestHandler');
		$this->loadComponent('Flash');


		// Pass settings in


		/*
		 * Enable the following components for recommended CakePHP security settings.
		 * see http://book.cakephp.org/3.0/en/controllers/components/security.html
		 */
		//$this->loadComponent('Security');
		//$this->loadComponent('Csrf');
	}

	/**
	 * Before render callback.
	 *
	 * @param \Cake\Event\Event $event The beforeRender event.
	 * @return \Cake\Network\Response|null|void
	 */
	public function beforeRender(Event $event) {
		$this->set('theme', Configure::read('Theme'));
		if ($this->isAdminLteThemed()) {
			$this->viewBuilder()->setTheme('AdminLTE');
		} else {
			$this->viewBuilder()->setTheme(null);
		}
		if (!array_key_exists('_serialize', $this->viewVars) &&
				in_array($this->response->type(), ['application/json', 'application/xml'])
		) {
			$this->set('_serialize', true);
		}
		$this->loadComponent('Auth');
		$this->set('authUser', $this->Auth->user());
	}

	public function isAdminLteThemed() {
		$notLteActions = ['home', 'about_us', 'events', 'places', 'blog', 'testimonials', 'price_list', 'discount', 'site_map', 'contact', 'tips', 'booking'];
		if ($this->request['action'] == 'frontend' ||
			(!empty($this->request['pass'][0]) && in_array($this->request['pass'][0], $notLteActions))
		) {
			return false;
		}
			return true;
	}

}
