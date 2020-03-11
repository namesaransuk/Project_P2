<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <select class="s_a" id="s_a" onchange="do_selectchange(this)">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <select class="s_b" id="s_b" onchange="do_selectchange(this)">
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>

    <script type="text/javascript">
        function Inint_AJAX() {

            try {
                return new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {} //IE

            try {
                return new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {} //IE

            try {
                return new XMLHttpRequest();
            } catch (e) {} //Native Javascript

            alert("XMLHttpRequest not supported");

            return null;

        };

        function do_selectchange(sel) {
            var query = 'id=' + sel.id + '&value=' + sel.value + '&class=' + sel.class; //ค่าที่ส่งมาใช้เพื่อส่งไปอัปเดท
            var req = Inint_AJAX();
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    if (req.status == 200) {
                        alert(req.responseText); //เมื่ออัปเดทเรียบร้อย (อาจแสดงข้อความว่าอัปเดทเรียบร้อยก็ได้)
                    };
                };
            };
            req.open("POST", "test.php"); //สร้าง connection
            req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // set Header
            req.send(query); //ส่งค่า
        }
    </script>
</body>

</html>