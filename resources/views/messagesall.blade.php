@extends('layout')

@section('title')Повідомлення@endsection

@section('main_content')
    <h1>Всі повідомлення</h1>
    @foreach($data as $el)
      <div class="alert alert-info">
          <h3>{{ $el->subject }}</h3>
          <p>{{ $el->email }}</p>
          <p><small>{{ $el->created_at }}</small></p>
          <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-dark">Детальніше</button></a>
      </div>
    @endforeach
@endsection