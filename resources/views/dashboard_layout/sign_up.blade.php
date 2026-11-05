<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 450px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background: #333;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #555;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Sign Up</h1>

    @if($errors->any())
        <div class="error">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('signup.submit') }}" method="POST">
        @csrf

        <label>Full Name</label>
        <input
            type="text"
            name="fullname"
            value="{{ old('fullname') }}"
            required
        >

        <label>Address</label>
        <input
            type="text"
            name="address"
            value="{{ old('address') }}"
            required
        >

        <label>Age</label>
        <input
            type="number"
            name="age"
            value="{{ old('age') }}"
            min="1"
            max="100"
            required
        >

        <label>Username</label>
        <input
            type="text"
            name="username"
            value="{{ old('username') }}"
            required
        >

        <label>Password</label>
        <input
            type="password"
            name="password"
            required
        >

        <button type="submit">Sign Up</button>
    </form>

    <div class="login-link">
        <p>Already have an account?</p>
        <a href="{{ route('login') }}">Login</a>
    </div>

</div>

</body>
</html>