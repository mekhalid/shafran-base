<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <br>
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody class="myBody">
            </tbody>
        </table>
    </div>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        Pusher.logToConsole = true;
        var pusher = new Pusher("20bb0998f0ff1acf1c7d", {
            cluster: "ap1"
        });

        function get_data() {
            $.ajax({
                url: "crud.php?act=get_data",
                success: function(result) {
                    $(".myBody").html(result);
                }
            })
        }
        var channel = pusher.subscribe("my-channel");
        channel.bind("my-event", function(data) {
            get_data();
        });
        get_data();
    </script>
</body>

</html>