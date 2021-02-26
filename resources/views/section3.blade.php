<section id="section3">
    <div class="container">
        <div class="row title">
            <div class="col-md-6 offset-md-3">
                <h3>SIMULASI KREDIT</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-kiri">
                <div class="form-group">
                    <label for="motor">Nama Motor</label>
                    <input type="text" class="form-control form-simulasi" id="motor" name="motor" data-toggle="modal" data-target="#menu_motor">
                </div>
                <div class="form-group">
                    <label for="dp">Down Payment (%)</label>
                    <input type="text" class="form-control form-simulasi" id="downpayment" name="dp" onkeyup="hitung_downpayment()">
                </div>
                <label for="tenor">Jangka Waktu Cicilan</label>
                <select name="tenor" id="tenor" class="form-control form-simulasi">
                    <option selected>Pilih Tenor</option>
                    <option value="12">12 Bulan</option>
                    <option value="24">24 Bulan</option>
                    <option value="32">32 Bulan</option>
                </select>
            </div>

            <div class="col-md-6 col-sm-12 col-kanan">
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <h3><span id="harga_motor"></span></h3>
                    <input type="number" id="angka_motor" hidden>
                </div>
                <div class="form-group">
                    <label for="total_dp">Total DP</label>
                    <h3><span id="dp_motor"></span></h3>
                    <span id="angka_dp" hidden></span>
                </div>
                <label for="bunga">Bunga</label>
                <select name="bunga" id="bunga" class="form-control form-simulasi">
                    <option selected>Pilih Bunga</option>
                    <option value="0.0175">1.75%</option>
                    <option value="0.024">2.4%</option>
                </select>
            </div>
        </div>

        <div class="row justify-content-md-center">
            <button class="btn-action btn-simulasi" id="hitung" onclick="hitung_kredit();">
                    Hitung
            </button>
        </div>

        <div class="row justify-content-md-center text-bayar">
            <h3 id="angsuran">
                <!-- hasil js angsuran -->
            </h3>
        </div>
    </div>
</section>