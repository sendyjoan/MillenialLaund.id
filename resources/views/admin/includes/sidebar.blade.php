<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
        <ul id="sidebarnav">
          <!-- User Profile-->
          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
            href="/home" aria-expanded="false"><i class="me-3 far fa-clock fa-fw"
            aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
          </li>
  
          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
            href="/cabang" aria-expanded="false"><i class="me-3 fa fa-globe"
            aria-hidden="true"></i><span class="hide-menu">Cabang</span></a>
          </li>
  
          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
            href="/user" aria-expanded="false"><i class="me-3 fa fa-table"
            aria-hidden="true"></i><span class="hide-menu">User</span></a>
          </li>
  
          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
            href="/product" aria-expanded="false"><i class="me-3 fa fa-font"
            aria-hidden="true"></i><span class="hide-menu">Product</span></a>
          </li>
  
          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
            href="/transaksi" aria-expanded="false"><i class="me-3 fa fa-user" aria-hidden="true"></i><span
              class="hide-menu">Transaksi</span></a>
          </li>
  
          
          
          
        
          {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
            href="/admin/product" aria-expanded="false"><i class="me-3 fa fa-table"
            aria-hidden="false"></i><span class="hide-menu">Table Produk</span></a></li> --}}
  
         

  
          {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
            href="404.html" aria-expanded="false"><i class="me-3 fa fa-info-circle"
            aria-hidden="true"></i><span class="hide-menu">Error 404</span></a></li> --}}
  
          <li class="text-center p-20 upgrade-btn">
            <form action="/logout" method="Post">
              @csrf
              <button class="btn btn-danger text-white mt-4" type="submit">Log Out</button>
            </form> 
          </li>
        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>