<x-layout>
    <x-slot:heading>
        Job list
    </x-slot:heading>

    @if ($emp)
        <p><strong>ID:</strong> {{ $emp->id }}</p>
        <p><strong>Name:</strong> {{ $emp->name }}</p>
        <p><strong>Created At:</strong> {{ $emp->created_at }}</p>
        <p><strong>Updated At:</strong> {{ $emp->updated_at }}</p>
    @else
        <p>Employer data not available.</p>
    @endif

</x-layout>