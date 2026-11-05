<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f2f2f2;
        }

        nav {
            background: #333;
            padding: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        .container {
            width: 60%;
            margin: 80px auto;
            background: white;
            padding: 60px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        .section {
            margin-top: 30px;
        }
    </style>
</head>

<body>

<nav>
    <a href="{{ route('homepage') }}">Home</a>
    <a href="{{ route('chat') }}">Chat</a>
    <a href="{{ route('calendar') }}">Calendar</a>
    <a href="{{ route('online.classes') }}">Online Classes</a>
    <a href="{{ route('logout') }}">Logout</a>
</nav>

<div class="container" style="text-align: center">

    <h1>Welcome to Our Institution</h1>

    <p>
        Welcome, {{ session('user.fullname') }}!
    </p>
    
    <div class="section">
        <h2>Vision</h2>

        <p>
            A leading local university known to develop excellent and virtuous
            professionals who are catalysts of progress for both the local and global
            communities.
        </p>
    </div>

    <div class="section">
        <h2>Mission</h2>

        <p>
            University of Easter Pangasinan is dedicated to producing higly competent
            and morally responsible Uepians through innovatiion, industry-focused
            education, sustainable research and values-based currriculum.
            We commit to shaping ethical trailblazers bringing our principle-centered
            culture defining our values of MakaDiyos, Marunong and Malinis
        </p>
    </div>

    <div class="section">
        <h2>Core Values</h2>

        <p> Uprightness <br> Excellence <br> Passion
        </p>
    </div>

</div>

</body>
</html>