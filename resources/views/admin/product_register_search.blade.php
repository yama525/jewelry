<h2>リクエスト審査待ち商品検索</h2>
<form action="{{route('admin.product_register')}}" method="GET">
    <div class="col-span-6 sm:col-span-3 w-10/12 block my-0 mx-auto">
        <label for="request_search" class="block text-sm font-medium text-gray-700"></label>
        <select id="request_search" name="id" autocomplete="request_search-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-900 focus:border-green-900 sm:text-sm">
            @foreach($product_requests as $product_request)
                <option value="{{ $product_request->id }}">id: {{ $product_request->id }}, ブランド: {{ $product_request->brand_name }} 名前: {{ $product_request->name }}</option>
            @endforeach
        </select>
    </div>  
    <button type="submit" class="inline-flex justify-center my-8 py-2 px-16 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-green-800 hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-900">検索</button>
</form>