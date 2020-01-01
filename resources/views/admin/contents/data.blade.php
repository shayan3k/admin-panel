<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ویرایش عبارت ها
            <small>عبارات در دسترس </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> زبان</a></li>
            <li><a href="#">ویرایش عبارت ها</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">جدول </h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="selecte" style="color:black;background-color: tomato;border-radius: 5px;">
                            <option value="Ltr" selected>usre1</option>
                            <option value="Rtl">user2</option>
                            <option value="center">usesr3</option>
                        </select>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <div id="wrapper">
                                <table align='center' cellspacing=2 cellpadding=5 id="data_table"
                                    class="table table-bordered table-hover" border=2>
                                    <tr>
                                        <th>عبارت ها</th>
                                        <th>فارسی</th>
                                        <th>english</th>
                                        <th>کوردی</th>
                                        <th>turky</th>
                                        <th>ویرایش</th>


                                    </tr>

                                    <tr id="row1">
                                        <td id="">login</td>

                                        <td id="name_row1">ورود</td>
                                        <td id="country_row1">login</td>
                                        <td id="age_row1">login</td>
                                        <td id="turky_row1">login</td>

                                        <td>
                                            <input type="button" id="edit_button1" value="Edit" class="edit"
                                                onclick="edit_row('1')">
                                            <input type="button" id="save_button1" value="Save" class="save"
                                                onclick="save_row('1')">
                                            <input type="button" value="Delete" class="delete"
                                                onclick="delete_row('1')">
                                        </td>
                                    </tr>

                                    <tr id="row2">
                                        <td id="">register</td>
                                        <td id="name_row2">ثبت نام</td>
                                        <td id="country_row2">register</td>
                                        <td id="age_row2">register</td>
                                        <td id="turky_row2">Kaydol</td>




                                        <td>
                                            <input type="button" id="edit_button2" value="Edit" class="edit"
                                                onclick="edit_row('2')">
                                            <input type="button" id="save_button2" value="Save" class="save"
                                                onclick="save_row('2')">
                                            <input type="button" value="Delete" class="delete"
                                                onclick="delete_row('2')">
                                        </td>
                                    </tr>

                                    <tr id="row3">
                                        <td>first name</td>
                                        <td id="name_row3">نام </td>
                                        <td id="country_row3">first name</td>
                                        <td id="age_row3">first name</td>
                                        <td id="turky_row3">İlk isim </td>


                                        <td>
                                            <input type="button" id="edit_button3" value="Edit" class="edit"
                                                onclick="edit_row('3')">
                                            <input type="button" id="save_button3" value="Save" class="save"
                                                onclick="save_row('3')">
                                            <input type="button" value="Delete" class="delete"
                                                onclick="delete_row('3')">
                                        </td>
                                    </tr>
                                    <tr id="row4">
                                        <td id="">last name</td>
                                        <td id="name_row4">نام خانوادگی </td>
                                        <td id="country_row4">last name</td>
                                        <td id="age_row4">last name</td>
                                        <td id="turky_row4">soyadı </td>


                                        <td>
                                            <input type="button" id="edit_button4" value="Edit" class="edit"
                                                onclick="edit_row('4')">
                                            <input type="button" id="save_button4" value="Save" class="save"
                                                onclick="save_row('4')">
                                            <input type="button" value="Delete" class="delete"
                                                onclick="delete_row('4')">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><input type="text" id="new_name"></td>
                                        <td><input type="text" id="new_country"></td>
                                        <td><input type="text" id="new_age"></td>
                                        <td><input type="text" id="new_turky"></td>
                                        <td><input type="text" id=""></td>


                                        <td><input type="button" class="add" onclick="add_row();" value="Add Row"></td>
                                    </tr>

                                </table>
                            </div>

                    </div>
                    <!-- /.box -->

                    <div class="box">
                        <div class="box-header">
                            <!-- <h3 class="box-title"></h3> -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>

                                    </tbody>
                                <tfoot>
                                    <br>
                                    <button
                                        style="background-color:rgb(170, 145, 3);color: white;border-radius: 5px;">ذخیره
                                        همه</button>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
