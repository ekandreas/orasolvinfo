<?php
date_default_timezone_set('Europe/Stockholm');

include_once 'vendor/ekandreas/valet-deploy/recipe.php';

set('domain','orasolvinfo.app');

server( 'production', 'c6889.cloudnet.se', 22 )
    ->env('deploy_path','/mnt/persist/www/orasolv.info')
    ->user( 'root' )
    ->env('branch', 'master')
    ->stage('production')
    ->env('database','orasolvinfo')
    ->env('domain','www.orasolv.info')
    ->identityFile();

set('repository', 'https://github.com/ekandreas/orasolvinfo');

// Symlink the .env file for Bedrock
set('env', 'prod');
set('keep_releases', 10);
set('shared_dirs', ['web/app/uploads']);
set('shared_files', ['.env', 'web/.htaccess', 'web/robots.txt']);
set('env_vars', '/usr/bin/env');
set('writable_dirs', ['web/app/uploads']);

task('deploy:restart', function () {
    run("rm -f web/app/uploads/.cache/*");
    run("service apache2 reload");
})->desc('Refresh cache');

task( 'deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:vendors',
    'deploy:shared',
    'deploy:writable',
    'deploy:symlink',
    'cleanup',
    'deploy:restart',
    'success'
] )->desc( 'Deploy your Bedrock project, eg dep deploy production' );


