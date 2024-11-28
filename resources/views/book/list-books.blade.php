@extends('../layout.main')

@section('page-title')
    My Books
@endsection

@section('header-title')
    <h2 class="mt-5 mb-4">My Books</h2>
@endsection

@section('header-content-menu')
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Books</a>
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">Authors</a>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Categories</a>
    </div>
@endsection

@section('header-content-add')
    <a href="{{route('books.create')}}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add a book</a>
@endsection

@section('main-content')
    <section class="row">
        @forelse($books as $book)
            @include('book.partial.book-block')
        @empty
            <p>No books found.</p>
        @endforelse
    </section>
@endsection
