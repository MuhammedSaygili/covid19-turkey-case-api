<?php
  $client = curl_init();
  curl_setopt($client, CURLOPT_URL, "https://covid19.saglik.gov.tr/");
  curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
  $siteData = curl_exec($client);
  preg_match_all('#var sondurumjson =(.*?)//]]>#si', $siteData, $matchedData);
  $dataArray = json_decode(trim(trim(trim($matchedData[1][0], "]"), "["), ";"), true)[0];
  curl_close($client);
  print_r($dataArray);
?>
