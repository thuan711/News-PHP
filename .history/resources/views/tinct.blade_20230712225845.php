@extends('layout')
@section('tieude')
    {{$tin->tieuDe}}
@endsection
@section('noidungchinh')
<section class="blog spad">
        <div class="container">
        <img src="{{asset('img/upload/images/1.jpg')}}" alt="">
            <div class="row">
                <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg='img/{{$tin->urlHinh}}'></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt="">{{$tin->ngayDang}}</span>
                            <h2>{{$tin->tieuDe}}</h2>
                            <h4>{{$tin->tomTat}}</h4>
                            <p>{!!$tin->noiDung!!}</p>
                        </div>
                    </div>
                </div>
        </div>
</section>
@endsection