<x-app-layout>
    <style>
        .container-book {
            z-index: 1;
            perspective: 3000px;
        }

        .container-book .book {
            position: relative;
            display: block;
            width: 150px;
            height: 200px;
            border-radius: 2px 4px 4px 2px;
            background: linear-gradient(45deg, #DAD5DC 0%, #f2ebf4 100%);
            font-family: acumin-pro, sans-serif;
            box-shadow: 10px 10px 20px 0px rgba(151, 146, 153, 0.31);
            font-weight: 400;
            color: #2b2b2b;
            transform-style: preserve-3d;
            transition: transform .5s;
        }

        .container-book .book:hover {
            transform: rotate3d(0, 1, 0, 35deg);
        }

        .container-book .book>div,
        .container-book .front>div {
            display: block;
            position: absolute;
        }


        .container-book .front {
            transform-style: preserve-3d;
            transform-origin: 0% 50%;
            transition: transform .5s;
            transform: translate3d(0, 0, 20px);
            z-index: 10;
        }

        .container-book .front>div {
            width: 150px;
            height: 200px;
        }

        .container-book .left-side {
            width: 40px;
            left: -20px;
            height: 200px;
            background-color: rgba(232, 229, 234);
            transform: rotate3d(0, 1, 0, -90deg);
        }

        .cover img {
            width: 150px;
            height: 200px;
            object-fit: cover;
            border-radius: 0px 5px 5px 0px;
        }

        .left-side img {
            width: 40px;
            height: 200px;
            object-fit: cover;
            object-position: left;
            filter: brightness(.5);
        }

        .container-book .front>div {
            border-radius: 0 3px 3px 0;
            box-shadow: inset 4px 0 10px rgba(0, 0, 0, 0.1);
        }

        .container-book .front:after {
            content: '';
            position: absolute;
            top: 1px;
            bottom: 1px;
            left: -1px;
            width: 1px;
        }

        .container-book .cover:after {
            content: '';
            position: absolute;
            top: 0;
            left: 10px;
            bottom: 0;
            width: 3px;
            background: rgba(0, 0, 0, 0.1);
            box-shadow: 1px 0 3px rgba(255, 255, 255, 0.1);
        }

        .cover {
            background: linear-gradient(45deg, #DAD5DC 0%, #f2ebf4 100%);
        }



        .book::before {
            left: -3px;
        }

        .book::after {
            left: -6px;
        }
    </style>
    <a href="/products/create" class="btn btn-primary mt-3">Add Book</a>
    <div class="card mt-4">
        <div class="header d-flex align-items-center justify-content-between">
            <div class="head">
                <h5 class="card-header">Data</h5>
            </div>
            <div class="btn-head">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
                    Import
                </button>

                <!-- Modal -->
                <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                    <div class="modal-dialog">
                        <form class="modal-content" action="/importexcel" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="backDropModalTitle">Import Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nameBackdrop" class="form-label">Name</label>
                                        <input type="file" id="nameBackdrop" class="form-control"
                                            name="file" />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <a href="/exportexcel" class="btn btn-success mx-3">Export</a>
            </div>
        </div>


        <hr>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>image</th>
                        <th>harga</th>
                        <th>stok</th>
                        <th>berat</th>
                        <th>komposisi</th>
                        <th>deskripsi</th>
                        <th>kadaluarsa</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach ($products as $product)
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>{{++$i}}</td>
                        <td>
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                            <strong>{{ $product->name }}</strong>
                        </td>
                        <td>
                            <div class="container-book">
                                <div class="book">
                                    <div class="front">
                                        <div class="cover">
                                            <img src="/images/{{ $product->image }}" alt="">
                                        </div>
                                    </div>
                                    <div class="left-side">
                                        <img src="/images/{{ $product->image }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{-- <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li
                          data-bs-toggle="tooltip"
                          data-popup="tooltip-custom"
                          data-bs-placement="top"
                          class="avatar avatar-xs pull-up"
                          title="Lilian Fuller"
                        >
                          <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                          data-bs-toggle="tooltip"
                          data-popup="tooltip-custom"
                          data-bs-placement="top"
                          class="avatar avatar-xs pull-up"
                          title="Sophia Wilkerson"
                        >
                          <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                        </li>
                        <li
                          data-bs-toggle="tooltip"
                          data-popup="tooltip-custom"
                          data-bs-placement="top"
                          class="avatar avatar-xs pull-up"
                          title="Christina Parker"
                        >
                          <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                        </li>
                      </ul> --}}
                            {{ $product->harga }}
                        </td>
                        <td>{{ $product->stok }}</td>
                        <td>{{ $product->berat_satuan }}</td>
                        <td>{{ $product->komposisi }}</td>
                        <td>{{ $product->deskripsi }}</td>
                        <td><span class="badge bg-label-warning me-1">{{ $product->kadaluarsa }}</span></td>
                        <td>
                            <div class="dropdown" style="position: absolute; margin: -15px 20px 0px">
                                <div class="dropdown" style="position: absolute; margin: -15px 20px 0px">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('products.edit',$product->id) }}"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>

                                        <a class="dropdown-item" href="{{ route('products.show',$product->id) }}"
                                            style="display: flex; align-items:center; gap: 7px">
                                            <iconify-icon icon="ph:info-bold" style="font-size: 20px;"></iconify-icon>
                                            <span>info</span>
                                        </a>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="dropdown-item"><i class="bx bx-trash me-1"></i>
                                                Delete</button>
                                        </form>
                                    </div>
                                </div>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
    </div>
    </div>
    </div>
    </div> --}}
</x-app-layout>