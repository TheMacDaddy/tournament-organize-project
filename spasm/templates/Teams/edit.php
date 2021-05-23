<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/playershomepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/teams/edit/'.$ident));
   echo $this->Form->control('game_in',['value'=>$gameid]);
   echo $this->Form->control('team_name',['value'=>$teamname]);
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>