<?php

namespace RoleProvider;

use RoleProvider\Base;

/**
 * @SWG\Definition(definition="Author", type="object", required={"name"})
 */
class Location extends Base
{
    private $configs;
    private $serviceName = 'location';

    // $config = [
    //     'url'    => 'http://ms-user-api.develop:8001/',
    //     'login'  => 'users/login',
    //     'create' => 'users',
    // ];

    public function __construct($configs = null)
    {

        if (!empty($configs)) {
            $this->configs = $configs;
        } else {
            $this->configs = [
                'url'    => 'http://ms-location-api.develop/',
                'list'   => 'locations',
                'detail' => 'locations/[id]',
                'create' => 'locations',
                'update' => 'locations/[id]',
                'delete' => 'locations/[id]',
            ];
        }

        //set curl
        $this->setCurl($this->configs['url']);

        parent::__construct();

    }

    public function getLocationList($params)
    {
        $this->curl->get($this->configs['list'], $params);

        return $this->manageResponse($this->curl, $this->serviceName);
    }

    public function getLocationDetail($params)
    {
        //complete uri
        $uri = str_replace('[id]', $params['id'], $this->configs['detail']);

        $this->curl->get($this->configs['detail'], $params);

        return $this->manageResponse($this->curl, $this->serviceName);
    }

    public function createLocation($params)
    {
        $this->curl->post($this->configs['create'], $params);

        return $this->manageResponse($this->curl, $this->serviceName);
    }

    public function updateLocation($params)
    {
        //complete uri
        $uri = str_replace('[id]', $params['id'], $this->configs['update']);

        $this->curl->put($uri, $params, true);

        return $this->manageResponse($this->curl, $this->serviceName);
    }

    public function deleteLocation($params)
    {
        //complete uri
        $uri = str_replace('[id]', $params['id'], $this->configs['delete']);

        $this->curl->delete($uri, $params);

        return $this->manageResponse($this->curl, $this->serviceName);
    }
}
