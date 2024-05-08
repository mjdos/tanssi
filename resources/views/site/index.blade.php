@include('site.layout.header')


    <!-- MAIN CONTENT AREA -->
    <div class="primary-content-area bottom-padding-20">
      <div class="section-padding">
        <div id="homeSlider" class="swiper">
          <div class="swiper-wrapper">

            <div id="slide-1" class="swiper-slide">
              <picture>
                <img src="{{ url('nft_img/slide1.png') }}" width="940" height="640" alt="Slide Image" loading="lazy">
              </picture>

              <div class="dark-overlay"></div>
              <div class="slide-content">
                <div class="item-info">
                  <div class="item-bid-section">
                    <div class="gradient-border_white-bg slide-button"><a class="btn btn-normal" href="#">Go to Item!</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div id="slide-2" class="swiper-slide">
                <picture>
                    <img src="{{ url('nft_img/slide2.png') }}" width="940" height="640" alt="Slide Image" loading="lazy">
                </picture>

              <div class="dark-overlay"></div>
                <div class="slide-content">
                    <div class="item-info">
                        <div class="item-bid-section">
                            <div class="gradient-border-purple-bg slide-button"><a class="btn btn-normal" href="#">Go to Item!</a>
                        </div>
                    </div>
                </div>
              </div>

            </div>
            <div id="slide-3" class="swiper-slide">
                <picture>
                    <img src="{{ url('nft_img/slide3.png') }}" width="940" height="640" alt="Slide Image" loading="lazy">
                </picture>
              <div class="dark-overlay"></div>
              <div class="slide-content">
                <div class="item-info">
                  <div class="item-bid-section">
                    <div class="gradient-border_dark-bg slide-button"><a class="btn btn-normal" href="#">Go to Item!</a></div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="homeslider-nav">
            <div class="swiper-button-next"><svg class="crumina-icon next-button">
                <use xlink:href="#arrow-right2-icon"></use>
              </svg></div>
            <div class="swiper-button-prev"><svg class="crumina-icon prev-button">
                <use xlink:href="#arrow-left2-icon"></use>
              </svg></div>
          </div>
        </div>
      </div>

    </div>
    <!-- MAIN CONTENT AREA -->

    
<!-- main content area -->
<div class="primary-content-area content-padding" style="padding-top: 20px !important;">
    <div class="container section-padding">
        <div class="section-title-wrapper">
            <div class="section-title"> <span>NFT Market Place</span></div>
        </div>
        <!-- filterable panel -->
        <div class="filterable-bar">
            <form id="artworks-filter-form">
                <div class="cryptoki-form">
                    <span>Name of NFT</span><br>
                    <input type="text" name="nome">
                </div>

                <div class="filter-item">
                    <span>Rarity</span><br>
                    <select class="select-nice" name="rarity">
                        <option value="" selected></option>
                        @foreach($raridades as $raridade)
                            <option value="{{$raridade->id}}"> {{$raridade->nome}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="cryptoki-form">
                    <span>Name of Author</span><br>
                    <input type="text" name="author">
                </div>
                <div class="filter-item">
                    <span>Order by Price</span><br>
                    <select class="select-nice"  name="order">
                        <option value="" selected></option>
                        <option value="lowest-to-highest">Lowest to Highest $</option>
                        <option value="highest-to-lowest">Highest to Lowest $</option>
                    </select>
                </div>
                <div class="filter-button"><br>
                    <button class="btn  btn-normal btn-dark">Filter</button>
                </div>
            </form>
        </div>
        <!-- featured items grid -->
        <div class="featured-box">
            <div class="featured-box-wrapper grid-6-columns">

                @foreach ($nfts as $nft)

                    <div class="featured-item v6">
                        <div class="featured-item-wrapper">
                            <div class="featured-item-content">
                                <div class="featured-item-image">
                                    <a href="{{ route('ntf.show',$nft->id) }}">
                                        <img src="{{ url($nft->imagem) }}" alt="{{ $nft->nome }}">
                                    </a>
                                </div>
                                <div class="featured-item-info">
                                    <div class="item-category ui-templates">
                                        {{ $nft->raridade()->first()->nome }}
                                    </div>
                                    <div class="title">
                                        <a href="{{ route('ntf.show',$nft->id) }}">{{ $nft->nome }}</a>
                                    </div>
                                    <div class="item-price" style="font-size: 20px;">{{ $nft->value }} ETH</div>
                                </div>
                            </div>
                            <div class="featured-item-post-content">
                                <div class="social-share-box">
                                    <div class="share-icons" >

                                        <a class="btn btn-wide gradient-background" style="width: 33% !important;" href="{{ route('ntf.show',$nft->id) }}">
                                            View
                                        </a>

                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- main content area -->


@include('site.layout.footer')
