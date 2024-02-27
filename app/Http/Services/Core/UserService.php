<?php

namespace App\Http\Services\Core;

class UserService  extends BaseService {

    public function enableOrDisableUser() {
        $this->model->update([
            'disabled' => $this->getAttribute('disable')
        ]);
        return $this;
    }
}
