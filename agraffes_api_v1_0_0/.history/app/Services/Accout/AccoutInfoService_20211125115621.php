<?php

namespace App\Services\Accout;

use App\Repositories\User\AddressRepository;

class AccoutInfoService
{

    public function __construct(private AddressRepository $addressRepository)
    {
    }
}
