<html>

<head>

    <title>jQuery</title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>

    <p></p>

    <script type="text/javascript">

        $.ajax("info.txt").done(function (data) {
            alert(data);
        }).fail(function () {
            alert("Cold not get data");
        });

    </script>

</body>

</html>