    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Classes</title>

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
            }

            .classroom {
                background: white;
                padding: 25px;
                margin-bottom: 20px;
                border-radius: 10px;
            }

            .classroom h2 {
                margin-top: 0;
            }

            .classroom a {
                display: inline-block;
                margin-top: 10px;
                padding: 10px 15px;
                background: #333;
                color: white;
                text-decoration: none;
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

        <h1>Online Classes</h1>

        <div class="classroom">
            <h2>SIA</h2>
            <p>Instructor: Samuel Camorongan</p>

            <a href="#">Enter Classroom</a>
        </div>

        <div class="classroom">
            <h2>GE Elec 2</h2>
            <p>Instructor: Noemie Malagayo-Diwag</p>

            <a href="#">Enter Classroom</a>
        </div>

        <div class="classroom">
            <h2>NETWORKING 2</h2>
            <p>Instructor: Harold Sarmiento</p>

            <a href="#">Enter Classroom</a>
        </div>

        <div class="classroom">
            <h2>CC 106</h2>
            <p>Instructor: Raymark Udan</p>

            <a href="#">Enter Classroom</a>
        </div>

        <div class="classroom">
            <h2>PF 102</h2>
            <p>Instructor: Mary Rose Larraquel</p>

            <a href="#">Enter Classroom</a>
        </div>

        <div class="classroom">
            <h2>IT Elec</h2>
            <p>Instructor: Joneth Costales</p>

            <a href="#">Enter Classroom</a>
        </div>

        <div class="classroom">
            <h2>UED</h2>
            <p>Instructor: Brian Jeriec Paragas</p>

            <a href="#">Enter Classroom</a>
        </div>

    </div>

    </body>
    </html>