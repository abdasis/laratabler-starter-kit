<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <x-page-header pretitle="Dashboard" title="Dashboard">
    </x-page-header>
    <div class="container-lg">
        <div class="page-body">
            <div class="card card-md">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <h3 class="h1">Ahlan Wasahlan {{auth()->user()->name}}</h3>
                            <div class="markdown text-muted">
                                Selamat datang di halaman dashboard kami! Di sini, Anda dapat mengelola aktivitas dan data penting Anda dengan mudah dan efisien. Semoga Anda memiliki pengalaman yang menyenangkan dan membantu dengan menggunakan fitur yang tersedia di sini.
                            </div>
                            <div class="mt-3">
                                <a href="https://tabler-icons.io" class="btn btn-primary" target="_blank" rel="noopener">Semangat Kerja</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
