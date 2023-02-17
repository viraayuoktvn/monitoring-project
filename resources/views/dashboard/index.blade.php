@extends('layouts.main')

@section('content')

<div class="col-md-12">
    <h1 class="text-center"><strong> CAPAIAN </strong></h1>
    <hr>
    <h2 class="mt-2 text-center"> IKU Corporate </h2>

    <!--- first row --->
    <div class="row">
        <div class="card-group">

            {{-- <h5 class="d-flex"><b>IKU Subdit</b></h5> --}}

            <div class="col">
                <div class="mt-5">
                    <div class="card-subdit o-hidden ">
                        <div class="card-body">
                            <h6><strong>Industrial Property VP</strong></h6>
                            <h1><strong>110</strong></h1>
                            <p> Capaian:xx% dari Target:xx</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col">
                <div class="mt-5">
                    <div class="card-subdit o-hidden ">
                        <div class="card-body">
                            <h6><strong>Hotel VP</strong></h6>
                            <h1><strong>110</strong></h1>
                            <p> Capaian:xx% dari Target:xx</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col">
                <div class="mt-2">
                    <div class="card-corporate o-hidden ">
                        <div class="card-body">
                            <h1 class="h1-corporate text-center"><strong>101,4</strong></h1>
                            <p> Capaian:xx% dari Target:xx</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <h5 class="d-flex"><b>IKU Subdit</b></h5> --}}

            <div class="col">
                <div class="mt-5">
                    <div class="card-subdit o-hidden ">
                        <div class="card-body">
                            <h6><strong>Business Development VP</strong></h6>
                            <h1><strong>95</strong></h1>
                            <p> Capaian:xx% dari Target:xx</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col">
                <div class="mt-5">
                    <div class="card-subdit o-hidden ">
                        <div class="card-body">
                            <h6><strong>Finance and Accounting VP</strong></h6>
                            <h1><strong>90</strong></h1>
                            <p> Capaian:xx% dari Target:xx</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- second row --->
    <div class="row mt-1">
        <div class="card-group">
            <div class="col">
                <div class="mt-2">
                    <div class="card-iku-corporate o-hidden ">
                        <div class="card-body">
                            <h6><strong>Nilai Ekonomi dan Sosial</strong></h6>
                            <h1 class="h1-iku-corporate"><strong>26.7</strong></h1>
                            <p> Capaian:xx% dari Target:xx</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col">
                <div class="mt-2">
                    <div class="card-iku-corporate o-hidden ">
                        <div class="card-body">
                            <h6><strong>Inovasi Model Bisnis</strong></h6>
                            <h1 class="h1-iku-corporate"><strong>55</strong></h1>
                            <p> Capaian:xx% dari Target:xx</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col">
                <div class="mt-2">
                    <div class="card-iku-corporate o-hidden ">
                        <div class="card-body">
                            <h6><strong>Kepemimpinan Teknologi</strong></h6>
                            <h1 class="h1-iku-corporate"><strong>9</strong></h1>
                            <p> Capaian:xx% dari Target:xx</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col">
                <div class="mt-2">
                    <div class="card-iku-corporate o-hidden ">
                        <div class="card-body">
                            <h6><strong>Peningkatan Investasi</strong></h6>
                            <h1 class="h1-iku-corporate"><strong>4.5</strong></h1>
                            <p> Capaian:xx% dari Target:xx</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col">
                <div class="mt-2">
                    <div class="card-iku-corporate o-hidden ">
                        <div class="card-body">
                            <h6><strong>Pengembangan Talenta</strong></h6>
                            <h1 class="h1-iku-corporate"><strong>6.2</strong></h1>
                            <p> Capaian:xx% dari Target:xx</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--- third row --->
    <div class="row mt-1">
        <div class="card-group">

            <div class="col">
                <div class="mt-2">
                    <div class="card-chart o-hidden">
                        <div class="card-body">
                            <h5>Capaian IKU Rata-Rata Departemen</h5>
                        </div>
                    </div>

                    <div class="card-chart o-hidden mt-1">
                        <div class="card-body">
                            <h5>Capaian IKU Departemen</h5>
                            <h6>Bulan : xx</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="mt-2">
                    <div class="card-piechart o-hidden">
                        <div class="card-body">
                            <h5 class="text-center"><u>Kontribusi Capaian Rata-Rata per Direktorat</u></h5>
                            <h5 class="text-center mt-5"><u>Kontribusi Capaian Rata-Rata Operasional dan Pendukung</u></h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>

@endsection