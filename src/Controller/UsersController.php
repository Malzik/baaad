<?php
namespace App\Controller;

use Cake\Validation\Validator;

class UsersController extends AppController
{
	/* Login Part */
    public function login()
    {
    	$this->set('title', 'User Login');
    }

    /* Register Part */
    public function register() 
    {
    	$this->set('title', 'Register Login');
    	
    	$users = $this->Users->newEntity($this->request->getData(), ['validate' => 'register']);
        if ($this->request->is('post'))
        {
            if (empty($users->getErrors()))
            {
                $users = $this->Users->patchEntity($users, $this->request->getData(), ['validate' => 'register']);
                
                # Set Data in Table
                $users->is_active = 1;
    
                # Save Data
                if ($this->Users->save($users)) {
                    $this->Flash->success(__('User has been saved.'));
                    return $this->redirect(['action' => 'login']);
                }
                $this->Flash->error(__('Unable to add your user.'));
            }
        }
        // Set this errors in fields
        $this->set('users', $users);
    }
}
