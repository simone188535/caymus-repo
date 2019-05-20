namespace :purered do

  desc 'Make apache owner of web directories.'
  task :fix_perms do
    on roles(:app) do
      web_user = fetch(:web_user)
      deploy_to = fetch(:deploy_to)
      deploy_user = host.user


      # fetch linked_dirs so we can check whether or not to do certain things...
      linked_dirs = fetch(:linked_dirs)

      w3tc = "html/wp-content/w3tc-config"

      wordfence = "html/wp-content/wflogs"

      # puts "Changing owner of #{deploy_to} to #{web_user}:#{deploy_user} now..."
      # execute :sudo, 'chown', '-R', "#{web_user}:#{deploy_user}", deploy_to

      puts "Changing owner of #{deploy_to}/shared to #{web_user}:#{deploy_user}..."
      execute :sudo, 'chown', '-R', "#{web_user}:#{deploy_user}", "#{deploy_to}/shared"

      puts "Changing owner of #{deploy_to}/releases to #{web_user}:#{deploy_user}..."
      execute :sudo, 'chown', '-R', "#{web_user}:#{deploy_user}", "#{deploy_to}/releases"

      puts "Adding group write permissions to #{deploy_to}/releases"
      execute :sudo, 'chmod', '-R', 'g+w', "#{deploy_to}/releases"

      puts "Changing owner of #{deploy_to}/current to #{web_user}:#{deploy_user}..."
      execute :sudo, 'chown', '-R', "#{web_user}:#{deploy_user}", "#{deploy_to}/current"

      # if this site uses W3 Total Cache, we need to remove group write permission from wp-content
      if linked_dirs.include? w3tc

        puts "Removing group write permission from #{deploy_to}/current/html/wp-content to shut W3 Total Cache up..."
        execute :sudo, 'chmod', 'g-w', "#{deploy_to}/current/html/wp-content"

      end

      # if we end up needing to do anything special for Wordfence directories, it would go here...
      # if linked_dirs.include? wordfence
      #
      #   puts "Removing group write permission from #{deploy_to}/current/html/wp-content/wflogs..."
      #   execute :sudo, 'chmod', 'g-w', "#{deploy_to}/current/html/wp-content/wflogs"
      #
      # end

      # change owner of base web directory to shut Nam up
      execute :sudo, 'chown', "#{deploy_user}:#{web_user}", deploy_to

    end
  end

  # execute this task just after deploy:finished
  after 'deploy:finished', 'purered:fix_perms'

end
