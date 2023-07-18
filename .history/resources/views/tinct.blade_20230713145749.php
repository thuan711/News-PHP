@extends('layout')
@section('tieude')
    {{$tin->tieuDe}}
@endsection
@section('noidungchinh')
<section class="breadcrumb-blog set-bg" data-setbg="/img/breadcrumb-bg.jpg">
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
        <!-- <img src="{{asset('img/upload/images/1.jpg')}}" alt=""> -->
            <div class="row">
                <div class="blog__item">
                        
                        <div class="blog__item__text">
                            <span><img src="/img/icon/calendar.png" alt="">{{$tin->ngayDang}}</span>
                            <h2>{{$tin->tieuDe}}</h2>
                            <h4>{{$tin->tomTat}}</h4>
                            <p>{!!$tin->noiDung!!}</p>
                        </div>
                    </div>
                </div>
        </div>
</section>
@endsection