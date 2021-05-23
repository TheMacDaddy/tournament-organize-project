<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class TeamsController extends AppController
{
	public function index()
	{
		 $teams = TableRegistry::get('team');
         $query = $teams->find();
         $this->set('results',$query);
	}
	
	public function add()
	{
      if($this->request->is('post'))
	  {
         $teamname = $this->request->getData('team_name');
		 $gameid = $this->request->getData('game_in');

         $teams_table = TableRegistry::get('team');
         $teams = $teams_table->newEntity($this->request->getData());
		 
         $teams->teamname = $teamname;
		 $teams->gameid= $gameid;
		 
         $this->set('teams', $teams);
         if($teams_table->save($teams))
         return $this->redirect([
			'controller'=>'playershomepage',
			'action'=>'index'
			]); 
      }
	}
	
	public function edit($teamid)
	{
		 $this->set('ident',$teamid);
         if($this->request->is('post'))
		 {
            $teamname = $this->request->getData('team_name');
			$gameid = $this->request->getData('game_in');
			
			$teams_table = TableRegistry::get('team');
            $teams = $teams_table->get($teamid);
			
            $teams->teamname= $teamname;
            $teams->gameid = $gameid;
			
            if($teams_table->save($teams))
			return $this->redirect([
				'controller'=>'playershomepage',
				'action'=>'index'
				]);	 
         } else {
            $teams_table = TableRegistry::get('team')->find();
            $teams = $teams_table->where(['teamid'=>$teamid])->first();
			
            $this->set('teamname',$teams->teamname);
			$this->set('gameid',$teams->gameid);
         }	 
	}
	
	public function delete($teamid)
   {
         $teams_table = TableRegistry::get('team');
         $teams = $teams_table->get($teamid);
         $teams_table->delete($teams);
         return $this->redirect([
			'controller'=>'playershomepage',
			'action'=>'index'
			]);
	}
}
?>