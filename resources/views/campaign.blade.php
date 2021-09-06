  @extends('layouts.app')

  @section('title')

      FillTheTill   campaign
      @stop

  @section('content')

      <section>
          <div class="block">
              <div class="container">
                  <div class="row">
                      <div class="col-12">
                          <div class="team-detail">
                              <div class="abt-img"><img src="{{Voyager::image(setting('campaign.image'))}}" width="500px" height="1000px" alt="" /></div>
                              <div class="team-detail-text">
                                  <h1>FillTHETILL</h1>
                                  <span>{{setting('campaign.title')}}</span><Br>
                                  <div class="round-socials">
                                      <a class="facebook" href="{{setting('social.facebook')}}" title=""><i class="fa fa-facebook"></i></a>
                                      <a class="twitter" href="{{setting('social.Instagram')}}" title=""><i class="fa fa-twitter"></i></a>
                                      <a class="linkedin" href="{{setting('social.linkedin')}}" title=""><i class="fa fa-linkedin"></i></a>
                                  </div>

                                  <div style="float: left!important;">
                              {!! setting('campaign.description') !!}
                                  </div>
                              </div>
                          </div><!-- Team Detail -->
                      </div>
                  </div>
              </div>
          </div>
      </section>


  @stop


