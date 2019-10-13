<?php
$this->load->view('layout/header');
$prefixshopappointment = array('Sun' => [9, 19], 'Other' => [9, 21]);
$cdateshort = date("D");
$timingarray = [];
if (isset($prefixshopappointment[$cdateshort])) {
    $timingarray = $prefixshopappointment[$cdateshort];
} else {
    $timingarray = $prefixshopappointment['Other'];
}

function createModel($value, $dtvalue) {
    $timeslot = [
        "08:00 AM",
        "09:00 AM",
        "10:00 AM",
        "11:00 AM",
        "12:00 PM",
        "01:00 PM",
        "02:00 PM",
        "03:00 PM",
        "04:00 PM",
        "05:00 PM",
        "06:00 PM",
        "07:00 PM",
        "08:00 PM",
        "09:00 PM",
    ];
    ?>
    <div class = "modal fade" id = "<?php echo $value['id']; ?>"  role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true" style="    z-index: 200000;
         ">

        <div class = "modal-dialog ">
            <div class = "modal-content">
                <form method="post" action="#">
                    <div class = "modal-header" style="  margin: 10px 0px; ">


                        <div class = "modal-title " id = "myModalLabel">

                            <address style="    margin-bottom: 0;">
                                <span id="location"><b><?php echo $value['hotel']; ?></b>
                                </span><br>
                                <span id="address">  
                                    <?php echo $value['address']; ?></span><br>
                            </address>
                            <input type="hidden" name="hotel" value="<?php echo $value['hotel']; ?>">
                            <input type="hidden" name="address" value="<?php echo $value['address']; ?>">
                            <input type="hidden" name="city_state" value="<?php echo $value['city_state']; ?>">
                            <input type="hidden" name="country" value="<?php echo $value['country']; ?>">
                            <input type="hidden" name="contact_no2" value="<?php echo $value['contact_no']; ?>">

                            <div style="clear: both"></div>
                        </div>

                    </div>



                    <div class = "modal-body">




                        <div class="row" style="    border-bottom: 1px solid #E5E5E5;">
                            <div class="col-md-4" >
                                <div class="form-group" style="font-color:#dd0101">

                                    <label for="first_name">Last Name</label> 
                                    <input type="text" class="time start form-control" name="last_name"  style="" required/>

                                </div>
                            </div>
                            <div class="col-md-4" >
                                <div class="form-group" style="font-color:#dd0101">

                                    <label for="first_name">First Name</label> 
                                    <input type="text" class="time start form-control" name="first_name"  style="" required />

                                </div>
                            </div>


                            <div class="col-md-4" >
                                <div class="form-group" style="font-color:#dd0101">
                                    <label for="first_name">No. Of Persons</label> 
                                    <input  class="time start form-control" type="number"  name="no_of_person"  style="" min="1" value="1" />

                                </div>
                            </div>
                        </div>

                        <div class="row" style="    border-bottom: 1px solid #E5E5E5;">
                            <div class="col-md-6" >
                                <div class="form-group" style="font-color:#dd0101">

                                    <label for="first_name">Email</label> 
                                    <input type="text" class="time start form-control" name="email"   style="" required />

                                </div>
                            </div>

                            <div class="col-md-6" >
                                <div class="form-group" style="font-color:#dd0101">

                                    <label for="first_name">Contact No.</label> 
                                    <input type="text" class="time start form-control" name="contact_no"  style="" required />

                                </div>
                            </div>
                        </div>


                        <div class="row" style="    border-bottom: 1px solid #E5E5E5;">
                            <div class="col-md-4" >
                                <div class="form-group" style="font-color:#dd0101">

                                    <label for="select_date">Available Date</label> 
                                    <select class="form-control" style="padding:1px;"  name="select_date" id="dateselection" style="" required ng-model="dateselection<?php echo $value['id']; ?>"  ng-init="dateselection<?php echo $value['id']; ?> = '<?php echo $value['dates'][0]['date']; ?>'" >

                                        <?php
                                        $dataes = $value['dates'];
                                        foreach ($dataes as $dkey => $dvalue) {
                                            $dateid = $value['id'] . $dkey;
                                            ?>    
                                            <option  value="<?php echo $dvalue['date']; ?>"><?php echo $dvalue['date']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>


                                </div>
                            </div>

                            <div class="col-md-4" >
                                {{dateselection}}


                                <?php
                                if ($value) {


                                    foreach ($dataes as $dtkey => $dtvalue) {
                                        $dateid = $value['id'] . $dkey;
                                        $t1 = $dtvalue['timing1'];
                                        $t2 = $dtvalue['timing2'];

                                        $cnt1 = array_search($t1, $timeslot);
                                        $cnt2 = array_search($t2, $timeslot);
                                        ?>
                                        <div class="form-group tab-pane " ng-if="dateselection<?php echo $value['id']; ?> == '<?php echo $dtvalue['date']; ?>'" style="font-color:#dd0101">
                                            <label for="select_time">Available Time</label> 
                                            <select class="form-control" style="padding:1px;"  name="select_time" id="select_time" style="" required />
                                            <?php
                                            for ($tm = $cnt1; $tm < $cnt2 + 1; $tm++) {
                                                $time1 = $timeslot[$tm];
                                                echo "<option >$time1</option>";
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    ?>


                                    <label for="select_date">Available Date</label> 
                                    <select class="form-control" style="padding:1px;"  name="select_date" id="dateselection" style="" required ng-model="dateselection<?php echo $value['id']; ?>"  ng-init="dateselection<?php echo $value['id']; ?> = '<?php echo $value['dates'][0]['date']; ?>'" >

                                        <?php
                                        $dataes = $value['dates'];
                                        foreach ($dataes as $dkey => $dvalue) {
                                            $dateid = $value['id'] . $dkey;
                                            ?>    
                                            <option  value="<?php echo $dvalue['date']; ?>"><?php echo $dvalue['date']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="col-md-4" >
                                <div class="form-group" style="font-color:#dd0101">

                                    <label for="select_date">Referral</label> 

                                    <select class="form-control" style="padding:1px;"  name="referral" id="select_time" style="" required >
                                        <option value="">Select</option>
                                        <option value="Newspaper">Newspaper</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="E-Newsletter">E-Newsletter</option>
                                        <option value="Online Search">Online Search</option>
                                        <option value="Word of Mouth">Word of Mouth</option>
                                        <option value="Paper Flier">Paper Flier</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="I am a Repeat Customer">I am a Repeat Customer</option>
                                        <option value="Other">Other</option>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <!--                    <div class="row" style="    border-bottom: 1px solid #E5E5E5;">
                                                <div class="col-md-12" >
                                                    <label for="first_name">Address</label> <br>
                                                    <textarea name="address" class="form-control"  rows="1" cols="27" style="height: 94px !important;"></textarea>
                                                </div>
                                            </div>-->



                        <div style="clear:both"></div>
                    </div>









                    <div class = "modal-footer">


                        <button type = "submit" name="submit" class="btn btn-inverse"  >
                            Book Appointment
                        </button>
                        <button type = "button"  class = " btn btn-inverse btn-xm" data-dismiss = "modal" aria-hidden = "true">

                            <i class="fa fa-close"></i>

                        </button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <?php
}
?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
    #ui-datepicker-div{
        z-index: 200000!important;
    }
    .timeing_open {
        width: 70px;
        float: left;
    }
    .appointmentheader{
        font-size: 20px;
        border-bottom-style: dotted;
        border-bottom: 1px solid #000;
        margin-bottom: 10px;
        padding-bottom: 10px;
        /* border-style: dotted; */
        border-bottom-style: dotted;
        font-weight: 500;
    }
    .appointmentfooter{
        padding: 5px 0px;
        border-bottom: 1px solid;
        margin-bottom: 10px;
        border-bottom-style: dotted;
    }

    .form-control{
        height: auto;
    }
</style>

<!-- Slider -->
<div id="page-menu" class="no-sticky">

    <div id="page-menu-wrap" style="    background-color: #333333;">

        <div class="container clearfix">

            <div class="menu-title">Book An Appointment</div>



        </div>

    </div>

</div>
<div class=" clearfix" style="
     background: url(<?php echo base_url(); ?>assets/images/usaback.png);
     background-size: cover;  
     background-repeat: no-repeat;
     background-position: center;
     height: 200px;
     padding: 10px;color:black;
     margin-bottom: 15px;">

    <div class="col_full">

        <div class="heading-block center nobottomborder">
            <h2 class="m_t_30">Get Fitted for Bespoke Suit</h2>
            <span style="color:black;">We are ready to schedule the available appointment for you in your city.</span>
            <p style="    margin-top: 15px;
               font-size: 20px;">
                Contact Call/WhatsApp U.S.A Mobile no. +(1) 415-309-6758.<br/>

            </p>
        </div>


    </div>

</div>
<div >
    <!-- Inner Page Banner Area Start Here -->


    <!-- Inner Page Banner Area End Here -->
    <!-- Contact Us Page Area Start Here -->
    <!-- Single Blog Page Area Start Here -->
    <div class="single-blog-page-area" style="padding: 0px 0 0px;background: url(<?php echo base_url(); ?>assets/theme2/img/mapback.png);background-size: contain;">


        <div class="container contact-us-page-area" style="">


            <!--global appointment-->
            <div class=""  style="border-bottom: 2px solid;    background: #ffffffb8; ">


                <div style="width:100%;">

                    <!-- Nav tabs -->



                    <!-- Tab panes -->
                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane contact-us-right active" id="usa_appointment" style="color: black;">
                            <?php
                            if (count($appointmentdatausa)) {
                                ?>



                                <div class="row appointmentheader hideonmobile">
                                    <div class="col-md-1">
                                        Country
                                    </div>
                                    <div class="col-md-2">
                                        City/State
                                    </div>
                                    <div class="col-md-3">
                                        Hotel Name & Address
                                    </div>
                                    <div class="col-md-3">
                                        From Date - To Date
                                    </div>
                                    <div class="col-md-2">


                                    </div>
                                </div>

                                <?php
                                foreach ($appointmentdatausa as $key => $value) {
                                    ?>
                                    <div class="row appointmentfooter">
                                        <div class="col-md-1 hideonmobile"> <?php echo $value['country']; ?></div>
                                        <div class="col-md-2 hideonmobile" style="    text-transform: uppercase;"><?php echo ucfirst(strtolower($value['city_state'])); ?></div>
                                        <div class="col-md-3">
                                            <b>
                                                <i class="fa fa-building-o"></i>
                                                <span style="line-height: 14px;"> <?php echo $value['hotel']; ?></span>
                                            </b>
                                            <br/>
                                            <small>
                                                <?php echo $value['address']; ?>
                                                <div class="showonmobile" style="    text-transform: uppercase;">
                                                    <?php echo ucfirst(strtolower($value['city_state'])); ?>,  <?php echo $value['country']; ?>
                                                </div>
                                            </small>
                                        </div>
                                        <div class="col-md-3">
                                            <i class="fa fa-calendar"></i>

                                            <b><?php
                                                echo $value["days"];
                                                //$date1 = date_create($value['start_date']);
                                                // echo date_format($date1, "j<\s\u\p>S</\s\u\p>   F");
                                                ?></b>
                                            <br/><ul style="    margin-bottom: 0px;margin-top: 10px;    font-size: 11px;    padding: 0px 14px;">






                                                <?php
                                                $dataes = $value['dates'];
                                                foreach ($dataes as $dtkey1 => $dtvalue1) {
                                                    echo "<li>";


                                                    echo '<span class = "timeing_open" style="    width: 100px;">' . date_format(date_create($dtvalue1['date']), "d F Y") . "</span>: " . $dtvalue1['timing1'] . " to " . $dtvalue1['timing2'] . "<br/>";

                                                    echo "</li>";
                                                }
                                                ?>
                                            </ul>


                                            <br/>

                                            <button class="btn btn-default " style="margin: 10px 0px;" data-toggle="modal" data-target="#<?php echo $value['id']; ?>">Book Now</button>
                                            <?php
                                            createModel($value, $dtvalue1);
                                            ?>
                                        </div>
                                        <div class="col-md-2">
                                            <span style="    line-height: 15px;
                                                  padding: 0px 0px 10px;    color: #dd0101;
                                                  float: left;">
                                                <i class="fa fa-phone-square"></i>  <?php echo $value['contact_no']; ?>
                                            </span>
                                            <iframe  frameborder='0' scrolling='no'  marginheight='0' marginwidth='0'  height="100px" width="300px"  src="https://maps.google.com/?q=<?php echo $value['hotel']; ?>+<?php echo $value['address']; ?>&output=embed">
                                            </iframe>  
                                        </div>

                                    </div>
                                    <?php
                                }
                                ?>

                                <?php
                            } else {
                                ?>
                                <h5 class="text-center" style="width: 100%;margin-bottom: 20px">Coming Soon....</h5>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>





                <!--                <div class="contact-us-right" ng-if="appointmentData.length == 0">
                
                                    <h2 class="title-sidebar text-center" style="margin: 30px;padding-bottom:  30px;border-bottom: 1px dotted ">Global Appointment</h2>
                
                                    <p class="text-center" style="font-size: 20px;">Coming Soon</p>
                
                                </div>-->

            </div>
        </div>
    </div>
    <!-- Single Blog Page Area End Here -->
    <!-- Contact Us Page Area End Here -->




</div>

<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>
<script>
                                        $(document).ready(function () {
                                            $("#appintmentDate").datepicker({
                                                minDate: 0,
                                                dateFormat: "yy-mm-dd"
                                            });
                                            $.datepicker.parseDate("yy-mm-dd", "<?php echo date('Y-m-d'); ?>");
                                            $('#dateselection').on('change', function (e) {
                                                var $optionSelected = $("option:selected", this);
                                                console.log(this);
                                                $optionSelected.tab('show')
                                            });
                                        });

</script>

<?php
$this->load->view('layout/footer');
?>