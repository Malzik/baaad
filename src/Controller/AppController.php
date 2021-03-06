<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login',
            ],
            'loginRedirect' => [
                'controller' => 'Offres',
                'action' => 'displayOffres',
            ],
            'logoutRedirect' => [
                'controller' => 'Offres',
                'action' => 'displayOffres',
            ],
            'authError' => 'Veuillez vous connecter pour accéder à cette page',
            'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'email', 'password' => 'password']
                ]
            ],
            'storage' => 'Session'
        ]);
        $this->set('title', '123album.photo');

        if($this->request->getSession()->read('Auth.User')) {
            $this->viewBuilder()->setLayout('user');
            $this->set('user_session', $this->request->getSession()->read('Auth.User'));
        }
    }
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('register');
        $this->Auth->allow(['Offres' => 'displayOffres']);
    }
}
