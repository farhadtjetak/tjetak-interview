The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Reference:
1. Laravel Documentation: https://laravel.com/docs/8.x/
2. Bootstrap Documentation: https://getbootstrap.com/docs/4.1/

# Preparation
1. Install [Visual Studio Code](https://code.visualstudio.com/)
2. Install [Live Share Extension](https://docs.microsoft.com/en-us/visualstudio/liveshare)
3. [Optional] if you are using Windows Subsystem for Linux (WSL) and got error when install dependecies, please read https://docs.microsoft.com/en-us/visualstudio/liveshare/reference/linux and install manually

# How To Run Locally
1. Clone this repository 
```sh
$ git clone https://github.com/farhadtjetak/tjetak-interview.git
```

2. Enter this project directory 
```sh
cd tjetak-interview
```

3. Run composer install, make sure you have composer installed. If not you can follow this [link for Mac OS](https://tecadmin.net/install-composer-on-macos/), to install composer.
```sh
$ composer install
```

4. Run locally using sail up
```sh
$ ./vendor/bin/sail up
```

5. 
# How to create page
1. Open `/resource/views/index` and modify the file
# Styling with css
1. this style is required the npm so install npm on this documentation https://nodejs.org/en/download/
2. run `npm install` to install all laravel dependencies
3. run `npm run dev` to compile the css or scrips. Use `npm run watch` to watch your file so you dont need to compile it with previous command
