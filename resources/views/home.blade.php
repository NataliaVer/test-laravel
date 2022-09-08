@extends('layout')

@section('title')Головна@endsection

@section('main_content')
    <main class="container">
    	<div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Тренер, спортсмен, блогер</h1>
      <p class="lead my-3">#aerialist #aerialskils #aerialstraps # aerialhoop</p>
      <p class="lead mb-0"><a href="/about" class="text-white fw-bold">Докладніше...</a></p>
    </div>
  </div>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      	<?php
          for($i = 0; $i < 6; $i++):
        ?>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><img src="/img/<?php echo ($i + 1) ?>.jpg" width="100%" height="100%"></svg>

            <div class="card-body">
              <p class="card-text">Тут текст буде братись з бази данних по найближчим подіям і через цикл буде виводитись.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Переглянути подію</button>
                </div>
                <small class="text-muted">Дата</small>
              </div>
            </div>
          </div>
        </div>
       <?php endfor; ?> 
      </div>
    </div>
  </div>
    </main>
@endsection