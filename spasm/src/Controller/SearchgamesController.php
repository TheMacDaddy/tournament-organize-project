<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class SearchgamesController extends AppController
{
	public function index()
	{
		 $games = TableRegistry::get('game');
         $query = $games->find();
         $this->set('results',$query);
	}
} 
?>