<?php

/* themes/bootstrap_subtheme/templates/page.html.twig */
class __TwigTemplate_98aee97404373acd07289cbb51d31f6d582ae05b6d8054514abdc007f26c5551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'advertise' => array($this, 'block_advertise'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'newsrow_one_top_first' => array($this, 'block_newsrow_one_top_first'),
            'newsrow_one_top_second' => array($this, 'block_newsrow_one_top_second'),
            'newsrow_one_top_third' => array($this, 'block_newsrow_one_top_third'),
            'newsrow_one_fourth' => array($this, 'block_newsrow_one_fourth'),
            'advertise_second' => array($this, 'block_advertise_second'),
            'newsrow_two_first' => array($this, 'block_newsrow_two_first'),
            'newsrow_two_second_top' => array($this, 'block_newsrow_two_second_top'),
            'newsrow_two_third' => array($this, 'block_newsrow_two_third'),
            'newsrow_three_first' => array($this, 'block_newsrow_three_first'),
            'newsrow_three_second' => array($this, 'block_newsrow_three_second'),
            'newsrow_three_third' => array($this, 'block_newsrow_three_third'),
            'newsrow_four_first' => array($this, 'block_newsrow_four_first'),
            'newsrow_four_second' => array($this, 'block_newsrow_four_second'),
            'newsrow_five_first' => array($this, 'block_newsrow_five_first'),
            'newsrow_five_second' => array($this, 'block_newsrow_five_second'),
            'footer_first' => array($this, 'block_footer_first'),
            'footer_second' => array($this, 'block_footer_second'),
            'footer_third' => array($this, 'block_footer_third'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 69, "if" => 71, "block" => 72);
        $filters = array("clean_class" => 77, "t" => 86);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 59
        echo "
<div class=\"main-container\">
    <div class=\"row\">
 
        <div class=\"col-sm-12 logo_custom\">
 
        </div> 
    </div>\t
</div>

";
        // line 69
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 71
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 72
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 103
        echo "
";
        // line 105
        $this->displayBlock('main', $context, $blocks);
        // line 346
        echo "

<div class=\"main-container bg\">
\t<div class=\"container\">
\t\t<div class=\"row footer-area\">
\t\t";
        // line 351
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
            // line 352
            echo "\t\t  ";
            $this->displayBlock('footer_first', $context, $blocks);
            // line 357
            echo "\t\t";
        }
        // line 358
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
            // line 359
            echo "\t\t  ";
            $this->displayBlock('footer_second', $context, $blocks);
            // line 364
            echo "\t\t";
        }
        // line 365
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
            // line 366
            echo "\t\t  ";
            $this->displayBlock('footer_third', $context, $blocks);
            // line 371
            echo "\t\t";
        }
        // line 372
        echo "\t\t</div>
\t</div>
</div>
<div class=\"main-container\" style=\"background-color:#0D0D0D;\">
\t<div class=\"container\">
\t\t<p style=\"color:#fefcef; padding-top:10px; padding-bottom:10px;\">© ২০১৬ সর্বস্বত্ব স্বত্বাধিকার সংরক্ষিত </p>
\t</div>
</div>

";
        // line 381
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 382
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 388
        echo "
";
    }

    // line 72
    public function block_navbar($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        // line 74
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 76
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 77
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 80
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      <div class=\"navbar-header\">
        ";
        // line 82
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 84
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 85
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">";
            // line 86
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 92
        echo "      </div>

      ";
        // line 95
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 96
            echo "        <div class=\"navbar-collapse collapse\">
          ";
            // line 97
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 100
        echo "    </header>
  ";
    }

    // line 105
    public function block_main($context, array $blocks = array())
    {
        // line 106
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">
\t\t
      ";
        // line 110
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 111
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 116
            echo "      ";
        }
        // line 117
        echo "\t  
\t   ";
        // line 119
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise", array())) {
            // line 120
            echo "        ";
            $this->displayBlock('advertise', $context, $blocks);
            // line 125
            echo "      ";
        }
        // line 126
        echo "
      ";
        // line 128
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 129
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 134
            echo "      ";
        }
        // line 135
        echo "
      ";
        // line 137
        echo "      ";
        // line 138
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 139
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 140
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 141
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 142
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 145
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 148
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 149
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 152
            echo "        ";
        }
        // line 153
        echo "
        ";
        // line 155
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 156
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 159
            echo "        ";
        }
        // line 160
        echo "
        ";
        // line 162
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 163
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 166
            echo "        ";
        }
        // line 167
        echo "
        ";
        // line 169
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 170
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 173
            echo "        ";
        }
        // line 174
        echo "
        ";
        // line 176
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 180
        echo "      </section>

      ";
        // line 183
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 184
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 189
            echo "      ";
        }
        // line 190
        echo "    </div>
\t
\t<div class=\"row\">
\t  ";
        // line 194
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_first", array())) {
            // line 195
            echo "        ";
            $this->displayBlock('newsrow_one_top_first', $context, $blocks);
            // line 200
            echo "      ";
        }
        echo "\t

\t\t";
        // line 203
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_second", array())) {
            // line 204
            echo "        ";
            $this->displayBlock('newsrow_one_top_second', $context, $blocks);
            // line 209
            echo "      ";
        }
        // line 210
        echo "\t  
\t  ";
        // line 212
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_third", array())) {
            // line 213
            echo "        ";
            $this->displayBlock('newsrow_one_top_third', $context, $blocks);
            // line 218
            echo "      ";
        }
        // line 219
        echo "\t  
\t  ";
        // line 221
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_fourth", array())) {
            // line 222
            echo "        ";
            $this->displayBlock('newsrow_one_fourth', $context, $blocks);
            // line 227
            echo "      ";
        }
        // line 228
        echo "\t</div>
\t
\t<div class=\"row\">
\t    ";
        // line 232
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise_second", array())) {
            // line 233
            echo "        ";
            $this->displayBlock('advertise_second', $context, $blocks);
            // line 238
            echo "      ";
        }
        // line 239
        echo "\t</div>
\t<div class=\"row\">
\t";
        // line 242
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_first", array())) {
            // line 243
            echo "        ";
            $this->displayBlock('newsrow_two_first', $context, $blocks);
            // line 248
            echo "      ";
        }
        // line 249
        echo "\t  
\t  ";
        // line 251
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_second_top", array())) {
            // line 252
            echo "        ";
            $this->displayBlock('newsrow_two_second_top', $context, $blocks);
            // line 258
            echo "      ";
        }
        // line 259
        echo "\t  
\t  
\t  ";
        // line 262
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_third", array())) {
            // line 263
            echo "        ";
            $this->displayBlock('newsrow_two_third', $context, $blocks);
            // line 268
            echo "      ";
        }
        // line 269
        echo "\t</div>
\t
\t<div class=\"row\">
\t
\t";
        // line 274
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_first", array())) {
            // line 275
            echo "        ";
            $this->displayBlock('newsrow_three_first', $context, $blocks);
            // line 280
            echo "      ";
        }
        // line 281
        echo "\t  
\t";
        // line 283
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_second", array())) {
            // line 284
            echo "        ";
            $this->displayBlock('newsrow_three_second', $context, $blocks);
            // line 289
            echo "      ";
        }
        // line 290
        echo "\t    
\t";
        // line 292
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_third", array())) {
            // line 293
            echo "        ";
            $this->displayBlock('newsrow_three_third', $context, $blocks);
            // line 298
            echo "      ";
        }
        // line 299
        echo "\t
\t</div>
\t
\t<div class=\"row\">\t
\t";
        // line 304
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_four_first", array())) {
            // line 305
            echo "        ";
            $this->displayBlock('newsrow_four_first', $context, $blocks);
            // line 310
            echo "      ";
        }
        // line 311
        echo "\t  
\t";
        // line 313
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_four_second", array())) {
            // line 314
            echo "        ";
            $this->displayBlock('newsrow_four_second', $context, $blocks);
            // line 319
            echo "      ";
        }
        // line 320
        echo "\t  
\t</div>
\t
\t<div class=\"row\">\t
\t";
        // line 325
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_five_first", array())) {
            // line 326
            echo "        ";
            $this->displayBlock('newsrow_five_first', $context, $blocks);
            // line 331
            echo "      ";
        }
        // line 332
        echo "\t  
\t";
        // line 334
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_five_second", array())) {
            // line 335
            echo "        ";
            $this->displayBlock('newsrow_five_second', $context, $blocks);
            // line 340
            echo "      ";
        }
        // line 341
        echo "\t  
\t</div>
\t
  </div>
";
    }

    // line 111
    public function block_header($context, array $blocks = array())
    {
        // line 112
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 113
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 120
    public function block_advertise($context, array $blocks = array())
    {
        // line 121
        echo "          <div class=\"col-sm-12 advertise-style\">
            ";
        // line 122
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 129
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 130
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 131
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 149
    public function block_highlighted($context, array $blocks = array())
    {
        // line 150
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 156
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 157
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 163
    public function block_action_links($context, array $blocks = array())
    {
        // line 164
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 170
    public function block_help($context, array $blocks = array())
    {
        // line 171
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 176
    public function block_content($context, array $blocks = array())
    {
        // line 177
        echo "          <a id=\"main-content\"></a>
          ";
        // line 178
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 184
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 185
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 186
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 195
    public function block_newsrow_one_top_first($context, array $blocks = array())
    {
        // line 196
        echo "          <aside class=\"col-sm-3\" >
            ";
        // line 197
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 204
    public function block_newsrow_one_top_second($context, array $blocks = array())
    {
        // line 205
        echo "          <aside class=\"col-sm-3\" >
            ";
        // line 206
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 213
    public function block_newsrow_one_top_third($context, array $blocks = array())
    {
        // line 214
        echo "          <aside class=\"col-sm-3\" >
            ";
        // line 215
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_top_third", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 222
    public function block_newsrow_one_fourth($context, array $blocks = array())
    {
        // line 223
        echo "          <aside class=\"col-sm-3\" >
            ";
        // line 224
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_one_fourth", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 233
    public function block_advertise_second($context, array $blocks = array())
    {
        // line 234
        echo "          <div class=\"col-sm-12 advertise-style\">
            ";
        // line 235
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "advertise_second", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 243
    public function block_newsrow_two_first($context, array $blocks = array())
    {
        // line 244
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 245
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 252
    public function block_newsrow_two_second_top($context, array $blocks = array())
    {
        // line 253
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 254
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_second_top", array()), "html", null, true));
        echo "
\t\t\t";
        // line 255
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_second_bottom", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 263
    public function block_newsrow_two_third($context, array $blocks = array())
    {
        // line 264
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 265
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_two_third", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 275
    public function block_newsrow_three_first($context, array $blocks = array())
    {
        // line 276
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 277
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 284
    public function block_newsrow_three_second($context, array $blocks = array())
    {
        // line 285
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 286
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 293
    public function block_newsrow_three_third($context, array $blocks = array())
    {
        // line 294
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 295
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_three_third", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 305
    public function block_newsrow_four_first($context, array $blocks = array())
    {
        // line 306
        echo "          <aside class=\"col-sm-4\" >
            ";
        // line 307
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_four_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 314
    public function block_newsrow_four_second($context, array $blocks = array())
    {
        // line 315
        echo "          <aside class=\"col-sm-8\" >
            ";
        // line 316
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_four_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 326
    public function block_newsrow_five_first($context, array $blocks = array())
    {
        // line 327
        echo "          <aside class=\"col-sm-6\" >
            ";
        // line 328
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_five_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 335
    public function block_newsrow_five_second($context, array $blocks = array())
    {
        // line 336
        echo "          <aside class=\"col-sm-6\" >
            ";
        // line 337
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "newsrow_five_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 352
    public function block_footer_first($context, array $blocks = array())
    {
        // line 353
        echo "\t\t\t<aside class=\"col-sm-4     \" >
\t\t\t\t";
        // line 354
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
        echo "
\t\t\t  </aside>
\t\t  ";
    }

    // line 359
    public function block_footer_second($context, array $blocks = array())
    {
        // line 360
        echo "\t\t\t<aside class=\"col-sm-4     \" >
\t\t\t\t";
        // line 361
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
        echo "
\t\t\t  </aside>
\t\t  ";
    }

    // line 366
    public function block_footer_third($context, array $blocks = array())
    {
        // line 367
        echo "\t\t\t<aside class=\"col-sm-4     \" >
\t\t\t\t";
        // line 368
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
        echo "
\t\t\t  </aside>
\t\t  ";
    }

    // line 382
    public function block_footer($context, array $blocks = array())
    {
        // line 383
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 384
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_subtheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  885 => 384,  880 => 383,  877 => 382,  870 => 368,  867 => 367,  864 => 366,  857 => 361,  854 => 360,  851 => 359,  844 => 354,  841 => 353,  838 => 352,  831 => 337,  828 => 336,  825 => 335,  818 => 328,  815 => 327,  812 => 326,  805 => 316,  802 => 315,  799 => 314,  792 => 307,  789 => 306,  786 => 305,  779 => 295,  776 => 294,  773 => 293,  766 => 286,  763 => 285,  760 => 284,  753 => 277,  750 => 276,  747 => 275,  740 => 265,  737 => 264,  734 => 263,  727 => 255,  723 => 254,  720 => 253,  717 => 252,  710 => 245,  707 => 244,  704 => 243,  697 => 235,  694 => 234,  691 => 233,  684 => 224,  681 => 223,  678 => 222,  671 => 215,  668 => 214,  665 => 213,  658 => 206,  655 => 205,  652 => 204,  645 => 197,  642 => 196,  639 => 195,  632 => 186,  629 => 185,  626 => 184,  620 => 178,  617 => 177,  614 => 176,  607 => 171,  604 => 170,  597 => 164,  594 => 163,  587 => 157,  584 => 156,  577 => 150,  574 => 149,  567 => 131,  564 => 130,  561 => 129,  554 => 122,  551 => 121,  548 => 120,  541 => 113,  538 => 112,  535 => 111,  527 => 341,  524 => 340,  521 => 335,  518 => 334,  515 => 332,  512 => 331,  509 => 326,  506 => 325,  500 => 320,  497 => 319,  494 => 314,  491 => 313,  488 => 311,  485 => 310,  482 => 305,  479 => 304,  473 => 299,  470 => 298,  467 => 293,  464 => 292,  461 => 290,  458 => 289,  455 => 284,  452 => 283,  449 => 281,  446 => 280,  443 => 275,  440 => 274,  434 => 269,  431 => 268,  428 => 263,  425 => 262,  421 => 259,  418 => 258,  415 => 252,  412 => 251,  409 => 249,  406 => 248,  403 => 243,  400 => 242,  396 => 239,  393 => 238,  390 => 233,  387 => 232,  382 => 228,  379 => 227,  376 => 222,  373 => 221,  370 => 219,  367 => 218,  364 => 213,  361 => 212,  358 => 210,  355 => 209,  352 => 204,  349 => 203,  343 => 200,  340 => 195,  337 => 194,  332 => 190,  329 => 189,  326 => 184,  323 => 183,  319 => 180,  316 => 176,  313 => 174,  310 => 173,  307 => 170,  304 => 169,  301 => 167,  298 => 166,  295 => 163,  292 => 162,  289 => 160,  286 => 159,  283 => 156,  280 => 155,  277 => 153,  274 => 152,  271 => 149,  268 => 148,  262 => 145,  260 => 142,  259 => 141,  258 => 140,  257 => 139,  256 => 138,  254 => 137,  251 => 135,  248 => 134,  245 => 129,  242 => 128,  239 => 126,  236 => 125,  233 => 120,  230 => 119,  227 => 117,  224 => 116,  221 => 111,  218 => 110,  211 => 106,  208 => 105,  203 => 100,  197 => 97,  194 => 96,  191 => 95,  187 => 92,  178 => 86,  175 => 85,  172 => 84,  168 => 82,  162 => 80,  160 => 77,  159 => 76,  158 => 74,  156 => 73,  153 => 72,  148 => 388,  144 => 382,  142 => 381,  131 => 372,  128 => 371,  125 => 366,  122 => 365,  119 => 364,  116 => 359,  113 => 358,  110 => 357,  107 => 352,  105 => 351,  98 => 346,  96 => 105,  93 => 103,  89 => 72,  87 => 71,  85 => 69,  73 => 59,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the navigation region.*/
/*  * - page.navigation_collapsible: Items for the navigation (collapsible) region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* */
/* <div class="main-container">*/
/*     <div class="row">*/
/*  */
/*         <div class="col-sm-12 logo_custom">*/
/*  */
/*         </div> */
/*     </div>	*/
/* </div>*/
/* */
/* {% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}*/
/* {# Navbar #}*/
/* {% if page.navigation or page.navigation_collapsible %}*/
/*   {% block navbar %}*/
/*     {%*/
/*       set navbar_classes = [*/
/*         'navbar',*/
/*         theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',*/
/*         theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,*/
/*       ]*/
/*     %}*/
/*     <header{{ navbar_attributes.addClass(navbar_classes) }} id="navbar" role="banner">*/
/*       <div class="navbar-header">*/
/*         {{ page.navigation }}*/
/*         {# .btn-navbar is used as the toggle for collapsed navbar content #}*/
/*         {% if page.navigation_collapsible %}*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*             <span class="sr-only">{{ 'Toggle navigation'|t }}</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       {# Navigation (collapsible) #}*/
/*       {% if page.navigation_collapsible %}*/
/*         <div class="navbar-collapse collapse">*/
/*           {{ page.navigation_collapsible }}*/
/*         </div>*/
/*       {% endif %}*/
/*     </header>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* {# Main #}*/
/* {% block main %}*/
/*   <div role="main" class="main-container {{ container }} js-quickedit-main-content">*/
/*     <div class="row">*/
/* 		*/
/*       {# Header #}*/
/*       {% if page.header %}*/
/*         {% block header %}*/
/*           <div class="col-sm-12" role="heading">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	   {# Advertise #}*/
/*       {% if page.advertise %}*/
/*         {% block advertise %}*/
/*           <div class="col-sm-12 advertise-style">*/
/*             {{ page.advertise }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Sidebar First #}*/
/*       {% if page.sidebar_first %}*/
/*         {% block sidebar_first %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Content #}*/
/*       {%*/
/*         set content_classes = [*/
/*           page.sidebar_first and page.sidebar_second ? 'col-sm-6',*/
/*           page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',*/
/*           page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',*/
/*           page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'*/
/*         ]*/
/*       %}*/
/*       <section{{ content_attributes.addClass(content_classes) }}>*/
/* */
/*         {# Highlighted #}*/
/*         {% if page.highlighted %}*/
/*           {% block highlighted %}*/
/*             <div class="highlighted">{{ page.highlighted }}</div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Breadcrumbs #}*/
/*         {% if breadcrumb %}*/
/*           {% block breadcrumb %}*/
/*             {{ breadcrumb }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Action Links #}*/
/*         {% if action_links %}*/
/*           {% block action_links %}*/
/*             <ul class="action-links">{{ action_links }}</ul>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Help #}*/
/*         {% if page.help %}*/
/*           {% block help %}*/
/*             {{ page.help }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Content #}*/
/*         {% block content %}*/
/*           <a id="main-content"></a>*/
/*           {{ page.content }}*/
/*         {% endblock %}*/
/*       </section>*/
/* */
/*       {# Sidebar Second #}*/
/*       {% if page.sidebar_second %}*/
/*         {% block sidebar_second %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/*     </div>*/
/* 	*/
/* 	<div class="row">*/
/* 	  {# newsrow_one_top_first #}*/
/*       {% if page.newsrow_one_top_first %}*/
/*         {% block newsrow_one_top_first %}*/
/*           <aside class="col-sm-3" >*/
/*             {{ page.newsrow_one_top_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}	*/
/* */
/* 		{# newsrow_one_top_second #}*/
/*       {% if page.newsrow_one_top_second %}*/
/*         {% block newsrow_one_top_second %}*/
/*           <aside class="col-sm-3" >*/
/*             {{ page.newsrow_one_top_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	  {# newsrow_one_top_third #}*/
/*       {% if page.newsrow_one_top_third %}*/
/*         {% block newsrow_one_top_third %}*/
/*           <aside class="col-sm-3" >*/
/*             {{ page.newsrow_one_top_third }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	  {# newsrow_one_fourth #}*/
/*       {% if page.newsrow_one_fourth %}*/
/*         {% block newsrow_one_fourth %}*/
/*           <aside class="col-sm-3" >*/
/*             {{ page.newsrow_one_fourth }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	</div>*/
/* 	*/
/* 	<div class="row">*/
/* 	    {# Advertise second #}*/
/*       {% if page.advertise_second %}*/
/*         {% block advertise_second %}*/
/*           <div class="col-sm-12 advertise-style">*/
/*             {{ page.advertise_second }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	</div>*/
/* 	<div class="row">*/
/* 	{# newsrow_two_first #}*/
/*       {% if page.newsrow_two_first %}*/
/*         {% block newsrow_two_first %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_two_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	  {# newsrow_two_second #}*/
/*       {% if page.newsrow_two_second_top %}*/
/*         {% block newsrow_two_second_top %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_two_second_top }}*/
/* 			{{ page.newsrow_two_second_bottom }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	  */
/* 	  {# newsrow_two_third #}*/
/*       {% if page.newsrow_two_third %}*/
/*         {% block newsrow_two_third %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_two_third }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	</div>*/
/* 	*/
/* 	<div class="row">*/
/* 	*/
/* 	{# newsrow_three_first #}*/
/*       {% if page.newsrow_three_first %}*/
/*         {% block newsrow_three_first %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_three_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	{# newsrow_three_second #}*/
/*       {% if page.newsrow_three_second %}*/
/*         {% block newsrow_three_second %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_three_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	    */
/* 	{# newsrow_three_third #}*/
/*       {% if page.newsrow_three_third %}*/
/*         {% block newsrow_three_third %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_three_third }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	*/
/* 	</div>*/
/* 	*/
/* 	<div class="row">	*/
/* 	{# newsrow_four_first #}*/
/*       {% if page.newsrow_four_first %}*/
/*         {% block newsrow_four_first %}*/
/*           <aside class="col-sm-4" >*/
/*             {{ page.newsrow_four_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	{# newsrow_four_second #}*/
/*       {% if page.newsrow_four_second %}*/
/*         {% block newsrow_four_second %}*/
/*           <aside class="col-sm-8" >*/
/*             {{ page.newsrow_four_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	</div>*/
/* 	*/
/* 	<div class="row">	*/
/* 	{# newsrow_five_first #}*/
/*       {% if page.newsrow_five_first %}*/
/*         {% block newsrow_five_first %}*/
/*           <aside class="col-sm-6" >*/
/*             {{ page.newsrow_five_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	{# newsrow_five_second #}*/
/*       {% if page.newsrow_five_second %}*/
/*         {% block newsrow_five_second %}*/
/*           <aside class="col-sm-6" >*/
/*             {{ page.newsrow_five_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	  */
/* 	</div>*/
/* 	*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* */
/* <div class="main-container bg">*/
/* 	<div class="container">*/
/* 		<div class="row footer-area">*/
/* 		{% if page.footer_first %}*/
/* 		  {% block footer_first %}*/
/* 			<aside class="col-sm-4     " >*/
/* 				{{ page.footer_first }}*/
/* 			  </aside>*/
/* 		  {% endblock %}*/
/* 		{% endif %}*/
/* 			{% if page.footer_second %}*/
/* 		  {% block footer_second %}*/
/* 			<aside class="col-sm-4     " >*/
/* 				{{ page.footer_second }}*/
/* 			  </aside>*/
/* 		  {% endblock %}*/
/* 		{% endif %}*/
/* 			{% if page.footer_third %}*/
/* 		  {% block footer_third %}*/
/* 			<aside class="col-sm-4     " >*/
/* 				{{ page.footer_third }}*/
/* 			  </aside>*/
/* 		  {% endblock %}*/
/* 		{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="main-container" style="background-color:#0D0D0D;">*/
/* 	<div class="container">*/
/* 		<p style="color:#fefcef; padding-top:10px; padding-bottom:10px;">© ২০১৬ সর্বস্বত্ব স্বত্বাধিকার সংরক্ষিত </p>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% if page.footer %}*/
/*   {% block footer %}*/
/*     <footer class="footer {{ container }}" role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* */
