<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
	<div class="mr-auto"></div>
	<ul class="navbar-nav navbar-right">
	  <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
	    <!-- <img alt="image" src="<?php // echo base_url('/assets/user_profile/'.$this->session->userdata('img')) ?>" class="rounded-circle mr-1"> -->
	    <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div></a>
	    <div class="dropdown-menu dropdown-menu-right">
			<a href="{{ url('/auth/logout') }}" class="dropdown-item has-icon text-danger">
				<i class="fas fa-sign-out-alt"></i> Logout
			</a>
	    </div>
	  </li>
	</ul>
</nav>