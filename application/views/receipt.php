<style>
body{
    margin-top:20px;
    color: #484b51;
}
.text-secondary-d1 {
    color: #728299!important;
}
.page-header {
    margin: 0 0 1rem;
    padding-bottom: 1rem;
    padding-top: .5rem;
    border-bottom: 1px dotted #e2e2e2;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
}
.page-title {
    padding: 0;
    margin: 0;
    font-size: 1.75rem;
    font-weight: 300;
}
.brc-default-l1 {
    border-color: #dce9f0!important;
}

.ml-n1, .mx-n1 {
    margin-left: -.25rem!important;
}
.mr-n1, .mx-n1 {
    margin-right: -.25rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

.text-grey-m2 {
    color: #888a8d!important;
}

.text-success-m2 {
    color: #86bd68!important;
}

.font-bolder, .text-600 {
    font-weight: 600!important;
}

.text-110 {
    font-size: 110%!important;
}
.text-blue {
    color: #478fcc!important;
}
.pb-25, .py-25 {
    padding-bottom: .75rem!important;
}

.pt-25, .py-25 {
    padding-top: .75rem!important;
}
.bgc-default-tp1 {
    background-color: rgba(121,169,197,.92)!important;
}
.bgc-default-l4, .bgc-h-default-l4:hover {
    background-color: #f3f8fa!important;
}
.page-header .page-tools {
    -ms-flex-item-align: end;
    align-self: flex-end;
}

.btn-light {
    color: #757984;
    background-color: #f5f6f9;
    border-color: #dddfe4;
}
.w-2 {
    width: 1rem;
}

.text-120 {
    font-size: 120%!important;
}
.text-primary-m1 {
    color: #4087d4!important;
}

.text-danger-m1 {
    color: #dd4949!important;
}
.text-blue-m2 {
    color: #68a3d5!important;
}
.text-150 {
    font-size: 150%!important;
}
.text-60 {
    font-size: 60%!important;
}
.text-grey-m1 {
    color: #7b7d81!important;
}
.align-bottom {
    vertical-align: bottom!important;
}
.hr{
    border: 0.5px solid black;
}
</style>
<main id="main" class="main">
<body><div class="col-9">
    <div class="card"><span class="col-12">
    <div class="card-body">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />


<div class="page-content container">
    <div class="page-header text-blue-d2">
        <h6>
            Invoice ID:
            <small class="page-info">
                 SK00<?php echo $a_data->app_id;?>H
            </small>
        </h6>

        <div class="page-tools">
            <div class="action-buttons">
                <a onclick="window.print()" class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print">
                    <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                    Print
                </a>
                <a class="btn bg-white btn-light mx-1px text-95" id="link" onclick='print()' href="#" data-title="PDF">
                    <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                    Export
                </a>
            </div>
            <script>   
            function print(){
              var link = document.createElement('a');
              link.href = 'http://localhost/hospital/appoint/receipt_view/56';
              link.download = 'file.pdf';
              link.dispatchEvent(new MouseEvent('click'));
            }</script>
        </div>
    </div>

    <div class="container px-0">
       <div class="row mt-4">
           <div class="col-12 col-lg-12">
               <div class="row">
                   <div class="col-12">
                       <div class="text-center text-150">
                       <i><img src="<?php echo base_url();?>public/img/img/logo.jpg" alt="" style="width:80px;"></i>
                       <span class="text-default-d3"><b><u><i>SK Hospital </i></u></b></span>
                       </div>
                   </div>
               </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <span class="text-sm text-grey-m2 align-middle">To:</span>
                            <span class="text-600 text-110 text-blue align-middle"><?php echo ucwords($a_data->fname);?> <?php echo ucwords($a_data->lname);?></span>
                        </div>
                        <div class="text-grey-m2">
                            <div class="my-1">
                            <?php echo ucwords($a_data->address);?>
                            </div>
                            <div class="my-1">
                                <?php echo ucwords($a_data->state);?>
                            </div>
                            <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b class="text-600"><?php echo $a_data->mobile_no;?></b></div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2">
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                Invoice
                            </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span>SK00<?php echo $a_data->app_id;?>H</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span><?php echo date('d/m/Y H:i a' ,strtotime($a_data->appointment_date));?></div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status: Paid</span> <span class="badge badge-warning badge-pill px-25">Unpaid</span></div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="mt-4">
                    <div class="row text-600 text-white bgc-default-tp1 py-25">
                        <div class="d-none d-sm-block col-1">Sno</div>
                        <div class="col-9 col-sm-2">Doctor / Consultant</div>
                        <div class="d-none d-sm-block col-4 col-sm-3">Specialization</div>
                        <div class="d-none d-sm-block col-sm-2">Fees</div>
                        <div class="d-none d-sm-block col-sm-2">GST(5%)</div>
                        <div class="col-2">Total Amount</div>
                    </div>

                    <div class="text-95 text-secondary-d3">
                        <div class="row mb-2 mb-sm-0 py-25">
                            <div class="d-none d-sm-block col-1">1</div>
                            <div class="col-9 col-sm-2"><?php echo ucwords($doc_data->doctor);?></div>
                            <div class="d-none d-sm-block col-3"><?php echo $a_data->specialization;?></div>
                            <div class="d-none d-sm-block col-2 text-95"><?php echo $a_data->fees;?></div>

                              <?php $percent=0; 
                              $percent=$a_data->fees*5/100;?>
                            <div class="d-none d-sm-block col-2 text-95"><?php echo $percent?></div>
                            <div class="col-2 text-secondary-d2"><?php echo $a_data->fees + $percent;?></div>
                        </div>
                       
                    </div>

                    <div class="row border-b-2 brc-default-l2"></div>

                    <!-- or use a table instead -->
                    
            <!-- <div class="table-responsive">
                <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                    <thead class="bg-none bgc-default-tp1">
                        <tr class="text-white">
                            <th class="opacity-2">#</th>
                            <th>Doctor</th>
                            <th>Specialization</th>
                            <th>Fees</th>
                            <th width="140">Amount</th>
                        </tr>
                    </thead>

                    <tbody class="text-95 text-secondary-d3">
                        <tr></tr>
                        <tr>
                            <td>1</td>
                            <td>Domain registration</td>
                            <td>2</td>
                            <td class="text-95"><?php echo $a_data->fees;?></td>
                            <td class="text-secondary-d2"><?php echo $a_data->fees;?></td>
                        </tr> 
                    </tbody>
                </table>
            </div> -->
        

                    <!-- <div class="row mt-3">
                        <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                            Extra note such as company or payment information...
                        </div> -->
<!-- 
                        <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                            <div class="row my-2">
                                <div class="col-7 text-right">
                                    SubTotal
                                </div>
                                <div class="col-5">
                                    <span class="text-120 text-secondary-d1"><?php echo $a_data->fees;?></span>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-7 text-right">
                                    Tax (5%)
                                </div>
                                <div class="col-5">
                                    <span class="text-110 text-secondary-d1"><?php echo $percent?></span>
                                </div>
                            </div>
                            <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                <div class="col-7 text-right">
                                    Total Amount
                                </div> -->
                                <!-- <div class="col-5">
                                    <span class="text-150 text-success-d3 opacity-2"><?php echo $a_data->fees + $percent;?></span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <hr />
                    <div>
                        <span class="text-secondary-d1 text-105">THANK YOU FOR VISITING</span>
                        <div>
                        <a href="#" class="btn btn-success btn-bold px-4 float-right mt-3 mt-lg-0">Pay Now</a>
                        <a href="<?php echo base_url().'appoint/view/'.$a_data->ID;?>" class="btn btn-danger"
                         style="alignment:left">Go Back</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<hr class="hr">
<footer>
    <div class="text-center text-150">
        <i><img src="<?php echo base_url();?>public/img/img/logo.jpg" alt="" style="width:40px;"></i>
        <span><b class="text-60"><u><i>SK Hospital</i></u></b></span>
        <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i><b class="text-60">
            Contact Us:- 9303003334 </b>  &nbsp;
        <i class="bx bx-home"></i><b class="text-60">
            Visit :- XYZ City,India</b>
        </div>
    </div>
</footer>
</span></div>
</div>
</body>
</main>

