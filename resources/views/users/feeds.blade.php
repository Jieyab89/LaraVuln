@extends('layouts.app')

@section('content')

<div class="container">
    @if(session('success.up'))
          <div class="alert alert-success">
            {!! session('success.up') !!}
          </div>
    @endif
<!--Section: FAQ-->
<section>
  <h3 class="text-center mb-4 pb-2 text-primary fw-bold">Post Laravuln Feeds</h3>
  <p class="text-center mb-5">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum aspernatur perspiciatis sint laudantium, nihil facilis repudiandae iure temporibus. Fuga, doloremque sed. Laborum quas labore libero fuga eveniet enim! Dicta, ipsam.
  </p>
</section>
<!--Section: FAQ-->
 <h1 class="text-center mb-4 pb-2 text-primary fw-bold">Post</h1>
    <form id="uploadForm" action="{{ route('user.feeds.send') }}" method="post"  enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="I LOVE YOU" name="title" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Upload Media</label>
            <input type="file" name="media" class="form-control-file" id="fileInput">
            <small style="color:red">Max 1MB Allowed types are JPG, PNG, JPEG, GIF and MP4.</small>
        </div>
        <p></p>
        <p id="errorMessage" style="color: red;"></p>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>
<script>
    const form = document.getElementById('uploadForm');
    const fileInput = document.getElementById('fileInput');
    const errorMessage = document.getElementById('errorMessage');

    form.addEventListener('submit', function (event) {
        const file = fileInput.files[0];
        let isValid = true;

        errorMessage.textContent = '';

        if (file) {
            const maxSize = 1 * 1024 * 1024; // 1MB in bytes
            const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'video/mp4'];

            if (file.size > maxSize) {
                errorMessage.textContent = 'File too large. Maximum size is 1MB.';
                isValid = false;
            } else if (!allowedTypes.includes(file.type)) {
                errorMessage.textContent =
                    'Invalid file type. Allowed types are JPG, PNG, JPEG, GIF and MP4.';
                isValid = false;
            }
        } else {
            errorMessage.textContent = 'Please upload an attachment.';
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault(); 
        }
    });
</script>
@endsection