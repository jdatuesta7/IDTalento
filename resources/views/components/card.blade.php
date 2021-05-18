{{-- componentes anonimos --}}
<div {{ $attributes->merge(['class' => 'card']) }} style="width: 18rem;">
    <div class="card-body">
        <h3> {{ $title }} </h3>
        <p class="card-text">{{ $slot }}</p>
        {{ $link }}
    </div>
  </div>