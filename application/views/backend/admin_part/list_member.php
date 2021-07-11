<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-info">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="card-title">সদস্য তালিকা</h3>
                        <h3 class="card-title pull-right"><a type="button" data-target="#addBorder" class="editbutton btn btn-sm btn-dark" data-toggle="modal">নতুন সদস্য যুক্ত করুন</a></h3>
                    </div>
                </div>
            </div>
            <section class="content" style="margin-top:20px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ছবি</th>
                                        <th>নাম</th>
                                        <th>গার্ডিয়ান</th>
                                        <th>পেশা</th>
                                        <th>শিক্ষা</th>
                                        <th>ঠিকানা</th>
                                        <th>মোবাইল</th>
                                        <th>পাসওয়ার্ড</th>
                                        <th>রুম নং</th>
                                        <th>সামাজিক মাধ্যম</th>
                                        <th> অপশন</th>
                                    </tr>
                                </thead>
                                <tbody id="show_data">

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>
<div class="modal fade" id="addBorder">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h6 class="modal-title">নতুন সদস্য সংযুক্তকরন</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <!-- <form role="form" id="patientEditForm" action="<?= base_url('storeMember') ?>" method="POST" enctype="multipart/form-data"> -->
                <form>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="name">নাম</label>:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="নাম লিখুন">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="gurdian_name">গার্ডিয়ান</label>
                                <input type="text" class="form-control" id="gurdian_name" name="gurdian_name" placeholder="পিতা বা মাতার নাম লিখুন">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="occupation">পেশা</label>
                                <input type="text" class="form-control" id="occupation" name="occupation" placeholder="কি করেন তা লিখুন">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="education">শিক্ষা</label>
                                <input type="text" class="form-control" id="education" name="education" placeholder="পড়াশুনার সর্বষেশ অবস্থা">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="address">ঠিকানা</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="বাড়ির ঠিকানা লিখুন">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="mobile">মোবাইল</label>
                                <input type="number" class="form-control" id="mobile" name="mobile" placeholder="মোবাইল নম্বর দিন">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-2">
                                <label for="password"> পাসওয়ার্ড</label>
                                <input type="number" class="form-control" id="password" name="password" placeholder="পরবর্তীতে লগিনের জন্য পাসওয়ার্ড দিন">
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="room_no"> রুম নম্বর</label>
                                <input type="number" class="form-control" id="room_no" name="room_no" placeholder="রুম নম্বর লিখুন">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="social_media">সামাজিক যোগাযোগ মাধ্যম</label>
                                <input type="text" class="form-control" id="social_media" name="social_media" placeholder="সামাজিক যোগাযোগের লিঙ্ক দিন">
                            </div>
                            <!-- <div class="form-group col-sm-4">
                                <label for="image">ফটো</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div> -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">বাদ দিন</button>
                        <button type="button" id="btn_save" class="btn btn-info">যুক্ত করুন</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editMember">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h6 class="modal-title">সদস্য আপডেট করুন</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
               
                <form>
                    <div class="box-body">

                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="name">নাম</label>:</label>
                                <input type="text" class="form-control" id="edit_name" name="edit_name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="gurdian_name">গার্ডিয়ান</label>
                                <input type="text" class="form-control" id="edit_gurdian_name" name="edit_gurdian_name">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="occupation">পেশা</label>
                                <input type="text" class="form-control" id="edit_occupation" name="edit_occupation">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="education">শিক্ষা</label>
                                <input type="text" class="form-control" id="edit_education" name="edit_education">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="address">ঠিকানা</label>
                                <input type="text" class="form-control" id="edit_address" name="edit_address">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="mobile">মোবাইল</label>
                                <input type="number" class="form-control" id="edit_mobile" name="edit_mobile">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-2">
                                <label for="password"> পাসওয়ার্ড</label>
                                <input type="number" class="form-control" id="edit_password" name="edit_password">
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="room_no"> রুম নম্বর</label>
                                <input type="number" class="form-control" id="edit_room_no" name="edit_room_no">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="social_media">সামাজিক যোগাযোগ মাধ্যম</label>
                                <input type="text" class="form-control" id="edit_social_media" name="edit_social_media">
                            </div>
                            <!-- <div class="form-group col-sm-4">
                                <label for="image">ফটো</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div> -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="edit_id" id="edit_id">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">বাদ দিন</button>
                        <button type="button" type="submit" id="btn_update" class="btn btn-info">আপডেট করুন</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /.modal-dialog -->
</div>
<!--MODAL DELETE-->
<form>
    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <strong>Are you sure to delete this record?</strong>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="id" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- /.card-body -->
<script src="<?php echo base_url('') ?>assets/backend/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        show_member(); //call function show all product

        //function show all product
        function show_member() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('product_data') ?>',
                async: false,
                dataType: 'JSON',
                success: function(data) {
					
					 alert("hello");
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + data[i].m_id + '</td>' +
                            '<td>' + data[i].m_name + '</td>' +
                            '<td>' + data[i].m_gurdian_name + '</td>' +
                            '<td>' + data[i].m_occupation + '</td>' +
                            '<td>' + data[i].m_education + '</td>' +
                            '<td>' + data[i].m_address + '</td>' +
                            '<td>' + data[i].m_mobile + '</td>' +
                            '<td>' + data[i].m_password + '</td>' +
                            '<td>' + data[i].m_room_no + '</td>' +
                            '<td>' + data[i].m_social_media + '</td>' +
                            '<td style="text-align:right;">' +
                            '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-edit_id="' + data[i].m_id + '" data-name="' + data[i].m_name + '" data-gurdian_name ="' + data[i].m_gurdian_name + '" data-occupation="' + data[i].m_occupation + '" data-education="' + data[i].m_education + '"  data-address="' + data[i].m_address + '" data-mobile="' + data[i].m_mobile + '"  data-password="' + data[i].m_password + '" data-room_no="' + data[i].m_room_no + '" data-social_media="' + data[i].m_social_media + '">Edit</a>' + ' ' +
                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="' + data[i].m_id + '">Delete</a>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //Save product
        $('#btn_save').on('click', function() {
            var name = $('#name').val();
            var gurdian_name = $('#gurdian_name').val();
            var occupation = $('#occupation').val();
            var education = $('#education').val();
            var address = $('#address').val();
            var mobile = $('#mobile').val();
            var password = $('#password').val();
            var room_no = $('#room_no').val();
            var social_media = $('#social_media').val();

            //alert(name + gurdian_name + occupation + education + address +mobile+password+room_no+social_media);
            $.ajax({
                type: "POST",
                url: "storeMember",
                dataType: "JSON",
                data: {
                    name: name,
                    gurdian_name: gurdian_name,
                    occupation: occupation,
                    education: education,
                    address: address,
                    mobile: mobile,
                    password: password,
                    room_no: room_no,
                    social_media: social_media
                },
                success: function(data) {
                    $('[name="name"]').val("");
                    $('[name="gurdian_name"]').val("");
                    $('[name="occupation"]').val("");
                    $('[name="education"]').val("");
                    $('[name="address"]').val("");
                    $('[name="mobile"]').val("");
                    $('[name="password"]').val("");
                    $('[name="room_no"]').val("");
                    $('[name="social_media"]').val("");
                    $('#addBorder').modal('hide');
                    show_member();
                },
                error: function(data) {
                    alert("error");
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click', '.item_edit', function() {
            var edit_id = $(this).data('edit_id');
            var name = $(this).data('name');
            var gurdian_name = $(this).data('gurdian_name');
            var occupation = $(this).data('occupation');
            var education = $(this).data('education');
            var address = $(this).data('address');
            var mobile = $(this).data('mobile');
            var password = $(this).data('password');
            var room_no = $(this).data('room_no');
            var social_media = $(this).data('social_media');

            $('#editMember').modal('show');

            $('[name="edit_id"]').val(edit_id);
            $('[name="edit_name"]').val(name);
            $('[name="edit_gurdian_name"]').val(gurdian_name);
            $('[name="edit_occupation"]').val(occupation);
            $('[name="edit_education"]').val(education);
            $('[name="edit_address"]').val(address);
            $('[name="edit_mobile"]').val(mobile);
            $('[name="edit_password"]').val(password);
            $('[name="edit_room_no"]').val(room_no);
            $('[name="edit_social_media"]').val(social_media);
        });

        // update record to database
        $('#btn_update').on('click', function() {
            var edit_id = $('#edit_id').val();
            var name = $('#edit_name').val();
            var gurdian_name = $('#edit_gurdian_name').val();
            var occupation = $('#edit_occupation').val();
            var education = $('#edit_education').val();
            var address = $('#edit_address').val();
            var mobile = $('#edit_mobile').val();
            var password = $('#edit_password').val();
            var room_no = $('#edit_room_no').val();
            var social_media = $('#edit_social_media').val();
            //alert(name + gurdian_name + occupation + education + address + mobile + password + room_no + social_media);
            $.ajax({
                type: "POST",
                url: "updateMember",
                dataType: "JSON",
                data: {
                    edit_id: edit_id,
                    edit_name: name,
                    gurdian_name: gurdian_name,
                    occupation: occupation,
                    education: education,
                    address: address,
                    mobile: mobile,
                    password: password,
                    room_no: room_no,
                    social_media: social_media
                },
                success: function(data) {
                    $('[name="edit_id"]').val("");
                    $('[name="name"]').val("");
                    $('[name="gurdian_name"]').val("");
                    $('[name="occupation"]').val("");
                    $('[name="education"]').val("");
                    $('[name="address"]').val("");
                    $('[name="mobile"]').val("");
                    $('[name="password"]').val("");
                    $('[name="room_no"]').val("");
                    $('[name="social_media"]').val("");
                    $('#editMember').modal('hide');
                    show_member();
                },
                error: function(data) {
                    alert("error");
                }
            });
            return false;
        });

        //  get data for delete record
        $('#show_data').on('click', '.item_delete', function() {
            var id = $(this).data('id');

            $('#Modal_Delete').modal('show');
            $('[name="id"]').val(id);
        });

        //  delete record to database
        $('#btn_delete').on('click', function() {
            var id = $('#id').val();
            $.ajax({
                type: "POST",
                url: "deleteMember",
                dataType: "JSON",
                data: {
                    id: id
                },
                success: function(data) {
                    $('[name="id"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_member();
                }
            });
            return false;
        });

    });
</script>