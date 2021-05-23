<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class MatchesController extends AppController
{
	public function index()
	{
		 $matches = TableRegistry::get('matches');
         $query = $matches->find();
         $this->set('results',$query);
	}
		
	public function add()
	{
      if($this->request->is('post'))
	  {
		 $eventid = $this->request->getData('event_in');
		 $matchdate = $this->request->getData('match_date');

         $matches_table = TableRegistry::get('matches');
         $matches = $matches_table->newEntity($this->request->getData());
         $matches->matchnumber = $matchnumber;
		 
		 $matches->eventid = $eventid;
         $matches->matchdate = $matchdate;
		 
         $this->set('matches', $matches);
         if($matches_table->save($matches))
         return $this->redirect([
			'controller'=>'organizerhomepage',
			'action'=>'index'
			]); 
      }
	}
	
	public function edit($matchnumber)
	{
		 $this->set('ident',$matchnumber);
         if($this->request->is('post'))
		 {
            $eventid = $this->request->getData('event_in');
            $matchdate = $this->request->getData('match_date');
			
            $matches_table = TableRegistry::get('matches');
            $matches = $matches_table->get($matchnumber);
			
            $matches->eventid = $eventid;
            $matches->matchdate = $matchdate;
			
            if($matches_table->save($matches))
            return $this->redirect([
				'controller'=>'organizerhomepage',
				'action'=>'index'
				]); 
				
         } else {
            $matches_table = TableRegistry::get('matches')->find();
            $matches = $matches_table->where(['matchnumber'=>$matchnumber])->first();
			
            $this->set('eventid',$matches->eventid);
			$this->set('matchdate',$matches->matchdate);
			
            $this->set('matchnumber',$matchnumber);
         }	 
	}
	
	 public function delete($matchnumber)
	 {
         $matchess_table = TableRegistry::get('matches');
         $matches = $matches_table->get($matchnumber);
		 
         $matches_table->delete($matches);
		 return $this->redirect([
				'controller'=>'organizerhomepage',
				'action'=>'index'
				]);   
	 }
}
?>