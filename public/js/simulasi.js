const formatter = new Intl.NumberFormat('id-ID', {

    style: 'currency',
  
    currency: 'IDR',
  
    minimumFractionDigits: 0
  
  })
  
  
  
  function hitung_dp(){
  
    let dp = document.getElementById("dp").value;
  
    let persen = parseFloat(dp) / 100;
  
    let harga = document.getElementById("angka_motor").value;
  
    let uangmuka = harga*persen;
  
  
  
    let rupiah = formatter.format(uangmuka);
  
  
  
    if(!isNaN(uangmuka)){
  
      document.getElementById("angka_dp").innerHTML = uangmuka;
  
      document.getElementById("dp_motor").innerHTML = rupiah;
  
    }
  
  }
  
  
  
  function hitung_kredit(){
  
    // Hitung Uang Muka
  
    let dp = document.getElementById("dp").value;
  
    let persen = parseFloat(dp) / 100;
  
    let harga = document.getElementById("angka_motor").value;
  
    let uangmuka = harga*persen;
  
  
  
    //Hitung Sisa Utang
  
    let bunga = document.getElementById("bunga").value;
  
    let tenor = document.getElementById("tenor").value;
  
    let harga = document.getElementById("angka_motor").value;
  
    let utang = parseFloat(harga)-parseFloat(uangmuka);
  
  
  
    // Hitung Bunga
  
    if (bunga == 0.0175) {
  
      let admin = 1700000;
  
      let perasuransi = 0.0144;
  
    } else if (bunga == 0.024) {
  
      let admin = 1200000;
  
      let perasuransi = 0.008;
  
    }
  
  
  
    let asuransi = parseFloat(harga)*parseFloat(perasuransi);
  
    let total = parseFloat(utang)+parseFloat(admin)+parseFloat(asuransi);
  
    let pokok = parseFloat(total)/parseFloat(tenor);
  
    let hasilBunga = parseFloat(total)*parseFloat(bunga);
  
  
  
    // Hitung Angsuran
  
    let hasil = parseFloat(pokok)+parseFloat(hasilBunga);
  
    let angsuran = hasil.toFixed(0);
  
    let rupiah = formatter.format(angsuran);
  
  
  
    if (!isNaN(angsuran)) {
  
      document.getElementById("angsuran").innerHTML = "<p>Angsuran</p><h2>"+rupiah+"</h2>";
  
    }else{
  
      document.getElementById("angsuran").innerHTML = "<h2 style='color: #f490c3;'>Informasi Tidak Lengkap</h2>";
  
    }
  
  }
  
  