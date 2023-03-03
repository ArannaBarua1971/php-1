<?php

  // --->simple problem ar program start

    // driven licencese checker
    function drive(int $age)
    {
        $age = $age;
        if($age >18){
            echo "you can drive";
        }else {
            echo "you can not drive";       
        }
    }
    drive(18);
    
    // prime number checker
    function primeChecker(int $num){

        if($num === 1) echo "$num is a prime number";
        elseif(($num %2 ===0 || $num%3===0)){
            echo "$num is not prime number";
        }
        elseif($num<0){
            echo "$num is not valid number";
        }
        elseif($num!=0){
            echo "$num is a prime number";
        }
    }
    primeChecker(7898);
    echo "<br>";

    function emailChecker($email="test@gamil.com",$passord)
    {
        if($email === "test@gamil.com" && $passord === "12334566") {echo "login";}
        else {echo "denied";}

        echo "<br>";
    }
    
    emailChecker($passord="test@gamil.com",$email="12334566");
    emailChecker(email:"test@gamil.com",passord:"12334566");
   
    // --->simple problem ar program end

  
    
































    // for practice purpose=>

    // //uses of var_dump function
    // $name="aranna";
    // $age=20;
    // $weight=55.5;
    // $male=true;
    // $null=null;

    // var_dump($name);
    // echo "<br>";
    // var_dump($age);
    // echo "<br>";
    // var_dump($weight);
    // echo "<br>";
    // var_dump($male);
    // echo "<br>";
    // var_dump($null);
    // echo "<br>";

    // // formated print ar function
    // printf("my name is %s <br>",strtoupper($name));

    // /*
    // * *Arithmetic operators(+,-,*,/,%,**)
    // * *Assignment operators(=,-=,+=,*=,/=,%=)
    // * *Comparison operators(==,===,(!=.<>),!==,<,>,<=<>=,<=>)
    // * *Increment/Decrement operators(++X,X++,--X,X--)
    // * *Logical operators(and,or,xor,&&,||,!)
    // * *String operators(.,.=)
    // * *Array operators
    // * *Conditional assignment operators(?:,??)
    // */

    // $num=10;
    // $num2=20;
    // if($num <> 10){
    //     echo("num is not $num");
    // }
    // else {
    //     echo("num is $num");
    // }
    // echo "<br>";
    // echo($num2 <=> $num);
    // echo "<br>";
    // echo($num <=> $num2);
    // echo "<br>";
    // echo($num2 <=> $num2);
    // echo "<br>";

    // $name1="aranna";
    // $name2=" barua";
    // $name1.=$name2;
    // printf("my name is %s",strtoupper($name1));

    // echo "<br>";

    // if(1 xor 0) {echo"Yes <br>";}
    // else {echo 'no <br>';}
    // if(1 or 0) {echo"Yes <br>";}
    // else {echo 'no <br>';}
    // if(1 and 0) {echo"Yes <br>";}
    // else {echo 'no <br>';}

    // if(!(1 xor 0)) {echo"Yes <br>";}
    // else {echo 'no <br>';}
    // if(1 || 0) {echo"Yes <br>";}
    // else {echo 'no <br>';}
    // if(1 && 0) {echo"Yes <br>";}
    // else {echo 'no <br>';}
    // echo "<br>";
    // $x=3;
    // $y=4;
    // var_dump($x <> $y);
    // echo "<br>";
    // echo $x>$y ? $x:$y;
    // echo "<br>";
    // echo $x??$b;



  