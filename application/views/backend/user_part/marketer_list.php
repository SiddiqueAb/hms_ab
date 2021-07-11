<style>
    .row {}

    .form-check {
        padding-left: 0rem;
    }
    @media print {
  body * {
    visibility: hidden;
  }
  #add_from, #add_from * {
    visibility: visible;
  }
  #add_from {
    position: absolute;
    left: 0;
    top: 0;
  }
}
</style>
<div class="content-wrapper">
    <div class="content mt-3">
        <div id="add_from">
 
                <div id="printable" class="col-sm-8">
                    <div class="card card-info">
                        <div class="card-header">এই মাসের বাজারকারী
                            <span class="pull-right">মাসঃ এপ্রিল ২০২১</span>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>তারিখ</th>
                                        <th>বার</th>
                                        <th>বাজারকারীর নাম</th>
                                    </tr>
                                    <tr>
                                        <td>12/0/2010</td>
                                        <td>শনিবার</td>
                                        <td>নাজির + সোহাগ</td>
                                    </tr>
                                    <tr>
                                        <td>12/0/2010</td>
                                        <td>সোমবার</td>
                                        <td>সিদ্দিক +  সালাউদ্দিন</td>
                                    </tr>
                                    <tr>
                                        <td>12/0/2010</td>
                                        <td>বৃহস্পতিবার</td>
                                        <td>নাজির + সোহাগ</td>
                                    </tr>
                                    <tr>
                                        <td>12/0/2010</td>
                                        <td>শনিবার</td>
                                        <td>নাজির + সোহাগ</td>
                                    </tr>
                                    <tr>
                                        <td>12/0/2010</td>
                                        <td>শনিবার</td>
                                        <td>নাজির + সোহাগ</td>
                                    </tr>
                                    <tr>
                                        <td>12/0/2010</td>
                                        <td>শনিবার</td>
                                        <td>নাজির + সোহাগ</td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                
                <button class="btn btn-info btn-lg" onclick="printDiv('printable')">Print List</button>
               

                
        </div>
    </div>
</div>

<script>
		function printDiv(divName){
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
</script>

