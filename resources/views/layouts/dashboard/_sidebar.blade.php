<!-- BEGIN SIDEBAR -->
<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200"
        class="page-sidebar-menu page-header-fixed">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <li class="sidebar-toggler-wrapper hide">
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler"></div>
            <!-- END SIDEBAR TOGGLER BUTTON -->
        </li>

        <li {{(Request::is('dashboard/users') || Request::is('dashboard/users/*/edit') || Request::is('dashboard/users/create')) ? 'class=active' : ''}}>
            <a href="{{ route('users.index') }}">Users</a>
        </li>

        <li class="nav-item {{(Request::is('dashboard/settings') || Request::is('dashboard/settings/*/edit') || Request::is('dashboard/settings/create')) ? 'active' : ''}}">
            <a href="javascript:;" class="nav-link nav-toggle">Pages</a>
            <ul class="sub-menu">
                @foreach(config('namespace') as $namespace => $name)
                    <li {{Request::get('namespace') && Request::get('namespace') == $namespace ? 'class=active' : ''}}>
                        <a href="{{ route('settings.index').'?namespace='.$namespace }}">{{ $name }}</a>
                    </li>
                @endforeach
            </ul>
        </li>

        <li {{(Request::is('dashboard/stores') || Request::is('dashboard/stores/*/edit')) ? 'class=active' : ''}}>
            <a href="{{ route('stores.index') }}">Stores</a>
        </li>

        <li {{(Request::is('dashboard/events') || Request::is('dashboard/events/*/edit')) ? 'class=active' : ''}}>
            <a href="{{ route('events.index') }}">Events</a>
        </li>

        <li {{(Request::is('dashboard/galleries') || Request::is('dashboard/galleries/*/edit')) ? 'class=active' : ''}}>
            <a href="{{ route('galleries.index') }}">Galleries</a>
        </li>

        <li {{(Request::is('dashboard/points') || Request::is('dashboard/points/*/edit')) ? 'class=active' : ''}}>
            <a href="{{ route('points.index') }}">Points</a>
        </li>
        
        <li {{(Request::is('dashboard/contacts') || Request::is('dashboard/contacts/*/edit')) ? 'class=active' : ''}}>
            <a href="{{ route('contacts.index') }}">Contacts</a>
        </li>


        <li {{(Request::is('dashboard/messages') || Request::is('dashboard/messages/*')) ? 'class=active' : ''}}>
            <a href="{{ route('messages.index') }}">Messages</a>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
