<aside class="navbar navbar-vertical navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href=".">
                <img src="{{asset('static/logo.svg')}}" width="110" height="32" alt="Tabler"
                     class="navbar-brand-image">
            </a>
        </h1>
        <div class="collapse navbar-collapse px-2 mt-3" data-simplebar style="max-height: 90vh" id="sidebar-menu">
            <ul class="nav nav-pills nav-vertical">
                <x-nav-item target="null" title="Dashboard">
                    <x-nav-icon>
                        <i class="ri-dashboard-2-line fs-2"></i>
                    </x-nav-icon>
                </x-nav-item>

                {{--menu siswa--}}
                <x-nav-item target="menu-siswa" title="Siswa">
                    <x-nav-icon>
                        <i class="ri-contacts-book-line fs-2"></i>
                    </x-nav-icon>
                </x-nav-item>
                <x-submenu target="menu-siswa">
                    <x-nav-link url="{{route('dashboard')}}" title="Tambah Siswa"/>
                    <x-nav-link url="{{route('dashboard')}}" title="Semua Siswa"/>
                </x-submenu>
                {{--end menu siswa--}}

                {{--start menu management sekolah--}}
                <x-nav-item target="management-sekolah" title="Data Sekolah">
                    <x-nav-icon>
                        <i class="ri-building-line"></i>
                    </x-nav-icon>
                </x-nav-item>
                <x-submenu target="management-sekolah">
                    <x-nav-link url="" title="Data Sekolah"/>
                </x-submenu>
                {{--end  menu management sekolah--}}

                {{--start menu guru--}}
                <x-nav-item target="menu-pengaturan" title="Pengaturan">
                    <x-nav-icon>
                        <i class="ri-settings-5-line"></i>
                    </x-nav-icon>
                </x-nav-item>
                <x-submenu target="menu-pengaturan">
                    <x-nav-link url="{{route('dashboard')}}" title="Pengturan Printer"/>
                    <x-nav-link url="{{route('dashboard')}}" title="Template Rapor"/>
                </x-submenu>
                {{--end menu guru--}}



            </ul>
        </div>
    </div>
</aside>
