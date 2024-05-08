@include('site.layout.header')
@php
    $usuario = Session::get('usuario');
@endphp
<!-- main content area -->
<div class="primary-content-area container content-padding grid-left-sidebar">
    @include('site.layout.menu')
    <div class="main-content-area">
        <div class="page-title" style="margin-bottom: 0px !important;">
            <h2 style="margin-bottom: 0px !important;">
                <span class="gradient-text">My Collection</span>
            </h2>
        </div>
        <div class="dashboard-wrapper">

        
            <div class="statement-list">
                <div class="statement">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th scope="col" class="heading-label" align="center" style="width: 120px">NFT</th>
                                <th scope="col" class="heading-label" align="center">Date</th>
                                <th scope="col" class="heading-label">Name</th>
                                <th scope="col" class="heading-label">Rarity</th>
                                <th scope="col" class="heading-label">Price</th>
                                <th scope="col" class="heading-label">View</th>
                                <th scope="col" class="heading-label">Mint</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nfts as $nft)
                                
                                <tr>
                                    <td data-label="NFT"  align="center">
                                        <a href="{{ route('ntf.show',$nft->id) }}">
                                            <img src="{{ url($nft->imagem) }}" style="width: 100px; height: 100px">
                                        </a>
                                    </td>
                                    <td data-label="Date" align="center">
                                        <div class="date">{{ $nft->created_at->format('d/m/Y') }}</div>
                                    </td>
                                    <td data-label="Item details">
                                        <a href="{{ route('ntf.show',$nft->id) }}">
                                            <div class="item-title gradient-text">{{ $nft->nome }}</div>
                                        </a>
                                    </td>
                                    <td data-label="type" class="stat-value">{{ $nft->raridade()->first()->nome }}</td>
                                    <td data-label="price" class="stat-value">{{ $nft->value }} ETH</td>
                                    <td data-label="earnings" class="green stat-value">
                                        <div class="header-user-profile cryptoki-notif-bttn">
                                            <a class="btn btn-dark" style="width: 80px; text-align:center; padding: 5px" href="{{ route('ntf.show',$nft->id) }}">View</a>
                                        </div>
                                    </td>
                                    <td data-label="earnings" class="green stat-value">
                                        <div class="header-user-profile cryptoki-notif-bttn">
                                            <a class="btn btn-dark" style="width: 80px; text-align:center; padding: 5px" href="{{ route('ntf.show',$nft->id) }}">Mint</a>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- main content area -->
@include('site.layout.footer')
