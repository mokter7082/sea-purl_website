<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Munu extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'link',
        'status',
    ];

    public function subMenus()
    {
        return $this->hasMany('App\Models\SubMenu')->where('status','Active');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
