<?php
//error_reporting(0);

return array(
	'vacans/([0-9]+)' => 'vacans/list/$1',
	'vacans' => 'vacans/list',
	'resume' => 'resume/show',
	'' => 'vacans/list/$1',
 );