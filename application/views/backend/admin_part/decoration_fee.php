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
                        <div class="card-header">Submit Daily Meal:</div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>সদস্যের নাম</th>                                        
                                        <th> ফি দেয়ার তারিখ </th>
                                        <th>কার কাছে দিয়েছে </th>
                                        <th>টাকার পরিমান </th>
                                    </tr>
                                    <tr>
                                        <td> সোহান</td>                                        
                                        <td> ১২/১১/২০২০</td>
                                        <td>  মামুন</td>
                                        <td> ২৫০ /= </td>
                                    </tr>
                                    <tr>
                                        <td> সোহান</td>                                        
                                        <td> ১২/১১/২০২০</td>
                                        <td>  মামুন</td>
                                        <td> ২৫০ /= </td>
                                    </tr>
                                    <tr>
                                        <td> সোহান</td>                                        
                                        <td> ১২/১১/২০২০</td>
                                        <td>  মামুন</td>
                                        <td> ২৫০ /= </td>
                                    </tr>
                                    <tr>
                                        <td> সোহান</td>                                        
                                        <td> ১২/১১/২০২০</td>
                                        <td>  মামুন</td>
                                        <td> ২৫০ /= </td>
                                    </tr>
                                    <tr>
                                        <td> সোহান</td>                                        
                                        <td> ১২/১১/২০২০</td>
                                        <td>  মামুন</td>
                                        <td> ২৫০ /= </td>
                                    </tr>
                                    <tr>
                                        <td> সোহান</td>                                        
                                        <td> ১২/১১/২০২০</td>
                                        <td>  মামুন</td>
                                        <td> ২৫০ /= </td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" class="align-rigth"> মোট ডেকোরেশন ফি = </th> 
                                        <th> ২৫০ /= </th>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="card card-info">
                        <div class="card-header">ডেকোরেশন ফি নেয়ার তথ্য</div>
                        <div class="card-body">
                            <form action="">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>সদস্যের নাম</th>
                                            <th> ফি দেয়ার তারিখ </th>
                                            <th>কার কাছে দিয়েছে </th>
                                            <th>টাকার পরিমান </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select value="" class="form-control">
                                                <?php if ($memberinfo)
                                                    foreach ($memberinfo as $member) { ?>
                                                      <option name="member_name" id="member_name"><?=$member->m_name;?></option>   
                                                 <?php } ?>
                                                   
                                                </select>
                                            </td>
                                            <td><input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1"></td>
                                            <td>
                                            <select value="" class="form-control">
                                                <?php if ($memberinfo)
                                                    foreach ($memberinfo as $member) { ?>
                                                      <option name="member_name" id="member_name"><?=$member->m_name;?></option>   
                                                 <?php } ?>
                                                   
                                                </select>
                                            </td>
                                            <td><input type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1"></td>
                                        </tr>
                                    </tbody>

                                </table>
                                <button type="submit" class="btn btn-sm btn-info pull-right">সাবমিট</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>