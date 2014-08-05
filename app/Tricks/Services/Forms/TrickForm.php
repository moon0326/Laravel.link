<?php

namespace Tricks\Services\Forms;

class TrickForm extends AbstractForm
{
    /**
     * The validation rules to validate the input data against.
     *
     * @var array
     */
    protected $rules = [
        'title'      => 'required|min:4|unique:tricks,title',
        'link'       => 'required|min:4',
        'tags'       => 'required',
        'categories' => 'required',
    ];

    /**
     * Get the prepared input data.
     *
     * @return array
     */
    public function getInputData()
    {
        return array_only($this->inputData, [
            'title', 'link', 'tags', 'categories'
        ]);
    }
}
