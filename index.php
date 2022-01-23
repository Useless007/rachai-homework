<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
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
                            <label for="fname">ชื่อ</label>
                            <input type="text" id="fname" class="form-control" name="fname" required>
                        </div>
                        <div class="col">
                            <label for="lname">นามสกุล</label>
                            <input type="text" id="lname" class="form-control" name="lname" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="hmn">ผู้เข้าอาศัยกี่ท่าน</label>
                            <input type="number" id="hmn" class="form-control" name="hmn" required>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="room">หมายเลขห้องที่ต้องการเช่า</label>
                                <select class="form-control" id="room" name="room">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="elec">ปริมาณการใช้ไฟฟ้า</label>
                            <div class="input-group has-validation" id="elec">
                                <input type="text" class="form-control" required name="elec">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">ชั่วโมง/เดือน</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="water">ปริมาณการใช้น้ำ</label>
                            <div class="input-group has-validation" id="water">
                                <input type="text" class="form-control" required name="water">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">ลบ.ม./เดือน</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="watt">จำนวน Watt</label>
                            <div class="input-group has-validation" id="watt">
                                <input type="text" class="form-control" required name="watt">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Watt</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yes-or-no" id="yes" value="1">
                        <label class="form-check-label" for="yes">
                            สนใจรับคีย์การ์ด
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yes-or-no" id="no" value="0" checked>
                        <label class="form-check-label" for="no">
                            ไม่สนใจรับคีย์การ์ด
                        </label>
                    </div>
                </div>


                <div class="form-group d-flex justify-content-end">
                    <input type="submit" name="send" value="OK" class="btn btn-primary mr-1">
                    <input type="reset" value="CANCEL" class="btn btn-danger">
                </div>
            </form>


        </div>

    <?php } else {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $hmn = $_POST['hmn'];
        $room = $_POST['room'];
        $elec = $_POST['elec'];
        $water = $_POST['water'];
        $watt = $_POST['watt'];
        $radio = $_POST['yes-or-no'];
        //////////////////////////////
        $br = "<br>";
        $plus_card = '0';
        $elec_unit = '10';
        $water_unit = '5';
        $room_price = '3300';
        //////////////////////////////
        $total_elec = ($watt / 1000 * $elec * $elec_unit);
        $total_water = ($water * $water_unit);
        $maid = $hmn * 20;

        $all_total = $room_price + $total_elec + $total_water + $maid;
        $avr_total = $all_total * 5 / 100;

        //////////////////////////////

        if ($radio == 1) {
            $card = 'เพิ่ม 100 บาท ค่าคีย์การ์ด';
            $plus_card = '100';
        } else {
            $card = '';
        }

        $all = $all_total + $avr_total + $plus_card;
        //////////////////////////////
        echo $br . $br;
        echo "<div class='container'>";

        echo 'สวัสดีคุณ : ' . $fname . ' ' . $lname . $br;
        echo 'มีสมาชิกทั้งหมด : ' . $hmn . ' ท่าน' . $br;
        echo 'จองห้องที่ : ' . $room . $br;
        echo 'ค่าห้องไม่รวมค่าน้ำ,ไฟ,แม่บ้าน : ' . $room_price . $br;
        echo 'ค่าไฟฟ้าต่อเดือนโดยประมาณ : ' . $total_elec . ' บาท' . $br;
        echo 'ค่าน้ำต่อเดือนโดยประมาณ : ' . $total_water . ' บาท' . $br;
        echo 'ค่าแม่บ้าน : ' . $maid . ' บาท' . $br;
        echo 'ค่าเช่าห้องแบบไม่รวมส่วนกลาง : ' . $all_total . ' บาท' . $br;
        echo 'ค่าส่วนกลางจำนวน : ' . $avr_total . ' บาท' . $br;
        echo $card . $br;
        echo 'จำนวนเงินทั้งหมดที่ต้องจ่าย : ' . $all . ' บาท';

        echo "</div>";
        //////////////////////////////

        
    } ?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>