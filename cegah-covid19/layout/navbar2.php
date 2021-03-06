    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">

            <a class="navbar-brand" href="#"> 
                <img src="img/Untitled-5-01.png" alt="" width="50" height="50">
                <img src="img/Untitled-4-01.png" alt="" width="50" height="50">
                <img src="img/Logo-akreditasi-b.png" alt="" width="50" height="55">
                <img src="img/Untitled-3-01.png" alt="" width="50" height="50">
            </a>
                
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>

            <div class="collapse navbar-collapse  me-auto float-right" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data-covid">Data Covid-19</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vaksin">Daftar Vaksin</a>
                    </li>
                    <h2>|</h2>
                    <hr>
                    <span class="btn" onclick="setDarkMode()" id="darkBtn"><i class="bi bi-moon text-dark"></i></span>
                </ul>
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