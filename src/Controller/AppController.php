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
                'controller' => 'Blog',
                'action' => 'index',
            ],
            'logoutRedirect' => [
                'controller' => 'users',
                'action' => 'login',
            ],
            'authError' => 'Veuillez vous connecter pour accéder à cette page',
            'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'email', 'password' => 'password']
                ]
            ],
            'storage' => 'Session'
        ]);
    }
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('register');
        $this->Auth->allow(['Offres' => 'displayOffres']);
    }
}
