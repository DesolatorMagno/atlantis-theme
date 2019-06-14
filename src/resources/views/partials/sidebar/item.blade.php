<li class="nav-item">
    <a data-toggle="collapse" href="#item">
        <i class="fas fa-building"></i>
        <p>Item</p>
        <span class="caret"></span>
    </a>
    <div class="collapse" id="item">
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
                    <span class="">{{ trans('general.new', ['model' => trans('general.item')]) }}</span>
                </a>
            </li>
        </ul>
    </div>
</li>
