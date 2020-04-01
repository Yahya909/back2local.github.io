<?php 	          
                             
  

#1

  $text1='привет, '    ;
  $text2='Мир!' ;
  echo $text1.$text2 . '<br>';

#2s
  $name='Яхё';

  echo $text1.$name . '<br>';
  #3
  $age =15;
  echo 'Мне '.$age.' лет' . '<br>';

#10

  $text='abcde';

  echo $text[0],$text[2],$text[4] .  '<br>';
  #11
   $text[0]='!' ;
   echo $text .  '<br>'; 
  #12
  $num=12345;
  echo $num[0]+$num[1]+$num[2]+$num[3]+$num[4] .   '<br>';
  #13
  echo 60*60 .  '<br>';
  echo 60*60*24 .  '<br>';
  echo 60*60*24*30 .  '<br>';


 #14
  $hour=15;
  $minute=30;
  $second = 59;
  echo  $hour.':'. $minute.':'. $second .  '<br>';

  #15
  $number=12;
  echo $number*$number .  '<br>';

#16
  $var=47;

  $var += 7;
  $var -= 18;
  $var *= 10;
  $var /= 20 ;
echo $var .  '<br>';

#1


$arr=['a','b','c'];
var_dump($arr) .  '<br>';;


#2
	echo $arr[0] .  '<br>';
	echo $arr[1] .  '<br>';
	echo $arr[2] .  '<br>';

	#3
$arr2=['a','b','c', 'd'];
	echo $arr2[0].'+'.$arr2[1] .  '<br>';
	echo $arr2[2].'+'.$arr2[3] .  '<br>';
	#4
	$arr3=[2,5,3,9];
	$result= $arr3[0]*$arr3[1]+$arr3[2]*$arr3[3];
	echo $result .  '<br>';
	#5
	$Arr[]=1;
	$Arr[]=2;
	$Arr[]=3;
	$Arr[]=4;
	$Arr[]=5;
	var_dump ($Arr);
	#6
	$arr4=['a'=>1,'b'=>2,'c'=>3];
	echo $arr4['c'] .  '<br>';
	#7
	$arr5=['a'=>1,'b'=>2,'c'=>3];
	echo $arr5['a']+$arr5['b']+$arr5['c'] .  '<br>';
	#8
	$arr6=['Коля'=>'1000$','Вася'=>'500$','Петя'=>'200$'];
	echo $arr6['Коля'] .  '<br>';
	echo $arr6['Петя'] .  '<br>';
	#9
	$week=[1=>'пн','вт','ср','чт','пт','сб','вс'];
	echo $week[1] .  '<br>';
	#10
	$day=1;
	echo $week[$day] .  '<br>' ;

	#11
	$arr7=['cms'=>['joomla','wordpress','drupal'],
'colors'=>['blue'=>'голубой','red'=>'красный','green'=>'зелёный']];
echo $arr7['cms'][0].','.$arr7['cms'][2].','.$arr7['colors']['green'].','.$arr7['colors']['red'] . '<br>';

#12
$week2 = ['ru'=>['понедельник','вторник','среда','четверг','пятница','суббота','воскресенье'],
             'en'=>['monday','tuesday','wednesday','thursday','friday','saturday','sunday'],];
           echo $week2 ['ru'][0] . ',' ; 
             echo $week2 ['en'][2]  .  '<br>'  ;


             #13

             $lang='ru';
             echo $week2[$lang][$day] .  '<br>' ;


             #1

// $a = 0 ;
// if ($a == 0){
// 	echo 'verno';
// }else{
// 	echo 'neverno';
// }
#2
// $a = 1 ;
// if ($a > 0){
// 	echo 'verno';
// }else{
// 	echo 'neverno';
// }
#3
// $a = -1 ;
// if ($a < 0){
// 	echo 'verno';
// }else{
// 	echo 'neverno';
// }
#4
// $a = -1 ;
// if ($a => 0){
// 	echo 'verno';
// }else{
// 	echo 'neverno';
// }
#5
//              $a = -1 ;
// if ($a <= 0){
// 	echo 'verno';
// }else{
// 	echo 'neverno';
// }
#6
// $a = -1 ;
// if ($a != 0){
// 	echo 'verno';
// }else{
// 	echo 'neverno';
// }
#7
 $a = 1 ;
       if($a == 'test'){
      echo 'verno';}
       else{
          echo 'neverno';
       }
        
       echo '<hr>';

       $a = 2 ;
       if($a === 1){
      echo 'verno';}
       else{
          echo 'neverno';
       }

       echo '<hr>';

       $a = 2 ;
       if($a === 1){
      echo 'verno';}
       else{
          echo 'neverno';
       }

       echo '<hr>';

       $a = 'null';
  if(empty($a)){
  echo 'verno';}
  else{
     echo 'neverno';
 } 

 echo '<hr>';

  $a = 'null';
  if(!empty($a)){
  echo 'verno';}
  else{
     echo 'neverno';
 }

 echo '<hr>';

 $a = 'null';
 if(isset($a)){
 echo 'verno';}
 else{
    echo 'neverno';
}

echo '<hr>';

$a = 'null';
 if(!isset($a)){
 echo 'verno';}
 else{
    echo 'neverno';
}

echo '<hr>';

$a = 'null';
 if($a == true){
 echo 'verno';}
 else{
    echo 'neverno';
}

echo '<hr>';

$a = 'null';
 if($a != true){
 echo 'verno';}
 else{
    echo 'neverno';
}

echo '<hr>';

   $a = 1 ;
       if($a == 0 and $a <= 5 ){
      echo 'verno';}
       else{
          echo 'neverno';
       }

       echo '<hr>';

       $a = 0;
     if($a = 0) {
    echo 'verno';
   }elseif ($a=2){
	   echo 'verno';
   }else{
       echo 'neverno';
   }

   echo '<hr>';

   $a = 1 ;
   $b = 2 ;
   if($a == 1 or $a == 1 )
   if($b >= 3 or $a == 3) {
  echo $a + $b;}
   else{
      echo $a - $b;
   }

   echo '<hr>';

   $a = 6 ;
   $b = 7;
   if($a >= 3 and $a <= 11 or $b >= 6 or $b == 6 and $b >= 14 )
   if($b >= 3 or $a == 3) {
  echo 'verno';}
   else{
      echo 'neverno';
   }

   echo '<hr>';

   $lang = '1';
       switch($lang){
       case 1 :
           echo 'зима';
    break;
       case 2:
           echo 'весна';
    break;
       case 3:
           echo 'лето';
    break;
       case 4:
           echo 'осень';
    break; 
}
    echo '<hr>';

    $lang = '23';
    switch($lang){
    case 1 :
        echo ' first';
 break;
    case 11 :
        echo 'second';
 break;
    case 23 :
        echo 'third';
 break;
}

echo '<hr>';

$a = 6 ;
       if($a == 1 or $a == 2 or $a == 3 ){
      echo 'winter';}
       elseif($a == 4 or $a == 5 or $a == 6){
          echo 'spring';
       } elseif($a == 7 or $a == 8 or $a == 9){
         echo 'summer';
      } elseif($a == 10 or $a == 11 or $a == 12){
         echo 'fall';
      }


       echo '<hr>';

       $a = 'abcde';
       if($a[0] == a){
       echo 'yes';}
       else{
          echo 'no';
       }

 echo '<hr>';

       $a = '1,2,3,4,5';
       if($a[0] == 1 or $a[0] == 2 or $a[0] == 3){
       echo 'yes';}
       else{
          echo 'no';
       }

       echo '<hr>';
       
       $a =[2,5,3];
       echo $result =  $a[0] +  $a[1] +  $a[2] ;
      
       echo '<hr>';

       $a = [1,2,3,4,5,6];
        $result =  $a[0] +  $a[1] +  $a[2] ;
        $result2 =  $a[3] +  $a[4] +  $a[5] ;
        if($result == $result2){
        echo 'yes';}
        else{
           echo 'no';
        }
           
        echo '<hr>';     
        
        $arr =['a'=>'html','b'=>'css','c'=>'php','d'=>'js','e'=>'jq'];
 foreach($arr as $el):
     echo $el.'<br>'; 
 endforeach;

  echo '<hr>';

  $arr =[1,2,3,4,5  ];
  $result=0;
  foreach($arr as $elem){
     $result=$result + $elem;
  }
 echo $result;

  echo '<hr>';

  $arr=[1,2,3,4,5];
  $result=0;
 foreach($arr as $el){
   $result = $result + $el**$el;
     
 } 
  echo $result;

  echo '<hr>';
 
  $arr =['green'=>1,'red'=>2,'black'=>3,'blue'=>4,'pink'=>5];
   foreach($arr as $key=>$elem){
      echo $key . '=' . $elem . '<br>';
   }

   echo '<hr>';

   $arr =['Коля'=>200,'Вася'=>300,'Петя'=>400];
   
     foreach($arr as $key=>$elem){
      echo "$key зарплата- $elem долларов . '<br>'";
   }
            
echo '<hr>';

$i= 1;
   while($i <= 100){
   echo $i.'<br>';
    $i++;
     }

     echo '<hr>';

     for ($i=1; $i <= 100; $i++) {
      if ($i%2 == 0 ) {
      $even[] = $i;
      } else {
      $odd[] = $i;
      }
      }
      echo 'Четные :<br>';
      foreach ($even as $value) {
      echo $value.'<br>';
      }

      echo '<hr>';

      
              $arr =[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100];
    $result=0;
     foreach($arr as $elem){
     $result=$result + $elem;
     }
         echo $result;

         echo '<hr>';

         $arr= [2, 5, 9, 15, 0, 4];
foreach($arr as $ar){
    if ($ar >= 3 and $ar <= 10){
        echo $ar . '<br>';
    }
   }