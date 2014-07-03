<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bootstrap: Dropdown on Hover Plugin Demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="A demo for my simple plugin that enables Bootstrap dropdowns to activate on hover and provide a nice user experience.">
  <meta name="author" content="Cameron Spear">

  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
    body { padding-top: 70px; min-height: 410px }
    .tab-content p { padding: 10px 0; }
  </style>

  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  <header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://cameronspear.com/blog/bootstrap-dropdown-on-hover-plugin/">Plugin Demo</a>
      <div class="navbar-collapse nav-collapse collapse navbar-header">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Dropdown header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">I Have a Submenu <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">Menu Item</a></li>
              <li><a tabindex="-1" href="#">Bootstrap 3 Does Not Support Submenus</a></li>
<!--               
              BOOTSTRAP 3 DOES NOT SUPPORT SUBMENUS: https://github.com/twbs/bootstrap/pull/6342#issuecomment-11594010
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">I Am Said Submenu</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#">Why Would</a></li>
                  <li><a tabindex="-1" href="#">A Home Tab</a></li>
                  <li><a tabindex="-1" href="#">Have Dropdowns?</a></li>
                  <li class="dropdown-submenu">
                    <a href="#">One More Time! <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="#">Menu Item 1</a></li>
                      <li><a tabindex="-1" href="#">Menu Item Blue</a></li>
                    </ul>
                  </li>

                </ul>
              </li>    
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Got Hover Dropdowns?</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#">Why Would</a></li>
                  <li><a tabindex="-1" href="#">A Home Tab</a></li>
                  <li><a tabindex="-1" href="#">Have Dropdowns?</a></li>
                  <li class="dropdown-submenu">
                    <a href="#">One More Time! <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="#">Menu Item 1</a></li>
                      <li><a tabindex="-1" href="#">Menu Item Blue</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
-->
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">My Account</a></li>
              <li class="divider"></li>
              <li><a tabindex="-1" href="#">Change Email</a></li>
              <li><a tabindex="-1" href="#">Change Password</a></li>
              <li class="divider"></li>
              <li><a tabindex="-1" href="#">Logout</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Contact <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">Contact</a></li>
              <li><a tabindex="-1" href="#">Contact My Mom</a></li>
              <li class="divider"></li>
              <li><a tabindex="-1" href="#">Contact Your Mom</a></li>
              <li><a tabindex="-1" href="#">Contact the President</a></li>
            </ul>
          </li>

        </ul>
      </div> <!-- .nav-collapse -->
    </div> <!-- .container -->
  </header> <!-- .navbar -->

  <div class="container">
    <div class="col-12">
      <div class="alert alert-danger">
        <strong>Please note</strong> that Bootstrap 3 <em>does not</em> support submenus. See <a href="https://github.com/twbs/bootstrap/pull/6342#issuecomment-11594010">this comment</a> from one of the original authors.
      </div>

      <h1>Bootstrap: Dropdown on Hover Plugin Demo</h1>
      <p>Hover over the nav items to see that they activate on hover. I'm setting the instantlyCloseOthers flag to true, so when you hover over a new nav item, the other ones instantly close (instead of waiting for their timeouts). See <a href="http://cameronspear.com/blog/bootstrap-dropdown-on-hover-plugin/">cameronspear.com/blog/bootstrap-dropdown-on-hover-plugin/</a> for more.</p>

      <h2><em>New!</em> Try it with data-attributes</h2>

      <div class="btn-toolbar">
        <div class="btn-group">
          <button class="btn dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">1000ms Delay <b class="caret"></b></button>
          <ul class="dropdown-menu">
            <li><a tabindex="-1" href="#">Why Would</a></li>
            <li><a tabindex="-1" href="#">A Home Tab</a></li>
            <li><a tabindex="-1" href="#">Have Dropdowns?</a></li>
          </ul>
        </div>
        <div class="btn-group">
          <button class="btn dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Doesn't Close Others <b class="caret"></b></button>
          <ul class="dropdown-menu">
            <li><a tabindex="-1" href="#">My Account</a></li>
            <li class="divider"></li>
            <li><a tabindex="-1" href="#">Change Email</a></li>
            <li><a tabindex="-1" href="#">Change Password</a></li>
            <li class="divider"></li>
            <li><a tabindex="-1" href="#">Logout</a></li>
          </ul>
        </div>
        <div class="btn-group">
          <button class="btn dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Defaults <b class="caret"></b></button>
          <ul class="dropdown-menu">
            <li><a tabindex="-1" href="#">Contact</a></li>
            <li><a tabindex="-1" href="#">Contact My Mom</a></li>
            <li class="divider"></li>
            <li><a tabindex="-1" href="#">Contact Your Mom</a></li>
            <li><a tabindex="-1" href="#">Contact the President</a></li>
          </ul>
        </div>
      </div>

      <h3>It also works with buttons and tabs</h3>
      <p>Just add <code>data-hover="dropdown"</code> where you'd put <code>data-toggle="dropdown"</code></p>

      <div class="btn-toolbar">
        <div class="btn-group">
          <button class="btn dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Button <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div> <!-- .btn-group -->
        <div class="btn-group">
          <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Primary <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div> <!-- .btn-group -->
        <div class="btn-group">
          <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Danger <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div> <!-- .btn-group -->
        <div class="btn-group">
          <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Warning <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div> <!-- .btn-group -->
        <div class="btn-group">
          <button class="btn btn-success dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Success <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div> <!-- .btn-group -->
        <div class="btn-group">
          <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Info <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div> <!-- .btn-group -->
        <div class="btn-group">
          <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Default <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div> <!-- .btn-group -->
      </div> <!-- .btn-toolbar -->

      <h3>Works with button groups</h3>
      <p>This was trickier than you might think!</p>

      <div class="btn-group">
        <button type="button" class="btn btn-default">1</button>
        <button type="button" class="btn btn-default">2</button>
        <button type="button" class="btn btn-default">3</button>

        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            Dropdown
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">Dropdown link</a></li>
            <li><a href="#">Dropdown link</a></li>
            <li><a href="#">Dropdown link</a></li>
           </ul>
        </div>
      </div>

      <div style="height: 30px" class="being-lazy"></div>

      <div class="tabs-example">
        <ul id="myTab" class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
          <li><a href="#profile" data-toggle="tab">Profile</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#dropdown1" data-toggle="tab">@fat</a></li>
              <li><a href="#dropdown2" data-toggle="tab">@mdo</a></li>
            </ul>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade in active" id="home">
            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
          </div>
          <div class="tab-pane fade" id="profile">
            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
          </div>
          <div class="tab-pane fade" id="dropdown1">
            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
          </div>
          <div class="tab-pane fade" id="dropdown2">
            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
          </div>
        </div>
      </div> <!-- .tabs-example -->
    </div> <!-- .span12 -->
  </div> <!-- .container -->

  <!-- latest jQuery, Boostrap JS and hover dropdown plugin -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="bootstrap-hover-dropdown.js"></script>

  <script>
    // very simple to use!
    $(document).ready(function() {
      $('.js-activated').dropdownHover().dropdown();
    });
  </script>

</body>
</html>