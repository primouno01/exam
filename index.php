<html>
<body>
    <h1>Fibonacci</h1>
    <form action="" method="post">
        Enter the number : 
        <input type="text" name="number" />
        <input type="submit" />
    </form>
</body>
</html>
<?php
if ($_POST) {
    $firstTerm = 0;
    $secondTerm = 1;
    $n = $_POST['number'];
    if($n >= "21"){
        echo "numbers 20 below only";   
}else{
    while ($firstTerm <= $n) {
        echo $firstTerm . "</br>";
        $nextTerm = $firstTerm + $secondTerm;
        $firstTerm = $secondTerm;
        $secondTerm = $nextTerm;
    }
            
                           }
                           }
?>