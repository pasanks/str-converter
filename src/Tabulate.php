<?php

namespace Pasanks\StrConverter;

use Closure;
use Throwable;

class Tabulate
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

        try {
            $file = fopen('output.csv', 'w');

            foreach ([$value] as $line) {
                fputcsv($file, $line);
            }

            fclose($file);

            $value = 'CSV created!';
        } catch (Throwable $e) {
            $value = $e->getMessage();
        }

        if (! is_null($callback)) {
            $callback($value);
        }

        return $value;
    }
}
