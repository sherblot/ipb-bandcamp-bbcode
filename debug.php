<?php

// Create some blank classes as we don't need them to try the bbcode parser
class ipsRegistry
{
}

class bbcode_parent_main_class
{
	public function __construct(ipsRegistry $registry)
	{
	}
	
	// Dumb method to access the protected _replaceText method
	public function run($txt)
	{
		return $this->_replaceText($txt);
	}
}

// Here start the real debug process
require_once('bandcamp.php');

$txt = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut libero odio, aliquam sed sapien sit amet, euismod maximus massa. Nam rutrum condimentum consequat. Phasellus ligula ligula, porttitor nec sapien at, tincidunt ultricies quam. Fusce aliquet hendrerit mattis. Maecenas id metus viverra odio placerat elementum quis sed mi. Vestibulum bibendum turpis sed nisi cursus, non sagittis tellus rutrum. Morbi finibus ac ex sed fermentum.<br/><br>
[bandcamp width=100% height=120 album=3191779155 size=large bgcol=ffffff linkcol=0687f5 tracklist=false artwork=small track=3996006842]
Ut at efficitur nisi, in malesuada justo. Proin velit nisl, euismod dapibus augue id, pellentesque euismod arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur egestas est ac sem maximus, vel porta massa malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed facilisis iaculis dolor non malesuada. Phasellus ultricies libero fringilla eros maximus posuere. Nunc cursus nisi sed hendrerit mattis. Cras eget ipsum diam. Nullam mauris ipsum, pretium eu mauris in, rutrum lacinia eros. Mauris non orci sapien. Nulla urna sapien, congue eget finibus ut, sodales vitae neque.';

$bbcode = new bbcode_plugin_bandcamp(new ipsRegistry);
echo $bbcode->run($txt);
