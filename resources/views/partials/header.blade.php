<header>
    <div class="header-container">
      <div class="logo">
        <h1>Boolflix</h1>
      </div>
      <div class="list-gender">
        <ul>
            <li><a @if(Route::currentRouteName()=='home' ) class="active" @endif href="{{ route('home') }}">HOME</a></li>
            <li><a href="{{ route('emptyPage') }}">FILM</a></li>
            <li><a href="{{ route('emptyPage') }}">SERIE TV</a></li>
        </ul>
      </div>
      <div class="search-bar w-25 d-flex gap-2">
        <input class="w-100" type="text" placeholder="Inserisci titolo film/serie Tv"/>
        <button class="btn">Cerca</button>
      </div>
    </div>
  </header>