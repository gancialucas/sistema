    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">Logo</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>

        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Buscar</span>
            </li>

            <li>
                <a href="/dashboard">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            <li>
                <a href="/user/edit/{{ $user->id }}">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Usuario</span>
                </a>
                <span class="tooltip">Usuario</span>
            </li>

            {{-- <li>
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Mensajes</span>
                </a>
                <span class="tooltip">Mensajes</span>
            </li> --}}

            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Datos</span>
                </a>
                <span class="tooltip">Datos</span>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Archivos</span>
                </a>
                <span class="tooltip">Archivos</span>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Order</span>
                </a>
                <span class="tooltip">Order</span>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Saved</span>
                </a>
                <span class="tooltip">Saved</span>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>

            <li class="profile">
                <div class="profile-details">
                    <img src="/imgs/profile_img/{{ $user->profile_img }}" alt="profileImg">

                    <div class="name_job">
                        <div class="name">{{ $user->name }}</div>
                        <div class="job">{{ $user->position }}</div>
                    </div>
                </div>

                <button><i class='bx bx-log-out' id="log_out"></i></button>
            </li>
        </ul>
    </div>
