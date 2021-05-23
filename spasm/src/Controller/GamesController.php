<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\EventInterface;
class GamesController extends AppController
{
	public function index()
	{
		 $games = TableRegistry::get('game');
         $query = $games->find();
         $this->set('results',$query);
	}

	public function add()
	{
      if($this->request->is('post'))
	  {
         $gamename = $this->request->getData('game_name');
		 $gamesystem = $this->request->getData('game_system');
		 $developer = $this->request->getData('game_developer');
		 $genre = $this->request->getData('game_genre');
		 
         $games_table = TableRegistry::get('game');
         $games = $games_table->newEntity($this->request->getData());
		 
		 $games->gamename = $gamename;
		 $games->gamesystem = $gamesystem;
         $games->developer = $developer;
		 $games->genre = $genre;
		 
         $this->set('game', $games);
         if($games_table->save($games))
         return $this->redirect([
			'controller'=>'adminhomepage',
			'action'=>'index'
			]);	 
      }
	}

	public function edit($gameid)
	{
		 $this->set('ident',$gameid);
         if($this->request->is('post'))
		 {
			$gamename = $this->request->getData('game_name');
			$gamesystem = $this->request->getData('game_system');
			$developer = $this->request->getData('game_developer');
			$genre = $this->request->getData('game_genre');
			
            $games_table = TableRegistry::get('game');
            $games = $games_table->get($gameid);
			
			$games->gamename = $gamename;
			$games->gamesystem = $gamesystem;
			$games->developer = $developer;
			$games->genre = $genre;
			
            if($games_table->save($games))
			return $this->redirect([
				'controller'=>'adminhomepage',
				'action'=>'index'
				]);	 
         } else {
            $games_table = TableRegistry::get('game')->find();
            $games = $games_table->where(['gameid'=>$gameid])->first();
			
			$this->set('gamename',$games->gamename);
			$this->set('gamesystem',$games->gamesystem);
            $this->set('developer',$games->developer);
			$this->set('genre',$games->genre);
			
            $this->set('gameid',$gameid);
         }	 
	}
	
	 public function delete($gameid)
	 {
         $games_table = TableRegistry::get('game');
         $games = $games_table->get($gameid);
         $games_table->delete($games);
         return $this->redirect([
			'controller'=>'adminhomepage',
			'action'=>'index'
			]);
	 }
}
?>