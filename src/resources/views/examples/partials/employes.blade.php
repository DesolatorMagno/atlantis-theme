<li class="nav-item">
    <a data-toggle="collapse" href="#employees">
        <i class="fas fa-users"></i>
        <p>Employees</p>
        <span class="caret"></span>
    </a>
    <div class="collapse" id="employees">
        <ul class="nav nav-collapse">
            <li class="li-list">
                <a href="">
                    <i class="fas fa-list"></i>
                    <span>@lang('general.listing')</span>
                </a>
            </li>
            <li class="li-add">
                <a href="">
                    <i class="fas fa-plus"></i>
                    <span>{{ trans('general.new', ['model' => trans('general.employee')]) }}</span>
                </a>
            </li>
        </ul>
    </div>
</li>
