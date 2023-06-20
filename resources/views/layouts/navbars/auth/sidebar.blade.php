<style>
.navbar-vertical .navbar-nav>.nav-item .nav-link.active .icon {
    background-image: linear-gradient(310deg,#d914ab,#ff6bdd);
}
.navbar-vertical.navbar-expand-xs .navbar-collapse{
    height: 80vh;
}
.nav-link > .icon > i{
    color: #000;
    font-size: large;
}

.nav-link.active > .icon > i{
    color: #fff;
}
</style>
@php
    $categories = [
        ['type' => 'divider', 'name' => 'Main'],
        ['type' => 'route', 'name' => 'Dashboard', 'route' => 'dashboard', 'icon' => 'fas fa-tachometer-alt'],
        ['type' => 'route', 'name' => 'Settings', 'route' => 'settings', 'icon' => 'fas fa-cog'],

        ['type' => 'divider', 'name' => 'Generator'],
        ['type' => 'route', 'name' => 'My Profiles', 'route' => 'profile.index', 'icon' => 'fas fa-users'],
        ['type' => 'route', 'name' => 'My Resumes', 'route' => 'resume.index', 'icon' => 'fas fa-id-card'],
        ['type' => 'route', 'name' => 'Downloads', 'route' => 'downloads', 'icon' => 'fas fa-download'],
        ['type' => 'route', 'name' => 'Templates', 'route' => 'templates', 'icon' => 'fas fa-magic'],
        
        ['type' => 'divider', 'name' => 'Others'],
        ['type' => 'route', 'name' => 'Support', 'route' => 'user.support', 'icon' => 'fas fa-life-ring'],
        ['type' => 'route', 'name' => 'Plans', 'route' => 'user.plan', 'icon' => 'fas fa-gem'],
    ];
@endphp
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
	<div class="sidenav-header">
		<i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
		<a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
            <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="...">
            <span class="ms-3 font-weight-bold">{{ env('APP_NAME') }}</span>
		</a>
	</div>
	<hr class="horizontal dark mt-0">
	<div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
		<ul class="navbar-nav">

			@foreach ($categories as $category)
				@if ($category['type'] == 'route')
					<li class="nav-item">
						<a class="nav-link {{ is_route_active($category['route']) }}" href="{{ route($category['route']) }}">
							<div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
								<i class="{{ $category['icon'] }}"></i>
							</div>
							<span class="nav-link-text ms-1">{{ __($category['name']) }}</span>
						</a>
					</li>
				@elseif ($category['type'] == 'divider')
					<li class="nav-item mt-2">
						<h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">{{ __($category['name']) }}</h6>
					</li>
				@endif
			@endforeach


			<li class="nav-link mb-0">
				<a href="#" class="btn btn-primary btn-md active px-5 text-white" target="_blank" role="button" aria-pressed="true">
					Upgrade to PRO
                </a>
			</li>
		</ul>
	</div>
</aside>
