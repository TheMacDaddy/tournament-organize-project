<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/adminhomepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/users/edit/'.$ident));
   echo $this->Form->control('username',['value'=>$username]);
   echo $this->Form->control('password',['value'=>$password]);
   echo $this->Form->control('email_address',['value'=>$emailadd]);
   echo $this->Form->control('profile_photo',['value'=>$profilephoto]);
   echo $this->Form->control('verified_developer',['value'=>$devverified]);
   echo $this->Form->control('verified_organizer',['value'=>$orgverified]);
   echo $this->Form->control('date_of_birth',['value'=>$dateofbirth]);
   echo $this->Form->control('permission_value', ['value'=>$permissionval]);
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>
