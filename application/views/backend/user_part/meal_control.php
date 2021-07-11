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
                <div class="col-sm-6">
                    <div class="card card-info">
                        <div class="card-header">আপনার মতামত এর উত্তর</div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>তারিখ</th>
                                        <th>সময়</th>
                                        <th>মিল অফ /অন</th>
                                    </tr>

                                    <tr>
                                        <td>২৫/১০/২০২১</td>
                                        <td>দুপুর</td>
                                        <td>মিল অফ</td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card card-info">
                        <div class="card-header">মিল অফ করুন</div>
                        <div class="card-body">
                            <form action="">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>তারিখ</th>
                                            <th>সময়</th>

                                        </tr>
                                        <tr>
                                            <td><input type="date" class="form-control"></td>
                                            <td>
                                                <select class="form-control select2" name="" multiple value="" tabindex="" aria-hidden="">
                                                    <option value="">সকাল</option>
                                                    <option value=""> দুপুর </option>
                                                    <option value=""> রাত </option>
                                                </select>
                                            </td>
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

<script src="<?php echo base_url('') ?>assets/backend/plugins/jquery/jquery.min.js"></script>