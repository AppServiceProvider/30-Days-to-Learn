<x-layout>
    <x-slot:heading>
        Edit Employer
    </x-slot:heading>

    <h1>Edit Employer Details</h1>

    <!-- Display any validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/employers/{{ $employer->id }}/update" method="POST">
        @csrf

        <div>
            <label for="name">Employer Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $employer->name) }}" required>
        </div>

        <div>
            <label for="salary">Salary:</label>
            <input type="number" id="salary" name="salary" value="{{ old('salary', $employer->salary) }}" required>
        </div>

        <button type="submit">Update Employer</button>
    </form>

    <a href="/employers/{{ $employer->id }}">Cancel</a>
</x-layout>
