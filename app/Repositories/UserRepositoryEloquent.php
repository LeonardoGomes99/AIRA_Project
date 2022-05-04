<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\UserRepository;
use Illuminate\Database\Eloquent\Collection;

class UserRepositoryEloquent extends BaseRepositoryEloquent implements UserRepository
{
    public function model()
    {
        return User::class;
    }

    public function getAll(): Collection
    {
        return $this->model->get();
    }
}
