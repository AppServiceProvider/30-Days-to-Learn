<x-layout>
    <x-slot:heading>
        Image Create
    </x-slot:heading>


    <!-- Form for adding a new photo -->
    <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Photo Title -->
        <div class="form-group mb-3">
            <label for="title">Photo Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter photo title" >
        </div>

        <!-- Photo Upload -->
        <div class="form-group mb-3">
            <label for="image">Photo</label>
            <input type="file" name="image_path" class="form-control">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Upload Photo</button>
        <a href="{{ route('photos.index') }}" class="btn btn-secondary">Back to Gallery</a>
    </form>
</div>

</x-layout>


