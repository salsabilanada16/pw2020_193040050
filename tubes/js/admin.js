const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container1 = document.querySelector('.container1');

// Event ketika kita menuliskan keyword (bisa saat kita klik, bisa saat kita menggerakkan mouse, bisa saat kita menuliskan sesuatu)
keyword.addEventListener('keyup', function () {    /* keyup -> Meskipun tombolnya kepencet, yang terjadi hanya satu kali ketika tombolnya kita lepas */

  // Ajax // Ajax itu adlh bagaimana cara kita untuk melakukan request terhadap sebuah sumber (bisa halaman lain/website lain) tanpa melakukan refresh pada halaman 
  // xmlhttprequest
  // 
  // const xhr = new XMLHttpRequest();
  // xhr.onreadystatechange = function () {
  //  if (xhr.readyState == 4 && xhr.status == 200) {
  //    container1.innerHTML = xhr.responseText;
  //  }
  // };
  //
  // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
  // xhr.send();


  // Fetch()
  fetch('../ajax/ajax_cari.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container1.innerHTML = response));
});

// Preview Image untuk Tambah dan Ubah
function previewImage() {
  const gambar = document.querySelector('.gambar');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}