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

/* C:\wamp64\www\install-master1/themes/demo/layouts/calendar.htm */
class __TwigTemplate_247f68f14339031b012a9d85f6ba8ed93771df41063d72846038ed5586e59dfb extends \Twig\Template
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
        <meta charset=\"utf-8\">
           <title>PayDunya Event - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
           <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
           <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
          <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
   
       <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
       <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
       <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
       <title> eTicket | Event Details  </title>
       <!-- favicon -->
        <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/interfaceControl/logoIcon/icon.jpg");
        echo "\" rel=\"stylesheet\">
       <!-- bootstrap -->
        <link href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
            <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
       <!-- fontawesome -->
        <link href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\">
       <!-- flaticon -->
        <link href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/flaticon.css");
        echo "\" rel=\"stylesheet\">
       <!-- bootstrap datetime picker -->
         <link href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/bootstrap-datepicker.min.css");
        echo "\" rel=\"stylesheet\">
       <!-- animate.css -->
        <link href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/animate.css");
        echo "\" rel=\"stylesheet\">
       <!-- Owl Carousel -->
           <link href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/owl.carousel.min.css");
        echo "\" rel=\"stylesheet\">
       <!-- magnific popup -->
         <link href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/magnific-popup.css");
        echo "\" rel=\"stylesheet\">
       <!-- stylesheet -->
       <link href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/style.css");
        echo "\" rel=\"stylesheet\">
       <!-- responsive -->
       <link href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/responsive.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/css/sweetalert.css");
        echo "\" rel=\"stylesheet\"><script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/js/sweetalert.js");
        echo "\"></script>
        <link href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/plugins/bootstrap-fileinput/bootstrap-fileinput.cs");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/user/css/themes/base-color.php?color=7d5fff");
        echo "\" rel=\"stylesheet\">
        <!-- Font Awesome -->
   <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
   <!-- Bootstrap core CSS -->
   <link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
   <!-- Material Design Bootstrap -->
   <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css\" rel=\"stylesheet\">
   <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css\">
      
       </head>
  <body >
      
      <div style=\"height: 1000px;padding-top: 200px;\" class=\"container\">
    <p>Cliquer sur Authorize pour effectuer cette action</p>

    <!--Add buttons to initiate auth sequence and sign out-->
    <input type=\"hidden\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["date"] ?? null), "html", null, true);
        echo "\" id=\"date\">
    ";
        // line 54
        if (($context["user"] ?? null)) {
            // line 55
            echo "    <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, ($context["mail"] ?? null), "html", null, true);
            echo "\" id=\"mail\">
    ";
        } else {
            // line 57
            echo "    <label>Entrer votre email</label>
    <input type=\"email\"  id=\"mail\">
    ";
        }
        // line 60
        echo "    <input type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, ($context["nom"] ?? null), "html", null, true);
        echo "\" id=\"nom\">
    <input type=\"hidden\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "\" id=\"description\">
    <input type=\"hidden\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["lieu"] ?? null), "html", null, true);
        echo "\" id=\"lieu\">
    <button id=\"authorize_button\" style=\"display: none;\">Authorize</button>
    <p id=\"signout_button\" style=\"display: none;\">event ajouter a votre calendar</p>

    <pre id=\"content\" style=\"white-space: pre-wrap;\"></pre>
  </div>

    <script type=\"text/javascript\">
      // Client ID and API key from the Developer Console
      var CLIENT_ID = '27600548519-e1du7hi2qjqbji3e7q6vmcmdg2jeq89q.apps.googleusercontent.com';
      var API_KEY = 'AIzaSyB6UeoYPMNQ0FRCerwvTING6JKZZiHNTG4';

      // Array of API discovery doc URLs for APIs used by the quickstart
      var DISCOVERY_DOCS = [\"https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest\"];

      // Authorization scopes required by the API; multiple scopes can be
      // included, separated by spaces.
      var SCOPES = \"https://www.googleapis.com/auth/calendar.readonly\";

      var authorizeButton = document.getElementById('authorize_button');
      var signoutButton = document.getElementById('signout_button');

      /**
       *  On load, called to load the auth2 library and API client library.
       */
      function handleClientLoad() {
        gapi.load('client:auth2', initClient);
      }

      /**
       *  Initializes the API client library and sets up sign-in state
       *  listeners.
       */
      function initClient() {
        gapi.client.init({
          apiKey: API_KEY,
          clientId: CLIENT_ID,
          discoveryDocs: DISCOVERY_DOCS,
          scope: SCOPES
        }).then(function () {
          // Listen for sign-in state changes.
          gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

          // Handle the initial sign-in state.
          updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
          authorizeButton.onclick = handleAuthClick;
          signoutButton.onclick = handleSignoutClick;
        }, function(error) {
          appendPre(JSON.stringify(error, null, 2));
        });
      }
/**
 * Creates an event in the user's default calendar.
 */
function createEvent() {
  var calendarId = 'primary';
  var start = getRelativeDate(1, 12);
  var end = getRelativeDate(1, 13);
  var event = {
    summary: document.getElementById('nom').value,
    location: document.getElementById('lieu').value,
    description: document.getElementById('description').value,
    start: {
      dateTime: document.getElementById('date').value+'T11:00:00.000Z'
    },
    end: {
      dateTime: document.getElementById('date').value+'T11:00:00.000Z'
    },
    attendees: [
      {email: ''}
    ],
    // Red background. Use Calendar.Colors.get() for the full list.
    colorId: 11
  };
  //event['start']=document.getElementById('date').value+\"T11:00:00.000Z\";
  console.log(event['start']);
  event['attendees'][0].email=document.getElementById('mail').value;
  //event['attendees'].email=document.getElementById('mail').value;
 /* event = Calendar.Events.insert(event, calendarId);
  Logger.log('Event ID: ' + event.id);*/
  var request = gapi.client.calendar.events.insert({
  'calendarId': 'primary',
  'resource': event
});

request.execute(function(event) {
  appendPre('<a href=\"' + event.htmlLink+'\"> voir dans le calendar</a>');
});

}

/**
 * Helper function to get a new Date object relative to the current date.
 * @param {number} daysOffset The number of days in the future for the new date.
 * @param {number} hour The hour of the day for the new date, in the time zone
 *     of the script.
 * @return {Date} The new date.
 */
function getRelativeDate(daysOffset, hour) {
  var date = new Date();
  date.setDate(date.getDate() + daysOffset);
  date.setHours(hour);
  date.setMinutes(0);
  date.setSeconds(0);
  date.setMilliseconds(0);  
  return date;
}
      /**
       *  Called when the signed in status changes, to update the UI
       *  appropriately. After a sign-in, the API is called.
       */
      function updateSigninStatus(isSignedIn) {
        if (isSignedIn) {
          authorizeButton.style.display = 'none';
          signoutButton.style.display = 'block';
          //listUpcomingEvents();
          createEvent();
        } else {
          authorizeButton.style.display = 'block';
          signoutButton.style.display = 'none';
        }
      }

      /**
       *  Sign in the user upon button click.
       */
      function handleAuthClick(event) {
        gapi.auth2.getAuthInstance().signIn();
      }

      /**
       *  Sign out the user upon button click.
       */
      function handleSignoutClick(event) {
        gapi.auth2.getAuthInstance().signOut();
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node. Used to display the results of the API call.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById('content');
        var textContent = document.createTextNode(message + '\\n');
        pre.appendChild(textContent);
      }

      /**
       * Print the summary and start datetime/date of the next ten events in
       * the authorized user's calendar. If no events are found an
       * appropriate message is printed.
       */
      function listUpcomingEvents() {
    var event = {
    summary: 'Lunch Meeting',
    location: 'The Deli',
    description: 'To discuss our plans for the presentation next week.',
    start: {
      dateTime: 2019-08-17
    },
    end: {
      dateTime: 2019-08-20
    },
    attendees: [
      {email: 'abdoulayekeita438@gmail.com'}
    ],
    // Red background. Use Calendar.Colors.get() for the full list.
    colorId: 11
  };
var request = gapi.client.calendar.events.insert({
  'calendarId': 'primary',
  'resource': event
});

request.execute(function(event) {
  appendPre('Event created: ' + event.htmlLink);
});

      }

    </script>

    <script async defer src=\"https://apis.google.com/js/api.js\"
      onload=\"this.onload=function(){};handleClientLoad()\"
      onreadystatechange=\"if (this.readyState === 'complete') this.onload()\">
    </script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/themes/demo/layouts/calendar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 62,  161 => 61,  156 => 60,  151 => 57,  145 => 55,  143 => 54,  139 => 53,  120 => 37,  116 => 36,  110 => 35,  106 => 34,  101 => 32,  96 => 30,  91 => 28,  86 => 26,  81 => 24,  76 => 22,  71 => 20,  65 => 17,  60 => 15,  49 => 7,  45 => 6,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
           <title>PayDunya Event - {{ this.page.title }}</title>
           <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
           <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
          <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
   
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
   <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css\">
      
       </head>
  <body >
      
      <div style=\"height: 1000px;padding-top: 200px;\" class=\"container\">
    <p>Cliquer sur Authorize pour effectuer cette action</p>

    <!--Add buttons to initiate auth sequence and sign out-->
    <input type=\"hidden\" value=\"{{date}}\" id=\"date\">
    {% if user %}
    <input type=\"hidden\" value=\"{{mail}}\" id=\"mail\">
    {% else %}
    <label>Entrer votre email</label>
    <input type=\"email\"  id=\"mail\">
    {% endif %}
    <input type=\"hidden\" value=\"{{nom}}\" id=\"nom\">
    <input type=\"hidden\" value=\"{{description}}\" id=\"description\">
    <input type=\"hidden\" value=\"{{lieu}}\" id=\"lieu\">
    <button id=\"authorize_button\" style=\"display: none;\">Authorize</button>
    <p id=\"signout_button\" style=\"display: none;\">event ajouter a votre calendar</p>

    <pre id=\"content\" style=\"white-space: pre-wrap;\"></pre>
  </div>

    <script type=\"text/javascript\">
      // Client ID and API key from the Developer Console
      var CLIENT_ID = '27600548519-e1du7hi2qjqbji3e7q6vmcmdg2jeq89q.apps.googleusercontent.com';
      var API_KEY = 'AIzaSyB6UeoYPMNQ0FRCerwvTING6JKZZiHNTG4';

      // Array of API discovery doc URLs for APIs used by the quickstart
      var DISCOVERY_DOCS = [\"https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest\"];

      // Authorization scopes required by the API; multiple scopes can be
      // included, separated by spaces.
      var SCOPES = \"https://www.googleapis.com/auth/calendar.readonly\";

      var authorizeButton = document.getElementById('authorize_button');
      var signoutButton = document.getElementById('signout_button');

      /**
       *  On load, called to load the auth2 library and API client library.
       */
      function handleClientLoad() {
        gapi.load('client:auth2', initClient);
      }

      /**
       *  Initializes the API client library and sets up sign-in state
       *  listeners.
       */
      function initClient() {
        gapi.client.init({
          apiKey: API_KEY,
          clientId: CLIENT_ID,
          discoveryDocs: DISCOVERY_DOCS,
          scope: SCOPES
        }).then(function () {
          // Listen for sign-in state changes.
          gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

          // Handle the initial sign-in state.
          updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
          authorizeButton.onclick = handleAuthClick;
          signoutButton.onclick = handleSignoutClick;
        }, function(error) {
          appendPre(JSON.stringify(error, null, 2));
        });
      }
/**
 * Creates an event in the user's default calendar.
 */
function createEvent() {
  var calendarId = 'primary';
  var start = getRelativeDate(1, 12);
  var end = getRelativeDate(1, 13);
  var event = {
    summary: document.getElementById('nom').value,
    location: document.getElementById('lieu').value,
    description: document.getElementById('description').value,
    start: {
      dateTime: document.getElementById('date').value+'T11:00:00.000Z'
    },
    end: {
      dateTime: document.getElementById('date').value+'T11:00:00.000Z'
    },
    attendees: [
      {email: ''}
    ],
    // Red background. Use Calendar.Colors.get() for the full list.
    colorId: 11
  };
  //event['start']=document.getElementById('date').value+\"T11:00:00.000Z\";
  console.log(event['start']);
  event['attendees'][0].email=document.getElementById('mail').value;
  //event['attendees'].email=document.getElementById('mail').value;
 /* event = Calendar.Events.insert(event, calendarId);
  Logger.log('Event ID: ' + event.id);*/
  var request = gapi.client.calendar.events.insert({
  'calendarId': 'primary',
  'resource': event
});

request.execute(function(event) {
  appendPre('<a href=\"' + event.htmlLink+'\"> voir dans le calendar</a>');
});

}

/**
 * Helper function to get a new Date object relative to the current date.
 * @param {number} daysOffset The number of days in the future for the new date.
 * @param {number} hour The hour of the day for the new date, in the time zone
 *     of the script.
 * @return {Date} The new date.
 */
function getRelativeDate(daysOffset, hour) {
  var date = new Date();
  date.setDate(date.getDate() + daysOffset);
  date.setHours(hour);
  date.setMinutes(0);
  date.setSeconds(0);
  date.setMilliseconds(0);  
  return date;
}
      /**
       *  Called when the signed in status changes, to update the UI
       *  appropriately. After a sign-in, the API is called.
       */
      function updateSigninStatus(isSignedIn) {
        if (isSignedIn) {
          authorizeButton.style.display = 'none';
          signoutButton.style.display = 'block';
          //listUpcomingEvents();
          createEvent();
        } else {
          authorizeButton.style.display = 'block';
          signoutButton.style.display = 'none';
        }
      }

      /**
       *  Sign in the user upon button click.
       */
      function handleAuthClick(event) {
        gapi.auth2.getAuthInstance().signIn();
      }

      /**
       *  Sign out the user upon button click.
       */
      function handleSignoutClick(event) {
        gapi.auth2.getAuthInstance().signOut();
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node. Used to display the results of the API call.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById('content');
        var textContent = document.createTextNode(message + '\\n');
        pre.appendChild(textContent);
      }

      /**
       * Print the summary and start datetime/date of the next ten events in
       * the authorized user's calendar. If no events are found an
       * appropriate message is printed.
       */
      function listUpcomingEvents() {
    var event = {
    summary: 'Lunch Meeting',
    location: 'The Deli',
    description: 'To discuss our plans for the presentation next week.',
    start: {
      dateTime: 2019-08-17
    },
    end: {
      dateTime: 2019-08-20
    },
    attendees: [
      {email: 'abdoulayekeita438@gmail.com'}
    ],
    // Red background. Use Calendar.Colors.get() for the full list.
    colorId: 11
  };
var request = gapi.client.calendar.events.insert({
  'calendarId': 'primary',
  'resource': event
});

request.execute(function(event) {
  appendPre('Event created: ' + event.htmlLink);
});

      }

    </script>

    <script async defer src=\"https://apis.google.com/js/api.js\"
      onload=\"this.onload=function(){};handleClientLoad()\"
      onreadystatechange=\"if (this.readyState === 'complete') this.onload()\">
    </script>
  </body>
</html>", "C:\\wamp64\\www\\install-master1/themes/demo/layouts/calendar.htm", "");
    }
}
