<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-4 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-0 text-2xl font-semibold text-gray-900 dark:text-white">
          <img class="w-32 h-auto mr-2" src="{{asset('assets/logo/logo.png')}}" alt="logo">
    
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Sign in to your account
              </h1>
              <p class=" msg"></p>
              <form class="space-y-4 md:space-y-6 loginAction">
               
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div class="flex items-center justify-between">
                      <!-- <div class="flex items-start">
                          <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                          </div>
                          <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                          </div>
                      </div> -->
                      <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary">Forgot password?</a>
                  </div>
                  <button type="submit" class="focus:outline-none block w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Sign In</button>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                      Don’t have an account yet? <a href="{{route('register')}}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>


<script type="module">
$(document).ready(function() {
    $('.loginAction').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: url.login, // Make sure this matches your Laravel route
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.status === 'success') {
                    $('.msg').text(`${response.message}, ${response.user.name}`).removeClass('text-red-600').addClass('text-green-600');

                    window.location.href = response.redirect;
                } else {
                    $('.msg').text(response.message || 'Login failed.').removeClass('text-green-600').addClass('text-red-600');
                }
            },
            error: function(xhr) {
                let res = xhr.responseJSON;
                if (res && res.errors) {
                    // Display Laravel validation errors
                    let messages = Object.values(res.errors).flat().join('\n');
                    $('.msg').text(messages).removeClass('text-green-600').addClass('text-red-600');
                } else {
                    $('.msg').text('An error occurred. Please try again.').removeClass('text-green-600').addClass('text-red-600');
                }
            }
        });
    });
});

let url = {
    login: "{{ route('login') }}",
}
</script>
</body>
</html>