<?php


namespace App\Http\Services\User;


use App\Http\Repositories\User\UserRepoInterface;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
    private $userRepo;

    public function __construct(UserRepoInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getAll()
    {
        return $this->userRepo->getAll();
    }


    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function store($request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = false;
        $user->password = Hash::make($request->password);
        $this->userRepo->store($user);
    }
}
