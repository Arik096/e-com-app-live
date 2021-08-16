<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Illuminate\Support\Facades\DB;


class Products extends Component
{
    public function render()
    {
        $products = DB::table('products')
            ->get();
        return view('livewire.product.products', ['products' => $products]);
    }
}
