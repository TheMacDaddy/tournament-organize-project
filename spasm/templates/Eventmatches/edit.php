<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/homepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/eventmatches/edit/'.$ident));
   echo $this->Form->control('event_id',['value'=>$eventid]);
   echo $this->Form->control('match_number',['value'=>$matchnumber]);
   echo $this->Form->control('match_order',['value'=>$matchorder]);
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>