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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'activation_token',
        'phone_number'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public static function userByUuid($uuid)
    {
        return static::where('activation_token', $uuid)->first();
    }

    public function role()
    {
        return $this->belongsTo(UserType::class, 'user_types_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'id', 'user_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id', 'user_id');
    }

    public function activateUser($user, $data = []) {
        $table = $this->userByUuid($user);

        if($table->user_types_id == 2) {
            $this->student()->create($data);
        }

        if($table->user_types_id == 3 || $table->user_types_id == 4) {
            $this->employee()->create($data);
        }

        $this->userByUuid($user)->update([
            'activation_token'      => '',
            'phone_number'          => $data['phone_number']
        ]);

        return false;
    }

    public function address()
    {
        return $this->hasOneThrough(User::class, Address::class, 'address_id', 'user_id', 'id', 'id');
    }
}
