<div {{ $attributes->merge(['class' => 'alert-dismissible fade show']) }} role="alert">
    <strong>{{ $slot }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>