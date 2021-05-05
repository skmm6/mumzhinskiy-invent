
<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('home')}}" class="nav-link px-2 text-white">Главная</a></li>
        {{-- <li><a href="{{ route('about')}}" class="nav-link px-2 text-white">Про нас</a></li> --}}
        <li><a  href="{{ route('contact')}}" class="nav-link px-2 text-white">Добавить оборудование</a></li>
        <li><a href="{{ route('contact-data')}}" class="nav-link px-2 text-white">Список оборудования</a></li>
      </ul>
    </div>
  </div>
</header>