<!doctype html>
<html lang="en">
@include('layouts.partials.head')
<body class="bg-gray-100">
@include('layouts.partials.navbar')
<!-- start wrapper -->
<div class="h-screen flex flex-row flex-wrap">
@include('layouts.partials.sidebar')
<!-- content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <div>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
            clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
            consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
            sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
            sea takimata sanctus est Lorem ipsum dolor sit amet.
        </div>
        <ul>
            <li>flash</li>
            <li>breadcrubs</li>
        </ul>
        <main>
            Content
            @include('layouts.examples.test')
        </main>
    </div>
</div>

@include('layouts.partials.footer')
</body>
</html>
