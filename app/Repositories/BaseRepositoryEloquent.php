<?php

namespace App\Repositories;

use App\Repositories\Contracts\BaseRepositoryInterface;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;

abstract class BaseRepositoryEloquent extends BaseRepository implements BaseRepositoryInterface, CacheableInterface
{
    use CacheableRepository;

}

