{{-----------------------------------}}
@php
    $lang = session('lang');

    if (empty (session('lang')))
    {
    $lang ='ar';
    }
 @endphp
{{-----------------------------------}}
<!-- =================start  sectionPackage ==================== -->
<!----------------start  section title---------------------->
<section class=" title"  id="">
    <div class="container ">
        <div class="section-header text-center">
            <h2 class="h2-section-title">
                {{trans('admin.prices')}}


            </h2>

            <div class="line">
            </div><!--/.heazder-->
            <span class="span-border"></span>
        </div><!--/.cont div-title-->
    </div><!--/.line-->
</section><!--/.sec-title-->

<!----------------End section title------------------------->
<section id="Package" class="prices generic" >
    <div class="container-fluid custom_new " >
        <div class="row" >
            <p class="article_title">
 <!--{{trans('admin.heade_section_price')}}-->
            </p>
            <aside class="asid-title-price" style="font-size: 22px">
                <div class="prograss_bar">
                    <button class="pull-left btn-danger price-minus" style="font-size: 22px"><i class="fa fa-minus"></i></button>
                    <span class="text-center price_value text-mins" >{{trans('admin.30MINS')}}</span>
                    <button class="pull-right btn-success price-plus" style="font-size: 22px"><i class="fa fa-plus"></i></button>
                </div>
            </aside>
            <hr>
            <div class="row  half-an-hour" style="width: 100%;">
                @foreach($halfhour as $half)
                    <div class="col-sm-6 col-lg-3">
                        <div class="superduper">
                            <div class="price-package">
                                <div class="package-name">
                                    <h2>
                                       {{$half['head_'.$lang]}}                                    
                                    </h2>
                                    

                                </div>
                                <div class="package-price">
                                    <div class="package-arrow"></div>
                                    <div class="price">
                                        <span >{{$half->number}} </span>
                                    </div>
                                        <div class="term">
                                        <sup></sup>
                                        <span class="line-through"   >{{$half->dateshow_en}}</span>
                                    </div>
                                    <div class="package-features">
                                        <div class="package-arrow back-too"></div>
                                        <ul>  
                                            <?php  $str =$half['content_'.$lang] ?>
                                            <?php
                                            $arr = explode("," , $str);
                                            for ($i = 0; $i < count($arr); $i ++) {
                                                echo   '<li><em>'. $arr[$i] .'</em></li>';
                                            }?>    
                                            <li style="    padding: 0px 19px;"><em>{{$half['descount3_'.$lang]}} 
                                                    <span >(<span class="color_ffcc00">{{$half->percentage3}}</span>)</span></em>
                                            </li>
                                            <!--  ------------->
                                            <li style="    padding: 0px 19px;"><em>{{$half['descount6_'.$lang]}}
                                                    <span >(<span class="color_ffcc00">{{$half->percentage6}}</span>)</span></em>
                                            </li>
                                            <!--  ------------->
                                            <li style="    padding: 0px 19px;"><em>{{$half['descount12_'.$lang]}}
                                                    <span >(<span class="color_ffcc00">{{$half->percentage12}}</span>)</span></em>
                                            </li>
                                            <!--  ------------->
                                        </ul>
                                        <button class="sign-up">
                                            <a href="student" class="a-color-whathe"> <h3>  {{trans('admin.signup_now')}} </h3></a>
                                        </button>
                                    </div><!--package-features-->
                                </div><!--package-price-->
                            </div><!--price-package-->
                        </div><!--superduper-->
                    </div><!--col-->
                @endforeach
            </div> <!-- half-an-hour-->
            <div class="row one-hour" style="width: 100%;  display: none;">
                @foreach($hour as $ho)
                    <div class="col-sm-6 col-lg-3">
                        <div class="superduper">
                            <div class="price-package" style="   ">
                                <style>
                                   .price-package ,.superduper .price-package .package-price .package-arrow,.superduper .price-package .sign-up{
                                         color:#fff;
                                        background-image: url({{url('default/testimonial.gif')}})!important;
                                    }


                                </style>
                                <div class="package-name">
                                    <h2>{{$ho->head_en}}</h2>
                                </div>
                                <div class="package-price">
                                    <div class="package-arrow"></div>
                                    <div class="price">
                                        <span>{{$ho->number}}</span>
                                    </div>
                                    <div class="term">
                                        <sup></sup>
                                        <span class="line-through">{{$ho->dateshow_en}}</span>

                                    </div>
                                    <div class="package-features">
                                        <div class="package-arrow"></div>
                                        <ul>
                                            <?php  $str =$ho->content_en ?>
                                            <?php
                                            $arr = explode("," , $str);
                                            for ($i = 0; $i < count($arr); $i ++) {
                                                echo   '<li><em>'. $arr[$i] .'</em></li>';
                                            }?>
                                            <li class=" "><em>{{$ho['descount3_'.$lang]}}
                                                    <span >(<span class="color_ffcc00">{{$ho->percentage3}}</span>)</span></em>
                                            </li>
                                            <!--  ------------->
                                            <li class=" "><em>{{$ho['descount6_'.$lang]}}
                                                    <span >(<span class="color_ffcc00">{{$ho->percentage6}}</span>)</span></em>
                                            </li>
                                            <!--  ------------->
                                            <li class=" "><em>{{$ho['descount12_'.$lang]}}
                                                    <span >(<span class="color_ffcc00">{{$ho->percentage12}}</span>)</span></em>
                                            </li>
                                            <!--  ------------->
                                        </ul>
                                        <button class="sign-up">
                                            <a href="student" class="a-color-whathe"> <h3>{{trans('admin.signup_now')}}</h3></a>

                                        </button>
                                    </div><!--package-features-->
                                </div><!--package-price-->
                            </div><!--price-package-->
                        </div><!--superduper-->
                    </div><!--col-->
                @endforeach
            </div> <!--one-hour-->
        </div><!-- row" -->
    </div><!--  container -->
</section>
<!--=========================End  section  hour =================-->

