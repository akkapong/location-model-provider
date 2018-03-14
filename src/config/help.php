<?php

return [
        'method_list' => ['getLocationList', 'getLocationDetail', 'createLocation', 'updateLocation', 'deleteLocation'],
        //Location
        'getLocationList' => [
            'params' => [
                'ref_type'  => 'not required',
                'ref_id'    => 'not required',
                'distance'  => 'required',
                'latitude'  => 'required',
                'longitude' => 'required',
            ],
            'output' => [
                [
                    'attributes.ref_type'   => 'Reference Type',
                    'attributes.ref_id'     => 'Reference ID',
                    'attributes.location'   => 'Coordinated',
                    'attributes.created_at' => 'Create date time',
                    'attributes.updated_at' => 'Update date time',
                    'attributes.latitude'   => 'Latitude',
                    'attributes.longitude'  => 'Longitude',
                    'attributes.distance'   => 'Distance',
                    'id'                    => 'Location ID',
                ]
            ]
        ],
        'getLocationDetail' => [
            'params' => [
                'id' => 'required',
            ],
            'output' => [
                'attributes.ref_type'   => 'Reference Type',
                'attributes.ref_id'     => 'Reference ID',
                'attributes.location'   => 'Coordinated',
                'attributes.created_at' => 'Create date time',
                'attributes.updated_at' => 'Update date time',
                'id'                    => 'Location ID',
            ]
        ],
        'createLocation' => [
            'params' => [
                'ref_type'  => 'required',
                'ref_id'    => 'required',
                'latitude'  => 'required',
                'longitude' => 'required',
            ],
            'output' => [
                'attributes.ref_type'   => 'Reference Type',
                'attributes.ref_id'     => 'Reference ID',
                'attributes.location'   => 'Coordinated',
                'attributes.created_at' => 'Create date time',
                'attributes.updated_at' => 'Update date time',
                'id'                    => 'Location ID',
            ]
        ],
        'updateLocation' => [
            'params' => [
                'id'        => 'required',
                'ref_type'  => 'not required',
                'ref_id'    => 'not required',
                'latitude'  => 'not required',
                'longitude' => 'not required',
            ],
            'output' => [
                'attributes.ref_type'   => 'Reference Type',
                'attributes.ref_id'     => 'Reference ID',
                'attributes.location'   => 'Coordinated',
                'attributes.created_at' => 'Create date time',
                'attributes.updated_at' => 'Update date time',
                'id'                    => 'Location ID',
            ]
        ],
        'deleteLocation' => [
            'params' => [
                'id'       => 'required'
            ],
            'output' => [
                'attributes.ref_type'   => 'Reference Type',
                'attributes.ref_id'     => 'Reference ID',
                'attributes.location'   => 'Coordinated',
                'attributes.created_at' => 'Create date time',
                'attributes.updated_at' => 'Update date time',
                'id'                    => 'Location ID',
            ]
        ],
        'configs' => [
            'location' => [
                'url'    => 'http://ms-location-api.develop/',
                'list'   => 'locations',
                'detail' => 'locations/[id]',
                'create' => 'locations',
                'update' => 'locations/[id]',
                'delete' => 'locations/[id]',
            ],
        ]
    ];