<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Order No#</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            table, tr, td, th{
                    border: none;
            }
            
            .carttable{
                 
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
          background: white;;
          font-family: sans-serif;">
        <div class="" style="padding:50px 0px;border: 5px solid;
    border-color: #000;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="background: #fff;padding: 0 20px">
                <tr>
                    <td >
                        <center><img src="<?php echo site_mail_logo; ?> " style="margin: 10px;
                                     height: 100px;
                                     width: auto;"/><br/>
                            <h4 style="color: rgb(147, 71, 223);"> Welcome</h4>
                        </center>
                    </td>

                </tr>

            </table>

            <table class="carttable"  border-color= "#000" align="center" border="1" cellpadding="0" cellspacing="0" width="700" style="background: #fff;padding:20px">



                <tr>
                    <td colspan="6" style="font-size: 12px;">

                        <p>Dear <?php echo $customer->first_name; ?> <?php echo $customer->last_name; ?>,</p><br/>

                        <p> Thank you for registering your online <?php echo site_name;?> account from <?php echo $customer->country; ?>. </p>
                        <p>You will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more. </p> 
                        <p>Your Login Credentials: </p>
                        <table style="        margin-top: 12px;
    border: 3px solid #000;
    width: 100%;
    text-align: center;
    background: #fff;
    color: white;
    border-radius: 61px;">
                            <tr>
                                <td style="    font-size: 20px;">
                                    <span style="color: #779df6">Username/Email</span>
                                    <br/>
                                    <b style="color: #000"><?php echo $customer->email; ?></b>
                                </td>
                            </tr>
                            <tr>
                                <td style="    font-size: 20px;">
                                    <span style="color: #779df6">Password</span>

                                    <br/>
                                    <b style="color: #000"><?php echo $customer->password2; ?></b>
                                </td>
                            </tr>
                        </table>
                        <p>


                        </p>


                        <br/>
                            <div style="height: 200px;margin-top: 30px;">Kindest Regards,<br />
                            <img src="<?php echo site_mail_logo; ?>" style="height: 30px;  margin: 5px 0px 10px ;"><br/>
                                <span style="float: left; font-size: 12px;">

                                 
                                </span>
                        </div>

                    </td>
                </tr>

            </table>

        </div>
    </body>
</html>