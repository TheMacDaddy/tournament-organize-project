<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class EventmatchesController extends AppController
{
	public function index()
	{
         $eventmatches = TableRegistry::get('eventmatches');
         $query = $eventmatches->find();
         $this->set('results',$query);
    }
	
	public function add()
	{
      if($this->request->is('post'))
	  {
         $eventid = $this->request->getData('event_id');
		 $matchnumber = $this->request->getData('match_number');
		 $matchorder = $this->request->getData('match_order');
		 
         $eventmatches_table = TableRegistry::get('eventmatches');
         $eventmatches = $eventmatches_table->newEntity($this->request->getData());
		 
         $eventmatches->eventid = $eventid;
         $eventmatches->matchnumber = $matchnumber;
		 $eventmatches->matchorder = $matchorder;
		 
         $this->set('eventmatches', $eventmatches);
         if($eventmatches_table->save($eventmatches))
         return $this->redirect([
			'controller'=>'homepage',
			'action'=>'index'
			]);
		 
      }
	}

	public function edit($emid)
	{
		 $this->set('ident',$emid);
         if($this->request->is('post'))
		 {
            $eventid = $this->request->getData('event_id');
			$matchnumber = $this->request->getData('match_number');
			$matchorder = $this->request->getData('match_order');
			
            $eventmatches_table = TableRegistry::get('eventmatches');
            $eventmatches = $eventmatches_table->get($emid);
			
            $eventmatches->eventid = $eventid;
            $eventmatches->matchnumber = $matchnumber;
			$eventmatches->matchorder = $matchorder;
			
            if($eventmatches_table->save($eventmatches))
            return $this->redirect([
				'controller'=>'homepage',
				'action'=>'index'
			]);
         } else {
            $eventmatches_table = TableRegistry::get('eventmatches')->find();
            $eventmatches = $eventmatches_table->where(['emid'=>$emid])->first();
			
            $this->set('eventid',$eventmatches->eventid);
            $this->set('matchnumber',$eventmatches->matchnumber);
			$this->set('matchorder',$eventmatches->matchorder);
			
            $this->set('emid',$emid);
         }	 
	}

	 public function delete($emid)
	 {
		 
         $eventmatches_table = TableRegistry::get('eventmatches');
         $eventmatches = $eventmatches_table->get($emid);
		 
         $eventmatches_table->delete($eventmatches);
		 
         return $this->redirect([
				'controller'=>'homepage',
				'action'=>'index'
				]);
	 }
}
?>