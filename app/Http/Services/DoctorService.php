<?php

namespace App\Http\Services;

use App\Http\Services\Core\BaseService;

class DoctorService extends BaseService {

    public function getDoctors() {
        return $this->model->get();
    }

}
