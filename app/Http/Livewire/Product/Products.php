<?php

namespace App\Http\Livewire\Product;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        $products = DB::table('products')
        ->get();
        return view('livewire.product.products',['products'=>$products]);
    }
}
