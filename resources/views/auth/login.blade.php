<x-layout>
  <div class="flex justify-center items-center h-screen">
    <div class="w-1/2 h-screen hidden lg:block">
      <img
        src="{{ asset('storage/images/main/plant1.jpg') }}"
        alt="PT Ewindo Plant 1 Building"
        class="object-cover w-full h-1/2"
      />
      <img
        src="{{ asset('storage/images/main/plant2.png') }}"
        alt="PT Ewindo Plant 2 Building"
        class="object-cover w-full h-1/2"
      />
    </div>
    <div class="lg:p-36 md:p-52 sm:20 p-8 w-1/2">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="{{ asset('storage/logos/ewindo.png') }}" alt="PT Ewindo Logo">
        <h2 class="mt-4 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in</h2>
      </div>
  
      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <x-forms.form action="/login" method="POST">
          <x-forms.input label="Email" name="email" type="email" />
          <x-forms.input label="Password" name="password" type="password"/>

          <x-forms.button>Sign In</x-forms.button>
        </x-forms.form>
      </div>
    </div>
  </div>
</x-layout>