<?php
$ds = ldap_connect("directory.washington.edu");
$error = False;
$fieldsToSearch = array('cn' => "Name", 'mail' => "Email", 'homephone' => "Phone", "title" => "Major/Title");
$search = explode(" ", $_POST['text']);
if(isset($argv[1])) {
  $search = $argv;
}
array_shift($search); // Either way, the first element isn't used
$search = implode($search, "*");
if($ds) {
  $r = ldap_bind($ds);
  $sr = ldap_search($ds, "o=University of Washington, c=US", "(|(cn=*$search*))");
  $results = ldap_get_entries($ds, $sr);
  $entries = "entries";
  if($results['count'] == 1) {
    $entries = "entry";
  }
  $text = "Search returned ".$results['count']." ".$entries;
  $attachments = array();

  for($i = 0; $i < $results['count']; $i++) {
    $fields = array();
    foreach($fieldsToSearch as $key => $name) {
      $fields[] = array('title' => $name, 'value' => $results[$i][$key][0], 'short' => True);
    }
    $attachments[] = array('fields' => $fields);
  }
  echo json_encode(array(
    "text" => $text,
    "attachments" => $attachments,
    "username" => "UW Directory",
    "icon_url" => "https://www.washington.edu/brand/files/2014/09/W-Logo_Purple_Hex.png"
  ));
} else {
  echo json_encode(array(
    "text" => "Failed to connect to `directory.washington.edu`",
    "username" => "Failure Bot",
    "icon_url" => "https://pbs.twimg.com/profile_images/456473652515463169/xXR95uqW_400x400.png"
  ));
}
