<?php
$this->load->view('layout/header');

$clients = [
    array(
        "style_no" => "902",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/2.jpg",
    ),
    array(
        "style_no" => "903",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/3.jpg",
    ),
    array(
        "style_no" => "904",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/4.jpg",
    ),
    array(
        "style_no" => "905",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/5.jpg",
    ),
    array(
        "style_no" => "906",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/1.jpg",
    ),
    array(
        "style_no" => "907",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/2.jpg",
    ),
    array(
        "style_no" => "908",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/3.jpg",
    ),
    array(
        "style_no" => "909",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/4.jpg",
    ),
    array(
        "style_no" => "910",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/5.jpg",
    )
];
?>

<section class="page_title translucent_bg_color_dark image_fixed t_align_c relative wrapper" style="margin-top: 0px;padding: 0px;">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5" style="    font-size: 22px;
            line-height: 25px;">Look Book</h1>
        <!--breadcrumbs-->

    </div>
</section>



<?php
$this->load->view('Pages/lookbook_header');
?>


<hr/>

<div class="section_offset" ng-controller="lookBookController">
    <div class="container">
        <div class="content">
            <!--contact-->
            <!--clients area-->
            <div class="latest-w3">
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/GridGallery/css/demo.css" />
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/GridGallery/css/component.css" />

                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/modernizr.custom.js"></script>

                <div id="grid-gallery" class="grid-gallery" style="    margin-top: 2em;">
                    <section class="grid-wrap">
                        <ul class="grid">
                            <li class="grid-sizer"></li><!-- for Masonry column width -->


                            <li style="    padding: 10px;" ng-repeat="style in styleArray.style_list">
                                <div class="panel panel-default" style="border:none;margin: 0px;">
                                    <div class="panel-body" style="    padding: 5px;">
                                        <div class="thumbnail lookbook_thumb" >
                                            <img src="<?php echo base_url(); ?>assets/lookbook/{{style['image']}}" alt="img01" style=""/>
                                            <p class="lookbook_subtitle">
                                                Style#: {{style['style_no']}}
                                            </p>
                                            <h3 class="lookbook_title">{{style['title']}}</h3>
                                            <p class="lookbook_subtitle">
                                                {{style['description']}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>



                        </ul>
                        <div style="clear:both"></div>
                    </section><!-- // grid-wrap -->
                    <section class="slideshow" >
                        <ul>


                            <li ng-repeat="style in styleArray.style_list">
                                <div class="panel panel-default" style="background: none;border:none;">
                                    <div class="panel-body" style="background: white;">
                                        <div class="thumbnail " style="background: none;border:none">
                                            <?php
                                            if ($checklogin) {
                                                ?>
                                                <img src="<?php echo base_url(); ?>assets/lookbook/{{style['image']}}" alt="img01"  style="    height:250px;"/>
                                                <p class="lookbook_subtitle">
                                                    Style#: {{style['style_no']}}
                                                </p>
                                                <h3 class="lookbook_title">

                                                    <input type="text" class="form-control" value="{{style['title']}}" ng-model="style['title']">
                                                </h3>
                                                <p class="lookbook_subtitle">

                                                    <input type="text" class="form-control" value="{{style['description']}}" ng-model="style['description']">
                                                </p>
                                                <br/>
                                                <center>
                                                    <button class="btn btn-default color_black btn-sm "  ng-click="changeStyle(style)">Update</button>
                                                </center>
                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>assets/lookbook/{{style['image']}}" alt="img01"  style="    height:450px;"/>
                                                <p class="lookbook_subtitle">
                                                    Style#: {{style['style_no']}}
                                                </p>
                                                <h3 class="lookbook_title">{{style['title']}}</h3>
                                                <p class="lookbook_subtitle">
                                                    {{style['description']}}
                                                </p>
                                                <br/>
                                                <center>
                                                    <button class="btn btn-default color_black btn-sm " data-toggle="modal" data-target="#styleEnquiryModal" ng-click="addToPriceEnquery(style)">Add To Enquiry</button>
                                                </center>

                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </li>


                        </ul>

                        <nav>
                            <span class="icon nav-prev"></span>
                            <span class="icon nav-next"></span>
                            <span class="icon nav-close"></span>
                        </nav>

                    </section><!-- // slideshow -->
                </div><!-- // grid-gallery -->


                <!-- // grid-gallery -->
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/imagesloaded.pkgd.min.js"></script>
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/masonry.pkgd.min.js"></script>
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/classie.js"></script>
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/cbpGridGallery.js"></script>
                <script>
                </script>
            </div>
            <!--end of client area-->
            <!--contact-->
        </div>
    </div>

    <div class="modal fade" id="styleEnquiryModal" tabindex="-1" role="dialog" aria-labelledby="styleEnquiryModal">
        <div class="modal-dialog" role="document">
            <form action="#" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Style Enquiry</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6 col-md-4" ng-repeat="(key, style) in styleArray.enquery_list">
                                <input type="hidden" name="style_no[]" value="{{style.style_no}}">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/lookbook/{{style['image']}}" alt="..." style="height:150px ">
                                    <div class="caption">
                                        <p class="textoverflow text-center" style="font-size: 12px">{{style.style_no}}</p>

                                        <h3 class="lookbook_title text-center textoverflow" style="font-size: 15px">{{style.title}}</h3>
                                        <p class="textoverflow text-center" style="font-size: 12px">{{style.description}}</p>
                                        <p>
                                            <button ng-click="removeStyeElement(style.style_no)" class="btn btn-danger btn-sm" role="button">Remove</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li class="m_bottom_10">
                                <input type="text" name="name" placeholder="Name*" class="w_full r_corners fw_light" required="">
                            </li>  
                            <li class="m_bottom_10">
                                <input type="email" name="email" placeholder="Email*" class="w_full r_corners fw_light" required="">
                            </li>
                            <li class="m_bottom_10">
                                <input type="tel" name="contact" placeholder="Contact No." class="w_full r_corners fw_light">
                            </li>
                            <li class="m_bottom_10">
                                <textarea name="message" placeholder="Message" class="w_full r_corners fw_light" style="height: 100px"></textarea>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>

<script>

    App.controller('lookBookController', function ($scope, $http, $timeout, $interval) {
        $scope.styleArray = {"title": "", "loading": 1, "style_list": [], "enquery_list": {}};
        var url = baseurl + "Api/getStyleGallary/<?php echo $active_block; ?>";
        $http.get(url).then(function (rdata) {
            $scope.styleArray.style_list = rdata.data;
            $timeout(function () {
                $scope.girdgallary = new CBPGridGallery(document.getElementById('grid-gallery'));
            }, 500)
        }, function () {

        })


        $scope.changeStyle = function (styleobj) {
            console.log($scope.girdgallary)
            $scope.girdgallary._closeSlideshow();
            var url = baseurl + "Api/setStyleData";
            var form = new FormData()
            form.append('id', styleobj.id);
            form.append('title', styleobj.title);
            form.append('description', styleobj.description);
            $http.post(url, form).then(function (rdata) {
             
            }, function () {

            })
        }

        $scope.addToPriceEnquery = function (styleobj) {
            var url = baseurl + "Api/setStyleEnquiry";
            var form = new FormData()
            form.append('image', styleobj.image);
            form.append('style_no', styleobj.style_no);
            form.append('title', styleobj.title);
            form.append('short_description', styleobj.short_description);
            $http.post(url, form).then(function (rdata) {
                $scope.styleArray.enquery_list = rdata.data;
            }, function () {

            })
        }


        $scope.removeStyeElement = function (style_no) {
            delete $scope.styleArray.enquery_list[style_no];
            var url = baseurl + "Api/removeStyleEnquiry";
            var form = new FormData()
            form.append('style_no', style_no);
            $http.post(url, form).then(function (rdata) {
                //$scope.styleArray.enquery_list = rdata.data;
            }, function () {

            })
        }



    })

</script>

<?php
$this->load->view('layout/footer');
?>