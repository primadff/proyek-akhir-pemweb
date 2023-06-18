@extends('layouts.main')

@section('content')

{{-- navbar --}}
@include('parts.navbar')
{{-- end of navbar --}}


    {{-- START OF MENUS --}}
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-md-3  justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('assets/img/american-favourite.jpg') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-5">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Hap Favourite</h5>
                                <!-- Product price-->
                                Rp.140.000
                            </div>
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Simple Buttons and Input</title>
                              </head>
                              <body>
                                <div style="text-align: center;">
                                  <button onclick="decrease()">-</button>
                                  <input type="text" id="itemCount" value="0" readonly>
                                  <button onclick="increase()">+</button>
                                </div>
                              
                                <script>
                                  var itemCount = 0;
                                  var itemCountElement = document.getElementById("itemCount");
                              
                                  function decrease() {
                                    if (itemCount > 0) {
                                      itemCount--;
                                      itemCountElement.value = itemCount;
                                    }
                                  }
                              
                                  function increase() {
                                    itemCount++;
                                    itemCountElement.value = itemCount;
                                  }
                                </script>
                              </body>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('assets/img/super-supreme-pizza.jpg') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Super Supreme Hap Signature</h5>
                                <!-- Product price-->
                                Rp.140.000
                            </div>
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Simple Buttons and Input</title>
                              </head>
                              <body>
                                <div style="text-align: center;">
                                  <button onclick="decrease()">-</button>
                                  <input type="text" id="itemCount" value="0" readonly>
                                  <button onclick="increase()">+</button>
                                </div>
                              
                                <script>
                                  var itemCount = 0;
                                  var itemCountElement = document.getElementById("itemCount");
                              
                                  function decrease() {
                                    if (itemCount > 0) {
                                      itemCount--;
                                      itemCountElement.value = itemCount;
                                    }
                                  }
                              
                                  function increase() {
                                    itemCount++;
                                    itemCountElement.value = itemCount;
                                  }
                                </script>
                              </body>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
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
                                <h5 class="fw-bolder">Meat Lovers Hap Signature</h5>
                                <!-- Product price-->
                                Rp.140.000
                            </div>
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Simple Buttons and Input</title>
                              </head>
                              <body>
                                <div style="text-align: center;">
                                  <button onclick="decrease()">-</button>
                                  <input type="text" id="itemCount" value="0" readonly>
                                  <button onclick="increase()">+</button>
                                </div>
                              
                                <script>
                                  var itemCount = 0;
                                  var itemCountElement = document.getElementById("itemCount");
                              
                                  function decrease() {
                                    if (itemCount > 0) {
                                      itemCount--;
                                      itemCountElement.value = itemCount;
                                    }
                                  }
                              
                                  function increase() {
                                    itemCount++;
                                    itemCountElement.value = itemCount;
                                  }
                                </script>
                              </body>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('assets/img/Pizza-Super-Supreme-Classic.jpg') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Pizza Hap Supreme Classic</h5>
                                <!-- Product price-->
                                Rp.124.000
                            </div>
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Simple Buttons and Input</title>
                              </head>
                              <body>
                                <div style="text-align: center;">
                                  <button onclick="decrease()">-</button>
                                  <input type="text" id="itemCount" value="0" readonly>
                                  <button onclick="increase()">+</button>
                                </div>
                              
                                <script>
                                  var itemCount = 0;
                                  var itemCountElement = document.getElementById("itemCount");
                              
                                  function decrease() {
                                    if (itemCount > 0) {
                                      itemCount--;
                                      itemCountElement.value = itemCount;
                                    }
                                  }
                              
                                  function increase() {
                                    itemCount++;
                                    itemCountElement.value = itemCount;
                                  }
                                </script>
                              </body>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('assets/img/hawaiian-pizza.jpg') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Hawaiian Chicken Classic</h5>
                                <!-- Product price-->
                                Rp.124.000
                            </div>
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Simple Buttons and Input</title>
                              </head>
                              <body>
                                <div style="text-align: center;">
                                  <button onclick="decrease()">-</button>
                                  <input type="text" id="itemCount" value="0" readonly>
                                  <button onclick="increase()">+</button>
                                </div>
                              
                                <script>
                                  var itemCount = 0;
                                  var itemCountElement = document.getElementById("itemCount");
                              
                                  function decrease() {
                                    if (itemCount > 0) {
                                      itemCount--;
                                      itemCountElement.value = itemCount;
                                    }
                                  }
                              
                                  function increase() {
                                    itemCount++;
                                    itemCountElement.value = itemCount;
                                  }
                                </script>
                              </body>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('assets/img/tuna-melt.jpg') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Tuna Melt Classic</h5>
                                <!-- Product price-->
                                Rp.124.000
                            </div>
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Simple Buttons and Input</title>
                              </head>
                              <body>
                                <div style="text-align: center;">
                                  <button onclick="decrease()">-</button>
                                  <input type="text" id="itemCount" value="0" readonly>
                                  <button onclick="increase()">+</button>
                                </div>
                              
                                <script>
                                  var itemCount = 0;
                                  var itemCountElement = document.getElementById("itemCount");
                              
                                  function decrease() {
                                    if (itemCount > 0) {
                                      itemCount--;
                                      itemCountElement.value = itemCount;
                                    }
                                  }
                              
                                  function increase() {
                                    itemCount++;
                                    itemCountElement.value = itemCount;
                                  }
                                </script>
                              </body>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    {{-- END OF MENUS --}}
@endsection