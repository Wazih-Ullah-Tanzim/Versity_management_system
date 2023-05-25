 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar" style="background-color: #6ba8d4;">

     <ul class="sidebar-nav" id="sidebar-nav">


        @if (Session::has('userrole') && Session::get('userrole') == 'Admin')

         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#tables-nav1" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-caret-right-square-fill"></i><span>Users</span><i
                     class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="tables-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="{{ url('admin/users') }}">
                         <i class="bi bi-circle"></i><span>All Users</span>
                     </a>
                 </li>
             </ul>
         </li>




         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#tables-nav4" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-caret-right-square-fill"></i><span>Departments</span><i
                     class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="tables-nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="{{ url('admin/department/create') }}">
                         <i class="bi bi-circle"></i><span>Add Departments</span>
                     </a>
                 </li>
                 <li>
                    <a href="{{ url('admin/department') }}">
                        <i class="bi bi-circle"></i><span>Show Departments</span>
                    </a>
                </li>




             </ul>
         </li>
                {{-- session --}}
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav6" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-caret-right-square-fill"></i><span>Sessions</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav6" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('admin/session/create') }}">
                                <i class="bi bi-circle"></i><span>Add Sessions</span>
                            </a>
                        </li>
                        <li>
                           <a href="{{ url('admin/session') }}">
                               <i class="bi bi-circle"></i><span>Show Sessions</span>
                           </a>
                       </li>




                    </ul>
                </li>
         {{-- course --}}
         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#tables-nav5" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-caret-right-square-fill"></i><span>Courses</span><i
                     class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="tables-nav5" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="{{ url('admin/course/create') }}">
                         <i class="bi bi-circle"></i><span>Add Courses</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('admin/course') }}">
                         <i class="bi bi-circle"></i><span>Show Courses</span>
                     </a>
                 </li>


             </ul>
         </li>
{{--Assign Teacher--}}
         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav2" data-bs-toggle="collapse" href="#">
                <i class="bi bi-caret-right-square-fill"></i><span>Assign Teachers</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('admin/teacher/create') }}">
                        <i class="bi bi-circle"></i><span>Assign Teachers</span>
                    </a>
                </li>
            </ul>
            <ul id="tables-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('admin/teacher') }}">
                        <i class="bi bi-circle"></i><span>Show Teachers</span>
                    </a>
                </li>
            </ul>
        </li>

         {{-- section --}}
         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#tables-nav7" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-caret-right-square-fill"></i><span>Sections</span><i
                     class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="tables-nav7" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="{{ url('admin/section/create') }}">
                         <i class="bi bi-circle"></i><span>Add Sections</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('admin/section') }}">
                         <i class="bi bi-circle"></i><span>Show Sections</span>
                     </a>
                 </li>
             </ul>
         </li>

         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav8" data-bs-toggle="collapse" href="#">
                <i class="bi bi-caret-right-square-fill"></i><span>Progress</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav8" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('admin/exam') }}">
                        <i class="bi bi-circle"></i><span>All Progress</span>
                    </a>
                </li>
            </ul>
        </li>

        @endif


         @if (Session::has('userrole') && Session::get('userrole') == 'Teacher')

         <!-- End Tables Nav -->
         <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav10" data-bs-toggle="collapse" href="#">
                <i class="bi bi-caret-right-square-fill"></i><span>Exam Progress</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav10" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('admin/exam/create') }}">
                        <i class="bi bi-circle"></i><span>Add Exam</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/my_progress') }}">
                        <i class="bi bi-circle"></i><span>My Progress</span>
                    </a>
                </li>

            </ul>

        </li>


     @endif


         {{--student--}}
         @if (Session::has('userrole') && Session::get('userrole') == 'Student')
             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#tables-nav12" data-bs-toggle="collapse" href="#">
                     <i class="bi bi-caret-right-square-fill"></i><span>Courses</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="tables-nav12" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                     <li>
                         <a href="{{ url('admin/my-courses') }}">
                             <i class="bi bi-circle"></i><span>My Courses</span>
                         </a>
                     </li>
                 </ul>
             </li><!-- End Tables Nav -->

             <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav13" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-caret-right-square-fill"></i><span>See Marks</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav13" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('admin/my_marks') }}">
                            <i class="bi bi-circle"></i><span>My Marks</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->
         @endif


     </ul>

 </aside><!-- End Sidebar-->
