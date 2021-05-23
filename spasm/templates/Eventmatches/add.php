<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/homepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/eventmatches/add'));
   echo $this->Form->control('event_id');
   echo $this->Form->control('match_number');
   echo $this->Form->control('match_order');
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>