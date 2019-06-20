<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Order No#</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            .carttable{
                border-color: #fff;
            }

            .carttable td{
                padding: 5px 10px;
                border-color: #9E9E9E;
            }
            .carttable tr{
                /*padding: 0 10px;*/
                border-color: #9E9E9E;
                font-size: 12px
            }

            .detailstable td{
                padding:10px 20px;
            }

            .gn_table td{
                padding:3px 0px;
            }
            .gn_table th{
                padding:3px 0px;
                text-align: left;

            }
            .style_block{
                float: left;
                padding: 1px 1px;
                margin: 2.5px;
                /* background: #000; */
                color: white;
                border: 1px solid #e4e4e4;
                width: 47%;
                font-size: 10px;
            }

            .style_block span {
                background: #fff;
                margin-left: 5px;
                color: #000;
                padding: 0px 5px;
                width: 50%;
            }
            .style_block b {
                width: 46%;
                float: left;
                background: #dedede;
                color: black;
            }
        </style>
    </head>

    <body style="margin: 0;
          padding: 0;
          background: rgb(225, 225, 225);
          font-family: sans-serif;">
        <div class="" style="padding:50px 0px">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="background: #fff;padding: 0 20px">
                <tr>
                    <td >
                        <center><img src="<?php echo site_mail_logo; ?>" style="margin: 10px;
                                     height: 80px;
                                     width: auto;"/><br/>
                            <h4 style="color: black;    margin-top: 0px;"> Your Appointment Has Been Booked <br>
                                    <?php
                                    if ($appointment['country'] == 'Hong Kong') {
                                        $appointmentdater = $appointment['select_date'];
                                        $appointmentdate = explode("T", $appointmentdater)[0];
                                        $appointmentdate = str_replace('"', "", $appointmentdate);
                                        $appointment['select_date'] = $appointmentdate;
                                        ?>
                                        <small>
                                            Appointment Date & Time: <?php echo date_format(date_create($appointmentdate . ' ' . $appointment['select_time']), "l, d F Y"); ?> (<?php echo $appointment['select_time']; ?>)
                                        </small>
                                        <?php
                                    } else {
                                        ?>
                                        <small>
                                            Appointment Date & Time: <?php echo date_format(date_create($appointment['select_date'] . ' ' . $appointment['select_time']), "l, d F Y"); ?> (<?php echo $appointment['select_time']; ?>)
                                        </small>
                                        <?php
                                    }
                                    ?>
                            </h4>
                        </center>
                    </td>

                </tr>

            </table>

            <table class="carttable"  border-color= "#9E9E9E" align="center" border="1" cellpadding="0" cellspacing="0" width="700" style="background: #fff;padding:20px">

                <tr>
                    <th style="background: lightgray;text-align: right;width:200px;padding-right: 10px;">Name</th>
                    <td><?php echo $appointment['first_name']; ?></td>
                </tr>
                <tr>
                    <th style="background: lightgray;text-align: right;width:200px;padding-right: 10px;">Email</th>
                    <td><?php echo $appointment['email']; ?></td>
                </tr>
                <tr>
                    <th style="background: lightgray;text-align: right;width:200px;padding-right: 10px;">Contact No.</th>
                    <td><?php echo $appointment['contact_no']; ?></td>
                </tr>
                <tr>
                    <th style="background: lightgray;text-align: right;width:200px;padding-right: 10px;">Country</th>
                    <td><?php echo $appointment['country']; ?></td>
                </tr>

                <?php
                if ($appointment['country'] == 'Hong Kong') {
                    $appointmentdater = $appointment['select_date'];
                    ?>

                    <tr>
                        <th style="background: lightgray;text-align: right;width:200px;padding-right: 10px;">Location</th>
                        <td><?php echo $appointment['address']; ?></td>
                    </tr>
                    <?php
                } else {
                    ?>
                    <tr>
                        <th style="background: lightgray;text-align: right;width:200px;padding-right: 10px;">State/City</th>
                        <td><?php echo $appointment['city_state']; ?> (<?php echo $appointment['city_days']; ?>)</td>
                    </tr>
                    <tr>
                        <th style="background: lightgray;text-align: right;width:200px;padding-right: 10px;">Hotel Name</th>
                        <td><?php echo $appointment['hotel']; ?></td>
                    </tr>
                    <tr>
                        <th style="background: lightgray;text-align: right;width:200px;padding-right: 10px;">Hotel Address</th>
                        <td><?php echo $appointment['address']; ?></td>
                    </tr>
                    <?php
                }
                ?>

                <tr>
                    <th style="background: lightgray;text-align: right;width:200px;padding-right: 10px;">Date</th>
                    <td><?php echo $appointment['select_date']; ?></td>
                </tr>

                <tr>
                    <th style="background: lightgray;text-align: right;width:200px;padding-right: 10px;">Time</th>
                    <td><?php echo $appointment['select_time']; ?></td>
                </tr>
                <tr>
                    <th style="background: lightgray;text-align: right;width:200px;padding-right: 10px;">Remark</th>
                    <td style="width: 250px"><?php echo $appointment['remark']; ?></td>
                </tr>



            </table>

            <table class="carttable"  align="center" cellpadding="0" cellspacing="0" width="700" style="background: #fff;padding:20px">
                <tr>
                    <td style="text-align: center;color:red;font-weight: bold;">
                        (Note: Please bring your best fitted suit along with you.)
                    </td>
                </tr>
            </table>

            <table class="carttable"  align="center" cellpadding="0" cellspacing="0" width="700" style="background: #fff;padding:20px">

                <tr>
                    <td colspan="6" style="font-size: 12px;padding-top: 50px;">

                        <?php echo EMAIL_FOOTER; ?>
                    </td>
                </tr>
            </table>

        </div>
    </body>
</html>