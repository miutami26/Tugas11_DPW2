<?php 
namespace App\Http\Controllers;
use App\Models\Produk;
class HomeController extends Controller{
	function showBeranda(){
		return view('beranda');
	}
	function showKategory(){
		return view('kategory');
	}
	function showProduk(){
		return view('produk');
	}
	function showPromo(){
		return view('promo');
	}
	function showPelanggan(){
		return view('pelanggan');
	}
	function showSupplier(){
		return view('supplier');
	}
	function showCreate(){
		return view('create');
	}
	function showTemplate(){
		return view('template.base');
	}
	function test($produk, $hargaMin =0 , $hargaMax =0){
		if($produk == 'lampu'){
			echo "Tampilkan Produk Lampu";
		}elseif ($produk == 'spiker') {
			echo "Produk Spiker";
		}
		echo "<br>";
		echo "Harga minimal adalah $hargaMin <br>";
		echo "Harga Maximal adalah $hargaMax <br>";
	}
	public function testCollection(){
		
		
		$list_produk = Produk::all();

		//sortby harga terendah
		//dd($list_produk->sortBy('harga'));

		//sortby harga tertinggi
		//dd($list_produk->sortByDesc('harga'));

		//$data['list'] = $list_produk;
		//return view('test-collection', $data);

		//maps
		//$map = $list_produk->map(function($item){
			//$result['nama'] = $item->nama;
			//$result['harga'] = $item->harga;
			//return $result;
		//});
		//dd($map);

		//each
		//$list_produk->each(function($item){
			//echo "$item->nama<br>";
		//});

		//filter
		//$filtered = $list_produk->filter(function($item){
			//return $item->harga > 3000;
		//});
		//dd($filtered);


		//$sum = $list_produk->sum('harga');
		//dd($sum);

		//$sum = $list_produk->max('harga');
		//dd($sum);

		//$sum = $list_produk->min('harga');
		//dd($sum);

		//$sum = $list_produk->average('harga');
		//dd($sum);

		$data['list'] = Produk:: Paginate(5);
		return view('test-collection', $data);

		dd($list_bike, $list_produk);
	}
	

}

