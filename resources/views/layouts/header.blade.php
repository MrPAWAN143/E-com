
    <nav class="flex justify-between items-center container m-auto gap-5">
        <div class="flex items-center">
            <img src="{{ asset('assets/logo/noBgColor-1920w.webp') }}" alt="Logo" class="w-50 object-cover mr-2">
            <!-- <span class="text-xl font-bold">My Website</span> -->
        </div>
        <ul class="flex space-x-5">
            <li><a href="" class="text-secondary hover:text-tertiary">Shop</a></li>
            <li><a href="" class="text-secondary hover:text-tertiary">Catagory</a>
                <div class="dropdown absolute">
                    <div class="dropdown-menu">
                        <ul class="">
                            <li><a href="#">catagory1</a></li>
                            <li><a href="#">catagory2</a></li>
                            <li><a href="#">catagory3</a></li>
                            <li><a href="#">catagory4</a></li>
                        </ul>
                    </div>
                </div>
        </li>
            <li><a href="" class="text-secondary hover:text-tertiary">On Sale</a></li>
            <li><a href="" class="text-secondary hover:text-tertiary">New Arrivals</a></li>
            <li><a href="" class="text-secondary hover:text-tertiary">Brands</a></li>
        </ul>
        <div class="search_bar flex items-center flex-1  rounded-full p-2 bg-text mx-4">
            <div class="search_icon">
                <a href="#"><i>search</i></a>
            </div>
            <form action="" method="" class="w-full">
                <div class="search px-3">
                <input type="text" name="search" placeholder="Search for products" class="w-full outline-none">
                </div>
            </form>
        </div>
        <ul class="flex space-x-4">
            <li><a href="" class="text-secondary hover:text-tertiary">Login</a></li>
            <li><a href="" class="text-secondary hover:text-tertiary">Register</a></li>
            <li><a href="" class="text-secondary hover:text-tertiary">Logout</a></li>
        </ul>
    </nav>
