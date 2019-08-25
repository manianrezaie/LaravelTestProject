<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Validate the given request with the given rules.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  array $rules
     * @param  array $messages
     * @param  array $customAttributes
     * @return array
     */
    public function validate(Request $request, array $rules,
                             array $messages = [], array $customAttributes = [])
    {

        $all = $request->all();

        foreach ($request->route()->parameters() as $key => $parameter) {
            $all[$key] = $parameter;
        }

        foreach ($rules as $fieldName => $rule) {
            if (is_array($rule) And (in_array("numeric", $rule) Or in_array("integer", $rule) Or in_array("date", $rule))) {
                $all[$fieldName] = Helper::convertToEnNumber($all[$fieldName]);
            } else if ($rule == "numeric" Or $rule == "integer" Or $rule == "date") {
                $all[$fieldName] = Helper::convertToEnNumber($all[$fieldName]);
            }
        }

        return $this->getValidationFactory()
            ->make($all, $rules, $messages, $customAttributes)
            ->validate();

    }
}
