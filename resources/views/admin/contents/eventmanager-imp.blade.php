<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            مدیریت رویدادها
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> مدیریت منو ها</a></li>
            <li class="active">مدیریت رویدادها</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row row-table mt-2">
            <div class="col-lg-offset-2 col-md-8">
                <div class="card">

                    <div class="card-body">



                        <button class="btn btn-primary mb-3 " id="topEvents"><a href="eventManeger.html">رویدادهای تاپ
                                <i class="fas fa-sort-amount-up"></i></a>
                        </button>

                        <button class="btn btn-primary mb-3 mr-2" id="importantEvents"><a href="eventmaneger-imp.html">
                                رویدادهای مهم
                                <i class="fas fa-star"></i></a></button>
                        <table style="border:2px solid #0d3349;"
                            class="table table-responsive-md table-sm table-bordered" id="makeEditable">
                            <thead>
                                <tr style="background-color: #3c8dbc">
                                    <th>بازی</th>
                                    <th>نوع</th>
                                    <th>زمان</th>
                                    <th>ویرایش تصاویر</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="active">
                                    <td>بارسلونا - رئال مادرید</td>
                                    <td>تاپ</td>
                                    <td>2012/12/12 , 12:12</td>
                                    <td id="editPicture"><i class="fas fa-cog"></i></td>
                                </tr>
                            </tbody>
                        </table>

                        <ul class="hiddenValue">
                            <h4 style="direction: rtl">تصویر صفحه خانه</h4>
                            <li class="radioInput">
                                <label for="exampleFormControlFile1">تغییر تصویر</label>
                                <input type="file" accept="image/*" class="form-control-file file-upload2"
                                    id="exampleFormControlFile1" style="display:inline-block">
                                <img class="profile-pic2 d-inline-block"
                                    src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg">

                            </li>
                            <hr>
                            <h4 style="direction: rtl">تصویر صفحه ورزشی</h4>
                            <li class="radioInput">
                                <label for="exampleFormControlFile2">تغییر تصویر</label>
                                <input type="file" accept="image/*" class="form-control-file file-upload"
                                    id="exampleFormControlFile2" style="display:inline-block">
                                <img class="profile-pic"
                                    src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg">
                            </li>

                        </ul>

                        <button class="btn btn-primary mb-3" id="submit_data"
                            style="background-color:rgb(170, 145, 3);color: white;border-radius: 5px;border:rgb(170, 145, 3);margin-bottom:10px;">
                            ذخیره</button>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
