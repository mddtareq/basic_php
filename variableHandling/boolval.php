<?php
echo "0: " .(boolval(0) ? 'true' : 'false') . "<br>";
echo "4: " .(boolval(42) ? 'true' : 'false') . "<br>";
echo '"": ' .(boolval("") ? 'true' : 'false') . "<br>";
echo '"Hello": ' .(boolval("Hello") ? 'true' : 'false') . "<br>";
echo '"0": ' .(boolval("0") ? 'true' : 'false') . "<br>";
echo "[3, 5]: " .(boolval([3, 5]) ? 'true' : 'false') . "<br>";
echo "[]: " .(boolval([]) ? 'true' : 'false') . "<br>";
?>