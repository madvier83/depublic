<div class="drawer lg:drawer-open">
  <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content flex flex-col">
    <!-- Page content here -->
    {{ $slot }}
    <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
  </div> 
  <div class="drawer-side">
    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label> 
    <ul class="menu p-4 w-80 min-h-full bg-gray-50 text-base-content">
      <!-- Sidebar content here -->
      <li><a href="/admin">Dashboard</a></li>
      <li><a href="/admin/users">Users</a></li>
      <li><a href="/admin/events">Events</a></li>
    </ul>
  
  </div>
</div>

