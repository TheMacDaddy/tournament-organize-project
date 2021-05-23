<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class SearchmatchesController extends AppController
{
	public function index()
	{
		 $matches = TableRegistry::get('matches');
         $query = $matches->find();
         $this->set('results',$query);
	}
}
?>