<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form id="form" action="" method="post">
        @csrf
        <input type="email" name="email" ><br>
        <input type="password" name="password" >
        <input type="submit" value="Đăng nhập">
    </form>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#form').submit(function(e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '{{ route("login") }}',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (response) {
                    console.log(response.data);
                    window.location.href = "{{ route('home') }}"
                },
                error: function(Exceptions){
                    console.log(Exceptions);
                }
            });
        });
    });
</script>
</html>
