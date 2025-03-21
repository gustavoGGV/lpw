<?php

$carro1 = array("modelo" => "SF-25", "marca" => "Ferrari", "foto" => "https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2025%2F02%2F20%2Fferrari-sf-25-formula-1-car-info-001.jpg?q=90&w=1400&cbr=1&fit=max");
$carro2 = array("modelo" => "MCL39", "marca" => "McLaren", "foto" => "https://imgs.search.brave.com/9NCfQ_tA4AUbuVUtzxnXNVYzvdUOcNiTL4c1KG3SjKM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tY2xh/cmVuLmJsb29tcmVh/Y2guaW8vY2RuLWNn/aS9pbWFnZS9mb3Jt/YXQ9d2VicCxxdWFs/aXR5PTgwL2RlbGl2/ZXJ5L3Jlc291cmNl/cy9jb250ZW50L2dh/bGxlcnkvbWNsYXJl/bi1yYWNpbmcvZm9y/bXVsYS0xLzIwMjUv/bnNyL2YxLTc1LWxp/dmUtbS93ZWIvbWNs/MzktY292ZXItaW1h/Z2UuanBn");
$carro3 = array("modelo" => "RB21", "marca" => "Red Bull", "foto" => "https://imgs.search.brave.com/kchIleSmdNjWJT17rp9Tb9kZmpqL5ENPScQ-eXltSSg/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9iYW5k/c3BvcnRzLnVvbC5j/b20uYnIvd3AtY29u/dGVudC91cGxvYWRz/LzIwMjUvMDIvUmVk/QnVsbC1SQjIxLTc1/MHgzNzUuanBn");
$carro4 = array("modelo" => "F1 W16", "marca" => "Mercedes", "foto" => "https://imgs.search.brave.com/CtvsU0cC4vh15MO2f79Hmu_WxPynf1pCo1UJGWYa9_A/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4t/OS5tb3RvcnNwb3J0/LmNvbS9pbWFnZXMv/YW1wLzZ4RVJwbjQw/L3MxMDAwL21lcmNl/ZGVzLWYxLXcxNi5q/cGc");
$carro5 = array("modelo" => "C45", "marca" => "Kick Sauber", "foto" => "https://imgs.search.brave.com/wYqYvUsC_F6abMEd4133rRVcy0aPH19TNaFZKhsWEwg/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMuZGF6bnNlcnZp/Y2VzLmNvbS9kaS9s/aWJyYXJ5L0RBWk5f/TmV3cy9kNC84Mi9j/NDUtc3Rha2UtdGVh/bS1raWNrLXNhdWJl/ci1mMV94eXU4MDZp/N3oxbnoxa3hiNzhq/a2ppbHZ5LmpwZz90/PTUxODM0NDc1NyZ3/PTgwMCZxdWFsaXR5/PTEwMA");

$carros = array($carro1, $carro2, $carro3, $carro4, $carro5);

foreach ($carros as $c) {
    echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
    echo $c["modelo"] . "<br>";
    echo $c["marca"] . "<br>";
    echo "<img style='width: 100%; height: auto;' src='" . $c["foto"] . "' /><br>";
    echo "</div>";
}
