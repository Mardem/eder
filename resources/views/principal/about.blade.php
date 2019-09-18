@extends('layouts.principal.principal-master')

@section('content')
    <header id="master-header" class="bg" style="background-image: url({{ asset('img/bg/eder-bg.jpg') }});">
        <div class="bg-overlay"></div>
        <div class="top-header">
            <div class="container">
                <h1 id="logo">
                    <a href="{{ route('/') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="T{{ env('APP_NAME') }}">
                    </a>
                </h1>

                <!-- ============ Main Navigation - START ============ -->

                <a id="nav-toggle" href="#"><span></span></a>
                @include('principal.partials.content-menu')
            </div>
        </div>

        <h2 id="page-title">Eder Tatuador</h2>
        <div class="header-meta artist-role">Tatuagens tribais e modernas</div>
        <a class="btn md btn-popup" href="{{ route('contact.index') }}"><i class="fa fa-thumb-tack"></i>Entre em contato</a>
    </header>

    <main>
    @include('components.notifications')
    <!-- ============ Contacts Bar - START ============ -->

    @include('principal.partials.contacts-bar')

    <!-- ============ Contacts Bar - END ============ -->

        <div class="section">

            <div class="content container">

                <div class="full row">

                    <div class="col-md-6">

                        @if(setting('about') != null)
                            {!! setting('about') !!}
                        @else
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum enim facere labore odio
                                temporibus? A aperiam culpa doloremque dolores esse explicabo facilis hic id numquam omnis
                                porro repellendus, sed sequi.</p>
                        @endif
                        <h4>Me encontre nas redes sociais!</h4>
                            <ul class="social-links">
                                @if(setting('facebook'))
                                    <li><a title="Facebook" href="{{ setting('facebook') }}"><i class="fa fa-facebook"></i></a></li>
                                @endif
                                @if(setting('twitter'))
                                    <li><a title="Twitter" href="{{ setting('twitter') }}"><i class="fa fa-twitter"></i></a></li>
                                @endif
                                @if(setting('gmaps_link'))
                                    <li><a title="Google+" href="{{ setting('gmaps_link') }}"><i class="fa fa-google-plus"></i></a></li>
                                @endif
                                @if(setting('instagram'))
                                    <li><a title="Instagram" href="{{ setting('instagram') }}"><i class="fa fa-instagram"></i></a></li>
                                @endif
                            </ul>
                    </div>

                    <div class="col-md-6">

                        <img src="{{ asset('img/eder-big.jpg') }}" alt="Eder Tatuador">
                    </div>

                </div>

            </div>

        </div>

        <!-- ============ Instagram Banner - START ============ -->

        <a class="instagram-bar" href="{{ setting('instagram') }}">Veja os meus trabalhos no <strong>Instagram</strong>!</a>

        <!-- ============ Instagram Banner - END ============ -->

    </main>
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
@endpush
