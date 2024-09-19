<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('presence', function ($user) {
    return $user;
});
