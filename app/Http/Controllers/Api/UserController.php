<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\UserService;

class UserController extends Controller
{
    protected $users;
    public function __construct(UserService $users)
    {
        return $this->users = $users;
    }

    public function listUsers()
    {
        try {
            $data = $this->users->getUsers();
            return view("users.user")->with("data", $data["data"]);
        } catch (\Exception $e) {
            $message = 'Something went wrong while processing your request.';
            return $message;
        }
    }

    public function getSingleUser(int $id)
    {
        try {
        $data = $this->users->getSingleUser($id);
        return view("users.profile")->with("data",$data);
        }
        catch (\Exception $e) {
            $message = 'Something went wrong while processing your request.';
            return $message;
        }
    }
}
