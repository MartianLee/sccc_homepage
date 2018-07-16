source 'https://rubygems.org'
git_source(:github) { |repo| "https://github.com/#{repo}.git" }

ruby '2.3.1'

# Bundle edge Rails instead: gem 'rails', github: 'rails/rails'
gem 'rails', '~> 5.2.0'
# Use mysql as the database for Active Record
gem 'mysql2', '>= 0.4.4', '< 0.6.0'
# Use Puma as the app server
gem 'puma', '~> 3.11'
# Use SCSS for stylesheets
# See https://github.com/rails/execjs#readme for more supported runtimes
# gem 'mini_racer', platforms: :ruby

# Turbolinks makes navigating your web application faster. Read more: https://github.com/turbolinks/turbolinks
gem 'turbolinks', '~> 5'
# Use Redis adapter to run Action Cable in production
# gem 'redis', '~> 4.0'
# Use ActiveModel has_secure_password
# gem 'bcrypt', '~> 3.1.7'

# Use ActiveStorage variant
# gem 'mini_magick', '~> 4.8'

# Use Capistrano for deployment
# gem 'capistrano-rails', group: :development

# model
gem 'enumerize', '~> 1.1'
gem 'paranoia', '~> 2.1', '>= 2.1.5'
gem 'time_difference', '~> 0.4.2'
gem 'by_star', '~> 2.2', '>= 2.2.1'
gem 'treetop', '~> 1.6', '>= 1.6.10'
gem 'chartkick'


# file upload
gem 'carrierwave'
gem 'mini_magick'


# auth
gem 'cancancan', '~> 1.10'
gem 'rolify'
gem 'devise'
gem 'omniauth', '~> 1.3', '>= 1.3.1'
gem 'doorkeeper'

# views
gem 'sass-rails', '~> 5.0'
gem 'bootstrap-sass'
gem 'jquery-rails'
gem 'haml-rails'
gem 'uglifier', '>= 1.3.0'
gem 'coffee-rails'


# tools
gem 'jbuilder', '~> 2.5'
gem 'ckeditor'
gem 'browsernizer'

# crawling
gem 'mechanize', '~> 2.7', '>= 2.7.5'

# SEO
gem 'sitemap_generator', '~> 5.1'

# paging
gem 'kaminari'
gem 'bootstrap-kaminari-views', '~> 0.0.5'


# scheduler
gem 'sidekiq', '~> 4.2.1'
gem 'sidekiq-cron', '~> 0.4.2'
gem 'redis', '~> 3.2', '>= 3.2.2'

# notification
gem 'slack-notifier', '~> 1.4'


# Reduces boot times through caching; required in config/boot.rb
gem 'bootsnap', '>= 1.1.0', require: false

group :development, :test do
  # Call 'byebug' anywhere in the code to stop execution and get a debugger console
  gem 'byebug', platforms: [:mri, :mingw, :x64_mingw]
  gem 'listen', '>= 3.0.5', '< 3.2'
  gem 'mocha', '~> 1.1'
  gem 'spring'
  gem 'sassc-rails'
end

group :development do
  # Access an interactive console on exception pages or by calling 'console' anywhere in the code.
  gem 'web-console', '>= 3.3.0'
  gem "better_errors"
  # Spring speeds up development by keeping your application running in the background. Read more: https://github.com/rails/spring
  gem 'spring'
  gem 'spring-watcher-listen', '~> 2.0.0'
end

group :test do
  # Adds support for Capybara system testing and selenium driver
  gem 'capybara', '>= 2.15', '< 4.0'
  gem 'selenium-webdriver'
  # Easy installation and use of chromedriver to run system tests with Chrome
  gem 'chromedriver-helper'
end

# Windows does not include zoneinfo files, so bundle the tzinfo-data gem
gem 'tzinfo-data', platforms: [:mingw, :mswin, :x64_mingw, :jruby]
