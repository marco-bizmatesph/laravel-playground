<?php

namespace App\Services\Support;

interface UpdateInterface
{
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return mixed
     */
    public function update($id);
}
