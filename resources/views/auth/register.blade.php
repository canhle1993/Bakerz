<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakerz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/Frame1.png')}}">

    <style>
      @font-face {
        font-family: "Source Sans Pro";
        font-style: normal;
        font-weight: 200;
        src: url(https://fonts.gstatic.com/s/sourcesanspro/v22/6xKydSBYKcSV-LCoeQqfX1RYOo3i94_wlxdr.ttf)
          format("truetype");
      }
      @font-face {
        font-family: "Source Sans Pro";
        font-style: normal;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/sourcesanspro/v22/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlxdr.ttf)
          format("truetype");
      }
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-weight: 300;
      }
      body {
        font-family: "Source Sans Pro", sans-serif;
        color: white;
        font-weight: 300;
      }
      .wrapper {
        background: #A0522D;
        background: linear-gradient(to bottom right, #A0522D 0%, #F4A460 100%);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
      }
      .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 100px 0;
        height: 400px;
        text-align: center;
      }
      form input {
        outline: 0;
        border: 1px solid rgba(255, 255, 255, 0.4);
        background-color: rgba(255, 255, 255, 0.2);
        width: 250px;
        border-radius: 3px;
        padding: 10px 15px;
        margin: 0 auto 10px auto;
        display: block;
        text-align: center;
        font-size: 18px;
        color: white;
        transition-duration: 0.25s;
        font-weight: 300;
      }
      form button {
        outline: 0;
        background-color: white;
        border: 0;
        padding: 10px 15px;
        color: #2F1E12;
        border-radius: 3px;
        width: 250px;
        cursor: pointer;
        font-size: 18px;
        transition-duration: 0.25s;
      }
      .bg-bubbles li {
        position: absolute;
        list-style: none;
        display: block;
        width: 40px;
        height: 40px;
        bottom: -160px;
        animation: square 25s infinite linear;
      }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h1>Bakerz Bite</h1>
            
            <!-- Display Errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form class="form" method="POST" action="{{ route('register') }}">
                @csrf
                <div style="float: left;">
                    <label class="form-label text-white" for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required/>
                </div>

                <div style="float: right;">
                    <label class="form-label text-white" for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus />
                </div>  

                <div style="float: left;">
                    <label class="form-label text-white" for="address">Address</label>
                    <input type="text" id="address" name="address" value="{{ old('address') }}" required autofocus />
                </div>

                <div style="float: right;">
                    <label class="form-label text-white" for="password">Password</label>
                    <input type="password" id="password" name="password" required />
                </div>

                <div style="float: left;">
                    <label class="form-label text-white" for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required autofocus />
                </div>

                <div style="float: right;">
                    <label class="form-label text-white" for="password_confirmation">Repeat your password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required />
                </div>

                <button style="margin-top: 5% !important;" type="submit" id="login-button">Register</button>
            </form>
        </div>
        <ul class="bg-bubbles">
            <li><img src="img/aaa.png" width="100%" alt=""></li>
            <li><img src="img/bbb.png" width="100%" alt=""></li>
            <li><img src="img/ccc.png" width="100%" alt=""></li>
            <li><img src="img/ddd.png" width="100%" alt=""></li>
            <li><img src="img/eee.png" width="100%" alt=""></li>
            <li><img src="img/fff.png" width="100%" alt=""></li>
            <li><img src="img/hhh.png" width="100%" alt=""></li>
            <li><img src="img/ggg.png" width="100%" alt=""></li>
            <li><img src="img/jjj.png" width="100%" alt=""></li>
            <li><img src="img/kkk.png" width="100%" alt=""></li>
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>
</html>
