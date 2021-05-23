<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class SearcheventsController extends AppController
{
	public function index()
	{
		$events = TableRegistry::get('eventt');
		$game = TableRegistry::get('game');
		
        $query1 = $events->find();

        $this->set('results',$query1);
		
	}
		
}
?>