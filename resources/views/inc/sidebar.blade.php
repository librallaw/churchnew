<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div><img src="https://scontent.flos10-1.fna.fbcdn.net/v/t1.0-1/p240x240/39096484_1811833858885107_5954202192821878784_n.jpg?_nc_cat=0&oh=711a302bc5d62fa2ba90c530eac71cd9&oe=5C2903E8" alt="user-img" class="img-circle"></div>

            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">Home</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('loadDashboard')}}">View Dashboard </a></li>

                    </ul>
                </li>


                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Members Management <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('showMembers')}}">View Members </a></li>

                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Attendance Management <span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('showTakeAttendance')}}">Take Attendance </a></li>

                    </ul>
                </li>



            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>