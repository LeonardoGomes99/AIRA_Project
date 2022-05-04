<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\UsersRepositoryInterface;

class UsersRepository extends BaseRepository implements UsersRepositoryInterface
{

    protected $model = User::class;

    public function all()
    {
        return $this->model->all();
    }

}