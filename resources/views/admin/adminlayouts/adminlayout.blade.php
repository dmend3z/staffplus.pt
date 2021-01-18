<!DOCTYPE html>


<html lang="en" class="no-js">

@include('admin.include.head')
<body class="page-header-fixed page-quick-sidebar-over-content page-style-square @if(\Cookie::get("sidebar_closed") == "1") page-sidebar-closed @endif">
@if(isset($company) && is_null($company->subscription_plan_id) && $loggedAdmin->type !=='superadmin')
    @include('admin.include.plan-null-header')
@else
    @include('admin.include.header')
@endif

<div class="clearfix"></div>

<!-- COMEÇA CONTAINER -->
<div class="page-container">

    <!-- COMEÇA CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">

            @yield('mainarea')

        </div>
<div class="table-toolbar">
                        <div class="row ">


                            <div class="col-md-4 offset-md-4">

                                <a class="btn green" href="https://staffplus.pt/public/super-admin/companies/create">
                                    Add New Company
                                    <i class="fa fa-plus"></i> </a>
                            </div>












                        </div>
                    </div>
    </div>
    <!-- END CONTENT -->

</div>
<!-- END CONTAINER -->

@include('admin.include.footer')

@include('admin.include.footerjs')
@include('admin.common.error')

</body>
<!-- END BODY -->
</html>
