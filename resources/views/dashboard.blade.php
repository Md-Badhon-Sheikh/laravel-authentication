<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DaisyUI Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      plugins: [tailwindcss.plugins.daisyui],
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" />
</head>
<body class="bg-base-200">

  <div class="drawer lg:drawer-open">
    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col">
      <!-- Topbar -->
      <div class="w-full navbar bg-base-100 shadow-md">
        <div class="flex-none lg:hidden">
          <label for="my-drawer" class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </label>
        </div>
        <div class="flex-1 px-2 text-xl font-bold">Dashboard</div>
        <div class="flex-none">
          <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                <img src="https://i.pravatar.cc/100?img=12" />
              </div>
            </div>
            <ul tabindex="0"
              class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
              <li><a>Profile</a></li>
              <li><a>Settings</a></li>
              <li><a>Logout</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Page content here -->
      <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="stats shadow bg-white">
            <div class="stat">
              <div class="stat-title">Users</div>
              <div class="stat-value text-primary">1,200</div>
              <div class="stat-desc">↗︎ 10% this month</div>
            </div>
          </div>
          <div class="stats shadow bg-white">
            <div class="stat">
              <div class="stat-title">Revenue</div>
              <div class="stat-value text-secondary">$24k</div>
              <div class="stat-desc">↗︎ 15% growth</div>
            </div>
          </div>
          <div class="stats shadow bg-white">
            <div class="stat">
              <div class="stat-title">Server Load</div>
              <div class="stat-value text-error">72%</div>
              <div class="stat-desc">↘︎ Stable</div>
            </div>
          </div>
          <div class="stats shadow bg-white">
            <div class="stat">
              <div class="stat-title">Projects</div>
              <div class="stat-value text-accent">18</div>
              <div class="stat-desc">↗︎ 3 new</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Sidebar -->
    <div class="drawer-side">
      <label for="my-drawer" class="drawer-overlay"></label>
      <aside class="menu p-4 w-64 min-h-full bg-base-100 text-base-content">
        <h2 class="text-lg font-bold mb-4">Menu</h2>
        <ul class="menu">
          <li><a class="active">Dashboard</a></li>
          <li><a>Users</a></li>
          <li><a>Settings</a></li>
          <li><a>Reports</a></li>
        </ul>
      </aside>
    </div>
  </div>

</body>
</html>
