<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets\css/login.css">
</head>

<body>
    <div class="container">
        <form action="{{ url('login/proses') }}" method="POST">
            @csrf
            <div class="title">
                <h3>PT. INVENTARIS GELORA GEMILANG</h3><br>
                <h4>LOGIN AS ADMIN</h4>
            </div>
            <div class="input-box">
                <label for="email">Email</label>
                <input autofocus type="text"
                @error('email')
                    is-invalid
                @enderror
                name="email" placeholder='Masukan Email' value="{{ old('email') }}"  maxlength="32" cellspacing="5px" required>
            </div>
            @error('email')
                <div class="message">
                    {{$message}}
                </div>
            @enderror
            <div class="input-box">
                <label for="password">Password</label>
                <input autofocus type="password"
                @error('password')
                    is-invalid
                @enderror
                name="password" placeholder="Masukan Password" maxlength="16" required>
            </div>
            
            <button type="submit">LOGIN</button>
        </form>
    </div>
</body>

</html>