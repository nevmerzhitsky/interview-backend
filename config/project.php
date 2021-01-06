<?php

use App\Models\User;

return [
    'admin_permissions_callback' => fn(User $user) => $user->email === 'admin@example.com',
];
