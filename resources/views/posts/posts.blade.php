<x-layout>
    <x-slot:heading>
        Contract Page
    </x-slot:heading>

    <table>
        <thead>
            <tr>
                <th>Post ID</th>
                <th>Title</th>
                <th>Tags</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td><a href="/posts/{{ $post->id }}">{{ $post->id }}</a></td>
                    <td>{{ $post->title }}</td>
                    <td>
                        @foreach ($post->tags as $tag)
                            {{ $tag->name }} <!-- Display tag name -->
                            @if (!$loop->last) <!-- Add a comma if it's not the last tag -->
                                ,
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    
</x-layout>
