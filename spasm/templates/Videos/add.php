<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/adminhomepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/videos/add'));
   echo $this->Form->control('video_title');
   echo $this->Form->control('video_path');
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>