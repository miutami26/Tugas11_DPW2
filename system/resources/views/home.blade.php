@extends('customer.template.baseUser')

@section('content')
<br>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="card-body bg-warning">
                      <form action="{{url('home/filter')}}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="" class="control-label">Nama</label>
                          <input type="text" class="form-control" name="Nama_produk" value="{{$nama ?? ''}}">
                        </div>
                        <div class="form-group">
                          <label for="" class="control-label">Stok</label>
                          <input type="text" class="form-control" name="Stok" value="{{$Stok ?? ''}}">
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="" class="control-label">Harga Min</label>
                            <input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ''}}">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="" class="control-label">Harga Max</label>
                            <input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ''}}">
                          </div>
                        </div>
                        <button class="btn btn-dark float-right">
                          <i class="fa fa-search">Filter</i>
                        </button>
                      </form>
                    </div>
                </div>
              <div class="col">
                <div class="container">
                  <div class="row">
                  <div class="col-md-12">
                    <div class="d-flex">
                      {{$list_produk->links()}}
                    </div>
                  </div>
                </div>
                <div class="row">
                @foreach($list_produk as $data)
                <div class="col-md-4 mt-5">
                  <div class="card">
                    <img src="{{url("system/public/$data->foto") }}" alt="" height ="200px">
                    <div class="card-header bg-dark">
                      <b>
                      {{$data->Nama_produk}}</b>
                    </div>
                    <div class="body">
                      {{$data->Harga}}
                    </div>
                  </div>
                </div>
                @endforeach
                </div>
                <div class="row">
                  <div class="col-md-12 mt-5">
                    <div class="d-flex">
                      {{$list_produk->links()}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
           </div>







    
@endsection