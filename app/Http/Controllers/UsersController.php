<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepository;
use App\Repositories\Eloquent\UserRepositoryEloquent;
use App\Services\Contracts\UserServiceInterface;
use App\Services\UserService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * @var UserServiceInterface
     */
    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function all()
    {
        dd($this->userService->getAll());
    }
}
