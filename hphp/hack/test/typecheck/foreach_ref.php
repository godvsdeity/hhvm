<?hh
function foo(): int {
  $arr = array(1, 2, 3);
  $y = 0;
  foreach ($arr as &$val) {
    $y += $val++;
  }
  var_dump($arr);
  return $y;
}
foo();
