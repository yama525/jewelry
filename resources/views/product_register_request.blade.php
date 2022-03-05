<x-app-layout>
    <form action="/product_register_request" method="POST" class="card card-body shadow-2 mb-3">
        @csrf
        <div class="mb-2">
            <div class="form-outline">
                {{-- <textarea class="form-control" id="text-area" rows="3" name="name" placeholder="ぼやきを入力"></textarea> --}}
                <input type="text" name="name" placeholder="ジュエリーの名前">
                <input type="text" name="image" placeholder="ファイル名">

            </div>
        </div>
        <button
            type="submit"
            class="btn btn-primary btn-lg btn-block shadow-0 font-weight-bold"
        >
            商品の登録を依頼する
        </button>
    </form>
</x-app-layout>