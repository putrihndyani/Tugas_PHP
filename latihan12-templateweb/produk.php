<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Produk</title>
    <style>
        .product-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .product {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            width: 200px;
            text-align: center;
        }

        .product img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .product h3 {
            margin-bottom: 10px;
        }

        .product p {
            color: #888;
        }
    </style>
</head>

<body>
    <h1 align="center">Our Product</h1>
    <div class="product-container">
        <div class="product">
            <img src="https://cdn.idntimes.com/content-images/community/2022/02/fromandroid-0dc9671d163ad8921ffafd45d0be6619_600x400.jpg" alt="">
            <h3>Bolu Panggang</h3>
            <p>Rp 65.000</p>
            <button>Beli</button>
        </div>
        <div class="product">
            <img src="https://img.kurio.network/xICgRXknzD91eylETkDBDuvkD5k=/1200x1200/filters:quality(80)/https://kurio-img.kurioapps.com/22/07/26/593c9c0d-27ee-4c68-b98d-5dfb68aa30a2.jpg" alt="">
            <h3>Donat</h3>
            <p>Rp 150.000</p>
            <button>Beli</button>
        </div>
        <div class="product">
            <img src="https://png.pngtree.com/png-vector/20240110/ourlarge/pngtree-delicious-strawberry-cupcake-to-give-as-a-valentine-s-day-gift-png-image_11423931.png" alt="">
            <h3>Cake Spesial</h3>
            <p>Rp 140.000</p>
            <button>Beli</button>
        </div>
        <div class="product">
            <img src="https://img.ws.mms.shopee.co.id/22d00648abb466159471dabe5c86b67e" alt="">
            <h3>Cake Ulang Tahun</h3>
            <p>Rp 200.000</p>
            <button>Beli</button>
        </div>

    </div>
</body>

</html>