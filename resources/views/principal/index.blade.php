@extends('layouts.principal.principal-master')

@section('content')
    @include('layouts.principal.partials.header-tag')

    <main>
        <!-- ============ Contacts Bar - START ============ -->
        @include('principal.partials.contacts-bar')
        <!-- ============ Contacts Bar - END ============ -->

        <!-- ============ Instagram Banner - START ============ -->

        <a class="instagram-bar feed-bg" href="#">Veja os meus trabalhos no <strong>Instagram</strong>!</a>

        <!-- ============ Instagram Banner - END ============ -->

        <!-- ============ Services - START ============ -->

        <div id="service" class="section">

            <div class="content container">

                <div class="row">

                    <div class="col-md-4 bg-glyph pen">
                        <h3>Modern Tattoo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium
                            eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
                    </div>
                    <div class="col-md-4 bg-glyph pen">
                        <h3>Old School Tattoo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium
                            eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
                    </div>
                    <div class="col-md-4 bg-glyph pen">
                        <h3>Tribal Tattoo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium
                            eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
                    </div>
                    <div class="col-md-4 bg-glyph pen">
                        <h3>Henna</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium
                            eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
                    </div>
                    <div class="col-md-4 bg-glyph pen">
                        <h3>Piercing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium
                            eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
                    </div>
                    <div class="col-md-4 bg-glyph pen">
                        <h3>Body Modification</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium
                            eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
                    </div>

                </div>

            </div>

        </div>

        <!-- ============ Services - END ============ -->

        <!-- ============ Call to Action - START ============ -->

        <div id="appointment" class="section cta dark">

            <h2 class="call-action">Que tal uma tattoo hoje?</h2>

            <div class="cta-info">Faça seu agendamento <strong>AGORA</strong>!</div>

            <a class="btn md light" href="{{ route('contact.index') }}"><i class="fa fa-thumb-tack"></i>Agendamento</a>

        </div>

        <!-- ============ Call to Action - END ============ -->
    </main>
@endsection
