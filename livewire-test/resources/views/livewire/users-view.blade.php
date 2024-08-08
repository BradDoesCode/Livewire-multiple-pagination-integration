<div>
    @foreach ($users as $user)
        <div wire:key="{{ $user->id }}" class="p-4 bg-slate-100 rounded shadow-md">
            <h1 class="text-xl font-bold">{{ $user->name }}</h1>
            <p class="text-gray-600">{{ $user->email }}</p>
        </div>
    @endforeach

    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>
