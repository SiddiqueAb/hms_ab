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
        background-image: url('<?php echo base_url("assets/uploads/image/fog.gif") ?>');
        background-repeat: no-repeat;
        background-size: 2000px 1000px;
    }

    .ui-state-highlight {
        background-image: url('<?php echo base_url("assets/uploads/image/agun.gif") ?>');
    }

    .column {
        height: 930px;
        overflow-y: auto;
    }

    .child_colum {
        background-color: #92a19f;
        border: 10px solid #92a19f;
    }

    .bg-info,
    .bg-lightblue {
        background-color: #2d4548 !important;
    }

    [contenteditable]:focus {
        outline: 3px solid white;
        padding: 4px;
    }
</style>
<div class="content-wrapper">
    <div class="content">
        <!-- <div id="ab">

        </div> -->

        <div class="total">
            <?php

            if ($get_colum) {
                foreach ($get_colum->result() as $row_col) { ?>

                    <div class="grid_parent">
                        <div class="card-header mx-1 bg-lightblue">
                            <h6 class="" contenteditable="true" data-colum_id_head="<?= $row_col->tc_id ?>"><?= $row_col->tc_name; ?></h6>
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
            revert: true,
            scroll: true,
            scrollSpeed: 10,
            tolerance: 'pointer',
            placeholder: 'state',
            placeholder: "ui-state-highlight",
            forcePlaceholderSize: true,
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

    });


    $("[contenteditable]").focusout(function() {
        // alert("hi");
        var colum_id = $(this).data("colum_id_head");
        var content = $(this).text();

        // alert(content);
        $.ajax({
            type: "POST",
            url: '<?= base_url("Test/colum_name_update") ?>',
            data: {
                colum_id:colum_id,
                content:content,
            },
            success: function(data_updated) {
                // console.log("hi");
            }
        })
    })
</script>