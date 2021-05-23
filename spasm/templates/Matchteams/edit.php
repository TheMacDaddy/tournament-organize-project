<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/organizerhomepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/matchteams/edit/'.$ident));
   echo $this->Form->control('match_number',['value'=>$matchnumber]);
   echo $this->Form->control('team_one',['value'=>$matchpar1]);
   echo $this->Form->control('team_two',['value'=>$matchpar2]);
   echo $this->Form->control('match_winner',['value'=>$matchwinner]);
   echo $this->Form->control('match_score',['value'=>$matchscore]);
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>