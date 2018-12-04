<?php
namespace App\Controller;

use Cake\Validation\Validator;
use Cake\Event\Event;

class UsersController extends AppController
{
    public function login()
    {
        $this->set('title', 'Login');
        if($this->Auth->user('id')) {
            return $this->redirect([
                'controller' => 'Offres',
                'action' => 'display_offres',
            ]);
        }
        else {
            $login = $this->Users->newEntity(); //['validate' => 'sign'] -> appel validationSign
            if($this->request->is('post')) {
                //$post = données post
                $check_login = $this->Users->patchEntity($login, $this->request->getData(), ['validate' => 'login']);
                //Sauvegarde dans la base
                if ($check_login->errors()) {
                    //Error
                    $this->Flash->error('Fill require fields');
                }
                else {
                    $user = $this->Auth->identify();
                    if ($user) {
                        $this->Auth->setUser($user);
                        return $this->redirect($this->Auth->redirectUrl());
                    } else {
                        $this->Flash->error(__("Nom d'utilisateur ou mot de passe incorrect"));
                    }
                }
            }
            $this->set('login', $login);
        }
    }

    public function register()
    {
        $this->set('title', 'Register');

        $sign = $this->Users->newEntity(); //['validate' => 'sign'] -> appel validationSign
        if($this->request->is('post')) {
            //$post = données post
            $post = $this->Users->patchEntity($sign, $this->request->getData(), ['validate' => 'sign']);
            //Sauvegarde dans la base
            if ($this->Users->save($post)) {
                //Succès
                $this->Flash->success(__('User Added Successfully', ['key' => 'message']));
                return $this->redirect(['action' => 'login']);
            }
            //Echec
            $this->Flash->error(__('Unable to add your user ! '));
        }
        $this->set('sign', $sign);

        $this->set('title', 'Register');
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
}
