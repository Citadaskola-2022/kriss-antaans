<?php

namespace App\Cafe;

class Coffee
{
    protected int $volume = 100;
    public array $portions = [];

    public function __construct()
    {
        $this->volume = 100;
        $this->portions = [];
    }



    public function prepare(int $volume): void
    {
        $this->portions[] = $volume;

        if (array_sum($this->portions)> $this->volume){
            array_pop($this->portions);
        }

    }
    public function brew():void
    {
        foreach ($this->portions as $i => $portion){
            echo sprintf('%d: adding %dml portion to cup' . PHP_EOL , $i + 1, $portion);
        }
    }
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>Document</title>
<script src="https://unpkg.com/vue@3"></script>

</head>
<body>
<div id="app">
<p>
<input type="text" v-model="greeting">

</p>

<p>
{{ greeting }} ({{greeting.lenght}})
        </p>

    </div>

    <script>
Vue.creatApp({
            data() {
            reuturn {
                    greeting: 'yo '
                };
            }
        }).mount('#app');

    </script>

</body>


</html>
}