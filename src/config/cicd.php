<?php
return [
    'default_php_version' => env('CICD_PHP_VERSION', '8.1'),

    'output_paths' => [
        'github'    => env('CICD_GITHUB_PATH', '.github/workflows/ci.yml'),
        'gitlab'    => env('CICD_GITLAB_PATH', '.gitlab-ci.yml'),
        'bitbucket' => env('CICD_BITBUCKET_PATH', 'bitbucket-pipelines.yml'),
    ],
];
