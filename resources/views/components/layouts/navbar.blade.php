@props(['layout'])

<div class="navbar bg-base- max-w-7xl mx-auto">
    <div class="navbar-start">
        <a href="{{ route('home') }}"  wire:navigate class="btn btn-ghost text-xl">{{config('app.name')}}</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
        <li><a>Projects</a></li>
        <li><a>Blogs</a></li>
        <li><a>Contact</a></li>
        </ul>
    </div>

  <div class="navbar-end space-x-4">
    @auth
      <a href="{{ route('dashboard') }}" wire:navigate class="btn btn-sm btn-primary">Dashboard</a>
    @else
      <a href="{{ route('login') }}" wire:navigate class="btn btn-sm btn-primary">Login</a>
    @endauth

    @if ($layout === 'dashboard')
        <label for="my-drawer-2" class="btn  btn-sm lg:hidden">
            <span class="material-symbols-outlined">menu</span>
        </label>
    @elseif ($layout === 'app')
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-sm lg:hidden">
                <span class="material-symbols-outlined">menu</span>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>Projects</a></li>
                <li><a>Blogs</a></li>
                <li><a>Contact</a></li>
            </ul>
        </div>
    @endif
  </div>
</div>