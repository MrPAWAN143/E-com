


@foreach($products as $product)
 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
     <td class="px-6 py-4">{{ $loop->iteration + $products->firstItem() - 1 }}</td>
     <td class="px-6 py-4">{{ $product->product_name }}</td>
     <td class="px-6 py-4">{{ $product->slug }}</td>
     <td class="px-6 py-4">
         @if($product->featured_image)
         <img src="{{ asset($product->featured_image) }}" alt="Image" class="w-24 h-10 rounded object-cover">
         @else
         <span class="text-gray-400">No Image</span>
         @endif
     </td>
     <td class="px-6 py-4">{{ $product->meta_title }}</td>
     <td class="px-6 py-4">{{ $product->meta_description }}</td>
     <td class="px-6 py-4">{{ $product->meta_keywords }}</td>
     @if(Auth::user()->user_type == 'super_admin')
     <td class="px-6 py-4">{{ $product->getUser->name ?? '-' }} - {{ $product->getUser->id ?? '-' }}</td>
     @endif
     <td class="px-6 py-4 text-right">
         <a href="{{route('edit-product', $product->slug)}}" class="text-blue-600 hover:underline">Edit</a>
     </td>
     <td class="px-6 py-4 text-right ">
         @if ($product->is_active === 1)
         <button class="statusBtn px-3 py-1 text-sm font-medium text-green-700 bg-green-100 rounded hover:bg-green-200" data-product-id="{{ $product->id }}">
             Active
         </button>
         @else
         <button class="statusBtn px-3 py-1 text-sm font-medium text-red-700 bg-red-100 rounded hover:bg-red-200" data-product-id="{{ $product->id }}">
             Inactive
         </button>
         @endif
     </td>
 </tr>
 @endforeach