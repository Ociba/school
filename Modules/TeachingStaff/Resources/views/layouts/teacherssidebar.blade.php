<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="{{ asset('admin/dist/images/ociba.jpg')}}" alt="user-img" class="img-circle"><span class="hide-menu text-primary"><span style="color:blue;">{{auth()->user()->UserCategory()}}</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                                <li><a href="/logout"><i class="ti-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/teachingstaff/dashboard"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/teachingstaff/all-classes"><i class="ti-list"></i><span class="hide-menu">Classes</span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Registration</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/teachingstaff/students-registration">Students</a></li>
                                <li><a href="/teachingstaff/get-teaching-staffs">Teaching Staff</a></li>
                                <li><a href="/teachingstaff/non-teaching-staffs">Non Teaching Staff</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Examinations</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-email.html">Ordinary</a></li>
                                <li><a href="app-email-detail.html">Advanced</a></li>
                                <li><a href="app-compose.html">Technical</a></li>
                                <li><a href="app-compose.html">University</a></li>
                            </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Results </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="ui-cards.html">Certificate</a></li>
                        <li><a href="ui-user-card.html">Diploma</a></li>
                        <li><a href="ui-buttons.html">Degree</a></li>
                        <li><a href="ui-modals.html">Master</a></li>
                        <li><a href="ui-tab.html">Phd</a></li>
                    </ul>
                </li>
                <li> <a class="waves-effect waves-dark" href="university-events.html"><i class="ti-location-pin"></i><span class="hide-menu">Countries</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="university-events.html"><i class="ti-pencil-alt"></i><span class="hide-menu">Institutions</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="university-events.html"><i class="ti-book"></i><span class="hide-menu">Courses</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false"><i class="ti-help text-info"></i><span class="hide-menu">FAQs</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>