<html>
<body>

You fliped the coin <?php 
$num = $_POST["flip"];
$yearNum = $_POST["year"];
$number = $_POST["number"];
$primeFact = $_POST["fact"];
$divident = $_POST["divNumber"];
$numberEveOdd = $_POST["numEveOdd"];
$alpha = $_POST["alphabet"];
$numEo = (int)$numberEveOdd;
$dividendNum = (int)$divident;
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
$numA = 11;
$numB = 12;
$factors = array();
$numArray = array(18, 15, 10);
$max = $numArray[0];

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
echo "<p>Remainder is</p>" . $dividendNum%2 ."!";
echo "<p>Qutient is</p>" . $dividendNum/2 ."!";
$temp = $numA;
$numA = $numB;
$numB = $temp;
echo "<p>number are swaped</p>" . $numA ."," . $numB . ".";
if($numEo%2 == 0){
    echo "<p>number is even</p>";
}
else{
    echo "<p>number is odd</p>";
}
if($alpha === "a" && $alpha === "e" && $alpha === "i" && $alpha === "o" && $alpha === "u"){
    echo  "<p>alphabet is vowel</p>";
}
else{
    echo "<p>alphabet is consonent</p>";
}
for($maxIndex = 1; $maxIndex<count($numArray); $maxIndex++){
    if($numArray[$maxIndex]>$max){
        $max = $numArray[$maxIndex];
    }
}
echo "<p>Maximum number is $max</p>";

?>

</body>
</html>