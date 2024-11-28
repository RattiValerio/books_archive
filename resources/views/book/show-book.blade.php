@extends('../layout.main')

@section('page-title')
    {{ $book->title }}
@endsection

@section('header-title')

@endsection

@section('header-content-menu')
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{route('books.index')}}" class="btn btn-secondary">Books</a>
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">Authors</a>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Categories</a>
    </div>
@endsection

@section('header-content-add')
@endsection

@section('main-content')
    <article class="detail-book row py-3 px-1 rounded-4">
{{--        <div class="col-md-4">--}}
{{--            <figure>--}}
{{--                <img src="img/no-cover.webp" class="rounded" alt="Titolo Libro">--}}
{{--            </figure>--}}
{{--        </div>--}}
        <div class="col-md-4">
            <h2 class="mb-3">{{ $book->title }}</h2>
            <div>
                <p>{{ $book->description ? $book->description : 'No description available' }}</p>
            </div>
            <div class="border-top mt-2 pt-3">
                <span class="badge text-bg-secondary">{{ $book->author->name }}</span>
                <span class="badge text-bg-secondary">{{ $book->category->name }}</span>
                @if($book->pages)
                    <span class="badge text-bg-secondary">{{ $book->pages }} pages</span>
                @endif
            </div>
        </div>
    </article>
@endsection
