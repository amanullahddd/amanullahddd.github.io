// Event pada saat link diklik
$(".page-scroll").on("click", function (e) {
  // Ambil isi href
  var tujuan = $(this).attr("href");
  // Tangkap elemen ybs
  var elemenTujuan = $(tujuan);

  // Pindahkan scroll
  $("html, body").animate(
    {
      scrollTop: elemenTujuan.offset().top - 50,
    },
    1000,
    "easeInOutExpo"
  );
  e.preventDefault();
});

// Parallax
// About
$(window).on("load", function () {
  $(".pKiri").addClass("pMuncul");
  $(".pKanan").addClass("pMuncul");
});

$(window).scroll(function () {
  var wScroll = $(this).scrollTop();

  //   Jumbotron
  $(".jumbotron img").css({
    transform: "translate(0px, " + wScroll / 4 + "%)",
  });

  $(".jumbotron h1").css({
    transform: "translate(0px, " + wScroll / 2 + "%)",
  });

  $(".jumbotron p").css({
    transform: "translate(0px, " + wScroll / 1.2 + "%)",
  });

  //   Portofolio
  if (wScroll > $(".portfolio").offset().top - 250) {
    $(".portfolio .thumbnail").each(function (i) {
      setTimeout(function () {
        $(".portfolio .thumbnail").eq(i).addClass("muncul");
      }, 300 * (i + 1));
    });
  }
});

const kontakButton = document.querySelector(".kontak-button");
const kontakForm = document.querySelector("#kontakForm");

// kirim data ketika tombol kontak diklik
kontakButton.addEventListener("click", function (e) {
  e.preventDefault();
  const formData = new FormData(kontakForm);
  const data = new URLSearchParams(formData);
  if (!formData) {
    console.log("kosong");
  }
  const objData = Object.fromEntries(data);
  const message = formatPesan(objData);
  window.open(
    "https://wa.me/6281384961867?text=" + encodeURIComponent(message)
  );
});

const formatPesan = (obj) => {
  return `Data Pengirim
  Nama: ${obj.name}
  Email: ${obj.email}
  No HP: ${obj.phone}
  Pesan: 
  ${obj.pesan}.
  `;
};
