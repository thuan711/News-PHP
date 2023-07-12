@extends('layout')
@section('tieude')
    Trang Tin Tức
@endsection
@section('noidungchinh')
<section class="blog spad">
        <div class="container">
            <div class="row">
            <article class="col-sm-9">
                <div class="row">
                    <div class="input-group mb-3" id="timkiem">
						<form action="/tinmoi" method="get">
							<input name="tukhoa" class="border border-primary p-2 col-6" placeholder= "Từ khóa">
  							<button type="submit" class="btn btn-primary p-2 col-2">Tìm </button>
						</form>
					</div>
                   
                        @foreach($data as $tin)
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="blog__item">
                                    <a href="/tin/{{$tin->id}}">
                                        <div class="blog__item__pic set-bg" data-setbg="img/{{$tin->urlHinh}}"></div>
                                    </a>
                                    <div class="blog__item__text">
                                        <span><img src="img/icon/calendar.png" alt="">{{$tin->ngayDang}}</span>
                                        <h5>{{$tin->tieuDe}}</h5>
                                        <p>{{$tin->tomTat}}</p>
                                        <a href="tin/{{$tin->id}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                   
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="pagination-wrap">
                            <ul>
                                <li><a href="#">Prev</a></li>
                                <li>{{ $data->onEachSide(2)->links()}}</li>
                                <li><a href="#">Next</a></li>
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
									<a href="/{{$lo->id}}">{{$lo->ten}}</a>
								</li>
							</ul>
						</div>
						@endforeach
					</div>
				</aside>
            </div>

        </div>
</section>
@endsection