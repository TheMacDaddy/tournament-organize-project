<button type="button" onclick="window,location.href='adminhomepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/games/edit/'.$ident));
   echo $this->Form->control('game_name', ['value'=>$gamename]);
   echo $this->Form->control('game_system', ['value'=>$gamesystem]);
   echo $this->Form->control('game_developer', ['value'=>$developer]);
   echo $this->Form->control('game_genre', ['value'=>$genre]);
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>