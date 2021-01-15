
    @include('layouts.partials.head')
    @include('layouts.partials.navbar')


    <!-- strat wrapper -->
    <div class="h-screen flex flex-row flex-wrap">

    @include('layouts.partials.sidebar')

    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        Breadcrumbs
        <main>
            {{$slot}}
        </main>
    </div>
    <!-- end content -->

    </div>
    <!-- end wrapper -->

    @include('layouts.partials.footer')

