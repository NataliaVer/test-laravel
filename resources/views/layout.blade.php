<!DOCTYPE html>
<html lang="ua">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

  @yield('heade_script')

</head>
<body>
  <header class="site-header sticky-top py-1 bg-light">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
    
    <a class="py-2 d-none d-md-inline-block text-dark" href="{{route('home')}}">Головна</a>
    <a class="py-2 d-none d-md-inline-block text-dark" href="/about">Про нас</a>
    <a class="py-2 d-none d-md-inline-block text-dark" href="/contacts">Контакти</a>
    <a class="py-2 d-none d-md-inline-block text-dark" href="{{route('blog-all')}}">Блог</a>
    <a class="py-2 d-none d-md-inline-block text-dark" href="/calendar">Календар</a>
    <a class="btn btn-outline-secondary" href="{{route('contact-data')}}">Відгуки</a>
  </nav>
</header>

<div class="container">
  @include('messages')
  @yield('main_content')
</div>

<footer class="text-muted py-5">
  <div class="container">
    <p class="mb-1">Розмітку взято з © Bootstrap</p>
    <p class="mb-0">Є питання? <a href="/contacts">Напишіть нам</a> або перейдіть <a href="/">на головну</a>.</p>
  </div>
</footer>

@yield('script_calendar')

</body>
</html>