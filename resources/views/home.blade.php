@extends('.app')

@section('page-main')
<section id="posters" class="py-3">
    <div class="container">
        <div id="currentSiries">
            <div>current siries</div>
        </div>
        <div class="row poster_list gap-3 py-4">
             @foreach ($comics as $item)
                <div class="card col-xl-2 text-center">
                    <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                    <div class="card-body">
                        <h3>{{ $item['title'] }}</h3>
                    </div>
                    <button><a href="{{ route('comics_single', ['index' => $loop->index]) }}">dettaglio prodotto</a></button>
                </div>
            @endforeach
        </div>
        <button id="loadMore"><a href="#">load more</a></button>
    </div>
</section>
@endsection