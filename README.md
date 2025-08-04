# PhishEdu 🎯

> **Educational Phishing Simulation Platform for Security Awareness Training**

![License](https://img.shields.io/badge/license-MIT-blue.svg)
![Laravel](https://img.shields.io/badge/Laravel-11.x-red.svg)
![PHP](https://img.shields.io/badge/PHP-8.2+-blue.svg)
![Security](https://img.shields.io/badge/Purpose-Educational-green.svg)

## ⚠️ **EDUCATIONAL PURPOSE ONLY**

**PhishEdu** is a comprehensive phishing simulation tool designed exclusively for **educational purposes** and **security awareness training**. This platform helps organizations and security professionals demonstrate phishing techniques in a controlled, safe environment.

## 🎓 **About**

PhishEdu allows administrators and security instructors to:
- Generate realistic phishing links for popular platforms
- Create simulated login pages that match current platform designs
- Capture and analyze user interactions for training purposes
- Educate users about phishing risks in a controlled environment

## ✨ **Features**

### 🔗 **Link Generation**
- **URL Shortening**: Integration with TinyURL and is.gd services
- **Professional Appearance**: Links appear legitimate and trustworthy
- **Multiple Platforms**: Support for Facebook, Gmail, Instagram, LinkedIn, Twitter/X

### 🎨 **Authentic Login Pages**
- **Pixel-Perfect Replicas**: Exact copies of current platform login pages
- **Responsive Design**: Works seamlessly on all devices
- **Real-time Updates**: Designs match current platform aesthetics

### 📊 **Data Collection & Analysis**
- **Comprehensive Logging**: Email, password, IP address, user agent
- **Training Analytics**: Track user behavior for educational insights
- **Plain Text Storage**: Configurable for demonstration purposes

### 🛡️ **Security Features**
- **Educational Disclaimers**: Clear warnings on all simulated pages
- **Role-Based Access**: Admin and instructor permissions via Spatie/Laravel-Permission
- **Controlled Environment**: Safe testing without real credential risks

## 🚀 **Installation**

### Prerequisites
- PHP 8.2+
- Composer
- MySQL/PostgreSQL
- Node.js & NPM (optional, for asset compilation)

### Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/yassin287/phishedu.git
   cd phishedu
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Environment configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   ```bash
   # Configure your database in .env file
   php artisan migrate
   php artisan db:seed --class=PlatformSeeder
   ```

5. **Run the application**
   ```bash
   php artisan serve
   ```

## 📋 **Usage**

### For Administrators

1. **Access the Admin Panel**
   - Navigate to `/link/create`
   - Select target platform (Facebook, Gmail, Instagram, etc.)
   - Generate phishing link

2. **Share Links for Training**
   - Use generated shortened URLs in training scenarios
   - Monitor user interactions through admin dashboard
   - Analyze results for security awareness improvement

### For Security Training

1. **Controlled Environment**
   - All activities are logged for educational analysis
   - No real credentials are compromised
   - Clear disclaimers inform users of simulation nature

2. **Training Scenarios**
   - Email phishing campaigns
   - Social engineering awareness
   - Security policy education

## 🔧 **Configuration**

### URL Shortening Services

Configure API keys in your `.env` file:
```env
TINYURL_API_KEY=your_tinyurl_api_key
BITLY_ACCESS_TOKEN=your_bitly_token
```

### Database Configuration
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=phishedu
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## 📁 **Project Structure**

```
phishedu/
├── app/
│   ├── Http/Controllers/
│   │   └── PhishingLinkController.php
│   └── Models/
│       ├── PhishingLink.php
│       ├── PhishingSubmission.php
│       └── Platform.php
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/views/
│   ├── fake_login_facebook.blade.php
│   ├── fake_login_gmail.blade.php
│   ├── fake_login_instagram.blade.php
│   ├── fake_login_linkedin.blade.php
│   └── fake_login_twitter.blade.php
└── routes/
    └── web.php
```

## 🛡️ **Legal & Ethical Use**

### ✅ **Permitted Uses**
- Educational security training
- Corporate security awareness programs
- Authorized penetration testing
- Academic research with proper ethics approval

### ❌ **Prohibited Uses**
- Unauthorized access attempts
- Malicious phishing campaigns
- Identity theft or fraud
- Any illegal activities

### 📜 **Disclaimer**

This tool is provided for **educational purposes only**. Users are responsible for ensuring compliance with all applicable laws and regulations. The authors and contributors are not responsible for any misuse of this software.

## 🤝 **Contributing**

We welcome contributions that enhance the educational value of this platform:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/educational-enhancement`)
3. Commit your changes (`git commit -am 'Add educational feature'`)
4. Push to the branch (`git push origin feature/educational-enhancement`)
5. Create a Pull Request

## 📝 **License**

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🔒 **Security**

If you discover any security vulnerabilities, please send an email to security@phishedu.com. All security vulnerabilities will be promptly addressed.

## 📞 **Support**

- **Documentation**: [Wiki](https://github.com/yassin287/phishedu/wiki)
- **Issues**: [GitHub Issues](https://github.com/yassin287/phishedu/issues)
- **Discussions**: [GitHub Discussions](https://github.com/yassin287/phishedu/discussions)

## 🙏 **Acknowledgments**

- Laravel Framework for the robust foundation
- Spatie packages for permission management
- The security community for continuous education efforts

---

**Remember: Use this tool responsibly and only for legitimate educational purposes. Always obtain proper authorization before conducting any security testing.**

## 📊 **Statistics**

![GitHub stars](https://img.shields.io/github/stars/yassin287/phishedu.svg)
![GitHub forks](https://img.shields.io/github/forks/yassin287/phishedu.svg)
![GitHub issues](https://img.shields.io/github/issues/yassin287/phishedu.svg)
![GitHub contributors](https://img.shields.io/github/contributors/yassin287/phishedu.svg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
