<?php

$cpanel = new CPANEL(); // Connect to cPanel - only do this once.
  
// Initiate deployment
$create = $cpanel->uapi(
    'VersionControlDeployment', 'create',
     array(
        'repository_root'    => '/home/hekkynur/public_html/cms'
     )
);