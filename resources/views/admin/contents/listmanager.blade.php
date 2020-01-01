<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            مدیریت
            <small>گروه کاربری</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
            <li class="active">گروه های کاربری</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row mt-2">
            <div class="col-lg-offset-2 col-md-8">
                <div class="card">

                    <div class="card-body">

                        <button class="btn btn-primary mb-3" id="submit_data" style="float: right;background-color:rgb(170, 145, 3);color: white;border-radius: 5px;
        border:rgb(170, 145, 3);margin-bottom:10px;">
                            ذخیره</button>
                        <table style="direction: rtl;text-align: right;border:2px solid #0d3349;"
                            class="table table-responsive-md table-sm table-bordered" id="makeEditable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="active">
                                    <td>1</td>
                                    <td>ادمین</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>کاربر اصلی</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td> ادمین رده 2</td>
                                    <td>8</td>
                                </tr>
                            </tbody>
                        </table>
                        <span style="float:left"><button id="but_add" class="btn btn-danger addNew">اضافه کردن
                                گروه</button></span>

                        <br> <br>
                        <ul class="hiddenValue">
                            <h4 style="direction:rtl; float: right;">دسترسی به پنل ادمین:</h4>

                            <li class="radioInput">

                                <label>
                                    خیر
                                    <input type="radio" class="option-input radio" name="permission" />

                                </label>

                                <label>
                                    بله
                                    <input type="radio" class="option-input radio" name="permission" checked />
                                </label>

                            </li>

                            <h4 style="direction:rtl; float: right;">میتواند کاربری را ویرایش کند :</h4>

                            <li class="radioInput">

                                <label>
                                    خیر
                                    <input type="radio" class="option-input radio" name="example" />

                                </label>

                                <label>
                                    بله
                                    <input type="radio" class="option-input radio" name="example" checked />
                                </label>

                            </li>

                            <h4 style="direction:rtl; float: right;">میتواند گروه های کاربری را ویرایش کند:</h4>

                            <li class="radioInput">

                                <label>
                                    خیر
                                    <input type="radio" class="option-input radio" name="user" />

                                </label>

                                <label>
                                    بله
                                    <input type="radio" class="option-input radio" name="user" checked />
                                </label>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
