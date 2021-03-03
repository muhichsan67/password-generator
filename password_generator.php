$characters 	= 12;
$array_password = array(
  "character" => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
  "number"    => '0123456789',
  "symbol"    => '!@#$%^&*()'
);
$array_rule = array(
  "character" => 5,
  "number"    => 5,
  "symbol"    => 2
);

$array_update_rule = array(
  "character" => 0,
  "number"    => 0,
  "symbol"    => 0
);

$password 	= '';
$total_character = 0;
while ($total_character < $characters) {
  $random_key = array_rand($array_password, 1);
  
  $characters = $array_password[$random_key];
  $charactersLength = strlen($characters);
  $randomString = $characters[rand(0, $charactersLength - 1)];
  
  if ($array_update_rule[$random_key] < $array_rule[$random_key]) {
      $password .= $randomString;
      $array_update_rule[$random_key] += 1;
      $total_character += 1;
  }
}

return $password;
