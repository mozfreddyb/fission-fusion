<?php
$response = (int) $_GET['r'];
if (($response < 301) || ($response > 308)) {
  $response = 301;
}
header("Location: https://example.com", FALSE, $response);
?>