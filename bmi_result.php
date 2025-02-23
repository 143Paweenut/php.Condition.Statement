<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BMI Result</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #E6E6FA;
                margin: 0;
                padding: 20px;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                background: #F5F5F5;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                text-align: center;
            }
            h1 {
                color: #330033;
            }
            p {
                font-size: 18px;
                color: #333;
            }
            a {
                display: inline-block;
                margin-top: 20px;
                text-decoration: none;
                color: #007BFF;
                font-weight: bold;
            }
            a:hover {
                color: #339900;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>ผลการคำนวณค่า BMI</h1>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $first_name = $_POST['first_name'];
                    $last_name = $_POST['last_name'];
                    $age = $_POST['age'];
                    $weight = floatval($_POST['weight']);
                    $height_cm = floatval($_POST['height']);

                    // เรียก Function คำนวณ BMI
                    $bmi = calculateBMI($weight, $height_cm);

                    // เรียก Function แปลผล BMI
                    $category = interpretBMI($bmi);

                    // แสดงผล
                    echo "<p>ชื่อ: <strong>" . htmlspecialchars($first_name) . " " . htmlspecialchars($last_name) . "</strong></p>";
                    echo "<p>อายุ: <strong>" . htmlspecialchars($age) . " ปี</strong></p>";
                    echo "<p>น้ำหนัก: <strong>" . htmlspecialchars($weight) . " กิโลกรัม</strong></p>";
                    echo "<p>ส่วนสูง: <strong>" . htmlspecialchars($height_cm) . " เซนติเมตร</strong></p>";
                    echo "<p>ค่า BMI: <strong>" . number_format($bmi, 2) . "</strong></p>";
                    echo "<p>หมวดหมู่: <strong>" . $category . "</strong></p>";
                } else {
                    echo "<p>ไม่มีข้อมูลที่ส่งมา กรุณากลับไปที่ <a href='bmi_form.php'>ฟอร์ม</a></p>";
                }

              
                function calculateBMI($weight, $height_cm) {
                    $height_m = $height_cm / 100; // แปลงจาก cm เป็นเมตร
                    return $weight / ($height_m ** 2);
                }

                
                function interpretBMI($bmi) {
                    if ($bmi < 18.5) {
                        return "น้ำหนักต่ำกว่าเกณฑ์";
                    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                        return "น้ำหนักปกติ";
                    } elseif ($bmi >= 25 && $bmi < 29.9) {
                        return "น้ำหนักเกิน";
                    } else {
                        return "โรคอ้วน";
                    }
                }
            ?>
            <a href="bmi_form.php">กลับไปกรอกข้อมูลใหม่</a>
        </div>
    </body>
</html>
