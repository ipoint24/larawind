<div>
    <div class="grid gap-2 md:grid-cols-2 xl:grid-cols-4">
        <div class="justify-center">
            <button wire:click="create()"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-4 rounded-lg mt-4">
                Create New User
            </button>
        </div>
        <div>
            <button wire:click="create()"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-4 rounded-lg mt-4">
                Create New User
            </button>
        </div>
        <div>
            <button wire:click="create()"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-4 rounded-lg mt-4">
                Create New User
            </button>
        </div>
        <div>
            <button wire:click="create()"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-4 rounded-lg mt-4">
                Create New User
            </button>
        </div>

    </div>

<div class="mb-8 w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">




    <table class="w-full whitespace-no-wrap">
        <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">No.</th>
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3r">E-Mail</th>
                <th class="px-4 py-3">Roles</th>
                <th class="px-4 py-3">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
        @foreach($users as $user)
            <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                    <div class="flex items-center text-sm">
                        <!-- Avatar with inset shadow -->
                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                            <img class="object-cover w-full h-full rounded-full" src="{{$user->profile_photo_url}}">
                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                        </div>
                    </div>
                </td>
                <td class="px-4 py-3 text-sm">
                    <div>
                        <span>{{$user->name}} (#{{$user->id}})</span>
                        @if(auth()->user()->id <> $user->id and auth()->user()->hasRole(1))
                            <a wire:click="impersonate({{$user->id}})" href="#" class="text-xs text-indigo-600">IMP</a>
                        @endif
                    </div>
                </td>
                <td class="px-4 py-3 text-sm">{{$user->email}}</td>
                <td class="px-4 py-3 text-sm">

                    @if(!empty($user->getRoleNames()))
                        <ol>
                            @foreach($user->getRoleNames() as $v)
                                <li>{{ $v }}</li>
                            @endforeach
                        </ol>
                    @endif
                </td>
                <td class="px-4 py-3 text-sm">
                    <div class="inline-block whitespace-no-wrap">
                        <button wire:click="edit({{ $user->id }})"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
                            <i class="fas fa-edit"></i>
                        </button>
                        @if($confirming===$user->id)
                            <button wire:click="delete({{ $user->id  }})"
                                    class="bg-red-800 text-white w-32 px-2 py-1 hover:bg-red-600 rounded border">
                                Sure?
                            </button>
                        @else
                            <button
                                    wire:click="confirmDelete({{ $user->id }})"
                                    class="bg-gray-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                <i class="fas fa-trash"></i>
                            </button>
                        @endif
                    </div>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
    {{ $users->links('components.pagination',['is_livewire' => true]) }}
</div>
</div>
</div>