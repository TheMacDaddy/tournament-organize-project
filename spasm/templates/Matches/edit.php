<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/organizerhomepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/matches/edit/'.$ident));
   echo $this->Form->control('event_in',['value'=>$eventid]);
   echo $this->Form->control('match_date',['value'=>$matchdate]);
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>