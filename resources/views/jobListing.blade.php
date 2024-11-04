<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    
    <h1>Job Listings</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Employer ID</th>
                <th>Title</th>
                <th>Salary</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobListings as $jobListing)
                <tr>
                    <td>{{ $jobListing->id }}</td>
                    <td>
                        <a href="/jobListing/{{ $jobListing['employer_id'] }}">
                            <strong>{{$jobListing->employer_id}}</strong>
                        </a>
                    </td>
                    <td>{{ $jobListing->employer->name }}</td>
                    <td>{{ $jobListing->title }}</td>
                    <td>{{ $jobListing->salary }}</td>
                    <td>{{ $jobListing->created_at }}</td>
                    <td>{{ $jobListing->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>
