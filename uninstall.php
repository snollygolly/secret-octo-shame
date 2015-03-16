<?php
$messages = [
  "Checking for installation",
  "Checking for enhanced installation",
  "Checking for backdoor installation",
  "Processing configuration file",
  "Analyzing vertices",
  "Proxying gump points",
  "Checking memory for frozen bit sectors",
  "Checking for authorization keys",
  "Handling authorization keys",
  "Attempting to stop system services",
  "Stopping uninstall hooks",
  "Verifying hook removal",
  "Bump meshes being refactored",
  "Height maps recalibrated",
  "Checking remote services pingback",
  "Checking in use ports for remotes",
  "Attempting to stop remote services",
  "Preventing remote service hook execution",
  "Stopping remote services",
  "Checking for system keys",
  "Analyzing system keys",
  "Doing deep object comparison on system keys",
  "Removing positive NP+ diffs",
  "Refactoring key storage location",
  "Escaping key storage location",
  "Reinstating key storage service",
  "Analyzing user keys",
  "Doing deep object comparison on user keys",
  "Removing positive P+ diffs",
  "Refactoring user key storage location",
  "Escaping user key storage location",
  "Reinstating user key storage service",
  "Checking for user daemons",
  "Analyzing non-user running daemons",
  "Attempting to stop non-installed user daemons",
  "Reticulating splines",
  "Setting user vanes to modulate",
  "Preventing reinfection",
  "Done!"
];

while (count($messages) > 0){
  echo logStatus(array_shift($messages), randomNumber(0,1));
}
die();

function logStatus($message, $pass){
  //set up the colors
  $passColor = "\033[0;32m";
  $failColor = "\033[0;31m";
  $noColor = "\033[0m";
  //set up the widths
  $totalWidth = 60;
  $messageWidth = strlen($message);
  $statusWidth = 6;
  $dotWidth = $totalWidth - ($messageWidth + $statusWidth);
  //format passing or fail
  if ($pass == true){
    $status = "[{$passColor}PASS{$noColor}]";
  }else{
    $status = "[{$failColor}FAIL{$noColor}]";
  }
  //build out the string
  $returnStr = $message . str_repeat(".", $dotWidth) . "{$status}\n";
  $sleepDelay = randomNumber(100000, 1000000);
  usleep($sleepDelay);
  return $returnStr;
}

function randomNumber($min, $max){
  return rand($min, $max);
}
?>
