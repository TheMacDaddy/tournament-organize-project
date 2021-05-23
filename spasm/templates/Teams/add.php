<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/playershomepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/teams/add'));
   echo $this->Form->control('game_in');
   echo $this->Form->control('team_name');
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>
