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
  <h3 class="text-center mb-4 pb-2 text-primary fw-bold">FAQ</h3>
  <p class="text-center mb-5">
    Find the answers for the most frequently asked questions below
  </p>

  <div class="row">
    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> A simple
        question?</h6>
      <p>
        <strong><u>Absolutely!</u></strong> We work with top payment companies which guarantees
        your safety and
        security. All billing information is stored on our payment processing partner.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-pen-alt text-primary pe-2"></i> A question
        that is longer then the previous one?</h6>
      <p>
        <strong><u>Yes, it is possible!</u></strong> You can cancel your subscription anytime in
        your account. Once the subscription is
        cancelled, you will not be charged next month.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-user text-primary pe-2"></i> A simple
        question?</h6>
      <p>
        Currently, we only offer monthly subscription. You can upgrade or cancel your monthly
        account at any time with no further obligation.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-rocket text-primary pe-2"></i> A simple
        question?</h6>
      <p>
        Yes. Go to the billing section of your dashboard and update your payment information.
      </p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-home text-primary pe-2"></i> A simple
        question?</h6>
      <p><strong><u>Unfortunately no</u>.</strong> We do not issue full or partial refunds for any
        reason.</p>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-book-open text-primary pe-2"></i> Another
        question that is longer than usual</h6>
      <p>
        Of course! We’re happy to offer a free plan to anyone who wants to try our service.
      </p>
    </div>
  </div>
</section>
<!--Section: FAQ-->
 <h1 class="text-center mb-4 pb-2 text-primary fw-bold">Getting Touch</h1>
    <form id="uploadForm" action="{{ route('user.suggesstion.send') }}" method="post"  enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="{{ Auth::user()->email }}" value="{{ Auth::user()->email }}" name="email" readonly>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Subject</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="subject" name="subject">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Upload attachment</label>
            <input type="file" name="file" class="form-control-file" id="fileInput">
            <small style="color:red">Max 1MB & pdf file</small>
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

    form.addEventListener('submit', function(event) {
        const file = fileInput.files[0];
        let isValid = true;

        errorMessage.textContent = '';

        if (file) {
            const maxSize = 1 * 1024 * 1024; 
            if (file.size > maxSize) {
                errorMessage.textContent = 'File too large. Maximum size is 1MB.';
                isValid = false;
            } else if (file.type !== 'application/pdf') {
                errorMessage.textContent = 'Only PDF files are allowed.';
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