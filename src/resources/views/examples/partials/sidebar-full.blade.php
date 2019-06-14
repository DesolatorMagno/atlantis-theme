@section('pre-navbar')
    @include('atlantis-theme.examples.partials.profile')
@endsection
@section('navbar-items')
    @include('atlantis-theme.examples.partials.dashboard')
    @include('atlantis-theme.partials.sidebar.separator', ['section' => 'Components'])
    @include('atlantis-theme.examples.partials.companies')
    @include('atlantis-theme.examples.partials.employes')
@endsection