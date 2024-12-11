<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BMI Calculator Form</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #E6E6FA;
                margin: 0;
                padding: 20px;
            }
            .container {
                max-width: 500px;
                margin: 0 auto;
                background: #F5F5F5;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            h1 {
                text-align: center;
                color: #333;
            }
            label {
                display: block;
                margin-bottom: 8px;
                font-weight: bold;
            }
            input[type="text"],
            input[type="number"] {
                width: 100%;
                padding: 8px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            button {
                display: block;
                width: 100%;
                padding: 10px;
                background: #007BFF;
                color: white;
                border: none;
                border-radius: 4px;
                font-size: 16px;
            }
            button:hover {
                background: #339900;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>คำนวณค่า BMI</h1>
            <form action="bmi_result.php" method="POST">
                <label for="first_name">ชื่อ:</label>
                <input type="text" name="first_name" id="first_name" placeholder="กรอกชื่อ" required>
                
                <label for="last_name">นามสกุล:</label>
                <input type="text" name="last_name" id="last_name" placeholder="กรอกนามสกุล" required>
                
                <label for="age">อายุ:</label>
                <input type="number" name="age" id="age" placeholder="กรอกอายุ" min="0" required>
                
                <label for="weight">น้ำหนัก (กิโลกรัม):</label>
                <input type="number" name="weight" id="weight" placeholder="กรอกน้ำหนัก" min="0" step="any" required>
                
                <label for="height">ส่วนสูง (เซนติเมตร):</label>
                <input type="number" name="height" id="height" placeholder="กรอกส่วนสูง" min="0" step="any" required>
                
                <button type="submit">คำนวณค่า BMI</button>
            </form>
        </div>
    </body>
</html>
