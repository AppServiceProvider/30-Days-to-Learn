<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

    @if(isset($employer))
            <!-- Single Employer Details -->
            <h1>{{ $employer->name }} Employer Details</h2>
                <form action="/employers/{{ $employer->id }}/update" method="POST">
                    @csrf
                    <div>
                        <label for="name">Employer Name:</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $employer->name) }}" required>
                    </div>
                    <button type="submit">Update Employer</button>
                </form>
        <a href="/employers">Back to</a>
    @else
    <h1>All Employers </h1>
    
    <a href="/employers/create">Create</a>
    
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Employer Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employers as $employer)
                    <tr>
                        <td>
                            <a href="/employers/{{ $employer->id }}">
                                <strong>{{ $employer->id }}</strong>
                            </a>
                        </td>
                        <td>{{ $employer->name }}</td>
                        <td>{{ $employer->created_at }}</td>
                        <td>{{ $employer->updated_at }}</td>
                        <td>
                                                                            <!-- Delete Employer Form -->
                            <form action="{{ route('employers.destroy', $employer->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this employer?')">
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</x-layout>