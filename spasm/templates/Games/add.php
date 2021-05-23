<button type="button" onclick="window,location.href='http://3.129.58.132/spasm/adminhomepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/games/add'));
   echo $this->Form->control('game_name');
   echo $this->Form->control('game_system');
   echo $this->Form->control('game_developer');
   echo $this->Form->control('game_genre');
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>
