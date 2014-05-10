lock '3.2.1'

set :application, 'misetes'
set :repo_url, 'git@bitbucket.org:dukex/misetes.git'
set :scm, :git
set :deploy_to, "/var/www/misetes/"

# set :deploy_via, :remote_cache
# set :copy_exclude, [".git", ".DS_Store", ".gitignore", ".gitmodules"]

set :use_sudo, false
set :git_shallow_clone, true
set :git_enable_submodules, true
set :scm_verbose, true

namespace :deploy do
  desc 'Restart application'
  task :restart do
    on roles(:app), in: :sequence, wait: 5 do
      sudo :"/etc/init.d/nginx", "restart"
    end
  end

  after :published, :restart

  task :symlink do
    on roles(:app) do
      execute :touch, "#{release_path}/#{fetch(:app_environment)}"
      execute :ln, "-nfs", "#{shared_path}/uploads", "#{release_path}/wordpress/wp-content/uploads"
    end
  end

  after :publishing, :symlink
end


