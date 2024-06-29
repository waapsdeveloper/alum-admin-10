{{-- <!DOCTYPE html>
<html>
<head>
    <title>{{ $data['title'] }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            font-size: 16px;
        }
        .code {
            font-size: 20px;
            color: #333;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>TEST EMAIL ALUMINI</h1>
        </div>
        <div class="content">
            <p class="code">Your code is: {{ $data['code'] }}</p>
        </div>
        <div class="footer">
            <p>If you received this email, your email configuration is working correctly.</p>
        </div>
    </div>
</body>
</html> --}}

<!-- resources/views/emails/test.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Test Mail</title>
</head>
<body>
    <h1>Test Mail</h1>
    <p>Code: {{ $data['code'] }}</p>
</body>
</html>
