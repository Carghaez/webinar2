  <header>
    <nav class="navbar" id="navbar-main">
      <nav id="navbar-burger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </nav>
      <div class="navbar-brand">
        <a href="#">
          <img src="assets/img/logo.png" />
        </a>
      </div>
      <div class="navbar-side">
        <ul class="navbar-menu">
          <li>
            <a href="#">Home</a>
          </li>
          <li class="dropdown">
            <a href="#">Dropdown</a>
            <ul>
              <li>
                <a href="#">Sezione 1</a>
              </li>
              <li>
                <a href="#">Sezione 2</a>
              </li>
              <li>
                <a href="#">Sezione 3</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">About</a>
          </li>
        </ul>
        <ul class="navbar-menu-secondary">
          <li>
            <div class="btn-group">
              <a href="#" class="btn">Login</a>
              <a href="#" class="btn">Registrati</a>
            </div>
          </li>
        </ul>
      </div>
      <form id="navbar-search" action="#" method="post" onsubmit="onSearch(); return false;">
        <i class="material-icons navbar-icon-search navbar-search-toggle">search</i>
        <input type="text" id="navbar-search-input" placeholder="Cerca" required />
        <i id="navbar-search-clear" class="material-icons navbar-icon-clear">clear</i>
        <i class="material-icons navbar-icon-back navbar-search-toggle">arrow_back</i>
      </form>
    </nav>
  </header>