<!doctype html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Astro v5.13.2" />
    <title>NaXostin Dash</title>
    <script src="/assets/js/color-modes.js"></script>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <meta name="theme-color" content="#712cf9" />
    <link href="/assets/css/dashboard.css" rel="stylesheet" />
  </head>
  <body>
    <x-toggle-theme />
    <header
      class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow"
      data-bs-theme="dark"
    >
      <a
        class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white"
        href="{{ route('dash.main') }}"
        >NaXostin</a
      >
      <ul class="navbar-nav flex-row d-md-none">
        <li class="nav-item text-nowrap">
          <button
            class="nav-link px-3 text-white"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSearch"
            aria-controls="navbarSearch"
            aria-expanded="false"
            aria-label="Toggle search"
          >
            <svg class="bi" aria-hidden="true">
              <use xlink:href="#search"></use>
            </svg>
          </button>
        </li>
        <li class="nav-item text-nowrap">
          <button
            class="nav-link px-3 text-white"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#sidebarMenu"
            aria-controls="sidebarMenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <svg class="bi" aria-hidden="true">
              <use xlink:href="#list"></use>
            </svg>
          </button>
        </li>
      </ul>
      <div id="navbarSearch" class="navbar-search w-100 collapse">
        <input
          class="form-control w-100 rounded-0 border-0"
          type="text"
          placeholder="Search"
          aria-label="Search"
        />
      </div>
    </header>
    <div class="container-fluid" >
      <div class="row cont" >
        <div
          class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary"
        >
          <div
            class="offcanvas-md offcanvas-end bg-body-tertiary"
            tabindex="-1"
            id="sidebarMenu"
            aria-labelledby="sidebarMenuLabel"
          >
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="sidebarMenuLabel">
                Company name
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                data-bs-target="#sidebarMenu"
                aria-label="Close"
              ></button>
            </div>
            <div
              class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto"
            >
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a
                    class="nav-link d-flex align-items-center gap-2 active"
                    aria-current="page"
                    href="{{ route('dash.main') }}"
                  >
                    <svg class="bi" aria-hidden="true">
                      <use xlink:href="#house-fill"></use>
                    </svg>
                    Dashboard
                  </a>
                </li>
                @if (Auth::user()->role == "admin")
                  <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('dash.admin.teachers.index') }}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                      </svg>
                      Teachers
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('dash.admin.classbooks.index') }}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                          <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                      </svg>
                      Classbooks
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('dash.admin.classbooks.index') }}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                          <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                      </svg>
                      Attendaces
                    </a>
                  </li>

                @elseif (Auth::user()->role == "teacher")
                  <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('dash.teacher.classbooks.index') }}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                          <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                      </svg>
                      ClassBook
                    </a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('dash.teacher.attendances.index') }}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                          <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                      </svg>
                      Attendaces
                    </a>
                  </li> --}}
                @endif
              </ul>
              <h6
                class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase"
              >
                <span>Saved reports</span>
                <a
                  class="link-secondary"
                  href="#"
                  aria-label="Add a new report"
                >
                  <svg class="bi" aria-hidden="true">
                    <use xlink:href="#plus-circle"></use>
                  </svg>
                </a>
              </h6>
              {{-- <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="#">
                    <svg class="bi" aria-hidden="true">
                      <use xlink:href="#file-earmark-text"></use>
                    </svg>
                    Current month
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="#">
                    <svg class="bi" aria-hidden="true">
                      <use xlink:href="#file-earmark-text"></use>
                    </svg>
                    Last quarter
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="#">
                    <svg class="bi" aria-hidden="true">
                      <use xlink:href="#file-earmark-text"></use>
                    </svg>
                    Social engagement
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="#">
                    <svg class="bi" aria-hidden="true">
                      <use xlink:href="#file-earmark-text"></use>
                    </svg>
                    Year-end sale
                  </a>
                </li>
              </ul> --}}
              <hr class="my-3" />
              <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="#">
                    <svg class="bi" aria-hidden="true">
                      <use xlink:href="#gear-wide-connected"></use>
                    </svg>
                    Settings
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="{{ route('logout') }}">
                    <svg class="bi" aria-hidden="true">
                      <use xlink:href="#door-closed"></use>
                    </svg>
                    Sign out
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="min-height: 90vh;">
          @yield('content')
        </main>
      </div>
    </div>
    <script
      src="/assets/js/bootstrap.bundle.js"
      class="astro-vvvwv3sm"
    ></script>
    <script src="/assets/js/alpine.js" defer></script>
    <script src="/assets/js/dashboard.js" class="astro-vvvwv3sm"></script>
  </body>
</html>