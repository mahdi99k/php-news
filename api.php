<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>api</title>
</head>
<body>

<h1>What Is Api ?</h1>
<section id="data"></section>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script>
    let items = "";
    function showData() {
        $.ajax({
            url: "https://jsonplaceholder.typicode.com/posts",
            type: "get",
            dataType: "json",
            catch: true,//هر دیتایی که اضافه بشه با رفرش دیتای حال میره داخل مرورگر و دیتای جدید جایگزین فشار کمتری میاد به سرور | اگر غلط باش از اول میگیره دیتا فشار به سرور
            success: function (response) {
                // console.log(response.length)
                for (let i = 0; i < response.length; i++) {

                    items += "<ul style='padding: 30px;box-sizing: border-box;text-align: center;background-color: skyblue'>" +
                        "<li>" + response[i].userId + "</li>" +
                        "<li>" + response[i].id + "</li>" +
                        "<li>" + response[i].title + "</li>" +
                        "<li>" + response[i].body + "</li>" + "<hr/><br/><br/>" +
                        "</ul>"
                }
                $('section#data').append(items);
            }
        })
    }
    showData()
</script>


</body>
</html>