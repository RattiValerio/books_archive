@extends('../layout.main')

@section('page-title')
    Categories
@endsection

@section('header-title')
    <h2 class="mt-5 mb-4">Categories</h2>
@endsection

@section('header-content-menu')
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Books</a>
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">Authors</a>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Categories</a>
    </div>
@endsection

@section('header-content-add')
    <a href="{{route('categories.create')}}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add a category</a>
@endsection

@section('main-content')
    <section class="row">
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col" class="w-auto">#</th>
                    <th scope="col" class="w-50">Category</th>
                    <th scope="col" class="w-auto text-end">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($categories as $index => $category)
                        @include('category.partial.category-block')
                    @empty
                        <p>No authors found.</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
