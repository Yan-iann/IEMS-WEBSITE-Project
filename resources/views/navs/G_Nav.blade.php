<div class="sidebar close">
    <div class="logo-details">
      <i class='bx bx-menu'></i>
      <span class="logo_name">Linus</span>
    </div>
      <ul class="nav-links">

        <!--Wildlife-->
        <li>
          <a href="{{ route('guestDashboard') }}">
            <i class='bx bx-grid-alt' ></i>
            <span class="link_name">Critters</span>
          </a>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('guestDashboard') }}">Critters</a>
              </li>
            </ul>
        </li> <!--end of wildlife Bar-->

            <!--Museum-->
        <li>
            <div class="iocn-link">
              <a href="{{ route('G_boneCollection') }}">
                <i class='bx bx-collection' ></i>
                <span class="link_name">Museum</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('G_boneCollection') }}">Museum</a></li>
              <li><a href="{{ route('G_boneCollection') }}">Bones</a></li>
              <li><a href="{{ route('G_refCollection') }}">References</a></li>
            </ul>
      </li>
      <!--end of Museum Bar-->

        <!--Thesis-->
        <li>
            <div class="iocn-link">
              <a href="{{ route('Guest_thesis') }}">
                <i class='bx bx-collection' ></i>
                <span class="link_name">Thesis Papers</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('Guest_thesis') }}">Thesis Papers</a></li>
              <li><a href="{{ route('G_gradThesis') }}">PostGraduate</a></li>
              <li><a href="{{ route('G_undergradThesis') }}">UnderGraduate</a></li>
            </ul>
      </li>
      <!--end of Thesis Paper-->

         <!--Journal-->
        <li>
          <a href="{{ route('Guest_journal') }}">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Journal Articles</span>
          </a>
            <ul class="sub-menu">
              <li><a class="link_name" href="{{ route('Guest_journal') }}"> Journal Articles</a></li>
            </ul>
        </li><!--end of Journal Article-->
  
      </ul><!--end of Nav Links-->    
</div><!--end of Sidebar-->