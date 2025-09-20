# Laravel CI/CD Generator

A Laravel package to automatically generate **CI/CD YAML files** for:
- **GitHub Actions**
- **GitLab CI/CD**
- **Bitbucket Pipelines**

This package helps developers quickly set up CI/CD pipelines with pre-configured workflows, saving time and effort in the DevOps process.

---

## Features
- 🚀 One-command setup for CI/CD YAML files
- 🛠 Supports GitHub, GitLab, and Bitbucket
- ⚡ Easy to integrate with any Laravel project
- 🔒 Clean, reusable, and customizable templates

---

## Installation

Install the package via Composer:

composer require vishal-laravel/cicd-generator

---

## Usage

After installation, publish the CI/CD templates using:

php artisan cicd:install


This command will add ready-to-use YAML files for GitHub, GitLab, or Bitbucket pipelines into your project.

---

## Configuration

You can customize the generated files according to your project's needs.

Example file locations:

.github/workflows/laravel.yml
.gitlab-ci.yml
bitbucket-pipelines.yml

---

## Requirements

PHP >= 7.4

Laravel 10 or 11

---

## Contributing

Contributions are welcome!
Please fork the repository, make your changes, and submit a pull request.

---

## License

This package is open-sourced software licensed under the MIT license.