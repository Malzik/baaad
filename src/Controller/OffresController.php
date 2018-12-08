<?php
namespace App\Controller;

class OffresController extends AppController
{
	public function displayOffres()
	{
        $query = $this->Offres->find('all');
        $this->set('offres', $query);
	}
}
?>