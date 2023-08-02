<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();
use Illuminate\Http\Request;
use App\Models\Category;

class TinController extends Controller
{
    function home(){
        return view('home');
    }
    function index(Request $request){  
        $tinhot = DB::table('tin')->where('noibat', 0)->orderBy('xem', 'desc')->limit(2)->get();
        $bn = DB::table('tin')->orderBy('ngayDang')->limit(2)->get();
        $tinnb = DB::table('tin')->where('noibat', 1)->orderByDesc('xem', 'desc')->limit(1)->get();
        $data = DB::table('tin')->limit(6)->get();
        $xemnhieu = DB::table('tin')->orderBy('xem')->limit(3)->get();
        $dbl = DB::table('tin')->where('noibat', 1)->limit(6)->get();
        $loai = DB::table('loaitin')->get();
        $tinmoi = DB::table('tin')->orderBy('ngayDang','desc')->limit(3)->get();
        return view('home',['data'=>$data, 'bn'=>$bn,'tinhot'=>$tinhot,'xemnhieu'=>$xemnhieu,'tinnb'=>$tinnb, 'loai'=>$loai,'dbl'=>$dbl,'tinmoi'=>$tinmoi]);
    }
    function tin(Request $request){
        $loai = DB::table('loaitin')->get();
        $dbl = DB::table('tin')->where('noibat', 1)->limit(6)->get();
        $perpage= 12;

        $tukhoa = $request->has('tukhoa') ? $request->query('tukhoa') : "";
        $tukhoa = trim(strip_tags($tukhoa));

        $listtin = DB::table('tin')
        ->when($tukhoa != "", function ($query) use ($tukhoa) {
            return $query->where("tieuDe", "like", "%$tukhoa%");
        })
        ->paginate($perpage)
        ->withQueryString();
        if ($tukhoa != "") {
            $listtin->appends(['tukhoa' => $tukhoa]);
        }
        return view('tinmoi', ['loai'=>$loai,'dbl'=>$dbl, 'listtin'=>$listtin]);
    }
    function chitiet($id=0){
        $tin = DB::table('tin')->where('id',$id)->first();
        $id_tin = $tin->id;
        $idLT = $tin->idLT; 
        $dbl = DB::table('tin')->where('noibat', 1)->limit(6)->get();
        $tinlienquan = DB::table('tin')->
        where ('idLT', $idLT)->
        orderBy('ngayDang','desc')->
        limit(3)->get()->except($id_tin);
        $bl = DB::table('binhluan')->where('idTin','=', $id)->get();
        return view('tinct',['$id' => $id, 'tin' => $tin,'dbl'=>$dbl, 'tinlienquan' => $tinlienquan, 'bl' => $bl]);
    }
    function tinTL($idLT=0){
        $loai = DB::table('loaitin')->get();
        $perpage= 12;
        $dbl = DB::table('tin')->where('noibat', 1)->limit(6)->get();
        $listtin = DB::table('tin')
        ->where ('idLT', $idLT)
        ->paginate($perpage)->withQueryString();
        $tenloai = DB::table('loaitin')->where ('id', $idLT)->value('ten');
        return view('tintrongloai', ['loai'=>$loai,'id'=>$idLT, 'dbl'=>$dbl, 'title'=>$tenloai , 'listtin'=>$listtin]);   
    }
    //học
    function addCate(Request $request){
        $request->validate([
            'cateName' => 'required|min:3',
        ],
        [
            'cateName.required' => 'Vui lòng không để trống form',
            'cateName.min' => 'Danh mục tối thiểu 3 kí tự',
        ]
        );
        $cate = new Category();
        $cate->name=$request->cateName;
        $cate->Save();
        return redirect('listcate')->with('success','Thêm danh mục thành công');
    }

    function listCate(){
        $categories = Category::orderBy('id','desc')->paginate(3);
        return view('categories.list',['categories'=>$categories]);
    }

    function delCate($id){
        Category::find($id)->delete();
        return redirect('listcate')->with('success','Xóa danh mục thành công');
    }

    function editCate($id){
        $category = Category::find($id);
        return view('categories.edit',['category'=>$category]);
    }

    function updateCate(Request $req, $id){
        $req->validate([
            'cateName' => 'required|min:3',
        ],
        [
            'cateName.required' => 'Vui lòng không để trống form',
            'cateName.min' => 'Danh mục tối thiểu 3 kí tự',
        ]
        );
        $category=Category::find($id);
        $category->name=$req->cateName;
        $category->save();
        return redirect('listcate');
    }
}
// xử lí giỏ hàng
function themvaogio(Request $request, $id_sp = 0, $soluong=1){
    /*
    cart = [
        ['id_sp'=>1, 'soluong'=>3],
        ['id_sp'=>5, 'soluong'=>9],
    ]
     */
    if ($request->session()->exists('cart')==false) {//chưa có cart trong session           
        $request->session()->push('cart', ['id_sp'=> $id_sp, 'soluong'=> $soluong]); 
    } else {// đã có cart, kiểm tra id_sp có trong cart không
        $cart = $request->session()->get('cart'); 
        $index = array_search($id_sp, array_column($cart, 'id_sp'));
        if ($index!=''){ //id_sp có trong giỏ hàng thì tăhg số lượng
            $cart[$index]['soluong']+=$soluong;
            $request->session()->put('cart', $cart);
        }
        else { //sp chưa có trong arrary cart thì thêm vào 
            $cart[]= ['id_sp'=> $id_sp, 'soluong'=> $soluong];
            $request->session()->put('cart', $cart);
        }
    }
    // echo "<pre>";
    // print_r($request->session()->get('cart'));
    // $request->session()->forget('cart');
    return redirect('/hiengiohang');
}
function hiengiohang(Request $request){
    $cart = $request->session()->get('cart'); 
    return view('hiengiohang', ['cart'=> $cart]);
}
function xoasptronggio(Request $request, $id_sp=0){
    $cart = $request->session()->get('cart'); 
    $index = array_search($id_sp, array_column($cart, 'id_sp'));
    if ($index!=''){ 
        array_splice($cart, $index, 1);
        $request->session()->put('cart', $cart);
    }
    return redirect('/hiengiohang');
}
function thanhtoan(Request $request){
    $cart = $request->session()->get('cart'); 
    return view('thanhtoan', ['cart'=> $cart]);
}
function thanhtoan_(RuleThanhToan $request){
    $arr = $request->post();
    $tennguoinhan = ($request->has('tennguoinhan')) ? $arr['tennguoinhan'] : "";
    $email = ($request->has('email')) ? $arr['email'] : "";
    $dienthoai = ($request->has('dienthoai')) ? $arr['dienthoai'] : "";
    $diachigiaohang = ($request->has('diachigiaohang')) ? $arr['diachigiaohang'] : "";
    $tongtien = $request['tongtien'];
    $id_user = Auth::id();
    $cart = session()->get('cart');
    $dh = new \App\Models\Donhang;
    $dh->tennguoinhan = $tennguoinhan;
    $dh->email = $email;
    $dh->dienthoai = $dienthoai;
    $dh->diachigiaohang = $diachigiaohang;
    $dh->tongtien = $tongtien;
    $dh->id_user = $id_user;
    $dh->save();
    $id_dh = $dh->id_dh;

    // Lưu thông tin chi tiết đơn hàng vào bảng "Chi tiết đơn hàng"
    foreach ($cart as $item) {
        $id_sp = $item['id_sp'];
        $soluong = $item['soluong'];
        $ten_sp = DB::table('sanpham')->where('id_sp', '=', $id_sp)->value('ten_sp');
        $gia = DB::table('sanpham')->where('id_sp', '=', $id_sp)->value('gia');

        // Tạo đối tượng "Chi tiết đơn hàng" và lưu vào database
        $ctdh = new \App\Models\ChiTietDonHang;
        $ctdh->id_dh = $id_dh;
        $ctdh->id_sp = $id_sp;
        $ctdh->ten_sp = $ten_sp;
        $ctdh->soluong = $soluong;
        $ctdh->gia = $gia;
        $ctdh->save();
    }
    $orderInfo = [
        'tong_tien' => $tongtien,
        'ten_nguoi_nhan' => $tennguoinhan,
        'dia_chi_giao_hang' => $diachigiaohang,
        'dien_thoai' => $dienthoai,
    ];
    Mail::to($email)->send(new ThanhToanSuccessEmail($orderInfo));
    $request->session()->forget('cart');
    Session::flash('statusAlert','success');
    return redirect('/')->with('status', 'Đặt hàng thành công');
}