<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
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
            width: 400px;
            margin: 100px auto;
            background: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            cursor: pointer;
        }

        .logout-btn {
            background: #333;
            color: white;
        }

        .cancel-btn {
            background: #ccc;
        }
    </style>
</head>

<body>

<nav>
    <a href="{{ route('homepage') }}">Home</a>
    <a href="{{ route('chat') }}">Chat</a>
    <a href="{{ route('calendar') }}">Calendar</a>
    <a href="{{ route('online.classes') }}">Online Classes</a>
</nav>

<div class="container">

    <h1>Logout</h1>

    <p>Are you sure you want to logout?</p>

    <form action="{{ route('logout.submit') }}" method="POST" style="display:inline;">
        @csrf

        <button type="submit" class="logout-btn">
            Yes, Logout
        </button>
    </form>

    <a href="{{ route('homepage') }}">
        <button type="button" class="cancel-btn">
            Cancel
        </button>
    </a>

</div>

</body>
</html>