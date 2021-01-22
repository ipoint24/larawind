<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public $orderProducts = [];
    public $allProducts = [];
    public $selectedProducts = [];

    protected $listeners = [
        'productSelected',
    ];

    public function mount()
    {
        $this->allProducts = Product::whereNotIn('id', $this->selectedProducts)->get();
        $this->orderProducts = [
            ['product_id' => '', 'quantity' => 1]
        ];
    }

    public function updatedOrderProducts($index)
    {
        $this->emit('productSelected', $index);
    }

    public function productSelected($productId)
    {
        array_push($this->selectedProducts, $productId);
        // dd($this->selectedProducts);
        // wire:change="$emit('productSelected',{{$product->id}})"
    }

    public function addProduct()
    {
        $this->orderProducts[] = ['product_id' => '', 'quantity' => 1];
    }

    public function removeProduct($index)
    {
        unset($this->orderProducts[$index]);
        $this->orderProducts = array_values($this->orderProducts);
    }

    public function render()
    {
        //info($this->orderProducts);

        return view('livewire.products.products');
    }
}

