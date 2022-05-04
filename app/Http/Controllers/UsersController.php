<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\UsersRepositoryInterface;

class UsersController extends Controller
{
    
    public function all(UsersRepositoryInterface $model)
    {
        $users = $model->all();
        dd($users);

    }
}
