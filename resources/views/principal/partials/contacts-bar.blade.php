<div id="contacts-bar" class="row">
    <div class="address col-md-6">
        @if(setting('address'))
            <strong>{{ env('APP_NAME') }}</strong>, {{ setting('address') }}
        @endif
    </div>
    <div class="other col-md-6">
        @if(setting('phone'))
            <span class="contact"><i class="fa fa-phone"></i>Telefone: <strong>{{ setting('phone') }}</strong></span>
        @endif
        @if(setting('email'))
            <span class="contact"><i class="fa fa-envelope"></i>E-mail: <a href="mailto:{{ setting('email') }}"><strong>{{ setting('email') }}</strong></a></span>
        @endif
    </div>
</div>
