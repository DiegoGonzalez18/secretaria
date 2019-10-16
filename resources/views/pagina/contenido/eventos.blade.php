
<div style="background-color: #e8e8e8; ">
    <div class="container content-prin profile">
        <div class="row margin-top-10">
            <div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
                <h1 style="font-size: 30px;"><b>Eventos</b></h1>
                <span class="bordered-icon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
            </div>
            <div class="col-md-12">
                <div class="row equal-height-columns margin-bottom-10">

                    <div class="container">
                        <div class="owl-carousel-v1 owl-work-v1 margin-bottom-40">
                            <div class="owl-recent-works-v1">


                                @for($i = 0; $i <$e; $i++)
                                <div class='owl-item' style='width: 313px;'>
                                    <div class='item'>
                                    <a href="/info/{{$eventos[$i]['id']}}" class="ayuda" id="{{$eventos[$i]['id']}}" style='text-align: center;'>
                                          <div class='easy-block-v1-badge rgba-red'
                                          style='color:#fff; padding: 5px;'>
                                "{{$eventos[$i]['Fecha']}}"
                               </div>
                                <em class='overflow-hidden'>
                                <img class='img-responsive' src="{{$eventos[$i]['url']}}" alt='Imagen de eventos'>
                                </em>
                                <span>
                                <strong>{{$eventos[$i]['Titulo']}} </strong>
                                <i>Lugar:{{$eventos[$i]['lugar']}}</i>
                                </span>
                                </a>
                                </div></div>
                                @endfor



                            </div>

                            <div class="headline">
                                <div class="owl-navigation">
                                    <div class="customNavigation">
                                        <a class="owl-btn prev-v2"><i class="fa fa-angle-left"></i></a>
                                        <a class="owl-btn next-v2"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!--/navigation-->
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
