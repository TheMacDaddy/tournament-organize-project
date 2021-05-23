<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class UsersController extends AppController
{
	public function index()
	{
         $users = TableRegistry::get('users');
         $query = $users->find();
         $this->set('results',$query);
    }
	
	public function add()
	{
      if($this->request->is('post'))
	  {
         $username = $this->request->getData('username');
		 $hashPswdObj = new DefaultPasswordHasher;
         $password = $hashPswdObj->hash($this->request->getData('password'));
		 $emailadd = $this->request->getData('email_address');
		 $profilephoto = $this->request->getData('profile_photo');
		 $devverified = $this->request->getData('verified_developer');
		 $orgverified = $this->request->getData('verified_organizer');
		 $dateofbirth = $this->request->getData('date_of_birth');
		 $permissionval = $this->request->getData('permission_value');
		 
         $users_table = TableRegistry::get('users');
         $users = $users_table->newEntity($this->request->getData());
		 
         $users->username = $username;
         $users->password = $password;
		 $users->emailadd = $emailadd;
		 $users->profilephoto = $profilephoto;
		 $users->devverified = $devverified;
		 $users->orgverified = $orgverified;
		 $users->dateofbirth = $dateofbirth;
		 $users->permissionval = $permissionval;
		 
         $this->set('users', $users);
         if($users_table->save($users))
         return $this->redirect([
			'controller'=>'adminhomepage',
			'action'=>'index'
			]);
		 
      }
	}

	public function edit($userid)
	{
		 $this->set('ident',$userid);
         if($this->request->is('post'))
		 {
            $username = $this->request->getData('username');
            $password = $this->request->getData('password');
			$emailadd = $this->request->getData('email_address');
			$profilephoto = $this->request->getData('profile_photo');
			$devverified = $this->request->getData('verified_developer');
			$orgverified = $this->request->getData('verified_organizer');
			$dateofbirth = $this->request->getData('date_of_birth');
			$permissionval = $this->request->getData('permission_value');
			
            $users_table = TableRegistry::get('users');
            $users = $users_table->get($userid);
			
            $users->username = $username;
            $users->password = $password;
			$users->emailadd = $emailadd;
			$users->profilephoto = $profilephoto;
			$users->devverified = $devverified;
			$users->orgverified = $orgverified;
			$users->dateofbirth = $dateofbirth;
			$users->permissionval = $permissionval;
			
            if($users_table->save($users))
            return $this->redirect([
				'controller'=>'adminhomepage',
				'action'=>'index'
			]);
         } else {
            $users_table = TableRegistry::get('users')->find();
            $users = $users_table->where(['userid'=>$userid])->first();
			
            $this->set('username',$users->username);
            $this->set('password',$users->password);
			$this->set('emailadd',$users->emailadd);
			$this->set('profilephoto',$users->profilephoto);
			$this->set('devverified',$users->devverified);
			$this->set('orgverified', $users->orgverified);
			$this->set('dateofbirth',$users->dateofbirth);
			$this->set('permissionval',$users->permissionval);
            $this->set('userid',$userid);
         }	 
	}

	 public function delete($userid)
	 {
		 
         $users_table = TableRegistry::get('users');
         $users = $users_table->get($userid);
		 
         $users_table->delete($users);
		 
         return $this->redirect([
				'controller'=>'adminhomepage',
				'action'=>'index'
				]);
	 }
}
?>
