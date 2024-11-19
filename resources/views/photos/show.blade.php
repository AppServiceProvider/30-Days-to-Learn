<x-layout>
    <x-slot:heading>
        Image Page
    </x-slot:heading>
        <div class="container">
            <h1 class="mb-4">{{ $photo->title }}</h1>

            <!-- Display the photo -->
            <div class="mb-3">
                <img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->title }}" class="img-fluid rounded">
            </div>

            <!-- Back and Edit/Delete buttons -->
            <div>
                <a href="{{ route('photos.index') }}" class="btn btn-secondary">Back to Gallery</a>
                <a href="{{ route('photos.edit', $photo) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('photos.destroy', $photo) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this photo?')">Delete</button>
                </form>
            </div>
        </div>
</x-layout>
