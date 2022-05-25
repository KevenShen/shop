<?php

namespace App\Repositories\User;

use App\Models\UserAddress;
use Illuminate\Support\Facades\Storage;

class AddressRepository
{
    private $model;
    const path = UserMedia;
    public function __construct(UserAddress $userAddress)
    {
        $this->model = $userAddress;
        $this->modeltable = 'user_address';
    }
}
