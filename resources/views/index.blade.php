<x-layout>
    <h1 class="text-center my-5">{{ config('app.name') }}</h1>

    <div class="text-center">
        <a href="{{ route('view_all') }}" class="my-3 ">look all tasks</a>
        
    </div>
    <div class="container">
        <form class="w-50 mx-auto" action="{{ route('store') }}" method="POST">
            @csrf
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
              <label for="title" class="form-label">title</label>
              <input name="title" type="text" class="form-control" id="title">
              
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea name="description" class="form-control" id="description" rows="3"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    

</x-layout>