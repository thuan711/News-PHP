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
        </div>
</section>
@endsection