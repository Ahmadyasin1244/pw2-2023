<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $users = [
        [
            'no' => 1,
            'nama' => 'Ahmad yasin',
            'username' => 'Yasin',
            'password' => 'ahmad123',
            'email' => 'ahmadyasin111@gmail.com',
            'role' => 'Media',
        ],
        [
            'no' => 2,
            'nama' => 'Riski Hidayat',
            'username' => 'Riski',
            'password' => 'riski123',
            'email' => 'riski1234@gmail.com',
            'role' => 'Administrator',
        ],
        [
            'no' => 3,
            'nama' => 'Iwanda Aulia',
            'username' => 'Wanda',
            'password' => 'wanda123',
            'email' => 'wanda11122@gmail.com',
            'role' => 'User',
        ],
        [
            'no' => 4,
            'nama' => 'Reza pahlevi',
            'username' => 'Reza',
            'password' => 'reza11122',
            'email' => 'reza889@gmail.com',
            'role' => 'User',
        ],
        [
            'no' => 5,
            'nama' => 'Bamba gusniara',
            'username' => 'bamba',
            'password' => 'bamba555',
            'email' => 'bamba5533@gmail.com',
            'role' => 'User',
        ],
    ];

    public function getAllUsers()
    {
        return $this->users;
    }
}
