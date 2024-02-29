<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <form method="post" action="/user/login">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>

    <!-- The following script is for Google Sign-In -->
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <div class="g_id_signin" data-callback="handleCredentialResponse"></div>

    <script>
        function handleCredentialResponse(response) {
            // Send the ID token to the server
            fetch('/user/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({idToken: response.credential})
            });
        }
    </script>
</body>
</html>
