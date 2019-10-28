<div class="card" style="width: 18rem;">
  <img src="https://via.placeholder.com/300x100" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $name }} ({{ $email }})</h5>
    <p class="card-text">{{ $content }}</p>
  </div>
</div>

@push('styles')
  <style>
    .card {
      border-color: red;
    }
  </style>
@endpush