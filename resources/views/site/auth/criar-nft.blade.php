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
                <span class="gradient-text">Create NFT</span>
            </h2>
        </div>
        <div class="user-db-content-area">
            <form class="cryptoki-form" id="upload-item-form" action=" {{ route('nft.Store')}}" method="post" enctype="multipart/form-data">
                @csrf
                        <div class="form-group">
                            <div class="form-field">
                                <label for="item-name">NFT name</label>
                                <input type="text" name="nome">
                            </div>
                            <div class="form-field">
                                <label for="item-category">NFT Rarity</label>
                                <select id="item-category" name="rarity_id">
                                    <option value="">Select a category</option>
                                    <option value="1">Super rare</option>
                                    <option value="2">Rare</option>
                                    <option value="3">Common</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <label for="qtd_mx_mint">Quantity for MINT</label>
                                <input type="number" name="qtd_mx_mint" value="1">
                            </div>
                            <div class="form-field">
                                <label for="item-name">Value (ETH)</label>
                                <input type="text" name="value">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <label for="item-name">Description</label>
                                <textarea name="description" rows="10"></textarea>
                            </div>
                        </div>  
                        <div class="form-group">
                            <div class="form-field">                        
                                <div class="upload-container">
                                    <div class="artwork-upload">
                                        <div class="label">Imagem</div>
                                        <div class="upload-box"><svg class="crumina-icon">
                                                <use xlink:href="#upload-icon"></use>
                                            </svg>
                                            <div class="upload-notice"> Max 120MB, PNG, JPEG</div>
                                            <input type="file" name="imagem" class="btn btn-normal btn-dark browse-btn waves-effect waves-button waves-float waves-light"></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div align="center">
                            <input class="btn btn-wide gradient-background" style="width: 150px" type="submit" value="Save">
                        </div>
                
                </div>
            </form>
        </div>

    </div>

</div>
<!-- main content area -->
@include('site.layout.footer')
