<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" />
</head>
<body class="bg-base-200 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-center mb-6 text-primary">Create Your Account</h2>
    <form>
      <div class="form-control mb-4">
        <label class="label">
          <span class="label-text">Full Name</span>
        </label>
        <input type="text" placeholder="John Doe" class="input input-bordered" required />
      </div>
      <div class="form-control mb-4">
        <label class="label">
          <span class="label-text">Email</span>
        </label>
        <input type="email" placeholder="example@mail.com" class="input input-bordered" required />
      </div>
      <div class="form-control mb-4">
        <label class="label">
          <span class="label-text">Password</span>
        </label>
        <input type="password" placeholder="••••••••" class="input input-bordered" required />
      </div>
      <div class="form-control mb-2">
        <label class="label">
          <span class="label-text">Confirm Password</span>
        </label>
        <input type="password" placeholder="••••••••" class="input input-bordered" required />
      </div>
      <div class="form-control mt-4">
        <button class="btn btn-primary">Register</button>
      </div>
    </form>
    <p class="text-center mt-4 text-sm">
      Already have an account? <a href="#" class="text-primary font-semibold hover:underline">Login here</a>
    </p>
  </div>

</body>
</html>
