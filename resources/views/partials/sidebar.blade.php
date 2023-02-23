<link rel="stylesheet" href="/css/style.css">

@auth
    <div class="sidebar sidebar-expand-lg" id="sidebar">
        <div class="profile">
            {{-- <a href="{{ route('user.edit', auth()->user()->id) }}"> --}}
            <a href="{{ route('user.edit') }}">
            {{-- <a href="/user"> --}}
                <button class="btn-sidebar">
                    <div class="d-flex justify-content-md-end">
                        <div class="img-profile py-2">
                            <img src="/images/profile.png" alt="profile" height="70"/>    
                        </div>
                        <div class="text-profile">
                            <h4 class="h4-sidebar"><strong>{{ auth()->user()->name }}</strong></h4>
                        </div>
                    </div>                
                </button>
            </a>
        </div>
        
        <a href="/perspektif"><button class="btn-sidebar">Beranda</button></a>
        <a href="/dashboard"><button class="btn-sidebar">Dashboard</button></a>
        <a href="/kontrak_manajemen/index"><button class="btn-sidebar">Kontrak Manajemen</button></a>
        <a href="/kontrak_manajemen/eval_index"><button class="btn-sidebar">Evaluasi Kontrak Manajemen</button></a>
        <a href="/iku/index"><button class="btn-sidebar">Indikator Kinerja Utama</button></a>
        <a href="/iku/eval_index"><button class="btn-sidebar">Evaluasi Indikator Kinerja Utama</button></a>
    </div>
@else
    <div class="sidebar sidebar-expand-lg" id="sidebar">
        <a href="/perspektif"><button class="btn-sidebar">Beranda</button></a>
        <a href="/dashboard"><button class="btn-sidebar">Dashboard</button></a>
        <a href="/kontrak_manajemen/index"><button class="btn-sidebar">Kontrak Manajemen</button></a>
        <a href="/kontrak_manajemen/eval_index"><button class="btn-sidebar">Evaluasi Kontrak Manajemen</button></a>
        <a href="/iku/index"><button class="btn-sidebar">Indikator Kinerja Utama</button></a>
        <a href="/iku/eval_index"><button class="btn-sidebar">Evaluasi Indikator Kinerja Utama</button></a>
    </div>
@endauth



</div>
