<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class MatchteamsController extends AppController
{
	public function index()
	{
         $matchteams = TableRegistry::get('matchteams');
         $query = $matchteams->find();
         $this->set('results',$query);
    }

	public function add()
	{
      if($this->request->is('post'))
	  {
		 $matchnumber = $this->request->getData('match_number');
		 $matchpar1 = $this->request->getData('team_one');
		 $matchpar2 = $this->request->getData('team_two');
		 $matchwinner = $this->request->getData('match_winner');
		 $matchscore = $this->request->getData('match_score');
		 
         $matchteams_table = TableRegistry::get('matchteams');
         $matchteams = $matchteams_table->newEntity($this->request->getData());
		 
         $matchteams->matchnumber = $matchnumber;
         $matchteams->matchpar1 = $matchpar1;
		 $matchteams->matchpar2 = $matchpar2;
		 $matchteams->matchwinner = $matchwinner;
		 $matchteams->matchscore = $matchscore;
		 
         $this->set('matchteams', $matchteams);
         if($matchteams_table->save($matchteams))
         return $this->redirect([
			'controller'=>'organizerhomepage',
			'action'=>'index'
			]);
		 
      }
	}

	public function edit($mtid)
	{
		 $this->set('ident',$mtid);
         if($this->request->is('post'))
		 {
            $matchnumber = $this->request->getData('match_number');
			$matchpar1 = $this->request->getData('team_one');
			$matchpar2 = $this->request->getData('team_two');
			$matchwinner = $this->request->getData('match_winner');
			$matchscore = $this->request->getData('match_score');
		 
			
            $matchteams_table = TableRegistry::get('matchteams');
            $matchteams = $matchteams_table->get($mtid);
			
            $matchteams->matchnumber = $matchnumber;
            $matchteams->matchpar1 = $matchpar1;
			$matchteams->matchpar2 = $matchpar2;
			$matchteams->matchwinner = $matchwinner;
			$matchteams->matchscore = $matchscore;
			
            if($matchteams_table->save($matchteams))
            return $this->redirect([
				'controller'=>'organizerhomepage',
				'action'=>'index'
			]);
         } else {
            $matchteams_table = TableRegistry::get('matchteams')->find();
            $matchteams = $matchteams_table->where(['mtid'=>$mtid])->first();
			
            $this->set('matchnumber',$matchteams->matchnumber);
            $this->set('matchpar1',$matchteams->matchpar1);
			$this->set('matchpar2',$matchteams->matchpar2);
			$this->set('matchwinner',$matchteams->matchwinner);
			$this->set('matchscore',$matchteams->matchscore);
            $this->set('mtid',$mtid);
         }	 
	}

	 public function delete($mtid)
	 {
		 
         $matchteams_table = TableRegistry::get('matchteams');
         $matchteams = $matchteams_table->get($mtid);
		 
         $matchteams_table->delete($matchteams);
		 
         return $this->redirect([
				'controller'=>'organizerhomepage',
				'action'=>'index'
				]);
	 }
}
?>