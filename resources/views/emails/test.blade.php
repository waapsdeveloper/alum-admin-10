<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            color: #000;
        }
        .header h1 {
            margin: 0;
        }
        .content {
            font-size: 16px;
            color: #000;
        }
        .code {
            font-size: 20px;
            color: #000;
            font-weight: bold;
            text-align: center;
        }
        .code a {
            color: #fff;
            text-decoration: none;
            background-color: #81181b;
            ;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Alumini Connect</h1>
        </div>
        <div class="content">
            <p class="code">Your account is in review</p>
            <p class="code">Click the link below for verification</p>
            <p class="code"><a href="">Click here!</a></p>
            {{-- https://admin.aluminiconnect.online/api/verification?user_id={{user_id}}&code={{code}} --}}
        </div>
        <div class="footer">
            <p>If you received this email, your email configuration is working correctly.</p>
        </div>
    </div>
</body>
</html>
