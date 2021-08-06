<div class="content-wrapper">
   <div class="row">
      <div class="col-md-6">
         <div class="card card-info mt-3">
            <div class="card-header">
               Php with ajax (Load Data From database)
            </div>
            <div class="card-body">
               <div class="action_part">
                  <button type="button" class="btn btn-info btn-sm mb-2" id="load_data" value="Load Data">Load Data</button>
               </div>
               <div class="">
                  <table class="table table-sm table-hover table-bordered">
                     <thead>
                        <tr class="bg-info">
                           <th>Id</th>
                           <th>Name</th>
                           <th>Roll</th>
                           <th>Class</th>
                           <th>Edit</th>
                           <th>Delete</th>
                        </tr>
                     </thead>
                     <tbody id="table_data">

                     </tbody>

                  </table>
               </div>
            </div>
         </div>
      </div>

      <div class="col-md-6">
         <div class="card card-info mt-3">
            <div class="card-header">
               Add Record With Php Ajax
            </div>
            <div class="card-body">

               <div class="action_part mb-2">

                  <form class="row" id="recet_table">
                     <div class="col-sm-3">
                        <input type="text" id="name" placeholder="Name" class="form-control">
                     </div>
                     <div class="col-sm-3">
                        <input type="text" id="roll" placeholder="Roll" class="form-control">
                     </div>
                     <div class="col-sm-3">
                        <input type="text" id="class_c" placeholder="Class" class="form-control">
                     </div>
                     <div class="col-sm-3">
                        <button type="submit" class="btn btn-info btn-sm float-right form-control" id="submit_data" value="Insert">Insert</button></button>
                     </div>
                  </form>



               </div>
               <div class="">
                  <table class="table table-sm table-hover table-bordered">
                     <thead>
                        <tr class="bg-info">
                           <th>Id</th>
                           <th>Name</th>
                           <th>Roll</th>
                           <th>Class</th>
                           <th>Edit</th>
                           <th>Delete</th>
                        </tr>
                     </thead>
                     <tbody id="table_data_inserted">

                     </tbody>

                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="update_modal">
      <div class="modal-dialog modal-sm">
         <div class="modal-content">
            <div class="modal-header bg-info">
               <h6 class="modal-title">Update Data</h6>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form class="row" id="updateTable">
               </form>
            </div>



         </div>
         <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </div>
</div>




<script src="<?php echo base_url('') ?>assets/backend/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {



      $("#load_data").on('click', function(e) {

         $.ajax({
            url: '<?php echo base_url("ajax_loda_data") ?>',
            type: 'GET',
            success: function(data) {

               $("#table_data").html(data);
            }
         })
      })




      function loadTable() {
         $.ajax({
            url: '<?= base_url("ajax_loda_data") ?>',
            type: 'GET',
            success: function(data) {

               $("#table_data_inserted").html(data);
            }
         })
      }


      loadTable();





      // Function For show Massage 
      function massege(status, massege) {
         const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: true,
            timer: 3000
         });

         if (status == "true") {
            Toast.fire({
               icon: 'success',
               title: massege
            });
         } else if (status == "false") {
            Toast.fire({
               icon: 'error',
               title: massege
            });
         }
      }








      // insert data 
      $("#submit_data").on('click', function(e) {
         e.preventDefault();
         var name = $('#name').val();
         var roll = $('#roll').val();
         var class_c = $('#class_c').val();

         if (name == "" || roll == "" || class_c == "") {
            massege("false", "Data Not Inserted");
         } else {
            $.ajax({
               url: '<?= base_url("insert_data") ?>',
               type: 'POST',
               data: {
                  name: name,
                  roll: roll,
                  class_c: class_c
               },
               success: function(data) {
                  loadTable();
                  $("#recet_table").trigger('reset');
                  massege("true", 'InserTed Data Successfuly');
               }
            })
         }
      })


      // delete Data 

      $(document).on("click", ".delete_button", function() {

         if (confirm("are you sure??")) {
            var studentId = $(this).data('id');

            $.ajax({
               url: "<?= base_url('delelteData') ?>",
               type: 'post',
               data: {
                  s_id: studentId
               },
               success: function(data) {
                  if (data == 1) {
                     loadTable();
                     massege("true", "data Deleted Successfull");
                  } else {
                     alert("false", "Data Not Deleted");
                  }
               }
            });

         };
      });


      // getFromvalue
      $(document).on("click", ".edit_button", function() {

         $('#update_modal').modal('show');
         var stId = $(this).data("eid");
         // alert(stId);
         $.ajax({
            url: "<?= base_url('getFromValue') ?>",
            type: "POST",
            data: {
               s_id: stId
            },
            success: function(data) {
               $("#updateTable").html(data);
            }
         });

      });


      // saveUpdateData
      $(document).on("click", "#updateButton", function() {

         var id = $('#s_id').val();
         var name2 = $('#nameUpdate').val();
         var roll2 = $('#rollUpdate').val();
         var class_c2 = $('#class_cUpdate').val();
         // alert(name);
         $.ajax({
            url: "<?= base_url('updateData') ?>",
            type: "POST",
            data: {
               id: id,
               name2: name2,
               roll2: roll2,
               class_c2: class_c2,
            },
            success: function(data) {

               console.log(data);
               // if (data == 1) {
               //    $('#update_modal').modal('hide');
               //    loadTable();
               //    // massege("true", "data Updated Successfull");
               // } else {

               //    // alert("false", "Data Not Update");
               // }
            },
            error: function(error) {
               alert("error");
            }
         })

      });
   });
</script>