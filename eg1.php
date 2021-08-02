<?Php
echo "1 uzd.";

$arr = [];
$arr2 =[];

$letters = ['A', 'B'];
for ($i=0; $i < 101; $i++) { 
    $arr2[] = $letters[rand(0, count($letters)-1)];
   if($i % 10){
    $arr2[$i] = "A";
   }else {
    $arr2[$i-1] = "B";
   }
       
}

print_r($arr2);

echo "<br>";
echo "2 uzd.";
echo "<br>";

$lettersa = ['A'];
$lettersb = ['B'];
$a = [];
$b = [];

for ($i = 0; $i < count($arr2) ; $i++) {
    $a[] = $lettersa[rand(0, count($lettersa)-1)];
    $b[] = $lettersb[rand(0, count($lettersb)-1)];

    $arr = $a.$b;
   
}
print_r($arr);

?>