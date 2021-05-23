<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class TeammembersController extends AppController
{
	public function index()
	{
         $teammembers = TableRegistry::get('teammembers');
         $query = $teammembers->find();
         $this->set('results',$query);
    }
	
	public function add()
	{
      if($this->request->is('post'))
	  {
         $teamid = $this->request->getData('team_in');
		 $userid = $this->request->getData('user_in');
		 
         $teammembers_table = TableRegistry::get('teammembers');
         $teammembers = $teammembers_table->newEntity($this->request->getData());
		 
         $teammembers->teamid = $teamid;
         $teammembers->userid = $userid;
		 
         $this->set('teammembers', $teammembers);
         if($teammembers_table->save($teammembers))
         return $this->redirect([
			'controller'=>'playershomepage',
			'action'=>'index'
			]);
		 
      }
	}

	public function edit($tmid)
	{
		 $this->set('ident',$tmid);
         if($this->request->is('post'))
		 {
            $teamid = $this->request->getData('team_in');
			$userid = $this->request->getData('user_in');
			
            $teammembers_table = TableRegistry::get('teammembers');
            $teammembers = $teammembers_table->get($tmid);
			
            $teammembers->teamid = $teamid;
            $teammembers->userid = $userid;
			
            if($teammembers_table->save($teammembers))
            return $this->redirect([
				'controller'=>'playershomepage',
				'action'=>'index'
			]);
         } else {
            $teammembers_table = TableRegistry::get('teammembers')->find();
            $teammembers = $teammembers_table->where(['tmid'=>$tmid])->first();
			
            $this->set('teamid',$teammembers->teamid);
            $this->set('userid',$teammembers->userid);
            $this->set('tmid',$tmid);
         }	 
	}

	 public function delete($tmid)
	 {
		 
         $teammembers_table = TableRegistry::get('teammembers');
         $teammembers = $teammembers_table->get($tmid);
		 
         $teammembers_table->delete($teammembers);
		 
         return $this->redirect([
				'controller'=>'playershomepage',
				'action'=>'index'
				]);
	 }
}
?>