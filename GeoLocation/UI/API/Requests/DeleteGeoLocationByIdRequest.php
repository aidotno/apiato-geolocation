<?php

namespace App\Containers\GeoLocation\UI\API\Requests;

use App\Ship\Parents\Requests\Request;


class DeleteGeoLocationByIdRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => 'delete-geolocation',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     *
     * @var  array
     */
    protected $decode = [
        'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     *
     * @var  array
     */
    protected $urlParameters = [
        'id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            // put your rules here
            // 'name' => 'required|max:255'
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        $check = $this->check([
            'hasAccess|isOwner',
        ]);
        return $check;
    }
}