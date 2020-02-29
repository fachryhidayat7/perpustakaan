@extends('frontend.templates.default')

@section('content')
<h4>Detail Buku</h4>
<div class="col sm12 m12">
    <div class="card horizontal hoverable">
        {{-- <div class="card-image"> --}}
          <img src="{{ $book->getCover() }}">
        {{-- </div> --}}
        <div class="card-stacked">
          <div class="card-content">
          <h4 class="red-text accent-2">{{$book->title}}</h4 class="red-text accent-2">
        <blockquote>
            <p>{{ $book->description }}</p>
        </blockquote>
        <blockquote>
        <p>
            Penulis : {{ $book->author->name}}
        </p>
        <p>
            Jumlah : {{ $book->qty}} Buku
        </p >
        </blockquote>
        
          </div>
          <div class="card-action">
            <a href="#" class="btn red accent-1 right waves-effect waves-light">Pinjam Buku</a>
          </div>
        </div>
      </div>
</div>

<h5>Buku lainnya dari penulis {{ $book->author->name }} ...</h5>

<div class="row">
    @foreach ($book->author->books->shuffle()->take(4) as $book)
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

@endsection