<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Teknik Informatika | RPL</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">RPL</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
<<<<<<< HEAD
                <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('product*') ? 'active' : '' }}"> 
               <a class="nav-link" href="{{ route('admin.product') }}"><i class="fas fa-box"></i> <span>Produk</span></a>
            </li> 
            <li class="{{ Request::is('distributor*') ? 'active' : '' }}"> 
               <a class="nav-link" href="{{ route('admin.distributor') }}"><i class="fas fa-boxes"></i> <span>distributor</span></a>
            </li> 
            <li class="{{ Request::is('flashsale') ? 'active' : '' }}"> 
          <a class="nav-link" href="{{ route('admin.flashsale') }}"><i class="fas fa-percentage"></i> 
          <span>Diskon</span></a></li> 
        </ul>
    </aside>
</div>
=======
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('product*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.product') }}"><i class="fas fa-box"></i>
                    <span>Produk</span></a>
            </li>
        </ul>
    </aside>
</div>
>>>>>>> 16de45ab6cf11e2649948d7fca0d0415845d2dfa
