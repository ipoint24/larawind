@if(session()->has('impersonate'))
    <div class="bg-indigo-600">
        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
            <div class="flex items-center flex-wrap">
                <span class="flex p-2 rounded-lg text-white bg-indigo-800">
                   <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                        </path>
                    </svg>
                </span>
                <span class="ml-3 font-medium text-white ">
                    You are impersonating {{auth()->user()->name}}
                    <i class="fas fa-caret-right"></i>
                </span>
                <span class="block sm:ml-2 sm:inline-block">
                    <a href="{{route('leave-impersonation')}}" class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-indigo-800 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Leave Impersonation
                    </a>
                </span>
            </div>
        </div>
    </div>
@endif