@props([
  "job",
])

<x-panel class="flex gap-x-6">
  <div class="">
    <x-employer-logo />
  </div>
  <div class="flex-1 flex flex-col">
    <a
      href="{{ $job->url }}"
      target="_blank"
      class="self-start text-sm text-gray-400"
    >
      {{ $job->employer->name }}
    </a>
    <h3
      class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300"
    >
      <a href=" {{ $job->url }}">
        {{ $job->title }}
      </a>
    </h3>
    <p class="text-sm text-gray-400 mt-auto">
      {{ $job->schedule }} - From {{ $job->salary }} USD
    </p>
  </div>
  <div class="flex justify-between items-center mt-auto">
    @foreach ($job->tags as $tag)
      <x-tag :$tag />
    @endforeach
  </div>
</x-panel>

<!-- <div class="p-4 bg-white/5 rounded-xl flex gap-x-6">
  <div>
    <img src="https://placehold.co/42x42" class="rounded-xl" alt="" />
  </div>
</div>
 -->
