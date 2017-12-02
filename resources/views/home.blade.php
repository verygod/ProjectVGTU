@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Funkcijos</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-4">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-1" role="tab" aria-controls="home">Kūrininių įdėjimas</a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-2" role="tab" aria-controls="profile">Kūrinių grupės</a>
                                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-3" role="tab" aria-controls="messages">Paieška</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-4" role="tab" aria-controls="settings">Vartotojo profilis</a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="list-home-list">
                                    Reikia įdėti kūrinius pagal pasirinktą modelį t.y tekstas/garsas/video/nuotrauka. Turi būti skirtingos formos kiekvienam. Įdėtus kūrinius galima nustatyti kaip "Featured" ir jie būtų rodomi tam tikrame puslapio dalyje tačiau jų negali būti daugiau nei X reikšmių.
                                </div>
                                <div class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="list-profile-list">
                                    Grupės turi būti suskirstytos į tekstą/garsą/video/nutoraukas su galimybe pridėti daugiau.
                                </div>
                                <div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="list-messages-list">
                                    Visuose puslapiuose apart specifinių kaip kategorijos ar kūrynių turi būti paieška pagal pavadinimą arba autorių. O specialiuose puslapiuose kaip "Kategorijos" ar "Kūriniai", "Vartotojai" turi būti paieška tik tame puslapyje pagal atitinkamą dalį.
                                </div>
                                <div class="tab-pane fade" id="list-4" role="tabpanel" aria-labelledby="list-settings-list">
                                    Vartotojo profilis turi būti tvarkingai surašytas - "cover photo" / profilio fotografija pasirenkami socialiniai tinklai, vartotoją būtų galima sekti (optional), matyti tik jo įkeltus darbus.  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
