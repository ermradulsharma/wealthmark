<?php

namespace App;

use Illuminate\Notifications\DatabaseNotification as TradeNotification;

class DatabaseNotification extends TradeNotification
{
    protected $connection = 'custom_connection';
}