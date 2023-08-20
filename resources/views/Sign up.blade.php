
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign up</title>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style media="screen">
      *,
      :before,
      :after{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      body{
        background-color: #080710;
      }
      .background{
        width: 430px;
        height: 520px;
        position: absolute;
        transform: translate(-50%,-50%);
        left: 50%;
        top: 50%;
      }
      .background .shape{
        height: 200px;
        width: 200px;
        position: absolute;
        border-radius: 50%;
      }
      .shape:first-child{
        background: linear-gradient(
          #1845ad,
          #23a2f6
        );
        left: -80px;
        top: -80px;
      }
      .shape:last-child{
        background: linear-gradient(
          to right,
          #ff512f,
          #f09819
        );
        right: -30px;
        bottom: -80px;
      }
      form{
        height: 520px;
        width: 400px;
        background-color: rgba(255,255,255,0.13);
        position: absolute;
        transform: translate(-50%,-50%);
        top: 50%;
        left: 50%;
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255,255,255,0.1);
        box-shadow: 0 0 40px rgba(8,7,16,0.6);
        padding: 35px;
      }
      form *,
      form h3{
        font-family: 'Poppins',sans-serif;
        color: #ffffff;
        letter-spacing: 0.5px;
        outline: none;
        border: none;
      }
      form h3{
        font-size: 32px;
        font-weight: 500;
        line-height: 42px;
        text-align: center;
      }
      label{
        display: block;
        margin-top: 20px; 
        font-size: 16px;
        font-weight: 500;
      }
      input{
        display: block;
        height: 50px;
        width: 100%;
        background-color: rgba(255,255,255,0.07);
        border-radius: 3px;
        padding: 0 10px;
        margin-top: 5px;
        font-size: 14px;
        font-weight: 300;
      }
      ::placeholder{
        color: #e5e5e5;
      }
      button{
        margin-top: 30px; 
        width: 100%;
        background-color: #ffffff;
        color: #080710;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
      }
      .social{
        margin-top: 30px;
        display: flex;
      }
      .social div{
        background: red;
        width: 150px;
        border-radius: 3px;
        padding: 5px 10px 10px 5px;
        background-color: rgba(255,255,255,0.27);
        color: #eaf0fb;
        text-align: center;
      }
      .social div:hover{
        background-color: rgba(255,255,255,0.47);
      }
      .social .fb{
        margin-left: 25px;
      }
      .social i{
        margin-right: 4px;
      }
      .signup-link {
        display: block;
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
        color: #eaf0fb;
        text-decoration: none;
      }
      .signup-link:hover {
        text-decoration: underline;
      }
    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form id="login-form" action="{{ route('sign-up.submit') }}" method="POST">
        @csrf
        <h3>Sign up</h3>
        <label for="username">Email</label>
        <input type="text" placeholder="Email" name="email" id="username">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" placeholder="Retype Password" name="password_confirmation" id="password_confirmation">
        <button type="submit">Sign up</button>
    </form>
</body>
</html>
