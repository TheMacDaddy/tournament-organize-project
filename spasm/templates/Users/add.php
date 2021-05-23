<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/adminhomepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/users/add'));
   echo $this->Form->control('username');
   echo $this->Form->control('password');
   echo $this->Form->control('email_address');
   echo $this->Form->control('profile_photo');
   echo $this->Form->control('verified_developer');
   echo $this->Form->control('verified_organizer');
   echo $this->Form->control('date_of_birth');
   echo $this->Form->control('permission_value');
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>

