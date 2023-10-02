@extends('register')
@section('cart')
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gary-100 border-gray-200 p-6 rounded-xl">

            @for ($i = 0; $i < count($dataSet); ++$i)
                @foreach ($dataSet[$i] as $item)
                <div class="col-md-6">
                    <div class="box_main">
                        <div class="image_2"><img src="images/{{ $item->image }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="cycles_text">{{ $item->name }}</h1>
                    <p class="lorem_text">{{ $item->desc }}</p>
                    <div class="btn_main">
                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                        <h4 class="price_text">Price <span style=" color: #325662; height:480px">
                                {{ $item->price }}</span></h4>
                    </div>
                </div>
                @endforeach
            @endfor


        </main>
    </section>
@endsection
