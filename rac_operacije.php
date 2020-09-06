<?php
function racun()
{
        $slucaj=$_POST["dropdown"];
       $a=$_POST["broj1"];
       $b=$_POST["broj2"];
        switch($slucaj){
        case "zbrajanje":
        $c = $a + $b;
        echo $c;
        break;


    case "oduzimanje":
        $c = $a - $b;
        echo $c;
        break;



    case "mnozenje":
        $c = $a * $b;
        echo $c;
        break;


    case "djeljenje":
        $c = $a / $b;
        echo $c;
        break;

    case "modul":
        $c = $a % $b;
        echo $c;
        break;

    case "jednako":
        if($a == $b){
        echo "broj $a i $b su jednaki";
            }else echo "broj $a i $b NISU jednaki";
        break;

    case "vece":
       if($a>$b){
           echo "broj $a je veći od broja $b";
       }else  echo "broj $a NIJE veći od broja $b";
        break;


    case "manje":
        if($a<$b){
            echo "broj $a je manji od broja $b";
        }else  echo "broj $a NIJE manji od broja $b";
        break;

    case "vecejednako":
        if($a>=$b){
            echo "broj $a je veći ili jednak broju $b";
        }else  echo "broj $a NIJE veći ili jednak broju $b";
        break;
    case "manjejednako":
        if($a<=$b){
            echo "broj $a je manji ili jednak broju $b";
        }else  echo "broj $a NIJE manji ili jednak broju $b";
        break;
}

}
