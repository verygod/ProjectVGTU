<li class="nav-item">
    <div class="dropdown" style="z-index: 999">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-cogs" aria-hidden="true"></i>
            <p class="d-lg-none d-xl-none">Settings</p>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @role('user')
            <a class="dropdown-header">Vartotojo zona</a>
            <a class="dropdown-item" href="{{ route('edit_profile', Auth::id()) }}">Redaguoti vartotoją</a>
            <a class="dropdown-item" href="{{ route('upload.show', Auth::id()) }}">Mano darbai</a>
            @endrole
            @role('admin')
            <a class="dropdown-header">Admin Panel</a>
            <a class="dropdown-item" href="{{ route('users.index') }}">Users</a>
            <a class="dropdown-item" href="{{ route('permissions.index') }}">Permissions</a>
            <a class="dropdown-item" href="{{ route('roles.index') }}">Roles</a>
            <a class="dropdown-header">Function Panel</a>
            <a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a>
            @endrole

            @role('scout')
            <a class="dropdown-header">Scout</a>
            <a class="dropdown-item" href="{{ url('uploads') }}">Contacts</a>
            <a class="dropdown-item" href="{{ route('categories.index') }}">Test</a>
            @endrole
        </div>
    </div>
</li>