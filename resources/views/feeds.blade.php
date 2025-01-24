@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Infinite Scroll Example</h1>

    <div id="content-container" class="row">
        @foreach ($feeds as $data)
        <div class="container mt-5">
            <div class="card mx-auto" style="max-width: 700px;">
                <div class="card-body">
                    @if (pathinfo($data->media, PATHINFO_EXTENSION) === 'mp4')
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" autoplay loop controls>
                            <source src="/feeds-media/{{ $data->media }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    @elseif (in_array(pathinfo($data->media, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']))
                    <div class="text-center">
                        <img src="/feeds-media/{{ $data->media }}" class="img-fluid" alt="Media Image">
                    </div>
                    @endif
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->title }}</h5>
                            <p class="card-text">{{ $data->content }}</p>
                            <p class="card-text">Posted by : {{ $data->user->name }}</p>
                            <p class="card-text"><small class="text-muted">{{ $data->updated_at }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Loader -->
    <div id="loading" class="text-center" style="display: none;">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let page = 1; 
        const contentContainer = document.getElementById('content-container');
        const loading = document.getElementById('loading');
        let isLoading = false;
        async function loadMoreContent() {
            if (isLoading) return;
            isLoading = true;
            loading.style.display = 'block';
            try {
                const response = await fetch(`{{ route('feeds.scroll') }}?page=${++page}`);
                const data = await response.json();

                if (data.html) {
                    contentContainer.insertAdjacentHTML('beforeend', data.html);
                } else {
                    window.removeEventListener('scroll', handleScroll);
                }
            } catch (error) {
                console.error('Error fetching content:', error);
            } finally {
                isLoading = false;
                loading.style.display = 'none';
            }
        }
        function handleScroll() {
            const { scrollTop, scrollHeight, clientHeight } = document.documentElement;
            if (scrollTop + clientHeight >= scrollHeight - 10) {
                loadMoreContent();
            }
        }
        window.addEventListener('scroll', handleScroll);
    });
</script>
@endsection
