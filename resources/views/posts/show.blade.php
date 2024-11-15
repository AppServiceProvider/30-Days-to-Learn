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
            @foreach ($post->tags as $value)
                <tr>
                    <td>{{$value->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    
</x-layout>
