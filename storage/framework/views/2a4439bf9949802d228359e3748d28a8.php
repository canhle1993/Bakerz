<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bakerz</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
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
      body ::-webkit-input-placeholder {
        /* WebKit browsers */
        font-family: "Source Sans Pro", sans-serif;
        color: white;
        font-weight: 300;
      }
      body :-moz-placeholder {
        /* Mozilla Firefox 4 to 18 */
        font-family: "Source Sans Pro", sans-serif;
        color: white;
        opacity: 1;
        font-weight: 300;
      }
      body ::-moz-placeholder {
        /* Mozilla Firefox 19+ */
        font-family: "Source Sans Pro", sans-serif;
        color: white;
        opacity: 1;
        font-weight: 300;
      }
      body :-ms-input-placeholder {
        /* Internet Explorer 10+ */
        font-family: "Source Sans Pro", sans-serif;
        color: white;
        font-weight: 300;
      }
      .wrapper {
        background: #a0522d;
        background: linear-gradient(to bottom right, #a0522d 0%, #f4a460 100%);
        position: absolute;
        top: 0%;
        left: 0;
        width: 100%;
        height: 100%;
        /* margin-top: -400px; */
        overflow: hidden;
      }
      .wrapper.form-success .container h1 {
        transform: translateY(85px);
      }
      .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 160px 0;
        height: 400px;
        text-align: center;
      }
      .container h1 {
        font-size: 40px;
        transition-duration: 1s;
        transition-timing-function: ease-in-put;
        font-weight: 200;
      }
      form {
        padding: 20px 0;
        position: relative;
        z-index: 2;
      }
      form input {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
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
      form input:hover {
        background-color: rgba(255, 255, 255, 0.4);
      }
      form input:focus {
        background-color: white;
        width: 300px;
        color: #2f1e12;
      }
      form button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: 0;
        background-color: white;
        border: 0;
        padding: 10px 15px;
        color: #2f1e12;
        border-radius: 3px;
        width: 250px;
        cursor: pointer;
        font-size: 18px;
        transition-duration: 0.25s;
      }
      form button:hover {
        background-color: #f5f7f9;
      }
      .bg-bubbles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
      }
      .bg-bubbles li {
        position: absolute;
        list-style: none;
        display: block;
        width: 40px;
        height: 40px;
        /* background-color: rgba(255, 255, 255, 0.15); */
        bottom: -160px;
        -webkit-animation: square 25s infinite;
        animation: square 25s infinite;
        transition-timing-function: linear;
      }
      .bg-bubbles li:nth-child(1) {
        left: 10%;
      }
      .bg-bubbles li:nth-child(2) {
        left: 20%;
        width: 80px;
        height: 80px;
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
        -webkit-animation-duration: 17s;
        animation-duration: 17s;
      }
      .bg-bubbles li:nth-child(3) {
        left: 25%;
        -webkit-animation-delay: 4s;
        animation-delay: 4s;
      }
      .bg-bubbles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        -webkit-animation-duration: 22s;
        animation-duration: 22s;
        /* background-color: rgba(255, 255, 255, 0.25); */
      }
      .bg-bubbles li:nth-child(5) {
        left: 70%;
      }
      .bg-bubbles li:nth-child(6) {
        left: 80%;
        width: 120px;
        height: 120px;
        -webkit-animation-delay: 3s;
        animation-delay: 3s;
        /* background-color: rgba(255, 255, 255, 0.2); */
      }
      .bg-bubbles li:nth-child(7) {
        left: 32%;
        width: 160px;
        height: 160px;
        -webkit-animation-delay: 7s;
        animation-delay: 7s;
      }
      .bg-bubbles li:nth-child(8) {
        left: 55%;
        width: 20px;
        height: 20px;
        -webkit-animation-delay: 15s;
        animation-delay: 15s;
        -webkit-animation-duration: 40s;
        animation-duration: 40s;
      }
      .bg-bubbles li:nth-child(9) {
        left: 25%;
        width: 10px;
        height: 10px;
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
        -webkit-animation-duration: 40s;
        animation-duration: 40s;
        /* background-color: rgba(255, 255, 255, 0.3); */
      }
      .bg-bubbles li:nth-child(10) {
        left: 90%;
        width: 160px;
        height: 160px;
        -webkit-animation-delay: 11s;
        animation-delay: 11s;
      }
      @-webkit-keyframes square {
        0% {
          transform: translateY(0);
        }
        100% {
          transform: translateY(-700px) rotate(600deg);
        }
      }
      @keyframes square {
        0% {
          transform: translateY(0);
        }
        100% {
          transform: translateY(-700px) rotate(600deg);
        }
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="container">
        <h1>Bakerz Bite</h1>

        <!-- Display Errors -->
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
          <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <?php endif; ?>

        <form class="form" method="POST" action="<?php echo e(route('auth.Changed')); ?>">
          <?php echo csrf_field(); ?>
          <input type="password" id="oldpassword" placeholder="Password" name="oldpassword" required />
          <input type="password" id="newpassword" placeholder="New Password" name="newpassword" required />
          <input
            type="password"
            id="newpassword_confirmation"
            placeholder="Confirm the new password"
            name="newpassword_confirmation"
            required
          />
          <button type="submit" id="login-button">Change Password</button>
          <br />
        </form>
      </div>
      <ul class="bg-bubbles">
        <li><img src="img/aaa.png" width="100%" alt="" /></li>
        <li><img src="img/bbb.png" width="100%" alt="" /></li>
        <li><img src="img/ccc.png" width="100%" alt="" /></li>
        <li><img src="img/ddd.png" width="100%" alt="" /></li>
        <li><img src="img/eee.png" width="100%" alt="" /></li>
        <li><img src="img/fff.png" width="100%" alt="" /></li>
        <li><img src="img/hhh.png" width="100%" alt="" /></li>
        <li><img src="img/ggg.png" width="100%" alt="" /></li>
        <li><img src="img/jjj.png" width="100%" alt="" /></li>
        <li><img src="img/kkk.png" width="100%" alt="" /></li>
      </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/auth/changepass.blade.php ENDPATH**/ ?>