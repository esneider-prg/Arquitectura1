<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'permissions', 'trial_ends_at', 'id'
    ];

    protected $primaryKey = 'id';
    public $incrementing = false;

    public function myStoryTrainings()
    {
        return $this->hasMany(MyStoryTraining::class);
    }

    public function learningPathUsers()
    {
        return $this->hasMany(LearningPathUser::class);
    }

    public function rentedProductions()
    {
        return $this->hasMany(RentedProduction::class);
    }
   
}
