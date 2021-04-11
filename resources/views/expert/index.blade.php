<x-app-layout>
  <x-slot name="header">
      <h2 class="font-bold text-2xl text-white leading-tight tracking-wider">
          {{ __('Expert List') }}
      </h2>
  </x-slot>

  <section class="py-6 px-3 space-y-6 lg:px-6">
    @livewire('expert.expert-list')
  </section>

  <section>

  </section>
</x-app-layout>
