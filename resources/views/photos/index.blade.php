<x-layout>
    <x-slot:heading>
        Image Page
    </x-slot:heading>


        @forelse($photos as $photo)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <a href="{{ asset('storage/' . $photo->image_path) }}">
                    <img src="{{ asset('storage/' . $photo->image_path) }}" class="card-img-top" alt="{{ $photo->title }}">
                    </a>          
                    <div class="card-body">
                        <h5 class="card-title">{{ $photo->title }}</h5>
                        <a href="{{ route('photos.show', $photo) }}" class="btn btn-info">View</a>
                        <a href="{{ route('photos.edit', $photo) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('photos.destroy', $photo) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p>No photos available. <a href="{{ route('photos.create') }}">Add one now!</a></p>
        @endforelse
    


</x-layout>
