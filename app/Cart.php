<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model {
    
    protected $fillable = [
    	'customer_id', 'is_checkout', 'is_cancelled', 'is_abandoned'  
    ];

    public function productPrices() {
    	return $this->hasMany('App\ProductPrices', 'cart_items', 'cart_id', 'product_id');
    }

    public function customer() {
    	return $this->belongsTo('App\Customer');
    }

    public function items() {
    	return $this->belongsToMany('App\ProductPrice', 'cart_items', 'cart_id', 'product_id')->withPivot('id','quantity', 'amount');
    }
}
