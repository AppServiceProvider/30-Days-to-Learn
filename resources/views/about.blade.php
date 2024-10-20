<x-layout>
    <x-slot:heading>
        About Page
    </x-slot:heading>



    @foreach ($jobs as $job)
        <li> {{$job['title']}} per year ${{$job['salary']}}</li>
    @endforeach
</x-layout>
