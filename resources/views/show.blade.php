<x-app-layout>
  <div class="row mt-4 card">
    <div class="col-md-6 col-lg-4 mb-3">
      <div style="display: flex">
        <img class="card-img-top mt-3 rounded" src="/images/{{ $product->image }}" alt="Card image cap" />
        <div style=" width: 1000px" class="m-3">
          <h5 class="card-title" style="font-size: 25px">{{ $product->name }}</h5>
          <h5 class="card-text" style="font-size: 15px; color: rgb(141, 140, 140)">{{ $product->author }}</h5>
          <p style="width: 600px" class="card-text">
            {{ $product->detail }}
          </p>
          <div class="d-flex" style="gap: 10px">
            <a href="{{ route('products.edit',$product->id) }}" class="btn btn-outline-primary"><i class="bx bx-edit-alt me-1"></i> Edit</a>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">             
                @csrf
                @method('DELETE')                
                <button class="btn btn-outline-danger"><i class="bx bx-trash me-1"></i> Delete</button>
              </form>  
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
