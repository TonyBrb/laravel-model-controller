<header class="container">
  <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Route::currentRouteName() === 'film') ? 'active' : '' }}" href="{{ route('film') }}">Film</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Route::currentRouteName() === 'contacts') ? 'active' : '' }}" href="{{ route('contacts') }}">Contatti</a>
      </li>
  </ul>
</header>