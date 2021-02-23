<section class="section2">
    <div class="container">
        <div class="row title">
            <div class="col-md-6 offset-md-3">
                <h3>PRODUK</h3>
            </div>
        </div>
        <div class="autoplay">
            @foreach($unit as $o)
                <div class="card custom-card" style="width: 18rem;">
                    <a href="">
                        <img class="card-img-top img-fluid" src="{{ asset('image/motor-anmax.png') }}" alt="Card image cap" width="360" height="360">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $o->nama_motor }}</h5>
                        <p class="card-text">Rp. 123.000.000</p>
                    </div>
                </div>
            
            @endforeach
        </div>
    </div>
</section>