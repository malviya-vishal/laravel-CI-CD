# Laravel CI/CD Generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/your-vendor-name/cicd-generator.svg?style=flat-square)](https://packagist.org/packages/your-vendor-name/cicd-generator)
[![Total Downloads](https://img.shields.io/packagist/dt/your-vendor-name/cicd-generator.svg?style=flat-square)](https://packagist.org/packages/your-vendor-name/cicd-generator)

> 🚀 Generate ready-to-use CI/CD pipeline YAML files for GitHub Actions, GitLab CI/CD, and Bitbucket Pipelines — tailored for Laravel projects.

---

## 🔧 Installation

Install the package via Composer:

```bash
composer require your-vendor-name/cicd-generator

Publish configuration and templates:

php artisan vendor:publish --tag=config
php artisan vendor:publish --tag=templates
php artisan vendor:publish --tag=views

## ⚙️ Usage

🧪 Generate YAML for a platform

php artisan cicd:generate github
php artisan cicd:generate gitlab
php artisan cicd:generate bitbucket

Files will be generated in standard paths:

.github/workflows/ci.yml

.gitlab-ci.yml

bitbucket-pipelines.yml

🧾 List supported platforms

php artisan cicd:list-platforms

🔧 Configuration

You may configure defaults in .env:

CICD_PHP_VERSION=8.2

# Optional overrides:
CICD_GITHUB_PATH=.github/workflows/ci.yml
CICD_GITLAB_PATH=.gitlab-ci.yml
CICD_BITBUCKET_PATH=bitbucket-pipelines.yml

Or customize paths in config/cicd.php.

📁 Stubs
Each platform uses a customizable stub file. You can modify these in:

resources/cicd-templates/github.yml.stub
resources/cicd-templates/gitlab.yml.stub
resources/cicd-templates/bitbucket.yml.stub

✅ Supported Laravel & PHP Versions
Laravel 10+
PHP 7.4, 8.0+

📄 License
This package is open-sourced software licensed under the MIT license.

🙌 Credits
Developed by Vishal Malviya
Contributions welcome via issues and pull requests!


---

## 📄 `LICENSE` Template (MIT)

```txt
MIT License

Copyright (c) 2025 Vishal Malviya

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
