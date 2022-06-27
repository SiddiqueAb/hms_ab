<div class="content-wrapper">
    <div class="content mt-3">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 ">
                <div class="col-md-4 col-xl-3 chat">
                    <div class="card mb-sm-3 mb-md-0 contacts_card">
                        <div class="card-header">
                            <div class="input-group">
                                <input type="text" placeholder="Search..." name="" class="form-control search">
                                <div class="input-group-prepend">
                                    <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body contacts_body">
                            <ui class="contacts">
                                <?php if ($all_friend) {
                                    foreach ($all_friend->result() as $row) { ?>
                                        <li class="user_wise_masg" data-user_id=<?= $row->id ?>>
                                            <a href="#">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="assets/uploads/image/logo/logo.png" class="rounded-circle user_img">

                                                        <span class="online_icon <?php if ($row->a_active_status == 2) {
                                                                                        echo "offline";
                                                                                    } ?>"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span><?= $row->a_name; ?></span>
                                                        <p><?= $row->a_name; ?> <?php if ($row->a_active_status == 1) {
                                                                                    echo "is online";
                                                                                } else {
                                                                                    echo "left " . get_current_time() . " minute ago";
                                                                                } ?></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                <?php  }
                                } ?>


                            </ui>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-md-8 col-xl-6 chat mt-3">
                    <div class="card" id="user_wise_value_append">
                        <img src="assets/uploads/image/agun.gif" style="height: 100%;" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>











<script src="<?php echo base_url('') ?>assets/backend/plugins/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        // $("#massage_card_body").animate({
        //     scrollTop: "3000px"
        // });
        show_message();

        function show_message() {
            $.ajax({
                url: "<?= base_url('show_massege') ?>",
                type: "POST",
                data: {
                    text: 1,
                    sender_id: 1
                },
                success: function(response) {
                    show_message();
                    $("#massage_card_body").html(response);

                    // alert(response);
                }

            })

        }






        $(".user_wise_masg").click(function() {
            var user_id = $(this).attr("data-user_id")
            $(".user_wise_masg").removeClass("active");
            $(this).addClass("active");

            $.ajax({
                url: "<?= base_url('id_wise_data_show') ?>",
                type: "POST",
                data: {
                    user_id: user_id,
                    sender_id: 1
                },
                success: function(user_detail_massege) {
                    show_message();
                    $("#user_wise_value_append").html(user_detail_massege);
                    $("#massage_card_body").animate({
                        scrollTop: "30000px"
                    });
                    $('#action_menu_btn').click(function() {
                        $('.action_menu').toggle();
                        // $(window).click(function() {
                        //     // alert("hi")
                        //     $('.action_menu').slideUp("slow");
                        // });
                    });

                    $('#send_btn').click(function() {
                        var massge = $("#messege_input").val();
                        if (massge == "") {

                        } else {
                            $.ajax({
                                url: "<?= base_url('send_massege') ?>",
                                type: "POST",
                                data: {
                                    text: massge,
                                    sender_id: 1
                                },
                                success: function(data) {
                                    show_message();
                                    $("#messege_input").val("");
                                    $("#massage_card_body").animate({
                                        scrollTop: "3000px"
                                    });
                                    // alert(data)
                                }

                            })
                        }
                    });


                    // alert(data)
                }

            })
        })

    });
</script>
