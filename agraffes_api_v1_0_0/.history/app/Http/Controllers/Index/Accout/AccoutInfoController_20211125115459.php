<?php

namespace App\Http\Controllers\Index\Accout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\User\AddressRepository;

class AccoutInfoController extends Controller
{

    public function __construct(private AddressRepository $addressRepository)
    {
    }

    public function index()
    {
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }

    public function show($id)
    {
        return $this->addressRepository->find($id);
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
    }


    public function destroy($id)
    {
    }
}
