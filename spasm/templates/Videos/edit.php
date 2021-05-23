<button type="button" onclick="window.location.href='http://3.129.58.132/spasm/adminhomepage'">Cancel</button>
<br></br>
<?php
   echo $this->Form->create(NULL,array('url'=>'/videos/edit/'.$ident));
   echo $this->Form->control('video_name',['value'=>$vidname]);
   echo $this->Form->control('video_path',['value'=>$vidpath]);
   echo $this->Form->control('video_likes',['value'=>$vidlikes]);
   echo $this->Form->control('video_dislikes',['value'=>$viddislikes]);
   echo $this->Form->control('video_views',['value'=>$vidviews]);
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>