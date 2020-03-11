function Repassword() {
    var pw = document.frg.password.value;
    var rpw = document.frg.rpassword.value;

    if (pw == rpw) {
    }
    else {
        alert("รหัสผ่านไม่ตรงกรุณาตรวจสอบให้ถูกต้อง")
        return false;
    }
}