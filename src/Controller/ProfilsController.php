<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class ProfilsController extends AppController
{
    public function panier()
    {
        $commande = TableRegistry::get('commande');
        $query = $commande->find()
            ->where(['users_id =' => $this->request->getSession()->read("Auth.User.id")]);

        $this->set('commandes', $query);
    }
}