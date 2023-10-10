
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="/">PROJECT-LARAVEL</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                {{-- Jika data title nya Home maka aktifkan tag a Home dan matikan tag a lainnya--}}
              <a class="nav-link {{ ($active === "home")? 'active' : '' }}" href="/">Home</a>
                {{-- Jika data title nya About maka aktifkan tag a About dan matikan tag a lainnya--}}
              <a class="nav-link {{ ($active === "about")? 'active' : '' }}" href="/about">About</a>
                {{-- Jika data title nya Blog maka aktifkan tag a Blog dan matikan tag a lainnya--}}
              <a class="nav-link {{ ($active === "posts")? 'active' : '' }}" href="/posts">Postingan</a>
                {{-- Jika data title nya Blog maka aktifkan tag a Blog dan matikan tag a lainnya--}}
              <a class="nav-link {{ ($active === "categories")? 'active' : '' }}" href="/categories">Category</a>
            </div>
          </div>
        </div>
      </nav>



