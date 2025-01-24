@foreach ($feeds as $data)
    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $data->title }}</h5>
                <p class="card-text">{{ $data->description }}</p>
            </div>
        </div>
    </div>
@endforeach