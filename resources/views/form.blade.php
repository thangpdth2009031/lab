<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <form action="">
        <div class="form-group">
            <label>Product code:</label>
            <input type="text" class="form-control" id="product-code" placeholder="Enter product code" name="product-code">
        </div>
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" id="product-name" placeholder="Enter product code" name="name">
        </div>
        <div class="form-group">
            <label>Price:</label>
            <input type="text" class="form-control" id="price" placeholder="Enter product code" name="price">
        </div>
        <div class="form-group">
            <label>Avatar:</label>
            <input type="text" class="form-control" id="avatar" placeholder="Enter product code" name="avatar">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    if ($('.btn_submit')) {
        $('.btn_submit').click(function () {
            $.ajax({
                url: 'http://localhost:8000/store',
                type: 'POST',
                data: {
                    name: $('#product_name').val(),
                    price: $('#price').val(),
                    thumbnail: $('#avatar').val(),
                },
                success: function (data) {
                    console.log(data);
                },
                error: function () {
                    alert('Thêm mới thất bại.')
                }
            })
        })
    }


    $('#thumbnail').keyup(function () {
        $('.img_review').attr('src', $('#avatar').val())
        $('.img_review').removeClass('d-none')
    })
</script>
</body>
</html>
