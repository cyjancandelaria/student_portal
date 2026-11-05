<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>

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
            width: 80%;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        .chat-box {
            border: 1px solid #ccc;
            height: 300px;
            padding: 20px;
            margin-top: 20px;
        }

        .message {
            background: #eee;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
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

<div class="container">

    <h1>Chat</h1>

    <div class="chat-box">

        <div class="message">
            Sample chat message.
        </div>

        <div class="message">
            Chat functionality placeholder.
        </div>

    </div>

</div>

</body>
</html>