<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class HomeController extends AppController
{
	public function index()
	{
		 $users = TableRegistry::get('users');
         $query = $users->find();
         $this->set('results',$query);
	}
}
?>