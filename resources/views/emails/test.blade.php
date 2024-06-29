<!DOCTYPE html>
<html>
<head>
    <style>
        /* Your existing CSS styles */
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Alumini Connect</h1>
        </div>
        <div class="content">
            <p class="code">Your account is in review</p>
            <p class="code">Click the button below for verification</p>
            <p class="code"><button id="verifyButton">Verify Account</button></p>
        </div>
        <div class="footer">
            <p>If you received this email, your email configuration is working correctly.</p>
        </div>
    </div>

    <!-- Include jQuery library for AJAX functionality -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#verifyButton').click(function() {
                // Make AJAX call to your API endpoint
                $.ajax({
                    url: 'https://admin.aluminiconnect.online/api/codeVerification',
                    type: 'POST',
                    data: {
                        user_id: 'replace_with_user_id',
                        code: 'replace_with_code'
                    },
                    success: function(response) {
                        alert('User verified successfully');
                        // Optionally, you can redirect the user to a success page or perform other actions
                    },
                    error: function(xhr, status, error) {
                        alert('Error: ' + error);
                        // Handle error responses here
                    }
                });
            });
        });
    </script>
</body>
</html>
