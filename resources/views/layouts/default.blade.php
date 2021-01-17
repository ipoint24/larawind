@include('layouts.partials.head')
@include('layouts.partials.navbar')

<!-- start wrapper -->
<div class="h-screen flex flex-row flex-wrap">
@include('layouts.partials.sidebar')
<!-- content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <ul>
            <li>flash</li>
            <li>breadcrubs</li>
        </ul>
        <main>
            Content
        </main>
    </div>
</div>

@include('layouts.partials.footer')
