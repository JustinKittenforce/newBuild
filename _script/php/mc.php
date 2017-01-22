<?php
$hckserv = @fsockopen("static.kita-servers.co", 25565, $errno, $errstr, 0);
	if (!$hckserv) {
		$hck = '<span class="online"><strong>Online!</strong> No issues to report</span>';
	} else {
		$hck = '<span class="offline"><strong>Suspect!</strong> Probably offline!</span>';
	}

$tsServ = @fsockopen("ts.kita-servers.co", 15510, $errno, $errstr, 0);
	if (!$tsServ) {
		$ts = '<span class="online"><strong>Online!</strong> No issues to report</span>';
	} else {
		$ts = '<span class="offline"><strong>Suspect!</strong> Probably offline!</span>';
	}

$rachel = @fsockopen("static.kita-servers.co", 22001, $errno, $errstr, 0);
	if (!$rachel) {
		$rii = '<span class="online"><strong>Online!</strong> No issues to report</span>';
	} else {
		$rii = '<span class="offline"><strong>Suspect!</strong> Probably offline!</span>';
	}

?>