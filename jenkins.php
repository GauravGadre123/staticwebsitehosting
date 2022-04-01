<?php
$ch= curl_init();
curl_setopt($ch,CURLOPT_URL,"http://104.198.28.58:8080/job/Springboot-deploy-GCP/build");
curl_setopt($ch,CURLOPT_POST,1);

curl_setopt($ch,CURLOPT_HTTPHEADER ,array('Jenkins-Crumb: 80a67e4653d3ec23c12a061eae8253874dd36548dc8f12fcaabb77a242716049',
                                         'Authorization: Basic Z2F1cmF2OjExMjNmMGExYzEwMWQ0ZWJhMjM2OWNhY2ZlYjczYWYxNmQ='));
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$server_output= curl_exec($ch);
curl_close($ch);
?>
