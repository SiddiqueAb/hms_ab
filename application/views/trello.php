<style>
    .column_on_hover {
        transform: rotate(10deg);
    }

    .grid_parent {
        width: 350px !important;
    }

    .total {
        display: -webkit-box;
        overflow-x: auto;
        background-image: url('<?php echo base_url("assets/uploads/image/agun.gif") ?>');
        background-repeat: no-repeat;
        background-size: 2000px 1000px;
    }

    .sortable-placeholder {
        background-color: red;
    }

    .column {
        height: 930px;
        overflow-y: auto;
        /* position: absolute; */
        /* padding-bottom: 1700px; */
    }

    .child_colum {
        background-color: #92a19f;
        border: 10px solid #92a19f;
        /* position: relative; */
    }

    .bg-info {
        background-color: #2d4548 !important;
    }
</style>
<div class="content-wrapper">
    <div class="content">
        <div id="ab">

        </div>

        <div class="total">
            <?php

            if ($get_colum) {
                foreach ($get_colum->result() as $row_col) { ?>

                    <div class="grid_parent">
                        <div class="card-header mx-1 bg-lightblue">
                            <h6 class="">
                                <?= $row_col->tc_name; ?>
                            </h6>
                        </div>
                        <div class="card-body p-1 column">
                            <div class="child_colum" data-colum_id="<?= $row_col->tc_id ?>">
                                <div class=""></div>
                                <?php

                                $col_rows  = $this->Common->get_data_multi_conditional_order("trello", ["t_colum_id" => $row_col->tc_id], "t_row_position", "ASC");

                                foreach ($col_rows->result() as $rows_item) { ?>
                                    <div class="info-box bg-info mb-1 portlet" data-colum_id="<?= $row_col->tc_id ?>" data-id="<?= $rows_item->t_id ?>" data-position="<?= $rows_item->t_row_position ?>" data-colum="<?= $rows_item->t_colum_id ?>">
                                        <span class="info-box-icon"><i class="<?= $rows_item->t_icon_name ?>"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Trello done</span>
                                            <span class="progress-description">
                                                <?= $rows_item->t_content_text ?>
                                            </span>
                                        </div>
                                    </div>
                                <?php  }
                                ?>

                            </div>
                        </div>

                    </div>
            <?php }
            }

            ?>

        </div>
    </div>

</div>
<script src="<?php echo base_url('') ?>assets/backend/plugins/jquery/jquery.min.js"></script>
<script>
    $(function() {
        $(".column").sortable({
            connectWith: ".column",
            cursor: "pointer",
            // revert: true,
            scroll: true,
            scrollSpeed: 10,
            // tolerance: "intersect",

            items: "> .child_colum > ",
            start: function(event, ui) {
                ui.item.toggleClass("column_on_hover");

            },
            stop: function(event, ui) {
                ui.item.toggleClass("column_on_hover");
            },
            update: function(e, ui) {

                var dataArray = [];
                $(".column .child_colum .portlet").each(function(index, val) {
                    // console.log(val.data("colum"));
                    dataArray.push({
                        id: $(this).attr("data-id"),
                        position: index + 1,
                        colum: $(this).parent(".child_colum").data("colum_id"),
                    })
                });
                $.ajax({
                    type: "POST",
                    url: '<?= base_url("Test/trello_colum_update") ?>',
                    data: {
                        dataArray
                    },
                    success: function(data_updated) {
                        console.log("hi");
                    }

                })
            }
        }).disableSelection();


        var clicked = false,
            clickY;
        $(document).on({
            'mousemove': function(e) {
                clicked && updateScrollPos(e);
            },
            'mousedown': function(e) {
                clicked = true;
                clickY = e.pageY;
            },
            'mouseup': function() {
                clicked = false;
                $('html').css('cursor', 'auto');
            }
        });

        var updateScrollPos = function(e) {
            $('html').css('cursor', 'row-resize');
            $(window).scrollTop($(window).scrollTop() + (clickY - e.pageY));
        }

    });
</script>