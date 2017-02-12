<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> 
                    <span>
                        <img alt="image" class="img-responsive" src="{{ URL::asset('public/img/logo.png') }}" />
                        <h3>a2z's Directory</h3>
                    </span>
                </div>
            </li>
            <li class="<?php echo (isset($page_type) && $page_type && $page_type == 'lawyers') ? 'active' : ''; ?>">
                <a href = "{{URL('/admin/subjects')}}">
                    <i class="fa fa-users"></i> <span class="nav-label">Manage Subject</span><span class="fa arrow"></span>   
                </a>
               
            </li>
            <li class="<?php echo (isset($page_type) && $page_type && $page_type == 'users') ? 'active' : ''; ?>">
                <a href = "{{URL('/admin/subjectCats')}}">
                    <i class="fa fa-users"></i> <span class="nav-label">Manage Sub'Category</span><span class="fa arrow"></span>
                </a>
            </li>
			<li class="<?php echo (isset($page_type) && $page_type && $page_type == 'users') ? 'active' : ''; ?>">
                <a href = "{{URL('/admin/SubjectSubCategory')}} ">
                    <i class="fa fa-users"></i> <span class="nav-label">Subject Sub</span><span class="fa arrow"></span>
                </a>
            </li>
            <li class="">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span class="nav-label">Master Data</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li class="active">
                        {{ Html::link('admin/states', 'States')}}
                    </li>
                    <li class="active">
                        {{ Html::link('admin/cities', 'Cities')}}
                    </li>
                </ul>
            </li>
            <li class="<?php echo (isset($page_type) && $page_type && $page_type == 'profiles') ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-gear"></i> <span class="nav-label">Social/Legal Profile</span><span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li class="<?php echo (isset($page) && $page && $page == 'social') ? 'active' : ''; ?>">
                        {{ Html::link('admin/social-profiles', 'Social Profiles')}}
                    </li>
                    <li class="<?php echo (isset($page) && $page && $page == 'legal') ? 'active' : ''; ?>">
                        {{ Html::link('admin/legal-profiles', 'Legal Profiles')}}
                    </li>
                    <li class="<?php echo (isset($page) && $page && $page == 'profile') ? 'active' : ''; ?>">
                        {{ Html::link('admin/add-profile', 'Add New Profile')}}
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
					<a href="{{ url('/logout') }}" class="dropdown-toggle"
					onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Log out</a>
					<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
										</li>
                </li>
            </ul>
        </nav>
    </div>