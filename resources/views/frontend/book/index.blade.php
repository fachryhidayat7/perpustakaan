@extends('frontend.templates.default')
@section('content')
    <h2>Koleksi Buku</h2>
    <blockquote>
        Koleksi buku yang dapat kamu pinjam
    </blockquote>
    <div class="row">
        @foreach ($books as $book)
        <div class="col sm12 m6">
            <div class="card horizontal hoverable">
                <div class="card-image">
                  <img src="{{ $book->getCover() }}" style="height:200px;">
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                  <h6><a href="{{ route('book.show', $book)}}">
                    {{ Str::limit($book->title, 20) }}</a></h6>
                    <p>{{ Str::limit($book->description, 100) }}</p>
                  </div>
                  <div class="card-action">
                    <a href="#" class="btn red accent-1 right waves-effect waves-light">Pinjam Buku</a>
                  </div>
                </div>
              </div>
        </div>
        @endforeach
    </div>
    {{ $books->links('vendor/pagination/materialize') }}
@endsection