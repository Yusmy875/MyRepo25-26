<?php include 'function.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MyShop - Home</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php renderNav("home"); ?>

<?php
// Array of products
$products = [
    [
        'img' => 'pictures/madarin.jpg',
        'alt' => 'Product 1',
        'name' => 'Product 1',
        'price' => 29.99
    ],
    [
        'img' => 'pictures/product2.jpg',
        'alt' => 'Product 2',
        'name' => 'Product 2',
        'price' => 39.99
    ],
    [
        'img' => 'pictures/product3.jpg',
        'alt' => 'Product 3',
        'name' => 'Product 3',
        'price' => 49.99
    ]
];
?>

<section class="hero">
<h1>Welcome to OrangeShop</h1>
<p>Quality products delivered to your door.</p>
<a href="#" class="btn">Shop Now</a>
</section>
<section class="products">
<h2>Featured Products</h2>
<div class="product-grid">
<?php foreach ($products as $product): ?>
<div class="product-card">
    <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="<?php echo htmlspecialchars($product['alt']); ?>">
    <h3><?php echo htmlspecialchars($product['name']); ?></h3>
    <p>$<?php echo number_format($product['price'], 2); ?></p>
    <button>Add to Cart</button>
</div>
<?php endforeach; ?>
</div>
</section>
<footer>
<p>&copy; 2025 MyShop. All rights reserved.</p>
</footer>
</body>
</html>
 