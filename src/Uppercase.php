<?php

namespace Pasanks\StrConverter;

use Closure;
use Illuminate\Support\Str;

class Uppercase
{
    /**
     * Process the given string and perform the given action if any.
     *
     * @param string        $value
     * @param \Closure|null $callback
     *
     * @return mixed
     */
    public function handle(string $value, ?Closure $callback = null)
    {
        $value = Str::upper($value);

        if (! is_null($callback)) {
            $callback($value);
        }

        return $value;
    }
}
