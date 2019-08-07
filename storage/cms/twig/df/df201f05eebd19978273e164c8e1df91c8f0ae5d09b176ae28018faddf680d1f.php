<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\wamp64\www\install-master1/themes/demo/layouts/description_event.htm */
class __TwigTemplate_fcec50c19a9f040fe16fc721119e2f09ce3a52ebbeb6c4f0d9c60769b0bddca1 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
       <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

    <meta name=\"csrf-token\" content=\"5ifU7niyjh0byubCovg0kvgPryLEh51pgOvWgabI\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title> eTicket | Event Details  </title>
    <!-- favicon -->
     <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/interfaceControl/logoIcon/icon.jpg");
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap -->
     <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
         <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- fontawesome -->
     <link href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\">
    <!-- flaticon -->
     <link href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/flaticon.css");
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap datetime picker -->
      <link href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/bootstrap-datepicker.min.css");
        echo "\" rel=\"stylesheet\">
    <!-- animate.css -->
     <link href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/animate.css");
        echo "\" rel=\"stylesheet\">
    <!-- Owl Carousel -->
        <link href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/owl.carousel.min.css");
        echo "\" rel=\"stylesheet\">
    <!-- magnific popup -->
      <link href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/magnific-popup.css");
        echo "\" rel=\"stylesheet\">
    <!-- stylesheet -->
    <link href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/style.css");
        echo "\" rel=\"stylesheet\">
    <!-- responsive -->
    <link href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/responsive.css");
        echo "\" rel=\"stylesheet\">
     <link href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/css/sweetalert.css");
        echo "\" rel=\"stylesheet\"><script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/js/sweetalert.js");
        echo "\"></script>
     <link href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/plugins/bootstrap-fileinput/bootstrap-fileinput.cs");
        echo "\" rel=\"stylesheet\">
     <link href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/themes/base-color.php?color=7d5fff");
        echo "\" rel=\"stylesheet\">
     <!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
<!-- Bootstrap core CSS -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
<!-- Material Design Bootstrap -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css\" rel=\"stylesheet\">
    <style media=\"screen\">
  .eml {
    color: red;
  }

  .emr {
    color: red;
  }
  .social-icons .fa {
    padding-top: 14px;
    font-size: 30px;
    width: 60px;
    height: 60px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
  }

  .social-icons .fa:hover {
      opacity: 0.7;
  }

  .social-icons .fa-facebook {
    background: #3B5998;
    color: white;
  }

  .social-icons .fa-twitter {
    background: #55ACEE;
    color: white;
  }

  .social-icons .fa-google-plus {
    background: #dd4b39;
    color: white;
  }

  .social-icons .fa-linkedin {
    background: #007bb5;
    color: white;
  }

  .social-icons {
    margin-top:20px;
    width: 300px;
    margin: 0 auto;
  }
  .navbar-area {
    border-bottom: 1px solid #7d5fff;
  }
  .card-header {
    background-color: #7d5fff !important;
  }

</style>
    </head>
<style media=\"screen\">
  .navbar-area {
    border-bottom: 1px solid #7d5fff;
  }
</style>
    <body>
    
       <header id=\"layout-header\">
            ";
        // line 107
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 108
        echo "        </header>

    <!-- navbar area start -->

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 114
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 115
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 119
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 120
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 123
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 124
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 126
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 127
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 128
        echo "        
<script>
   function increaseAdView(adID) {
      var fd = new FormData();
      fd.append('adID', adID);
      \$.ajaxSetup({
          headers: {
              'X-CSRF-Token': \$('meta[name=csrf-token]').attr('content')
          }
      });
      \$.ajax({
         url: 'http://lab.thesoftking.com/eticket/admin/Ad/increaseAdView',
         type: 'POST',
         data: fd,
         contentType: false,
         processData: false,
         success: function(data) {
            // console.log(data);
         }
      });
   }
</script>

  <script>
  \$(\".fb-comments\").attr(\"data-width\", \$(\".fb-comments\").parent().width());
         \$(window).on('resize', function () {
             resizeiframe();
         });

     function resizeiframe() {
         var src = \$('.fb-comments iframe').attr('src').split('width='),
             width = \$(\".fb-comments\").parent().width();

         \$('.fb-comments iframe').attr('src', src[0] + 'width=' + width);
     }


    function hideModal() {
      \$('#buyTicketConfModal').modal('hide');
    }
    
    function clacTotal(p_no) {
      /* var subPrice = 0;
        var typePrice = 0;
      var sub = document.getElementsByClassName('sub')
      for(var i = 0; i < sub.length; i++)
      {
        if(sub[i].checked)
          subPrice += parseInt(sub[i].value)
      }
      var type = document.getElementsByClassName('tp')
      for(var i = 0; i < type.length; i++)
      {
        if(type[i].checked)
          typePrice = parseInt(type[i].value)
      }
      var totalPrice = (subPrice+typePrice)*p_no;
      //document.getElementById('totalPriceInput').value = totalPrice;
     // document.getElementById('pNoInput').value = p_no;
     document.getElementById('totalPrice').innerHTML = totalPrice;*/
     var sub=parseInt(document.getElementsByClassName('sub').length);
     var tic=parseInt(document.getElementsByClassName('ticket').length);
     var nbtic=0;
     for(var i=0;i<tic;i++){
      if(document.getElementsByClassName('ticket')[i].checked){
        nbtic+=parseFloat(JSON.parse(document.getElementsByClassName('ticket')[i].value).montant);
      }
     }
     var nomb=0;
     for(var i=0;i< sub;i++){
      if(document.getElementsByClassName('sub')[i].checked){
        nomb+=parseFloat(document.getElementsByClassName('sub')[i].value);
      }
     }
    document.getElementById('totalPrice').innerHTML = (nbtic+nomb)*p_no ;
    }


    \$(document).ready(function() {
        document.getElementById('totalPrice').innerHTML = 0;
     // clacTotal(document.getElementById('montantItem').value, 1);
    });
  </script>
    <script>
        function registerUser(e) {
            e.preventDefault();

            var form = document.getElementById('registerForm');
            var fd = new FormData(form);

            \$.ajax({
                url: 'http://lab.thesoftking.com/eticket/register',
                type: 'POST',
                data: fd,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    var em = document.getElementsByClassName(\"emr\");
                    // after returning from the controller we are clearing the
                    // previous error messages...
                    for(i=0; i<em.length; i++) {
                        em[i].innerHTML = '';
                    }

                    if (data == \"closed\") {
                        \$(\"#login-modal\").modal('hide');
                        swal('Sorry!', 'Registration is closed!', 'error');
                    }

                    if(data === \"success\") {
                        window.location = 'http://lab.thesoftking.com/eticket';
                    }

                    // Showing error messages in the HTML...
                    if(typeof data.error != 'undefined') {
                      if(typeof data.username != 'undefined') {
                        em[0].innerHTML = data.username[0];
                      }
                      if(typeof data.firstname != 'undefined') {
                        em[1].innerHTML = data.firstname[0];
                      }
                      if(typeof data.lastname != 'undefined') {
                        em[2].innerHTML = data.lastname[0];
                      }
                      if(typeof data.email != 'undefined') {
                        em[3].innerHTML = data.email[0];
                      }
                      if(typeof data.phone != 'undefined') {
                        em[4].innerHTML = data.phone[0];
                      }
                      if(typeof data.password != 'undefined') {
                        em[5].innerHTML = data.password[0];
                      }
                    }
                }
            })
        }
    </script>
    <script src=\"http://lab.thesoftking.com/eticket/assets/user/js/jquery.js\"></script>
<!-- popper -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/popper.min.js\"></script>
<!-- bootstrap -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/bootstrap.min.js\"></script>
<!-- owl carousel -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/owl.carousel.min.js\"></script>
<!-- magnific popup -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/jquery.magnific-popup.js\"></script>
<!-- way poin js-->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/waypoints.min.js\"></script>
<!-- wow js-->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/wow.min.js\"></script>
<!-- bootstrap datetimepicker -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/bootstrap-datepicker.min.js\"></script>
<!-- counterup js-->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/jquery.counterup.min.js\"></script>
<script src=\"http://lab.thesoftking.com/eticket/assets/admin/plugins/bootstrap-fileinput/bootstrap-fileinput.js\" type=\"text/javascript\"></script>

<!-- main -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/main.js\"></script>

    <script>
        function loginUser(e) {
            e.preventDefault();
            var form = document.getElementById('userLoginForm');
            var fd = new FormData(form);

            \$.ajax({
                url: 'http://lab.thesoftking.com/eticket/login',
                type: 'POST',
                data: fd,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    var em = document.getElementsByClassName(\"eml\");
                    // after returning from the controller we are clearing the
                    // previous error messages...
                    for(i=0; i<em.length; i++) {
                        em[i].innerHTML = '';
                    }

                    if(data === \"success\") {
                        window.location = 'http://lab.thesoftking.com/eticket';
                    }

                    if (data == \"no_success\") {
                        em[0].innerHTML = \"Username/Password do not match!\";
                    }

                    // Showing error messages in the HTML...
                    if(typeof data.error != 'undefined') {
                      if(typeof data.username != 'undefined') {
                        em[0].innerHTML = data.username[0];
                      }
                      if(typeof data.password != 'undefined') {
                        em[1].innerHTML = data.password[0];
                      }
                    }
                }
            });
        }
    </script>
<!-- JQuery -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js\"></script>
<script>
  function test(event)
                          {
                            var sub=parseInt(document.getElementsByClassName('sub').length);
                            var nb = parseInt(document.getElementById('nb').value)
                            if(event.target.checked)
                              document.getElementById('totalPrice').innerHTML = parseInt(event.target.value)*nb + parseInt(document.getElementById('totalPrice').innerHTML)
                            else
                              document.getElementById('totalPrice').innerHTML = parseInt(document.getElementById('totalPrice').innerHTML) - parseInt(event.target.value)*nb
                          }
   function testtype(event)
                          {
                          
                            var nb = parseInt(document.getElementById('nb').value);
                            var sub=parseInt(document.getElementsByClassName('sub').length);
                            var nomb=0;
                           
                            if(document.getElementsByClassName('sub')){
                              
                              if(event.target.checked){
                              for(var i=0;i< sub;i++){
                               
                               if(document.getElementsByClassName('sub')[i].checked){
                                
                                  nomb+=parseFloat(document.getElementsByClassName('sub')[i].value);
                                }
                              
                              }
                              document.getElementById('totalPrice').innerHTML = (parseInt(JSON.parse(event.target.value).montant)+nomb)*nb ;
                         
                            }else{
                             /// document.getElementById('totalPrice').innerHTML = parseInt(document.getElementById('totalPrice').innerHTML) - parseInt(event.target.value)*nb;
                            }
                            }else{
                            
                              document.getElementById('totalPrice').innerHTML = (parseInt(JSON.parse(event.target.value).montant))*nb ;
                            }
                           
                           
                          }
</script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/layouts/description_event.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 128,  240 => 127,  225 => 126,  221 => 125,  217 => 124,  213 => 123,  208 => 120,  204 => 119,  198 => 115,  196 => 114,  188 => 108,  184 => 107,  109 => 35,  105 => 34,  99 => 33,  95 => 32,  90 => 30,  85 => 28,  80 => 26,  75 => 24,  70 => 22,  65 => 20,  60 => 18,  54 => 15,  49 => 13,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
       <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

    <meta name=\"csrf-token\" content=\"5ifU7niyjh0byubCovg0kvgPryLEh51pgOvWgabI\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title> eTicket | Event Details  </title>
    <!-- favicon -->
     <link href=\"{{ 'assets/user/interfaceControl/logoIcon/icon.jpg'|theme }}\" rel=\"stylesheet\">
    <!-- bootstrap -->
     <link href=\"{{ 'assets/user/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
         <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- fontawesome -->
     <link href=\"{{ 'assets/admin/css/font-awesome.min.css'|theme }}\" rel=\"stylesheet\">
    <!-- flaticon -->
     <link href=\"{{ 'assets/user/css/flaticon.css'|theme }}\" rel=\"stylesheet\">
    <!-- bootstrap datetime picker -->
      <link href=\"{{ 'assets/user/css/bootstrap-datepicker.min.css'|theme }}\" rel=\"stylesheet\">
    <!-- animate.css -->
     <link href=\"{{ 'assets/user/css/animate.css'|theme }}\" rel=\"stylesheet\">
    <!-- Owl Carousel -->
        <link href=\"{{ 'assets/user/css/owl.carousel.min.css'|theme }}\" rel=\"stylesheet\">
    <!-- magnific popup -->
      <link href=\"{{ 'assets/user/css/magnific-popup.css'|theme }}\" rel=\"stylesheet\">
    <!-- stylesheet -->
    <link href=\"{{ 'assets/user/css/style.css'|theme }}\" rel=\"stylesheet\">
    <!-- responsive -->
    <link href=\"{{ 'assets/user/css/responsive.css'|theme }}\" rel=\"stylesheet\">
     <link href=\"{{ 'assets/admin/css/sweetalert.css'|theme }}\" rel=\"stylesheet\"><script src=\"{{ 'assets/admin/js/sweetalert.js'|theme }}\"></script>
     <link href=\"{{ 'assets/admin/plugins/bootstrap-fileinput/bootstrap-fileinput.cs'|theme }}\" rel=\"stylesheet\">
     <link href=\"{{ 'assets/user/css/themes/base-color.php?color=7d5fff'|theme }}\" rel=\"stylesheet\">
     <!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
<!-- Bootstrap core CSS -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
<!-- Material Design Bootstrap -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css\" rel=\"stylesheet\">
    <style media=\"screen\">
  .eml {
    color: red;
  }

  .emr {
    color: red;
  }
  .social-icons .fa {
    padding-top: 14px;
    font-size: 30px;
    width: 60px;
    height: 60px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
  }

  .social-icons .fa:hover {
      opacity: 0.7;
  }

  .social-icons .fa-facebook {
    background: #3B5998;
    color: white;
  }

  .social-icons .fa-twitter {
    background: #55ACEE;
    color: white;
  }

  .social-icons .fa-google-plus {
    background: #dd4b39;
    color: white;
  }

  .social-icons .fa-linkedin {
    background: #007bb5;
    color: white;
  }

  .social-icons {
    margin-top:20px;
    width: 300px;
    margin: 0 auto;
  }
  .navbar-area {
    border-bottom: 1px solid #7d5fff;
  }
  .card-header {
    background-color: #7d5fff !important;
  }

</style>
    </head>
<style media=\"screen\">
  .navbar-area {
    border-bottom: 1px solid #7d5fff;
  }
</style>
    <body>
    
       <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

    <!-- navbar area start -->

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}
        
<script>
   function increaseAdView(adID) {
      var fd = new FormData();
      fd.append('adID', adID);
      \$.ajaxSetup({
          headers: {
              'X-CSRF-Token': \$('meta[name=csrf-token]').attr('content')
          }
      });
      \$.ajax({
         url: 'http://lab.thesoftking.com/eticket/admin/Ad/increaseAdView',
         type: 'POST',
         data: fd,
         contentType: false,
         processData: false,
         success: function(data) {
            // console.log(data);
         }
      });
   }
</script>

  <script>
  \$(\".fb-comments\").attr(\"data-width\", \$(\".fb-comments\").parent().width());
         \$(window).on('resize', function () {
             resizeiframe();
         });

     function resizeiframe() {
         var src = \$('.fb-comments iframe').attr('src').split('width='),
             width = \$(\".fb-comments\").parent().width();

         \$('.fb-comments iframe').attr('src', src[0] + 'width=' + width);
     }


    function hideModal() {
      \$('#buyTicketConfModal').modal('hide');
    }
    
    function clacTotal(p_no) {
      /* var subPrice = 0;
        var typePrice = 0;
      var sub = document.getElementsByClassName('sub')
      for(var i = 0; i < sub.length; i++)
      {
        if(sub[i].checked)
          subPrice += parseInt(sub[i].value)
      }
      var type = document.getElementsByClassName('tp')
      for(var i = 0; i < type.length; i++)
      {
        if(type[i].checked)
          typePrice = parseInt(type[i].value)
      }
      var totalPrice = (subPrice+typePrice)*p_no;
      //document.getElementById('totalPriceInput').value = totalPrice;
     // document.getElementById('pNoInput').value = p_no;
     document.getElementById('totalPrice').innerHTML = totalPrice;*/
     var sub=parseInt(document.getElementsByClassName('sub').length);
     var tic=parseInt(document.getElementsByClassName('ticket').length);
     var nbtic=0;
     for(var i=0;i<tic;i++){
      if(document.getElementsByClassName('ticket')[i].checked){
        nbtic+=parseFloat(JSON.parse(document.getElementsByClassName('ticket')[i].value).montant);
      }
     }
     var nomb=0;
     for(var i=0;i< sub;i++){
      if(document.getElementsByClassName('sub')[i].checked){
        nomb+=parseFloat(document.getElementsByClassName('sub')[i].value);
      }
     }
    document.getElementById('totalPrice').innerHTML = (nbtic+nomb)*p_no ;
    }


    \$(document).ready(function() {
        document.getElementById('totalPrice').innerHTML = 0;
     // clacTotal(document.getElementById('montantItem').value, 1);
    });
  </script>
    <script>
        function registerUser(e) {
            e.preventDefault();

            var form = document.getElementById('registerForm');
            var fd = new FormData(form);

            \$.ajax({
                url: 'http://lab.thesoftking.com/eticket/register',
                type: 'POST',
                data: fd,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    var em = document.getElementsByClassName(\"emr\");
                    // after returning from the controller we are clearing the
                    // previous error messages...
                    for(i=0; i<em.length; i++) {
                        em[i].innerHTML = '';
                    }

                    if (data == \"closed\") {
                        \$(\"#login-modal\").modal('hide');
                        swal('Sorry!', 'Registration is closed!', 'error');
                    }

                    if(data === \"success\") {
                        window.location = 'http://lab.thesoftking.com/eticket';
                    }

                    // Showing error messages in the HTML...
                    if(typeof data.error != 'undefined') {
                      if(typeof data.username != 'undefined') {
                        em[0].innerHTML = data.username[0];
                      }
                      if(typeof data.firstname != 'undefined') {
                        em[1].innerHTML = data.firstname[0];
                      }
                      if(typeof data.lastname != 'undefined') {
                        em[2].innerHTML = data.lastname[0];
                      }
                      if(typeof data.email != 'undefined') {
                        em[3].innerHTML = data.email[0];
                      }
                      if(typeof data.phone != 'undefined') {
                        em[4].innerHTML = data.phone[0];
                      }
                      if(typeof data.password != 'undefined') {
                        em[5].innerHTML = data.password[0];
                      }
                    }
                }
            })
        }
    </script>
    <script src=\"http://lab.thesoftking.com/eticket/assets/user/js/jquery.js\"></script>
<!-- popper -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/popper.min.js\"></script>
<!-- bootstrap -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/bootstrap.min.js\"></script>
<!-- owl carousel -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/owl.carousel.min.js\"></script>
<!-- magnific popup -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/jquery.magnific-popup.js\"></script>
<!-- way poin js-->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/waypoints.min.js\"></script>
<!-- wow js-->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/wow.min.js\"></script>
<!-- bootstrap datetimepicker -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/bootstrap-datepicker.min.js\"></script>
<!-- counterup js-->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/jquery.counterup.min.js\"></script>
<script src=\"http://lab.thesoftking.com/eticket/assets/admin/plugins/bootstrap-fileinput/bootstrap-fileinput.js\" type=\"text/javascript\"></script>

<!-- main -->
<script src=\"http://lab.thesoftking.com/eticket/assets/user/js/main.js\"></script>

    <script>
        function loginUser(e) {
            e.preventDefault();
            var form = document.getElementById('userLoginForm');
            var fd = new FormData(form);

            \$.ajax({
                url: 'http://lab.thesoftking.com/eticket/login',
                type: 'POST',
                data: fd,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    var em = document.getElementsByClassName(\"eml\");
                    // after returning from the controller we are clearing the
                    // previous error messages...
                    for(i=0; i<em.length; i++) {
                        em[i].innerHTML = '';
                    }

                    if(data === \"success\") {
                        window.location = 'http://lab.thesoftking.com/eticket';
                    }

                    if (data == \"no_success\") {
                        em[0].innerHTML = \"Username/Password do not match!\";
                    }

                    // Showing error messages in the HTML...
                    if(typeof data.error != 'undefined') {
                      if(typeof data.username != 'undefined') {
                        em[0].innerHTML = data.username[0];
                      }
                      if(typeof data.password != 'undefined') {
                        em[1].innerHTML = data.password[0];
                      }
                    }
                }
            });
        }
    </script>
<!-- JQuery -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js\"></script>
<script>
  function test(event)
                          {
                            var sub=parseInt(document.getElementsByClassName('sub').length);
                            var nb = parseInt(document.getElementById('nb').value)
                            if(event.target.checked)
                              document.getElementById('totalPrice').innerHTML = parseInt(event.target.value)*nb + parseInt(document.getElementById('totalPrice').innerHTML)
                            else
                              document.getElementById('totalPrice').innerHTML = parseInt(document.getElementById('totalPrice').innerHTML) - parseInt(event.target.value)*nb
                          }
   function testtype(event)
                          {
                          
                            var nb = parseInt(document.getElementById('nb').value);
                            var sub=parseInt(document.getElementsByClassName('sub').length);
                            var nomb=0;
                           
                            if(document.getElementsByClassName('sub')){
                              
                              if(event.target.checked){
                              for(var i=0;i< sub;i++){
                               
                               if(document.getElementsByClassName('sub')[i].checked){
                                
                                  nomb+=parseFloat(document.getElementsByClassName('sub')[i].value);
                                }
                              
                              }
                              document.getElementById('totalPrice').innerHTML = (parseInt(JSON.parse(event.target.value).montant)+nomb)*nb ;
                         
                            }else{
                             /// document.getElementById('totalPrice').innerHTML = parseInt(document.getElementById('totalPrice').innerHTML) - parseInt(event.target.value)*nb;
                            }
                            }else{
                            
                              document.getElementById('totalPrice').innerHTML = (parseInt(JSON.parse(event.target.value).montant))*nb ;
                            }
                           
                           
                          }
</script>
    </body>
</html>", "C:\\wamp64\\www\\install-master1/themes/demo/layouts/description_event.htm", "");
    }
}
