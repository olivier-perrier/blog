<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    protected $fillable = [
        'name', 'description', 'state_id', 'amount_negotiated', 'fee_negotiator_pourcent'
    ];

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

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function category()
    {
        return $this->belongsTo(Meta::class);
    }

    public function contactAddress()
    {
        return $this->belongsTo(Address::class, 'address_contact_id');
    }

    public function amount_due()
    {
        return $this->amount_negotiated * $this->fee_negotiator_pourcent / 100;
    }
}
