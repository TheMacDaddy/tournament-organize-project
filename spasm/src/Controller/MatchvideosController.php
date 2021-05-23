<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class MatchvideosController extends AppController
{
	public function index()
	{
         $matchvideos = TableRegistry::get('matchvideos');
         $query = $matchvideos->find();
         $this->set('results',$query);
    }
	
	public function add()
	{
      if($this->request->is('post'))
	  {
         $vidid = $this->request->getData('video_id');
		 $matchnumber = $this->request->getData('match_number');
		 
         $matchvideos_table = TableRegistry::get('matchvideos');
         $matchvideos = $matchvideos_table->newEntity($this->request->getData());
		 
         $matchvideos->vidid = $vidid;
         $matchvideos->matchnumber = $matchnumber;
		 
         $this->set('matchvideos', $matchvideos);
         if($matchvideos_table->save($matchvideos))
         return $this->redirect([
			'controller'=>'homepage',
			'action'=>'index'
			]);
		 
      }
	}

	public function edit($vmid)
	{
		 $this->set('ident',$mvid);
         if($this->request->is('post'))
		 {
            $vidid = $this->request->getData('video_id');
            $matchnumber = $this->request->getData('match_number');
			
            $matchvideos_table = TableRegistry::get('matchvideos');
            $matchvideos = $matchvideos_table->get($mvid);
			
            $matchvideos->vidid = $vidid;
            $matchvideos->matchnumber = $matchnumber;
			
            if($matchvideos_table->save($matchvideos))
            return $this->redirect([
				'controller'=>'homepage',
				'action'=>'index'
			]);
         } else {
            $matchvideos_table = TableRegistry::get('matchvideos')->find();
            $matchvideos = $matchvideos_table->where(['mvid'=>$mvid])->first();
			
            $this->set('vidid',$matchvideos->vidid);
            $this->set('matchnumber',$matchvideos->matchnumber);
            $this->set('mvid',$mvid);
         }	 
	}

	 public function delete($mvid)
	 {
		 
         $matchvideos_table = TableRegistry::get('matchvideos');
         $matchvideos = $matchvideos_table->get($mvid);
		 
         $matchvideos_table->delete($matchvideos);
		 
         return $this->redirect([
				'controller'=>'homepage',
				'action'=>'index'
				]);
	 }
}
?>