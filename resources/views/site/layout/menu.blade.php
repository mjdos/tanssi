<aside>
        <div class="user-db-menu">
            <div class="user-db-header">
                <div class="user-header-user-profile">
                    <div class="avatar box-64">
                        <a href="{{route('usuario.index')}}">
                            <img src="{{ url('assets/img/avatar.png') }}" alt="avatar">
                        </a>
                    </div>
                    <div class="title"><a href="{{route('usuario.index')}}">{{$usuario['nome'] ?? ''}}</a></div>
                    <div class="item-meta"><span class="gradient-text">{{$usuario['email'] ?? ''}}</span></div>
                </div>
            </div>
            <div class="user-db-body">
                <ul class="profile-menu">
             
                    <li>
                        <a href="{{route('usuario.index')}}">
                            <svg class="crumina-icon">
                                <use xlink:href="#user-icon"></use>
                            </svg>Profile
                        </a>
                    </li>
                    <li><a href="{{route('home_site.index')}}"><svg class="crumina-icon">
                                <use xlink:href="#wallet-icon"></use>
                        </svg>My Collection</a>
                    </li>
                    <li>
                        <a href="{{route('nft.criar')}}">
                            <svg class="crumina-icon">
                                <use xlink:href="#picture-icon"></use>
                            </svg>Create NFT
                        </a>
                    </li>
                    <li class="logout">
                        <a href="{{route('logout_site')}}">
                            <svg class="crumina-icon">
                                <use xlink:href="#logout-icon"></use>
                            </svg>Logout
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </aside>