<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhishEdu - Professional Security Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }
        .card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }
        .form-control, .form-select {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ffffff;
            border-radius: 10px;
            padding: 12px 16px;
        }
        .form-control:focus, .form-select:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: #00d4ff;
            box-shadow: 0 0 0 0.2rem rgba(0, 212, 255, 0.25);
            color: #ffffff;
        }
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }
        .form-select option {
            background: #2d2d2d;
            color: #ffffff;
        }
        .btn-primary {
            background: linear-gradient(135deg, #00d4ff 0%, #0099cc 100%);
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #0099cc 0%, #007aa3 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 212, 255, 0.3);
        }
        .alert-success {
            background: rgba(0, 255, 127, 0.1);
            border: 1px solid rgba(0, 255, 127, 0.3);
            color: #00ff7f;
            border-radius: 10px;
        }
        .navbar {
            background: rgba(0, 0, 0, 0.3) !important;
            backdrop-filter: blur(10px);
        }
        .navbar-brand {
            color: #00d4ff !important;
            font-weight: bold;
            font-size: 1.5rem;
        }
        h2 {
            background: linear-gradient(135deg, #00d4ff 0%, #ffffff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: bold;
            margin-bottom: 2rem;
        }
        .form-label {
            color: #ffffff;
            font-weight: 600;
            margin-bottom: 8px;
        }
        .link-preview {
            background: rgba(0, 212, 255, 0.1);
            border: 1px solid rgba(0, 212, 255, 0.3);
            border-radius: 10px;
            padding: 15px;
            margin-top: 15px;
            word-break: break-all;
        }
        .link-preview a {
            color: #00d4ff;
            text-decoration: none;
        }
        .link-preview a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container">
            <a class="navbar-brand" href="/"><i class="fas fa-shield-alt me-2"></i>PhishEdu</a>
        </div>
    </nav>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card p-4">
                    <div class="text-center mb-4">
                        <i class="fas fa-link fa-3x text-info mb-3"></i>
                        <h2>Generate Phishing Link</h2>
                        <p class="text-muted">Professional Security Training Tool</p>
                    </div>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle me-2"></i>
                            Link Generated Successfully!
                            <div class="link-preview mt-2">
                                <strong>Your Link:</strong><br>
                                <a href="{{ session('link') }}" target="_blank">{{ session('link') }}</a>
                            </div>
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('link.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="platform" class="form-label">
                                <i class="fas fa-globe me-2"></i>Target Platform
                            </label>
                            <select name="platform" id="platform" class="form-select">
                                @foreach($platforms as $platform)
                                    <option value="{{ $platform->name }}">
                                        <i class="fab fa-{{ $platform->name }}"></i> {{ ucfirst($platform->name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-rocket me-2"></i>Generate Secure Link
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
