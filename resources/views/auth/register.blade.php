<x-layout>
  <x-form  title="Register an Account" description="Start writing your ideas today.">
    <form action="/register" method="POST" class="mt-10 space-y-4">
      @csrf

      <x-form.field type="text" label="Name" name="name"  />
      <x-form.field type="email" label="Email" name="email"  />
      <x-form.field type="password" label="Password" name="password"  />
      
      <button type="submit" class="btn mt-2 h-10 w-full">Create Account</button>
    </form>
  </x-form>
</x-layout>