<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/playershomepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/teammembers/add'));
   echo $this->Form->control('team_in');
   echo $this->Form->control('user_in');
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>
		 