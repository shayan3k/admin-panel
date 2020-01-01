<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            مدیریت کاربری
            <small>جدید</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> مدیریت کاربری</a></li>
            <!-- <li><a href="#">UI</a></li> -->
            <li class="active"> گروه های کاربری</li>
        </ol>
    </section>

    <!-- Main content -->
    <div class="container-fluid" dir="rtl" style="width: 85%;margin-top: 3em;">
        <div class="row">
            <h3>مرور کاربران</h3>
        </div>
        <div class="row" style="padding-top: 2em;padding-bottom: 2em;">
            <form action="">
                <input type="search" placeholder="جست و جو ..."
                    style="border: none;height: 35px;width: 30%;font-size: large;">
                <button class="btn btn-flat" type="submit" style="display: block;float: right;height: 35px;">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <div class="row ">
            <table id="userReview" width="100%" class="table  table-bordered table-hover text-center"
                style="border:2px solid #888 !important;">
                <tr>
                    <th> </th>
                    <th>ID</th>
                    <th>نام و نام خانوادگی</th>
                    <th>نام کاربری</th>
                    <th>ایمیل</th>
                    <th>گروه کاربری</th>
                    <th>تایید</th>
                    <th>بردها</th>
                    <th>باخت ها</th>
                    <th>موجودی</th>
                    <th> </th>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>#100</td>
                    <td>علی محمودی</td>
                    <td>ali233</td>
                    <td>alimahmodi@yahoo.com</td>
                    <td>کاربر</td>
                    <td>منتظر تایید</td>
                    <td>10.000.00 USD</td>
                    <td>5.000.00 USD</td>
                    <td>6.000.00 USD</td>
                    <td>
                        <button class="btn btn-sm btn-default" title="ویرایش"><i class="fa fa-cog"></i></button>
                    </td>
                </tr>
                <tr style="display: none" class="edit">
                    <td colspan="11">
                        <button class="btn btn-sm btn-default">ویرایش کاربر</button>
                        <button class="btn btn-sm btn-default">اطلاعات کاربر</button>
                        <button class="btn btn-sm btn-default">تایید کاربر</button>
                        <button class="btn btn-sm btn-default">مسدود سازی کاربر</button>
                        <button class="btn btn-sm btn-default">حذف کاربر</button>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>
                        <button class="btn btn-sm btn-default" title="ویرایش"><i class="fa fa-cog"></i></button>
                    </td>
                </tr>
                <tr style="display: none" class="edit">
                    <td colspan="11">
                        <button class="btn btn-sm btn-default">ویرایش کاربر</button>
                        <button class="btn btn-sm btn-default">اطلاعات کاربر</button>
                        <button class="btn btn-sm btn-default">تایید کاربر</button>
                        <button class="btn btn-sm btn-default">مسدود سازی کاربر</button>
                        <button class="btn btn-sm btn-default">حذف کاربر</button>
                    </td>
                </tr>
            </table>
        </div>
        <div class="row">
            <button class="btn btn-success">تایید همه</button>
            <button class="btn btn-warning">مسدود سازی همه</button>
        </div>
    </div>

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
