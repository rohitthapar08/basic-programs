<?php
for($i=0;$i<=5;$i++){
for($j=5-$i;$j>=1;$j--){
echo "*&nbsp;";
}
echo "<br>";
}
?>



<?php
for($i=0;$i<=6;$i++){
for($k=6;$k>=$i;$k--){
echo " &nbsp;";
}
for($j=1;$j<=$i;$j++){
echo "* &nbsp;";
}
echo "<br>";
}
for($i=5;$i>=1;$i--){
for($k=6;$k>=$i;$k--){
echo " &nbsp;";
}
for($j=1;$j<=$i;$j++){
echo "* &nbsp;";
}
echo "<br>";
}
?>