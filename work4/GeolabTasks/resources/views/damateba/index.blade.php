<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href={{"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"}} rel="stylesheet" id="bootstrap-css">
    <script src={{"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"}}></script>
    <script src={{"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"}}></script>
    <link rel="stylesheet" href={{"css/style.css"}}>
    <title>Document</title>
</head>
<body class="bg-info">
    @yield('name')
    <script>
        $(document).ready(function(){
        $("#mytable #checkall").click(function () {
                if ($("#mytable #checkall").is(':checked')) {
                    $("#mytable input[type=checkbox]").each(function () {
                        $(this).prop("checked", true);
                    });

                } else {
                    $("#mytable input[type=checkbox]").each(function () {
                        $(this).prop("checked", false);
                    });
                }
            });
            
            $("[data-toggle=tooltip]").tooltip();
        });
    </script>
</body>
</html>