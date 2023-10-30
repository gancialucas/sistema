<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Title --}}
    <title>{ mi_portafolio }</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="/public/imgs/logo.png" type="image/x-icon">

    {{-- Scripts - Tailwind & SweetAlert --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- Link - CSS --}}
    <link rel="stylesheet" href="/css/dashboard.css">
</head>

<body>

    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">CodingStella</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>

        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            <li>
                <a href="/user/edit">
                    <i class='bx bx-user'></i>
                    <span class="links_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Messages</span>
                </a>
                <span class="tooltip">Messages</span>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Analytics</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">File Manager</span>
                </a>
                <span class="tooltip">Files</span>
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

    <section class="home-section">
        <div id="sessionButton" class="grid justify-items-center text-center pt-5 px-2">
            <button id="hiddenButton" class="w-auto p-2 rounded bg-violet-400 container">
                <p class="text-white">Bienvenido <span class="underline underline-offset-2">{{ $user->name }}</span></p>
            </button>
        </div>

        <div class="text">Colocar texto</div>
    </section>

    <script src="/js/dashboard.js"></script>
</body>

</html>
