<div>
    @foreach ($blogPosts as $post)
        <div wire:key="{{$post->id}}" class="p-4 bg-slate-100 rounded shadow-md">
            <h1 class="text-xl font-bold">{{ $post->title }}</h1>
            <p class="text-gray-600 line-clamp-2">{{ $post->content }}</p>
        </div>
    @endforeach

    <div class="mt-4">
        {{ $blogPosts->links() }}
    </div>
</div>
