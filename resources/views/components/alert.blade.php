@props(['type' => 'info', 'message'])
<div
@if($attributes->has(['class']))
    {{ $attributes
    ->class(['p4', $x])
    ->merge(['type'=>'button','data-controller' => $attributes->prepends('profile-controller')]) }}>
    this is alert component and this is {{$message}}--{{$attributes}}--{{$slot}}
@endif


</div>
