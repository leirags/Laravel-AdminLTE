@extends('adminlte::components.form.input-group-component')

@section('input_group_item')

    {{-- Textarea --}}
    <textarea id="{{ $id }}" name="{{ $name }}"
    @isset($isDisabled) disabled @endisset @isset($isReadOnly) readonly @endisset
        {{ $attributes->merge(['class' => $makeItemClass()]) }}
    >{{ $slot }}</textarea>

@overwrite
