@extends('layouts.master')
@section('title', 'Dashboard')

@section('userDashboard')
<div class="max-w-7xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Your Account</h1>

    <!-- Top Card Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
      <!-- Example Card -->
      <div class="bg-white p-5 rounded-md border hover:shadow transition">
        <div class="flex items-start gap-4">
          <img src="https://img.icons8.com/ios/50/amazon.png" class="w-8 h-8" alt="Orders">
          <div>
            <h2 class="font-semibold text-lg">Your Orders</h2>
            <p class="text-sm text-gray-600">Track, return, or buy things again</p>
          </div>
        </div>
      </div>

      <div class="bg-white p-5 rounded-md border hover:shadow transition">
        <div class="flex items-start gap-4">
          <img src="https://img.icons8.com/ios/50/lock-2.png" class="w-8 h-8" alt="Login">
          <div>
            <h2 class="font-semibold text-lg">Login & security</h2>
            <p class="text-sm text-gray-600">Edit login, name, and mobile number</p>
          </div>
        </div>
      </div>

      <div class="bg-white p-5 rounded-md border hover:shadow transition">
        <div class="flex items-start gap-4">
          <img src="https://img.icons8.com/ios/50/parcel.png" class="w-8 h-8" alt="Prime">
          <div>
            <h2 class="font-semibold text-lg">Prime</h2>
            <p class="text-sm text-gray-600">View benefits and payment settings</p>
          </div>
        </div>
      </div>

      <div class="bg-white p-5 rounded-md border hover:shadow transition">
        <div class="flex items-start gap-4">
          <img src="https://img.icons8.com/ios/50/marker.png" class="w-8 h-8" alt="Addresses">
          <div>
            <h2 class="font-semibold text-lg">Your Addresses</h2>
            <p class="text-sm text-gray-600">Edit addresses for orders and gifts</p>
          </div>
        </div>
      </div>

      <div class="bg-white p-5 rounded-md border hover:shadow transition">
        <div class="flex items-start gap-4">
          <img src="https://img.icons8.com/ios/50/business.png" class="w-8 h-8" alt="Business">
          <div>
            <h2 class="font-semibold text-lg">Your business account</h2>
            <p class="text-sm text-gray-600">Sign up for GST invoice, discounts, and credit</p>
          </div>
        </div>
      </div>

      <div class="bg-white p-5 rounded-md border hover:shadow transition">
        <div class="flex items-start gap-4">
          <img src="https://img.icons8.com/ios/50/credit-card.png" class="w-8 h-8" alt="Payment">
          <div>
            <h2 class="font-semibold text-lg">Payment options</h2>
            <p class="text-sm text-gray-600">Edit or add payment methods</p>
          </div>
        </div>
      </div>

      <div class="bg-white p-5 rounded-md border hover:shadow transition">
        <div class="flex items-start gap-4">
          <img src="https://img.icons8.com/ios/50/money.png" class="w-8 h-8" alt="Pay Balance">
          <div>
            <h2 class="font-semibold text-lg">Amazon Pay balance</h2>
            <p class="text-sm text-gray-600">Add money to your balance</p>
          </div>
        </div>
      </div>

      <div class="bg-white p-5 rounded-md border hover:shadow transition">
        <div class="flex items-start gap-4">
          <img src="https://img.icons8.com/ios/50/headphones.png" class="w-8 h-8" alt="Contact">
          <div>
            <h2 class="font-semibold text-lg">Contact Us</h2>
            <p class="text-sm text-gray-600">Customer service via phone or chat</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Grid Sections -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <!-- Digital Content -->
      <div class="bg-white p-5 rounded-md border">
        <h3 class="font-semibold text-lg mb-2">Digital content and devices</h3>
        <ul class="text-blue-600 text-sm space-y-1">
          <li><a href="#">Apps and more</a></li>
          <li><a href="#">Content Library</a></li>
          <li><a href="#">Devices</a></li>
          <li><a href="#">Digital gifts you've received</a></li>
        </ul>
      </div>

      <!-- Email Alerts -->
      <div class="bg-white p-5 rounded-md border">
        <h3 class="font-semibold text-lg mb-2">Email alerts, messages, and ads</h3>
        <ul class="text-blue-600 text-sm space-y-1">
          <li><a href="#">Advertising preferences</a></li>
          <li><a href="#">Communication preferences</a></li>
          <li><a href="#">SMS alert preferences</a></li>
          <li><a href="#">Message Centre</a></li>
          <li><a href="#">Alexa shopping notifications</a></li>
        </ul>
      </div>

      <!-- More ways to pay -->
      <div class="bg-white p-5 rounded-md border">
        <h3 class="font-semibold text-lg mb-2">More ways to pay</h3>
        <ul class="text-blue-600 text-sm space-y-1">
          <li><a href="#">Default Purchase Settings</a></li>
          <li><a href="#">Amazon Pay</a></li>
          <li><a href="#">Coupons</a></li>
        </ul>
      </div>

      <!-- Ordering preferences -->
      <div class="bg-white p-5 rounded-md border">
        <h3 class="font-semibold text-lg mb-2">Ordering and shopping preferences</h3>
        <ul class="text-blue-600 text-sm space-y-1">
          <li><a href="#">Order preferences</a></li>
          <li><a href="#">Subscribe & Save</a></li>
          <li><a href="#">1-Click settings</a></li>
        </ul>
      </div>

      <!-- Other Accounts -->
      <div class="bg-white p-5 rounded-md border">
        <h3 class="font-semibold text-lg mb-2">Other accounts</h3>
        <ul class="text-blue-600 text-sm space-y-1">
          <li><a href="#">Account Linking</a></li>
          <li><a href="#">Seller account</a></li>
        </ul>
      </div>

      <!-- Shopping programs -->
      <div class="bg-white p-5 rounded-md border">
        <h3 class="font-semibold text-lg mb-2">Shopping programs and rentals</h3>
        <ul class="text-blue-600 text-sm space-y-1">
          <li><a href="#">Manage Your Amazon Family</a></li>
          <li><a href="#">Subscribe & Save</a></li>
        </ul>
      </div>
    </div>
  </div>
@endsection

@section('scripts')

@endsection