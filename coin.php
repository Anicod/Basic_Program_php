<html>
<body>

You fliped the coin <?php 
$num = $_POST["flip"];
$yearNum = $_POST["year"];
$number = $_POST["number"];
$primeFact = $_POST["fact"];
$primeNum = (int)$primeFact;
$power = (int)$number;
$year = (int)$yearNum;
$flip = (int)$num;
$index = 0;
$head = 0;
$tail = 0;
$consecFact =  0;
$powerValue  = 1;
$powerNum = 1;
$factors = array();
echo "$flip times";
while($index<$flip){
    $chance = rand(0, 2);
    if($chance === 1){
        $head++;
    }
    else{
        $tail++;
    }
    $index++;
}
$headPercent = ($head/$flip)*100;
$tailPercent = ($tail/$flip)*100;
echo "<p>Total number of head is: $headPercent%";
echo "<p>Total number of tail is: $tailPercent%";
if($year%4){
    echo "<p>not leap year</P>";
}
elseif($year%100){
    echo "<p> leap year</p>";
}
elseif($year%400){
    echo "<p>leap year</p>";
}
else{
    echo "<p>leap year</p>";
}
while($power>0){
    $powerValue = 2*$powerValue;
    echo "<table><tr><td>2 power of $powerNum is $powerValue</td></tr></table>";
    $power--;
    $powerNum++;
}
for($index = 1; $index<=$primeNum; $index++){
    if($primeNum%$index === 0){
        $factors[$consecFact] = $index;
        $consecFact++;
    }
}
for($index = 0; $index<count($factors); $index++){
    echo $factors[$index];
}
?>

</body>
</html>