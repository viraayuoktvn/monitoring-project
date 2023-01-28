<link rel="stylesheet" href="/css/style.css">

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="d-flex justify-between gap-0">
            <div class="hamburger py-3" id="btn-toggle">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
            <a class="navbar-brand" href="/">
                <img src="images/pt-ksp-1.svg" alt="Logo KSP" width="full" height="50"/>
            </a>
        </div>

        <form class="d-flex justify-between gap-0">
            <input
                type="search"
                class="form-control mx-1 my-2"
                placeholder="Search..."
                aria-label="Search"
                aria-describedby="search-addon"
            />
            <div class="d-flex">
                <button type="submit" class="btnnavbar" hrf="#">
                    <img src="images/settings.svg" alt="settings" height="25"/>                    
                </button>
                <button type="submit" class="btnnavbar" href="#">
                    <img src="images/logout.svg" alt="logout" height="25"/>
                </button>
            </div>
        </form>
    </div>
</nav>
