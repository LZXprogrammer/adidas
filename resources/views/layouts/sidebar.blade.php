
    <!-- 用户信息 -->
    <div class="tpl-sidebar-user-panel">
        <div class="tpl-user-panel-slide-toggleable">
            <div class="tpl-user-panel-profile-picture">
                <img src="/Admin/img/user04.png" alt="">
            </div>
            <span class="user-panel-logged-in-text">
                <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>

            </span>
            <a href="javascript:;" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
        </div>
    </div>

    <!-- 菜单 -->
    <ul class="sidebar-nav">
        <!-- <li class="sidebar-nav-heading">Components <span class="sidebar-nav-heading-info"> 附加组件</span></li> -->
        <li class="sidebar-nav-link">
            <a href="index.html" class="">
                <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
            </a>
        </li>

        <li class="sidebar-nav-heading">Page<span class="sidebar-nav-heading-info"> 常用页面</span></li>

        <li class="sidebar-nav-link">
            <a href="javascript:;" class="sidebar-nav-sub-title">
                <i class="am-icon-users sidebar-nav-link-logo"></i> 管理员权限管理
                <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
            </a>
            <ul class="sidebar-nav sidebar-nav-sub">

                <li class="sidebar-nav-link">
                    <a href="{{ route('rbac.permission.index') }}">
                        <span class="am-icon-file-powerpoint-o sidebar-nav-link-logo"></span> 权限管理
                    </a>
                </li>

                <li class="sidebar-nav-link">
                    <a href="">
                        <span class="am-icon-group  sidebar-nav-link-logo"></span> 角色管理
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="">
                        <span class="am-icon-user sidebar-nav-link-logo"></span> 管理员管理
                    </a>
                </li>
            </ul>
        </li>
    </ul>
