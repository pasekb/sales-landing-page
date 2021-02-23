<section class="section3">
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
                    <input type="text" class="form-control form-simulasi" id="motor" name="motor">
                </div>
                <div class="form-group">
                    <label for="dp">Down Payment (%)</label>
                    <input type="text" class="form-control form-simulasi" id="dp" name="dp">
                </div>
                <label for="tenor">Jangka Waktu Cicilan</label>
                <select name="tenor" id="tenor" name="tenor" class="form-control form-simulasi">
                <option value="" disabled="disabled">Pilih Tenor</option>
                    <option value="12">12 Bulan</option>
                    <option value="24">24 Bulan</option>
                    <option value="32">32 Bulan</option>
                </select>
            </div>

            <div class="col-md-6 col-sm-12 col-kanan">
                <div class="form-group">
                    <label for="total_dp">Total DP</label>
                    <input type="text" class="form-control form-simulasi" id="total_dp" name="total_dp">
                </div>
                <div class="form-group">
                    <label for="total_dp">Total DP</label>
                    <input type="text" class="form-control form-simulasi" id="total_dp" name="total_dp">
                </div>
                <label for="bunga">Bunga</label>
                <select name="bunga" id="bunga" name="bunga" class="form-control form-simulasi">
                    <option value="" disabled="disabled">Pilih Bunga</option>
                    <option value="1.75">1.75%</option>
                    <option value="2.4">2.4%</option>
                </select>
            </div>
        </div>

        <div class="row justify-content-md-center">
            <button class="btn-action btn-simulasi" id="hitung">
                    Hitung
            </button>
        </div>

        <div class="row justify-content-md-center text-bayar">
            <h3 id="bayar">Rp. 123.000.000</h3>
        </div>
    </div>
</section>