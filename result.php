<?php
    $totalMarks = 0;
    $totalQues = 5;

    $ans = array('undef',
                 'A',
                'B',
                'A',
                'A',
                'D');

    for ($i=1; $i<= $totalQues; $i++){
    if(isset($_POST['answer-'.$i])){
        if($_POST['answer-'.$i] == $ans[$i] ){
            $totalMarks++;
        }
    }
    }

?>
<!DOCTYPE html>
<html>
    <head>
    <title>Result for Quiz</title>
    </head>
    <body>
        <header><h1>Quiz</h1></header>
        <hr>
        <div id="result">
        <p>Result:
        <strong style="font-size:1.5em;" ><?= $totalMarks; ?></strong>/<?= $totalQues; ?></p>
        </div>
    </body>

</html>
