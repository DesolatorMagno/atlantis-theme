<nav class="navbar navbar-header navbar-expand-lg" data-background-color="{{ config('theme.themes.' . config('theme.active') . '.navbar') }}">
    <div class="container-fluid">
        @include('atlantis-theme.partials.navbar.search')
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
        @include('atlantis-theme.partials.navbar.all')
        </ul>
    </div>
</nav>
