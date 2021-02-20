<div class="px-4 py-3 mb-2 bg-gray-50 dark:bg-gray-900">
    <ol class="flex">
        @if(Breadcrumbs::has())
            @foreach (Breadcrumbs::current() as $crumbs)
                @if ($crumbs->url() && !$loop->last)
                    <li class="mx-1">
                        <a class="mb-3 text-blue-600 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500"
                           href="{{ $crumbs->url() }}">
                            {{ $crumbs->title() }}
                        </a>
                        <span class="mx-1 text-xs text-gray-600"> <i class="fas fa-caret-right"></i> </span>
                    </li>
                @else
                    <li class="">
                        <span
                            class="mb-3 capitalize text-teal-600 font-medium text-sm ">{{ $crumbs->title() }}</span>
                    </li>
                @endif
            @endforeach
        @endif
    </ol>
</div>