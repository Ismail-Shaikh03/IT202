<!DOCTYPE html>
<html>
    <head>
        <title>Homework 9</title>
    </head>
<body>
    <form method="post">
   <p> 
    <label for="value1">Enter a value:</label>
    <input type="text" name="values[]" id="value1">
</p>
<p>
    <label for="value2">Enter a value:</label>
    <input type="text" name="values[]" id="value2">
</p>
<p> 
    <label for="value3">Enter a value:</label>
    <input type="text" name="values[]" id="value3">
</p>
<p>
    <label for="value4">Enter a value:</label>
    <input type="text" name="values[]" id="value4">
</p>
<p> 
    <label for="value5">Enter a value:</label>
    <input type="text" name="values[]" id="value5">
</p>
<p>
    <label for="value6">Enter a value:</label>
    <input type="text" name="values[]" id="value6">
</p>
<p> 
    <label for="value7">Enter a value:</label>
    <input type="text" name="values[]" id="value7">
</p>
<p>
    <label for="value8">Enter a value:</label>
    <input type="text" name="values[]" id="value8">
</p>
<p><input type="submit"></p>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"&& isset($_POST["values"])){
    $inputValues=$_POST["values"];
    echo  "<p>Original Array:<br>".implode("<br>",$inputValues)."</p>";
    echo "<p>Orignial Array with keys:".print_r($inputValues)."</p>" ;
    unset($inputValues[0]);
    unset($inputValues[2]);
    echo "<p>Array after elements deleted:</p>";
    for($i=0;$i<count($inputValues);$i++){
        if(isset($inputValues[$i])){
             echo $inputValues[$i]."<br>";
        }
        else{
            echo "<br>";
        }
    }
    echo "<p>2 elements deleted with keys".print_r($inputValues)."</p>";
    echo "<p> Array after gaps removed:<br>".implode("<br>",$inputValues)."</p>";
    sort($inputValues);
    $holder=array_values($inputValues);
    echo "<p> Array ascending order:<br>".implode("<br>",$inputValues)."</p>";
    echo "<p> Array keys for ascending order:".print_r($inputValues)."</p>";
    rsort($holder);
    echo "<p> Array descending order:<br>".implode("<br>",$holder)."</p>";
    echo "<p> Array keys for descending order:".print_r($holder)."</p>";
    asort($inputValues);
    echo "<p> Array ascending order based on values:<br>".implode("<br>",$inputValues)."</p>";
    echo "<p> Array keys for ascending order based on values:".print_r($inputValues)."</p>";
   // ksort($inputValues);
   // echo "<p> Array descending order based on values:<br>".implode("<br>",$inputValues)."</p>";
   // echo "<p> Array keys for decending order based on values:".print_r($inputValues)."</p>";
    arsort($inputValues);
    echo "<p> Array ascending order based on key values:<br>".implode("<br>",$inputValues)."</p>";
    echo "<p> Array keys for ascending order based on key values:".print_r($inputValues)."</p>";
   // krsort($inputValues);
    //echo "<p> Array descending order based on key values:<br>".implode("<br>",$inputValues)."</p>";
   // echo "<p> Array keys for decending order based on key values:".print_r($inputValues)."</p>";
}
?>
</body>
</html>