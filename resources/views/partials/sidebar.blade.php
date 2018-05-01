<div class="col-sm-2 sidebar-section">
    <div class="sidebar">
        <ul class="nav navbar-nav">
             
            <li><a href="{{url('students')}}" class="{{(Request::is('students')) ? 
                         'active' : ''}}"><i class="fa fa-user"></i>&nbsp; Students</a></li>
            <li><a href="{{url('courses')}}" class="{{(Request::is('courses')) ? 
                         'active' : ''}}"><i class="fa fa-graduation-cap"></i>&nbsp; Courses</a></li>
            <li><a href="{{url('enrolements')}}" class="{{(Request::is('enrolements')) ? 
                         'active' : ''}}"><i class="fa fa-cart-plus"></i>&nbsp; Course Enrolements</a></li>
            <li><a href="{{url('employees')}}"  class="{{(Request::is('employees')) ? 
                         'active' : ''}}"><i class="fa fa-users"></i>&nbsp; Employees</a></li>
            <li><a href="{{url('references')}}" class="{{(Request::is('references')) ? 
                         'active' : ''}}"><i class="fa fa-link"></i>&nbsp; References</a></li>
            <li><a href="{{url('customers')}}"  class="{{(Request::is('customers')) ? 
                         'active' : ''}}"><i class="fa fa-address-book"></i>&nbsp; Customers</a></li>
            <li><a href="{{url('invoices')}}"  class="{{(Request::is('invoices')) ? 
                         'active' : ''}}"><i class="fa fa-address-book"></i>&nbsp; Invoices</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-tasks"></i>&nbsp; Tasks &nbsp;<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('tasks')}}"  class="{{(Request::is('tasks')) ? 
                         'active' : ''}}"><i class="fa fa-angle-double-right"></i>&nbsp; Tasks</a></li>
                    <li><a href="{{url('/task/mytasks')}}"  class="{{(Request::is('task/mytasks')) ? 
                         'active' : ''}}"><i class="fa fa-angle-double-right"></i>&nbsp; My Tasks</a></li>
                    <li><a href="{{url('/task/completedtasks')}}"  class="{{(Request::is('task/completedtasks')) ? 
                         'active' : ''}}"><i class="fa fa-angle-double-right"></i>&nbsp; Completed Tasks</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-credit-card"></i>&nbsp; Expenses <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('loans')}}"  class="{{(Request::is('loans')) ? 
                         'active' : ''}}"><i class="fa fa-angle-double-right"></i>&nbsp; Loans</a></li>
                    <li><a href="{{url('expenses')}}"  class="{{(Request::is('expenses')) ? 
                         'active' : ''}}"><i class="fa fa-angle-double-right"></i>&nbsp; Expenses</a></li>
                    <li><a href="{{url('expensecategories')}}" class="{{(Request::is('expensecategories')) ? 
                         'active' : ''}}"><i class="fa fa-angle-double-right"></i>&nbsp; Expense Category</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-dollar"></i>&nbsp; Orders/Payment <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('orders')}}" class="{{(Request::is('orders')) ? 
                         'active' : ''}}><i class="fa fa-angle-double-right"></i>&nbsp; Orders/Payments</a></li>
                    <li><a href="{{url('ordercat')}}" class="{{(Request::is('ordercat')) ? 
                         'active' : ''}}><i class="fa fa-angle-double-right"></i>&nbsp; Order Category</a></li>
                </ul>
            </li>
            <li><a href="{{url('chat')}}"  class="{{(Request::is('chat')) ? 
                         'active' : ''}}"><i class="fa fa-comments"></i>&nbsp; Chatroom</a></li>
        </ul>
    </div>
</div>