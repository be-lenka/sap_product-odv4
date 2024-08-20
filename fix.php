<?php
$file = file_get_contents($argv[1]);
$settersStart = strpos($file, '$setters =');
if (!$settersStart){
    return;
}
$settersEnd = strpos($file, ';', $settersStart);
$setters = substr($file, $settersStart + strlen('$setters = '), $settersEnd - $settersStart - strlen('$setters = '));
$settersParsed = eval('return ' . $setters . ';');
foreach ($settersParsed as $key => $val) {
    if (strpos($key, '_') === 0) {
        $file = str_replace("'$key' => '$val'", "'$key' => '_$val'", $file);
        $orig = 'public function ' . $val . '($' . $key . ')';
        $new = 'public function _' . $val . '($' . $key . ')';
        $file = str_replace($orig, $new, $file);
        // getter
        $val = preg_replace("/^(set)/", "get", $val);
        $file = str_replace("'$key' => '$val'", "'$key' => '_$val'", $file);
        $orig = 'public function ' . $val . '()
    {
        return $this->container[\'' . $key . '\'];';
        $new = 'public function _' . $val . '()
    {
    return $this->container[\'' . $key . '\'];';
        $file = str_replace($orig, $new, $file);
    }
}
file_put_contents($argv[1], $file);
//echo $file;
//echo $file;
//$x = eval($setters);