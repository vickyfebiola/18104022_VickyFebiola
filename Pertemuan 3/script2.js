// fungsi tampil
function tampil() {
	// menampilkan alert 'hello'
  alert("hello");
}

// variabel untuk menyimpan warna dengan menggunakan document
let color = document.getElementById("color");

// mengatur warna background halaman web sesuai apa yang diklik/dipilih 
color.addEventListener("change", (e) => {
  console.log(e);
  document.body.style.backgroundColor = e.target.value;
});

// menampilkan teks pada window prompt ketika halaman pertama kali dibuka dan
// terdapat form untuk mengisi/menginputkannya yang kemudian akan disimpan dalam variabel nama
// menampilkan teks dan mengambil value dalam variabel nama
let nama = window.prompt("Nama kamu siapa?, kenalan dong");
alert(`Oh jadi nama kamu ${nama}, nama aku Vicky, salam kenal ya`);
