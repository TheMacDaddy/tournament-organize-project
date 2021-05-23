<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/homepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/matchvideos/edit/'.$ident));
   echo $this->Form->control('video_id',['value'=>$vidid]);
   echo $this->Form->control('match_number',['value'=>$matchnumber]);
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>