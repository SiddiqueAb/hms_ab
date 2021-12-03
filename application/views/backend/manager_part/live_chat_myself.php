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
                                <a href="#">



                                    <?php if ($all_friend) {
                                        foreach ($all_friend as $row) { ?>
                                            <li class="">
                                                <a href="#">
                                                    <div class="d-flex bd-highlight">
                                                        <div class="img_cont">
                                                            <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">

                                                            <span class="online_icon <?php if ($row->a_active_status == 2) {
                                                                                            echo "offline";
                                                                                        } ?>"></span>
                                                        </div>
                                                        <div class="user_info">
                                                            <span><?= $row->a_name; ?></span>
                                                            <p><?= $row->a_name; ?>  <?php if ($row->a_active_status == 1) {
                                                                                            echo "is online";
                                                                                        }else{
                                                                                            echo "left ".get_current_time()." minute ago";
                                                                                        } ?></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                    <?php  }
                                    } ?>



                                    <!-- <li class="active">
                                        <a href="#">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
                                                    <span class="online_icon"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Khalid</span>
                                                    <p>Kalid is online</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img">
                                                    <span class="online_icon offline"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Taherah Big</span>
                                                    <p>Taherah left 7 mins ago</p>
                                                </div>
                                            </div>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="https://i.pinimg.com/originals/ac/b9/90/acb990190ca1ddbb9b20db303375bb58.jpg" class="rounded-circle user_img">
                                                    <span class="online_icon"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Sami Rafi</span>
                                                    <p>Sami is online</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li> -->

                            </ui>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-md-8 col-xl-6 chat mt-3">
                    <div class="card">
                        <div class="card-header msg_head">
                            <div class="d-flex bd-highlight">
                                <div class="img_cont">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
                                    <span class="online_icon"></span>
                                </div>
                                <div class="user_info">
                                    <span><?=$this->session->userData("currentActiveId")?></span>
                                    <p>1767 Messages</p>
                                </div>
                                <!-- <div class="video_cam">
                                    <span><i class="fas fa-video"></i></span>
                                    <span><i class="fas fa-phone"></i></span>
                                </div> -->
                            </div>
                            <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                            <div class="action_menu">
                                <ul>
                                    <li><i class="fas fa-user-circle"></i> View profile</li>
                                    <li><i class="fas fa-users"></i> Add to close friends</li>
                                    <li><i class="fas fa-plus"></i> Add to group</li>
                                    <li><i class="fas fa-ban"></i> Block</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body msg_card_body" id="massage_card_body">

                            <!-- <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    You are welcome
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img_msg">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    I am looking for your next templates
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Ok, thank you have a good day
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img_msg">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    Bye, see you
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div> -->
                        </div>
                        <div class="card-footer">
                            <form role="form" action="<?= base_url("message_send") ?>" method="post">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                                    </div>
                                    <textarea name="" id="messege_input" class="form-control type_msg" placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <span class="input-group-text send_btn" id="send_btn"><i class="fas fa-location-arrow"></i></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>











<script src="<?php echo base_url('') ?>assets/backend/plugins/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#action_menu_btn').click(function() {
            $('.action_menu').toggle();
        });

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
                        // $("#massage_card_body").append(' <div class="d-flex justify-content-end mb-4">\n\
                        //         <div class="msg_cotainer_send"> ' + massge + ' <span class="msg_time_send">9:10 AM, Today</span></div>\n\
                        //         <div class="img_cont_msg"><img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img_msg"></div> </div>');
                        // $("#table_data_inserted").html(data);
                        show_message();
                        $("#messege_input").val("");
                        $("#massage_card_body").animate({
                            scrollTop: "300px"
                        });
                        // alert(data)
                    }

                })
            }
        });
    });
</script>