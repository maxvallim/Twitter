<?php
require_once "autoload.php";
 
header('Content-Type: text/html');
 
use Jaspersoft\Client\Client;
 
$c = new Client(
        "localhost",
        "8080",
        "jasperadmin",
        "jasperadmin",
        "/jasperserver-pro",
        "organization_1"
      );  
 
$report = $c->reportService()->runReport('/reports/MyReport', 'html');
 
echo $report;  
 
?>