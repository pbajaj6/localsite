<?php
$cfg = '{"dbs":{
 "jacketpages":{
  "host" : "localhost",
  "username":"evitics", 
  "password":"eventanalytics",
  "type":"mysql"
  },
  "localsite":{
  "host" : "localhost",
  "username":"localsite", 
  "password":"eventanalytics",
  "type":"mysql"
  }
}
}';

$config = json_decode($cfg);
?>
