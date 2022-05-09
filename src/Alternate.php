<?php

namespace Pasanks\StrConverter;

use Closure;
use Illuminate\Support\Str;

class Alternate
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
        $value = str_split($value);

        $results = [];
        $carry = false;

        foreach ($value as $character) {
            if ($carry === true) {
                $results[] = Str::upper($character);

                $carry = false;
            } else {
                $results[] = Str::lower($character);

                $carry = true;
            }
        }

        $value = join('', $results);

        if (! is_null($callback)) {
            $callback($value);
        }

        return $value;
    }
}
