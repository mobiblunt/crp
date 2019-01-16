@extends('head')

@section('title', 'About')

@section('content')
<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>About us</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="/">Home</a> <i class="icon-angle-right"></i></li>
              
              <li class="active">About us</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">

          <div class="span6">


            <h4>Our Vision</h4>
            <p>
             
Evergrowth is committed to empowering people to invest and trade, with confidence, in an innovative and reliable environment; supported by best-in-class personal service and uncompromising integrity.
            </p>
            

          </div>

          <div class="span6">
            <img src="img/stock.png">
          </div>
        </div>
        <div class="row">
          <div class="span12">
            <div class="solidline"></div>
          </div>
        </div>

        <div class="row">

          <div class="span6">


            <h4>Background</h4>
            <p>
             
Within a few short years, Evergrowth has expanded enormously, with 200,000 registered customers globally executing more than two million trades a month.

The company’s total trading volumes surpass $30 billion per month. Evergrowth’s user-oriented perspective, combined with solid financial backing, is unique in the field of online trading. From its 24-hour multilingual support desks to its broad range of platforms and services, Evergrowth has created the optimal trading environment for every level of trader. Evergrowth’s wide scope includes a full spectrum of trading instruments including Forex, stocks, commodities and indices.

Evergrowth is a multi-national company with regional offices and sales centers in Paris, Dublin, Milan, Tokyo and Sydney. The company’s administrative headquarters are in California, USA.

Whether you are an experienced trader or a novice, Evergrowth’s adaptable trading platforms and services provide you with the right balance of simplicity and sophistication. 

We invite you to join the thousands of traders and affiliates who have chosen Evergrowth as their preferred trading portal.
Click <a href="{{ route('auth.register.form') }}">here</a>  to get started.
            </p>
            

          </div>

          <div class="span6">
            
          </div>
        </div>

        
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline"></div>
          </div>
        </div>
        <!-- end divider -->

        <div class="row team">
          <div class="span12">
            <h4>Nice persons behind Evergrowth</h4>
          </div>

          <div class="span3">
            <div class="team-box">
              <a href="#" class="thumbnail"><img src="img/dummies/image2.jpeg" alt="" /></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>Vincent Austin Jr</strong></p>
                <p>
                  CEO - Founder
                </p>
                <p>
                  <a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
                  <a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
                  <a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
                </p>

              </div>
            </div>
          </div>
          <div class="span3">
            <div class="team-box">
              <a href="#" class="thumbnail"><img src="img/dummies/image1.jpg" alt="" /></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>Tommy Laugher</strong></p>
                <p>
                  Lead Software Engineer
                </p>
                <p>
                  <a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
                  <a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
                  <a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
                </p>
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="team-box">
              <a href="#" class="thumbnail"><img src="img/dummies/image3.jpg" alt="" /></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>Gabirelle Borowski</strong></p>
                <p>
                  Customer support
                </p>
                <p>
                  <a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
                  <a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
                  <a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
                </p>
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="team-box">
              <a href="#" class="thumbnail"><img src="img/dummies/team4.jpg" alt="" /></a>
              <div class="roles aligncenter">
                <p class="lead"><strong>Benny Strongton</strong></p>
                <p>
                  Lead Analyst
                </p>
                <p>
                  <a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
                  <a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
                  <a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

@stop