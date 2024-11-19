<x-layout>
    <x-slot:heading>
        Image Create
    </x-slot:heading>
<div class="container">
    <h1 class="mb-4">Edit Photo</h1>

    <!-- Edit Photo Form -->
    <form action="{{ route('photos.update', $photo) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Photo Title -->
        <div class="form-group mb-3">
            <label for="title">Photo Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $photo->title) }}" required>
        </div>

        <!-- Existing Photo -->
        <div class="form-group mb-3">
            <label>Current Photo</label>
            <div>
                <img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->title }}" class="img-fluid rounded" style="max-width: 200px;">
            </div>
        </div>

        <!-- New Photo Upload -->
        <div class="form-group mb-3">
            <label for="image">Replace Photo (Optional)</label>
            <input type="file" name="image_path" id="image" class="form-control">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">Update Photo</button>
        <a href="{{ route('photos.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</x-layout>
