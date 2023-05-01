<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" >
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">X-Tips <sup>i</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Bots"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-coins"></i>
            <span>Bots</span>
        </a>
        <div id="Bots" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Action</h6>
                <a class="collapse-item" href="{{ route('bot.create.form') }}">Add New</a>
                <a class="collapse-item" href="{{ route('bot.index') }}">View All</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Keywords"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-coins"></i>
            <span>Keywords</span>
        </a>
        <div id="Keywords" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Action</h6>
                <a class="collapse-item" href="{{ route('keyword.create.form') }}">Add New</a>
                <a class="collapse-item" href="{{ route('keyword.index') }}">View All</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Reddit"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-coins"></i>
            <span>Reddit</span>
        </a>
        <div id="Reddit" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Action</h6>
                <a class="collapse-item" href="{{ route('subreddit.create.form') }}">Add Subreddit</a>
                <a class="collapse-item" href="{{ route('subreddit.index') }}">View Subreddits</a>
                <hr class="sidebar-divider">
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2"
             src="/profile_pictures/{{ \Illuminate\Support\Facades\Auth::guard('admin')->user()->profile_url }}"
             alt="...">
        <p class="text-center mb-2"><strong>Bot Admin</strong></p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">
            {{\Illuminate\Support\Facades\Auth::guard('admin')->user()->username}}
        </a>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
