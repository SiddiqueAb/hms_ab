<style>
    .row {}

    .form-check {
        padding-left: 0rem;
    }
</style>
<div class="content-wrapper">
    <div class="content mt-3">
        <div id="add_from">
            <div class="row">
                <div class="col-sm-5">
                    <div class="card card-info">
                        <div class="card-header">মিটিং বোর্ড</div>
                        <div class="card-body">                          
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th> তারিখ</th>
                                        <th> সময়</th>
                                        <th>বিষয়বস্তু</th>
                                        <th>অপশন</th>
                                    </tr>
                                    <tr>
                                       <td>২০/০৫/২০২০</td>
                                       <td>৯ঃ০০ টা</td>
                                       <td>মাসিক মিটিং</td>                                       
                                       <td>
                                           <button class="btn btn-sm btn-info">+</button>
                                           <button class="btn btn-sm btn-danger">-</button>
                                       </td>                                       
                                    </tr>     
                                </tbody>
                                
                            </table>                           
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                <div class="card card-info">
                        <div class="card-header">নতুন মিটিং নির্ধারন</div>
                        <div class="card-body">
                            <form action="">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>তারিখ</th>
                                        <th>সময়</th>
                                        <th>বিষয়বস্তু</th>
                                    </tr>
                                    <tr>
                                    <th><input type="date" class="form-control"></th>
                                    <th><input type="time" class=" form-control"></th>
                                    <th><input type="text" class="form-control"></th>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-sm btn-info pull-right">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</div>