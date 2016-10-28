# config valid only for current version of Capistrano
lock '3.6.1'

set :application, 'GxEstudio'
set :repo_url, 'git@gitlab.com:Gx-Estudio/web2.git'

set :use_sudo, false

set :linked_files, %w{app/config/parameters.yml}
set :linked_dirs, %w{app/logs vendor web/vendor node_modules web/assets}

set :format, :pretty
set :log_level, :debug
set :keep_releases, 5

after 'deploy:starting', 'composer:install_executable'
after 'deploy:updated', 'symfony:assets:install'
after 'deploy:updated', 'symfony:assetic:dump'