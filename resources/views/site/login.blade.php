@include('site.layout.header')
        <!-- main content area -->
        <div class="primary-content-area section-medium content-padding">
            <div class="extra-small-section">
                <div class="page-title text-center">
                    <h2><span class="gradient-text">Sign</span> in</h2>
                </div>
                <form action="{{ route('logar') }}" method="POST" class="tk-lp-form user-register-kit-sign tk-lp-tabs-form-content active" >
                    @csrf
                    <div class="tk-lp-form-item">
                            <label for="sign_in_username" class="tk-lp-label">User</label>
                            <input class="tk-lp-input"  name="usuario" type="text">
                    </div>
                    <div class="tk-lp-form-item">
                        <label for="sign_in_password" class="tk-lp-label">Password</label>
                        <input class="tk-lp-input" name="senha" type="password">
                    </div>
                    <div class="tk-lp-form-item">
                        <div class="tk-lp-remember">
                            <a href="#" class="tk-lp-link-lost tk-lp-tabs-form-item" data-id="lost-password">Forgot password?</a>
                        </div>
                    </div>
                    <button type="submit" class="submit-bttn tk-lp-button tk-lp-button--dark tk-lp-w-full">Sign In</button>
                    <a href="{{route('site.cadastro')}}" type="button" class="tk-lp-button tk-lp-button--grey tk-lp-w-full tk-lp-tabs-form-item">Create an Account</a>

                </form>
            </div>
        </div>
@include('site.layout.footer')