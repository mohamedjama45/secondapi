<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>

<form action="{{ route('orders.add') }}" method="post">
@csrf 
<input type="text" name="name" placeholder="name"> <br>
<input type="text" name="product" placeholder="product"> <br>
<input type="text" name="amount" placeholder="amount"> <br>
<input type="text" name="status" placeholder="status"> <br>
<button type="submit">save</button>

</form>
    
</body>
</html>