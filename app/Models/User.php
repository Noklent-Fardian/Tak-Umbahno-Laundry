<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'no_hp',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public static function getData(int $paginate = 20)
    {
        return User::orderBy('created_at', 'desc')->paginate($paginate);
    }
    public static function search($request, $col)
    {
        return User::where($col, 'like', '%' . $request . '%')->orderBy('created_at', 'desc')->paginate(20);
    }

    public static function filterRole($filter)
    {
        return User::role($filter)->orderBy('created_at', 'desc')->paginate(20);
    }

    public static function searchFilterRole($request, $col, $filter)
    {
        return User::role($filter)->where($col, 'like', '%' . $request . '%')->orderBy('created_at', 'desc')->paginate(20);
    }
}
