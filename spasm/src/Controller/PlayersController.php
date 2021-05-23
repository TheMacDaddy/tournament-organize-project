<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class PlayersController extends AppController
{
	public function index()
	{
		 $players = TableRegistry::get('player');
         $query = $players->find();
         $this->set('results',$query);
	}
	
	public function add()
	{
      if($this->request->is('post'))
	  {
         $username = $this->request->getData('username');
		 $password = $this->request->getData('password');
		 $emailadd = $this->request->getData('email_address');
		 $dateofbirth = $this->request->getData('date_of_birth');
		 $teamname = $this->request->getData('team_name');

         $players_table = TableRegistry::get('players');
         $players = $players_table->newEntity($this->request->getData());
         $players->username = $username;
		 $players->emailadd = $emailadd;
         $players->dateofbirth = $dateofbirth;
		 $players->teamname = $teamname;
		 
         $this->set('players', $players);
         if($players_table->save($players))
         return $this->redirect([
			'controller'=>'homepage',
			'action'=>'index'
			]); 
      }
	}
	
	public function edit($eventname)
	{
		 $this->set('eventname',$eventname);
         if($this->request->is('post'))
		 {
            $eventname = $this->request->getData('event_name');
			$eventrules = $this->request->getData('event_rules');
			$requirements = $this->request->getData('requirements');
			$brackettype = $this->request->getData('bracket_type');
			$bracketsize = $this->request->getData('bracket_size');
			$prize = $this->request->getData('prize');
            $events_table = TableRegistry::get('eventt');
            $events = $events_table->get($eventname);
			$events->eventname = $eventname;
			$events->eventrules = $eventrules;
			$events->requirements = $requirements;
			$events->brackettype = $brackettype;
			$events->bracketsize = $bracketsize;
			$events->prize = $prize;
            if($events_table->save($events))
			return $this->redirect([
				'controller'=>'homepage',
				'action'=>'index'
				]);	 
         } else {
            $events_table = TableRegistry::get('eventt')->find();
            $events = $events_table->where(['eventname'=>$eventname])->first();
            $this->set('eventrules',$events->eventrules);
			$this->set('requirements',$events->requirements);
			$this->set('brackettype',$events->brackettype);
			$this->set('bracketsize',$events->bracketsize);
			$this->set('prize',$events->prize);
            $this->set('eventname',$eventname);
         }	 
	}
	
	 public function delete($eventname)
	 {
         $events_table = TableRegistry::get('eventt');
         $events = $events_table->get($eventname);
         $events_table->delete($events);
         return $this->redirect([
			'controller'=>'homepage',
			'action'=>'index'
			]);
	 }
}
?>