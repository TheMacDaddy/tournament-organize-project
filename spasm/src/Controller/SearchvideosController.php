<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class SearchvideosController extends AppController
{
	public function index()
	{
         $videos = TableRegistry::get('video');
         $query = $videos->find();
         $this->set('results',$query);
    }
}