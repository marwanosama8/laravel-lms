<?php

namespace App\Http\Resources;

use App\Models\Grade;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'age' => $this->age,
            'grade_id' => Grade::find($this->grade_id)->name ?? 'none',
            'code' => $this->code,
            'school' => $this->school_name,
        ];
    }
}
