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

/* themes/custom/riverside/templates/content/node--program.html.twig */
class __TwigTemplate_3b5d2eceff77c09563aa707497049c37 extends Template
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
        yield "<article class=\"program-detail\">
<div class=\"program-detail__breadcrumb\">
  <a href=\"/programs\">Programs</a>
  <span>/</span>

  ";
        // line 6
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_category", [], "any", false, false, true, 6), "entity", [], "any", false, false, true, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "    <a href=\"/programs/";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_category", [], "any", false, false, true, 7), "entity", [], "any", false, false, true, 7), "id", [], "any", false, false, true, 7), "html", null, true);
            yield "\">
      ";
            // line 8
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_category", [], "any", false, false, true, 8), "entity", [], "any", false, false, true, 8), "label", [], "any", false, false, true, 8), "html", null, true);
            yield "
    </a>
    <span>/</span>
  ";
        }
        // line 12
        yield "
  <span>";
        // line 13
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
            if (\array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
            if (\array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
            }
        }
        yield "</span>
</div>

  <div class=\"program-detail__tag\">
    ";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_category", [], "any", false, false, true, 17), "html", null, true);
        yield "
  </div>

  <h1 class=\"program-detail__title\">";
        // line 20
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
            if (\array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
            if (\array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
            }
        }
        yield "</h1>

  <p class=\"program-detail__summary\">
    ";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_summary", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23), "html", null, true);
        yield "
  </p>

  <div class=\"program-detail__layout\">
    <div class=\"program-detail__main\">
      <div class=\"program-detail__image\">
        ";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 29), "html", null, true);
        yield "
      </div>

      <section class=\"program-detail__section\">
        <h2>About this class</h2>
        ";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_description", [], "any", false, false, true, 34), "value", [], "any", false, false, true, 34));
        yield "
      </section>

      ";
        // line 37
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_what_you_ll_learn", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "        <section class=\"program-detail__section\">
          <h2>What you'll learn</h2>
          ";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_what_you_ll_learn", [], "any", false, false, true, 40), "value", [], "any", false, false, true, 40));
            yield "
        </section>
      ";
        }
        // line 43
        yield "
      ";
        // line 44
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_what_s_included", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "        <section class=\"program-detail__section\">
          <h2>What's included</h2>
          ";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_what_s_included", [], "any", false, false, true, 47), "value", [], "any", false, false, true, 47));
            yield "
        </section>
      ";
        }
        // line 50
        yield "
      <section class=\"program-detail__section\">
        <h2>Your instructor</h2>

        <div class=\"program-detail__instructor\">
          <div class=\"program-detail__instructor-image\">
            ";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_instructor_image", [], "any", false, false, true, 56), "html", null, true);
        yield "
          </div>

          <div class=\"program-detail__instructor-content\">
            <strong>";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_instructor_name", [], "any", false, false, true, 60), "value", [], "any", false, false, true, 60), "html", null, true);
        yield "</strong>

            ";
        // line 62
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_instructor_title", [], "any", false, false, true, 62), "value", [], "any", false, false, true, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "              <p>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_instructor_title", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63), "html", null, true);
            yield "</p>
            ";
        }
        // line 65
        yield "
            ";
        // line 66
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_instructor_bio", [], "any", false, false, true, 66), "value", [], "any", false, false, true, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "              <div>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_instructor_bio", [], "any", false, false, true, 67), "value", [], "any", false, false, true, 67));
            yield "</div>
            ";
        }
        // line 69
        yield "          </div>
        </div>
      </section>
    </div>

    <aside class=\"program-detail__sidebar\">
      <h2>\$";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_standard_price", [], "any", false, false, true, 75), "value", [], "any", false, false, true, 75), "html", null, true);
        yield "</h2>

      <p class=\"program-detail__member-price\">
        member price \$";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_member_price", [], "any", false, false, true, 78), "value", [], "any", false, false, true, 78), "html", null, true);
        yield "
      </p>

      <dl>
        <dt>Level</dt>
        <dd>";
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_level", [], "any", false, false, true, 83), "value", [], "any", false, false, true, 83), "html", null, true);
        yield "</dd>

        <dt>Schedule</dt>
        <dd>";
        // line 86
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_schedule", [], "any", false, false, true, 86), "value", [], "any", false, false, true, 86), "html", null, true);
        yield "</dd>

        <dt>Dates</dt>
        <dd>";
        // line 89
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dates", [], "any", false, false, true, 89), "value", [], "any", false, false, true, 89), "html", null, true);
        yield "</dd>

        <dt>Sessions</dt>
        <dd>";
        // line 92
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_sessions", [], "any", false, false, true, 92), "value", [], "any", false, false, true, 92), "html", null, true);
        yield " classes</dd>

        <dt>Class size</dt>
        <dd>";
        // line 95
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_class_size", [], "any", false, false, true, 95), "value", [], "any", false, false, true, 95), "html", null, true);
        yield " students max</dd>

        <dt>Location</dt>
        <dd>";
        // line 98
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_location", [], "any", false, false, true, 98), "value", [], "any", false, false, true, 98), "html", null, true);
        yield "</dd>
      </dl>

      <a href=\"#\" class=\"program-detail__button\">
        Register
      </a>

      <a href=\"#\" class=\"program-detail__wishlist\">
        Add to wishlist
      </a>

      <p class=\"program-detail__note\">
        Free cancellation up to 7 days before the first class.
      </p>
    </aside>
  </div>

  <section class=\"program-detail__related\">
    <h2>More ";
        // line 116
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_category", [], "any", false, false, true, 116), "entity", [], "any", false, false, true, 116), "label", [], "any", false, false, true, 116), "html", null, true);
        yield " programs</h2>
    ";
        // line 117
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("related_programs", "block_1", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_category", [], "any", false, false, true, 117), "target_id", [], "any", false, false, true, 117), CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "method", false, false, true, 117)), "html", null, true);
        yield "
  </section>

</article>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "label", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/riverside/templates/content/node--program.html.twig";
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
        return array (  281 => 117,  277 => 116,  256 => 98,  250 => 95,  244 => 92,  238 => 89,  232 => 86,  226 => 83,  218 => 78,  212 => 75,  204 => 69,  198 => 67,  196 => 66,  193 => 65,  187 => 63,  185 => 62,  180 => 60,  173 => 56,  165 => 50,  159 => 47,  155 => 45,  153 => 44,  150 => 43,  144 => 40,  140 => 38,  138 => 37,  132 => 34,  124 => 29,  115 => 23,  95 => 20,  89 => 17,  68 => 13,  65 => 12,  58 => 8,  53 => 7,  51 => 6,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/riverside/templates/content/node--program.html.twig", "/var/www/html/web/themes/custom/riverside/templates/content/node--program.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 6];
        static $filters = ["escape" => 7, "raw" => 34];
        static $functions = ["drupal_view" => 117];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
                ['drupal_view'],
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
