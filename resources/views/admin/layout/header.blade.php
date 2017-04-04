<!-- Navigation -->
        <nav class=" navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <img width="30%" src="public/upload/images/company/klf-Logo.png" alt="Logo KLF" /> 
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            
            <!-- /.navbar-header -->
           
            <ul class="nav navbar-top-links navbar-right">
                   @if(Auth::check())                 
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                           <li><i class="fa fa-user fa-fw" style="color:green;"></i>&nbsp {{ Auth::user()->lastName }}
                        </li>
                        <li><a href="admin/user/edit/{{ Auth::user()->id }}"><i class="fa fa-gear fa-fw"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>

                @endif
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
           </nav>  
            @include('admin.layout.menu')
            <!-- /.navbar-static-side -->
           
   