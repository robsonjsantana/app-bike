<!DOCTYPE html>
<html lang="pt-br">

<head>

    @include('layouts.template.head')

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.template.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('layouts.template.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @include('layouts.template.pagecontent')
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts.template.footer')
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @include('layouts.template.topbutton')

    <!-- Logout Modal-->
    @include('layouts.template.logoutmodal')

    <!-- Bootstrap core JavaScript-->
    @include('layouts.template.script')

</body>

</html>

