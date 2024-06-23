<?php

namespace App\Http\Controllers;
use App\Repository\Interface\IUserRepository;
use App\DTO\UserDTO;
use App\Http\Requests\CreateUser;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected $userRepository;

    public function __construct(IUserRepository $userRepository){
        $this->userRepository = $userRepository;
    }
    public function create(CreateUser $createUser){

        $userDTO = UserDTO::from($createUser->all());
        $user = $this->userRepository->createUser($userDTO);
}
}