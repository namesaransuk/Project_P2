function show_table(id) {
    var radio1 = document.getElementById("radio_check1").checked;
    var radio2 = document.getElementById("radio_check2").checked;
    var radio3 = document.getElementById("radio_check3").checked;
    var radio4 = document.getElementById("radio_check4").checked;

    if (id == 1) {

        document.getElementById("table_1").style.display = "";
        document.getElementById("table_2").style.display = "none";
        document.getElementById("table_3").style.display = "none";

    } else if (id == 2) { // ถ้าเลือก radio button 1 ให้โชว์ table 1 และ ซ่อน table 2

        document.getElementById("table_1").style.display = "none";
        document.getElementById("table_2").style.display = "";
        document.getElementById("table_3").style.display = "none";

    } else if (id == 3) { // ถ้าเลือก radio button 1 ให้โชว์ table 1 และ ซ่อน table 2

        document.getElementById("table_1").style.display = "none";
        document.getElementById("table_2").style.display = "none";
        document.getElementById("table_3").style.display = "";

    } else if (id == 4) { // ถ้าเลือก radio button 1 ให้โชว์ table 1 และ ซ่อน table 2

        document.getElementById("table_1").style.display = "none";
        document.getElementById("table_2").style.display = "none";
        document.getElementById("table_3").style.display = "none";

    }
}