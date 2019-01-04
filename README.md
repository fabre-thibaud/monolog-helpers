# monolog-helpers
Monolog tools

# Gelf Context Processor

Processor to simplify Monolog context handling with Grok

```
filter {
    json {
        source => "ctxt_context"
        target => "context"
        remove_field => "ctxt_context"
    }
}
```