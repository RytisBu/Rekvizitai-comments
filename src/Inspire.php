<?php

namespace rekvizitai\comments\inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        $response = '{"id":"12"}';
        $data = json_decode($response);

        return $data->id;
    }
}
