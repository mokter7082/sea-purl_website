<div class="row">
    <div class="col-lg-2 bg-secondary d-none d-lg-block text">
        <a href="{{ URL::to('/') }}"
            class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
            <img src="{{ asset('public/frontend/img/logo.png') }}" style="height:62px;" alt="Logo">
        </a>
    </div>
    <div class="col-lg-10 custom_navbar">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a href="{{ URL::to('/') }}" class="navbar-brand d-block d-lg-none">
                <img src="{{ asset('public/frontend/img/logo.png') }}" style="height:62px;" alt="Logo">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">

                    @foreach ($menuItem as $menu)
                        <div class="nav-item {{ count($menu->subMenus) > 0 ? 'dropdown' : '' }}">
                            <a href="{{ $menu->link ?? '/' }}"
                                class="nav-link {{ count($menu->subMenus) > 0 ? 'dropdown-toggle' : '' }} "
                                data-toggle="{{ count($menu->subMenus) > 0 ? 'dropdown' : '' }}">{{ $menu->title ?? '' }}</a>
                            @if (count($menu->subMenus) > 0)
                                <div class="dropdown-menu rounded-0 m-0">
                                    @foreach ($menu->subMenus as $item)
                                        <a href="{{ $item->link ?? '/' }}"
                                            class="dropdown-item">{{ $item->title ?? '' }}</a>
                                    @endforeach
                                </div>
                            @endif

                        </div>
                    @endforeach
                </div>
                <a href="https://booking.seapearlcruises.com/select-ship"
                    class="btn btn-primary mr-3 d-none d-lg-block book_btn" target="_blank">Book Now</a>
            </div>
        </nav>
    </div>
</div>
