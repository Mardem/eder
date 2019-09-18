@extends('layouts.principal.principal-master')

@section('content')
    <header id="master-header" class="bg" style="background-image: url({{ asset('img/bg/bg04.jpg') }});">
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

            <!-- ============ Main Navigation - END ============ -->

            </div>
        </div>
        <h2 id="page-title">ENTRE EM CONTATO</h2>
    </header>

    <main>
    @include('components.notifications')
        <!-- ============ Contacts Bar - START ============ -->

    @include('principal.partials.contacts-bar')

    <!-- ============ Contacts Bar - END ============ -->

        <!-- ============ Google Map - START ============ -->

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.495708252308!2d-48.012548784762465!3d-15.830522928062853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3350853a057f%3A0xc22f7e3524fe61ec!2sCaf%C3%A9%20da%20101%20Tattoo!5e0!3m2!1spt-BR!2sbr!4v1567167361454!5m2!1spt-BR!2sbr" id="map" width="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        <!-- ============ Google Map - END ============ -->

        <div class="section">

            <div class="content container">

                <h2 class="focus-title">Ainda tem dúvida? Deixe uma mensagem</h2>

                <!-- ============ Contact Form - START ============ -->

                <form class="row" action="{{ route('contact.save') }}" method="post">
                    @csrf
                    <div class="col-md-6">
                        <label><strong>Nome completo *</strong>
                            <input class="required" type="text" name="name" value="{{ old('name') }}" required >
                        </label>
                        <label><strong>E-mail *</strong>
                            <input class="required" type="email" style="width: 100%;padding: 10px" name="email" value="{{ old('email') }}" required>
                        </label>
                        <label><strong>Número de telefone *</strong>
                            <input class="required" type="text" data-mask="(99) 9 9999-9999" name="phone" value="{{ old('phone') }}" required>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label><strong>Messagem *</strong>
                            <textarea class="required" name="message" required></textarea>
                        </label>
                        <p>( <strong>*</strong> ) = Campos obrigatórios</p>
                        <input class="btn md" type="submit" value="Enviar mensagem">
                    </div>
                </form>

                <!-- ============ Contact Form - END ============ -->

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
