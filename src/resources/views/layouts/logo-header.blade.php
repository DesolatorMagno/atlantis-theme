<div class="logo-header" data-background-color="{{ config('theme.themes.' . config('theme.active') . '.logo' )}}">
    <a href="" class="logo">
        <span class="navbar-brand">
            @yield('navbar-brand', config('theme.brand', config('app.name', 'AdminPanel')))
        </span>
    </a>
    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <i class="icon-menu"></i>
        </span>
    </button>
    <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
    <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
            <i class="icon-menu"></i>
        </button>
    </div>
</div>
