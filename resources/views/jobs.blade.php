<x-layout>
    <x-slot:heading>
        Job list
    </x-slot:heading>




    {{-- @foreach ($jobs as $job)
    <li> 
        <a href="/jobs/1">
            {{$job['title']}} per year ${{$job['salary']}}
        </a>
    </li>
    @endforeach  --}}




    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>


    
</x-layout>
