<style>
  .row {
    margin-top: 8px;
  }

  /* .content-wrapper {
    font-size: 10px;
  } */
</style>
<div class="content-wrapper">


  <div class="card-body">
    <div class="card card-info">
      <div class="card-header">
        <div class="card-title">নতুন সদস্য অন্তর্ভুক্তি করুন</div>
      </div>

      <div class="card-body">
        <form role="form" id="patientEditForm" action="backend/system/Assesment/editaf_status" method="POST" enctype="multipart/form-data">
          <div class="box-body">
            <div class="row">
                <div class="form-group col-sm-4">
                  <label for="exampleInputEmail1">নাম</label>:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="নাম লিখুন">
                </div>
                <div class="form-group col-sm-4">
                  <label for="exampleInputEmail1">গার্ডিয়ান</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="পিতা বা মাতার নাম লিখুন">
                </div>
                <div class="form-group col-sm-4">
                  <label for="exampleInputEmail1">পেশা</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="কি করেন তা লিখুন">
                </div>
            </div>

              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="exampleInputEmail1">শিক্ষা</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="পড়াশুনার সর্বষেশ অবস্থা">
                </div>
                <div class="form-group col-sm-4">
                  <label for="exampleInputEmail1">ঠিকানা</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="বাড়ির ঠিকানা লিখুন">
                </div>
                <div class="form-group col-sm-4">
                  <label for="exampleInputPassword1">মোবাইল</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" placeholder="মোবাইল নম্বর দিন">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-sm-2">
                  <label for="exampleInputEmail1"> পাসওয়ার্ড</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="পরবর্তীতে লগিনের জন্য পাসওয়ার্ড দিন">
                </div>
                <div class="form-group col-sm-2">
                  <label for="exampleInputEmail1"> রুম নম্বর</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="রুম নম্বর লিখুন">
                </div>
                <div class="form-group col-sm-4">
                  <label for="exampleInputEmail1">সামাজিক যোগাযোগ মাধ্যম</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="সামাজিক যোগাযোগের লিঙ্ক দিন">
                </div>
                <div class="form-group col-sm-4">
                  <label for="exampleFormControlFile1">ফটো</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-info pull-right">যুক্ত করুন</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>