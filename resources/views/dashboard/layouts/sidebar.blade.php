<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary min-vh-100">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">V Blog</h5>
        </div>
        <div class="d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                        <i class="bi bi-house-door"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                      <i class="bi bi-file-earmark"></i>
                        My Posts
                    </a>
                </li>


                @can('admin')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Administrator</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                            <i class="bi bi-grid"></i>
                            Posts Categories
                        </a>
                    </li>
                </ul>
                @endcan
                <hr class="my-3">

                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link d-flex items-center gap-2 px-3 border-0">Logout<i class="bi bi-box-arrow-right"></i></button>
                    </form>
                </div>
                </div>
            </ul>
        </div>
    </div>
</div>

<style>
    /* Add this to your CSS file or in a style tag in your HTML */
    .nav-link {
        color: black; /* Set your default text color here */
    }

    .nav-link.active {
        color: blue; /* Set your active text color here */
    }
</style>
