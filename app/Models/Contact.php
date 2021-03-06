<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class  Contact extends Model
{
    use HasFactory;
    use Searchable;

    protected $table = 'contacts';

    protected $fillable = [
        'name', 'email', 'birthday', 'company', 'user_id'
    ];

    /*protected $hidden = [
        'created_at','updated_at','id'
    ];*/


    protected $dates = [
        'birthday'
    ];


    public function setBirthdayAttribute($birthday)
    {
        $this->attributes['birthday'] = Carbon::parse($birthday);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function path()
    {
        return '/contacts/' . $this->id;
    }

    public function scopeBirthdays($query)
    {
        return $query->whereRaw('birthday like "%-' . now()->format('m') . '-%"');
    }
}
