@extends('adminlte::components.form.input-group-component')

@section('input_group_item')

    {{-- Textarea --}}
    <textarea id="{{ $id }}" name="{{ $name }}"
    @isset($isDisabled) @if($isReadOnly) disabled @endif @endisset 
    @isset($isReadOnly) @if($isReadOnly) readonly @endif @endisset
        {{ $attributes->merge(['class' => $makeItemClass()]) }}
    >{{ $slot }}</textarea>

@overwrite
