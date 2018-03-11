<div class="col-sm-2 sidebar-section">
    <div class="sidebar">
        <ul class="nav navbar-nav">
            <li><a href="{{url('students')}}"><i class="fa fa-user"></i>&nbsp; Students</a></li>
            <li><a href="{{url('courses')}}"><i class="fa fa-graduation-cap"></i>&nbsp; Courses</a></li>
            <li><a href="{{url('enrolements')}}"><i class="fa fa-cart-plus"></i>&nbsp; Course Enrolements</a></li>
            <li><a href="{{url('employees')}}"><i class="fa fa-users"></i>&nbsp; Employees</a></li>
            <li><a href="{{url('references')}}"><i class="fa fa-link"></i>&nbsp; References</a></li>
            <li><a href="{{url('customers')}}"><i class="fa fa-address-book"></i>&nbsp; Customers</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-tasks"></i>&nbsp; Tasks &nbsp;<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('tasks')}}"><i class="fa fa-angle-double-right"></i>&nbsp; Tasks</a></li>
                    <li><a href="{{url('mytasks')}}"><i class="fa fa-angle-double-right"></i>&nbsp; My Tasks</a></li>
                    <li><a href="{{url('completedtasks')}}"><i class="fa fa-angle-double-right"></i>&nbsp; Completed Tasks</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-credit-card"></i>&nbsp; Expenses <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('loans')}}"><i class="fa fa-angle-double-right"></i>&nbsp; Loans</a></li>
                    <li><a href="{{url('expenses')}}"><i class="fa fa-angle-double-right"></i>&nbsp; Expenses</a></li>
                    <li><a href="{{url('expensecategories')}}"><i class="fa fa-angle-double-right"></i>&nbsp; Expense Category</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-dollar"></i>&nbsp; Orders/Payment <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('orders')}}"><i class="fa fa-angle-double-right"></i>&nbsp; Orders/Payments</a></li>
                    <li><a href="{{url('ordercat')}}"><i class="fa fa-angle-double-right"></i>&nbsp; Order Category</a></li>
                </ul>
            </li>
            <li><a href="{{url('chat')}}"><i class="fa fa-comments"></i>&nbsp; Chatroom</a></li>
        </ul>
    </div>
</div>