@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Contact information</h4>
                    </div>
                </div>
            </div>

            {{-- Card Alamat --}}
            <div class="col-12 col-xl-4">
                <div class="art-a art-card">
                    <div class="art-table p-15-15">
                        <ul>
                            <li>
                                <h6>Country:</h6>
                                <span>Indonesia</span>
                            </li>
                            <li>
                                <h6>City:</h6>
                                <span>Surakarta</span>
                            </li>
                            <li>
                                <h6>Street:</h6>
                                <span>Jl Cerme Barat 6</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Card Kontak --}}
            <div class="col-12 col-xl-6">
                <div class="art-a art-card">
                    <div class="art-table p-15-15">
                        <ul>
                            <li>
                                <h6>Email:</h6>
                                <a href="mailto:dimastyo219@gmail.com" 
                                class="art-btn art-btn-md" 
                                data-no-swup>
                                    <span><i class="fa fa-envelope"></i> dimastyo219@gmail.com</span>
                                </a>
                            </li>

                            <li>
                                <h6>WhatsApp:</h6>
                                <a href="https://wa.me/6285727694993" target="_blank" data-no-swup class="art-btn art-btn-md">
                                    <span> <i class="fa fa-phone"></i>+62 857-2769-4993</span>
                                </a>
                            </li>
                            <li>
                                <h6>Telegram:</h6>
                                <span>@dimaswahyusulistyo</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <footer>
            <div class="art-copy">© 2024 Dimas Wahyu</div>
            <div>
                Template author:&nbsp;
                <a href="https://themeforest.net/user/millerdigitaldesign" target="_blank" data-no-swup>
                    Nazar Miller
                </a>
            </div>
        </footer>
    </div>
@endsection
