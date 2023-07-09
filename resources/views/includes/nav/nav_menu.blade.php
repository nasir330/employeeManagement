<div id="page_top" class="section-body top_dark">
    <div class="container-fluid">
        <div class="page-header">
            <div class="left">
                <a href="javascript:void(0)" class="icon menu_toggle mr-3"><i class="fa  fa-align-left"></i></a>
                <h1 class="page-title text-warning m-1">Dashboard</h1>
            </div>
            <div class="right">
                <div class="notification d-flex">

                    <div class="dropdown d-flex">
                        <a class="nav-link icon d-none d-md-flex btn-default btn-icon ml-2" data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
                            <span class="badge badge-success nav-unread"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <ul class="right_chat list-unstyled w350 p-0">
                                <li class="online">
                                    <a href="javascript:void(0);" class="media">
                                        <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Donald Gardner</span>
                                            <div class="message">It is a long established fact that a reader
                                            </div>
                                            <small>11 mins ago</small>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);" class="media">
                                        <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Wendy Keen</span>
                                            <div class="message">There are many variations of passages of
                                                Lorem Ipsum</div>
                                            <small>18 mins ago</small>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </a>
                                </li>
                               
                            </ul>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark
                                all as read
                            </a>
                        </div>
                    </div>
                    <div class="dropdown d-flex">
                        <a class="nav-link icon d-none d-md-flex btn-default btn-icon ml-2"
                            data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-primary nav-unread"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <ul class="list-unstyled feeds_widget">
                                <li>
                                    <div class="feeds-left"><i class="fa fa-check"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-danger">Issue Fixed <small
                                                class="float-right text-muted">11:05</small></h4>
                                        <small>WE have fix all Design bug with Responsive</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-user"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">New User <small class="float-right text-muted">10:45</small>
                                        </h4>
                                        <small>I feel great! Thanks team</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">7 New Feedback <small
                                                class="float-right text-muted">Today</small></h4>
                                        <small>It will give a smart finishing to your site</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-warning">Server Warning <small
                                                class="float-right text-muted">10:50</small></h4>
                                        <small>Your connection is not private</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">7 New Orders <small
                                                class="float-right text-muted">11:35</small></h4>
                                        <small>You received a new oder from Tina.</small>
                                    </div>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark
                                all as
                                read</a>
                        </div>
                    </div>
                    <div class="dropdown d-flex">
                        <a class="nav-link icon d-none d-md-flex btn-default btn-icon ml-2"
                            data-toggle="dropdown">
                            <i class="fa-solid fa-user-tie"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="page-profile.html">
                                <i class="dropdown-icon fa-solid fa-user"></i>                               
                                Profile
                            </a>
                            <a class="dropdown-item" href="{{route('profile.edit')}}">
                                <i class="dropdown-icon fa fa-gear"></i>
                                 Settings
                            </a>                           
                            <div class="dropdown-divider"></div>                           
                            <span class="dropdown-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="bg-transparent border-0">
                                        <i class="dropdown-icon fa-solid fa-right-from-bracket"></i>
                                        Sign out
                                    </button>
                                </form>
                            </span>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>