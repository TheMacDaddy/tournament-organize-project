<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/organizerhomepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/events/edit/'.$ident));
   echo $this->Form->control('event_name', ['value'=>$eventname]);
   echo $this->Form->control('game_played', ['value'=>$gameid]);
   echo $this->Form->control('event_rules', ['value'=>$eventrules]);
   echo $this->Form->control('requirements', ['value'=>$requirements]);
   echo $this->Form->control('bracket_type', ['value'=>$brackettype]);
   echo $this->Form->control('bracket_size', ['value'=>$bracketsize]);
   echo $this->Form->control('prize', ['value'=>$prize]);
   echo $this->Form->control('start_date', ['value'=>$startdate]);
   echo $this->Form->control('end_date', ['value'=>$enddate]);
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>