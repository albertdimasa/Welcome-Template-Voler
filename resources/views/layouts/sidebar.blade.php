<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="{{ asset('assets/images/logo.svg') }}" alt="" srcset="">
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class='sidebar-title'>Primary Menu</li>
            <li class="sidebar-item {{ Route::is('welcome') ? 'active' : '' }}">
                <a href="{{ route('welcome') }}" class='sidebar-link {{ Route::is('welcome') ? 'active' : '' }}'>
                    <i data-feather="Ini Icon" width="20"></i>
                    <span>1st Menu</span>
                </a>
            </li>
            <li class="sidebar-item {{ Route::is('about') ? 'active' : '' }} has-sub">
                <a href="#" class='sidebar-link {{ Route::is('about') ? 'active' : '' }}'>
                    <i data-feather="Ini Icon" width="20"></i>
                    <span>2nd Menu</span>
                </a>
                <ul class="submenu {{ Route::is('about') ? 'active' : '' }}">
                    <li>
                        <a href="{{ route('about') }}">3nd Menu</a>
                    </li>
                    <li>
                        <a href="#">4nd Menu</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
