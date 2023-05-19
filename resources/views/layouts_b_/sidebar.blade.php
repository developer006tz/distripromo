<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            @auth
            <li><a class="has-arrow ai-icon" href="{{ route('home') }}" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-077-menu-1"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="app-profile.html">Profile</a></li>
                    <li><a href="post-details.html">Post Details</a></li>
                </ul>
            </li>
             @can('view-any', App\Models\SocialMediaPlatform::class)
            <li><a href="{{ route('social-media-platforms.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Media Platforms</span>
                </a>
            </li>
            @endcan

                         @can('view-any', App\Models\Service::class)
                            <li>
                                <a href="{{ route('services.index') }}" class="has-arrow ai-icon" aria-expanded="false">
                                    <i class="flaticon-381-film-strip"></i>
                                    <span>Services</span>
                                </a>
                            </li>
                            @endcan
                            @can('view-any', App\Models\Vendor::class)
                            <li>
                                <a href="{{ route('vendors.index') }}" class="ai-icon" aria-expanded="false">
                                    <i class="flaticon-381-settings-2"></i>
                                    <span>Payment Providers</span>
                                </a>
                            </li>
                            @endcan
                            @can('view-any', App\Models\Order::class)
                            <li>
                                <a href="{{ route('orders.index') }}" class="ai-icon" aria-expanded="false">
                                    <i class="flaticon-381-settings-2"></i>
                                    <span>Orders</span>
                                </a>
                            </li>
                            @endcan
                            @can('view-any', App\Models\Transaction::class)
                            <li>
                                <a href="{{ route('transactions.index') }}" class="ai-icon" aria-expanded="false">
                                    <i class="flaticon-381-settings-2"></i>
                                    <span>Transactions</span>
                                </a>
                            </li>
                            @endcan
                            @can('view-any', App\Models\Message::class)
                            <li>
                                <a href="{{ route('messages.index') }}" class="ai-icon" aria-expanded="false">
                                    <i class="flaticon-381-settings-2"></i>
                                    <span>Message Templates</span>
                                </a>
                            </li>
                            @endcan
                            @can('view-any', App\Models\SentMessage::class)
                            <li>
                                <a href="{{ route('sent-messages.index') }}" class="ai-icon" aria-expanded="false">
                                    <i class="flaticon-381-settings-2"></i>
                                    <span>Compose Messages</span>
                                </a>
                            </li>
                            @endcan
                            @can('view-any', App\Models\User::class)
                            <li>
                                <a href="{{ route('users.index') }}" class="ai-icon" aria-expanded="false">
                                    <i class="flaticon-381-settings-2"></i>
                                    <span>Manage Users</span>
                                </a>
                            </li>
                            @endcan

                            @if (Auth::user()->can('view-any', Spatie\Permission\Models\Role::class) ||
                    Auth::user()->can('view-any', Spatie\Permission\Models\Permission::class))
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-077-menu-1"></i>
                    <span class="nav-text">Roles & Permission</span>
                </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('roles.index') }}">Roles</a></li>
                        <li><a href="{{ route('permissions.index') }}">Permissions</a></li>
                    </ul>
                </li>

                    @endif
                @endauth

        </ul>
    </div>
</div>
