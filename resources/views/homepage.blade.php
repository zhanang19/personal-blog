<x-blog-layout>
    <div class="mt-8 bg-white overflow-hidden">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            @foreach ($posts as $post)
                <div class="p-4 space-y-2 border rounded-md" title="{{ $post->title }}">
                    <h3 class="inline-flex text-gray-900 text-lg font-semibold truncate">
                        {{ $post->title }}
                    </h3>
                    <time class="block text-xs" datetime="{{ $post->created_at->format('Y-m-d') }}">
                        {{ $post->created_at->format('d F Y') }}
                    </time>
                    <div class="text-gray-600 text-sm">
                        {!! $post->excerpt !!}
                    </div>
                    <a href="{{ route('blog.show', $post) }}" class="px-0.5 py-1 text-gray-900 rounded text-xs font-semibold hover:underline focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300">
                        Read More
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mt-6">
        {!! $posts->links() !!}
    </div>
</x-guest-layout>
