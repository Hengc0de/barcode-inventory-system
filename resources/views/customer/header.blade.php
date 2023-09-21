
    
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{asset('logo/logo.png')}}" alt="">
            <span class="d-none d-lg-block">ScanTory</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
{{-- 
            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon--> --}}
            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-primary badge-number">{{count($notification)}}</span>
                </a><!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        You have {{count($notification)}} new notifications
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>


                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    @foreach ($notification as $noti)
                    <li class="notification-item">
                        @if ($noti->status == 'success')
                        <i class="bi bi-check-circle text-success"></i>
                        @elseif ($noti->status == 'danger')
                        <i class="bi bi-x-circle text-danger"></i>
                        @elseif ($noti->status == 'warning')
                        <i class="bi bi-exclamation-circle text-warning"></i>
                        @elseif ($noti->status == 'primary')
                        <i class="bi bi-info-circle text-primary"></i>


                        @endif
                        <div>
                            <h4>{{$noti->noti_title}}</h4>
                            <p>{{$noti->noti_desc}}</p>
                            
                            <p> <?php 
                                
                                $dt = new DateTime();
                                $dt->format('Y-m-d H:i:s');
                                $db_created_at = $noti->created_at;
                                $db_created_at->format('Y-m-d H:i:s');
                                $real = date_diff($db_created_at, $dt);
                                
                                
                                if ($real->format('%i') > 0 && $real->format('%H') == 0){
                                    echo  $real->format('%i minutes ago');
                                    
                                }else if ($real->format('%d') > 0 && $real->format('%m') == 0){
                                    echo  $real->format('%d days ago');
                                }else if ($real->format('%m') > 0 && $real->format('%y') == 0){
                                    echo  $real->format('%m months ago');
                                }
                                else if ($real->format('%H') > 0 && $real->format('%d') == 0){
                                    echo  $real->format('%H hours ago');
                                } else if ($real->format('%w') > 0 && $real->format('%m') == 0){
                                    echo  $real->format('%w weeks ago');
                                }
                                
                                
                            ?>
                            </p>
                        </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    @endforeach
                    



                    <li class="dropdown-footer">
                        <a href="#">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->
            <li class="nav-item mx-2">Credit: ${{$credit}}</li>

           
            <li class="nav-item dropdown pe-3">
               
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    @if(Auth::user()->avatar) 
                        <img src=" {{asset('upload/profile_pictures/'.Auth::user()->avatar)}}"   alt="Profile" class="rounded-circle">
                    @endif
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{Auth::user()->name}}</h6>
                        {{-- <span>Role:Admin</span> --}}
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{route('profile.view')}}">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
  
                    

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-gear"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                            <i class="bi bi-question-circle"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}" >
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>
