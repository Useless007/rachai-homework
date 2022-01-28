<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>เบอร์โทรบอกดวง</title>
    <style>
        body {
            background: url(https://i.imgur.com/ZUsxbHK.jpeg) no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>

<body>



    <?php
    if (!isset($_POST['send'])) {
    ?>

        <br>
        <div class="container">
            <div class="card" style="border-radius: 50px;">
                <div class="card-body">
                    <h1 class="h1 text-center">เบอร์มือถือบอกดวง</h1>

                    <form method="post">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <input type="number" class="form-control text-center" placeholder="เบอร์โทร" name="phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8 offset-md-2 mt-2 d-flex justify-content-between">
                                    <input type="submit" name="send" class="btn btn-primary col-md-4" value="ตรวจสอบ">
                                    <input type="reset" name="reset" class="btn btn-danger col-md-4" value="รีเซ็ต">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    <?php } else {

        $phone = $_POST['phone'];

        $text = array();

        $money = array(
            "ได้โชคลาภบ่อยครั้ง ได้เงินจากงานโครงการใหญ่ เรื่องเงินรายรับมั่งคั่ง ทำธุรกิจดีการเงินสะพัด ขยันหาเงินเก่ง เครดิตการเงินดี ถ้าใช้วาจาดี ก็ยิ่งเสริมให้รายได้ดี การเงินหมุนคล่อง หาเงินได้ตลอด",
            "มั่งคั่งร่ำรวยได้ มีโชคลาภปาฏิหาริย์บ่อย ฐานะดี เรื่องเงินรายรับมั่งคั่ง ทำธุรกิจดีการเงินสะพัด ขยันหาเงินเก่ง เครดิตการเงินดี ถ้าใช้วาจาดี ก็ยิ่งเสริมให้รายได้ดี การเงินหมุนคล่อง หาเงินได้ตลอด ได้โชคลาภบ่อยครั้ง ได้เงินจากงานโครงการใหญ่", "มักมีโชคก้อนใหญ่ ทรัพย์สมบูรณ์ดี เรื่องเงินรายรับมั่งคั่ง ทำธุรกิจดีการเงินสะพัด ขยันหาเงินเก่ง เครดิตการเงินดี ถ้าใช้วาจาดี ก็ยิ่งเสริมให้รายได้ดี การเงินหมุนคล่อง หาเงินได้ตลอด ได้โชคลาภบ่อยครั้ง ได้เงินจากงานโครงการใหญ่",
            "จะสามารถเก็บออมเงินได้อยู่ เงินทองอุดมสมบูรณ์ หาเงินได้หลายทาง รวยเร็ว เก็บเงินอยู่ ถ้าใช้วาจาดี ก็ยิ่งเสริมให้รายได้ดี การเงินหมุนคล่อง หาเงินได้ตลอด ได้โชคลาภบ่อยครั้ง ได้เงินจากงานโครงการใหญ่"
        );
        $working = array(
            "ด้านคอมพิวเตอร์ ธุรกิจไอที ที่ดิน ลงทุนระยะยาว วัตถุมงคล ธุรกิจเครือข่าย รับเหมาก่อสร้าง จะประสบความสำเร็จในสิ่งที่ทำ คนรอบข้างสนับสนุน เหมาะกับอาชีพ/ธุรกิจที่เน้นเป็นที่รู้จัก รวมถึงต่างชาติ มีคนช่วยเหลือดี ทำงานได้หลายอาชีพ งานบริหาร ธุรกิจ วางแผน ที่ปรึกษา วิเคราะห์ ลงทุน การงานจะสำเร็จเพราะการเจรจา ทำมาค้าขึ้น ทำได้ทุกประเภท ยิ่งเหมาะมากกับงานที่ใช้ภาษา งานออนไลน์ เทคโนโลยี ตลาดหุ้น คอมพิวเตอร์ ค้าขายวัตถุมงคล",
            "พบกับความสำเร็จได้ จะประสบความสำเร็จในสิ่งที่ทำ คนรอบข้างสนับสนุน เหมาะกับอาชีพ/ธุรกิจที่เน้นเป็นที่รู้จัก รวมถึงต่างชาติ มีคนช่วยเหลือดี ทำงานได้หลายอาชีพ งานบริหาร ธุรกิจ วางแผน ที่ปรึกษา วิเคราะห์ ลงทุน การงานจะสำเร็จเพราะการเจรจา ทำมาค้าขึ้น ทำได้ทุกประเภท ยิ่งเหมาะมากกับงานที่ใช้ภาษา งานออนไลน์ เทคโนโลยี ตลาดหุ้น คอมพิวเตอร์ ค้าขายวัตถุมงคล ด้านคอมพิวเตอร์ ธุรกิจไอที ที่ดิน ลงทุนระยะยาว วัตถุมงคล ธุรกิจเครือข่าย รับเหมาก่อสร้าง",
            "ทำงานต่อเนื่อง ผู้ใหญ่อุปถัมภ์เพราะความคิดดี มักประสบความสำเร็จเร็ว ฉลาดทำมาหากิน ทำงานได้ทุกอาชีพ ลงมือทำอะไรสำเร็จทั้งสิ้น การงานจะสำเร็จเพราะการเจรจา ทำมาค้าขึ้น ทำได้ทุกประเภท ยิ่งเหมาะมากกับงานที่ใช้ภาษา งานออนไลน์ เทคโนโลยี ตลาดหุ้น คอมพิวเตอร์ ค้าขายวัตถุมงคล ด้านคอมพิวเตอร์ ธุรกิจไอที ที่ดิน ลงทุนระยะยาว วัตถุมงคล ธุรกิจเครือข่าย รับเหมาก่อสร้าง"
        );
        $love = array(
            "เป็นคนรักใครรักจริง รักครอบครัว มีเสน่ห์เป็นที่รัก มักเลือกคู่ครองที่มีฐานะการเงิน หน้าตาดี การศึกษาที่ดี มั่นคงพึ่งพาได้ เป็นคนที่มีเสน่ห์มาก พูดเพราะ ปากหวาน เอาใจเก่ง อ้อนเก่ง",
            "มีเสน่ห์เป็นที่รัก มักเลือกคู่ครองที่มีฐานะการเงิน หน้าตาดี การศึกษาที่ดี มั่นคงพึ่งพาได้ เป็นคนที่มีเสน่ห์มาก พูดเพราะ ปากหวาน เอาใจเก่ง อ้อนเก่ง เป็นคนรักใครรักจริง รักครอบครัว",
            "เป็นคนมีเหตุมีผล อบอุ่น จริงใจ ความรักดีมาก สมหวังสดชื่น อบอุ่น มีความสบายใจ เสน่ห์น่ารัก สุภาพอ่อนโยน เป็นคนที่มีเสน่ห์มาก พูดเพราะ ปากหวาน เอาใจเก่ง อ้อนเก่ง เป็นคนรักใครรักจริง รักครอบครัว"
        );
        $life = array(
            "ปลอดภัย อยู่ในเกณฑ์ที่ดี",
            "ปลอดภัย อยูในเกณฑ์ที่ดีเยี่ยม"
        );
        $motions = array(
            "ไอเดียดี ชอบเทคโนโลยี ทันสมัยตลอด มีเซนส์คาดการณ์แม่น มีชื่อเสียงเป็นที่รู้จัก มองการณ์ไกล มีความทันสมัย บุคลิกโดดเด่นมั่นใจ ชอบเข้าสังคม จะรอบคอบมาก ชอบคิดวางแผน คำนวณความคุ้มค่า เป็นนักวางแผนชีวิตและการเงินชั้นเยี่ยม พูดไพเราะ สุภาพ เป็นมิตร เข้ากับผู้อื่นได้ง่าย มีไหวพริบ สมองปราดเปรื่อง ทำงานไว ทันสมัย เก่งภาษา",
            "ดวงเฮงเสมอ บารมีดี เซนส์ลางสังหรณ์แม่นยำ หยั่งรู้ดีเยี่ยม ชอบสิ่งเร้นลับ โหราศาสตร์ มีรสนิยมที่แตกต่าง ดวงแข็ง มีชื่อเสียงเป็นที่รู้จัก มองการณ์ไกล มีความทันสมัย บุคลิกโดดเด่นมั่นใจ ชอบเข้าสังคม จะรอบคอบมาก ชอบคิดวางแผน คำนวณความคุ้มค่า เป็นนักวางแผนชีวิตและการเงินชั้นเยี่ยม พูดไพเราะ สุภาพ เป็นมิตร เข้ากับผู้อื่นได้ง่าย มีไหวพริบ สมองปราดเปรื่อง ทำงานไว ทันสมัย เก่งภาษา ไอเดียดี ชอบเทคโนโลยี ทันสมัยตลอด มีเซนส์คาดการณ์แม่น",
            "เป็นคนเรียนรู้เร็ว มีบารมี มีน้ำใจ ใจกว้างใจใหญ่ มีอำนาจคุมคนลูกน้องได้ดี คาดการณ์แม่นยำ แคล้วคลาดปลอดภัยเสมอ สนใจเรื่องแปลกใหม่ มีชื่อเสียงเป็นที่รู้จัก มองการณ์ไกล มีความทันสมัย บุคลิกโดดเด่นมั่นใจ ชอบเข้าสังคม จะรอบคอบมาก ชอบคิดวางแผน คำนวณความคุ้มค่า เป็นนักวางแผนชีวิตและการเงินชั้นเยี่ยม พูดไพเราะ สุภาพ เป็นมิตร เข้ากับผู้อื่นได้ง่าย มีไหวพริบ สมองปราดเปรื่อง ทำงานไว ทันสมัย เก่งภาษา ไอเดียดี ชอบเทคโนโลยี ทันสมัยตลอด มีเซนส์คาดการณ์แม่น",
            "สติปัญญาดี มีเหตุผล มีความเมตตา ชอบคบหาผู้ใหญ่ จะศึกษาค้นคว้า ถ่ายทอดความรู้ มีวาสนา มีทรัพย์มีโชค มีโอกาสที่ดี ชีวิตสุขสบาย ความคิดไอเดียดี รู้เท่าทันคน ใจบุญ จะมีผู้อุปถัมภ์ไม่ขาด จัดการปัญหาได้ดี มีสติปัญญาลึกซึ้ง เข้าใจทั้งทางโลกทางธรรม ชีวิตดีมีสุข พูดไพเราะ สุภาพ เป็นมิตร เข้ากับผู้อื่นได้ง่าย มีไหวพริบ สมองปราดเปรื่อง ทำงานไว ทันสมัย เก่งภาษา ไอเดียดี ชอบเทคโนโลยี ทันสมัยตลอด มีเซนส์คาดการณ์แม่น"
        );


        $rand_money = array_rand($money);
        $rand_working = array_rand($working);
        $rand_love = array_rand($love);
        $rand_life = array_rand($life);
        $rand_motions = array_rand($motions);

        echo "<br><div class='container'>";
        echo "<div class='card'  style='border-radius: 50px;'>";
        echo "<div class='card-body'>";
        echo "<p class='h3'>สรุปผลวิเคราะห์ดวงชะตา ผู้ที่ใช้เบอร์ " . $phone . " เป็นประจำ" . "<br>";
        echo "เบอร์มือถือนี้ลงท้ายด้วยเลข ";
        echo substr($phone, 7, 10) . "<hr> </p>";
        echo "<div class='float-left text-center mr-3' style='background:yellow; border:1px solid black; border-radius:20px; height:32px; width:60px;'>การเงิน </div>" . $money[$rand_money] . "\n" . "<br>" . "<br>";
        echo "<div class='float-left text-center mr-3' style='background:yellow; border:1px solid black; border-radius:20px; height:32px; width:60px;'>การงาน </div>" . $working[$rand_working] . "\n" . "<br>" . "<br>";
        echo "<div class='float-left text-center mr-3' style='background:yellow; border:1px solid black; border-radius:20px; height:32px; width:60px;'>ความรัก </div>" . $love[$rand_love] . "\n" . "<br>" . "<br>";
        echo "<div class='float-left text-center mr-3' style='background:yellow; border:1px solid black; border-radius:20px; height:32px; width:60px;'>สุขภาพ </div>" . $life[$rand_life] . "\n" . "<br>" . "<br>" . "<br>";
        echo "<div class='float-left text-center mr-3' style='background:yellow; border:1px solid black; border-radius:20px; height:32px; width:60px;'>อุปนิสัย </div>" . $motions[$rand_motions] . "\n";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    } ?>








    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>