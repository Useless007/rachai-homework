<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>คำนวนเกรด</title>
</head>

<body>
    <?php

    if (!isset($_POST['send'])) {
    ?>

        <br><br>
        <div class="container">


            <form method="post">


                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="name">ชื่อ นามสกุล</label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="score">คะแนนเก็บ</label>
                            <input type="number" id="score" class="form-control" name="score" required>
                        </div>
                        <div class="col">
                            <label for="score2">คะแนนกลางภาค</label>
                            <input type="number" id="score2" class="form-control" name="score2" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="score3">คะแนนจิตพิสัย</label>
                            <input type="number" id="score3" class="form-control" name="score3" required>
                        </div>
                        <div class="col">
                            <label for="score4">คะแนนสอบปลายภาค</label>
                            <input type="number" id="score4" class="form-control" name="score4" required>
                        </div>
                    </div>
                </div>
            
            <div class="form-group d-flex justify-content-end">
                <input type="submit" name="send" value="OK" class="btn btn-primary mr-1">
                <input type="reset" value="CANCEL" class="btn btn-danger">
            </div>
            </form>


        </div>

    <?php } else {
        $br = ('<br>');
        $hr = ('<hr>');
        $name = $_POST['name'];
        $score = $_POST['score'];
        $score2 = $_POST['score2'];
        $score3 = $_POST['score3'];
        $score4 = $_POST['score4'];

        $sum = $score + $score2 + $score3 + $score4;

        echo "<div class='container'>";

        echo $hr;
        echo 'สวัสดีคุณ : '.$name.$hr;
        echo 'มีคะแนนเก็บ : '.$score.' คะแนน'.$br;
        echo 'มีคะแนนกลางภาค : '.$score2.' คะแนน'.$br;
        echo 'มีคะแนนจิตพิสัย : '.$score3.' คะแนน'.$br;
        echo 'มีคะแนนสอบปลายภาค : '.$score4.' คะแนน'.$hr;

        echo 'คุณมีคะแนนรวมทั้งหมด : '.$sum.' คะแนน'.$br;


        if($sum>=80){
            echo 'ยินดีด้วย คุณได้เกรด 4!'.$br;
        }elseif($sum>=70){
            echo 'ยินดีด้วย คุณได้เกรด 3!'.$br;
        }elseif($sum>=60){
            echo 'ยินดีด้วย คุณได้เกรด 2!'.$br;
        }elseif($sum>=50){
            echo 'ยินดีด้วย คุณได้เกรด 1!'.$br;
        }else{
            echo 'ยินดีด้วย คุณได้เรียนใหม่!'.$br;
        }


        echo '</div>';
    } ?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>