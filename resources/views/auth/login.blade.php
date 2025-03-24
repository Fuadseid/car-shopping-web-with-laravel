
<x-layouts.guest-layout title="Login" Cssclass="page-login">
  
    <h1 class="auth-page-title">Login</h1>
    
    <form action="" method="post">
      <div class="form-group">
        <input type="email" placeholder="Your Email" />
      </div>
      <div class="form-group">
        <input type="password" placeholder="Your Password" />
      </div>
      <div class="text-right mb-medium">
        <a href="/password-reset.html" class="auth-page-password-reset"
          >Reset Password</a
        >
        <x-slot:btn>Login</x-slot:btn>
      </div>
    </form> 
    <x-slot:footerlink> Don't have an account? -
      <a href="/signup.html"> Click here to create one</a>
 </x-slot:footerlink>
     
   



</x-layouts.guest-layout>