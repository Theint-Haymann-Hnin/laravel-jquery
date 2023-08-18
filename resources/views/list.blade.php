<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .last-sentence {
            border-bottom: 2px solid red;
            padding-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>Data from JavaScript</h1>
    <div id="data-container">
    </div>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/users',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    updateDOMWithData(response.data);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

        function updateDOMWithData(data) {
            var output = '';

            data.forEach(function(item) {
                console.log(item);
                output += '<p>' + item.name + '</p>' + '<p>' + item.email + '</p>' + '<p class="last-sentence">' +
                    item.phone + '</p>'; 
            });

            $('#data-container').html(output);
        }
    </script>
</body>

</html>
