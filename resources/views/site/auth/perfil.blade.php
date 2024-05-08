@include('site.layout.header')
@php
    $usuario = Session::get('usuario');
@endphp
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">
    @include('site.layout.menu')
    <div class="main-content-area">
        <div class="page-title">
            <h2>
                <span class="gradient-text">Profile</span>
            </h2>
        </div>
        <div class="user-db-content-area">
            <form action="{{route('cadastro.update')}}" method="post" class="cryptoki-form" id="personal-info-form">
                @csrf
                <div class="form-group">
                    <div class="form-field">
                        <label>Name</label>
                        <input type="text" name="usuario" value="{{$usuario['nome'] ?? ''}}">
                    </div>
                    <div class="form-field">
                        <label>E-mail</label>
                        <input type="email" name="email" disabled value="{{$usuario['email'] ?? ''}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-field">
                        <label>New Password</label>
                        <input type="password" name="senha" id="password-1">
                    </div>
                    <div class="form-field">
                        <label>Repeat the New Password</label>
                        <input type="password" name="repita_senha" id="password-2">
                    </div>
                </div>
                <div align="center">
                    <button class="btn btn-wide gradient-background" style="width: 150px">Save</button>
                </div>
            </form>
        </div>

    </div>

</div>
<!-- main content area -->
@include('site.layout.footer')
