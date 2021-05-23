<?php
   echo $this->Form->create(NULL,array('url'=>'/players/add'));
   echo $this->Form->control('username');
   echo $this->Form->control('password');
   echo $this->Form->control('email_address');
   echo $this->Form->control('date_of_birth');
   echo $this->Form->control('team_name');
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>
