<div>
    @if(session()->has('success'))
        <div class="alert alert-success mb-5 ">
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
    @if(session()->has('info'))
        <div class="alert alert-error alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('error') }}
        </div>
    @endif
</div>

@section('scripts')
    <script>

    </script>
@endsection
