<style>
    .column_on_hover {
        transform: rotate(10deg);
    }

    .sortable-placeholder {
        background-color: red;
    }

    .column {
        height: 920px;
        overflow-y: auto;
        /* position: absolute; */
        /* padding-bottom: 1700px; */
    }

    .child_colum {
        background-color: #92a19f;
        border: 15px solid #92a19f;
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

        <div class="row">
            <?php

            if ($get_colum) {
                foreach ($get_colum->result() as $row_col) { ?>

                    <div class="col-md-3 grid_parent">
                        <div class="">
                            <div class="card-header bg-dark bg-dark">
                                <h3 class="card-title">
                                    <?= $row_col->tc_name; ?>
                                </h3>
                                <div class="card-tools">

                                </div>
                            </div>
                            <div class="card-body p-2 column" data-colum_id="<?= $row_col->tc_id ?>">
                                <div class="child_colum">
                                    <?php

                                    $col_rows  = $this->Common->get_data_multi_conditional("trello", ["t_colum_id" => $row_col->tc_id]);

                                    foreach ($col_rows->result() as $rows_item) { ?>
                                        <div class="info-box bg-info mb-1 portlet" data-id="<?= $rows_item->t_id ?>" data-position="<?= $rows_item->t_row_position ?>" data-colum="<?= $rows_item->t_colum_id ?>">
                                            <span class="info-box-icon"><i class="<?= $rows_item->t_icon_name ?>"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Bookmarks</span>
                                                <span class="progress-description" contenteditable="true">
                                                    <?= $rows_item->t_content_text ?>
                                                </span>
                                            </div>
                                        </div>
                                    <?php  }
                                    ?>

                                </div>
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
            cursor: "all-scroll",
            revert: true,
            scroll: true,
            scrollSpeed: 10,
            tolerance: "intersect",
            items: "> div > .portlet",
            start: function(event, ui) {
                ui.item.toggleClass("column_on_hover");

            },
            stop: function(event, ui) {
                ui.item.toggleClass("column_on_hover");
            },
            update: function(e, ui) {
                // alert("hi")
                // console.log(ui)
                ui.item.addClass("update");
                $('.update').attr("data-update", $(this).data("colum_id"));
                var row_id = $('.update').data('id');
                var colum_id = $('.update').data('update');
                alert(colum_id)
                // $.ajax({
                //     type: "POST",
                //     url: '<?= base_url("Test/trello_colum_update") ?>',
                //     data: {
                //         row_id: row_id,
                //         colum_id: colum_id,
                //     },
                //     success: function(data_updated) {
                //         // ALERT("HI")
                //     }

                // })
            }
        });

    });
</script>