function validateForm() {
    if (document.forms["formPendaftaran"]["nama"].value == "") {
        alert("Nama Tidak Boleh Kosong");
        document.forms["formPendaftaran"]["nama"].focus();
        return false;
    }
    if (document.forms["formPendaftaran"]["nrp"].value == "") {
        alert("NRP Tidak Boleh Kosong");
        document.forms["formPendaftaran"]["nrp"].focus();
        return false;
    }
    if (isNaN(document.forms["formValidasi"]["nrp"].value)) {
        alert("NRP Diisi dengan Angka.");
        document.forms["formPendaftaran"]["nrp"].focus();
        return false;
    }
    if (document.forms["formPendaftaran"]["email"].value == "") {
        alert("Email Tidak Boleh Kosong");
        document.forms["formPendaftaran"]["email"].focus();
        return false;
    }
    if (document.forms["formPendaftaran"]["domisili"].value == "") {
        alert("Domisili Tidak Boleh Kosong");
        document.forms["formPendaftaran"]["domisili"].focus();
        return false;
    }
    if (document.forms["formPendaftaran"]["jurusan"].selectedIndex < 1) {
        alert("Pilih Jurusan.");
        document.forms["formPendaftaran"]["jurusan"].focus();
        return false;
    }
    if (document.forms["formPendaftaran"]["statusv"].selectedIndex < 1) {
        alert("Pilih Status Vaksin.");
        document.forms["formPendaftaran"]["statusv"].focus();
        return false;
    }

    alert("Pendaftaran Berhasil");
}