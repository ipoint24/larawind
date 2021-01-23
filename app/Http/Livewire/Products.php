<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderProduct;
use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public $orderId = 0;
    public $orderProducts = [];
    public $products;
    public $allProducts = [];
    public $selectedProducts = [];
    public $activeProduct;

    protected $listeners = [
        'orderSelected',
    ];

    public function mount()
    {

    }

    public function loadList()
    {
        $order = Order::with('products')->find($this->orderId);
        if ($order) {
            $this->products = $order->products;
            $this->selectedProducts = $order->products->pluck('id')->toArray();
        } else {
            $this->products = collect();
        }
        $this->allProducts = Product::orderBy('name')
            ->whereNotIn('id', $this->selectedProducts)
            ->get();
        return $this->products;
    }

    public function orderSelected($orderId)
    {
        $this->orderId = $orderId;
    }

    public function activeProduct($productId)
    {
        $this->activeProduct = $productId;
    }

    public function addProduct()
    {
        if ($this->orderId > 0) {
            $ord = Order::find($this->orderId);
            $ord->products()->attach($this->activeProduct, ['quantity' => 1]);
        }
    }

    public function removeProduct($id)
    {
        if ($this->orderId > 0) {
            $ord = Order::find($this->orderId);
            $ord->products()->detach($id);
        }
    }

    public function render()
    {
        $this->products = $this->loadList();

        return view('livewire.products.products', [

        ]);
    }
}

