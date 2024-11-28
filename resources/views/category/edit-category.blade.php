@extends('../layout.main')

@section('page-title')
    Edit Category: {{ $category->name }}
@endsection

@section('header-title')
    <h2 class="mt-5 mb-4">Edit category</h2>
@endsection

@section('header-content-menu')
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection

@section('main-content')
    <section class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
                    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </section>
@endsection
