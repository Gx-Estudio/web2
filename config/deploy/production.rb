set :stage, :prod
set :symfony_env, "prod"

set :branch, 'master'
set :deploy_to, '/public_html'

set :controllers_to_clear, ["app_*.php"]
set :composer_install_flags, '--prefer-dist --no-interaction --optimize-autoloader'

server '192.169.197.174', user: 'jesus', port: 22, roles: %w{app db web}
SSHKit.config.command_map[:composer] = "php #{shared_path.join("composer.phar")}"