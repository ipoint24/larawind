<div>
    @livewire('orders')
    <table class="table" id="products_table">
        <thead>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($orderProducts as $index => $orderProduct)
            <tr>
                <td>
                    <select name="orderProducts[{{$index}}][product_id]"
                            wire:model="orderProducts.{{$index}}.product_id"
                            class="form-control">
                        <option value="">-- choose product --</option>
                        @foreach ($allProducts as $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }} (${{ number_format($product->price, 2) }})
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <input type="number"
                           name="orderProducts[{{$index}}][quantity]"
                           class="form-control"
                           wire:model="orderProducts.{{$index}}.quantity"/>
                </td>
                <td>
                    <a href="#" wire:click.prevent="removeProduct({{$index}})">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-sm btn-secondary"
                    wire:click.prevent="addProduct">+ Add Another Product
            </button>
        </div>
    </div>
</div>
