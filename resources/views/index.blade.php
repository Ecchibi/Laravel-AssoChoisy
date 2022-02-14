@extends('squelette/app')
@section('contenu1')



<!---------------------------------- BANNIERE ---------------------------->
<!-- slider_area_start -->
<div class="slider_area">
      <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
          <div class="container">
              <div class="row">
                  <div class="col-lg-9">
                      <div class="slider_text ">
                          <span>Get Started Today.</span>
                          <h3> Bienvenue
                             
                              RÉSIDENTS DES
                              HAUTES-BORNES</h3>
                          <p>With so much to consume and such little time, coming up <br>
                              with relevant title ideas is essential</p>
                          <a href="About.html" class="boxed-btn3">Learn More
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
              <a class="button1" href="#ancre1"> 
                  <img src="https://www.wwf.fr/themes/custom/wwf_main_theme/components/page-cover/images/scroll-icon.svg" alt=""> 
              </a>
  <!-- slider_area_end -->
  @endsection



  @section('contenu2')
  {{-- -----------------------------  vu_articleVideo  ----------------------------}}
  {{--  latest_activites_area_start  --}}
 <div class="latest_activites_area"  id="ancre1" >
        <div class=" video_bg_1 video_activite  d-flex align-items-center justify-content-center">
            <a class="popup-video" href="https://www.youtube.com/watch?v=DdovEinT0mo">  {{-- juste changer apres le v= --}}
                <i class="flaticon-ui"></i>
            </a>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="activites_info">
                        <div class="section_title">
                            <h3> <span>Admirer le ciel  </span><br>
                                Activité</h3>
                        </div>
            {{-- a changer ↓ --}}
                  
                        <p class="para_2"> Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do 
                            eiusmod tempor incididunt  ut labore dolore magna aliqua. 
                        </p>

                        <a href="#" data-scroll-nav='1' class="boxed-btn4">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     {{--  latest_activites_area_end  --}}
    @endsection

    @section('contenu3')
    <!-- reson_area_start  -->
    <div class="reson_area section_padding">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                      <div class="section_title text-center mb-55">
                          <h3><span>Reason of Helping</span></h3>
                      </div>
                  </div>
              </div>
              <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-6">
                      <div class="single_reson">
                          <div class="thum">
                              <div class="thum_1">
                                  <img src="img/help/1.png" alt="">
                              </div>
                          </div>
                          <div class="help_content">
                              <h4>Astronomie</h4>
                              <p>Lorem ipsum, or lipsum as it is 
                                  sometimes known, is dummy 
                                  text used in laying out print.</p>
                              <a href="#" class="read_more">Read More</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="single_reson">
                          <div class="thum">
                              <div class="thum_1">
                                  <img src="img/help/2.png" alt="">
                              </div>
                          </div>
                          <div class="help_content">
                              <h4>Jardin-Partager</h4>
                              <p>Lorem ipsum, or lipsum as it is 
                                  sometimes known, is dummy 
                                  text used in laying out print.</p>
                              <a href="#" class="read_more">Read More</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="single_reson">
                          <div class="thum">
                              <div class="thum_1">
                                  <img src="img/help/3.png" alt="">
                              </div>
                          </div>
                          <div class="help_content">
                              <h4>Evenements</h4>
                              <p>Lorem ipsum, or lipsum as it is 
                                  sometimes known, is dummy 
                                  text used in laying out print.</p>
                              <a href="#" class="read_more">Read More</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- reson_area_end  -->
      @endsection