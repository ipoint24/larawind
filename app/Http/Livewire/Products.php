<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderProduct;
use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public $orderId = 1;
    public $orderProducts;
    public $allProducts = [];
    public $selectedProducts = [];

    protected $listeners = [
        'orderSelected',
    ];

    public function loadList()
    {
        $orderId = $this->orderId;
        $products = Product::with('orders')
            ->whereHas('orders', function ($query) use ($orderId) {
                $query->where('orders.id', $orderId);
            })
            ->get();
        return $products;
    }

    public function mount()
    {
        $this->allProducts = Product::whereNotIn('id', $this->selectedProducts)->get();
        $this->orderProducts = Order::with('products')->where('id', $this->orderId)->get();
        /*
        $this->orderProducts = [
            ['product_id' => '', 'quantity' => 1]
        ];
        */
    }

    /*
    public function updatedOrderProducts($index)
    {
        $this->emit('productSelected', $index);
    }
    */
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
        $products = $this->loadList();

        return view('livewire.products.products', [
            'products' => $products
        ]);
    }
}

