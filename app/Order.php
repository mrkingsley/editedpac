<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    public function suppliers()
    {
        return $this->belongsTo(Supplier::class, 'suppliers_id');
    }
    public function products()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

}
