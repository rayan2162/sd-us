<?php
    // Style 1
    for($i = 0; $i<5; $i++){
        echo "$i \n";
    }
    
    // while loop
    $i = 0;
    while($i < 5){
        echo "$i \n";
        $i++;
    }

    // Array ke kemne print kore
    $users = ['rayan', 'durjoy', 'sandipan', 'malik']; 
    foreach($users as $one_user){
        echo "$one_user \n";
    }
?>