<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/organizerhomepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/matches/add'));
   echo $this->Form->control('event_in');
   echo $this->Form->control('match_date');
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>