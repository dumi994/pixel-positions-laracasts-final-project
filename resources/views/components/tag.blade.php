@props(["size" => "base"])

@php
  $classes = "bg-white/10 hover:bg-white/25 mr-2 rounded-xl font-bold transition-colors duration-300 flex justify-center items-center";
  if ($size === "base") {
    $classes .= " px-5 py-1 text-sm";
  }
  if ($size === "small") {
    $classes .= " px-3 py-1 font-2xs";
  }
@endphp

<a href="" class="{{ $classes }}">
  {{ $slot }}
</a>
