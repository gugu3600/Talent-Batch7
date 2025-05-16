<?php 

// output 1 

for($i = 0 ; $i <= 5 ; $i++ ){

    for($j = 0 ; $j < $i ; $j++){

        echo "*";
    }

    echo "<br/>";
}

echo "<br/><br/>";

// output 2

for($i = 0; $i <= 5 ; $i++){

    for($a = 5 - $i; $a > 0 ; $a-- ){

        echo "&nbsp;";
    }

    for($j = 0; $j <= $i ; $j++){ 

        echo "*";
    }

    echo "<br/>";
}

    echo "<br/><br/>";

// output 3


    for($i = 0 ; $i <= 5 ; $i++ ){

        for($j = 5 - $i ; $j > 0 ; $j-- ){

        echo "*";
    }

    echo "<br/>";
}

echo "<br/><br/>";

// output 4

for($i = 0; $i <= 5 ; $i++){

    for($a = 9 - ($i+$i); $a > 0 ; $a-- ){

        echo "&nbsp;";
    }

    for($j = 0 ; $j <= $i+$i ; $j++){ 

        echo "*";
    }

    echo "<br/>";
}

    echo "<br/><br/>";

    // output 5

    for($i = 0; $i <= 5 ; $i++){

    for($a = 9 - ($i+$i); $a > 0 ; $a-- ){

        echo "&nbsp;";
    }

    for($j = 0; $j <= $i+$i ; $j++){ 

        echo "*";
    }

    echo "<br/>";
}

for($i = 0 ; $i <= 5 ; $i++){

    for($a = 0 ; $a <= ($i+$i) ; $a++ ){

        echo "&nbsp;";
    }

    for($j = 9-$i ; $j > $i ; $j--){

        echo "*";
    }

    echo "<br/>";

}


