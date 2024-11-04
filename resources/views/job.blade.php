<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>


    {{-- <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

    <p>
        This job pays {{ $job['salary'] }} per year.
    </p> --}}

    @foreach ($jobs as $job)
    <h3>Job Title: {{ $job->title }}</h3>
    <p>Employer name: {{ $job->employer->id }}</p> 
    <p>Employer name: {{ $job->employer->name }}</p> 
    <p>created_at: {{ $job->employer->created_at }}</p>
    <p>created_at: {{ $job->employer->updated_at }}</p>

    <hr>
    @endforeach
</x-layout>
