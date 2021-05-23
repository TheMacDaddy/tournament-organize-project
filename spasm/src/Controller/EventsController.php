<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class EventsController extends AppController
{
	public function index()
	{
		 $events = TableRegistry::get('eventt');
         $query = $events->find();
         $this->set('results',$query);
	}
	
	public function add()
	{
      if($this->request->is('post'))
	  {
         $eventname = $this->request->getData('event_name');
		 $gameid = $this->request->getData('game_played');
		 $eventrules = $this->request->getData('event_rules');
		 $requirements = $this->request->getData('requirements');
		 $brackettype = $this->request->getData('bracket_type');
		 $bracketsize = $this->request->getData('bracket_size');
		 $prize = $this->request->getData('prize');
		 $startdate = $this->request->getData('start_date');
		 $enddate = $this->request->getData('end_date');
		 
         $events_table = TableRegistry::get('eventt');
         $events = $events_table->newEntity($this->request->getData());
		 
		 $events->eventname = $eventname;
		 $events->gameid = $gameid;
		 $events->eventrules = $eventrules;
         $events->requirements = $requirements;
		 $events->brackettype = $brackettype;
		 $events->bracketsize = $bracketsize;
		 $events->prize = $prize;
		 $events->startdate = $startdate;
		 $events->enddate = $enddate;
		 
         $this->set('eventt', $events);
         if($events_table->save($events))
         return $this->redirect([
			'controller'=>'organizerhomepage',
			'action'=>'index'
			]);	 
      }
	}

	public function edit($eventid)
	{
		 $this->set('ident',$eventid);
         if($this->request->is('post'))
		 {
			$eventname = $this->request->getData('event_name');
			$gameid = $this->request->getData('game_id');
			$eventrules = $this->request->getData('event_rules');
			$requirements = $this->request->getData('requirements');
			$brackettype = $this->request->getData('bracket_type');
			$bracketsize = $this->request->getData('bracket_size');
			$prize = $this->request->getData('prize');
			$startdate = $this->request->getData('start_date');
			$enddate = $this->request->getData('end_date');
			
            $events_table = TableRegistry::get('eventt');
            $events = $events_table->get($eventid);
			
			$events->eventname = $eventname;
			$events->gameid = $gameid;
			$events->eventrules = $eventrules;
			$events->requirements = $requirements;
			$events->brackettype = $brackettype;
			$events->bracketsize = $bracketsize;
			$events->prize = $prize;
			$events->startdate = $startdate;
			$events->enddate = $enddate;
			
            if($events_table->save($events))
			return $this->redirect([
				'controller'=>'organizerhomepage',
				'action'=>'index'
				]);	 
         } else {
            $events_table = TableRegistry::get('eventt')->find();
            $events = $events_table->where(['eventid'=>$eventid])->first();
			
			$this->set('eventname',$events->eventname);
			$this->set('gameid', $events->gameid);
            $this->set('eventrules',$events->eventrules);
			$this->set('requirements',$events->requirements);
			$this->set('brackettype',$events->brackettype);
			$this->set('bracketsize',$events->bracketsize);
			$this->set('prize',$events->prize);
			$this->set('startdate',$events->startdate);
			$this->set('enddate',$events->enddate);
			
            $this->set('eventid',$eventid);
         }	 
	}
	
	 public function delete($eventid)
	 {
         $events_table = TableRegistry::get('eventt');
         $events = $events_table->get($eventid);
         $events_table->delete($events);
         return $this->redirect([
			'controller'=>'organizerhomepage',
			'action'=>'index'
			]);
	 }
}
?>