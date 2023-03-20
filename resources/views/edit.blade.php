<x-app-layout>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input value="{{ $product->nama }}" type="text" name="nama" class="form-control" placeholder="nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input value="{{ $product->image }}" type="file" name="image" class="form-control" placeholder="image">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>harga:</strong>
                    <input value="{{ $product->harga }}" type="text" name="harga" class="form-control" placeholder="harga">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>stok:</strong>
                    <input value="{{ $product->stok }}" type="number" name="stok" class="form-control" placeholder="stok">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>kadaluarsa:</strong>
                    <input value="{{ $product->kadaluarsa }}" type="date" name="kadaluarsa" class="form-control" placeholder="kadaluarsa">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>berat satuan:</strong>
                    <input value="{{ $product->berat_satuan }}" type="text" name="berat_satuan" class="form-control" placeholder="berat_satuan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipe :</strong>
                    <input value="{{ $product->tipe }}" type="text" name="tipe" class="form-control" placeholder="tipe">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Komposisi :</strong>
                    <input value="{{ $product->komposisi }}" type="text" name="komposisi" class="form-control" placeholder="komposisi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>deskripsi :</strong>
                    <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="deskripsi ">{{ $product->deskripsi }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

</x-app-layout>