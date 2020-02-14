<?php


namespace App\Http\Services\impl;


use App\Http\Repositories\eloquent\UserRepo;
use App\Http\Services\UserServiceInterface;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserServices implements UserServiceInterface
{

    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getAll()
    {
        return $this->userRepo->getAll();
    }

    public function create($request)
    {
        $user = new User();
        $user->fill($request->all());
        $user['password'] = Hash::make($request->password);
        $this->userRepo->storeOrUpdate($user);
    }

    public function update($request, $id)
    {
        $user = $this->findById($id);
        $user->fill($request->all());
        $this->userRepo->storeOrUpdate($user);
    }


    function destroy($id)
    {
        $user = $this->findById($id);
        $this->userRepo->delete($user);
    }


    function findById($id)
    {
        return $this->userRepo->findById($id);
    }

    public function search($request)
    {
        $keyword = $request->keyword;
        if (!$keyword){
            return redirect()->route('users.index');
        } else {

            return $this->userRepo->search($keyword);
        }
    }
}
