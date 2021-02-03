# Lumen + Telegram Bot Boilerplate

This package is a boilerplate for Telegram Bot using lumen framework. 

# Configuration Steps
1. Create .env file and copy .env.example's content.
2. Set your telegram bot's token and webhook url in .env file.
3. Visit https://yourdomain(dot)com/set-webhook to set your webhook url using Telegram API
4. Configure your bot username in config/telegram.

# Note
1. Configure your bot commands to @BotFather, for example /hello command.
2. Your command's script will be located at App\Commands.
3. Please refer to each dependencies's documentation for more information.
4. Don't forget to add a slash (/) symbol at the end of your webhook url, or you can set your own url at App\Http\Controllers\TelegramController.

# Package dependencies
- irazasyed/telegram-bot-sdk:dev-master [Documentation](https://irazasyed.github.io/telegram-bot-sdk/)
- laravel/lumen-framework:^7.0 [Lumen website](https://lumen.laravel.com/docs)
- laravelista/lumen-vendor-publish:7 [Repository](https://github.com/laravelista/lumen-vendor-publish)

# Contact Me
Feel free to contact me at Telegram : https://t.me/poerawsoft
