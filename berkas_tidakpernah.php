<script>
document.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector('form');
    var ia1 = document.getElementById('ia1');
    var berkasia1 = document.getElementById('berkasia1');
    var berkasia11 = document.getElementById('berkasia11');

    form.addEventListener('submit', function (event) {
        if (ia1.value === 'Workshop/pelatihan Internal/ Forum KKG/MGMP') {
            if (!berkasia1.value || !berkasia11.value) {
                event.preventDefault(); // Prevent form submission
                alert('Mohon isi semua berkas jika memilih opsi Workshop/pelatihan Internal/ Forum KKG/MGMP');
            }
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector('form');
    var iab1 = document.getElementById('iab1');
    var berkasiab1 = document.getElementById('berkasiab1');
    var berkasiab11 = document.getElementById('berkasiab11');
    var berkasiab111 = document.getElementById('berkasiab111');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iab1.value === 'Tidak pernah') {
            berkasiab1.style.display = 'none';
            berkasiab11.style.display = 'none';
            berkasiab111.style.display = 'none';
        } else {
            berkasiab1.style.display = 'block';
            berkasiab11.style.display = 'block';
            berkasiab111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iab1.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    form.addEventListener('submit', function (event) {
        if (iab1.value === 'Workshop/pelatihan Provinsi / Nasional') {
            if (!berkasiab1.value || !berkasiab11.value || !berkasiab111.value) {
                event.preventDefault(); // Prevent form submission
                alert('Mohon isi semua berkas jika memilih opsi Workshop/pelatihan Provinsi / Nasional');
            }
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var iac1 = document.getElementById('iac1');
    var berkasiac1 = document.getElementById('berkasiac1');
    var berkasiac11 = document.getElementById('berkasiac11');
    var berkasiac111 = document.getElementById('berkasiac111');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iac1.value === 'Tidak pernah') {
            berkasiac1.style.display = 'none';
            berkasiac11.style.display = 'none';
            berkasiac111.style.display = 'none';
        } else {
            berkasiac1.style.display = 'block';
            berkasiac11.style.display = 'block';
            berkasiac111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iac1.addEventListener('change', function () {
        toggleFileInputs();

        if (iac1.value === 'Workshop/pelatihan Internasional ( laporan dalam Bhs Inggris )') {
            berkasiac1.setAttribute('required', 'required');
            berkasiac11.setAttribute('required', 'required');
        } else {
            berkasiac1.removeAttribute('required');
            berkasiac11.removeAttribute('required');
        }
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (iac1.value === 'Workshop/pelatihan Internasional ( laporan dalam Bhs Inggris )') {
            if (!berkasiac1.value || !berkasiac11.value) {
                event.preventDefault(); // Prevent form submission
                alert('Mohon isi semua berkas jika memilih opsi Workshop/pelatihan Internasional');
            }
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var ia2 = document.getElementById('ia2');
    var berkasia2 = document.getElementById('berkasia2');
    var berkasia22 = document.getElementById('berkasia22');
    var berkasia222 = document.getElementById('berkasia222');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (ia2.value === 'Tidak pernah') {
            berkasia2.style.display = 'none';
            berkasia22.style.display = 'none';
            berkasia222.style.display = 'none';
        } else {
            berkasia2.style.display = 'block';
            berkasia22.style.display = 'block';
            berkasia222.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    ia2.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if ((ia2.value === 'hasil karya guru / kegiatan sederhana' || ia2.value === 'hasil karya guru / kegiatan yang kreatif ( telah dimodifikasi )') && (berkasia2.value === '' || berkasia22.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas jika memilih opsi hasil karya guru / kegiatan sederhana atau hasil karya guru / kegiatan yang kreatif');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var ib1 = document.getElementById('ib1');
    var berkasib1 = document.getElementById('berkasib1');
    var berkasib11 = document.getElementById('berkasib11');
    var berkasib111 = document.getElementById('berkasib111');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (ib1.value === 'Tidak pernah') {
            berkasib1.style.display = 'none';
            berkasib11.style.display = 'none';
            berkasib111.style.display = 'none';
        } else {
            berkasib1.style.display = 'block';
            berkasib11.style.display = 'block';
            berkasib111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    ib1.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if ((ib1.value === 'Penulisan artikel online menggunakan media blog' || ib1.value === 'Pembuatan Karya tulis/buku/modul menggunakan media blog') && (berkasib1.value === '' || berkasib11.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas jika memilih opsi Penulisan artikel online atau Pembuatan Karya tulis/buku/modul menggunakan media blog');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var ib2 = document.getElementById('ib2');
    var berkasib2 = document.getElementById('berkasib2');
    var berkasib22 = document.getElementById('berkasib22');
    var berkasib222 = document.getElementById('berkasib222');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (ib2.value === 'Tidak pernah') {
            berkasib2.style.display = 'none';
            berkasib22.style.display = 'none';
            berkasib222.style.display = 'none';
        } else {
            berkasib2.style.display = 'block';
            berkasib22.style.display = 'block';
            berkasib222.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    ib2.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if ((ib2.value === 'sederhana' || ib2.value === 'sesuai struktur penulisan modul / buku' || ib2.value === 'sesuai struktur penulisan modul / buku dan diupload di blog/ platform merdeka mengajar') && (berkasib2.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas jika memilih opsi sederhana atau sesuai struktur penulisan modul / buku');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var ib3 = document.getElementById('ib3');
    var berkasib3 = document.getElementById('berkasib3');
    var berkasib33 = document.getElementById('berkasib33');
    var berkasib333 = document.getElementById('berkasib333');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (ib3.value === 'Tidak pernah') {
            berkasib3.style.display = 'none';
            berkasib33.style.display = 'none';
            berkasib333.style.display = 'none';
        } else {
            berkasib3.style.display = 'block';
            berkasib33.style.display = 'block';
            berkasib333.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    ib3.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (ib3.value === 'Guru melaksanakan pendekatan STEAM/STEM dalam bentuk video' && (berkasib3.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas jika memilih opsi Guru melaksanakan pendekatan STEAM/STEM dalam bentuk video');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var ib4 = document.getElementById('ib4');
    var berkasib4 = document.getElementById('berkasib4');
    var berkasib44 = document.getElementById('berkasib44');
    var berkasib444 = document.getElementById('berkasib444');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (ib4.value === 'Tidak pernah') {
            berkasib4.style.display = 'none';
            berkasib44.style.display = 'none';
            berkasib444.style.display = 'none';
        } else {
            berkasib4.style.display = 'block';
            berkasib44.style.display = 'block';
            berkasib444.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    ib4.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if ((ib4.value === 'bukan buatan sendiri' || ib4.value === 'buatan sendiri	yang sederhana' || ib4.value === 'buatan sendiri yang kreatif') && (berkasib4.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas jika memilih opsi bukan buatan sendiri atau buatan sendiri yang sederhana atau buatan sendiri yang kreatif');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var ib5 = document.getElementById('ib5');
    var berkasib5 = document.getElementById('berkasib5');
    var berkasib55 = document.getElementById('berkasib55');
    var berkasib555 = document.getElementById('berkasib555');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (ib5.value === 'Tidak pernah') {
            berkasib5.style.display = 'none';
            berkasib55.style.display = 'none';
            berkasib555.style.display = 'none';
        } else {
            berkasib5.style.display = 'block';
            berkasib55.style.display = 'block';
            berkasib555.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    ib5.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (ib5.value === 'Publikasi pembelajaran kreatif melalui youtube Bp/Ibu' && (berkasib5.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas jika memilih opsi Publikasi pembelajaran kreatif melalui youtube Bp/Ibu');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var ib6 = document.getElementById('ib6');
    var berkasib6 = document.getElementById('berkasib6');
    var berkasib66 = document.getElementById('berkasib66');
    var berkasib666 = document.getElementById('berkasib666');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (ib6.value === 'Tidak pernah') {
            berkasib6.style.display = 'none';
            berkasib66.style.display = 'none';
            berkasib666.style.display = 'none';
        } else {
            berkasib6.style.display = 'block';
            berkasib66.style.display = 'block';
            berkasib666.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    ib6.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (ib6.value !== 'Tidak pernah' && (berkasib6.value === '' || berkasib66.value === '' || berkasib666.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas jika memilih opsi Guru menggembangkan diri dengan pelatihan mandiri melalui PMM sampai praktik baik atau Bersertifikat dari kementrian Pendidikan (minimal 1 sertifikat) atau Mempunyai komunitas belajar menjadi guru penggerak');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var iia1 = document.getElementById('iia1');
    var berkasiia1 = document.getElementById('berkasiia1');
    var berkasiia11 = document.getElementById('berkasiia11');
    var berkasiia111 = document.getElementById('berkasiia111');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iia1.value === 'Tidak pernah') {
            berkasiia1.style.display = 'none';
            berkasiia11.style.display = 'none';
            berkasiia111.style.display = 'none';
        } else {
            berkasiia1.style.display = 'block';
            berkasiia11.style.display = 'block';
            berkasiia111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iia1.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (iia1.value !== 'Tidak pernah' && (berkasiia1.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas jika memilih opsi Upload kegiatan lomba internal di IG pribadi guru');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var iia2 = document.getElementById('iia2');
    var berkasiia2 = document.getElementById('berkasiia2');
    var berkasiia22 = document.getElementById('berkasiia22');
    var berkasiia222 = document.getElementById('berkasiia222');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iia2.value === 'Tidak pernah') {
            berkasiia2.style.display = 'none';
            berkasiia22.style.display = 'none';
            berkasiia222.style.display = 'none';
        } else {
            berkasiia2.style.display = 'block';
            berkasiia22.style.display = 'block';
            berkasiia222.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iia2.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (iia2.value !== 'Tidak pernah' && (berkasiia2.value === '' || berkasiia22.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas jika memilih opsi Pembimbing peserta lomba atau Pembimbing pemenang lomba');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var iib1 = document.getElementById('iib1');
    var berkasiib1 = document.getElementById('berkasiib1');
    var berkasiib11 = document.getElementById('berkasiib11');
    var berkasiib111 = document.getElementById('berkasiib111');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iib1.value === 'Tidak pernah') {
            berkasiib1.style.display = 'none';
            berkasiib11.style.display = 'none';
            berkasiib111.style.display = 'none';
        } else {
            berkasiib1.style.display = 'block';
            berkasiib11.style.display = 'block';
            berkasiib111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iib1.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (iib1.value !== 'Tidak pernah' && (berkasiib1.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas jika memilih opsi Upload kegiatan / lomba  eksternal di IG pribadi guru');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var iib2 = document.getElementById('iib2');
    var berkasiib2 = document.getElementById('berkasiib2');
    var berkasiib22 = document.getElementById('berkasiib22');
    var berkasiib222 = document.getElementById('berkasiib222');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iib2.value === 'Tidak pernah') {
            berkasiib2.style.display = 'none';
            berkasiib22.style.display = 'none';
            berkasiib222.style.display = 'none';
        } else {
            berkasiib2.style.display = 'block';
            berkasiib22.style.display = 'block';
            berkasiib222.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iib2.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (iib2.value !== 'Tidak pernah' && (berkasiib2.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas jika memilih opsi Pembimbing tampilan/event');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var iib3 = document.getElementById('iib3');
    var berkasiib3 = document.getElementById('berkasiib3');
    var berkasiib33 = document.getElementById('berkasiib33');
    var berkasiib333 = document.getElementById('berkasiib333');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iib3.value === 'Tidak pernah') {
            berkasiib3.style.display = 'none';
            berkasiib33.style.display = 'none';
            berkasiib333.style.display = 'none';
        } else {
            berkasiib3.style.display = 'block';
            berkasiib33.style.display = 'block';
            berkasiib333.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iib3.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (iib3.value !== 'Tidak pernah' && (berkasiib3.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di Pembimbing Lomba');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var iib4 = document.getElementById('iib4');
    var berkasiib4 = document.getElementById('berkasiib4');
    var berkasiib44 = document.getElementById('berkasiib44');
    var berkasiib444 = document.getElementById('berkasiib444');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iib4.value === 'Tidak pernah') {
            berkasiib4.style.display = 'none';
            berkasiib44.style.display = 'none';
            berkasiib444.style.display = 'none';
        } else {
            berkasiib4.style.display = 'block';
            berkasiib44.style.display = 'block';
            berkasiib444.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iib4.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (iib4.value !== 'Tidak pernah' && (berkasiib4.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di bagian 4a.Pendampingan');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var iibb4 = document.getElementById('iibb4');
    var berkasiibb4 = document.getElementById('berkasiibb4');
    var berkasiibb44 = document.getElementById('berkasiibb44');
    var berkasiibb444 = document.getElementById('berkasiibb444');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iibb4.value === 'Tidak pernah') {
            berkasiibb4.style.display = 'none';
            berkasiibb44.style.display = 'none';
            berkasiibb444.style.display = 'none';
        } else {
            berkasiibb4.style.display = 'block';
            berkasiibb44.style.display = 'block';
            berkasiibb444.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iibb4.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (iibb4.value !== 'Tidak pernah' && (berkasiibb4.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di bagian 4b.Pendampingan');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var iibc4 = document.getElementById('iibc4');
    var berkasiibc4 = document.getElementById('berkasiibc4');
    var berkasiibc44 = document.getElementById('berkasiibc44');
    var berkasiibc444 = document.getElementById('berkasiibc444');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iibc4.value === 'Tidak pernah') {
            berkasiibc4.style.display = 'none';
            berkasiibc44.style.display = 'none';
            berkasiibc444.style.display = 'none';
        } else {
            berkasiibc4.style.display = 'block';
            berkasiibc44.style.display = 'block';
            berkasiibc444.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iibc4.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (iibc4.value !== 'Tidak pernah' && (berkasiibc4.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di bagian 4c.Pendampingan');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var iiia1 = document.getElementById('iiia1');
    var berkasiiia1 = document.getElementById('berkasiiia1');
    var berkasiiia11 = document.getElementById('berkasiiia11');
    var berkasiiia111 = document.getElementById('berkasiiia111');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iiia1.value === 'Tidak pernah') {
            berkasiiia1.style.display = 'none';
            berkasiiia11.style.display = 'none';
            berkasiiia111.style.display = 'none';
        } else {
            berkasiiia1.style.display = 'block';
            berkasiiia11.style.display = 'block';
            berkasiiia111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iiia1.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (iiia1.value !== 'Tidak pernah' && (berkasiiia1.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di Pendampingan teman sejawat');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var iiib1 = document.getElementById('iiib1');
    var berkasiiib1 = document.getElementById('berkasiiib1');
    var berkasiiib11 = document.getElementById('berkasiiib11');
    var berkasiiib111 = document.getElementById('berkasiiib111');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iiib1.value === 'Tidak pernah') {
            berkasiiib1.style.display = 'none';
            berkasiiib11.style.display = 'none';
            berkasiiib111.style.display = 'none';
        } else {
            berkasiiib1.style.display = 'block';
            berkasiiib11.style.display = 'block';
            berkasiiib111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iiib1.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (iiib1.value !== 'Tidak pernah' && (berkasiiib1.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di Sharing internal');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var iiic1 = document.getElementById('iiic1');
    var berkasiiic1 = document.getElementById('berkasiiic1');
    var berkasiiic11 = document.getElementById('berkasiiic11');
    var berkasiiic111 = document.getElementById('berkasiiic111');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iiic1.value === 'Tidak pernah') {
            berkasiiic1.style.display = 'none';
            berkasiiic11.style.display = 'none';
            berkasiiic111.style.display = 'none';
        } else {
            berkasiiic1.style.display = 'block';
            berkasiiic11.style.display = 'block';
            berkasiiic111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iiic1.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (iiic1.value !== 'Tidak pernah' && (berkasiiic1.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di Guru dapat berpartisipasi dalam pelatihan / kegiatan yang diselenggarakan oleh pihak eksternal / lintas jenjang.Jika guru sebagai :');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var iva1 = document.getElementById('iva1');
    var berkasiva1 = document.getElementById('berkasiva1');
    var berkasiva11 = document.getElementById('berkasiva11');
    var berkasiva111 = document.getElementById('berkasiva111');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (iva1.value === 'Tidak pernah') {
            berkasiva1.style.display = 'none';
            berkasiva11.style.display = 'none';
            berkasiva111.style.display = 'none';
        } else {
            berkasiva1.style.display = 'block';
            berkasiva11.style.display = 'block';
            berkasiva111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    iva1.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (iva1.value !== 'Tidak pernah' && (berkasiva1.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di Guru dapat berperan serta dalam kepanitiaan di kegiatan umum. Durasi tidak lebih dari 3 bulan ( jangka pendek )');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var ivb1 = document.getElementById('ivb1');
    var berkasivb1 = document.getElementById('berkasivb1');
    var berkasivb11 = document.getElementById('berkasivb11');
    var berkasivb111 = document.getElementById('berkasivb111');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (ivb1.value === 'Tidak pernah') {
            berkasivb1.style.display = 'none';
            berkasivb11.style.display = 'none';
            berkasivb111.style.display = 'none';
        } else {
            berkasivb1.style.display = 'block';
            berkasivb11.style.display = 'block';
            berkasivb111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    ivb1.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (ivb1.value !== 'Tidak pernah' && (berkasivb1.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di bagian Guru dapat terlibat dalam kepanitiaan PPDB di jenjang masing2. SK diberikan oleh pimpinan jenjang yang bersangkutan.');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var ivc1 = document.getElementById('ivc1');
    var berkasivc1 = document.getElementById('berkasivc1');
    var berkasivc11 = document.getElementById('berkasivc11');
    var berkasivc111 = document.getElementById('berkasivc111');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (ivc1.value === 'Tidak pernah') {
            berkasivc1.style.display = 'none';
            berkasivc11.style.display = 'none';
            berkasivc111.style.display = 'none';
        } else {
            berkasivc1.style.display = 'block';
            berkasivc11.style.display = 'block';
            berkasivc111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    ivc1.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (ivc1.value !== 'Tidak pernah' && (berkasivc1.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di bagian Guru dapat berperan serta dalam pengembangan di jenjangnya masing2. Dalam bentuk kegiatan maupun penugasan dalam jabatan tertentu');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var ivd1 = document.getElementById('ivd1');
    var berkasivd1 = document.getElementById('berkasivd1');
    var berkasivd11 = document.getElementById('berkasivd11');
    var berkasivd111 = document.getElementById('berkasivd111');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (ivd1.value === 'Tidak pernah') {
            berkasivd1.style.display = 'none';
            berkasivd11.style.display = 'none';
            berkasivd111.style.display = 'none';
        } else {
            berkasivd1.style.display = 'block';
            berkasivd11.style.display = 'block';
            berkasivd111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    ivd1.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (ivd1.value !== 'Tidak pernah' && (berkasivd1.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di bagian Guru dapat berperan dalam pengembangan institusi Nusaputera secara luas, dengan durasi penugasan minimal 1 semester. Surat tugas / SK ditandatangani oleh Manajemen');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var ive1 = document.getElementById('ive1');
    var berkasive1 = document.getElementById('berkasive1');
    var berkasive11 = document.getElementById('berkasive11');
    var berkasive111 = document.getElementById('berkasive111');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (ive1.value === 'Tidak pernah') {
            berkasive1.style.display = 'none';
            berkasive11.style.display = 'none';
            berkasive111.style.display = 'none';
        } else {
            berkasive1.style.display = 'block';
            berkasive11.style.display = 'block';
            berkasive111.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    ive1.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (ive1.value !== 'Tidak pernah' && (berkasive1.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di bagianGuru dapat dilibatkan sebagai mitra dalam melayani transaksi yang tersedia, maupun sebagai pengguna aplikasi dengan berpartisipasi membeli produk yang ditawarkan');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    var ive2 = document.getElementById('ive2');
    var berkasive2 = document.getElementById('berkasive2');
    var berkasive22 = document.getElementById('berkasive22');
    var berkasive222 = document.getElementById('berkasive222');

    // Function to show or hide file inputs based on selected option
    function toggleFileInputs() {
        if (ive2.value === 'Tidak pernah') {
            berkasive2.style.display = 'none';
            berkasive22.style.display = 'none';
            berkasive222.style.display = 'none';
        } else {
            berkasive2.style.display = 'block';
            berkasive22.style.display = 'block';
            berkasive222.style.display = 'block';
        }
    }

    // Toggle file inputs on page load
    toggleFileInputs();

    // Toggle file inputs when option is changed
    ive2.addEventListener('change', function () {
        toggleFileInputs();
    });

    // Form submission validation
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        if (ive2.value !== 'Tidak pernah' && (berkasive2.value === '')) {
            event.preventDefault(); // Prevent form submission
            alert('Mohon isi semua berkas di Sebagai partisipan dalam pembelian produk di My Nusaputera / Mitra  selama satu tahun');
        }
    });
});
</script>