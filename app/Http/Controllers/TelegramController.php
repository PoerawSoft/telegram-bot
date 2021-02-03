<?php

namespace App\Http\Controllers;

use App\Services\TelegramBotService;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller {

  public function bot()
  {
    Telegram::commandsHandler(true);
    return 'ok';
  }

  public function setWebhook(TelegramBotService $telegram)
  {
    $telegram->sdk->removeWebhook();
    $telegram->sdk->setWebhook([
      'url' => config('telegram.webhook.url') . $telegram->token
    ]);
    return 'ok';
  }


}