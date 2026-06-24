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

/* riverside:program-card */
class __TwigTemplate_fb9366d957b79ffcef3dc2e0e3e0d4fe extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.riverside--program-card"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "riverside:program-card"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "riverside:program-card"));
        yield "<article class=\"program-card\">
  <a class=\"program-card__link\" href=\"";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
        yield "\" aria-label=\"View ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 3
        if ((($tmp = ($context["image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "      <div class=\"program-card__media\">
        ";
            // line 5
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null));
            yield "
      </div>
    ";
        }
        // line 8
        yield "
    <div class=\"program-card__content\">
      ";
        // line 10
        if ((($tmp = ($context["category"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "        <div class=\"program-card__category\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && in_array("category", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "category");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "category");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["category"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && in_array("category", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "category");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "category");
                }
            }
            yield "</div>
      ";
        }
        // line 13
        yield "
      <h3 class=\"program-card__title\">";
        // line 14
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
            if (\array_key_exists("canvas_slot_ids", $context) && in_array("title", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "title");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "title");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
            if (\array_key_exists("canvas_slot_ids", $context) && in_array("title", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "title");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "title");
            }
        }
        yield "</h3>

      ";
        // line 16
        if ((($tmp = ($context["summary"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "        <p class=\"program-card__summary\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && in_array("summary", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "summary");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "summary");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["summary"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && in_array("summary", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "summary");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "summary");
                }
            }
            yield "</p>
      ";
        }
        // line 19
        yield "
      ";
        // line 20
        if ((($tmp = ($context["meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "        <p class=\"program-card__meta\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && in_array("meta", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "meta");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "meta");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["meta"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                if (\array_key_exists("canvas_slot_ids", $context) && in_array("meta", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "meta");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "meta");
                }
            }
            yield "</p>
      ";
        }
        // line 23
        yield "    </div>
  </a>
</article>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["url", "title", "image", "category", "summary", "meta"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "riverside:program-card";
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
        return array (  162 => 23,  142 => 21,  140 => 20,  137 => 19,  117 => 17,  115 => 16,  96 => 14,  93 => 13,  73 => 11,  71 => 10,  67 => 8,  61 => 5,  58 => 4,  56 => 3,  50 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "riverside:program-card", "themes/custom/riverside/components/program-card/program-card.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 3];
        static $filters = ["escape" => 2, "raw" => 5];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
                [],
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
