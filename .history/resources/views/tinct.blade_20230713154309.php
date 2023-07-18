@extends('layout')
@section('tieude')
    {{$tin->tieuDe}}
@endsection
@section('noidungchinh')

<section class="blog spad">
        <div class="container">
        <img src="/img/{{$tin->urlHinh}}" alt="" style="width:100%">
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
                <div class="row">
                    @foreach($tinlq as $tin)
                        <div class="col-lg-4 col-md-6 text-center">
                            <div class="blog__item">
                                <a href="/tin/{{$tin->id}}">
                                    <div class="blog__item__pic set-bg">
                                        <img src="/img/{{$tin->urlHinh}}" alt="">
                                    </div>
                                </a>
                                <div class="blog__item__text">
                                
                                    <span><img src="/img/icon/calendar.png" alt="">{{$tin->ngayDang}}</span>
                                    <h5>{{$tin->tieuDe}}</h5>
                                    <p>{{$tin->tomTat}}</p>
                                    <a href="/tin/{{$tin->id}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
</section>
@endsection