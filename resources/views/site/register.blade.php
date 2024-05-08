@include('site.layout.header')
<!-- main content area -->
<div class="primary-content-area section-medium content-padding">
    <div class="extra-small-section">
        <div class="page-title text-center">
            <h2><span class="gradient-text">Register</span> Account</h2>
        </div>
        <form action="{{ route('cadastro.store')}}" method="post" class="tk-lp-form user-register-kit-register tk-lp-tabs-form-content active" >
            @csrf
            <div class="tk-lp-form-item">
                <label class="tk-lp-label">Name</label>
                <input class="tk-lp-input"  name="usuario" type="text"></div>
            <div class="tk-lp-form-item">
                <label for="sign_up_email-address" class="tk-lp-label">Email</label>
                <input class="tk-lp-input" name="email" type="email">
            </div>
            <div class="tk-lp-form-item">
                <label class="tk-lp-label">Password</label>
                <input class="tk-lp-input" name="senha" type="password">
            </div>
            <div class="tk-lp-form-item">
                <label class="tk-lp-label">Repeat the Password</label>
                <input class="tk-lp-input" name="confirme_senha" type="password">
            </div>
            <div class="tk-lp-form-item">
                <div class="tk-lp-check">
                    <label class="tk-lp-checkbox">
                        <input type="checkbox" name="gdpr" value="1">
                        <span class="tk-lp-control-indicator"></span>
                    </label>
                    <div class="tk-lp-check-text">
                        I agree to the Privacy Policy
                    </div>
                </div>
            </div>
            <button type="submit" class="submit-bttn tk-lp-button tk-lp-button--dark tk-lp-w-full">Register</button>
            <a type="button" href="{{route('login_site')}}" class="tk-lp-button tk-lp-button--grey tk-lp-w-full tk-lp-tabs-form-item" data-id="sign-in">I already have an account!</a>
            </div>
        </form>
        <br>
        <!-- <div class="register-notice">

            Você receberá um e-mail de confirmação em sua caixa de entrada com um link para ativar sua conta.
        </div> -->
    </div>
</div>
<!-- main content area -->
@include('site.layout.footer')
