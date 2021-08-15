<div>
    <div class="container">
        <div class="row">
            <div class="products">
                @foreach ($products as $product)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset($product->img_path) }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $product->name }}
                                <span class="badge bg-secondary">
                                    {{ $product->tag }}
                                </span>
                            </h5>
                            <p class="card-text">
                                {{ $product->description }}
                            </p>
                            <div class="cart_buttons">
                                <button class="btn btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                </button>
                                @php
                                    $cart = 0;
                                @endphp
                                <div>
                                    <h3 class="cart_number">{{ $cart }}</h3>
                                </div>
                                <button class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-dash-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <style>
        .container>.row>.products {
            display: grid;
            place-items: center;
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }

        .container>.row>.products>.card {
            margin: 10px
        }

        .container>.row>.products>.card>img {
            height: 200px;
        }

        .cart_buttons {
            display: flex;
            margin: 5px;
            justify-content: space-around;
        }

        .cart_number {
            padding-left: 5px;
            padding-right: 5px;
            border: 1px solid black;
        }

        .card-text {
            display: block;
            text-overflow: ellipsis;
            word-wrap: break-word;
            overflow: hidden;
            max-height: 4.5em;
            text-align: center;
        }

    </style>
</div>
