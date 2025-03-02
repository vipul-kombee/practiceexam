<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Role;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'contact_number', 
        'postcode', 'password', 'gender', 'state_id', 'city_id', 
        'roles', 'hobbies', 'uploaded_files',
    ];

    protected $casts = [
        'roles' => 'array',
        'hobbies' => 'array',
        'uploaded_files' => 'array',
    ];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function assignRole($role)
    {
        return $this->roles()->attach($role);
    }

    public function removeRole($role)
    {
        return $this->roles()->detach($role);
    }
    public function city() { return $this->belongsTo(City::class); }
    public function state() { return $this->belongsTo(State::class); }
}

// This is the complete working code for data till login 
// namespace App\Models;

// // use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Laravel\Passport\HasApiTokens;
// use Illuminate\Database\Eloquent\Relations\BelongsToMany;
// use App\Models\Role;

// class User extends Authenticatable
// {
//     /** @use HasFactory<\Database\Factories\UserFactory> */
//     use HasApiTokens,  Notifiable;
//     //HasFactory,

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var list<string>
//      */
    



//      protected $fillable = [
//         'first_name', 'last_name', 'email', 'contact_number', 'postcode',
//         'password', 'gender', 'state_id', 'city_id', 'roles', 'hobbies', 'uploaded_files'
//     ];

//     protected $casts = [
//         'roles' => 'array',
//         'hobbies' => 'array',
//         'uploaded_files' => 'array',
//     ];
 
//      public function city() { return $this->belongsTo(City::class); }
//      public function state() { return $this->belongsTo(State::class); }
//     //  public function roles()
//     // {
//     //     return $this->belongsToMany(Role::class, 'role_user');
//     // }




//     /**
//      * The attributes that should be hidden for serialization.
//      *
//      * @var list<string>
//      */
//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

//     /**
//      * Get the attributes that should be cast.
//      *
//      * @return array<string, string>
//      */
//     protected function casts(): array
//     {
//         return [
//             'email_verified_at' => 'datetime',
//             'password' => 'hashed',
//         ];
//     }
//     // app/Models/User.php
//     // public function roles()
//     // {
//     //     return $this->belongsToMany(Role::class, 'role_user');
//     // }
//     // app/Models/User.php

//     public function customRoles()
//     {
//         return $this->belongsToMany(CustomRole::class, 'custom_role_user');
//     }
//     public function roles():BelongsToMany
//     {
//         return $this->belongsToMany(Role::class, 'role_user');
//     }
//     // public function assignRole($role)
//     // {
//     //     $this->roles()->attach($role);
//     // }

//     // public function removeRole($role)
//     // {
//     //     $this->roles()->detach($role);
//     // }


// }
