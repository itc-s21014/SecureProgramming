<?php
  $zip = $_GET['zip'];
  $json = '{"message":"郵便番号が見つかりません:' . $zip . '"}';
  header('Content-type: text/javascript; charset=utf-8');
  echo "callback_zip($json);";
