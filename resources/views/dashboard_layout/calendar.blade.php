<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>

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
            width: 90%;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }

        th {
            background: #333;
            color: white;
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

    <h1>Class Calendar</h1>

    <table>

        <thead>
            <tr>
                <th>Day</th>
                <th>Time</th>
                <th>Subject</th>
                <th>Room</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>Monday</td>
                <td>
                    <p>8:00 AM - 11:00 AM</p>
                    <p>11:00 AM - 2:00 PM</p>
                </td>
                <td>
                    <p>NETWORKING 102 </p>
                    <p>SIA 101</p>

                </td>
                <td>
                    <p>Online</p>
                    <p>Online</p>
                </td>
            </tr>

            <tr>
                <td>Tuesday</td>
                <td>
                    <p>10:00 AM - 12:00 PM</p>
                    <p>1:00 PM - 3:00 PM</p>
                    <p>3:00 PM - 4:30 PM</p>
                </td>
                <td>
                    <p>UED</p>
                    <p>CC 106</p>
                    <p>Ge Elec 3</p>
                </td>
                <td>
                    <p>Annex D - Room 5</p>
                    <p>Digitel - Room 3</p>
                    <p>Annex D - Room 6</p>
                </td>
            </tr>

            <tr>
                <td>Wednesday</td>
                <td>
                    <p>8:00 AM - 11:00 AM</p>
                    <p>2:00 PM - 5:00 PM</p>
                </td>
                <td>
                    <p>UED</p>
                    <p>CC 106</p>
                </td>
                <td>
                    <p>Online</p>
                    <p>Main Bldg. - ComLab 2</p>
                </td>
            </tr>

            <tr>
                <td>Thursday</td>
                <td>
                    <p>8:00 AM - 10:00 AM</p>
                    <p>11:00 AM - 2:00 PM</p>
                    <p>3:00 PM - 4:30 PM</p>
                </td>
                <td>
                    <p>UED</p>
                    <p>PF 102</p>
                    <p>Ge Elec 3</p>
                </td>
                <td>
                    <p>Online</p>
                </td>
            </tr>

            <tr>
                <td>Friday</td>
                <td>
                    <p>8:00 AM - 11:00 AM</p>
                    <p>1:00 PM - 3:00 PM</p>
                </td>
                <td>
                    <p>IT Elec 2</p>
                    <p>PF 102</p>
                </td>
                <td>
                    <p>Online</p>
                    <p>Annex D - Room 6</p>
                </td>
            </tr>

        </tbody>

    </table>

</div>

</body>
</html>