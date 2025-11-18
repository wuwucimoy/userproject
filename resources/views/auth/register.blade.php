<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Signup</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background: #ffffff;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        /* ============================
           LEFT SECTION — EXACT FIGMA
           ============================ */
        .left-side {
            width: 50%;
            background: #3A4A63;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
        }

        .left-side h1 {
            font-size: 28px;
            font-weight: 600;
            margin-top: 20px;
        }

        /* ============================
           RIGHT SECTION — EXACT FIGMA
           ============================ */
        .right-side {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-box {
            width: 360px;
        }

        /* Back */
        .back {
            font-size: 13px;
            color: #6B7280;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
        }

        /* Title */
        h2 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #111827;
        }

        .subtitle {
            font-size: 13px;
            color: #6B7280;
            margin-bottom: 20px;
        }

        .line {
            width: 100%;
            height: 1px;
            background: #E5E7EB;
            margin-bottom: 25px;
        }

        /* Labels */
        label {
            font-size: 13px;
            font-weight: 500;
            color: #111827;
            display: block;
            margin-bottom: 6px;
        }

        /* Inputs EXACT height 44px */
        input {
            width: 100%;
            height: 44px;
            padding: 0 12px;
            border: 1px solid #D1D5DB;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        /* Button EXACT FIGMA */
        .btn {
            width: 100%;
            height: 44px;
            background: #2563EB;
            border: none;
            color: white;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn:hover {
            background: #1D4ED8;
        }
    </style>
</head>
<body>

<div class="container">

    <!-- LEFT -->
    <div class="left-side">
        <img src="/logo.png" width="80" alt="logo">
        <h1>TokeShope</h1>
    </div>

    <!-- RIGHT -->
    <div class="right-side">
        <div class="form-box">

            <a href="/" class="back">← Back</a>

            <h2>Account Signup</h2>
            <p class="subtitle">Become a member and enjoy exclusive promotions.</p>

            <div class="line"></div>

            <form method="POST" action="/register">
                @csrf

                <label>Full Name</label>
                <input type="text" name="name" required>

                <label>Email Address</label>
                <input type="email" name="email" required>

                <label>Gender</label>
                <input type="text" name="gender" required>

                <label>Date Of Birth</label>
                <input type="date" name="dob" required>

                <button class="btn" onclick="window.location='{{ route('login') }}'">Continue</button>

            </form>

        </div>
    </div>

</div>

</body>
</html>
