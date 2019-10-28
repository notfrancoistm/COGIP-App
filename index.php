<?php
$d = dir(".");
echo "<table style='border:1px solid black;'><td>";
while ($entry = $d->read()) {
    ?> <a href="<?php echo $entry; ?>"><?php echo $entry; ?> </a><br><?php
}
$d->close();
echo "</td></table>";
?>