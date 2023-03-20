@props(['disabled' => false])

{{-- <input  {{ $disabled ? 'disabled' : '' }} style="background: rgb(244, 244, 244); width: 100%; height: 40px; border-radius: 5px; outline:none; padding: 0px 15px"> --}}
<input  {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['style' => 'background: rgb(244, 244, 244); width: 100%; height: 40px; border-radius: 5px; outline:none; padding: 0px 15px']) !!}>
{{-- <input  {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}> --}}
