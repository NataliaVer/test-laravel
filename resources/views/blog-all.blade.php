@extends('layout')

@section('title')Блог@endsection

@section('heade_script')

  <livewire:styles />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.min.js" defer></script>

@endsection

@section('main_content')
    <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="col-md-auto mt-5">
                <a href="{{ route('create') }}" class="btn btn-success" >Додати</a>
                <div class="col-md-12">
                 @foreach($posts as $post)
                        <div class="card mt-5" >
                            <img src="{{$post->getFirstMediaUrl('images')}}" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text"> {{ $post->content }}</p>
                                <a href="{{ route('edit', $post->id) }}" class="btn  btn-info" >Редагувати</a>
                            </div>
                        </div>
                 @endforeach
                </div>
            </div>
        </div>
@endsection

@section('script_calendar')

  <livewire:scripts />

@endsection