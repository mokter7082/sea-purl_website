<div id="left-nav" class="nano">
    <div class="nano-content">
        <nav>
            @php
                $rule = Session::get('role');
            @endphp
            <ul class="nav nav-left-lines" id="main-nav">
                <!--HOME-->
                <li class="active-item"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-home"
                            aria-hidden="true"></i><span>Dashboard</span></a></li>
                <!--UI ELEMENTENTS-->
                <li class="has-child-item close-item">
                    <a><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="{{ route('menu.create') }}">Create Menu</a></li>
                        <li><a href="{{ route('menu.index') }}">View Menu</a></li>
                    </ul>
                </li>


                <li class="has-child-item close-item">
                    <a><i class="fa fa-bars" aria-hidden="true"></i><span>Sub Menu</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="{{ route('sub-menu.create') }}">Add Sub Menu</a></li>
                        <li><a href="{{ route('sub-menu.index') }}">View Menu</a></li>
                    </ul>
                </li>
                <li class="has-child-item close-item">
                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Home Page Slider</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="{{ route('slider.create') }}">Add New Slider</a></li>
                        <li><a href="{{ route('slider.index') }}">View Slider</a></li>
                    </ul>
                </li>
                <li class="has-child-item close-item">
                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Cruise Three</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="{{ route('cruise-three.create') }}">Add Cruise</a></li>
                        <li><a href="{{ route('cruise-three.index') }}">View Cruise</a></li>
                    </ul>
                </li>
                <li class="has-child-item close-item">
                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Cruise Four</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="{{ route('cruise-four.create') }}">Add Four</a></li>
                        <li><a href="{{ route('cruise-four.index') }}">View Four</a></li>
                    </ul>
                </li>
                <li class="has-child-item close-item">
                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Home Page Features</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="{{ route('home-cruise.create') }}">Add Cruise</a></li>
                        <li><a href="{{ route('home-cruise.index') }}">View Cruise</a></li>
                    </ul>
                </li>
                <li class="has-child-item close-item">
                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Gallery</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="{{ route('gallery.create') }}">Add Gallery</a></li>
                        <li><a href="{{ route('gallery.index') }}">View Gallery</a></li>
                    </ul>
                </li>
                <li class="has-child-item close-item">
                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Video</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="{{ route('video.create') }}">Add Video</a></li>
                        <li><a href="{{ route('video.index') }}">View Video</a></li>
                    </ul>
                </li>
                @if ($rule === 'special_admin')
                    <p class="tool_title">Website Content</p>
                    <li class="has-child-item close-item">
                        <a><i class="fa fa-cubes" aria-hidden="true"></i><span>About Content</span></a>
                        <ul class="nav child-nav level-1">
                            <li><a href="{{ route('create_content') }}">Create</a></li>
                            <li><a href="{{ route('list_about_content') }}">View</a></li>
                        </ul>
                    </li>
                    <li class="has-child-item close-item">
                        <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Tourist attractions</span></a>
                        <ul class="nav child-nav level-1">
                            <li><a href="{{ route('create_to_attraction') }}">Create</a></li>
                            <li><a href="{{ route('list_tourist_attraction') }}">View</a></li>
                        </ul>
                    </li>
                    <li class="has-child-item close-item">
                        <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Sundarban</span></a>
                        <ul class="nav child-nav level-1">
                            <li><a href="{{ route('create_sundarban') }}">Create</a></li>
                            <li><a href="{{ route('list_sundarbant_content') }}">View</a></li>
                        </ul>
                    </li>
                    <li class=" has-child-item close-item">
                        <a>
                            <i class="fa fa-sitemap" aria-hidden="true"></i>
                            <span>Tour Package</span>
                        </a>
                        <ul class="nav child-nav level-1">
                            <li class="has-child-item close-item">
                                <a>Cruise-3</a>
                                <ul class="nav child-nav level-2 ">
                                    <li><a href="{{ route('create_t_p_cruise_3') }}">Create</a></li>
                                    <li><a href="{{ route('list__t_p_cruise_3') }}">View</a></li>
                                </ul>
                            </li>
                            <li class="has-child-item close-item">
                                <a>Cruise-4</a>
                                <ul class="nav child-nav level-2 ">
                                    <li><a href="{{ route('create_t_p_cruise_4') }}">Create</a></li>
                                    <li><a href="{{ route('list__t_p_cruise_4') }}">View</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                @endif
                <p class="tool_title">Website Users</p>
                <li class="has-child-item close-item">
                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Website</span></a>
                    <ul class="nav child-nav level-1">
                        <li><a href="{{ route('group_booking_user') }}">Group Booking</a></li>
                    </ul>
                </li>



            </ul>
        </nav>
    </div>
</div>
