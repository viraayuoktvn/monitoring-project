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
                <img src="/images/pt-ksp-1.png" alt="Logo KSP" width="full" height="50"/>
            </a>
        </div>

        @auth
            <li class="d-flex justify-between gap-0">
                <div class="d-flex">
                    <button type="submit" class="btnnavbar" href="#">*Settings
                        <img src="/images/settings.png" alt="settings" height="25"/>                    
                    </button>
                    
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btnnavbar">Log Out
                            <img src="/images/logout.png" alt="logout" height="25"/>
                        </button>
                    </form>
                </div>
            </li>
        @else
            <div class="d-flex">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btnnavbar" href="/login">
                        <img src="/images/login.png" alt="login" height="25"/>
                    </button>
                </form>
            </div>
        @endauth
    </div>
</nav>