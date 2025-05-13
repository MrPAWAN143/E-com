@foreach($categories as $cat)
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <td class="px-6 py-4">{{ $cat->id }}</td>
    <td class="px-6 py-4">{{ $cat->name }}</td>
    <td class="px-6 py-4">{{ $cat->slug }}</td>
    <td class="px-6 py-4">
        @if($cat->image)
            <img src="{{ asset($cat->image) }}" alt="Image" class="w-10 h-10 rounded object-cover">
        @else
            <span class="text-gray-400">No Image</span>
        @endif
    </td>
    <td class="px-6 py-4">{{ $cat->meta_title }}</td>
    <td class="px-6 py-4">{{ $cat->meta_description }}</td>
    <td class="px-6 py-4">{{ $cat->meta_keywords }}</td>
    <td class="px-6 py-4">-</td>
    <td class="px-6 py-4 text-right">
        <a href="{{route('edit-category' , $cat->slug)}}" class="text-blue-600 hover:underline">Edit</a>
    </td>
</tr>
@endforeach
