        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
                    @auth
                    <li><a class="has-arrow " href="{{route('home')}}" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="{{route('home')}}">Home</a></li>
						</ul>

                    </li>
					 @can('view-any', App\Models\SocialMediaPlatform::class)
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
						<i class="fas fa-info-circle"></i>
							<span class="nav-text">Social Medias</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('social-media-platforms.index') }}">View all</a></li>
							<li><a href="{{ route('social-media-platforms.create') }}">Add new</a></li>
                        </ul>
                    </li>
                    @endcan
                     @can('view-any', App\Models\Service::class)
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-chart-line"></i>
							<span class="nav-text">Services</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('services.index') }}">View all</a></li>
                            <li><a href="{{ route('services.create') }}">Add new</a></li>
                        </ul>
                    </li>
                    @endcan
                    @can('view-any', App\Models\Vendor::class)
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fab fa-bootstrap"></i>
							<span class="nav-text">Payment Agents</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('vendors.index') }}">View all</a></li>
                            <li><a href="{{ route('vendors.create') }}">Add new</a></li>

                        </ul>
                    </li>
                    @endcan
                    @can('view-any', App\Models\Order::class)

                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-heart"></i>
							<span class="nav-text">Orders</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('orders.index') }}">View all</a></li>
                        </ul>
                    </li>
                    @endcan
                    {{-- <li><a href="widget-basic.html" class="" aria-expanded="false">
							<i class="fas fa-user-check"></i>
							<span class="nav-text">Widget</span>
						</a>
					</li> --}}
                    @can('view-any', App\Models\Transaction::class)
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-file-alt"></i>
							<span class="nav-text">Transactions</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('transactions.index') }}">View all</a></li>
                        </ul>
                    </li>
                    @endcan
                    @can('view-any', App\Models\SentMessage::class)
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-table"></i>
							<span class="nav-text">Sms & Notfs</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('sent-messages.index') }}">send sms</a></li>
                            @can('view-any', App\Models\Message::class)
                            <li><a href="{{ route('messages.index') }}">sms templates</a></li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                     @can('view-any', App\Models\Users::class)
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-user-check"></i>
							<span class="nav-text">Manage users</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('users.index') }}">View all</a></li>
                            <li><a href="{{ route('users.create') }}">Add new</a></li>
                        </ul>
                    </li>
                    @endcan
                    @if (Auth::user()->can('view-any', Spatie\Permission\Models\Role::class) ||
                    Auth::user()->can('view-any', Spatie\Permission\Models\Permission::class))
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-lock"></i>
							<span class="nav-text">Access control</span>
						</a>
                        <ul aria-expanded="false">
                            @can('view-any', Spatie\Permission\Models\Role::class)
                            <li><a href="{{ route('roles.index') }}">Roles</a></li>
                            @endcan
                            @can('view-any', Spatie\Permission\Models\Permission::class)
                            <li><a href="{{ route('permissions.index') }}">Permissions</a></li>
                            @endcan
                        </ul>
                    </li>

                    @can('view-any', App\Models\Settings::class)
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-cogs"></i>
							<span class="nav-text">System settings</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="#">View all</a></li>
                        </ul>
                    </li>
                    @endcan

                    @endif
                    @endauth

                </ul>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->