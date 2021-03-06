<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All users') }}
        </h2>
    </x-slot>

    <div class="py-12 w-50 mx-auto">
        <ul class="list-group">
            @foreach($users as $user)
                <li class="list-group-item d-flex justify-content-between align-items-center my-2">
                    <a href="{{ route('show.user', $user) }}" target="_blank">
                        {{ $user->name }}
                    </a>
                    <div class="{{ $user->isAdmin() ? 'bg-primary' : 'bg-secondary' }} text-center">
                        <a class="btn text-light rounded" href="{{ route('toggle', $user) }}" style="width: 100px !important;">
                            {{ $user->isAdmin() ? 'Admin' : 'User' }}
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
        <span class="d-block mr-auto my-4">
            {{ $users->links() }}
        </span>
    </div>
</x-app-layout>
