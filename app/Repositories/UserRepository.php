<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected $user;

    /**
     * UserRepository constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get all users.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getFromEmail($token, $user_id)
    {
        return $user = User::where('activate_token', $token)->where('id', $user_id)->first();
    }

    public function all()
    {
        return $this->user->all();
    }

    public function getByEmail($email)
    {
        return $this->user->where('email', $email)->first();
    }

    public function getByToken($token)
    {
        return $this->user->where('reset_token', $token)->first();
    }

    public function paginate($perPage)
    {
        return $this->user::paginate($perPage);
    }

    public function search($q, $perPage)
    {
        return $this->user::where('name', 'like', '%' . $q . '%')->orWhere('email', 'like', '%' . $q . '%')->paginate(
            $perPage
        );
    }

    public function find($id)
    {
        return $this->user::findOrFail($id);
    }

    public function findWhereInGet(array $data)
    {
        return $this->user::whereIn('id', $data)->get();
    }

    public function getModel()
    {
        return new $this->user();
    }

    public function where($key, $value)
    {
        return $this->user::where($key, $value);
    }
}
