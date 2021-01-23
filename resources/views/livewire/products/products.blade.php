<div>
    <button wire:click="addProduct()"
            class="bg-indigo-400 hover:bg-indigo-700 text-gray-200 py-1 px-3 rounded my-3">
        + Add Product
    </button>

    SelectedProducts: {{count($selectedProducts)}}
    <select wire:model="activeProduct">
        <option value="">-- choose product --</option>
        @foreach ($allProducts as $product)
            <option value="{{ $product->id }}">
                {{ $product->name }} (${{ number_format($product->price, 2) }})
            </option>
        @endforeach
    </select>
    Active Product : {{$activeProduct }}
    <table class="table-auto w-full text-left" id="products_table">
        <thead>
        <tr class="bg-gray-100">
            <th class="px-4 py-2 border">Product</th>
            <th class="px-4 py-2 border">Price</th>
            <th class="px-4 py-2 border">Quantity</th>
            <th class="px-4 py-2 border">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $prod)
            <tr>
                <td>{{$prod->name}}</td>
                <td>{{ number_format($prod->price, 2) }}</td>
                <td>
                    @if(!isEditing)
                        {{$prod->pivot->quantity}}
                    @else
                        input
                    @endif
                </td>
                <td>
                    <button wire:click="removeProduct({{$prod->id}})"
                            class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Remove
                    </button>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
