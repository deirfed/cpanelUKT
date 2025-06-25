<div class="subnavbar">
    <div class="subnavbar-inner">
        <div class="container">
            <ul class="mainnav">
                <li class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.index') }}">
                        <i class="icon-dashboard"></i><span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('reports.index') ? 'active' : '' }}">
                    <a href="{{ route('reports.index') }}">
                        <i class="icon-list-alt"></i><span>Reports</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('avail.index') ? 'active' : '' }}">
                    <a href="{{ route('avail.index') }}">
                        <i class="icon-eye-open"></i><span>Availability</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('info.index') ? 'active' : '' }}">
                    <a href="{{ route('info.index') }}">
                        <i class="icon-info"></i><span>Information</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('ssh.index') ? 'active' : '' }}">
                    <a href="{{ route('ssh.index') }}">
                        <i class="icon-lock"></i><span>SSH</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>
