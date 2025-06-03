<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" />
</head>
<body class="bg-base-200 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-md shadow-lg bg-white p-8 rounded-lg">
    <h2 class="text-2xl font-bold text-center mb-6 text-primary">Login to Your Account</h2>
    <form>
      <div class="form-control mb-4">
        <label class="label">
          <span class="label-text">Email</span>
        </label>
        <input type="email" placeholder="example@mail.com" class="input input-bordered" required />
      </div>
      <div class="form-control mb-2">
        <label class="label">
          <span class="label-text">Password</span>
        </label>
        <input type="password" placeholder="••••••••" class="input input-bordered" required />
        <label class="label">
          <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
        </label>
      </div>
      <div class="form-control mt-4">
        <button class="btn btn-primary">Login</button>
      </div>
    </form>
    <p class="text-center mt-4 text-sm">
      Don't have an account? <a href="#" class="text-primary font-semibold hover:underline">Register</a>
    </p>
  </div>

</body>
</html>
