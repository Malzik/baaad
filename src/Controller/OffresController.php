<?php
namespace App\Controller;

class OffresController extends AppController
{
	public function displayOffres()
	{
	    if($this->request->getSession()->read('Auth.User')) {
            $this->viewBuilder()->setLayout('user');
            $this->set('user_session', $this->request->getSession()->read('Auth.User'));
        }
        $this->set('title', '123album.photo');
	}
}
?>