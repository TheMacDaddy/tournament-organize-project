<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
use Cake\ORM\Query;
use Cake\ORM\Locator\LocatorAwareTrait;

class ViewmatchesController extends AppController
{
	public function index()
	{
         $users = TableRegistry::get('matches');
         $query = $users->find();
         $this->set('results',$query);
    }

}
?>