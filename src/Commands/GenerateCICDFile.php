<?php

namespace VishalLaravel\CICDGenerator\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateCICDFile extends Command
{
    protected $signature = 'cicd:generate {platform : github/gitlab/bitbucket}';
    protected $description = 'Generate CI/CD YAML file for a given platform';

    public function handle()
    {
        $platform = strtolower($this->argument('platform'));

        // Load stub
        $stubPath = __DIR__ . "/../Templates/{$platform}.yml.stub";

        if (!File::exists($stubPath)) {
            $this->error("❌ Stub for platform '{$platform}' not found.");
            return;
        }

        $contents = File::get($stubPath);

        // Dynamic variable injection
        $variables = [
            '{{php_version}}' => config('cicd.default_php_version'),
            '{{app_name}}' => config('app.name'),
        ];

        foreach ($variables as $key => $value) {
            $contents = str_replace($key, $value, $contents);
        }

        // Determine output path (defaults, with config/env override support)
        $defaultPaths = [
            'github'    => '.github/workflows/ci.yml',
            'gitlab'    => '.gitlab-ci.yml',
            'bitbucket' => 'bitbucket-pipelines.yml',
        ];

        $configuredPath = config("cicd.output_paths.{$platform}", $defaultPaths[$platform] ?? null);

        if (!$configuredPath) {
            $this->error("❌ Unsupported platform: '{$platform}'");
            return;
        }

        $outputPath = base_path($configuredPath);

        // Ensure directory exists
        File::ensureDirectoryExists(dirname($outputPath));

        // Write file
        File::put($outputPath, $contents);

        $this->info("✅ CI/CD file generated: {$outputPath}");
    }
}