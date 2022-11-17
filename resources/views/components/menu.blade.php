<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">

        <li class="nav-item">
            <a href="{{ route('home') }}" class="{{ request()->is('home')? 'nav-link active' : 'nav-link' }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Tableau de bord
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('user') }}" class="{{ request()->is('user')? 'nav-link active' : 'nav-link' }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Operartions
                </p>
            </a>
        </li>
    </ul>
</nav>