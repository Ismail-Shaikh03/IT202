<?php
if(isset($_REQUEST['q'])){
    $userinput=$_GET['q'];
    $found="";
    $dogBreeds=["Bulldog","Golden Retriever","Husky","Beagle","Poodle","Chow Chow"];
    if($userinput==""){
        echo "Dog not found";
    }
    else{
        $userinput=strtolower($userinput);
        $lenght=strlen($userinput);
        for($i=0;$i<count($dogBreeds);$i++){
            if(stristr($userinput,substr($dogBreeds[$i],0,$lenght))){
                if($found===""){
                    $found=$dogBreeds[$i];
                }
                else{
                    $found.=", $dogBreeds[$i]";
                }
            }
        }
    }


    }
    if($found===""){
        echo "DOG NOT FOUND";
    }
    else{
        echo "$found";
    }

?>