function cek() {
  let jam = parseInt(document.getElementById('jam').value); //selector ID jam dan ambil nilai jam tsb
  let jenis = document.getElementById('jenis').value; //selector ID jenis dan ambil nilai jenis tsb

  // kondisi
  if (jam <= 3) {
    //jika jam <=3 eksekusi kode ini
    if (jenis === 'comp1') {
      bayar = 5000 * jam;
    } else if (jenis === 'comp2') {
      bayar = 6000 * jam;
    } //sampai sini
  } else {
    //jika jam >=3 maka eksekusi kode ini
    if (jenis === 'comp1') {
      bayar = 15000 * jam;
    } else if (jenis === 'comp2') {
      bayar = 16000 * jam;
    }
  } //sampai sini

  document.getElementById('bayar').innerHTML = bayar; //ambil selector ID bayar dan ubah HTMLnya menjadi variable bayar
}
