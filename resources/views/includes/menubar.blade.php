<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/images/male6.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p> {{ Auth::user()->name }} </p>
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

            <li class="header">MANAGE</li>
            <li><a href="{{route('employees.index')}}"><i class="fa fa-users"></i> Employees List</a></li>

            <li><a href="{{route('reddit')}}"><i class="fa fa-clock-o"></i> <span>Reddit</span></a></li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
