@extends('../layout.main')

@section('page-title')
    Add Author
@endsection

@section('header-title')
    <h2 class="mt-5 mb-4">Add a new author</h2>
@endsection

@section('header-content-menu')
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection

@section('main-content')
    <section class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('authors.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="date_of_birth" class="form-label">Date of birth</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                    @error('date_of_birth') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </section>
@endsection
