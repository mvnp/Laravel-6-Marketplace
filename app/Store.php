<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['name', 'description', 'phone', 'mobile_phone', 'slug', 'logo'];

    /**
     * Relacionamento de lojas e usuários
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relacionamento de lojas e produtos
     *
     * @return void
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }    
}