<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Output</title>
    <style>
        body {
            text-align: center;
            background-image: url("C:/Users/Sashw/Downloads/download (6).jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Algerian, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        h1, h2, h3, h4, h5, h6 {
            font-weight: bold;
            color: #00698f;
        }
        p {
            margin-bottom: 20px;
            color: #666;
        }
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .button {
            background-color: #ff69b4;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #ff33cc;
        }
        a {
            text-decoration: none;
            color: #0099cc;
        }
        a:hover {
            color: #0066cc;
        }
        .accent {
            background-color: #ffff66;
            padding: 10px;
            border-radius: 10px;
        }
        .accent:hover {
            background-color: #ffff00;
        }
        @media (max-width: 768px) {
            .container {
                margin: 20px auto;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <h1>SINGAPORE SALON</h1>
    <main>
        <br><br><br><br><br><br>
        <form id="myForm" action="formhandler.php" method="post">
            <label for="C_Name">Customer Name</label>
            <input required id="C_Name" type="text" name="C_Name" placeholder="CustomerName...">
            <br><br>
            <label for="Mobile_no">Mobile no</label>
            <input required id="Mobile_no" type="number" name="Mobile_no" placeholder="Mobile_no...">
            <br><br>
            <label for="S_Name">S_Name</label>
            <input required id="S_Name" type="text" name="S_Name" placeholder="StaffName...">
            <br><br>
            <label for="Service_1">Service 1</label>
            <input required id="Service_1" type="text" name="Service_1" placeholder="Service...">
            <br>
            <label for="Service_2">Service 2</label>
            <input required id="Service_2" type="text" name="Service_2" placeholder="Service...">
            <br>
            <label for="Service_3">Service 3</label>
            <input required id="Service_3" type="text" name="Service_3" placeholder="Service...">
            <br>
            <label for="Service_4">Service 4</label>
            <input required id="Service_4" type="text" name="Service_4" placeholder="Service...">
            <br>
            <label for="Date_1">Date_1</label>
            <input required id="Date_1" type="date" name="Date_1" placeholder="Date_1...">
            <br>
            <label for="Time_1">Time_1</label>
            <input required id="Time_1" type="time" name="Time_1" placeholder="Time...">
            <br>
            <input type="submit" value="Submit">
        </form>
    </main>
</body>
</html>
