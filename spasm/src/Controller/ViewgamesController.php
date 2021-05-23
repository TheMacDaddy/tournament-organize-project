<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
use Cake\ORM\Query;
use Cake\ORM\Locator\LocatorAwareTrait;

class ViewgamesController extends AppController
{
	public function index()
	{
		$connection = ConnectionManager::get('default');
		$results = $connection->execute('SELECT * FROM game')->fetchAll('assoc');
		
		//$game = $this->getTableLocator()->get('game');

		// Start a new query.
		//$query = $game->find();
		
		//$query = $this->getTableLocator()->get('game')->find();

		//foreach ($query->all() as $game) {
		//debug($game->gamename);	
	}
	//}
}
?>