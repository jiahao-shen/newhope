<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'create_time',
        'start_time',
        'end_time',
        'lock_board_time',
        'owner',
        'password',
        'title',
        'description',
        'private',
        'hide_other',
    ];
    protected $hidden = [
        'password',
    ];

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'contest_user', 'contest_id', 'user_id');
    }

    public function reject_users()
    {
        return $this->belongsToMany(User::class, 'contest_reject_user', 'contest_id', 'user_id');
    }

    public function problems()
    {
        return $this->hasMany(Problem::class);
    }
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
    public function status()
    {
        return $this->hasMany(Status::class);
    }
}
