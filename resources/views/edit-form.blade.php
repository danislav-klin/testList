<x-layout>
    <h1 class="text-center my-4">Edit</h1>
    <div class="text-center">
        <a href="{{ route('view_all') }}" class="my-3 ">back out</a>

    </div>
    <div class="container">
        <form class="w-50 mx-auto" action="{{ route('update', $task->id) }}" method="POST">
            @method('PUT')
            @csrf
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input name="title" type="text" class="form-control" id="title" value="{{ $task->title }}">

            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea name="description" class="form-control" id="description" rows="3">{{ $task->description }}</textarea>
            </div>

            @error('status')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <div class="form-check">
                <input class="form-check-input" value="0" type="radio" name="status" id="status1" checked>
                <label class="form-check-label" for="status1">
                    execute
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="1" type="radio" name="status" id="status2">
                <label class="form-check-label" for="status2">
                    executed
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>


        </form>
        <form class="w-50 mx-auto my-3" action="{{ route('delete', $task->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>

</x-layout>
