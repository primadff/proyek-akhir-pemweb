@extends('layouts.main')

@section('content')
    {{-- navbar --}}
    @include('parts.navbar')
    {{-- end of navbar --}}

    {{-- START OF MENUS --}}
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-md-3 justify-content-center">
              <div class="col mb-5">
                  <div class="card h-100">
                      <!-- Product image-->
                      <img class="card-img-top" src="{{ asset('assets/img/american-favourite.jpg') }}" alt="..." />
                      <!-- Product details-->
                      <div class="card-body p-4">
                          <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Hap Favourite</h5>
                                <!-- Product price-->
                                Rp.140.000
                          </div>
                          <!-- Input Quantity-->
                          <div class="input-group mt-3">
                              <input type="number" min="0" class="form-control" placeholder="Quantity" aria-label="Quantity" aria-describedby="quantity-addon">
                          </div>
                      </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                          <div class="text-center"><a class="btn btn-danger btn-outline mt-auto text-white" href="#">Add to cart</a></div>
                        </div>
                    </div>
              </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('assets/img/meat-lovers.jpg') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Meat Lovers</h5>
                                <!-- Product price-->
                                Rp.140.000
                            </div>
                            <!-- Input Quantity-->
                          <div class="input-group mt-3">
                            <input type="number" min="0" class="form-control" placeholder="Quantity" aria-label="Quantity" aria-describedby="quantity-addon">
                          </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                          <div class="text-center"><a class="btn btn-danger btn-outline mt-auto text-white" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('assets/img/tuna-melt.jpg') }}"  alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Tuna Melt</h5>
                                <!-- Product price-->
                                Rp.130.000
                            </div>
                            <!-- Input Quantity-->
                            <div class="input-group mt-3">
                              <input type="number" min="0" class="form-control" placeholder="Quantity" aria-label="Quantity" aria-describedby="quantity-addon">
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                          <div class="text-center"><a class="btn btn-danger btn-outline mt-auto text-white" href="#">Add to cart</a></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-md-3 justify-content-center">
              <div class="col mb-5">
                  <div class="card h-100">
                      <!-- Product image-->
                      <img class="card-img-top" src="{{ asset('assets/img/american-favourite.jpg') }}" alt="..." />
                      <!-- Product details-->
                      <div class="card-body p-4">
                          <div class="text-center">
                              <!-- Product name-->
                              <h5 class="fw-bolder">Hap Super Supreme Classic</h5>
                              <!-- Product price-->
                              Rp.135.000
                          </div>
                          <!-- Input Quantity-->
                          <div class="input-group mt-3">
                            <input type="number" min="0" class="form-control" placeholder="Quantity" aria-label="Quantity" aria-describedby="quantity-addon">
                          </div>
                      </div>
                      <!-- Product actions-->
                      <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-danger btn-outline mt-auto text-white" href="#">Add to cart</a></div>
                    </div>
                  </div>
              </div>
              <div class="col mb-5">
                  <div class="card h-100">
                      <!-- Product image-->
                      <img class="card-img-top" src="{{ asset('assets/img/meat-lovers.jpg') }}" alt="..." />
                      <!-- Product details-->
                      <div class="card-body p-4">
                          <div class="text-center">
                              <!-- Product name-->
                              <h5 class="fw-bolder">Hawaiihap Pizza</h5>
                              <!-- Product price-->
                              Rp.135.000
                          </div>
                          <!-- Input Quantity-->
                          <div class="input-group mt-3">
                            <input type="number" min="0" class="form-control" placeholder="Quantity" aria-label="Quantity" aria-describedby="quantity-addon">
                          </div>
                      </div>
                      <!-- Product actions-->
                      <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-danger btn-outline mt-auto text-white" href="#">Add to cart</a></div>
                    </div>
                  </div>
              </div>
              <div class="col mb-5">
                  <div class="card h-100">
                      <!-- Product image-->
                      <img class="card-img-top" src="{{ asset('assets/img/tuna-melt.jpg') }}"  alt="..." />
                      <!-- Product details-->
                      <div class="card-body p-4">
                          <div class="text-center">
                              <!-- Product name-->
                              <h5 class="fw-bolder">Hap Super Supreme</h5>
                              <!-- Product price-->
                              Rp.130.000
                          </div>
                          <!-- Input Quantity-->
                          <div class="input-group mt-3">
                            <input type="number" min="0" class="form-control" placeholder="Quantity" aria-label="Quantity" aria-describedby="quantity-addon">
                          </div>
                      </div>
                      <!-- Product actions-->
                      <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-danger btn-outline mt-auto text-white" href="#">Add to cart</a></div>
                    </div>
                  </div>
              </div>
            </div>
        </div>

    </section>
    {{-- END OF MENUS --}}
@endsection
