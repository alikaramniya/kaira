<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-end me-2 rotate-caret my-2 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute start-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <img src="/panel/assets/img/logo-ct.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
            <span class="me-1 text-sm text-white">پنل مدیریت</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse px-0 w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="<?= route($router->urlFor('dashboard')) ?>" class="nav-link text-white collapsed" role="button">
                    <i class="fa-solid fa-chart-line">&nbsp;</i>
                    <span class="nav-link-text ms-1 ps-1">داشبورد</span>
                </a>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#usersList" class="nav-link text-white collapsed" aria-controls="usersList" role="button" aria-expanded="false">
                    <i class="fa-solid fa-users">&nbsp;</i>
                    <span class="nav-link-text ms-1 ps-1">کاربران</span>
                </a>
                <div class="collapse show" id="usersList">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="<?= route($router->urlFor('users.index')) ?>">
                                <span class="sidenav-mini-icon"><i class="fa-solid fa-table-list"></i>&nbsp;</span>
                                <span class="sidenav-normal  ms-1  ps-1"> لیست کاربران </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</aside>