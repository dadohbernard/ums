
  <link rel="icon" type="image/x-icon" href="<?=base_url()?>assets/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/css/forms/theme-checkbox-radio.css">
    <link href="<?=base_url()?>assets/assets/css/apps/invoice-list.css" rel="stylesheet" type="text/css" />
    
    <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <table id="invoice-list" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column"> Record no. </th>
                                        <th>Invoice Id</th>
                                        <th>AMAZINA</th>
                                        <th>IRANGAMUNTU</th>
                                        <th>UKWEZI</th>
                                        <th>AMAFARANGA</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td><a href="<?=base_url()?>isibo/invoice"><span class="inv-number">#098424</span></a></td>
                                        <td>
                                            <div class="d-flex">
                                               
                                                <p class="align-self-center mb-0 user-name"> Alma Clarke </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> 11983949493434344</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 10 Feb 2021</span></td>
                                        <td><span class="inv-amount">$234.40</span></td>
                                        <td><span class="badge badge-success inv-status">Paid</span></td>
                                       
                                    </tr>
                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td><a href="<?=base_url()?>isibo/invoice"><span class="inv-number">#095841</span></a></td>
                                        <td>
                                            <div class="d-flex">
                                             
                                                <p class="align-self-center mb-0 user-name"> Kelly Young </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> 11983949493434344</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 06 Feb 2021</span></td>
                                        <td><span class="inv-amount">$49.00</span></td>
                                        <td><span class="badge badge-danger inv-status">Pending</span></td>
                                       
                                    </tr>

                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td><a href="<?=base_url()?>isibo/invoice"><span class="inv-number">#091768</span></a></td>
                                        <td>
                                            <div class="d-flex">
                                               
                                                <p class="align-self-center mb-0 user-name"> Vincent Carpenter </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> 11983949493434344</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 30 Jan 2021</span></td>
                                        <td><span class="inv-amount">$400</span></td>
                                        <td><span class="badge badge-success inv-status">Paid</span></td>
                                      
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td><a href="<?=base_url()?>isibo/invoice"><span class="inv-number">#089472</span></a></td>
                                        <td>
                                            <div class="d-flex">
                                                
                                                <p class="align-self-center mb-0 user-name"> Andy King </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> 11983949493434344</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 28 Jan 2021</span></td>
                                        <td><span class="inv-amount">$149.00</span></td>
                                        <td><span class="badge badge-success inv-status">Paid</span></td>
                                       
                                    </tr>

                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td><a href="<?=base_url()?>isibo/invoice"><span class="inv-number">#087916</span></a></td>
                                        <td>
                                            <div class="d-flex">
                                               
                                                <p class="align-self-center mb-0 user-name"> Mary McDonald </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> 11983949493434344</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 25 Jan 2021</span></td>
                                        <td><span class="inv-amount">$79.00</span></td>
                                        <td><span class="badge badge-danger inv-status">Pending</span></td>
                                     
                                    </tr>

                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td><a href="<?=base_url()?>isibo/invoice"><span class="inv-number">#086773</span></a></td>
                                        <td>
                                            <div class="d-flex">
                                              
                                                <p class="align-self-center mb-0 user-name"> Nia Hillyer </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> 11983949493434344</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 20 Jan 2021</span></td>
                                        <td><span class="inv-amount">$59.21</span></td>
                                        <td><span class="badge badge-danger inv-status">Pending</span></td>
                                     
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td><a href="<?=base_url()?>isibo/invoice"><span class="inv-number">#086643</span></a></td>
                                        <td>
                                            <div class="d-flex">
                                                
                                                <p class="align-self-center mb-0 user-name"> Amy Diaz </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> 11983949493434344</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 14 Jan 2021</span></td>
                                        <td><span class="inv-amount">$100.00</span></td>
                                        <td><span class="badge badge-success inv-status">Paid</span></td>
                                      
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td><a href="<?=base_url()?>isibo/invoice"><span class="inv-number">#084743</span></a></td>
                                        <td>
                                            <div class="d-flex">
                                                
                                                <p class="align-self-center mb-0 user-name"> Donna Rogers </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> 11983949493434344</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 03 Jan 2021</span></td>
                                        <td><span class="inv-amount">$405.15</span></td>
                                        <td><span class="badge badge-success inv-status">Paid</span></td>
                                  
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td><a href="<?=base_url()?>isibo/invoice"><span class="inv-number">#082693</span></a></td>
                                        <td>
                                            <div class="d-flex">
                                                
                                                <p class="align-self-center mb-0 user-name"> Grace Roberts </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> 11983949493434344</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 31 Dec 2020</span></td>
                                        <td><span class="inv-amount">$344.00</span></td>
                                        <td><span class="badge badge-success inv-status">Paid</span></td>
                                      
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td><a href="<?=base_url()?>isibo/invoice"><span class="inv-number">#081681</span></a></td>
                                        <td>
                                            <div class="d-flex">
                                                
                                                <p class="align-self-center mb-0 user-name"> James Taylor </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> 11983949493434344</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 27 Dec 2020</span></td>
                                        <td><span class="inv-amount">$20.00</span></td>
                                        <td><span class="badge badge-danger inv-status">Pending</span></td>
                                       
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td><a href="<?=base_url()?>isibo/invoice"><span class="inv-number">#081452</span></a></td>
                                        <td>
                                            <div class="d-flex">
                                               
                                                <p class="align-self-center mb-0 user-name"> Alexander Gray </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> 11983949493434344</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 20 Dec 2020</span></td>
                                        <td><span class="inv-amount">$1044.00</span></td>
                                        <td><span class="badge badge-success inv-status">Paid</span></td>
                                       
                                    </tr>


                                    <tr>
                                        <td class="checkbox-column"> 1 </td>
                                        <td><a href="<?=base_url()?>isibo/invoice"><span class="inv-number">#081451</span></a></td>
                                        <td>
                                            <div class="d-flex">
                                                
                                                <p class="align-self-center mb-0 user-name"> Laurie Fox </p>
                                            </div>
                                        </td>
                                        <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> 11983949493434344</span></td>
                                        <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 15 Dec 2020</span></td>
                                        <td><span class="inv-amount">$2275.45</span></td>
                                        <td><span class="badge badge-success inv-status">Paid</span></td>
                                 
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
         
        </div>
    
        <script src="<?=base_url()?>assets/assets/js/libs/jquery-3.1.1.min.js"></script>
 
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?=base_url()?>assets/plugins/table/datatable/datatables.js"></script>
    <script src="<?=base_url()?>assets/assets/js/apps/invoice-list.js"></script>
   <?php
include('footer.php');
?>