<div>
    @if(session()->has('success'))
        <div class="alert alert-success mb-5 alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('success') }}
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-error alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('error') }}
        </div>
    @endif
</div>

<div x-data="{ show: true }" x-show="show"
     class="flex justify-between items-center bg-yellow-200 relative text-yellow-600 py-3 px-3 rounded-lg alert">
    <div>
        <span class="font-semibold text-yellow-700">Bummer !!!</span>
        A simple warning alert—check it out!
    </div>
    <div>
        <button type="button" @click="show = false" class=" text-yellow-700">
            <span class="text-2xl">&times;</span>
        </button>
    </div>
</div>
@section('scripts')
    <script>
        setTimeout(function () {
            $(".alert").remove();
        }, 5000); // 5 secs
    </script>
@endsection

