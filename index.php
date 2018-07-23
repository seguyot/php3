<?php
//ex1
$new = 0;

for($new = 0; $new <=10; $new++){
    echo $new;
}

//ex2
$var1 = 0;
$var2 = 40;

while($var1 <= 20){
   $resultat = $var1 * $var2;
   echo $resultat."<br/>";
   $var1++;
}

//ex3
$var3 = 100;
$var4 = 40;

while($var1 > 10){
   $resultat = $var3 * $var4;
   echo $resultat."<br/>";
   $var3--;
}

//ex4
$var1 = 1;

while($var1 < 10){
    echo $var1;
    $var1 = $var1 + ($var1/2);
}

//ex5
$go =1;
while($go<=15){
    echo "on y arrive presque <br/>";
    $go ++;

}

//ex6
$go =20;
while($go>0){
    echo "c'est presque bon <br/>";
    $go --;
}
//ex7
$go =1;
while($go<100){
    echo "on tient le bon bout <br/>";
    $go +=15;
}
//ex8
$go =200;
while($go>0){
    echo "Enfin!!!! <br/>";
    $go -=12;
}