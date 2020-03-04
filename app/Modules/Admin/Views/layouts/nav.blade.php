@if(!empty(Auth::guard()->user()) > 0)

<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li>
                <a href="{{URL::to(config('global.prefix_name').'/dashboard')}}">
                    <i class="material-icons">home</i>
                    <span>{{__('messages.Home')}}</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">settings_applications</i>
                    <span>{{__('messages.configuration')}}</span>
                </a>
                <ul class="ml-menu">
                    <li ><a href="{{ route('admin.settings.index') }}">{{__('messages.systemSetting')}}</a></li>
                    <li><a href="{{ route('admin.roles.index') }}">Role</a></li>
                    <li><a href="{{ route('admin.permission.index') }}">Permission</a></li>
                    <li><a href="{{ route('admin.roles.permission.index') }}">Role Permission</a></li>
                    <li><a href="{{ route('admin.user.index') }}">{{__('messages.user')}}</a></li>
                    <li><a href="{{ route('admin.roles.user.index') }}">Role User</a></li>
                </ul>
            </li>
        </ul>
    </div>

</aside>
@endif


