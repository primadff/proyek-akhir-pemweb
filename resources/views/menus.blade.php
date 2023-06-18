@extends('layouts.main')

@section('content')

{{-- navbar --}}
@include('parts.navbar')
{{-- end of navbar --}}


    {{-- START OF MENUS --}}
    <section class="py-0">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-md-3  justify-content-center">
              <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Product Card</title>
                <style>
                  .card-container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                  }
                  .card {
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    padding: 10px;
                    width: 300px;
                    text-align: center;
                  }
                  .card-title {
                    font-weight: bold;
                    margin-bottom: 10px;
                  }
                  .item-image {
                    max-width: 100%;
                    height: auto;
                    margin-bottom: 10px;
                  }
                  .quantity {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-bottom: 10px;
                  }
                  .quantity input {
                    width: 50px;
                    text-align: center;
                  }
                  .quantity button {
                    margin: 0 5px;
                    padding: 5px 10px;
                  }
                  .add-to-cart {
                    background-color: #007bff;
                    color: #fff;
                    border: none;
                    border-radius: 4px;
                    padding: 8px 16px;
                    cursor: pointer;
                  }
                </style>
              </head>
              <body>
                <div class="card-container">
                  <div class="card">
                    <h2 class="card-title">American Favourite</h2>
                    <img class="item-image" src="{{ asset('assets/img/american-favourite.jpg') }}" alt="Product Image">
                    <div class="quantity">
                      <button class="quantity-button" id="decreaseButton">-</button>
                      <input type="number" class="quantity-input" id="quantityInput" value="0">
                      <button class="quantity-button" id="increaseButton">+</button>
                    </div>
                    <script>
                      const decreaseButton = document.getElementById('decreaseButton');
                      const increaseButton = document.getElementById('increaseButton');
                      const quantityInput = document.getElementById('quantityInput');

                      decreaseButton.addEventListener('click', () => {
                      if (quantityInput.value > 0) {
                        quantityInput.value--;
                      }
                    });

                    increaseButton.addEventListener('click', () => {
                      quantityInput.value++;
                    });
                    </script>
                    <button class="add-to-cart">Add to Cart</button>
                  </div>
                </div>
              </body>
              <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Product Card</title>
                <style>
                  .card-container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                  }
                  .card {
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    padding: 10px;
                    width: 300px;
                    text-align: center;
                  }
                  .card-title {
                    font-weight: bold;
                    margin-bottom: 10px;
                  }
                  .item-image {
                    max-width: 100%;
                    height: auto;
                    margin-bottom: 10px;
                  }
                  .quantity {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-bottom: 10px;
                  }
                  .quantity input {
                    width: 50px;
                    text-align: center;
                  }
                  .quantity button {
                    margin: 0 5px;
                    padding: 5px 10px;
                  }
                  .add-to-cart {
                    background-color: #007bff;
                    color: #fff;
                    border: none;
                    border-radius: 4px;
                    padding: 8px 16px;
                    cursor: pointer;
                  }
                </style>
              </head>
              <body>
                <div class="card-container">
                  <div class="card">
                    <h2 class="card-title">Supreme Happ Signature</h2>
                    <img class="item-image" src="{{ asset('assets/img/super-supreme-pizza.jpg') }}" alt="Product Image">
                    <div class="quantity">
                      <button class="quantity-button" id="decreaseButton">-</button>
                      <input type="number" class="quantity-input" id="quantityInput" value="0">
                      <button class="quantity-button" id="increaseButton">+</button>
                    </div>
                    <script>
                      const decreaseButton = document.getElementById('decreaseButton');
                      const increaseButton = document.getElementById('increaseButton');
                      const quantityInput = document.getElementById('quantityInput');

                      decreaseButton.addEventListener('click', () => {
                      if (quantityInput.value > 0) {
                        quantityInput.value--;
                      }
                    });

                    increaseButton.addEventListener('click', () => {
                      quantityInput.value++;
                    });
                    </script>
                    <button class="add-to-cart">Add to Cart</button>
                  </div>
                </div>
              </body>
              <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Product Card</title>
                <style>
                  .card-container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                  }
                  .card {
                    width: 250px; 
                    height: 500px; 
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    padding: 10px;
                    width: 300px;
                    text-align: center;
                  }
                  .card-title {
                    font-weight: bold;
                    margin-bottom: 10px;
                  }
                  .item-image {
                    max-width: 100%;
                    height: auto;
                    margin-bottom: 10px;
                  }
                  .quantity {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-bottom: 10px;
                  }
                  .quantity input {
                    width: 50px;
                    text-align: center;
                  }
                  .quantity button {
                    margin: 0 5px;
                    padding: 5px 10px;
                  }
                  .add-to-cart {
                    background-color: #007bff;
                    color: #fff;
                    border: none;
                    border-radius: 4px;
                    padding: 8px 16px;
                    cursor: pointer;
                  }
                </style>
              </head>
              <body>
                <div class="card-container">
                  <div class="card">
                    <h2 class="card-title">Happ Meat Lovers</h2>
                    <img class="item-image" src="{{ asset('assets/img/meat-lovers.jpg') }}" alt="Product Image">
                    <div class="quantity">
                      <button class="quantity-button" id="decreaseButton">-</button>
                      <input type="number" class="quantity-input" id="quantityInput" value="0">
                      <button class="quantity-button" id="increaseButton">+</button>
                    </div>
                    <script>
                      const decreaseButton = document.getElementById('decreaseButton');
                      const increaseButton = document.getElementById('increaseButton');
                      const quantityInput = document.getElementById('quantityInput');

                      decreaseButton.addEventListener('click', () => {
                      if (quantityInput.value > 0) {
                        quantityInput.value--;
                      }
                    });

                    increaseButton.addEventListener('click', () => {
                      quantityInput.value++;
                    });
                    </script>
                    <button class="add-to-cart">Add to Cart</button>
                  </div>
                </div>
              </body>
              <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Product Card</title>
                <style>
                  .card-container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                  }
                  .card {
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    padding: 10px;
                    width: 300px;
                    text-align: center;
                  }
                  .card-title {
                    font-weight: bold;
                    margin-bottom: 10px;
                  }
                  .item-image {
                    max-width: 100%;
                    height: auto;
                    margin-bottom: 10px;
                  }
                  .quantity {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-bottom: 10px;
                  }
                  .quantity input {
                    width: 50px;
                    text-align: center;
                  }
                  .quantity button {
                    margin: 0 5px;
                    padding: 5px 10px;
                  }
                  .add-to-cart {
                    background-color: #007bff;
                    color: #fff;
                    border: none;
                    border-radius: 4px;
                    padding: 8px 16px;
                    cursor: pointer;
                  }
                </style>
              </head>
              <body>
                <div class="card-container">
                  <div class="card">
                    <h2 class="card-title">Supreme Happ Classic</h2>
                    <img class="item-image" src="{{ asset('assets/img/Pizza-Super-Supreme-Classic.jpg') }}" alt="Product Image">
                    <div class="quantity">
                      <button class="quantity-button" id="decreaseButton">-</button>
                      <input type="number" class="quantity-input" id="quantityInput" value="0">
                      <button class="quantity-button" id="increaseButton">+</button>
                    </div>
                    <script>
                      const decreaseButton = document.getElementById('decreaseButton');
                      const increaseButton = document.getElementById('increaseButton');
                      const quantityInput = document.getElementById('quantityInput');

                      decreaseButton.addEventListener('click', () => {
                      if (quantityInput.value > 0) {
                        quantityInput.value--;
                      }
                    });

                    increaseButton.addEventListener('click', () => {
                      quantityInput.value++;
                    });
                    </script>
                    <button class="add-to-cart">Add to Cart</button>
                  </div>
                </div>
                <head>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>Product Card</title>
                  <style>
                    .card-container {
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      height: 100vh;
                    }
                    .card {
                      border: 1px solid #ccc;
                      border-radius: 4px;
                      padding: 10px;
                      width: 300px;
                      text-align: center;
                    }
                    .card-title {
                      font-weight: bold;
                      margin-bottom: 10px;
                    }
                    .item-image {
                      max-width: 100%;
                      height: auto;
                      margin-bottom: 10px;
                    }
                    .quantity {
                      display: flex;
                      justify-content: center;
                      align-items: center;
                      margin-bottom: 10px;
                    }
                    .quantity input {
                      width: 50px;
                      text-align: center;
                    }
                    .quantity button {
                      margin: 0 5px;
                      padding: 5px 10px;
                    }
                    .add-to-cart {
                      background-color: #007bff;
                      color: #fff;
                      border: none;
                      border-radius: 4px;
                      padding: 8px 16px;
                      cursor: pointer;
                    }
                  </style>
                </head>
                <body>
                  <div class="card-container">
                    <div class="card">
                      <h2 class="card-title">Hawaiian Chicken Classic</h2>
                      <img class="item-image" src="{{ asset('assets/img/hawaiian-pizza.jpg') }}" alt="Product Image">
                      <div class="quantity">
                      <button class="quantity-button" id="decreaseButton">-</button>
                      <input type="number" class="quantity-input" id="quantityInput" value="0">
                      <button class="quantity-button" id="increaseButton">+</button>
                      </div>
                      <script>
                      const decreaseButton = document.getElementById('decreaseButton');
                      const increaseButton = document.getElementById('increaseButton');
                      const quantityInput = document.getElementById('quantityInput');

                      decreaseButton.addEventListener('click', () => {
                      if (quantityInput.value > 0) {
                        quantityInput.value--;
                      }
                      });

                      increaseButton.addEventListener('click', () => {
                      quantityInput.value++;
                      });
                      </script>
                      <button class="add-to-cart">Add to Cart</button>
                    </div>
                  </div>
                  <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Product Card</title>
                    <style>
                      .card-container {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                      }
                      .card {
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        padding: 10px;
                        width: 300px;
                        text-align: center;
                      }
                      .card-title {
                        font-weight: bold;
                        margin-bottom: 10px;
                      }
                      .item-image {
                        max-width: 100%;
                        height: auto;
                        margin-bottom: 10px;
                      }
                      .quantity {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        margin-bottom: 10px;
                      }
                      .quantity input {
                        width: 50px;
                        text-align: center;
                      }
                      .quantity button {
                        margin: 0 5px;
                        padding: 5px 10px;
                      }
                      .add-to-cart {
                        background-color: #007bff;
                        color: #fff;
                        border: none;
                        border-radius: 4px;
                        padding: 8px 16px;
                        cursor: pointer;
                      }
                    </style>
                  </head>
                  <body>
                    <div class="card-container">
                      <div class="card">
                        <h2 class="card-title">Tuna Melt Classic</h2>
                        <img class="item-image" src="{{ asset('assets/img/tuna-melt.jpg') }}" alt="Product Image">
                        <div class="quantity">
                          <button class="quantity-button" id="decreaseButton">-</button>
                          <input type="number" class="quantity-input" id="quantityInput" value="0">
                          <button class="quantity-button" id="increaseButton">+</button>
                        </div>
                        <script>
                          const decreaseButton = document.getElementById('decreaseButton');
                          const increaseButton = document.getElementById('increaseButton');
                          const quantityInput = document.getElementById('quantityInput');

                          decreaseButton.addEventListener('click', () => {
                          if (quantityInput.value > 0) {
                            quantityInput.value--;
                          }
                        });

                        increaseButton.addEventListener('click', () => {
                          quantityInput.value++;
                        });
                        </script>
                        <button class="add-to-cart">Add to Cart</button>
                      </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    {{-- END OF MENUS --}}
@endsection