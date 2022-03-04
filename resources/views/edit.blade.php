<x-app-layout>
    <div class="row">
        <div class="col-md-12">
            <form action="/lp/{{$product->id}}" method="POST" class="card card-body shadow-2 mb-1">
                @csrf
                @method('PUT')
                <div class="form-outline mb-2">
                    <textarea class="form-control" id="text-area" rows="4" name="name">{{ $product->name }}</textarea>
                    {{-- <img src="dummy_img/{{ $product->image }}" alt=""> --}}
                    <input type="text" name="image" value="{{ $product->image }}">
                    {{-- <input type="text" name='' placeholder="{{ $product->lender_user->name }}"> --}}
                </div>
                <!-- タグづけ用 -->
                {{-- <div class="form-outline mb-2">
                    @foreach($tags as $tag)
                        <div class="form-check form-check-inline">
                            <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="tag-checkbox{{$tag->id}}"
                                    name="tags[]"
                                    value="{{$tag->id}}"
                                    {{  (in_array($tag->id, $selectedTags)) ?'checked':'' }}
                            />
                            <label class="form-check-label" for="tag-checkbox2">{{$tag->name}}</label>
                        </div>
                    @endforeach
                </div> --}}
                <div class="d-flex">
                    <a href="/lp" class="btn btn-dark btn-block shadow-0">キャンセル</a>
                    <button type="submit" class="btn btn-primary btn-block shadow-0">更新</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>