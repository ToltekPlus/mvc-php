<?php

namespace Core;

class View {
    /**
     * Рендерим страницу
     *
     * @param string $view
     * @param array $args
     * @throws \Exception
     */
    public static function render(string $view, array $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = dirname(__DIR__) . "/app/views/$view";

        if (is_readable($file)) {
            require $file;
        }else {
            throw new \Exception("$file не найден");
        }
    }
}