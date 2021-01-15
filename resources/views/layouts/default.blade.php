
    @include('layouts.partials.head')
    @include('layouts.partials.navbar')


    <!-- strat wrapper -->
        <div class="h-screen flex flex-row flex-wrap">

        @include('layouts.partials.sidebar')

        <!-- strat content -->
        <main>
            {{$slot}}
        </main>
        <!-- end content -->

        </div>
        <!-- end wrapper -->

        @include('layouts.partials.footer')

