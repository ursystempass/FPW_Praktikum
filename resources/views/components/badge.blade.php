@php
$status = $status ?? 'Aman';

$class = match ($status) {
'Aman' => 'bg-[#021d6b] text-white',
'Menipis' => 'bg-[#a08d82] text-[#021d6b]',
'Habis' => 'bg-[#fe8a24] text-[#021d6b]',
default => 'bg-gray-100 text-gray-700',
};
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium $class"]) }}>
    {{ $status }}
</span>