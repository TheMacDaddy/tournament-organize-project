<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/organizerhomepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/matchteams/add'));
   echo $this->Form->control('match_number');
   echo $this->Form->control('team_one');
   echo $this->Form->control('team_two');
   echo $this->Form->control('match_winner');
   echo $this->Form->control('match_score');
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>