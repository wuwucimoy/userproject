<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fce4ec;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 25px;
            width: 320px;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 15px;
            text-align: center;
            color: #ec407a;
        }

        label {
            font-size: 14px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 9px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .show-pass {
            position: relative;
        }

        .toggle {
            position: absolute;
            right: 10px;
            top: 12px;
            cursor: pointer;
            font-size: 14px;
            color: #777;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #ec407a;
            border: none;
            color: white;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #d81b60;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Login</h2>

    @if ($errors->any())
        <p class="error">{{ $errors->first() }}</p>
    @endif

    <form method="POST" action="/login">
        @csrf

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <div class="show-pass">
            <input type="password" id="password" name="password" required>
            <span class="toggle" onclick="togglePassword()">👁️</span>
        </div>

        <button type="submit">Login</button>
    </form>
</div>

<script>
    function togglePassword() {
        let pass = document.getElementById("password");
        pass.type = pass.type === "password" ? "text" : "password";
    }
</script>

</body>
</html>
