window.addEventListener("DOMContentLoaded", function () {
    const tahun_penilaian = document.getElementById("tahun_penilaian");
    const saved_tahunpenilaian = localStorage.getItem("tahun_penilaian");
    if (saved_tahunpenilaian) {
        tahun_penilaian.value = saved_tahunpenilaian;
    }

    tahun_penilaian.addEventListener("input", function () {
        localStorage.setItem("tahun_penilaian", tahun_penilaian.value);
    });

    const selectElement = document.getElementById("ia1");
    const savedValue = localStorage.getItem("selectedOption");

    if (savedValue) {
        selectElement.value = savedValue;
    } else {
        selectElement.selectedIndex = 0;
    }

    selectElement.addEventListener("change", function () {
        localStorage.setItem("selectedOption", selectElement.value);
    });

    const fileInput2 = document.getElementById("berkasia11");
    const hasFileUploaded2 = localStorage.getItem("hasFileUploaded");

    fileInput2.addEventListener("change", function () {
        localStorage.setItem("hasFileUploaded", "true");
    });

    const fileInput3 = document.getElementById("berkasia111");
    const hasFileUploaded3 = localStorage.getItem("hasFileUploaded");

    fileInput3.addEventListener("change", function () {
        localStorage.setItem("hasFileUploaded", "true");
    });

    const fileInput4 = document.getElementById("berkasiab1");
    const hasFileUploaded4 = localStorage.getItem("hasFileUploaded");

    fileInput4.addEventListener("change", function () {
        localStorage.setItem("hasFileUploaded", "true");
    });

    const fileInput5 = document.getElementById("berkasiab11");
    const hasFileUploaded5 = localStorage.getItem("hasFileUploaded");

    fileInput5.addEventListener("change", function () {
        localStorage.setItem("hasFileUploaded", "true");
    });

    const fileInput6 = document.getElementById("berkasiab111");
    const hasFileUploaded6 = localStorage.getItem("hasFileUploaded");

    fileInput6.addEventListener("change", function () {
        localStorage.setItem("hasFileUploaded", "true");
    });

    const fileInput7 = document.getElementById("berkasiac1");
    const hasFileUploaded7 = localStorage.getItem("hasFileUploaded");

    fileInput7.addEventListener("change", function () {
        localStorage.setItem("hasFileUploaded", "true");
    });

    const fileInput8 = document.getElementById("berkasiac11");
    const hasFileUploaded8 = localStorage.getItem("hasFileUploaded");

    fileInput8.addEventListener("change", function () {
        localStorage.setItem("hasFileUploaded", "true");
    });

    const fileInput9 = document.getElementById("berkasiac111");
    const hasFileUploaded9 = localStorage.getItem("hasFileUploaded");

    fileInput9.addEventListener("change", function () {
        localStorage.setItem("hasFileUploaded", "true");
    });

    const selectElementIab1 = document.getElementById("iab1");
    const savedValueIab1 = localStorage.getItem("selectedOptionIab1");

    if (savedValueIab1) {
        selectElementIab1.value = savedValueIab1;
    }

    selectElementIab1.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIab1", selectElementIab1.value);
    });


    const selectElementIac1 = document.getElementById("iac1");
    const savedValueIac1 = localStorage.getItem("selectedOptionIac1");

    if (savedValueIac1) {
        selectElementIac1.value = savedValueIac1;
    } else {
        selectElementIac1.selectedIndex = 0;
    }

    selectElementIac1.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIac1", selectElementIac1.value);
    });

    const selectElementIa2 = document.getElementById("ia2");
    const savedValueIa2 = localStorage.getItem("selectedOptionIa2");

    if (savedValueIa2) {
        selectElementIa2.value = savedValueIa2;
    }

    selectElementIa2.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIa2", selectElementIa2.value);
    });


    const selectElementIb1 = document.getElementById("ib1");
    const savedValueIb1 = localStorage.getItem("selectedOptionIb1");

    if (savedValue) {
        selectElementIb1.value = savedValueIb1;
    }

    selectElementIb1.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIb1", selectElementIb1.value);
    });

    const selectElementIb2 = document.getElementById("ib2");
    const savedValueIb2 = localStorage.getItem("selectedOptionIb2");

    if (savedValue) {
        selectElementIb2.value = savedValueIb2;
    }

    selectElementIb2.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIb2", selectElementIb2.value);
    });

    const selectElementIb3 = document.getElementById("ib3");
    const savedValueIb3 = localStorage.getItem("selectedOptionIb3");

    if (savedValue) {
        selectElementIb3.value = savedValueIb3;
    }

    selectElementIb3.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIb3", selectElementIb3.value);
    });

    const selectElementIb4 = document.getElementById("ib4");
    const savedValueIb4 = localStorage.getItem("selectedOptionIb4");

    if (savedValue) {
        selectElementIb4.value = savedValueIb4;
    }

    selectElementIb4.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIb4", selectElementIb4.value);
    });

    const selectElementIb5 = document.getElementById("ib5");
    const savedValueIb5 = localStorage.getItem("selectedOptionIb5");

    if (savedValue) {
        selectElementIb5.value = savedValueIb5;
    }

    selectElementIb5.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIb5", selectElementIb5.value);
    });

    const selectElementIb6 = document.getElementById("ib6");
    const savedValueIb6 = localStorage.getItem("selectedOptionIb6");

    if (savedValue) {
        selectElementIb6.value = savedValueIb6;
    }

    selectElementIb6.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIb6", selectElementIb6.value);
    });

    const selectElementIIa1 = document.getElementById("iia1");
    const savedValueIIa1 = localStorage.getItem("selectedOptionIIa1");

    if (savedValue) {
        selectElementIIa1.value = savedValueIIa1;
    }

    selectElementIIa1.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIIa1", selectElementIIa1.value);
    });

    const selectElementIIa2 = document.getElementById("iia2");
    const savedValueIIa2 = localStorage.getItem("selectedOptionIIa2");

    if (savedValue) {
        selectElementIIa2.value = savedValueIIa2;
    }

    selectElementIIa2.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIIa2", selectElementIIa2.value);
    });

    const selectElementIIb1 = document.getElementById("iib1");
    const savedValueIIb1 = localStorage.getItem("selectedOptionIIb1");

    if (savedValue) {
        selectElementIIb1.value = savedValueIIb1;
    }

    selectElementIIb1.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIIb1", selectElementIIb1.value);
    });

    const selectElementIIb2 = document.getElementById("iib2");
    const savedValueIIb2 = localStorage.getItem("selectedOptionIIb2");

    if (savedValue) {
        selectElementIIb2.value = savedValueIIb2;
    }

    selectElementIIb2.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIIb2", selectElementIIb2.value);
    });

    const selectElementIIb3 = document.getElementById("iib3");
    const savedValueIIb3 = localStorage.getItem("selectedOptionIIb3");

    if (savedValue) {
        selectElementIIb3.value = savedValueIIb3;
    }

    selectElementIIb3.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIIb3", selectElementIIb3.value);
    });

    const selectElementIIb4 = document.getElementById("iib4");
    const savedValueIIb4 = localStorage.getItem("selectedOptionIIb4");

    if (savedValue) {
        selectElementIIb4.value = savedValueIIb4;
    }

    selectElementIIb4.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIIb4", selectElementIIb4.value);
    });

    const selectElementIIbb4 = document.getElementById("iibb4");
    const savedValueIIbb4 = localStorage.getItem("selectedOptionIIbb4");

    if (savedValue) {
        selectElementIIbb4.value = savedValueIIbb4;
    }

    selectElementIIbb4.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIIbb4", selectElementIIbb4.value);
    });

    const selectElementIIbc4 = document.getElementById("iibc4");
    const savedValueIIbc4 = localStorage.getItem("selectedOptionIIbc4");

    if (savedValue) {
        selectElementIIbc4.value = savedValueIIbc4;
    }

    selectElementIIbc4.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIIbc4", selectElementIIbc4.value);
    });

    const selectElementIIIa1 = document.getElementById("iiia1");
    const savedValueIIIa1 = localStorage.getItem("selectedOptionIIIa1");

    if (savedValue) {
        selectElementIIIa1.value = savedValueIIIa1;
    }

    selectElementIIIa1.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIIIa1", selectElementIIIa1.value);
    });

    const selectElementIIIb1 = document.getElementById("iiib1");
    const savedValueIIIb1 = localStorage.getItem("selectedOptionIIIb1");

    if (savedValue) {
        selectElementIIIb1.value = savedValueIIIb1;
    }

    selectElementIIIb1.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIIIb1", selectElementIIIb1.value);
    });

    const selectElementIIIc1 = document.getElementById("iiic1");
    const savedValueIIIc1 = localStorage.getItem("selectedOptionIIIc1");

    if (savedValue) {
        selectElementIIIc1.value = savedValueIIIc1;
    }

    selectElementIIIc1.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIIIc1", selectElementIIIc1.value);
    });

    const selectElementIVa1 = document.getElementById("iva1");
    const savedValueIVa1 = localStorage.getItem("selectedOptionIVa1");

    if (savedValue) {
        selectElementIVa1.value = savedValueIVa1;
    }

    selectElementIVa1.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIVa1", selectElementIVa1.value);
    });

    const selectElementIVb1 = document.getElementById("ivb1");
    const savedValueIVb1 = localStorage.getItem("selectedOptionIVb1");

    if (savedValue) {
        selectElementIVb1.value = savedValueIVb1;
    }

    selectElementIVb1.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIVb1", selectElementIVb1.value);
    });

    const selectElementIVc1 = document.getElementById("ivc1");
    const savedValueIVc1 = localStorage.getItem("selectedOptionIVc1");

    if (savedValue) {
        selectElementIVc1.value = savedValueIVc1;
    }

    selectElementIVc1.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIVc1", selectElementIVc1.value);
    });

    const selectElementIVd1 = document.getElementById("ivd1");
    const savedValueIVd1 = localStorage.getItem("selectedOptionIVd1");

    if (savedValue) {
        selectElementIVd1.value = savedValueIVd1;
    }

    selectElementIVd1.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIVd1", selectElementIVd1.value);
    });

    const selectElementIVe1 = document.getElementById("ive1");
    const savedValueIVe1 = localStorage.getItem("selectedOptionIVe1");

    if (savedValue) {
        selectElementIVe1.value = savedValueIVe1;
    }

    selectElementIVe1.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIVe1", selectElementIVe1.value);
    });

    const selectElementIVe2 = document.getElementById("ive2");
    const savedValueIVe2 = localStorage.getItem("selectedOptionIVe2");

    if (savedValue) {
        selectElementIVe2.value = savedValueIVe2;
    }

    selectElementIVe2.addEventListener("change", function () {
        localStorage.setItem("selectedOptionIVe2", selectElementIVe2.value);
    });
});

