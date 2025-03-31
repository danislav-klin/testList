<x-layout>
    <h1 class="text-center my-4">All tasks</h1>
    <div class="text-center">
        <a href="{{ route('index') }}" class="my-3 ">back out</a>
        
    </div>
    <div class="container">

        <div class="d-flex mt-5">
            @foreach ($tasks as $task)
                <div class="card mx-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $task->title }}</h5>
                        <p class="card-text">{{ $task->description }}</p>
                        @if (($task->status) == true)
                            <p class="card-text">status: executed</p>
                        @else
                            <p class="card-text">status: execute</p>
                        @endif
                        
                        <a href="{{ route('show', $task->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</x-layout>