<?php

namespace App\Channels;

use Illuminate\Notifications\Channels\DatabaseChannel as IlluminateDatabaseChannel;
use Illuminate\Notifications\Notification;

class DatabaseChannel extends IlluminateDatabaseChannel
{
    /**
     * Build the payload for the database notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return array
     */
    protected function buildPayload($notifiable, Notification $notification)
    {
        return [
            'type'    => get_class($notification),
            'data'    => $this->getData($notifiable, $notification),
            'read_at' => null,
            'notification_category_id' => $notification->getNotificationCategoryId()->id ?? null,
            'status'  => $notification->getOrderStatus() ?? null,
            'order_id' => $notification->getOrderId() ?? null,
            'comments' => "Test",
        ];
    }
}
