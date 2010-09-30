<?
header('Content-Type: text/html; charset=utf-8');
$txt_file = file('1db_leader_for.txt');

print "var r=new Array();\n";
foreach ($txt_file as $line_num => $txt_file) { print "r[{$line_num}]='" . addslashes(trim($txt_file)) . "';\n"; } 

?>