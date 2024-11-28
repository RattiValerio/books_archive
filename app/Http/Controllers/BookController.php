<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|Factory|Application
    {
        $books = Book::with('author', 'category')->get();
        return view('book.list-books', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|Factory|Application
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('book.add-book', compact('authors','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request) : RedirectResponse
    {
        Book::create($request->validated());
        return redirect()->route('books.index')->with('success', 'Book added correctly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book): View
    {
        $book->load('author', 'category');
        return view('book.show-book', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book): View|Factory|Application
    {
        $authors = Author::all();
        $categories = Category::all();
        $book->load('author', 'category');
        return view('book.edit-book', compact('book','authors','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book): RedirectResponse
    {
        $book->update($request->validated());
        return redirect()->route('books.index')->with('success', 'Book updated correctly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book) : RedirectResponse
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted correctly');
    }
}
