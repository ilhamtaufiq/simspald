<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMSPALD | Login</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img')}}/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img')}}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img')}}/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img')}}/favicon.ico">
</head>

<body>
    <div class="wrapper">
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="form">
            <h1>simspald</h1>
            <p style="text-align:center">Sistem Informasi Manajemen SPALD</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="abc@mail.com" />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password" />
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <button type="submit" id="login">Login</button>
                <div class="forgot-signup">
                </div>
            </form>
        </div>
    </div>

    <div class="background"></div>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&display=swap');
body {
    display: grid;
    height: 100vh;
    margin: 0;
    place-items: center;
    background-image: linear-gradient( 200deg, #4053d8 12%, rgba(255, 255, 255, 0) 65%), linear-gradient(255deg, #e53ab8 71%, rgba(255, 255, 255, 0) 87%), radial-gradient(ellipse at 85% 52%, #ff9962 31%, rgba(255, 255, 255, 0) 99%), radial-gradient( ellipse at -45% 119%, #ff7870 66%, rgba(255, 255, 255, 0) 84%), linear-gradient(110deg, #4a4518 18%, rgba(255, 255, 255, 0) 98%);
}

.wrapper {
    position: relative;
}

a {
    text-decoration: none;
}

h1 {
    text-align: center;
    font-family: 'Noto Sans JP', sans-serif;
    text-transform: uppercase;
    font-size: 55;
    color: seashell;
    font-weight: 400;
}

.form {
    width: 400px;
    height: 400px;
    position: relative;
    place-content: center;
    font-family: 'Noto Sans JP', sans-serif;
    font-size: 30;
    color: seashell;
    display: grid;
    padding: 1em 2em 2em 2em;
    background: rgba(255, 255, 255, 0.01);
    -webkit-box-shadow: 2px 2px 30px 24px rgba(0, 0, 0, 0.01);
    box-shadow: 2px 2px 30px 24px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 5px;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

input,
button {
    display: block;
    font-family: 'Noto Sans JP', sans-serif;
    font-size: 30;
    color: seashell;
    text-align: center;
    width: 100%;
    height: 40px;
    margin-top: 20px;
    border: none;
    background: rgba(255, 255, 255, 0.01);
    border-radius: 12px;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 13px 21px rgba(0, 0, 0, 0.05);
    cursor: pointer;
}

input:focus {
    outline: none;
}

#login {
    background-position: center;
    background: rgb(102, 174, 255);
}

#login:hover {
    background: rgb(78, 159, 252) radial-gradient(circle, transparent 1%, rgba(255, 255, 255, 0.5) 1%) center/15000%;
}

#login:active {
    background-color: rgba(255, 255, 255, 0.1);
    background-size: 100%;
}

.forgot-signup {
    margin-top: 15px;
    display: flex;
    justify-content: space-between;
}

.forgot-signup a:link {
    font-family: 'Noto Sans JP', sans-serif;
    font-size: 30;
    color: seashell;
    text-align: center;
}

.forgot-signup a:hover {
    font-family: 'Noto Sans JP', sans-serif;
    font-size: 30;
    color: rgb(190, 190, 190);
    text-align: center;
}

.circle {
    position: absolute;
    height: 150px;
    width: 150px;
    background: black;
    border-radius: 50%;
}

.circle1 {
    background: #12c2e9;
    right: -60px;
    top: -60px;
    animation: circle1 10s ease-in-out alternate infinite;
}

@keyframes circle1 {
    100% {
        top: 60px;
    }
}

.circle2 {
    background: #f64f59;
    bottom: -60px;
    left: -60px;
    animation: circle2 10s ease-in-out alternate infinite; 
}

@keyframes circle2 {
    100% {
        bottom: 60px;
    }
}

</style>


</html>