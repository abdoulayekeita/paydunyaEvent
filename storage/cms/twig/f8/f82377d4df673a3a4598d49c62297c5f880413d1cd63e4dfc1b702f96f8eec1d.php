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

/* C:\wamp64\www\install-master1/plugins/event/event/components/eventform/default.htm */
class __TwigTemplate_612dc76171d58be8fbc95f846dc070e58982aad6f438a503bf9ce2a516f889d1 extends \Twig\Template
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
        echo "
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"card my-5\" style=\"width:100%;\">
          <div class=\"card-body\" style=\"background-color:#7d5fff\">
            <h3 style=\"color:white;\">Create Event</h3>
          </div>
          <div class=\"card-body\">
            <div class=\"col-md-12\">
                <form class=\"contact-from-wrapper\" data-request=\"onSave\" data-request-files data-request-flash data-request-validate>
                        ";
        // line 11
        if (($context["user"] ?? null)) {
            // line 12
            echo "                        <input type=\"hidden\" name=\"user\" value=\" ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 14
            echo "                    ";
        }
        // line 15
        echo "                    <div class=\"form-element square\">
                        <label>Title
                            <span>**</span>
                        </label>
                        <input type=\"text\" name=\"nom\" value=\"\" placeholder=\"Enter Title...\" class=\"input-field-square\">
                    </div>
                    <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                            <div class=\"fileinput-new thumbnail\">
                                <img src=\"\" alt=\"\" />
                            </div>
                            <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"width: 250px;\"> </div>
                            <p><strong>[images will be resized to 730X440]</strong></p>
                            <div>
                                <span class=\"btn btn-success btn-file\">
                                    <span class=\"fileinput-new\"> Choose Display Image </span>
                                    <span class=\"fileinput-exists\"> Change </span>
                                    <input type=\"file\" name=\"img\">
                                </span>
                                <a href=\"javascript:;\" class=\"btn red fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                            </div>
                                                    </div>
                     <div class=\"form-element square\">
                        <label>Lieu
                            <span>**</span>
                        </label>
                        <input type=\"text\" name=\"lieu\" value=\"\" placeholder=\"Entrer le Lieu...\" class=\"input-field-square\">
                    </div>
                    <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultUnchecked\" name=\"gratuit\">
                        <label class=\"custom-control-label\" for=\"defaultUnchecked\">Gratuit</label>
                    
                    </div>
                    <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultUncheck\" name=\"code\">
                            <label class=\"custom-control-label\" for=\"defaultUncheck\">Generer un code promo</label>
                        
                        </div>
                    <div class=\"row\">
                      
                      <div class=\"col-md-4\">
                            ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("typeevent/type"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "                      </div>
                      <div class=\"col-md-4\">
                        ";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("categorieevent/category"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 59
        echo "                  </div>
                      <div class=\"col-md-4\">
                            <div class=\"form-element square\">
                                <label>Date de l'évènement
                                </label>
                                <input type=\"date\" name=\"date_event\" value=\"\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                              </div>
                          </div>
                        </div>
                        <div class=\"row\">
                       <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label>Date de cloture des ventes
                            </label>
                            <input type=\"date\" name=\"date_cloture\" value=\"\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                         </div>
                      </div>
                      <div class=\"col-md-4\" id=\"pi\">
                      
                      </div>
                     
                       <div class=\"col-md-12\">
                        <div class=\"form-element square\">
                            <label>Nombre de ticket
                            </label>
                            <input type=\"number\" name=\"nbrticket\" value=\"\" placeholder=\"Enter minimum number of persons...\" class=\"input-field-square\">
                        </div>
                      </div>                                                
                        <div class=\"col-md-12\">
                        <div class=\"row\">
                                <div class=\"col-md-4\">
                                        <div class=\"form-element square\">
                                            <label>Nom du type de ticket
                                            </label>
                                            <input type=\"text\"  value=\"\" placeholder=\"Entrer le nom du type...\" class=\"input-field-square\" id=\"inputtype1\">
                                        </div>
                                 </div> 
                                <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                        <label>Montant du ticket
                                            
                                        </label>
                                        <input type=\"text\"  value=\"\" placeholder=\"Enter per person price...\" class=\"input-field-square\" id=\"inputtype2\">
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                        <input type='button' onclick='addtype()' value='Ajoutez'  class=\"submit-form-btn\"
                                        style=\"margin-bottom: 20px;\"/>
                                    </div>
                                </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                    <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                                            <div class=\"fileinput-new thumbnail\">
                                                <img src=\"\" alt=\"\" />
                                            </div>
                                            <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"width: 250px;\"> </div>
                                            <p><strong>[images will be resized to 730X440]</strong></p>
                                            <div>
                                                <span class=\"btn btn-success btn-file\">
                                                    <span class=\"fileinput-new\"> ajouter image du ticket  </span>
                                                    <span class=\"fileinput-exists\"> Change </span>
                                                    <input type=\"file\" name=\"typeimg\"  id=\"inputtype3\">
                                                </span>
                                                <a href=\"javascript:;\" class=\"btn red fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                                            </div>
                                                                    </div>
                            </div>
                        </div>
                        <div class=\"row col-md-8\" id=\"addtype\">

                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                    <div class=\"form-element square\">
                                    <label>
                                        Ajouter un sous évènement
                                     </label>
                                     </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                            <label>Nom
                                            </label>
                                            <input type=\"text\"  value=\"\" placeholder=\"Nom\" class=\"input-field-square\"  id='inputTask'>
                                        </div>
                            </div>
                            <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                            <label>Montant
                                            </label>
                                            <input type=\"text\"  value=\"\" placeholder=\"Nom\" class=\"input-field-square\"  id='inputTask1'>
                                        </div>
                            </div>
                            
                        </div>
                        <div class=\"row\">
                                <div class=\"col-md-4\">
                                        <div class=\"form-element square\">
                                                <label>Nombre de place
                                                </label>
                                                <input type=\"number\"  value=\"\" placeholder=\"Nom\" class=\"input-field-square\" id='inputTask2'>
                                            </div>
                                </div>
                                <div class=\"col-md-4\">
                                        <div class=\"form-element square\">
                                                <label>Jour
                                                </label>
                                                <input type=\"date\"  value=\"\" placeholder=\"Nom\" class=\"input-field-square\" id='inputTask3'>
                                            </div>
                                </div>
                        </div>
                                <div class=\"row\">
                                        <div class=\"col-md-4\">
                                                <div class=\"form-element square\">
                                                        <label>Description
                                                        </label>
                                                        <textarea  name=\"description\" rows=\"8\" cols=\"50\" class=\"input-field-square\" id='inputTask4'></textarea>
                                                    </div>
                                        </div>
                                        <div class=\"col-md-8\">
                                                <div class=\"form-element square\" data-provides=\"fileinput\">
                                                        <div class=\"fileinput-new thumbnail\">
                                                            <img src=\"\" alt=\"\" />
                                                        </div>
                                                        <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"width: 250px;\"> </div>
                                                        <p><strong>[images will be resized to 730X440]</strong></p>
                                                        <div>
                                                            <span class=\"btn btn-success btn-file\">
                                                                <span class=\"fileinput-new\"> Choose Display Image </span>
                                                                <span class=\"fileinput-exists\"> Change </span>
                                                                <input type=\"file\" name=\"subimg\" id='inputTask5'>
                                                            </span>
                                                            <a href=\"javascript:;\" class=\"btn red fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                                                        </div>
                                                                                </div>
                                        </div>
                                </div>
                            <div class=\"form-element square\">
                                <input type='button' onclick='addText()' value='Ajoutez'  class=\"submit-form-btn\"
                                style=\"margin-bottom: 20px;\"/>
                            </div>
                        </div>
                        <div id=\"addTask\" class=\"col-md-4\">
    \t
                        </div>
                    
                    </div>
                    <div class=\"form-element square\">
                        <label>
                          Description
                          <span>**</span>
                        </label>
                        <textarea id=\"overview\" name=\"description\" rows=\"12\" cols=\"80\" class=\"input-field-square\"></textarea>
                                                </div>
                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"submit-form-btn\" onclick='nbsub()' data-attach-loading>Envoyer</button>
                    </div>
                   
    <div class=\"alert alert-danger\" data-validate-error>
            <p data-message></p>
                </form>
            </div>
          </div>
        </div>

    </div>
</div>
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 231
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 232
            echo "<p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 234
        echo "       <!-- login and register modal start-->
<div class=\"login-registration-modal\" id=\"loginRegModal\">
    <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
        <div class=\"modal\" tabindex=\"-1\" id=\"login-modal\" role=\"dialog\"><!-- #login modal-->
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\"><!-- modal content start -->
                   
                    <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                        <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                            <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                <form id=\"userLoginForm\">
                                    <input type=\"hidden\" name=\"_token\" value=\"5ifU7niyjh0byubCovg0kvgPryLEh51pgOvWgabI\">
                                    <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le nom de la categorie
                                        </label>
                                        <input name=\"username\" type=\"text\" placeholder=\"nom de la categorie....\" class=\"input-field-square\">
                                        <p class=\"eml\"></p>
                                    </div><!-- form element login end -->
                                  <!-- form element login end -->
                                    <button type=\"submit\" class=\"submit-form-btn\">OK</button>
                                </form>
                            </div><!-- login form wrapper end -->
                        </div>
                    </div><!-- /.tab conent-->
                </div><!-- modal content end -->
            </div>
        </div><!-- /#loginmodal -->
    </div><!-- login modal warapper satart end-->
</div>
<div class=\"login-registration-modal\" id=\"eventRegModal\">
    <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
        <div class=\"modal\" tabindex=\"-1\" id=\"create_event\" role=\"dialog\"><!-- #login modal-->
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\"><!-- modal content start -->
                   
                    <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                        <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                            <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                <form id=\"sous_event_Form\" data-request=\"onSave1\">
                                    <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le nom du sous évènement
                                        </label>
                                        <input name=\"nom1\" type=\"text\" placeholder=\"nom de la categorie....\" class=\"input-field-square\">
                                        <p class=\"eml\"></p>
                                    </div>
                                     <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le montant 
                                        </label>
                                        <input name=\"montant1\" type=\"text\" placeholder=\"montant de la categorie....\" class=\"input-field-square\">
                                        <p class=\"eml\"></p>
                                    </div><!-- form element login end -->
                                  <!-- form element login end -->
                                    <button type=\"submit\" class=\"submit-form-btn\">Créer</button>
                                </form>
                            </div><!-- login form wrapper end -->
                        </div>
                    </div><!-- /.tab conent-->
                </div><!-- modal content end -->
            </div>
        </div><!-- /#loginmodal -->
    </div><!-- login modal warapper satart end-->
</div>
<div class=\"modal\" tabindex=\"-1\" id=\"autre-modal\" role=\"dialog\"><!-- #login modal-->
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\"><!-- modal content start -->
           
            <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                    <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                        <form id=\"userLoginForm\"  data-request=\"onType\">
                            <div class=\"form-element square login\"><!-- form element login start -->
                                <label>Enter le nom de la categorie
                                </label>
                                <input name=\"type\" type=\"text\" placeholder=\"nom de la categorie....\" class=\"input-field-square\">
                                <p class=\"eml\"></p>
                            </div><!-- form element login end -->
                          <!-- form element login end -->
                            <button type=\"submit\" class=\"submit-form-btn\">ajouter</button>
                        </form>
                    </div><!-- login form wrapper end -->
                </div>
            </div><!-- /.tab conent-->
        </div><!-- modal content end -->
    </div>
</div><!-- /#loginmodal -->
<script>
    
doThisOnChange = function( value, optionIndex)
{
    if ( optionIndex != null )
    {
       var option = document.getElementById( \"sel1\" ).options[optionIndex];
       option.selected = true;
       value = option.value;
    }
   // alert( \"Do something with the value: \" + value );
}

    function edition() { options = \"Width=700,Height=700\" ; window.open( \"";
        // line 332
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ticket");
        echo "\", \"edition\", options ) ; }
     var row = 1;
     var typ=1;
function nbsub(){
    var nb=document.createElement(\"div\");
    document.getElementById('addTask').appendChild(nb);
    var ligne = document.createElement('input');
    ligne.setAttribute('type', 'hidden');
    ligne.setAttribute(\"value\", row);
    ligne.setAttribute(\"name\", \"nbsub\");
    nb.appendChild(ligne);

    var nbtype=document.createElement(\"div\");
    document.getElementById('addtype').appendChild(nbtype);
    var ligne1 = document.createElement('input');
    ligne1.setAttribute('type', 'hidden');
    ligne1.setAttribute(\"value\", typ);
    ligne1.setAttribute(\"name\", \"nbtype\");
    nbtype.appendChild(ligne1);
}
function addText(){
    var input = document.getElementById('inputTask').value;
    var input1 = document.getElementById('inputTask1').value;
    var input2 = document.getElementById('inputTask2').value;
    var input3 = document.getElementById('inputTask3').value;
    var input4 = document.getElementById('inputTask4').value;
    var input5 = document.getElementById('inputTask5').value;
    if(input != \"\" && input1 != \"\"&&input2!=\"\"&&input3!=\"\"&&input4!=\"\")
    {
    var nodenom=document.createElement(\"div\");
    nodenom.setAttribute('id', 'contentP'+row);
    document.getElementById('addTask').appendChild(nodenom);

    var nom = document.createElement('input');
    nom.setAttribute('type', 'text');
    nom.setAttribute(\"value\", input);
    nom.setAttribute(\"name\",\"subnom\"+row);
    nom.setAttribute(\"class\",\"input-field-square\");
    nodenom.appendChild(nom);
    var montant = document.createElement('input');
    montant.setAttribute('type', 'text');
    montant.setAttribute(\"value\", input1);
    montant.setAttribute(\"class\",\"input-field-square\");
    montant.setAttribute(\"name\",\"submontant\"+row);
    nodenom.appendChild(montant);
    var nbrplace = document.createElement('input');
    nbrplace.setAttribute('type', 'number');
    nbrplace.setAttribute(\"value\", input2);
    nbrplace.setAttribute(\"class\",\"input-field-square\");
    nbrplace.setAttribute(\"name\",\"subnbrplace\"+row);
    nodenom.appendChild(nbrplace);
    var jour = document.createElement('input');
    jour.setAttribute('type', 'date');
    jour.setAttribute(\"placeholder\", \"joindre image\");
    jour.setAttribute(\"class\",\"input-field-square\");
    jour.setAttribute(\"name\",\"subjour\"+row);
    nodenom.appendChild(jour);
    var description = document.createElement('textarea');
    //description.setAttribute(\"value\", input4);
    description.value=input4;
    description.setAttribute(\"class\",\"input-field-square\");
    description.setAttribute(\"name\",\"subdescription\"+row);
    nodenom.appendChild(description);
    var image = document.createElement('input');
    image.setAttribute('type', 'file');
    image.setAttribute(\"value\", input5);
    image.setAttribute(\"class\",\"input-field-square\");
    image.setAttribute(\"name\",\"subimg\"+row);
    nodenom.appendChild(image);
    var etat = document.createElement('input');
    etat.setAttribute('type', 'button');
    etat.setAttribute(\"value\", \"supprimer\");
    etat.setAttribute(\"style\", \"margin-bottom: 20px;\");
    etat.setAttribute(\"id\",\"content\"+row);
    etat.setAttribute(\"class\",\"submit-form-btn\");
    etat.setAttribute(\"onClick\", \"deleterow(\"+ row +\");\");
    nodenom.appendChild(etat);
        row++;
    }
    else
    {
        alert(\"Please insert a value!\");
    }

}
function deleterow(ID)
{
    document.getElementById('contentP'+ID).remove();
}

function addtype(){
    var input1 = document.getElementById('inputtype1').value;
    var input2 = document.getElementById('inputtype2').value;
    var input3 = document.getElementById('inputtype3').value;
    if(input1 != \"\" && input2 != \"\")
    {
    var nodetype=document.createElement(\"div\");
    nodetype.setAttribute('id', 'typeP'+typ);
    document.getElementById('addtype').appendChild(nodetype);

    var nom = document.createElement('input');
    nom.setAttribute('type', 'text');
    nom.setAttribute(\"value\", input1);
    nom.setAttribute(\"name\",\"typenom\"+typ);
    nom.setAttribute(\"class\",\"input-field-square\");
    nodetype.appendChild(nom);
    var montant = document.createElement('input');
    montant.setAttribute('type', 'text');
    montant.setAttribute(\"value\", input2);
    montant.setAttribute(\"class\",\"input-field-square\");
    montant.setAttribute(\"name\",\"typemontant\"+typ);
    nodetype.appendChild(montant);
    var image = document.createElement('input');
    image.setAttribute('type', 'file');
    image.setAttribute(\"value\", input3);
    image.setAttribute(\"class\",\"input-field-square\");
    image.setAttribute(\"name\",\"typeimg\"+ typ);
    nodetype.appendChild(image);
    var etat = document.createElement('input');
    etat.setAttribute('type', 'button');
    etat.setAttribute(\"value\", \"supprimer\");
    etat.setAttribute(\"style\", \"margin-bottom: 20px;\");
    etat.setAttribute(\"id\",\"content\"+typ);
    etat.setAttribute(\"class\",\"submit-form-btn\");
    etat.setAttribute(\"onClick\", \"deletetype(\"+ typ +\");\");
    nodetype.appendChild(etat);
        typ++;
    }
    else
    {
        alert(\"Please insert a value!\");
    }

}
function deletetype(ID)
{
    document.getElementById('typeP'+ID).remove();
}
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master1/plugins/event/event/components/eventform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 332,  294 => 234,  288 => 232,  286 => 231,  112 => 59,  108 => 58,  104 => 56,  100 => 55,  58 => 15,  55 => 14,  49 => 12,  47 => 11,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"card my-5\" style=\"width:100%;\">
          <div class=\"card-body\" style=\"background-color:#7d5fff\">
            <h3 style=\"color:white;\">Create Event</h3>
          </div>
          <div class=\"card-body\">
            <div class=\"col-md-12\">
                <form class=\"contact-from-wrapper\" data-request=\"onSave\" data-request-files data-request-flash data-request-validate>
                        {% if user %}
                        <input type=\"hidden\" name=\"user\" value=\" {{ user.id }}\">
                    {% else %}
                    {% endif %}
                    <div class=\"form-element square\">
                        <label>Title
                            <span>**</span>
                        </label>
                        <input type=\"text\" name=\"nom\" value=\"\" placeholder=\"Enter Title...\" class=\"input-field-square\">
                    </div>
                    <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                            <div class=\"fileinput-new thumbnail\">
                                <img src=\"\" alt=\"\" />
                            </div>
                            <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"width: 250px;\"> </div>
                            <p><strong>[images will be resized to 730X440]</strong></p>
                            <div>
                                <span class=\"btn btn-success btn-file\">
                                    <span class=\"fileinput-new\"> Choose Display Image </span>
                                    <span class=\"fileinput-exists\"> Change </span>
                                    <input type=\"file\" name=\"img\">
                                </span>
                                <a href=\"javascript:;\" class=\"btn red fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                            </div>
                                                    </div>
                     <div class=\"form-element square\">
                        <label>Lieu
                            <span>**</span>
                        </label>
                        <input type=\"text\" name=\"lieu\" value=\"\" placeholder=\"Entrer le Lieu...\" class=\"input-field-square\">
                    </div>
                    <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultUnchecked\" name=\"gratuit\">
                        <label class=\"custom-control-label\" for=\"defaultUnchecked\">Gratuit</label>
                    
                    </div>
                    <div class=\"custom-control custom-checkbox\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultUncheck\" name=\"code\">
                            <label class=\"custom-control-label\" for=\"defaultUncheck\">Generer un code promo</label>
                        
                        </div>
                    <div class=\"row\">
                      
                      <div class=\"col-md-4\">
                            {%partial 'typeevent/type'%}
                      </div>
                      <div class=\"col-md-4\">
                        {%partial 'categorieevent/category'%}
                  </div>
                      <div class=\"col-md-4\">
                            <div class=\"form-element square\">
                                <label>Date de l'évènement
                                </label>
                                <input type=\"date\" name=\"date_event\" value=\"\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                              </div>
                          </div>
                        </div>
                        <div class=\"row\">
                       <div class=\"col-md-4\">
                        <div class=\"form-element square\">
                            <label>Date de cloture des ventes
                            </label>
                            <input type=\"date\" name=\"date_cloture\" value=\"\" placeholder=\"mm/dd/yyyy\" class=\"input-field-square\">
                         </div>
                      </div>
                      <div class=\"col-md-4\" id=\"pi\">
                      
                      </div>
                     
                       <div class=\"col-md-12\">
                        <div class=\"form-element square\">
                            <label>Nombre de ticket
                            </label>
                            <input type=\"number\" name=\"nbrticket\" value=\"\" placeholder=\"Enter minimum number of persons...\" class=\"input-field-square\">
                        </div>
                      </div>                                                
                        <div class=\"col-md-12\">
                        <div class=\"row\">
                                <div class=\"col-md-4\">
                                        <div class=\"form-element square\">
                                            <label>Nom du type de ticket
                                            </label>
                                            <input type=\"text\"  value=\"\" placeholder=\"Entrer le nom du type...\" class=\"input-field-square\" id=\"inputtype1\">
                                        </div>
                                 </div> 
                                <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                        <label>Montant du ticket
                                            
                                        </label>
                                        <input type=\"text\"  value=\"\" placeholder=\"Enter per person price...\" class=\"input-field-square\" id=\"inputtype2\">
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                        <input type='button' onclick='addtype()' value='Ajoutez'  class=\"submit-form-btn\"
                                        style=\"margin-bottom: 20px;\"/>
                                    </div>
                                </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                    <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                                            <div class=\"fileinput-new thumbnail\">
                                                <img src=\"\" alt=\"\" />
                                            </div>
                                            <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"width: 250px;\"> </div>
                                            <p><strong>[images will be resized to 730X440]</strong></p>
                                            <div>
                                                <span class=\"btn btn-success btn-file\">
                                                    <span class=\"fileinput-new\"> ajouter image du ticket  </span>
                                                    <span class=\"fileinput-exists\"> Change </span>
                                                    <input type=\"file\" name=\"typeimg\"  id=\"inputtype3\">
                                                </span>
                                                <a href=\"javascript:;\" class=\"btn red fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                                            </div>
                                                                    </div>
                            </div>
                        </div>
                        <div class=\"row col-md-8\" id=\"addtype\">

                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                    <div class=\"form-element square\">
                                    <label>
                                        Ajouter un sous évènement
                                     </label>
                                     </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                            <label>Nom
                                            </label>
                                            <input type=\"text\"  value=\"\" placeholder=\"Nom\" class=\"input-field-square\"  id='inputTask'>
                                        </div>
                            </div>
                            <div class=\"col-md-4\">
                                    <div class=\"form-element square\">
                                            <label>Montant
                                            </label>
                                            <input type=\"text\"  value=\"\" placeholder=\"Nom\" class=\"input-field-square\"  id='inputTask1'>
                                        </div>
                            </div>
                            
                        </div>
                        <div class=\"row\">
                                <div class=\"col-md-4\">
                                        <div class=\"form-element square\">
                                                <label>Nombre de place
                                                </label>
                                                <input type=\"number\"  value=\"\" placeholder=\"Nom\" class=\"input-field-square\" id='inputTask2'>
                                            </div>
                                </div>
                                <div class=\"col-md-4\">
                                        <div class=\"form-element square\">
                                                <label>Jour
                                                </label>
                                                <input type=\"date\"  value=\"\" placeholder=\"Nom\" class=\"input-field-square\" id='inputTask3'>
                                            </div>
                                </div>
                        </div>
                                <div class=\"row\">
                                        <div class=\"col-md-4\">
                                                <div class=\"form-element square\">
                                                        <label>Description
                                                        </label>
                                                        <textarea  name=\"description\" rows=\"8\" cols=\"50\" class=\"input-field-square\" id='inputTask4'></textarea>
                                                    </div>
                                        </div>
                                        <div class=\"col-md-8\">
                                                <div class=\"form-element square\" data-provides=\"fileinput\">
                                                        <div class=\"fileinput-new thumbnail\">
                                                            <img src=\"\" alt=\"\" />
                                                        </div>
                                                        <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"width: 250px;\"> </div>
                                                        <p><strong>[images will be resized to 730X440]</strong></p>
                                                        <div>
                                                            <span class=\"btn btn-success btn-file\">
                                                                <span class=\"fileinput-new\"> Choose Display Image </span>
                                                                <span class=\"fileinput-exists\"> Change </span>
                                                                <input type=\"file\" name=\"subimg\" id='inputTask5'>
                                                            </span>
                                                            <a href=\"javascript:;\" class=\"btn red fileinput-exists\" data-dismiss=\"fileinput\"> Remove </a>
                                                        </div>
                                                                                </div>
                                        </div>
                                </div>
                            <div class=\"form-element square\">
                                <input type='button' onclick='addText()' value='Ajoutez'  class=\"submit-form-btn\"
                                style=\"margin-bottom: 20px;\"/>
                            </div>
                        </div>
                        <div id=\"addTask\" class=\"col-md-4\">
    \t
                        </div>
                    
                    </div>
                    <div class=\"form-element square\">
                        <label>
                          Description
                          <span>**</span>
                        </label>
                        <textarea id=\"overview\" name=\"description\" rows=\"12\" cols=\"80\" class=\"input-field-square\"></textarea>
                                                </div>
                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"submit-form-btn\" onclick='nbsub()' data-attach-loading>Envoyer</button>
                    </div>
                   
    <div class=\"alert alert-danger\" data-validate-error>
            <p data-message></p>
                </form>
            </div>
          </div>
        </div>

    </div>
</div>
{% flash success %}
<p>{{ message }}</p>
{% endflash %}
       <!-- login and register modal start-->
<div class=\"login-registration-modal\" id=\"loginRegModal\">
    <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
        <div class=\"modal\" tabindex=\"-1\" id=\"login-modal\" role=\"dialog\"><!-- #login modal-->
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\"><!-- modal content start -->
                   
                    <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                        <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                            <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                <form id=\"userLoginForm\">
                                    <input type=\"hidden\" name=\"_token\" value=\"5ifU7niyjh0byubCovg0kvgPryLEh51pgOvWgabI\">
                                    <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le nom de la categorie
                                        </label>
                                        <input name=\"username\" type=\"text\" placeholder=\"nom de la categorie....\" class=\"input-field-square\">
                                        <p class=\"eml\"></p>
                                    </div><!-- form element login end -->
                                  <!-- form element login end -->
                                    <button type=\"submit\" class=\"submit-form-btn\">OK</button>
                                </form>
                            </div><!-- login form wrapper end -->
                        </div>
                    </div><!-- /.tab conent-->
                </div><!-- modal content end -->
            </div>
        </div><!-- /#loginmodal -->
    </div><!-- login modal warapper satart end-->
</div>
<div class=\"login-registration-modal\" id=\"eventRegModal\">
    <div class=\"login-modal-wrapper\"><!-- login modal warapper satart start-->
        <div class=\"modal\" tabindex=\"-1\" id=\"create_event\" role=\"dialog\"><!-- #login modal-->
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\"><!-- modal content start -->
                   
                    <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                        <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                            <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                                <form id=\"sous_event_Form\" data-request=\"onSave1\">
                                    <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le nom du sous évènement
                                        </label>
                                        <input name=\"nom1\" type=\"text\" placeholder=\"nom de la categorie....\" class=\"input-field-square\">
                                        <p class=\"eml\"></p>
                                    </div>
                                     <div class=\"form-element square login\"><!-- form element login start -->
                                        <label>Enter le montant 
                                        </label>
                                        <input name=\"montant1\" type=\"text\" placeholder=\"montant de la categorie....\" class=\"input-field-square\">
                                        <p class=\"eml\"></p>
                                    </div><!-- form element login end -->
                                  <!-- form element login end -->
                                    <button type=\"submit\" class=\"submit-form-btn\">Créer</button>
                                </form>
                            </div><!-- login form wrapper end -->
                        </div>
                    </div><!-- /.tab conent-->
                </div><!-- modal content end -->
            </div>
        </div><!-- /#loginmodal -->
    </div><!-- login modal warapper satart end-->
</div>
<div class=\"modal\" tabindex=\"-1\" id=\"autre-modal\" role=\"dialog\"><!-- #login modal-->
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\"><!-- modal content start -->
           
            <div class=\"tab-content\" id=\"nav-tabContent\"><!-- tab content-->
                <div class=\"tab-pane fade show active\" id=\"nav-login\" role=\"tabpanel\" aria-labelledby=\"nav-login-tab\">
                    <div class=\"login-form-wrapper\"><!-- login form wrapper start -->
                        <form id=\"userLoginForm\"  data-request=\"onType\">
                            <div class=\"form-element square login\"><!-- form element login start -->
                                <label>Enter le nom de la categorie
                                </label>
                                <input name=\"type\" type=\"text\" placeholder=\"nom de la categorie....\" class=\"input-field-square\">
                                <p class=\"eml\"></p>
                            </div><!-- form element login end -->
                          <!-- form element login end -->
                            <button type=\"submit\" class=\"submit-form-btn\">ajouter</button>
                        </form>
                    </div><!-- login form wrapper end -->
                </div>
            </div><!-- /.tab conent-->
        </div><!-- modal content end -->
    </div>
</div><!-- /#loginmodal -->
<script>
    
doThisOnChange = function( value, optionIndex)
{
    if ( optionIndex != null )
    {
       var option = document.getElementById( \"sel1\" ).options[optionIndex];
       option.selected = true;
       value = option.value;
    }
   // alert( \"Do something with the value: \" + value );
}

    function edition() { options = \"Width=700,Height=700\" ; window.open( \"{{ 'ticket'|page}}\", \"edition\", options ) ; }
     var row = 1;
     var typ=1;
function nbsub(){
    var nb=document.createElement(\"div\");
    document.getElementById('addTask').appendChild(nb);
    var ligne = document.createElement('input');
    ligne.setAttribute('type', 'hidden');
    ligne.setAttribute(\"value\", row);
    ligne.setAttribute(\"name\", \"nbsub\");
    nb.appendChild(ligne);

    var nbtype=document.createElement(\"div\");
    document.getElementById('addtype').appendChild(nbtype);
    var ligne1 = document.createElement('input');
    ligne1.setAttribute('type', 'hidden');
    ligne1.setAttribute(\"value\", typ);
    ligne1.setAttribute(\"name\", \"nbtype\");
    nbtype.appendChild(ligne1);
}
function addText(){
    var input = document.getElementById('inputTask').value;
    var input1 = document.getElementById('inputTask1').value;
    var input2 = document.getElementById('inputTask2').value;
    var input3 = document.getElementById('inputTask3').value;
    var input4 = document.getElementById('inputTask4').value;
    var input5 = document.getElementById('inputTask5').value;
    if(input != \"\" && input1 != \"\"&&input2!=\"\"&&input3!=\"\"&&input4!=\"\")
    {
    var nodenom=document.createElement(\"div\");
    nodenom.setAttribute('id', 'contentP'+row);
    document.getElementById('addTask').appendChild(nodenom);

    var nom = document.createElement('input');
    nom.setAttribute('type', 'text');
    nom.setAttribute(\"value\", input);
    nom.setAttribute(\"name\",\"subnom\"+row);
    nom.setAttribute(\"class\",\"input-field-square\");
    nodenom.appendChild(nom);
    var montant = document.createElement('input');
    montant.setAttribute('type', 'text');
    montant.setAttribute(\"value\", input1);
    montant.setAttribute(\"class\",\"input-field-square\");
    montant.setAttribute(\"name\",\"submontant\"+row);
    nodenom.appendChild(montant);
    var nbrplace = document.createElement('input');
    nbrplace.setAttribute('type', 'number');
    nbrplace.setAttribute(\"value\", input2);
    nbrplace.setAttribute(\"class\",\"input-field-square\");
    nbrplace.setAttribute(\"name\",\"subnbrplace\"+row);
    nodenom.appendChild(nbrplace);
    var jour = document.createElement('input');
    jour.setAttribute('type', 'date');
    jour.setAttribute(\"placeholder\", \"joindre image\");
    jour.setAttribute(\"class\",\"input-field-square\");
    jour.setAttribute(\"name\",\"subjour\"+row);
    nodenom.appendChild(jour);
    var description = document.createElement('textarea');
    //description.setAttribute(\"value\", input4);
    description.value=input4;
    description.setAttribute(\"class\",\"input-field-square\");
    description.setAttribute(\"name\",\"subdescription\"+row);
    nodenom.appendChild(description);
    var image = document.createElement('input');
    image.setAttribute('type', 'file');
    image.setAttribute(\"value\", input5);
    image.setAttribute(\"class\",\"input-field-square\");
    image.setAttribute(\"name\",\"subimg\"+row);
    nodenom.appendChild(image);
    var etat = document.createElement('input');
    etat.setAttribute('type', 'button');
    etat.setAttribute(\"value\", \"supprimer\");
    etat.setAttribute(\"style\", \"margin-bottom: 20px;\");
    etat.setAttribute(\"id\",\"content\"+row);
    etat.setAttribute(\"class\",\"submit-form-btn\");
    etat.setAttribute(\"onClick\", \"deleterow(\"+ row +\");\");
    nodenom.appendChild(etat);
        row++;
    }
    else
    {
        alert(\"Please insert a value!\");
    }

}
function deleterow(ID)
{
    document.getElementById('contentP'+ID).remove();
}

function addtype(){
    var input1 = document.getElementById('inputtype1').value;
    var input2 = document.getElementById('inputtype2').value;
    var input3 = document.getElementById('inputtype3').value;
    if(input1 != \"\" && input2 != \"\")
    {
    var nodetype=document.createElement(\"div\");
    nodetype.setAttribute('id', 'typeP'+typ);
    document.getElementById('addtype').appendChild(nodetype);

    var nom = document.createElement('input');
    nom.setAttribute('type', 'text');
    nom.setAttribute(\"value\", input1);
    nom.setAttribute(\"name\",\"typenom\"+typ);
    nom.setAttribute(\"class\",\"input-field-square\");
    nodetype.appendChild(nom);
    var montant = document.createElement('input');
    montant.setAttribute('type', 'text');
    montant.setAttribute(\"value\", input2);
    montant.setAttribute(\"class\",\"input-field-square\");
    montant.setAttribute(\"name\",\"typemontant\"+typ);
    nodetype.appendChild(montant);
    var image = document.createElement('input');
    image.setAttribute('type', 'file');
    image.setAttribute(\"value\", input3);
    image.setAttribute(\"class\",\"input-field-square\");
    image.setAttribute(\"name\",\"typeimg\"+ typ);
    nodetype.appendChild(image);
    var etat = document.createElement('input');
    etat.setAttribute('type', 'button');
    etat.setAttribute(\"value\", \"supprimer\");
    etat.setAttribute(\"style\", \"margin-bottom: 20px;\");
    etat.setAttribute(\"id\",\"content\"+typ);
    etat.setAttribute(\"class\",\"submit-form-btn\");
    etat.setAttribute(\"onClick\", \"deletetype(\"+ typ +\");\");
    nodetype.appendChild(etat);
        typ++;
    }
    else
    {
        alert(\"Please insert a value!\");
    }

}
function deletetype(ID)
{
    document.getElementById('typeP'+ID).remove();
}
</script>", "C:\\wamp64\\www\\install-master1/plugins/event/event/components/eventform/default.htm", "");
    }
}
