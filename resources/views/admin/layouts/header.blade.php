<div class="page-main-header">
    <div class="main-header-right row m-0">
      <div class="main-header-left">
        <div class="logo-wrapper">
            <a href="{{ route('admin.dashboard') }}" style="font-size: 20px;" class="fw-bold">
                ONMB
            </a>
        </div>
        <div class="dark-logo-wrapper">
            <a href="{{ route('admin.dashboard') }}" style="font-size: 20px;" class="fw-bold">
                ONMB
            </a>
        </div>
        <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
      </div>

      <div class="nav-right col pull-right right-menu p-0">
        <ul class="nav-menus">
          <li class="onhover-dropdown p-0">
            <button class="btn btn-primary-light"
                    type="button"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i data-feather="log-out"></i> Déconnexion
            </button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </div>
      <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
    </div>
</div>
