<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class VideosController extends AppController
{
	public function index()
	{
         $videos = TableRegistry::get('video');
         $query = $videos->find();
         $this->set('results',$query);
    }

	public function add()
	{
      if($this->request->is('post'))
	  {
         $vidname = $this->request->getData('video_title');
		 $vidpath = $this->request->getData('video_path');
		 
		 
         $videos_table = TableRegistry::get('video');
         $videos = $videos_table->newEntity($this->request->getData());
		 
         $videos->vidname = $vidname;
         $videos->vidpath = $vidpath;
		 $videos->vidlikes = 0;
		 $videos->viddislikes = 0;
		 $videos->vidviews = 0;
		 
         $this->set('videos', $videos);
		 
         if($videos_table->save($videos))
         return $this->redirect([
			'controller'=>'adminhomepage',
			'action'=>'index'
			]);
		 
      }
	}

	public function edit($vidid)
	{
		 $this->set('ident',$vidid);
         if($this->request->is('post'))
		 {
            $vidname = $this->request->getData('video_name');
            $vidpath = $this->request->getData('video_path');
			$vidlikes = $this->request->getData('video_likes');
			$viddislikes = $this->request->getData('video_dislikes');
			$vidviews = $this->request->getData('video_views');
			
            $videos_table = TableRegistry::get('video');
            $videos = $videos_table->get($vidid);
			
            $videos->vidname = $vidname;
            $videos->vidpath = $vidpath;
			$videos->vidlikes = $vidlikes;
			$videos->viddislikes = $viddislikes;
			$videos->vidviews = $vidviews;
			
            if($videos_table->save($videos))
            return $this->redirect([
				'controller'=>'adminhomepage',
				'action'=>'index'
			]);
         } else {
            $videos_table = TableRegistry::get('video')->find();
            $videos = $videos_table->where(['vidid'=>$vidid])->first();
			
            $this->set('vidname',$videos->vidname);
            $this->set('vidpath',$videos->vidpath);
			$this->set('vidlikes',$videos->vidlikes);
			$this->set('viddislikes',$videos->viddislikes);
			$this->set('vidviews',$videos->vidviews);
            $this->set('vidid',$vidid);
         }	 
	}

	 public function delete($vidid)
	 {
		 
         $videos_table = TableRegistry::get('video');
         $videos = $videos_table->get($vidid);
		 
         $videos_table->delete($videos);
		 
         return $this->redirect([
				'controller'=>'adminhomepage',
				'action'=>'index'
				]);
	 }
}
?>