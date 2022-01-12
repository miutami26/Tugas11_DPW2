<p>
    {{$produk->harga}} |
	Stok : {{$produk->stok}} |
	Berat : {{$produk->berat}} Kg |
	Warna : {{$produk->warna}} |
	Seller : {{$produk->seller->nama}} <br> 
	Diupload : {{$produk->created_at->diffforHumans()}} | 
    Diupdate : {{$produk->updated_at->diffforHumans()}}
</p>