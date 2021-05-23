<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/organizerhomepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/events/add'));
   echo $this->Form->control('event_name');
   echo $this->Form->control('game_played');
   echo $this->Form->control('event_rules');
   echo $this->Form->control('requirements');
   echo $this->Form->control('bracket_type');
   echo $this->Form->control('bracket_size');
   echo $this->Form->control('prize');
   echo $this->Form->control('start_date');
   echo $this->Form->control('end_date');
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>
