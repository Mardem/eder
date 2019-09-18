@extends('layouts.principal.principal-master')

@section('content')
    <header id="master-header" class="bg" style="background-image: url({{ asset('img/bg/bg08.jpg') }});"><div class="bg-overlay" style="opacity: 0.3;"></div>
        <div class="top-header">
            <div class="container">

                <h1 id="logo">
                    <a href="{{ route('/') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="T{{ env('APP_NAME') }}">
                    </a>
                </h1>

                <!-- ============ Main Navigation - START ============ -->

               @include('layouts.principal.partials.navbar')

                <!-- ============ Main Navigation - END ============ -->

            </div>
        </div>

        <h2 id="page-title">Portfólio</h2>
    </header>

    <main>
    @include('components.notifications')
    <!-- ============ Contacts Bar - START ============ -->

        <div class="section">

            <div class="content container">

                <div class="works" style="position: relative; height: 753.312px;">

                    @foreach($images as $image)
                        <div class="work col-md-2 col-sm-6" style="position: absolute; left: 0px; top: 0px;">
                            <div class="work-thumb">
                                <img src="{{ $image->path }}" width="150px" alt="Work 01">
                                <div class="thumb-links">
                                    <a class="zoom" href="{{ $image->path }}"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    @include('principal.partials.contacts-bar')

    <!-- ============ Contacts Bar - END ============ -->
        <!-- ============ Instagram Banner - START ============ -->

        <a class="instagram-bar" href="{{ setting('instagram') }}">Veja os meus trabalhos no <strong>Instagram</strong>!</a>

        <!-- ============ Instagram Banner - END ============ -->

    </main>
@endsection
