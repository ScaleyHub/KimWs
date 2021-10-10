@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('products.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Card UI Design with HTML & CSS | Beginner Tutorial - 08</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*{
	margin: 0;
	padding: 0;
}

body{
	margin: 0;
	padding: 0;
	font-family: 'Poppins', sans-serif;
}

.main{
	width: 100%;
	height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	background: linear-gradient(30deg, #0d2999, #ff4646);
}

.card{
	width: 350px;
	height: 450px;
	background: #391755;
	border-radius: 20px;
	overflow: hidden;
	position: relative;
	z-index: 1;
	text-align: center;
  margin: 10px;
}

.card:before{
	content: '';
	width: 100%;
	height: 100%;
	top: -50%;
	left: 0;
	background: #ff4646;
	z-index: -1;
	position: absolute;
	transform: skewY(-15deg);
	transition: .3s all ease;
}

.card:hover:before{
	top: -60%;
	transform: skewY(15deg);
}

.card img{
	width: 80%;
	position: absolute;
	top: 0;
	left: 50%;
	transform: translate(-50%,0);
	padding-top: 10px;
	transition: .3s all ease;
}

.card:hover img{
	width: 60%;
	transform: translate(-50%,0) rotate(15deg);
  opacity: 50%;
}

.card .product-name-price{
	position: absolute;
	bottom: 0;
	left: 50%;
	transform: translate(-50%,-50%);
	transition: .3s all ease;
}

.card:hover .product-name-price{
	bottom: 15%;
}

.card .product-name-price .product-name{
	color: #fff;
	font-weight: 600;
	font-size: 28px;
}

.card .product-name-price .product-price{
	color: #fff;
	font-size: 17px;
	font-weight: 600;
}

.card .product-name-price .product-price span{
	color: #ff4646;
	font-size: 22px;
	padding-left: 3px;
}

.card .buy-now{
	display: inline-block;
	padding: 10px 25px;
	border-radius: 50px;
	background: #ff4646;
	color: #fff;
	text-decoration: none;
	font-size: 15px;
	font-weight: 500;
	position: absolute;
	bottom: -50%;
	left: 50%;
	transform: translate(-50%,-50%);
	outline: none;
	transition: .3s all ease;
}

.card .buy-now:hover{
	background: #fff;
	color: #ff4646;
}

.card:hover .buy-now{
	bottom: 5%;
}
  </style>
</head>
<body>
	<section class="main">
		<div class="card">
			<img src="images/oxva.png" alt="">
			<div class="product-name-price">
				<h2 class="product-name">Oxva Origin AIO</h2>
				<h2 class="product-price"><span>&#8369;</span>1,599</h2>
			</div>
			<a class="buy-now" href="#">Buy Now</a>
		</div>

    <div class="card">
			<img src="images/lost.jpg" alt="">
			<div class="product-name-price">
				<h2 class="product-name">Lost Vape Orion Q-Pro</h2>
				<h2 class="product-price"><span>&#8369;</span> 2,300 ></h2>
			</div>
			<a class="buy-now" href="#">Buy Now</a>
		</div>

    
    <div class="card">
			<img src="images/voopoo.jpg" alt="">
			<div class="product-name-price">
				<h2 class="product-name">VooPoo Argus GT</h2>
				<h2 class="product-price"><span>&#8369;</span> 1,600</h2>
			</div>
			<a class="buy-now" href="#">Buy Now</a>
		</div>

	</section>
</body>
</html>



@endsection

