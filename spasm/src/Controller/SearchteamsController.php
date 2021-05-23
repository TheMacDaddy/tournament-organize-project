<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class SearchteamsController extends AppController
{
	public function index()
	{
		 $teams = TableRegistry::get('team');
         $query = $teams->find();
         $this->set('results',$query);
	}
}