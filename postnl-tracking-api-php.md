PostNL Tracking API - PHP
================================
Use PHP to track PostNL shipments with PostNL Tracking API.

Features
--------
- Real-time PostNL tracking.
- Batch PostNL tracking.
- Other features to manage your PostNL tracking.

Installation
------------

Installation is easy:

    $ composer require trackingmore/trackingmore-sdk-php

Quick Start
----------
Get the API key:

To use this API, you need to generate your API key.

- <a href="https://admin.trackingmore.com/developer/apikey" target="_blank" rel="noreferrer">
  Click here</a> to access TrackingMore admin.

- Go to the "Developer" section.

- Click "Generate API Key".

- Give a name to your API key, and click "Save" .


Then, start to track your PostNL shipments.

Usage
----------

Create a tracking (Real-time tracking):

      require('vendor/autoload.php');

      use Trackingmore\TrackingMoreException;
      use TrackingMore\Trackings;
        
      $key = 'your api key';
      $response = null;
      $trackings = new Trackings($key);
      
      try {
        $params = ['tracking_number'=>'RE170227208NL','courier_code'=>'postnl-parcels'];
        $response = $trackings->createTracking($params);
      } catch (TrackingMoreException $e) {
        echo $e->getMessage();
      }

      print_r($response);

Create trackings (Max. 40 tracking numbers create in one call):

        require('vendor/autoload.php');

        use Trackingmore\TrackingMoreException;
        use TrackingMore\Trackings;
        
        $key = 'your api key';
        $response = null;
        $trackings = new Trackings($key);
        
        try {
            $params = [
                ['tracking_number'=>'RU993554066NL','courier_code'=>'postnl-parcels'],
                ['tracking_number'=>'AP128385825NL','courier_code'=>'postnl-parcels']
            ];
            $response = $trackings->batchCreateTrackings($params);
        } catch (TrackingMoreException $e) {
            echo $e->getMessage();
        }
        
        print_r($response);


Get status of the shipment:

    require('vendor/autoload.php');

    use Trackingmore\TrackingMoreException;
    use TrackingMore\Trackings;
    
    $key = 'your api key';
    $response = null;
    $trackings = new Trackings($key);
    
    try {
        $params = ['courier_code'=>'postnl-parcels','created_date_min'=>'2023-08-23T06:00:00+00:00','created_date_max'=>'2023-09-05T07:20:42+00:00'];
        $response = $trackings->getTrackingResults($params);
    } catch (TrackingMoreException $e) {
        echo $e->getMessage();
    }
    
    print_r($response);


Update a tracking by ID:

    require('vendor/autoload.php');

    use Trackingmore\TrackingMoreException;
    use TrackingMore\Trackings;
    
    $key = 'your api key';
    $response = null;
    $trackings = new Trackings($key);
    
    try {
        $params = ['customer_name'=>'New name','note'=>'New tests order note'];
        $idString = '9d8a3856180b591b1ceb6213419519a7';
        $response = $trackings->updateTrackingByID($idString,$params);
    } catch (TrackingMoreException $e) {
        echo $e->getMessage();
    }
    
    print_r($response);
