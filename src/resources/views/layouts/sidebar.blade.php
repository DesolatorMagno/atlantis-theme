<div class="sidebar sidebar-style-2" data-background-color="{{ config('theme.themes.' . config('theme.active') . '.sidebar') }}">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            @yield('pre-sidebar')
            <ul class="nav nav-primary">
                @yield('sidebar-items')
                @stack('sidebar-extra')
            </ul>
        </div>
    </div>
</div>
