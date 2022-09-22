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
                <div class="card">
                    <div class="card-header">
                        <h3>Створити пост</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('posts-update', $post->id) }}"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="tile-body">
                                <div class="form-group">
                                    <label class="control-label">Заголовок</label>
                                    <input name="title" class="form-control" type="text" required=""  value="{{ $post->title }}">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Зміст</label>
                                    <textarea name="content" class="form-control" rows="4">{{ $post->content }}</textarea>
                                </div>
                                <div class="form-group">
                                    <img src="{{$post->getFirstMediaUrl('images', 'thumb')}}" class="mt-2 mb-3" />
                                    <label class="control-label">Фото</label>
                                    <input name="image" type="file" class="form-control-file" id="image">
                                </div>
                            </div>
                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-lg fa-check-circle"></i>Додати
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script_calendar')

  <livewire:scripts />

@endsection