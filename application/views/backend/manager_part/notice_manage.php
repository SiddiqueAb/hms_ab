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
                        <div class="card-header">নোটিশ বোর্ড</div>
                        <div class="card-body">                          
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th> তারিখ</th>
                                        <th>বিষয়বস্তু</th>
                                        <th>অপশন</th>
                                    </tr>
                                    <tr>
                                       <td>২০/০৫/২০২০</td>
                                       <td>মেস এ খালা নাই । আজ রাতের রান্না অফ থাকবে</td>                                       
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
                        <div class="card-header">নতুন নোটিশ</div>
                        <div class="card-body">
                            <form action="">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>তারিখ</th>
                                        <th>বিস্তারিত</th>
                                    </tr>
                                    <tr>
                                    <th><input type="date" class="form-control"></th>
                                        <th><textarea class="form-control"></textarea></th>
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