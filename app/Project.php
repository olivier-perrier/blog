<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    protected $fillable = ['name', 'description'];

     /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'state_id' => 1,
    ];

    public function client()
    {
        return $this->belongsTo(User::class);
    }

    public function negotiator()
    {
        return $this->belongsTo(User::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function contactAddress()
    {
        return $this->belongsTo(Address::class, 'address_contact_id');
    }

   
}