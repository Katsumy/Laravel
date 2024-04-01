<aside id="sidebar">
    <!-- Conteúdo da sidebar -->
    <div class="h-100">
        <div class="sidebar-logo">
            <a href="#">BiecoDev</a>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Admin Elements
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="fa-solid fa-bars pe-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" aria-expanded="false">
                    <i class="fa-solid fa-file-lines pe-2"></i>
                    Pages
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Page 1</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Page 2</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Page 3</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse" aria-expanded="false">
                    <i class="fa-solid fa-sliders pe-2"></i>
                    Posts
                </a>
                <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Create Post</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Post 2</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Post 3</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse" aria-expanded="false">
                    <i class="fa-solid fa-user pe-2"></i>
                    Auth
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Log In</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Register</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Forgot Password</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-header">
                Multi Level Menu
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse" aria-expanded="false">
                    <i class="fa-solid fa-share-nodes pe-2"></i>
                    Multi Dropdown
                </a>
                <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#level-1" data-bs-toggle="collapse" aria-expanded="false">
                            Level 1
                        </a>
                        <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Level 1.1</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>