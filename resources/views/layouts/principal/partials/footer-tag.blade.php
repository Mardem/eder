<footer class="dark">

    <div class="container">

        <div class="row">

            <div class="footer-col col-md-4 col-sm-6">

                <h3 class="focus-title">Sobre</h3>
                <p><img width="200" class="align-center" src="img/logo.png" alt="THE TATTOOIST - Tattoo Studio"></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet facilis iusto quam, nisi
                    voluptates minima. Nihil quasi dolore odio nulla sequi, ipsum placeat distinctio vero neque
                    maxime, et reprehenderit asperiores.</p>

            </div>

            <div class="footer-col col-md-4 col-sm-6">

                <h3 class="focus-title"><i class="fa fa-clock-o"></i>Horário de funcionamento</h3>
                <dl class="working-days">
                    <dt>Segunda</dt>
                    @if(setting('w_seg_abertura') != '' || setting('w_seg_fechamento') != '')
                        <dd>{{ setting('w_seg_abertura') }} - {{ setting('w_seg_fechamento') }}</dd>
                        @else
                        <dd>FECHADO</dd>
                    @endif
                    <dt>Terça</dt>
                    @if(setting('w_ter_abertura') != '' || setting('w_ter_fechamento') != '')
                        <dd>{{ setting('w_ter_abertura') }} - {{ setting('w_ter_fechamento') }}</dd>
                    @else
                        <dd>FECHADO</dd>
                    @endif
                    <dt>Quarta</dt>
                    @if(setting('w_quar_abertura') != '' || setting('w_quar_fechamento') != '')
                        <dd>{{ setting('w_quar_abertura') }} - {{ setting('w_quar_fechamento') }}</dd>
                    @else
                        <dd>FECHADO</dd>
                    @endif
                    <dt>Quinta</dt>
                    @if(setting('w_qui_abertura') != '' || setting('w_qui_fechamento') != '')
                        <dd>{{ setting('w_qui_abertura') }} - {{ setting('w_qui_fechamento') }}</dd>
                    @else
                        <dd>FECHADO</dd>
                    @endif
                    <dt>Sexta</dt>
                    @if(setting('w_sex_abertura') != '' || setting('w_sex_fechamento') != '')
                        <dd>{{ setting('w_sex_abertura') }} - {{ setting('w_sex_fechamento') }}</dd>
                    @else
                        <dd>FECHADO</dd>
                    @endif
                    <dt>Sábado</dt>
                    @if(setting('w_sab_abertura') != '' || setting('w_sab_fechamento') != '')
                        <dd>{{ setting('w_sab_abertura') }} - {{ setting('w_sab_fechamento') }}</dd>
                    @else
                        <dd>FECHADO</dd>
                    @endif
                    <dt>Domingo</dt>
                    @if(setting('w_dom_abertura') != '' || setting('w_dom_fechamento') != '')
                        <dd>{{ setting('w_dom_abertura') }} - {{ setting('w_dom_fechamento') }}</dd>
                    @else
                        <dd>FECHADO</dd>
                    @endif
                </dl>

            </div>

            <div class="footer-col footer-contacts col-md-4 col-sm-12">

                <div class="contact-item"><span>{{ env('APP_NAME') }}</span> <strong>{{ setting('address') }}</strong></div>
                <div class="contact-item"><span>Telefone:</span> <strong>{{ setting('phone') }}</strong></div>
                <div class="contact-item"><span>E-mail:</span> <strong><a href="#">{{ setting('email') }}</a></strong>
                </div>
                <div class="contact-item">
                    <span>Redes sociais:</span>
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

            </div>

        </div>

    </div>

    <div class="copyright">
        &copy; {{ now()->format('Y') }} - <strong>{{ env('APP_NAME') }}</strong>
        <br>
        Feito com <i class="fa fa-heart text-danger animated infinite fast heartBeat"></i> por <img src="https://mediclife.med.br/images/vtec.png" width="30px" style="margin-top: -25px;">
    </div>
</footer>
