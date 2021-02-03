<?php

namespace App\Services;

use Telegram\Bot\Api;

class TelegramBotService {

  /**
   * Telegram Bot SDK
   * @var API
   */
  public $sdk;
  /**
   * Telegram's Bot token
   * @var String
   */
  public $token;

  public function __construct($token)
  {
    $this->token = $token;
    $this->sdk = new Api($token);
  }

}