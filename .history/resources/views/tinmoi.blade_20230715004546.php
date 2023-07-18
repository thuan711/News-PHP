@extends('layout')
@section('tieude')
    Trang Tin Tức
@endsection
@section('noidungchinh')
<section class="breadcrumb-blog set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our Blog</h2>
                </div>
            </div>
        </div>
    </section>
<section class="blog spad">
        <div class="container">
            <div class="row">
            <article class="col-sm-9">
            <div class="input-group mb-3" id="timkiem">
						<form action="/tinmoi" method="get">
							<input name="tukhoa" class="border border-primary p-2 col-6" placeholder= "Từ khóa">
  							<button type="submit" class="btn btn-primary p-2 col-2">Tìm </button>
						</form>
					</div>
                <div class="row" id="ketquatim">
                        @foreach($listtin as $tin)
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="blog__item">
                                    <a href="/tin/{{$tin->id}}">
                                        <div class="blog__item__pic set-bg" data-setbg="/img/{{$tin->urlHinh}}"></div>
                                    </a>
                                    <div class="blog__item__text">
                                        <span><img src="img/icon/calendar.png" alt="">{{$tin->ngayDang}}</span>
                                        <h5>{{$tin->tieuDe}}</h5>
                                        <p>{{$tin->tomTat}}</p>
                                        <a href="{{url('/tin',[$tin->id])}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="pagination-wrap">
                            <ul class="pagination">                 
                                {{ $listtin->onEachSide(2)->links() }}
                            </ul>   
                        </div>
                    </div>
                </div>
            </article>
            
                <aside class="col-sm-3">
					<div class="card mt-1 ml-n2 mr-n2">
						<div class="card-header font-weight-bold"><i class="fas fa-list"></i> DANH MỤC
					</div>
						@foreach ($loai as $lo)
						<div class="card-body p-0">
							<ul class="list-group">
								<li class="list-group-item">
									<a href="/loai/{{$lo->id}}">{{$lo->ten}}</a>
								</li>
							</ul>
						</div>
						@endforeach
					</div>
				</aside>
            </div>

        </div>
</section>



<div class="main-container container" id="main-container">

      <!-- Content -->
      <div class="row">
            
        <!-- post content -->
        <div class="col-lg-8 blog__content mb-30">

          <!-- Breadcrumbs -->
          <section class="section">
            <div class="title-wrap">
              <h3 class="section-title">Tin mới nhất</h3>
              
            </div>
            @foreach($listtin as $tin)
            <article class="entry post-list">
            
              <div class="entry__img-holder post-list__img-holder">
                <a href="/tin/{{$tin->id}}">
                  <div class="thumb-container thumb-75">
                    <img data-src="/img/{{$tin->urlHinh}}" src="img/empty.png" class="entry__img lazyload" alt="">
                  </div>
                </a>
              </div>

              <div class="entry__body post-list__body">
                <div class="entry__header">
                  
                  <h2 class="entry__title">
                    <a href="/tin/{{$tin->id}}">{{$tin->tieuDe}}</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-date">
                      <i class="ui-date"></i>
                      {{$tin->ngayDang}}
                    </li>
                    
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>{{$tin->tomTat}}</p>
                </div>
              </div>
            </article>
            @endforeach
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        <ul class="pagination">                 
                            {{ $listtin->onEachSide(2)->links() }}
                        </ul>   
                    </div>
                </div>
            </div>
          </section> 
     
          </div> <!-- end comment form -->

      
        
        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar sidebar--right">
        <div class="widget widget-reviews">
            <h4 class="widget-title">Danh mục tin tức</h4>
            @foreach ($loai as $lo)
            <ul class="post-list-small">
              <li class="post-list-small__item">
                <article class="post-list-small__entry clearfix">
                  <div class="post-list-small__body" style="font-size: 20;">
                    <h3 class="post-list-small__entry-title">
                      <a href="/loai/{{$lo->id}}">{{$lo->ten}}</a> <hr>
                    </h3>
                  </div>                  
                </article>
              </li>
            </ul>
            @endforeach
          </div>
          <!-- Widget Social Subscribers -->
          <div class="widget widget-social-subscribers">
            <ul class="widget-social-subscribers__list">
              <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--facebook">
                  <i class="ui-facebook widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">15369</span>
                  <span class="widget-social-subscribers__text">Fans</span>
                </a>
              </li>
              <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--twitter">
                  <i class="ui-twitter widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">15369</span>
                  <span class="widget-social-subscribers__text">Followers</span>
                </a>
              </li>
              <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--google">
                  <i class="ui-google widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">15369</span>
                  <span class="widget-social-subscribers__text">Followers</span>
                </a>
              </li>
              <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--rss">
                  <i class="ui-rss widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">15369</span>
                  <span class="widget-social-subscribers__text">Subscribers</span>
                </a>
              </li>
              <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--youtube">
                  <i class="ui-youtube widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">15369</span>
                  <span class="widget-social-subscribers__text">Subscribers</span>
                </a>
              </li>
              <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--instagram">
                  <i class="ui-instagram widget-social-subscribers__icon"></i>
                  <span class="widget-social-subscribers__number">15369</span>
                  <span class="widget-social-subscribers__text">Followers</span>
                </a>
              </li>
            </ul>
          </div>

          <!-- Widget Newsletter -->
          <div class="widget widget_mc4wp_form_widget">
            <h4 class="widget-title">Subscribe for news</h4>
            <form class="mc4wp-form" method="post">
              <div class="mc4wp-form-fields">
                <p>
                  <input type="email" name="EMAIL" placeholder="Your email" required="">
                </p>
                <p>
                  <input type="submit" class="btn btn-lg btn-color" value="Subscribe">
                </p>
              </div>
            </form>
          </div> <!-- end widget newsletter -->
          
          <!-- Widget Popular/Latest Posts -->
          <div class="widget widget-tabpost">
            <div class="tabs widget-tabpost__tabs">
              <ul class="tabs__list widget-tabpost__tabs-list">
                <li class="tabs__item widget-tabpost__tabs-item tabs__item--active">
                  <a href="#tab-trending" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Trending</a>
                </li>                                 
                <li class="tabs__item widget-tabpost__tabs-item">
                  <a href="#tab-latest" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Latest</a>
                </li>                                 
                <li class="tabs__item widget-tabpost__tabs-item">
                  <a href="#tab-comments" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Comments</a>
                </li>                                 
              </ul> <!-- end tabs -->
              
              <!-- tab content -->
              <div class="tabs__content tabs__content-trigger widget-tabpost__tabs-content">
                <div class="tabs__content-pane tabs__content-pane--active" id="tab-trending">
                  <ul class="post-list-small">
                    
                    <li class="post-list-small__item">
                      @foreach($dbl as $tin)
                   
                      <article class="post-list-small__entry clearfix mb-2">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-75">
                            <a href="/tin/{{$tin->id}}">
                              <img data-src="/img/{{$tin->urlHinh}}" src="/img/{{$tin->urlHinh}}" alt="" class=" lazyload">
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="/tin/{{$tin->id}}">{{$tin->tieuDe}}</a>
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              {{$tin->ngayDang}}
                            </li>
                          </ul>
                        </div>                  
                      </article>
                      @endforeach
                      
                    </li>
                    
                  </ul>
              
              </div> <!-- end tab content -->
            </div> <!-- end tabs -->            
          </div> <!-- end widget popular/latest posts -->

          <!-- Widget Ad 300 -->
          <div class="widget widget_media_image">
            <a href="#">
              <img src="img/blog/placeholder_300.jpg" alt="">
            </a>
          </div> <!-- end widget ad 300 -->          

          <!-- Widget Socials -->
          <div class="widget widget-socials">
            <h4 class="widget-title">Follow us</h4>
            <div class="socials">
              <a class="social social-facebook social--large" href="#" title="facebook" target="_blank" aria-label="facebook">
                <i class="ui-facebook"></i>
              </a><!--
              --><a class="social social-twitter social--large" href="#" title="twitter" target="_blank" aria-label="twitter">
                <i class="ui-twitter"></i>
              </a><!--
              --><a class="social social-google-plus social--large" href="#" title="google" target="_blank" aria-label="google">
                <i class="ui-google"></i>
              </a><!--
              --><a class="social social-instagram social--large" href="#" title="instagram" target="_blank" aria-label="instagram">
                <i class="ui-instagram"></i>
              </a><!--
              --><a class="social social-youtube social--large" href="#" title="youtube" target="_blank" aria-label="youtube">
                <i class="ui-youtube"></i>
              </a><!--
              --><a class="social social-rss social--large" href="#" title="rss" target="_blank" aria-label="rss">
                <i class="ui-rss"></i>
              </a>
            </div>
          </div> <!-- end widget socials -->

          <!-- Widget Twitter -->
          <div class="widget">
            <h4 class="widget-title">Our tweets</h4>
            <div class="tweets-container">
              <div id="tweets"></div>                  
            </div>
          </div>

          <!-- Widget Ad 125 -->
          <div class="widget widget-gallery-sm">
            <ul class="widget-gallery-sm__list">
              <li class="widget-gallery-sm__item">
                <a href="#"><img src="img/blog/placeholder_125.jpg" alt=""></a>
              </li>
              <li class="widget-gallery-sm__item">
                <a href="#"><img src="img/blog/placeholder_125.jpg" alt=""></a>
              </li>
              <li class="widget-gallery-sm__item">
                <a href="#"><img src="img/blog/placeholder_125.jpg" alt=""></a>
              </li>
              <li class="widget-gallery-sm__item">
                <a href="#"><img src="img/blog/placeholder_125.jpg" alt=""></a>
              </li>
            </ul>
          </div> <!-- end widget ad 300 -->

          <!-- Widget Carousel -->
          <div class="widget">
            <h4 class="widget-title">Featured Posts</h4>
            <div id="owl-single" class="owl-carousel owl-theme">

              <article class="entry">
                <div class="entry__img-holder mb-0">
                  <a href="single-post.html">
                    <div class="thumb-bg-holder">
                      <img data-src="img/blog/featured_post_img_1.jpg" src="img/blog/featured_post_img_1.jpg" class="entry__img owl-lazy" alt="">
                      <div class="bottom-gradient"></div>
                    </div>
                  </a>
                </div>

                <div class="thumb-text-holder">  
                  <h2 class="thumb-entry-title thumb-entry-title--sm">
                    <a href="single-post.html">Myanmar little monk reading book outside monastery</a>
                  </h2>
                </div>
              </article>

              <article class="entry">
                <div class="entry__img-holder mb-0">
                  <a href="single-post.html">
                    <div class="thumb-bg-holder">
                      <img data-src="img/blog/featured_post_img_2.jpg" src="img/blog/featured_post_img_2.jpg" class="entry__img owl-lazy" alt="">
                      <div class="bottom-gradient"></div>
                    </div>
                  </a>
                </div>

                <div class="thumb-text-holder">  
                  <h2 class="thumb-entry-title thumb-entry-title--sm">
                    <a href="single-post.html">Spectacular display of northern lights illuminates sky</a>
                  </h2>
                </div>
              </article>


            </div>
          </div>

          <!-- Latest Reviews -->
          

          <!-- Widget Tags -->
          <div class="widget widget_tag_cloud">
            <h4 class="widget-title">Tags</h4>
            <div class="tagcloud">
              <a href="#">Magazine</a>
              <a href="#">Creative</a>
              <a href="#">Responsive</a>
              <a href="#">Modern</a>
              <a href="#">Tech</a>
              <a href="#">WordPress</a>
              <a href="#">Website</a>
              <a href="#">News</a>
            </div>
          </div>

        </aside> <!-- end sidebar -->
      
      </div> <!-- end content -->
    </div> <!-- end main container -->

@endsection
 