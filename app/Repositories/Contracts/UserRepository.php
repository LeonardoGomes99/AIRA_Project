<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface UserRepository extends BaseRepositoryInterface
{
    public function model();
    public function getAll(): Collection;
}
