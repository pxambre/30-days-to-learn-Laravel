<button {{ $attributes->merge([
    'class' => 'rounded-md bg-gray-700 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600',
    'type' => 'submit'
]) }}>{{ $slot }}</button>
