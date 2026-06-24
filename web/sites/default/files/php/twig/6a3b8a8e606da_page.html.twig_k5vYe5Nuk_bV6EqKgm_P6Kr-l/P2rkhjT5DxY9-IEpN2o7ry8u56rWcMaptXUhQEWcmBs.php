<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/riverside/templates/content/layout/page.html.twig */
class __TwigTemplate_4c57d726726bc591043f252b3d913429 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["current_path"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>");
        // line 2
        $context["path_parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["current_path"] ?? null), "/");
        // line 3
        $context["active_category"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["path_parts"] ?? null), 2, [], "array", true, true, true, 3)) ? ((($_v0 = ($context["path_parts"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[2] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["path_parts"] ?? null), 2, [], "array", false, false, true, 3))) : (null));
        // line 4
        yield "
<header class=\"site-header\">
  <a class=\"site-logo\" href=\"/\">Riverside Commons</a>

  <button class=\"menu-toggle\" type=\"button\" aria-expanded=\"false\" aria-controls=\"site-nav\">
    Menu
  </button>

  <nav id=\"site-nav\" class=\"site-nav\" aria-label=\"Main navigation\">
    <a href=\"/programs\">Programs</a>
    <a href=\"#\">About</a>
    <a href=\"#\">Get Involved</a>
    <a href=\"#\">Events</a>
    <a href=\"#\">Contact</a>
    <a class=\"button button--dark\" href=\"#\">Donate</a>
  </nav>
</header>

<main class=\"site-main\">

  ";
        // line 24
        if ((is_string($_v1 = ($context["current_path"] ?? null)) && is_string($_v2 = "/programs") && str_starts_with($_v1, $_v2))) {
            // line 25
            yield "    <section class=\"programs-intro\">
      <h1>Programs</h1>
      <p>Classes, open studios, exhibitions, and workshops — something for every age and skill level.</p>

      <div class=\"programs-pills\">
        <a class=\"";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current_path"] ?? null) == "/programs")) ? ("is-active") : ("")));
            yield "\" href=\"/programs\">
          All programs
        </a>
        <a class=\"";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["active_category"] ?? null) == "1")) ? ("is-active") : ("")));
            yield "\" href=\"/programs/1\">
          Studio Classes
        </a>
        <a class=\"";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["active_category"] ?? null) == "2")) ? ("is-active") : ("")));
            yield "\" href=\"/programs/2\">
          Open Studios
        </a>
        <a class=\"";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["active_category"] ?? null) == "3")) ? ("is-active") : ("")));
            yield "\" href=\"/programs/3\">
          Exhibitions
        </a>
        <a class=\"";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["active_category"] ?? null) == "4")) ? ("is-active") : ("")));
            yield "\" href=\"/programs/4\">
          Youth Workshops
        </a>
      </div>
<p class=\"programs-count\">Showing ";
            // line 46
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && in_array("programs_count", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "programs_count");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "programs_count");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["programs_count"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && in_array("programs_count", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "programs_count");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "programs_count");
                }
            }
            yield " of ";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && in_array("programs_total", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "programs_total");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "programs_total");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["programs_total"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && in_array("programs_total", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "programs_total");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "programs_total");
                }
            }
            yield " programs</p>
    </section>
  ";
        }
        // line 49
        yield "
  ";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 50), "html", null, true);
        yield "

  ";
        // line 52
        if ((is_string($_v3 = ($context["current_path"] ?? null)) && is_string($_v4 = "/programs") && str_starts_with($_v3, $_v4))) {
            // line 53
            yield "    <section class=\"programs-cta\">
      <h2>Not sure where to start?</h2>
      <p>Become a member for open-studio access and member pricing on every class.</p>
      <a href=\"#\" class=\"programs-cta__button\">Become a Member</a>
    </section>
  ";
        }
        // line 59
        yield "
</main>

<footer class=\"site-footer\">
  <div>
    <strong>Riverside Commons</strong>
    <p>14 Mill Street</p>
    <p>Riverfront District</p>
    <p>Open Tue–Sun</p>
  </div>

  <div>
    <strong>Programs</strong>
    <p>Classes</p>
    <p>Open Studios</p>
    <p>Exhibitions</p>
    <p>Youth Workshops</p>
  </div>

  <div>
    <strong>About</strong>
    <p>Our story</p>
    <p>Resident artists</p>
    <p>Visit</p>
    <p>Press</p>
  </div>

  <div>
    <strong>Get Involved</strong>
    <p>Membership</p>
    <p>Donate</p>
    <p>Volunteer</p>
    <p>Contact</p>
  </div>

  <div class=\"site-footer__bottom\">
    <span>© 2026 Riverside Commons</span>
    <span>Instagram · Facebook · Newsletter</span>
  </div>
</footer>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["programs_count", "programs_total", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/riverside/templates/content/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  166 => 59,  158 => 53,  156 => 52,  151 => 50,  148 => 49,  112 => 46,  105 => 42,  99 => 39,  93 => 36,  87 => 33,  81 => 30,  74 => 25,  72 => 24,  50 => 4,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/riverside/templates/content/layout/page.html.twig", "/var/www/html/web/themes/custom/riverside/templates/content/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 24];
        static $filters = ["split" => 2, "escape" => 46];
        static $functions = ["path" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['split', 'escape'],
                ['path'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
