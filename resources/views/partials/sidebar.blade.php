<link rel="stylesheet" href="/css/style.css">

<div class="sidebar sidebar-expand-lg" id="sidebar">
    <div class="profile">

        @auth
            <a href="/user">
                <button class="btn-sidebar">
                    <div class="d-flex justify-between gap-2">
                        {{-- <div class="avatar-profile-sidebar px-auto py-auto">
                            <img src="{{ Storage::url('images/'.auth()->user()->photo) }}" alt="{{ auth()->user()->name }}" height="60" weight="60">
                        </div> --}}
                        <div class="text-profile">
                            <h4 class="h4-sidebar"><strong>{{ auth()->user()->name }}</strong></h4>
                        </div>
                    </div>    
                </button>
            </a>

        @else
            <a href="/user">
                <button class="btn-sidebar">
                    <div class="d-flex justify-between gap-2">
                        <div class="avatar-profile-sidebar px-auto py-auto">
                            <img src="/images/avatar.svg" alt="photo" height="50" width="50">
                        </div>
                        <div class="text-profile">
                            <h4 class="h4-sidebar"><strong>Guest</strong></h4>
                        </div>
                    </div>    
                </button>
            </a>

        @endauth

        <a href="/"><button class="btn-sidebar">*Beranda</button></a>
        <a href="/dashboard"><button class="btn-sidebar">*Dashboard</button></a>
        <a href="/perspektif"><button class="btn-sidebar">Perspektif</button></a>
        <a href="/kontrak_manajemen/index"><button class="btn-sidebar">Kontrak Manajemen</button></a>
        <a href="/kontrak_manajemen/eval_index"><button class="btn-sidebar">Evaluasi Kontrak Manajemen</button></a>
        <a href="/iku/index"><button class="btn-sidebar">Indikator Kinerja Utama</button></a>
        <a href="/iku/eval_index"><button class="btn-sidebar">*Evaluasi Indikator Kinerja Utama</button></a>
    </div>
</div>
