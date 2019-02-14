<input type="submit" class="w-full text-center shadow bg-blog-icon hover:shadow-md focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 mb-3 rounded"
    @foreach ($options as $optionName => $optionValue)
        {{$optionName}}="{{$optionValue}}"
    @endforeach
/>

