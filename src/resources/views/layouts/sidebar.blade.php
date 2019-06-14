<div class="sidebar sidebar-style-2" data-background-color="{{ config('theme.themes.' . config('theme.active') . '.sidebar') }}">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('vendor/atlantis-theme/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @section('name')

            @endsection
            <ul class="nav nav-primary">
                @section('nav-bar-items')

                @endsection
                @include('atlantis-theme.examples.partials.dashboard')

                @include('atlantis-theme.partials.sidebar-separator', ['section' => 'Components'])

                @include('atlantis-theme.examples.partials.companies')
                @include('atlantis-theme.examples.partials.employes')

                @stack('sidebar')
            </ul>
        </div>
    </div>
</div>
