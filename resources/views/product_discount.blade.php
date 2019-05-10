<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form action="/product_discount" method="POST">
    @csrf
    <p>
        Product Description: <input type="text" name="productDescription" >
    </p>
    <p>
        List Price: <input type="number" name="price" >
    </p>
    <p>
        Discount Percent: <input type="number" name="discountPercent" >(%)
    </p>
    <p>
        <button type="submit">Calculate Discount</button>
    </p>
</form>
</body>
</html>