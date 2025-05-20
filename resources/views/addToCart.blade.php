@extends('layouts.master')
@section('title', 'add to cart')
@section('content')
	<div class="py-20">
		<div class="container m-auto">
			<h2 class="font-semibold">YOUR CART</h2>
			<div class="cart flex items-center justify-between gap-3">
				<div class="cart-item shadow border flex-2 border-gray-300  px-3 rounded">
					<div class="cart-item-wrapper flex gap-3 p-3">
						<div class="product-img max-w-20">
							<img src="{{ asset('assets/images/products/tshirt-white.svg') }}" alt="product"
								class="object-contain h-full">
						</div>
						<div class="cart-prod-detail flex justify-between items-center w-full">
							<div class="">
								<h3 class="font-semibold text-sm mb-1"><a href="#">Gradient Graphic T-shirt</a></h3>
								<span class="block text-xs">Size: <span class="text-gary-600">large</span></span>
								<span class="block text-xs">Color: <span class="text-gary-600">whites</span></span>
								<h3 class="font-semibold text-sm"><Span>$145</Span></h3>
							</div>
							<div class="">
								<a href="#" class="block">Delete</a>
								<div
									class="product-counter flex justify-between items-center bg-gray-400 py-1 px-4 gap-3 rounded-full">
									<button type="button" class="plus cursor-pointer">-</button>
									<span class="qty text-xs">1</span>
									<button type="button" class="minus cursor-pointer">+</button>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="cart-item-wrapper flex gap-3 p-3">
						<div class="product-img max-w-20">
							<img src="{{ asset('assets/images/products/jeans1.png') }}" alt="product"
								class="object-contain h-full">
						</div>
						<div class="cart-prod-detail flex justify-between items-center w-full">
							<div class="">
								<h3 class="font-semibold text-sm mb-1"><a href="#">Gradient Graphic T-shirt</a></h3>
								<span class="block text-xs">Size: <span class="text-gary-600">large</span></span>
								<span class="block text-xs">Color: <span class="text-gary-600">whites</span></span>
								<h3 class="font-semibold text-sm"><Span>$145</Span></h3>
							</div>
							<div class="">
								<a href="#" class="block">Delete</a>
								<div
									class="product-counter flex justify-between items-center bg-gray-400 py-1 px-4 gap-3 rounded-full">
									<button type="button" class="plus cursor-pointer">-</button>
									<span class="qty text-xs">1</span>
									<button type="button" class="minus cursor-pointer">+</button>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="cart-item-wrapper flex gap-3 p-3">
						<div class="product-img max-w-20">
							<img src="{{ asset('assets/images/products/tshirt-orange.png') }}" alt="product"
								class="object-contain h-full">
						</div>
						<div class="cart-prod-detail flex justify-between items-center w-full">
							<div class="">
								<h3 class="font-semibold text-sm mb-1"><a href="#">Gradient Graphic T-shirt</a></h3>
								<span class="block text-xs">Size: <span class="text-gary-600">large</span></span>
								<span class="block text-xs">Color: <span class="text-gary-600">whites</span></span>
								<h3 class="font-semibold text-sm"><Span>$145</Span></h3>
							</div>
							<div class="">
								<a href="#" class="block">Delete</a>
								<div
									class="product-counter flex justify-between items-center bg-gray-400 py-1 px-4 gap-3 rounded-full">
									<button type="button" class="plus cursor-pointer">-</button>
									<span class="qty text-xs">1</span>
									<button type="button" class="minus cursor-pointer">+</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="cart-total shadow border border-gray-300 flex-1 p-3 rounded">
					<h3 class="text-lg font-semibold mb-3">Order Summary</h3>
					<table class="w-full border-separate border-spacing-y-3 text-gray-700">
						<tbody>
							<tr>
								<td class="">Subtotal</td>
								<td class="text-end font-semibold">$565</td>
							</tr>
							<tr>
								<td>Discount (-20%)</td>
								<td class="text-end text-red-500">-$113</td>
							</tr>
							<tr>
								<td>Delivery Fee</td>
								<td class="text-end">$15</td>
							</tr>
							<tr>
								<td>Total</td>
								<td class="text-end font-semibold text-lg">$467</td>
							</tr>
						</tbody>
					</table>
					<form action="" class="mb-3">
						<div class="flex justify-between gap-3">
						<input type="text" name="coupon" id="" placeholder="Apply Promo Code" class="bg-gray-200 flex-1 p-2 pl-5 rounded-full">
						<button class="bg-tertiary hover:bg-contrast rounded-full py-2 px-6 text-text cursor-pointer transition duration-300">Apply</button>
						</div>
					</form>
					<button class="bg-tertiary hover:bg-contrast w-full p-2.5 rounded-full transition duration-300 text-text">Go to Checkout</button>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('javascript')
	<script>
		console.log("hello world")
	</script>
@endsection