<!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-aos="fade-down" data-aos-duration="1500">
        <div class="container">

            <a class="navbar-brand" href="#">Stevan Andreas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
            </button>
            <div class="justify-content-end collapse navbar-collapse" id="navbarSupportedContent">

                <div class="justify-content-end">
                    <ul>
                        <img src="img/Logo-STMIK-WICIDA.png" alt="" style="width: 1%;">
                        <img src="img/Logo-Dies Natalis.png" alt="" style="width: 1%;">
                        <img src="img/Logo-Kampus-Merdeka-diluncurkan.png" alt="" style="width: 1%;">
                        <span class="btn" onclick="setDarkMode()" id="darkBtn"><i class="bi bi-moon text-dark"></i></span>
                    </ul>
                </div>

            </div>

        </div>
    </nav> -->

    <!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-aos="fade-down" data-aos-duration="1500">
        <div class="container">
        <div class="container-fluit d-flex">
            <a class="navbar-brand" href="#">
                <img src="img/Untitled-5-01.png" alt=""  class="d-inline-block align-text-top">
                <img src="img/Untitled-4-01.png" alt=""  class="d-inline-block align-text-top">
                <img src="img/Logo-akreditasi-b.png" alt=""  class="d-inline-block align-text-top">
                <img src="img/Untitled-3-01.png" alt=""  class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
            </button>
            <div class="justify-content-end" collapse navbar-collapse" id="navbarSupportedContent">

            <div class="justify-content-end">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navBar">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                        <h2>|</h2>
                        <hr>

                        <span class="btn" onclick="setDarkMode()" id="darkBtn"><i class="bi bi-moon text-dark"></i></span>
                    </ul>
                </div>
            </div>
            </div>

        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="img/Untitled-5-01.png" alt=""  class="d-inline-block align-text-top">
                <img src="img/Untitled-4-01.png" alt=""  class="d-inline-block align-text-top">
                <img src="img/Logo-akreditasi-b.png" alt=""  class="d-inline-block align-text-top">
                <img src="img/Untitled-3-01.png" alt=""  class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<script>
    if(localStorage.getItem('theme') == 'dark')
    setDarkMode()

    function setDarkMode() {
    let emoticon = ''
    let isDark = document.body.classList.toggle('darkmode')

    if(isDark) {
        emoticon = '<i class="bi bi-brightness-high text-light"></i>'
        localStorage.setItem('theme', 'dark');
    }else {
        emoticon = '<i class="bi bi-moon text-dark"></i>'
        localStorage.removeItem('theme');
    }
    document.getElementById('darkBtn').innerHTML = emoticon
    }
</script>