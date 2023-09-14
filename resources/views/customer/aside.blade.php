<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-heading">
            Main
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{url('index')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">
            Features
        </li>
        

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#supplier-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Supplier</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="supplier-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('supplier/add_supplier')}}">
                        <i class="bi bi-circle"></i><span>Add New supplier</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('supplier/manage_supplier')}}">
                        <i class="bi bi-circle"></i><span>Manage supplier</span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('pos/manage')}}">
              <i class="bi bi-file-earmark"></i>
              <span>POS Details</span>
            </a>
          </li>
        
{{-- 
        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-blank.html">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav --> --}} 

    </ul>

</aside><!-- End Sidebar-->