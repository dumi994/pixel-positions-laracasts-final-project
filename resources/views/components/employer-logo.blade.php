@props([
  "employer",
  "width" => 90,
])

<img
  src="{{ $employer->logo ? asset($employer->logo) : "https://picsum.photos/seed/" . rand(0, 10000) . "/" . $width }}"
  class="rounded-xl"
  alt=""
  width="{{ $width }}"
/>
