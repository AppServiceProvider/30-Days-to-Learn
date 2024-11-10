<x-layout>
    <x-slot:heading>
        Create JOb
    </x-slot:heading>

    <!-- Create Employer Form -->
    <form action="{{ route('employers.store') }}" method="POST">
        @csrf
        <label for="name">Employer Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Create Employer</button>
    </form>

</x-layout>