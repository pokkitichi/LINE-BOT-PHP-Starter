<?php
$access_token = 'r3xz9T7ytsSaODtFEGlid1ZXrpiR18VFY0DQ4uKpNzI1UKF77Ww/G6NkSSZTQy0pcws9Z1W1vur5jHq8JIdTcnyqFBwV1k4acvpHieNAM2XQ1AyXrr87Z1rX1kzafshluVZDMgrfsoBEtNHqwJQZ0gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
