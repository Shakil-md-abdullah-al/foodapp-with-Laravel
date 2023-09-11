<div id="layoutSidenav_nav" style="width: 20%">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{url('/redirect')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#user" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    User
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="user" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('users.create')}}">Add User</a>
                        <a class="nav-link" href="{{route('users.index')}}">Manage User</a>
                        <a class="nav-link" href="{{route('join-request')}}">Join Request</a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#chef" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Chef
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="chef" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('chef.create')}}">Add Chef</a>
                        <a class="nav-link" href="{{route('chef.index')}}">Manage Chef</a>
                    </nav>
                </div>




{{--                Office--}}

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#office" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Office
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="office" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('office.create')}}">Add Office</a>
                        <a class="nav-link" href="{{route('office.index')}}">Manage Office</a>
                    </nav>
                </div>

                <a class="nav-link" href="{{route('contact-show')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Query
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#event" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Event
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="event" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('eventmanage.create')}}">Add Event</a>
                        <a class="nav-link" href="{{route('eventmanage.index')}}">Manage Event</a>
                        <a class="nav-link" href="{{route('event-show')}}">Upcoming</a>
                    </nav>
                </div>

{{--                <a class="nav-link" href="{{route('event-show')}}">--}}
{{--                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>--}}
{{--                    New Event--}}
{{--                </a>--}}
                <a class="nav-link" href="{{route('custom-show')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Custom Order
                </a>



                <div class="sb-sidenav-menu-heading">Foods</div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#products" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="products" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('view-category')}}">Manage Category</a>
{{--                        <a class="nav-link" href="{{route('users.index')}}">Manage Products</a>--}}
                    </nav>
                </div>


                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Food
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('products.create')}}">Add Food</a>
                        <a class="nav-link" href="{{route('products.index')}}">Manage Food</a>
                    </nav>
                </div>




                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#order" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Order
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="order" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('order')}}">Food Order</a>
                        <a class="nav-link" href="{{route('menu-order')}}">Platter Order</a>
                        <a class="nav-link" href="{{route('pkg-order')}}">Package Order</a>
                    </nav>
                </div>


                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#package" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Packages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="package" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('package.index')}}">Manage Package</a>
{{--                        <a class="nav-link" href="{{route('office.index')}}">Manage Office</a>--}}
                    </nav>
                </div>

                <a class="nav-link" href="{{route('platter.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Platter
                </a>

                <a class="nav-link" href="{{route('special.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Special Menu
                </a>


                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#slider" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Slider
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="slider" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('slider.index')}}">Manage Slider</a>
                        <a class="nav-link" href="{{route('pkg-order')}}">Package Order</a>
                    </nav>
                </div>

{{--                <a class="nav-link" href="{{route('special.index')}}">--}}
{{--                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>--}}
{{--                    Todays Special--}}
{{--                </a>--}}

            </div>
        </div>
{{--        <div class="sb-sidenav-footer">--}}
{{--            <div class="small">Logged in as:</div>--}}
{{--            Start Bootstrap--}}
{{--        </div>--}}
    </nav>
</div>
